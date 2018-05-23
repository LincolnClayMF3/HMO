<?php


require '\xampp\htdocs\HMO2\fpdf\fpdf.php';
require '\xampp\htdocs\HMO2\fpdi\fpdi.php';
require '\xampp\htdocs\HMO2\parts\php\connection.php';


$pdfName = "";
$pdfPlan = "";
$pdfLimit = "";
$pdfAnnual = "";
$pdfAmount = "";
$pdfFrequency = "";
$pdfSpecs = "";
$pdfMembership = "";
$pdfHeight = "";
$pdfWeight = "";
$pdfGender = "";
$pdfBday = "";
$pdfAge = "";
$pdfOccupation = "";
$pdfMode = "";
$pdfCivil = "";
$pdfCompany = "";
$pdfMobile = "";
$pdfTelephone = "";
$pdfEmail = "";
$pdfAddress = "";
$pdfEntry = "";
$pdfEnd = "";


$name = $_GET['name'];
$gender = $_GET['gender'];
$bday = $_GET['bday'];
$age = $_GET['age'];
$company = $_GET['company'];
$specs = $_GET['specs'];
$limit = $_GET['limit'];
$annual = $_GET['annual'];
$amount = $_GET['amount'];
$frequency = $_GET['frequency'];
$mode = $_GET['mode'];
$type = $_GET['type'];
$specs = $_GET['specs'];
$plan = $_GET['plan'];
$id = $_GET['id'];
$height = $_GET['height'];
$weight = $_GET['weight'];
$mobile = $_GET['mobile'];
$civil = $_GET['civil'];
$occupation = $_GET['occupation'];
$telephone = $_GET['telephone'];
$email = $_GET['email'];
$address = $_GET['address'];
$entry = $_GET['entry'];
$end = $_GET['end'];
$date = date('Y-m-d');

$freq = "";

if($frequency == "Monthly"){
  $freq = "1";
}
elseif ($frequency == "Quarterly") {
  $freq = "3";
}
elseif ($frequency == "Semi-Annual") {
  $freq = "6";
}
else {
  $freq = "12";
}

$start = $month = strtotime($entry);
$last = strtotime($end);

// while($month < $last){
// echo  date('F Y', $month).'</br>';
//   $month = strtotime("+$frequency month", $month);
// }


$fetchpec = mysqli_query($con, "SELECT pec1.pecName, pec1.pecDesc, pec1.pecID FROM tblpec pec1
        INNER JOIN tblmemberpec pec2 ON pec1.pecID = pec2.intPECMemberID WHERE pec2.intMemberID = $id");

$pecName = array();
$pecDesc = array();

  while ($row = mysqli_fetch_array($fetchpec)) {
    $pecName[] = $row['pecName'];
    $pecDesc[] = $row['pecDesc'];


    // $pName = array();
    // $pDesc = array();
    // if(!empty($pecName) && !empty($pecDesc)){
    //   $pName[] = "$pecName";
    //   $pDesc[] = "$pecDesc";
    //   }
    //   elseif(empty($pecName) && empty($pecDesc)){
    //     $pName = "None";
    //     $pDesc = "None";
    //   }
  }

$dependent = mysqli_query($con, "SELECT d1.dependentName, d1.dependentBday, d1.dependentRelationship, d1.dependentCivilStatus FROM tbldependents d1
  INNER JOIN tblmemberdependents d2 ON d1.dependentID = d2.intDependentID WHERE d2.intMemberID = $id");

$dependentName = array();
$dependentBday = array();
$relationship = array();
$dependentCivil = array();

  while ($row = mysqli_fetch_array($dependent)) {
    $dependentName[] = $row['dependentName'];
    $dependentBday[] = $row['dependentBday'];
    $relationship[] = $row['dependentRelationship'];
    $dependentCivil[] = $row['dependentCivilStatus'];
    // $convertDependentBday = date("M jS, Y", strtotime("$dependentBday"));
  }



$convertEntry = date("M jS, Y", strtotime("$entry"));
$convertEnd = date("M jS, Y", strtotime("$end"));
$convertBday = date("M jS, Y", strtotime("$bday"));
// $convertBday = date("M jS, Y", strtotime("$bday"));

            $pdfName = $pdfName.$name;
            $pdfHeight = $pdfHeight.$height;
            $pdfWeight = $pdfWeight.$weight;
            $pdfGender = $pdfGender .$gender;
            $pdfCivil = $pdfCivil.$civil;
            $pdfBday = $pdfBday.$convertBday;
            $pdfAge = $pdfAge.$age;
            $pdfPlan = $pdfPlan.$plan;
            $pdfLimit = $pdfLimit.$limit;
            $pdfAnnual = $pdfAnnual.$annual;
            $pdfAmount = $pdfAmount.$amount;
            $pdfCompany = $pdfCompany.$company;
            $pdfSpecs = $pdfSpecs.$specs;
            $pdfFrequency = $pdfFrequency.$frequency;
            $pdfOccupation = $pdfOccupation.$occupation;
            $pdfMode = $pdfMode.$mode;
            $pdfMembership = $pdfMembership.$type;
            $pdfMobile = $pdfMobile.$mobile;
            $pdfTelephone = $pdfTelephone.$telephone;
            $pdfEmail = $pdfEmail.$email;
            $pdfAddress = $pdfAddress.$address;
            $pdfEntry = $pdfEntry.$convertEntry;
            $pdfEnd = $pdfEnd.$convertEnd;


            $pdf = new FPDI();

            $pageCount = $pdf->setSourceFile('Member-Contract.pdf');
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
$pdf-> Cell(150,10,"Contract Summary - Member");

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
$pdf-> SetX(55);
$pdf-> Cell(150,10,"$pdfName");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(33);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Address:","",1);
$pdf-> SetY(33);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfGender","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(43);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Birthday:","",1);
$pdf-> SetY(43);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfBday","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(53);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Age:","",1);
$pdf-> SetY(53);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfAge","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(63);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Height:","",1);
$pdf-> SetY(63);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfHeight ft","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(73);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Weight:","",1);
$pdf-> SetY(73);
$pdf-> SetX(55);
$pdf-> Cell(0,10,"$pdfWeight Kg","",1);

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(23);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Civil Status:","",1);
$pdf-> SetY(23);
$pdf-> SetX(130);
$pdf-> Cell(150,10,"$pdfCivil");

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(33);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Occupation:","",1);
$pdf-> SetY(33);
$pdf-> SetX(130);
$pdf-> Cell(150,10,"$pdfOccupation");

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(43);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Address:","",1);
$pdf-> SetY(43);
$pdf-> SetX(130);
$pdf-> Cell(150,10,"$pdfAddress");

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
$pdf-> Line(20, 88, 240-50, 88);


$pdf-> SetY(93);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Specification:","",1);
$pdf-> SetFont("Arial","",10);
$pdf-> SetY(93);
$pdf-> SetX(60);
$pdf-> Cell(150,10,"$pdfSpecs");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(103);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Membership Type:","",1);
$pdf-> SetY(103);
$pdf-> SetX(60);
$pdf-> Cell(0,10,"$pdfMembership","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(113);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Company:","",1);
$pdf-> SetY(113);
$pdf-> SetX(60);
$pdf-> Cell(0,10,"$pdfCompany","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(123);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Plan:","",1);
$pdf-> SetY(123);
$pdf-> SetX(60);
$pdf-> Cell(0,10,"$pdfPlan","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(133);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Plan Amount:","",1);
$pdf-> SetY(133);
$pdf-> SetX(60);
$pdf-> Cell(0,10,"Php $pdfLimit","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(143);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Annual Payment:","",1);
$pdf-> SetY(143);
$pdf-> SetX(60);
$pdf-> Cell(0,10,"Php $pdfAnnual","",1);

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(93);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Frequency:","",1);
$pdf-> SetY(93);
$pdf-> SetX(140);
$pdf-> Cell(150,10,"$pdfFrequency");

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(103);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Amount to be Paid:","",1);
$pdf-> SetY(103);
$pdf-> SetX(140);
$pdf-> Cell(150,10,"Php $pdfAmount");

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(113);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Mode of Payment:","",1);
$pdf-> SetY(113);
$pdf-> SetX(140);
$pdf-> Cell(150,10,"$pdfMode");

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(123);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Entry Date:","",1);
$pdf-> SetY(123);
$pdf-> SetX(140);
$pdf-> Cell(150,10,"$pdfEntry");

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(133);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"End of Contract:","",1);
$pdf-> SetY(133);
$pdf-> SetX(140);
$pdf-> Cell(0,10,"$pdfEnd","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 153, 240-50, 153);

$pdf-> SetFont("Arial","",10);
$pdf-> SetY(163);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Pre Existing Condition:","",1);
$pdf-> SetY(163);
if(!empty($pecName) && !empty($pecDesc)){
  foreach ($pecName as $pN) {
    $pdf-> SetX(65);
    $pdf-> Cell(0,10,"$pN","",1);
  }

}
else {
  $pdf-> SetX(65);
  $pdf-> Cell(0,10,"None","",1);
}

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(163);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Payment Schedule:","",1);
$pdf-> SetY(163);
if($frequency == "Monthly"){
  $date = strtotime($end);
  $diff = $date - time();
  $years = floor($diff/(60 * 60 * 24 * 365));
  $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
  $pdf-> SetX(140);
  $pdf-> Cell(0,10,"Monthly Payment for:","",1);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10," $years Year(s) $months Month(s)","",1);
  // $pdf-> SetX(145);
  // $pdf-> Cell(0,10," $months Month(s)","",1);
}
if($frequency == "Quarterly"){
  $date = strtotime($end);
  $diff = $date - time();
  $years = floor($diff/(60 * 60 * 24 * 365));
  $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
  $noOfMonths = $years * 12;
  $noOfYears = $noOfMonths / 3;

  $noOfMonths2 = $months / 3;
  $new = ceil($noOfYears + $noOfMonths2);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10,"Quarterly Payment ($new) for:","",1);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10," $years Year(s) $months Month(s)","",1);
  // $pdf-> SetX(145);
  // $pdf-> Cell(0,10," $months Month(s)","",1);
}
if($frequency == "Semi-Annual"){
  $date = strtotime($end);
  $diff = $date - time();
  $years = round($diff/(60 * 60 * 24 * 365));
  $months = round(abs($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
  $noOfMonths = $years * 12;
  $noOfYears = $noOfMonths / 6;

  $noOfMonths2 = $months / 6;
  $new = ceil($noOfYears + $noOfMonths2);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10,"Semi Annual Payment ($new) for:","",1);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10," $years Year(s) $months Month(s)","",1);
  // $pdf-> SetX(145);
  // $pdf-> Cell(0,10," $months Month(s)","",1);
}
if($frequency == "Annual"){
  $date = strtotime($end);
  $diff = $date - time();
  $years = round($diff/(60 * 60 * 24 * 365));
  $months = round(abs($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
  // $noOfMonths = $years * 12;
  // $noOfYears = $noOfMonths / 6;
  //
  // $noOfMonths2 = $months / 6;
  // $new = ceil($noOfYears + $noOfMonths2);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10,"Semi Annual Payment ($years) for:","",1);
  $pdf-> SetX(140);
  $pdf-> Cell(0,10," $years Year(s) $months Month(s)","",1);
  // $pdf-> SetX(145);
  // $pdf-> Cell(0,10," $months Month(s)","",1);
}

$pdf-> SetX(35);
$pdf-> Line(20, 193, 240-50, 193);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(195);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Dependents","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(203);
$pdf-> SetX(35);
$pdf-> Cell(0,10,"Name","",1);
$pdf-> SetY(203);
$pdf-> SetX(85);
$pdf-> Cell(0,10,"Birthday","",1);
$pdf-> SetY(203);
$pdf-> SetX(115);
$pdf-> Cell(0,10,"Relationship","",1);
$pdf-> SetY(203);
$pdf-> SetX(155);
$pdf-> Cell(0,10,"Civil Status","",1);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(210);
foreach ($dependentName as $dName) {
  $pdf-> SetX(35);
  $pdf-> Cell(0,10,"$dName","",1);
}
$pdf-> SetY(210);
foreach ($dependentBday as $dBday) {
  $pdf-> SetX(85);
  $pdf-> Cell(0,10,"$dBday","",1);
}
$pdf-> SetY(210);
foreach ($relationship as $dRelationship) {
  $pdf-> SetX(115);
  $pdf-> Cell(0,10,"$dRelationship","",1);
}
$pdf-> SetY(210);
foreach ($dependentCivil as $dCivil) {
  $pdf-> SetX(155);
  $pdf-> Cell(0,10,"$dCivil","",1);
}

$pdf-> SetX(35);
$pdf-> Line(20, 248, 240-50, 248);


$pdf-> SetFont("Arial","","10");
$pdf-> SetY(263);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Signature:","",1);
$pdf-> Line(185, 268, 180-50, 268);

$pdf-> SetFont("Arial","","10");
$pdf-> SetY(263);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Date Signed:","",1);
$pdf-> Line(45, 268, 135-50, 268);



$pdf -> Output();

?>
