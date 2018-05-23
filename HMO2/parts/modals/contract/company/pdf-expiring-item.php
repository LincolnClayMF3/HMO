<?php

require('mc_table2.php');
require_once('/../../fpdf.php');
session_start();


if(empty($_SESSION['user'])){
  if(empty($_SESSION['pass'])){

session_destroy();
    ?>
    <script>
    alert("Please Log In");
    location.assign("index.php");
    </script>
    <?php

  }

}else{
chdir(__DIR__);

$file_to_require=realpath('./../../connection.php');

require($file_to_require); unset($file_to_require);
   // CODE SA PINAKATAAS NG HTML
error_reporting(0);
}
 session_start();
 $fromDate = $_SESSION['fromDate'];
 $toDate = $_SESSION['toDate'];
 $branchNameFilter = $_SESSION['branchNameFilter'];

$pdf=new PDF_MC_Table();
$pdf->AddPage('L');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',12);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(25,25,27,27,25,25,25,25,25,25,25,25));
    $pdf->Row(array('Pawn Ticket No.', 'Name', 'Item Classification', 'Item Brand/Name', 'Item Model', 'Item Description','Branch', 'Date Pawned','Contract Date', 'Principal Loan', 'Balance'));


 $query="select * from tblpawnticket t inner join tblpawner p on p.idPawnerNo=t.fk_idPawnerNo inner join tblpawneditem i on i.idPawnedItemNo=t.fk_idPawnedItemNo inner join tblemployee e on e.idEmployeeNo=t.fk_idEmployeeNo inner join tblbranch b on b.idBranchNo=t.fk_idBranchNo where t.strPawnTicketStatus='Expiring' and t.dtmPawned >= '".$fromDate."' and t.dtmPawned <= '".$toDate."' and b.strBranchName='".$branchNameFilter."' group by t.strPawnTicketNo order by t.dtmPawned"; 
    $result = mysqli_query($con, $query);
 
    while($row=mysqli_fetch_array($result))
    {
      $id = $row['strPawnTicketNo'];
      $lastName = $row['strPawnerLastName'];
      $firstName = $row['strPawnerFirstName'];
      $middleName = $row['strMiddleName'];
      $itemBrand = $row['strItemName'];
      $itemModel = $row['strItemModel'];
      $itemDescription = $row['strItemDescription'];
      $branchName = $row['strBranchName'];
      $classification = $row['strClassification'];
      $datePawned = $row['dtmPawned'];
      $maturityDate = $row['dtmDueDate'];
      $contractDate = $row['dtmContractValidility'];
      $appraisedValue = $row['dblPrincipalLoan'];
      $balance = $row['dblBalance'];
      $category = $row['strCategory'];

      $totalBalance = $totalBalance + $balance;

      $totalAppraisedValue = $totalAppraisedValue + $appraisedValue;

      if($category=='Jewelry')
      {
        $itemBrand = $itemDescription;
        $itemDescription = null;
      }

      $pdf->SetWidths(array(25,25,27,27 ,25,25,25,25,25,25,25,25));
      $pdf->Row(array($id,$lastName.', '.$firstName.' '.$middleName,$classification,$itemBrand,$itemModel,$itemDescription,$branchName,$datePawned,$contractDate,'P '.number_format($appraisedValue,2),'P '.number_format($balance,2)));
   	}
    $pdf->Row(array('Total','','','','','','','','','P '.number_format($totalAppraisedValue,2),'P '.number_format($totalBalance,2)));
$pdf->Output();
?>