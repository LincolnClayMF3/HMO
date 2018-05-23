<?php


require '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';


$pdfID = "";
$pdfName = "";
$pdfRegion = "";
$pdfType = "";
$pdfCoordinator = "";
$pdfMobile = "";
$pdfTelephone = "";
$pdfEmail = "";
$pdfAddress = "";
$pdfEntry = "";
$pdfEnd = "";


// $id = $_GET['id'];
$name = $_GET['name'];
$region = $_GET['region'];
$coordinator = $_GET['coordinator'];
$type = $_GET['type'];
$mobile = $_GET['mobile'];
$telephone = $_GET['telephone'];
$email = $_GET['email'];
$address = $_GET['address'];
$entry = $_GET['entry'];
$convertEntry = date("M jS, Y", strtotime("$entry"));
$end = $_GET['end'];
$convertEnd = date("M jS, Y", strtotime("$end"));
$date = date('Y-m-d');


            // $pdfID = $pdfID.$id;
            $pdfName = $pdfName.$name;
            $pdfRegion= $pdfRegion.$region;
            $pdfCoordinator = $pdfCoordinator.$coordinator;
            $pdfType = $pdfType.$type;
            $pdfMobile = $pdfMobile.$mobile;
            $pdfTelephone = $pdfTelephone.$telephone;
            $pdfEmail = $pdfEmail.$email;
            $pdfAddress = $pdfAddress.$address;
            $pdfEntry = $pdfEntry.$convertEntry;
            if($end != "Open End" ){
              $pdfEnd = $pdfEnd.$convertEnd;
            }

            $pdf = new FPDI();

            $pageCount = $pdf->setSourceFile('Hospital-Contract.pdf');
            // $tplIdx = $pdf->importPage(1);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $tplIdx = $pdf->importPage($pageNo);

            $pdf->AddPage();
            $pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);

          }



// $pdf = new FPDF();
//var_dump(get_class_methods($pdf));

$pdf-> AddPage();

// $pdf-> SetY(2);
$pdf-> SetX(35);
$pdf-> Image('C:\xampp\htdocs\HMO2\dist\img\logo.png', 10,2,30);


$pdf-> SetFont("Arial","B",20);
$pdf-> SetY(2);
$pdf-> SetX(45);
$pdf-> Cell(150,10,"Contract Form - Hospital");

$pdf-> SetFont("Arial","I",9);
$pdf-> SetY(9);
$pdf-> SetX(45);
$pdf-> Cell(150,10,"Health Maintenance Organization");

$pdf-> SetX(35);
$pdf-> Line(20, 23, 240-50, 23);

$pdf-> SetY(23);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Name:","",1);
$pdf-> SetFont("Arial","B",10);
$pdf-> SetY(23);
$pdf-> SetX(45);
$pdf-> Cell(150,10,"$pdfName");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(33);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Address:","",1);
$pdf-> SetY(33);
$pdf-> SetX(45);
$pdf-> Cell(0,10,"$pdfAddress","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(43);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Region:","",1);
$pdf-> SetY(43);
$pdf-> SetX(45);
$pdf-> Cell(0,10,"$pdfRegion","",1);


$pdf-> SetFont("Arial","",10);
$pdf-> SetY(23);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Mobile:","",1);
$pdf-> SetY(23);
$pdf-> SetX(130);
$pdf-> Cell(150,10,"$pdfMobile");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(33);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Telephone:","",1);
$pdf-> SetY(33);
$pdf-> SetX(130);
$pdf-> Cell(0,10,"$pdfTelephone","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(43);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Email:","",1);
$pdf-> SetY(43);
$pdf-> SetX(130);
$pdf-> Cell(0,10,"$pdfEmail","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 58, 240-50, 58);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(63);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Coordinator:","",1);
$pdf-> SetY(63);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfCoordinator","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(63);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Hospital Specification:","",1);
$pdf-> SetY(63);
$pdf-> SetX(145);
$pdf-> Cell(0,10,"$pdfType","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(73);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Entry Date:","",1);
$pdf-> SetY(73);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfEntry","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(73);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"End of Contract:","",1);
$pdf-> SetY(73);
$pdf-> SetX(145);
if($end == "Open End"){
  $pdf-> Cell(0,10,"Open End","",1);
}
else {
  $pdf-> Cell(0,10,"$pdfEnd","",1);
}

$pdf-> SetX(35);
$pdf-> Line(20, 88, 240-50, 88);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(113);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Signature:","",1);
$pdf-> Line(185, 120, 180-50, 120);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(113);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Date Signed:","",1);
$pdf-> Line(45, 120, 135-50, 120);



$pdf -> Output();

?>
