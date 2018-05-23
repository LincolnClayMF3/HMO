<?php


require_once '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdf_tpl.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';
require_once('mc_table2.php');
session_start();

$fetchPatient = "";
$total = "";
$totalpayment = 0;
$status = $_SESSION['status'];
$frequency = $_SESSION['frequency'];


if($status == "Disapproved"){
            $status = "Disapproved";

        if($frequency == "None"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Daily"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Weekly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Monthly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Yearly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

                $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

    }

else if($status == "Approved"){

            if($frequency == "None"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Daily"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Weekly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Monthly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Yearly"){

            $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

                $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = '$status' ORDER By reimbursementPatientName ASC");

            $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as totalPayment FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = '$status' ORDER By reimbursementPatientName ASC");

                    while ($row = mysqli_fetch_array($total)) {
                        $totalPayment = $row['totalPayment'];
                     }

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
    $this->Cell(0,4,'CLAIMS SUMMARY REPORT',0,1, 'C');

    // courier bold 15
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
$pdf->SetMargins(10,20);

$pdf->SetFont('courier','B',12);
$couriertamp = time();
date_default_timezone_set('Asia/Manila');
$pdf->Cell(0, 10,'Date: ' . date("M jS, Y"),0 ,0);
$pdf->Ln(5);

$pdf->SetFont('courier','B',10);
$pdf->Cell(0, 10, '', 0,1,'R');
//header TABLE
$pdf->SetWidths(array(50,35,29,25,30,27));
$pdf->SetAligns(array('C','C','C','C','R','C'));
$pdf->SetHeights(array(10,10,10,10,10,10,10));
$pdf->Row(array('Claimant Name', 'Treatment Date', 'Date Filed', 'Claim Type', 'Amount Due', 'Status'));
/*$pdf->Cell(50, 10, 'Claimant Name',1 ,0, 'C');
$pdf->Cell(35, 10, 'Treatment Date', 1,0, 'C');
$pdf->Cell(29, 10, 'Date Filed', 1,0, 'C');
$pdf->Cell(25, 10, 'Claim Type', 1,0, 'C');
$pdf->Cell(30, 10, 'Amount Paid', 1,0, 'C');
$pdf->Cell(27, 10, 'Status', 1,1, 'C');*/

$pdf->SetFont('courier','',9);
//$fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
               //WHERE status = 'Active' ORDER By memberTransName ASC");

            if(mysqli_num_rows($fetchPatient)>0)
                {
                while($row = mysqli_fetch_array($fetchPatient)){
                $claimPatientName =$row['reimbursementPatientName'];
                $patientAmount = 'P ' .number_format($row['reimbursementAmount'],2);
                $convertDateFiled = date("M jS, Y", strtotime($row['reimbursementDate']));
                $convertDate = date("M jS, Y", strtotime($row['reimbursementTreatment']));

                /*$pdf->Cell(50, 10, "$row[1]",1 ,0, 'C');
                $pdf->Cell(35, 10, $convertDate, 1,0, 'C');
                $pdf->Cell(29, 10, $convertDateFiled, 1,0, 'C');
                $pdf->Cell(25, 10, "Patient",1 ,0, 'C');
                $pdf->Cell(30, 10, 'P ' .number_format($row[7],2) , 1,0, 'R');
                $pdf->Cell(27, 10, "$row[9]", 1,0, 'C');*/
                $pdf->SetWidths(array(50,35,29,25,30,27));
                $pdf->Row(array($claimPatientName, $convertDate, $convertDateFiled, 'Patient' , $patientAmount, $status));
                $total++;
                }
                }

$pdf->Cell(0,7, '',0 ,1);

$pdf->SetFont('courier','B',10);
$pdf->Cell(0,0, '',1 ,1, 'R');
$pdf->Cell(155, 10, 'Total Amount Paid:', 0, 0, 'R');
$pdf->Cell(40, 10, 'P '.number_format($totalPayment,2), 0, 1, 'R');

// Prepared by:
$pdf->Cell(0,20, '',0 ,1,'C');
$pdf->SetFont('courier','',10);
//$pdf->Cell(50,4, $_SESSION['FirstName'] . " ".$_SESSION['LastName'],0 ,1,'C');
$pdf->Cell(50,0, '',1 ,1, 'L');
$pdf->Cell(50,4 , 'Prepared By:',0 ,0, 'C');
$pdf->Output();


?>
