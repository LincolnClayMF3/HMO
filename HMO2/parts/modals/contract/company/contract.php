<?php


require_once '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require_once '\xampp\htdocs\HMO2\fpdi\fpdf_tpl.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';


$pdfName = "";
$pdfID = "";
$pdfPlan = "";
$pdfMembership = "";
$pdfMobile = "";
$pdfTelephone = "";
$pdfEmail = "";
$pdfAddress = "";
$pdfEntry = "";
$pdfEnd = "";


$name = $_GET['name'];
// $plan = $_GET['plan'];
$id = $_GET['id'];
$type = $_GET['type'];
$mobile = $_GET['mobile'];
$telephone = $_GET['telephone'];
$email = $_GET['email'];
$address = $_GET['address'];
$entry = $_GET['entry'];
$end = $_GET['end'];
$date = date('Y-m-d');

$fetchplan = mysqli_query($con, "SELECT p1.planID, p1.planName FROM tblplan p1
        INNER JOIN tblcompanyplan c2 ON p1.planID = c2.intPlanID WHERE c2.intCompanyID = $id");


  $planName = array();
    while ($row = mysqli_fetch_array($fetchplan)) {
      $planName[] = $row['planName'];
  }


            $pdfName = $pdfName.$name;
            $pdfMembership = $pdfMembership.$type;
            $pdfMobile = $pdfMobile.$mobile;
            $pdfTelephone = $pdfTelephone.$telephone;
            $pdfEmail = $pdfEmail.$email;
            $pdfAddress = $pdfAddress.$address;
            $pdfEntry = $pdfEntry.$entry;
            $pdfEnd = $pdfEnd.$end;



            $pdf = new FPDI();

            $pageCount = $pdf->setSourceFile('Company-Contract.pdf');
            // $tplIdx = $pdf->importPage(1);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $tplIdx = $pdf->importPage($pageNo);

            $pdf->AddPage();
            $pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);

            // $pdf->Output();

// $pdf = new FPDF();
//var_dump(get_class_methods($pdf));


}

$pdf-> AddPage();
//$pdf-> SetY(2);
$pdf-> SetX(35);
$pdf-> Image('C:\xampp\htdocs\HMO2\dist\img\logo.png', 20,32,30);


$pdf-> SetFont("Arial","B",20);
$pdf-> SetY(32);
$pdf-> SetX(55);
$pdf-> Cell(150,10,"Contract Summary - Company");

$pdf-> SetFont("Arial","I",9);
$pdf-> SetY(39);
$pdf-> SetX(55);
$pdf-> Cell(150,10,"Health Maintenance Organization");

$pdf-> SetX(25);
$pdf-> Line(20, 53, 240-50, 53);

$pdf-> SetY(53);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Name:","",1);
$pdf-> SetFont("Arial","B",10);
$pdf-> SetY(53);
$pdf-> SetX(55);
$pdf-> Cell(150,10,"$pdfName");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(63);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Address:","",1);
$pdf-> SetY(63);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfAddress","",1);

// $pdf-> SetFont("Arial","","10");
// $pdf-> SetY(73);
// $pdf-> SetX(25);
// $pdf-> Cell(0,10,"Employee(s):","",1);
// $pdf-> SetY(73);
// $pdf-> SetX(55);
// $pdf-> Cell(0,10,"$pdfEmployee","",1);


$pdf-> SetFont("Arial","",10);
$pdf-> SetY(53);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Mobile:","",1);
$pdf-> SetY(53);
$pdf-> SetX(130);
$pdf-> Cell(150,10,"$pdfMobile");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(63);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Telephone:","",1);
$pdf-> SetY(63);
$pdf-> SetX(130);
$pdf-> Cell(0,10,"$pdfTelephone","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(73);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Email:","",1);
$pdf-> SetY(73);
$pdf-> SetX(130);
$pdf-> Cell(0,10,"$pdfEmail","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 83, 240-50, 83);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(93);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Acquired Plan(s):","",1);

$pdf-> SetY(93);
foreach ($planName as $plan) {
  $pdf-> SetX(55);
  $pdf-> Cell(0,10,"$plan","",1);
}


$pdf-> SetFont("Arial","","10");
$pdf-> SetY(93);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Entry Date:","",1);
$pdf-> SetY(93);
$pdf-> SetX(140);
$convertEntry = date("M jS, Y", strtotime("$pdfEntry"));
$pdf-> Cell(0,10,"$convertEntry","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(103);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"End of Contract:","",1);
$pdf-> SetY(103);
$pdf-> SetX(140);
if($pdfEnd != "Open End"){
  $convertEnd = date("M jS, Y", strtotime("$pdfEnd"));
  $pdf-> Cell(0,10,"$convertEnd","",1);
}
elseif($pdfEnd == "Open End"){
  $pdf-> Cell(0,10,"Open End","",1);
}

$pdf-> SetX(35);
$pdf-> Line(20, 130, 240-50, 130);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(153);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Signature:","",1);
$pdf-> Line(185, 160, 180-50, 160);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(153);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Date Signed:","",1);
$pdf-> Line(45, 160, 135-50, 160);


$pdf -> Output();

?>
