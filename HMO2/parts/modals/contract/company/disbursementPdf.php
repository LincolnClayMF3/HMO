<?php


require_once '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdf_tpl.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';
require_once('mc_table2.php');
session_start();

$payment = "";
$total = "";
$totalPayment = $_SESSION['totalDisburse'];
$status = $_SESSION['status'];
$claimType = $_SESSION['claimType'];
$result = "";

if($status == "Disapproved"){

    if($claimType == "Patient"){
        $result =  mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'");


    }
    else if($claimType == "Doctor"){
        $result = mysqli_query($con, "SELECT d1.claimid, d1.claimDoctorName, d1.claimDate, d1.status, p1.patientName, p1.patientServices, p1.patientAmount FROM tbldoctorclaim d1 INNER JOIN tbldoctorpatientclaim d2 ON d1.claimID = d2.intClaimID INNER JOIN tbldoctorpatient p1 ON p1.patientID = d2.intPatientID
                         WHERE d1.status = '$status' ORDER By d1.claimDoctorName ASC");

    }

}

if($status == "Approved"){

    if($claimType == "Patient"){
        $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'");

    }
    else if($claimType == "Doctor"){
        $result = mysqli_query($con, "SELECT d1.claimid, d1.claimDoctorName, d1.claimDate, d1.status, p1.patientName, p1.patientServices, p1.patientAmount FROM tbldoctorclaim d1 INNER JOIN tbldoctorpatientclaim d2 ON d1.claimID = d2.intClaimID INNER JOIN tbldoctorpatient p1 ON p1.patientID = d2.intPatientID
                         WHERE d1.status = '$status' ORDER By d1.claimDoctorName ASC");

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
    $this->Ln(5);
    $this->Cell(0,4,'DISBURSEMENT SUMMARY REPORT',0,1, 'C');
        $this->SetFont('courier','I',10);
        $this->Cell(0,5,'(All Records)',0,1,'C');

    // courier bold 15
    $this->SetFont('courier','I',12);
    $this->Ln(10);
}

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
$pdf->SetWidths(array(55,30,31,40,30));
$pdf->SetAligns(array('C','C','C','R','C'));
$pdf->SetHeights(array(10,10,10,10,10));
$pdf->Row(array('Claimant Name', 'Claim Type', 'Date Filed', 'Request Amount', 'Status'));
/*$pdf->Cell(55, 10, 'Claimant Name',1 ,0, 'C');
$pdf->Cell(30, 10, 'Claim Type', 1,0, 'C');
$pdf->Cell(31, 10, 'Date Filed', 1,0, 'C');
$pdf->Cell(40, 10, 'Request Amount', 1,0, 'C');
$pdf->Cell(30, 10, 'Status', 1,1, 'C');*/



$pdf->SetFont('courier','',9);
            if($claimType == "Patient"){
    			       if(mysqli_num_rows($result) > 0)
    				{
    				while($row = mysqli_fetch_array($result)){
                    $convertDate = date("M jS, Y", strtotime("$row[8]"));
                    $claimname = $row['reimbursementPatientName'];
                    $claimamount = 'P '.number_format($row['reimbursementAmount'],2);

                    /*$pdf->Cell(55, 10, "$row[1]",1 ,0, 'C');
                    $pdf->Cell(30, 10, "Patient", 1,0, 'C');
    		        $pdf->Cell(31, 10, $convertDate, 1,0, 'C');
    		        $pdf->Cell(40, 10, 'Php '.number_format($row[7],2),1 ,0, 'R');
    		        $pdf->Cell(30, 10, "$status", 1,0, 'C');
    		        $pdf->Ln(10);*/
                    $pdf->SetWidths(array(55,30,31,40,30));
                    $pdf->Row(array($claimname, 'Patient', $convertDate, $claimamount, $status));
    		        $total++;
    		    	}
    			}
            }
             if($claimType == "Doctor"){
                if(mysqli_num_rows($result)>0)
                    {
                    while($row = mysqli_fetch_array($result)){
                    $convertDate = date("M jS, Y", strtotime("$row[2]"));
                    $claimname = $row['claimDoctorName'];
                    $claimamount = 'P '.number_format($row['patientAmount'],2);

                    /*$pdf->Cell(55, 10, "$row[1]",1 ,0, 'C');
                    $pdf->Cell(30, 10, "Doctor", 1,0, 'C');
                    $pdf->Cell(31, 10, $convertDate, 1,0, 'C');
                    $pdf->Cell(40, 10, 'P ' .number_format($row[6],2),1 ,0, 'R');
                    $pdf->Cell(30, 10, "$status", 1,0, 'C');
                    $pdf->Ln(10);*/
                    $pdf->SetWidths(array(55,30,31,40,30));
                    $pdf->Row(array($claimname, "Doctor", $convertDate, $claimamount, $status));
                    $total++;
                    }
                }
            }

$pdf->Cell(0,7, '',0 ,1);

$pdf->SetFont('courier','B',10);
$pdf->Cell(0,0, '',1 ,1, 'R');
$pdf->Cell(138, 10, 'Total Amount:', 0, 0, 'R');
$pdf->Cell(48, 10, 'P '.number_format($totalPayment,2), 0, 1, 'R');

// Prepared by:
$pdf->Cell(0,20, '',0 ,1,'C');
$pdf->SetFont('courier','',10);
-$pdf->Cell(50,0, '',1 ,1, 'L');
$pdf->Cell(50,4 , 'Prepared By:',0 ,0, 'C');
$pdf->Output();




?>
