<?php
$result = mysqli_query($con, "SELECT m1.memberTransID, m1.memberBalance, m1.memberTransName, m1.memberAnnualPayment, m1.memberMode, m1.memberFrequency,
          m1.memberTransAmountToPay, m4.membershipName, p1.planName,  m1.memberTransPlanAmount FROM tblmembertransaction m1
          INNER JOIN tblmemberplan m3 ON m3.intMemberID = m1.memberTransID
          INNER JOIN tblplan p1 ON p1.planID = m3.intPlanID
          INNER JOIN tblmembertype m2 ON m2.intMemberID = m1.memberTransID
          INNER JOIN tblmembershiptype m4 ON m4.membershipID = m2.intMembershipID ");

          while ($row = mysqli_fetch_array($result)) {
            $id = $row['memberTransID'];
            $name = $row['memberTransName'];
            $plan = $row['planName'];
            $annual = $row['memberAnnualPayment'];
            $freq = $row['memberFrequency'];
            $type = $row['membershipName'];
            $balance =$row['memberBalance'];
            $amount = $row['memberTransPlanAmount'];
            $amountToPay  = $row['memberTransAmountToPay'];
            $mode  = $row['memberMode'];

    ?>
<div class="modal fade" id="viewMemberRecord<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 6em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Member Payment Tagging
        </h4>
      </div>
      <div class="modal-body">
        <form role="form" method="post" autocomplete="off">

          <div class="form-group col-xs-4">
            <label>Date</label>
            <?php

            $date = date('Y-m-d');

            ?>
            <p><?php echo $date ?></p>
            <input type="hidden" value="<?php echo $date ?>" name="memberDate" >
            <input type="hidden" value="<?php echo $mode ?>" name="memberMode" >
          </div>

          <div class="form-group col-xs-4">
            <label>Member Name</label>
            <p><?php echo $name ?></p>
            <input type="hidden" value="<?php echo $name ?>" name="memberName" >
          </div>

          <div class="form-group col-xs-4">
            <label>Membership Type</label>
            <p><?php echo $type ?></p>
            <input type="hidden" value="<?php echo $type ?>" name="memberType" >
          </div>

          <div class="form-group col-xs-4">
            <label>Plan</label>
            <p><?php echo $plan ?></p>
            <input type="hidden" value="<?php echo $plan ?>" name="memberPlan" >
          </div>

          <div class="form-group col-xs-4">
            <label>Total Plan Amount</label>
            <p>Php <?php echo $amount ?></p>
            <input type="hidden" value="<?php echo $amount ?>" id="planAmount<?php echo $id?>" name="memberPlanAmount" >
          </div>


          <div class="form-group col-xs-4">
            <label>Annual Payment</label>
            <p>Php <?php echo $annual ?></p>
            <input type="hidden" value="<?php echo $annual ?>" name="memberAnnualPayment" >
          </div>

          <div class="form-group col-xs-4">
            <label>Payment Frequency</label>
            <?php
            if($freq == "Annual"){
              echo "<p>Annual</p>";
              echo "<input type=\"hidden\" value=\"None\" disabled>";
            }
            else {
              echo "<p>$freq</p>";
              echo "<input type=\"hidden\" value=\"$freq\" name=\"memberFrequency\" >";
            }
            ?>
          </div>

          <div class="form-group col-xs-4">
            <label>Amount To Be Paid</label>
            <?php
            if($freq == "Annual"){
              echo "<p>Php $annual</p>";
              echo "<input type=\"hidden\" class=\"annualAmountToPay\" id=\"annualAmountToPay$id\" value=\"$annual\" name=\"memberAmountToPay\">";
            }
            else {
              echo "<p>Php $amountToPay</p>";
              echo "<input type=\"hidden\" class=\"freqAmountToPay\" id=\"freqAmountToPay$id\"  value=\"$amountToPay\" name=\"memberAmountToPay\">";
            }
            ?>
          </div>

          <!-- <div class="form-group col-xs-6">
            <label> Balance
              <?php
              if($freq == "Annual"){
                echo "";
              }
              else {
                echo "($freq)";
              }
              ?>
            </label>
            <?php
            if($freq == "Annual"){
              echo "<input type=\"text\" class=\"form-control\" id=\"balanceAnnual$id\"  placeholder=\"Balance\" name=\"memberCurrent\">";
            }
            else {
              echo "<input type=\"text\" class=\"form-control\" id=\"balanceFreq$id\"  placeholder=\"Balance\" name=\"memberCurrent\">";
            }
            ?>
          </div> -->

          <div class="form-group col-xs-4">
            <label>Remaining Balance</label>
            <p>Php <?php echo $balance ?></p>
            <input type="hidden" id="remainingBalance<?php echo $id ?>" value="<?php echo $balance ?>" name="memberRemainingBalance">
          </div>

          <div class="form-group col-xs-6">
            <label>Amount Paid</label>
            <?php
            if($freq == "Annual"){
              echo "<input type=\"text\" class=\"form-control amountPaidAnnual\" id=\"amountPaidAnnual$id\"  placeholder=\"Amount Paid\" name=\"memberPaid\"> onclick=\"commaformatpayment($id)\"";
             }
            else {
              echo "<input type=\"text\" class=\"form-control amountPaidFreq\" id=\"amountPaidFreq$id\"  placeholder=\"Amount Paid\" name=\"memberPaid\" onclick=\"commaformatpayment($id)\">";
            }
            ?>
          </div>

          <div class="form-group col-xs-6">
            <label>Total Balance</label>
            <input type="text" class="form-control" id="totalBalance<?php echo $id ?>" placeholder="Total Balance" name="memberTotalBalance">
          </div>

      </div>
      <div class="modal-footer">
        <input type="button" data-dismiss="modal" class="btn btn-danger pull-left" value="Close">
        <input type="hidden"  name="id" value="<?php echo $id ?>">
        <input type="submit" class="btn btn-success" name="btnTag" value="Tag">
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<?php

if(isset($_POST['btnTag'])){

  require 'parts/php/post/collection/payment/btnTag.php';

}

?>


<script>
//
// $(document).ready(function(){
//
//     $("#annualAmountToPay"+id).keyup(function(){
//       calculateBalanceAnnual();
//     });
//
//     $("#amountPaidAnnual"+id).keyup(function(){
//       calculateBalanceAnnual();
//     });
//
//     $("#freqAmountToPay"+id).keyup(function(){
//       calculateBalanceFreq();
//     });
//
//     $("#amountPaidFreq"+id).keyup(function(){
//       calculateBalanceFreq();
//     });
//
//     $("#planAmount"+id).keyup(function(){
//       calculateBalanceFreq();
//       calculateBalanceAnnual();
//     });
// });
//
// document.getElementById('amountPaidAnnual'+id).value = annual;
//
//       $('#amountPaidAnnual'+id).slideDown('fast');
//
//       $('#amountPaidAnnual'+id).on('change',function(){
//         console.log('Change event.');
//         var val = $('#amountPaidAnnual'+id).val();
//         $('#the_number').text( val !== '' ? val : '(empty)' );
//       });
//
//       $('#amountPaidAnnual'+id).change(function(){
//         console.log('Second change event...');
//       });
//
//       $('#amountPaidAnnual'+id).number( true, 2 );
// }
//
// document.getElementById('amountPaidFreq'+id).value = annual;
//
//       $('#amountPaidFreq'+id).slideDown('fast');
//
//       $('#amountPaidFreq'+id).on('change',function(){
//         console.log('Change event.');
//         var val = $('#amountPaidFreq'+id).val();
//         $('#the_number').text( val !== '' ? val : '(empty)' );
//       });
//
//       $('#amountPaidFreq'+id).change(function(){
//         console.log('Second change event...');
//       });
//
//       $('#amountPaidFreq'+id).number( true, 2 );
// }
//
// function calculateBalanceAnnual(){
//
//   // var annualPaymentBalance =  parseInt($('#annualAmountToPay<?php echo $id ?>').val()) - parseInt($('#amountPaidAnnual<?php echo $id ?>').val());
//   // document.getElementById('balanceAnnual<?php echo $id ?>').value = annualPaymentBalance.toFixed(2);
//
// var totalBalance =  parseInt($('#remainingBalance'+id).val()) - parseInt($('#amountPaidAnnual'+id).val());
//   document.getElementById('totalBalance'+id).value = totalBalance.toFixed(2);
// }
//
// function calculateBalanceFreq(){
//
//   // var frequencyPaymentBalance =  parseInt($('#freqAmountToPay<?php echo $id ?>').val()) - parseInt($('#amountPaidFreq<?php echo $id ?>').val());
//   // document.getElementById('balanceFreq<?php echo $id ?>').value = frequencyPaymentBalance.toFixed(2);
//
//   var totalBalance =  parseInt($('#remainingBalance'+id).val()) - parseInt($('#amountPaidFreq'+id).val());
//     document.getElementById('totalBalance'+id).value = totalBalance.toFixed(2);
// }
function calculateBalanceAnnual(id){

  // var annualPaymentBalance =  parseInt($('#annualAmountToPay<?php echo $id ?>').val()) - parseInt($('#amountPaidAnnual<?php echo $id ?>').val());
  // document.getElementById('balanceAnnual<?php echo $id ?>').value = annualPaymentBalance.toFixed(2);

var totalBalance =  parseInt($('#remainingBalance'+id).val()) - parseInt($('#amountPaidAnnual'+id).val());
  document.getElementById('totalBalance'+id).value = totalBalance.toFixed(2);

  $('#balanceAnnual'+id).slideDown('fast');

        $('#balanceAnnual'+id).on('change',function(){
          console.log('Change event.');
          var val = $('#balanceAnnual'+id).val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#balanceAnnual'+id).change(function(){
          console.log('Second change event...');
        });

        $('#balanceAnnual'+id).number( true, 2 );


        $('#totalBalance'+id).on('change',function(){
          console.log('Change event.');
          //compare every click
            amount = parseInt($('#totalBalance'+id).val());
            balance = parseInt($('#remainingBalance'+id).val());
            if( parseFloat( amount) >= parsefloat(balance)) {
            amount = 0;
            $('#totalBalance'+id).val(amount);
            }
          //end
          var val = $('#totalBalance'+id).val();

          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

         $('#totalBalance'+id).change(function(){
           console.log('Second change event...');
         });

         $('#totalBalance'+id).number( true, 2 );

}

function calculateBalanceFreq(id){

  // var frequencyPaymentBalance =  parseInt($('#freqAmountToPay<?php echo $id ?>').val()) - parseInt($('#amountPaidFreq<?php echo $id ?>').val());
  // document.getElementById('balanceFreq<?php echo $id ?>').value = frequencyPaymentBalance.toFixed(2);

  var totalBalance =  parseInt($('#remainingBalance'+id).val()) - parseInt($('#amountPaidFreq'+id).val());
    document.getElementById('totalBalance'+id).value = totalBalance.toFixed(2);

    $('#balanceFreq'+id).slideDown('fast');

          $('#balanceFreq'+id).on('change',function(){
            console.log('Change event.');
            var val = $('#balanceFreq'+id).val();
            $('#the_number').text( val !== '' ? val : '(empty)' );
          });

          $('#balanceFreq'+id).change(function(){
            console.log('Second change event...');
          });

          $('#balanceFreq'+id).number( true, 2 );

          $('#totalBalance'+id).on('change',function(){
            console.log('Change event.');
            //compare every click
            amount = parseInt($('#totalBalance'+id).val());
            balance = parseInt($('#remainingBalance'+id).val());
            if ( parsefloat(amount) >= parsefloat(balance)) {

            amount = 0;
            $('#totalBalance'+id).val(amount);
            }
          //end
            var val = $('#totalBalance'+id).val();
            $('#the_number').text( val !== '' ? val : '(empty)' );
          });

           $('#totalBalance'+id).change(function(){
             console.log('Second change event...');
           });

           $('#totalBalance'+id).number( true, 2 );
}

function commaformatpayment(id){
    // Set up the number formatting.

    $("#annualAmountToPay"+id).keyup(function(){
      calculateBalanceAnnual(id);
    });

    $("#amountPaidAnnual"+id).keyup(function(){
      calculateBalanceAnnual(id);
    });

    $("#freqAmountToPay"+id).keyup(function(){
      calculateBalanceFreq(id);
    });

    $("#amountPaidFreq"+id).keyup(function(){
      calculateBalanceFreq(id);

    });

    $("#planAmount"+id).keyup(function(){
      calculateBalanceFreq(id);
      calculateBalanceAnnual(id);
    });

    $('#number_container').slideDown('fast');

    $('#amountPaidAnnual'+id).on('change',function(){
      console.log('Change event.');
      //compare every click
            var amount = parseInt($('#amountPaidAnnual'+id).val());
            var balance = parseInt($('#remainingBalance'+id).val());
            if ( amount >= balance) {
            amount = parseInt(balance);
            $('#amountPaidAnnual'+id).val(amount);
            }
          //end
      var val = $('#amountPaidAnnual'+id).val();
      $('#the_number').text( val !== '' ? val : '(empty)' );
    });
//
    $('#amountPaidFreq'+id).on('change',function(){
      console.log('Change event.');
      //compare every click
            var amount = parseInt($('#amountPaidFreq'+id).val());
            var balance = parseInt($('#remainingBalance'+id).val());
            if ( amount >= balance) {
            amount = parseInt(balance);
            $('#amountPaidFreq'+id).val(amount);
            }
          //end
      var val = $('#amountPaidFreq'+id).val();
      $('#the_number').text( val !== '' ? val : '(empty)' );
    });
//
    $('#amountPaidAnnual'+id).keyup(function(){
      console.log('Second change event...');
      //compare every click
            var amount = parseInt($('#amountPaidAnnual'+id).val());
            var balance = parseInt($('#remainingBalance'+id).val());
            if ( amount >= balance) {
            amount = parseInt(balance);
            $('#amountPaidAnnual'+id).val(amount);
            }
          //end
    });

    $('#amountPaidAnnual'+id).number( true, 2 );
//
    $('#amountPaidFreq'+id).keyup(function(){
      console.log('Second change event...');
      //compare every click
            var amount = parseInt($('#amountPaidFreq'+id).val());
            var balance = parseInt($('#remainingBalance'+id).val());
            if ( amount >= balance) {
            amount = parseInt(balance);
            $('#amountPaidFreq'+id).val(amount);
            }
          //end
    });

    $('#amountPaidFreq'+id).number( true, 2 );
//
    // Get the value of the number for the demo.
    $('#get_number').on('click',function(){

      var val = $('#planMaximum'+id).val();

      $('#the_number').text(  );
    });
  }


</script>
