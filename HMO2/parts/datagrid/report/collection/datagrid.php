<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <?php

    if($display == "Statistical" && $frequency == "None"){

      echo "<div id=\"chartdiv\" style=\"width:100%; height:450px\"></div>";
    }
    elseif ($display == "Statistical" && $frequency == "Weekly") {


      echo "<div id=\"chartdivWeek\" style=\"width:100%; height:450px\"></div>";
    }
    elseif ($display == "Statistical" && $frequency == "Monthly") {

      echo "<div id=\"chartdivMonth\" style=\"width:100%; height:450px\"></div>";
    }
    elseif ($display == "Statistical" && $frequency == "Yearly") {

      echo "<div id=\"chartdivYear\" style=\"width:100%; height:450px\"></div>";
    }
    elseif ($display == "Statistical" && $frequency == "Daily") {

      echo "<div id=\"chartdivDay\" style=\"width:100%; height:450px\"></div>";
    }

    elseif ($display == "Statistical" && $frequency == "Specific") {
      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php
      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivSpec\" style=\"width:100%; height:450px\"></div>";
    }

    elseif ($display == "Tabular") {
    ?>
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Date</th>
        <th>Member Name</th>
        <th>Amount Paid</th>
        <th>Total Remaining Balance Balance</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($display == "Tabular" && $frequency == "None"){

          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory");

          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';
      }
    }


      if(isset($_POST['btnSearch'])){

        $display = $_POST['display'];
        $frequency = $_POST['frequency'];

        if($frequency == "Specific"){
          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

        }

      if($display == "Tabular"  && $frequency == "Daily"){


          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)");


          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

        if(!empty($paymentDate)){
          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';
        }
        else{
          echo '<tr>';
          echo '<td>No Record For Today</td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '</tr>';
        }
        }

      }

      elseif ($display == "Tabular"  && $frequency == "Weekly"){


          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");

          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

        if(!empty($paymentDate)){
          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';

          echo '<input type="hidden" value='.$paymentDate.' name="weekDate">';
          echo '<input type="hidden" value='.$paymentMemberName.' name="weekMemberName">';
          echo '<input type="hidden" value='.number_format($paymentAmountPaid,2).' name="weekAmountPaid">';
          echo '<input type="hidden" value='.number_format($paymentBalance,2).' name="weekBalance">';
        }
        else {
          echo '<tr>';
          echo '<td>No Record For This Week</td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '</tr>';
        }
        }

      }

      elseif ($display == "Tabular"  && $frequency == "Monthly"){


          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");

          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

        if(!empty($paymentDate)){
          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';
        }
        else {
          echo '<tr>';
          echo '<td>No Record For This Month</td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '</tr>';
        }
        }

      }

      elseif ($display == "Tabular"  && $frequency == "Yearly"){

          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");

          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

        if(!empty($paymentDate)){
          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';
        }
        else {
          echo '<tr>';
          echo '<td>No Record For This Year</td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '</tr>';
        }
        }

      }

      elseif ($display == "Tabular"  && $frequency == "Specific"){

        ?>
        <script>

        $("input[name=fromDate]").prop('disabled', false);
        $("input[name=toDate]").prop('disabled', false);

        </script>
        <?php

          $payment = mysqli_query($con, "SELECT * FROM tblpaymenthistory
                     WHERE paymentDate BETWEEN '$fromDate' AND '$toDate'");

          while ($row = mysqli_fetch_array($payment)) {
            $paymentAmountPaid = $row['paymentAmountPaid'];
            $paymentDate = $row['paymentDate'];
            $paymentMemberName = $row['paymentMemberName'];
            $paymentBalance = $row['paymentBalance'];
            $convertDate = date("M jS, Y", strtotime("$paymentDate"));

        if(!empty($paymentDate)){
          echo '<tr>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>' . $paymentMemberName . '</td>';
          echo '<td>Php '. number_format($paymentAmountPaid,2).'</td>';
          echo '<td>Php ' . number_format($paymentBalance,2) . '</td>';
          echo '</tr>';

          echo '<input type="hidden" value='.$paymentDate.' name="weekDate">';
          echo '<input type="hidden" value='.$paymentMemberName.' name="weekMemberName">';
          echo '<input type="hidden" value='.number_format($paymentAmountPaid,2).' name="weekAmountPaid">';
          echo '<input type="hidden" value='.number_format($paymentBalance,2).' name="weekBalance">';
        }
        else {
          echo '<tr>';
          echo '<td>No Record For This Week</td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '<td></td>';
          echo '</tr>';
        }
        }

      }

    $_SESSION['frequency'] = $frequency;

      if($frequency == "Specific"){
        $_SESSION['fromDate'] = $fromDate;
        $_SESSION['toDate'] = $toDate;
      }
}

?>
</tbody>
<tfoot>
  <tr>
    <?php

    if($frequency == "Daily"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                 WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
        echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
        echo '<th><input type="submit" value="Generate Report" onclick="window.open(\'parts/modals/contract/company/collectionPdf.php\')></th>';
      }
    }
    elseif ($frequency == "None"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
echo '<th><input type="submit" value="Generate Report" onclick="window.open(\'parts/modals/contract/company/collectionPdf.php\')"></th>';
    }
    }

    elseif ($frequency == "Weekly"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                 WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
        echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
        echo '<th><a target="_blank" href="parts/datagrid/report/payment/collectionPdf.php"><input type="button" value="Generate Report"></a></th>';
      }
    }

    elseif ($frequency == "Monthly"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                 WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
      echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
      echo '<th><input type="submit" value="Generate Report" onclick="window.open(\'parts/modals/contract/company/collectionPdf.php\')"></th>';
    }
    }

    elseif ($frequency == "Yearly"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                 WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
echo '<th><input type="submit" value="Generate Report" onclick="window.open(\'parts/modals/contract/company/collectionPdf.php\')"></th>';
    }
    }

    elseif ($frequency == "Specific"){
      echo '<th></th>';
      echo '<th></th>';
      $total = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                 WHERE paymentDate BETWEEN '$fromDate' AND '$toDate'");
      while ($row = mysqli_fetch_array($total)) {
        $totalPayment = $row['paymentAmountPaid'];
      }
      if(!empty($totalPayment)){
echo '<th>Total Php '.number_format($totalPayment,2).'</th>';
echo '<th><input type="submit" value="Generate Report" onclick="window.open(\'parts/modals/contract/company/collectionPdf.php\')"></th>';
    }
    }
    ?>
  </tr>
</tfoot>
</table>
</div>
</div>
<?php
}
?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "lengthChange": true
  }
);



var chart = AmCharts.makeChart( "chartdivDay", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Daily Report"
  },{
    "text": "Total Payment for Today: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php
      $paymentForToday = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                              WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
      while ($row = mysqli_fetch_array($paymentForToday)) {
        $totalPayment = $row['paymentAmountPaid'];
      }

      $currentDate = date('Y-m-d');
      $convertDate = date("M jS, Y", strtotime("$currentDate"));
    ?>
    {
      "country": "Total Payment for Today: <?php echo $convertDate ?>",
      "visits": "<?php echo $totalPayment ?>"
    }],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );

var chart1 = AmCharts.makeChart( "chartdivYear", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentYear = date('Y');

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Total Payment This Year: <?php echo $currentYear?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allPaymentYear = mysqli_query($con, "SELECT DISTINCT YEAR(paymentDate) as year,
                         MONTH(paymentDate) as month FROM tblpaymenthistory
                         WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(paymentDate) ASC");

    while ($row = mysqli_fetch_array($allPaymentYear)) {
      $years = $row['year'];
      $months = $row['month'];

      $paymentThisYear = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                              WHERE YEAR(paymentDate) = '$years' AND MONTH(paymentDate) = '$months'");
      while ($row = mysqli_fetch_array($paymentThisYear)) {
        $totalPayment = $row['paymentAmountPaid'];

      echo    "{";
      echo    "country: $years.$months,";
      echo    "visits: $totalPayment";
      echo  "},";

    }
    }
    ?>

  ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );

var chart2 = AmCharts.makeChart( "chartdivMonth", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentMonth = date('Y-m');
    $convertMonth = date("M, Y", strtotime("$currentMonth"));

    ?>
    {
    "text": "Montly Report"
  },{
    "text": "Total Payment This Month: <?php echo $convertMonth?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allPaymentMonth = mysqli_query($con, "SELECT DISTINCT WEEK(paymentDate) as week,
                         DAY(paymentDate) as day FROM tblpaymenthistory
                         WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(paymentDate) ASC");

    while ($row = mysqli_fetch_array($allPaymentMonth)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $paymentThisMonth = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                              WHERE WEEK(paymentDate) = '$weeks' AND DAY(paymentDate) = '$days'");

      while ($row = mysqli_fetch_array($paymentThisMonth)) {

        $totalPayment = $row['paymentAmountPaid'];

      echo    "{";
      echo    "country: $weeks.$days,";
      echo    "visits: $totalPayment";
      echo  "},";

    }
    }
    ?>

],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );

var chart3 = AmCharts.makeChart( "chartdivWeek", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Weekly Report"
  },{
    "text": "Total Payment This Week: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php
    $allPaymentWeek = mysqli_query($con, "SELECT DISTINCT DAY(paymentDate) as day FROM tblpaymenthistory
                         WHERE paymentDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(paymentDate) ASC");

    while ($row = mysqli_fetch_array($allPaymentWeek)) {
      $days = $row['day'];

      $paymentThisWeek = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                              WHERE DAY(paymentDate) = '$days'");

      while ($row = mysqli_fetch_array($paymentThisWeek)) {

        $totalPayment = $row['paymentAmountPaid'];

      echo    "{";
      echo    "country: $days,";
      echo    "visits: $totalPayment";
      echo  "},";

    }
    }
    ?>

  ],

  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );

var chart4 = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
{
    "text": "Total Payment as of: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php
      $paymentFromBeginning = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory");

      while ($row = mysqli_fetch_array($paymentFromBeginning)) {
        $totalPayment = $row['paymentAmountPaid'];
      }

      $currentDate = date('Y-m-d');
      $convertDate = date("M jS, Y", strtotime("$currentDate"));
    ?>
    {
      "country": "Total Payment as of: <?php echo $convertDate ?>",
      "visits": "<?php echo $totalPayment ?>"
    }],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );


</script>

<script>

var chart5 = AmCharts.makeChart( "chartdivSpec", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "Total Payment"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allPaymentYear = mysqli_query($con, "SELECT DISTINCT YEAR(paymentDate) as year,
                         MONTH(paymentDate) as month FROM tblpaymenthistory
                         WHERE paymentDate BETWEEN '$fromDate' AND '$toDate'
                         ORDER BY YEAR(paymentDate) ASC");

    while ($row = mysqli_fetch_array($allPaymentYear)) {
      $years = $row['year'];
      $months = $row['month'];

      $paymentThisYear = mysqli_query($con, "SELECT SUM(paymentAmountPaid) as paymentAmountPaid FROM tblpaymenthistory
                              WHERE YEAR(paymentDate) = '$years' AND MONTH(paymentDate) = '$months'");
      while ($row = mysqli_fetch_array($paymentThisYear)) {
        $totalPayment = $row['paymentAmountPaid'];

      echo    "{";
      echo    "country: $years.$months,";
      echo    "visits: $totalPayment";
      echo  "},";

    }
    }
    ?>

],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );


</script>
