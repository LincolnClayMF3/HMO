<?php


require_once '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdf_tpl.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';
require_once('mc_table2.php');

session_start();

$payment = "";
$total = "";
$totalpayment = 0;
$frequency = $_SESSION['frequency'];


if($frequency == "None"){

            $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory");

            $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory");
                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }

            else if($frequency == "Daily"){

            $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)");

            $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }

            else if($frequency == "Weekly"){

            $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");

            $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }


            else if($frequency == "Monthly"){

            $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");

            $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }

            else if($frequency == "Yearly"){

            $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");

            $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

             $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate BETWEEN '$fromDate' AND '$toDate'");

             $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as totalPayment FROM tblpaymenthistory
                     WHERE paymentDate BETWEEN '$fromDate' AND '$toDate'");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }
            }


$total = 0;
$date = date('Y-m-d');

class PDF extends PDF_MC_TABLE

   {

// Page header
function Header()
{
    $this->SetMargins(15,25);
    $this->Image('C:\xampp\htdocs\HMO2\dist\img\logo.png', 160,15,40,'R');
    $this->SetFont('courier','',11);
    $this->Ln(10);
    $this->Cell(0,4,'Contract and Claims Management',0,1,'L');
    $this->Cell(0,4,'with Collections Monitoring System',0,1,'L');
   // $this->Cell(80);
    $this->Cell(20,4,'Sta. Mesa,Manila',0,1,'L');
    $this->Cell(20,4,'hmo@gmail.com',0,1,'L');
    $this->Cell(20,4,'(0918)#######',0,1,'L');
    $this->Cell(20,4,'',0,1,'L');

    $this->SetFont('courier','B',14);
    //$this->Cell(80);
    $this->Ln(5);
    $this->Cell(0,4,'COLLECTION SUMMARY REPORT',0,1, 'C');

    $frequency = $_SESSION['frequency'];
    if($frequency == "Specific"){
        $fromDate = $_SESSION['fromDate'];
        $toDate = $_SESSION['toDate'];
        $this->SetFont('courier','I',10);
        $convertDatefrom = date("M jS, Y", strtotime($fromDate));
        $convertDateto = date("M jS, Y", strtotime($toDate));
        $this->Cell(0,5,'(As of ' .$convertDatefrom .' to ' .$convertDateto .')',0,1,'C');
    }
    else if($frequency == "None"){
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(All Records)',0,1,'C');
    }
    else if($frequency == "Daily"){
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(As of Today)',0,1,'C');
    }
    else if($frequency == "Weekly"){
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(As of This Week)',0,1,'C');
    }
    else if($frequency == "Monthly"){
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(As of This Month)',0,1,'C');
    }
    else if($frequency == "Yearly"){
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(As of This Year)',0,1,'C');
    }


    // Move to the right
    //$this->Cell(80);
    // Title
    $this->Ln(10);
}

    // Line break
    //$this->Ln(20);


// Page footer
function Footer()
{

    $this->SetY(-15);
    // courier italic 8
    $this->SetFont('courier','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

    $couriertamp = time();
    $this->SetX(110);
    date_default_timezone_set('Asia/Manila');
    $this->Cell(0,10,'Date Printed: ' . date("Y/m/d h:i:s A ",$couriertamp), 0,0,'R');
    $this->Ln(30);

}
}



// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage("P","Letter");
$pdf->SetMargins(15,20);

$pdf->SetFont('courier','B',12);
$couriertamp = time();
date_default_timezone_set('Asia/Manila');
$pdf->Cell(0, 10,'Date: ' . date("M jS, Y"),0 ,0);
$pdf->Ln(5);


$pdf->SetFont('courier','B',10);
$pdf->Cell(0, 10, '', 0,1,'R');
//header TABLE
$pdf->SetWidths(array(33,60,45,48));
$pdf->SetAligns(array('C','C','R','R'));
    $pdf->Row(array('Date', 'Member Name', 'Amount Paid', 'Remaining Balance'));

$pdf->SetFont('courier','',9);
            //$payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
              //       WHERE paymentDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)");

            if(mysqli_num_rows($payment)>0)
                {
                while($row = mysqli_fetch_array($payment)){
                $membername = $row['paymentMemberName'];
                $paymentAmountPaid = 'P '.number_format($row['paymentAmountPaid'],2);
                $paymentBalance = 'P '.number_format($row['paymentBalance'],2);
                $convertDate = date("M jS, Y", strtotime("$row[1]"));

                /*$pdf->Cell(33, 10, $convertDate ,1 ,0, 'C');
                $pdf->Cell(60, 10, $paymentDate ,1 ,0, 'C');
                $pdf->Cell(45, 10, 'P ' .$paymentAmountPaid ,1 ,0, 'R');
                $pdf->Cell(48, 10, 'P ' .$paymentBalance ,1 ,0, 'R');
                $pdf->Ln(10);*/
                $pdf->SetWidths(array(33,60,45,48));
                $pdf->Row(array($convertDate, $membername, $paymentAmountPaid, $paymentBalance));
                $total++;
                }
                }


$pdf->Cell(0,7, '',0 ,1);

$pdf->SetFont('courier','B',10);
//$pdf->Cell(0, 5, "Total Amount: ".$qb->pricecurrency($row[8])."", 0,1,'R');
//$pdf->Cell(0, 5, "Discount Entire Sales by:".$qb->pricecurrency($row[7])."", 0,1,'R');
$pdf->Cell(0,0, '',1 ,1, 'R');
$pdf->Cell(138, 10, 'Total Amount Paid:',0, 0, 'R');

$pdf->Cell(48, 10, 'P '.number_format($totalPayment,2), 0, 1, 'R');
//$pdf->Cell(0, 5, "Amount Due: ".$qb->pricecurrency(($row[8] - $row[7]))."", 0,1,'R');

// Prepared by:
$pdf->Cell(0,20, '',0 ,1,'C');
$pdf->SetFont('courier','',10);
//$pdf->Cell(50,4, $_SESSION['FirstName'] . " ".$_SESSION['LastName'],0 ,1,'C');
$pdf->Cell(50,0, '',1 ,1, 'L');
$pdf->Cell(50,4 , 'Prepared By:',0 ,0, 'C');
$pdf->Output();




?>
