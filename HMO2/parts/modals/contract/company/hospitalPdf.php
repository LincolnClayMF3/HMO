<?php


require_once '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdf_tpl.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';
require_once('mc_table2.php');

session_start();

$fetchHospital = "";
$status = $_SESSION['status'];
$frequency = $_SESSION['frequency'];


if($status == "Terminated"){
            $status = "Inactive";

            if($frequency == "None"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                                      status = '$status' ORDER By hospitalMainName ASC");

            }

            else if($frequency == "Daily"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Weekly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Monthly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Yearly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

             $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEndContract BETWEEN '$fromDate' AND '$toDate' AND status = '$status' ORDER By hospitalMainName ASC");
            }

    }

else if($status == "Active"){
            if($frequency == "None"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                                      status = '$status' ORDER By hospitalMainName ASC");

            }

            else if($frequency == "Daily"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Weekly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Monthly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Yearly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

             $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate' AND status = '$status' ORDER By hospitalMainName ASC");
            }
}

else if($status == "Expired"){
            if($frequency == "None"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                                      status = '$status' ORDER By hospitalMainName ASC");

            }

            else if($frequency == "Daily"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Weekly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Monthly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Yearly"){

            $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                                      AND status = '$status' ORDER By hospitalMainName ASC");
            }

            else if($frequency == "Specific"){
                $fromDate = $_SESSION['fromDate'];
                $toDate = $_SESSION['toDate'];

             $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate' AND status = '$status' ORDER By hospitalMainName ASC");
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
    $this->Cell(0,4,'CONTRACT SUMMARY REPORT',0,1, 'C');

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
$pdf->SetWidths(array(55,31,40,30,30));
$pdf->SetAligns(array('C','C','C','C','C'));
$pdf->SetHeights(array(10,10,10,10,10));
    $pdf->Row(array('Account Name', 'Entry Date', 'End of Contract', 'Contract Type', 'Status'));
/*$pdf->Cell(55, 10, 'Account Name',1 ,0, 'C');
$pdf->Cell(31, 10, 'Entry Date', 1,0, 'C');
$pdf->Cell(40, 10, 'End of Contract', 1,0, 'C');
$pdf->Cell(30, 10, 'Contract Type', 1,0, 'C');
$pdf->Cell(30, 10, 'Status', 1,1, 'C');*/

$pdf->SetFont('courier','',9);
//$fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           //status = 'Active' ORDER By hospitalMainName ASC");

			if(mysqli_num_rows($fetchHospital)>0)
				{
				while($row = mysqli_fetch_array($fetchHospital)){
                    $contractname = $row['hospitalMainName'];
                    $status = $row['status'];
                    $convertDateEntry = date("M jS, Y", strtotime($row[9]));
                    if($row[10] == "Open Ended Contract"){
                        $convertDateEnd = "Open Ended Contract";
                    }
                    else{
                        $convertDateEnd = date("M jS, Y", strtotime($row[10]));
                    }


				/*$pdf->Cell(55, 10, $contractname,1 ,0, 'C');
		        $pdf->Cell(31, 10, $convertDateEntry, 1,0, 'C');
		        $pdf->Cell(40, 10, $convertDateEnd,1 ,0, 'C');
		        $pdf->Cell(30, 10, "Hospital", 1,0, 'C');
		        $pdf->Cell(30, 10, $status, 1,0, 'C');
		        $pdf->Ln(10);*/
                $pdf->SetWidths(array(55,31,40,30,30));
                $pdf->Row(array($contractname, $convertDateEntry, $convertDateEnd, 'Hospital', $status));
		        $total++;
		    	}
				}


$pdf->Cell(0,7, '',0 ,1);

$pdf->SetFont('courier','B',10);
//$pdf->Cell(0, 5, "Total Amount: ".$qb->pricecurrency($row[8])."", 0,1,'R');
//$pdf->Cell(0, 5, "Discount Entire Sales by:".$qb->pricecurrency($row[7])."", 0,1,'R');
$pdf->Cell(0,0, '',1 ,1, 'R');
$pdf->Cell(157, 10, 'Total No. of Contract(s):', 0, 0, 'R');
$pdf->Cell(23, 10, "$total", 0, 1, 'C');
//$pdf->Cell(0, 5, "Amount Due: ".$qb->pricecurrency(($row[8] - $row[7]))."", 0,1,'R');

// Prepared by:
$pdf->Cell(0,20, '',0 ,1,'C');
$pdf->SetFont('courier','',10);
//$pdf->Cell(50,4, $_SESSION['FirstName'] . " ".$_SESSION['LastName'],0 ,1,'C');
$pdf->Cell(50,0, '',1 ,1, 'L');
$pdf->Cell(50,4 , 'Prepared By:',0 ,0, 'C');
$pdf->Output();




?>
