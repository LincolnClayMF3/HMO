<?php


require '\xampp\htdocs\HMO2\fpdf\fpdf.php';


$pdfName = "";
$pdfPlan = "";
$pdfAmount = "";
$pdfMemberID = "";
$pdfDate = "";
$pdfDueDate = "";
$pdfEntry = "";
$pdfFreq = "";

$id = $_GET['id'];
$name = $_GET['name'];
$plan = $_GET['plan'];
$payment = $_GET['payment'];
$entry = $_GET['entry'];
$freq = $_GET['frequency'];
$due = date('Y-m-d', strtotime("+5 days"));
$date = date('Y-m-d');

$convertDueDate = date("M jS, Y", strtotime("$due"));
$convertDate = date("M jS, Y", strtotime("$date"));

            $pdfName = $pdfName.$name;
            $pdfPlan = $pdfPlan.$plan;
            $pdfAmount = $pdfAmount.$payment;
            $pdfMemberID = $pdfMemberID.$id;
            $pdfEntry = $pdfEntry.$entry;
            $pdfFreq = $pdfFreq.$freq;
            $pdfDate = $pdfDate.$date;
            $pdfDueDate = $pdfDueDate.$convertDueDate;



$pdf = new FPDF();
//var_dump(get_class_methods($pdf));

$pdf-> AddPage();

$pdf-> SetX(35);
$pdf-> Image('C:\xampp\htdocs\HMO2\dist\img\logo.png', 10,2,30);


$pdf-> SetFont("Arial","B",20);
$pdf-> SetY(2);
$pdf-> SetX(45);
$pdf-> Cell(150,10,"Payment Voucher");

$pdf-> SetFont("Arial","I",9);
$pdf-> SetY(9);
$pdf-> SetX(45);
$pdf-> SetFont("Arial","I","15");
$pdf-> Cell(0,10,"Health Maintenance Organization","",1);
$pdf-> SetY(15);
$pdf-> SetX(45);
$pdf-> SetFont("Arial","I","10");
$pdf-> Cell(0,10,"Sta. Mesa Manila","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 23, 240-50, 23);

$pdf-> SetFont("Arial","B","20");
$pdf-> SetY(25);
$pdf -> SetX(130);
$pdf-> Cell(0,10,"MEMBER'S COPY","",1);

$pdf-> SetFont("Arial","","20");
$pdf-> SetY(30);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"$pdfName","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(40);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Acquired Plan:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(40);
$pdf-> SetX(65);
$pdf-> Cell(0,10,"$pdfPlan","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(45);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Amount to be Paid:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(45);
$pdf-> SetX(65);
$pdf-> Cell(0,10,"Php $pdfAmount","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(50);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Bank Service Fee:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(50);
$pdf-> SetX(65);
$pdf-> Cell(0,10,"Php 50.00","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(40);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Referrence Number:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(40);
$pdf-> SetX(145);
$pdf-> Cell(0,10,"$pdfEntry-$pdfMemberID","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(50);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Payment Frequency:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(50);
$pdf-> SetX(145);
$pdf-> Cell(0,10,"$pdfFreq","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 63, 240-50, 63);

$_Fields_Name_Position = 75;
$_Table_Position = 86;
$_Table_Position2 = 96;
$_Table_Position3 = 116;
$_Table_Position4 = 166;

$pdf-> SetFillColor(232,232,232);

$pdf-> SetFont("Arial", "B", 12);
$pdf-> SetY($_Fields_Name_Position);
$pdf-> SetX(35);
$pdf-> Cell(50,6,"Account Number",1,0,"L",1);
$pdf-> SetX(85);
$pdf-> Cell(50,6,"Referrence Number",1,0,"L",1);
$pdf-> SetX(135);
$pdf-> Cell(50,6,"Due Date",1,0,"L",1);

$pdf-> SetFont("Arial","",12);
$pdf-> SetY($_Table_Position);
$pdf-> SetX(35);
$pdf-> MultiCell(50,6,"7812-0826-00");
$pdf-> SetY($_Table_Position);
$pdf-> SetX(85);
$pdf-> MultiCell(50,6,"$pdfEntry-$pdfMemberID");
$pdf-> SetY($_Table_Position);
$pdf-> SetX(135);
$pdf-> MultiCell(50,6,"$pdfDueDate");

$pdf-> SetFont("Arial","",8);
$pdf-> SetY($_Table_Position2);
$pdf-> SetX(35);
$pdf-> MultiCell(50,6,"USE THIS NUMBER WHEN PAYING YOUR PLAN FEE",1,"L");
$pdf-> SetY($_Table_Position2);
$pdf-> SetX(85);
$pdf-> MultiCell(50,6,"THIS IS YOUR MEMBER ID USED AS REFERRENCE ID",1,"L");
$pdf-> SetY($_Table_Position2);
$pdf-> SetX(135);
$pdf-> MultiCell(50,6,"PLEASE PAY ON OR BEFORE DUE DATE",1,"L");

$pdf-> SetX(35);
$pdf-> Line(20, 123, 240-50, 123);
$pdf-> SetY(116);
$pdf-> SetX(100);
$pdf-> Cell(0,10,"Cut Here","",1);

$pdf-> SetFont("Arial","B","20");
$pdf-> SetY(125);
$pdf -> SetX(130);
$pdf-> Cell(0,10,"BANK'S COPY","",1);

$pdf-> SetFont("Arial","","20");
$pdf-> SetY(130);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"$pdfName","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(140);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Referrence Number:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(140);
$pdf-> SetX(65);
$pdf-> Cell(0,10,"$pdfEntry-$pdfMemberID","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(150);
$pdf-> SetX(25);
$pdf-> Cell(0,10,"Account Number:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(150);
$pdf-> SetX(65);
$pdf-> Cell(0,10,"7812-0826-00","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(140);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Amount to be Paid:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(140);
$pdf-> SetX(145);
$pdf-> Cell(0,10,"Php $pdfAmount","",1);

$pdf-> SetFont("Arial","I","10");
$pdf-> SetY(150);
$pdf-> SetX(105);
$pdf-> Cell(0,10,"Bank Service Fee:","",1);
$pdf-> SetFont("Arial","B","10");
$pdf-> SetY(150);
$pdf-> SetX(145);
$pdf-> Cell(0,10,"Php 50.00","",1);

$pdf-> SetX(35);
$pdf-> Line(20, 163, 240-50, 163);

$pdf-> SetFont("Arial","I",8);
$pdf-> SetY(166);
$pdf-> SetX(30);
$pdf-> Cell(0,6,"This is a Bank's copy. Detach and present this to the Bank Teller together with bank's fully accomplished payment slip.");
$pdf-> SetY(169);
$pdf-> SetX(30);
$pdf-> Cell(0,6, "This Document is valid until $pdfDueDate","",1);

$pdf->Output('voucher.pdf', 'F');
$pdf->Output('I');

?>
