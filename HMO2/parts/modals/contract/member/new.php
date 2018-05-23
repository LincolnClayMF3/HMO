<div class="modal fade" id="newMember" role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content" style="margin-top: 5em; margin-left: -5em; margin-right: -7em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Member
        </h4>
      </div>
      <form method="post"; autocomplete="off">

      <div class="modal-body tabbable tab-content form-group">

      <div class="tab-pane active fadeInDown animated" id="member">
        <div class="form-group col-xs-12" align="center">
          <p style="font-style: italic">Member Details</p>
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Member Name</label>
          <input id="memberName" type="text" class="form-control" name="memberName" placeholder="Enter Member Name">
        </div>


        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Date of Birth</label>
          <input id="memberBday" type="date" class="form-control" name="memberBday" placeholder="Enter Date of Birth">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Age</label>
          <input id="memberAge" type="text" class="form-control" name="memberAge" placeholder="Enter Year of Age" >
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Height</label>
          <input id="memberHeight" type="text" class="form-control" name="memberHeight" placeholder="Feet">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Weight</label>
          <input id="memberWeight" type="text" class="form-control" name="memberWeight" placeholder="Kilogram">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Gender</label>
          <div class="radio">
            <label>
              <input type="radio" name="gender" value="Male">
              Male
            </label>&nbsp;&nbsp;

            <label>
              <input type="radio" name="gender" value="Female">
              Female
            </label>
        </div>
      </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Civil Status</label>
            <select class="form-control" name="memberCivil">
              <option value="">--Select Civil Status--</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Widowed">Widowed</option>
              <option value="Separated">Separated</option>
            </select>
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Address</label>
          <input id="memberAddress" type="text" class="form-control" name="memberAddress" placeholder="Enter Address">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Occupation</label>
          <input id="memberOccupation" type="text" class="form-control" name="memberOccupation" placeholder="Enter Occupation">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Telephone</label>
          <input id="memberTelephone" type="text" class="form-control" name="memberTelephone" placeholder="Enter Telephone">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Mobile</label>
          <input id="memberMobile" type="text" class="form-control" name="memberMobile" placeholder="Enter Mobile">
        </div>

        <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Email</label>
          <input id="memberEmail" type="email" class="form-control" name="memberEmail" placeholder="Enter Email">
        </div>

        <div class="form-group col-xs-12">
          <p style="color: red; font-style: italic" class="pull-right">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red"></span> are Required</p>
        </div>

        <a href="#plan" data-toggle="tab" class="btn btn pull-right">
          <button id="firstbutton" type="button" class="btn btn-primary pull-right firstbutton2">Next</button>
        </a>

      <a href="#" class="btn btn pull-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </a>
  </div>


<div class="tab-pane fadeInDown animated" id="plan">
  <div class="form-group col-xs-12" align="center">
    <p style="font-style: italic">Plan Details</p>
  </div>

  <!-- <div class="form-group col-xs-4">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Specification</label>
    <input type="text" class="form-control" value="Principal" disabled>
  </div> -->


  <div class="form-group col-xs-6">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Membership Type</label>
    <select class="form-control membership" id="membership" name="memberType">

    </select>
  </div>

  <div class="form-group col-xs-6">
    <label><span class="glyphicon glyphicon-asterisk" style="color:blue"></span> Company</label>
    <select class="form-control company" id="company" name="memberCompany" disabled>

    </select>
  </div>

  <div class="form-group col-xs-4">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Preferred Plan</label>
    <select class="form-control plans" id="plans" name="memberPlan">

    </select>
  </div>

  <div class="form-group col-xs-4">
    <label>Plan Amount</label>
    <input type="text" class="form-control planAmount" id="amount" name="memberPlanAmount">
  </div>

  <div class="form-group col-xs-4">
    <label>Annual Payment</label>
    <input type="text" class="form-control planAnnualPayment" id="annual" name="memberPlanAnnual">
  </div>

  <div class="form-group col-xs-6">
    <label>Payment Frequency</label>
    <select class="form-control memberFrequency" id="memberFrequency" name="memberFrequency">
      <option value="">--Select Frequency--</option>
      <option value="Annual|1"></option>
      <option value="Monthly|12">Monthly</option>
      <option value="Quarterly|4">Quarterly</option>
      <option value="Semi-Annual|2">Semi-Annual</option>
    </select>
  </div>

  <div class="form-group col-xs-6">
    <label>Amount to be Paid</label>
    <input type="text" class="form-control amountToPay" id="amountToPay" name="amountToPay">
  </div>

  <!-- <div class="form-group col-xs-4">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Mode of Payment</label>
    <div class="radio" id="memberMode">
      <label>
        <input type="radio" name="mode" value="Cash">
        Cash
      </label>&nbsp;&nbsp;

      <label>
        <input type="radio" name="mode" value="Credit">
        Credit
      </label>
    </div>
  </div> -->

  <div class="form-group col-xs-6">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
    <div class="radio">
      <label>
        <input type="radio" name="status" value="Active" checked>
        Active
      </label>&nbsp;&nbsp;

      <label>
        <input type="radio"  name="status"  value="Inactive" disabled>
        Inactive
      </label>
    </div>
  </div>

  <!-- <div class="form-group col-xs-4">
    <?php
      $entry = date('Y-m-d');
      $end = date('Y-m-d', strtotime('+1 year'));
    ?>
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Entry Date</label>
    <input id="memberEffectivity" type="date" value="<?php echo $entry ?>" class="form-control" name="memberEffectivity" disabled>
  </div> -->

  <div class="form-group col-xs-6">
    <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> End of Contract</label>
    <input id="memberEnd" type="date" value="<?php echo $end ?>" class="form-control" name="memberEnd">
  </div>

  <div class="form-group col-xs-12">
    <p style="color: red; font-style: italic" class="pull-right">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red"></span> asterisk are Required</p>
  </div>

  <a href="#pec" data-toggle="tab" class="btn btn pull-right">
    <button id="secondbutton2" type="button" class="btn btn-primary pull-right secondbutton2">Next</button>
  </a>

  <a href="#member" data-toggle="tab" class="btn btn pull-left">
    <button id="firstback2" type="button" class="btn btn-danger pull-right firstback2">Back</button>
  </a>
</div>

<div class="tab-pane fadeInDown animated" id="pec">
  <div class="form-group col-xs-12" align="center">
    <p style="font-style: italic">Pre Existing Condition</p>
  </div>

  <div class="form-group col-xs-12">
    <div class="box" style="overflow:auto; height: 250px">
    <table class="table table-bordered"  align= "center">
      <tr>
        <th>Pre Existing Condition</th>
        <th>Description</th>
      </tr>
      <?php
        $pec = mysqli_query($con, "SELECT * FROM tblpec WHERE status = 'Active'");
        while ($row = mysqli_fetch_array($pec)) {
          $name = $row['pecName'];
          $desc = $row['pecDesc'];
          $id = $row['pecID'];

        echo "<tr><td><input id=\"memberpec\" type = \"checkbox\" value=\"$id\" name=\"memberPEC[]\">&nbsp;&nbsp;$name</td>
                  <td>$desc</td>
              </tr>";
        }
      ?>
    </table>
  </div>
</div>

<div class="form-group col-xs-12">
  <p style="color: blue; font-style: italic" class="pull-right">Leave Blank if you do not have any</p>
</div>

  <a href="#dependents" data-toggle="tab" class="btn btn pull-right">
    <button id="thirdbutton" type="button" class="btn btn-primary thirdbutton2">Next</button>
  </a>

  <a href="#plan" data-toggle="tab" class="btn btn pull-left">
    <button id="secondback" type="button" class="btn btn-danger secondback2">Back</button>
  </a>

</div>

<div class="tab-pane fadeInDown animated" id="dependents">
  <div class="form-group col-xs-12" align="center">
    <p style="font-style: italic">Dependents</p>
  </div>

<div class="form-group col-xs-3">
  <p>Name</p>
</div>

<div class="form-group col-xs-3">
  <p>Birthdate</p>
</div>

<div class="form-group col-xs-3">
  <p>Relationship</p>
</div>

<div class="form-group col-xs-3">
  <p>Civil Status</p>
</div>

<div class="form-group col-xs-12" style="overflow:auto; height: 250px">

  <div class="form-group">
    <table class="table table-bordered tableDependents" id="tableDependents">
      <tr>
        <td><input type="text" name="dependentName[]" id="name" placeholder="Name" class="form-control"></td>
        <td><input type="date" name="dependentBday[]" id="bday" placeholder="Birth Date" class="form-control"></td>
        <!-- <td><input type="text" name="dependentRelationship[]" id="relationship" placeholder="Relationship" class="form-control"></td> -->
        <td><select class="form-control relation" name="dependentRelationship[]" id="relationship"><option>----</option><option value="Father">Father</option><option value="Mother">Mother</option><option value="Brother">Brother</option><option value="Sister">Sister</option><option value="Grandfather">Grandfather</option><option value="Grandmother">Grandmother</option><option value="Uncle">Uncle</option><option value="Auntie">Auntie</option><option value="Cousin">Cousin</option></select></td>
        <td><select class="form-control" name="dependentCivilStatus[]" id="civil"><option>----</option><option value="Single">Single</option><option value="Married">Married</option><option value="Widowed">Widowed</option><option value="Separated">Separated</option></select></td>
        <td><button type="button" name="add" id="add" class="btn-success btn-sm add">+</button></td>
      </tr>
    </table>
  </div>

</div>

  <div class="form-group col-xs-12">
    <p style="color: red; font-style: italic" class="pull-right">Note: All fields are Required</p>
  </div>

<a href="#pec" data-toggle="tab" class="btn btn pull-left">
  <button id="thirdback" type="button" class="btn btn-danger thirdback2">Back</button>
</a>

<a class="btn btn pull-right">
  <input type="submit" class="btn btn-success" name="btnCreate" id="submit" value="Create" onclick="Create()">
</a>

</div>

</div>
</form>
      <div class="modal-footer">
      </div>
  </div>
</div>
</div>

<?php

if(isset($_POST['btnCreate'])){

require 'parts/php/post/contract/member/btnCreate.php';
require 'parts/modals/contract/member/generate.php';

}

?>

<!-- ADDING COMMAS IN INPUT FIELDS -->
    <script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
<!-- END -->

<script>

$(document).ready(function(){

  var i = 1;

  $('.add').click(function(){
    i++;
    $('.tableDependents').append('<tr id="row'+i+'"><td><input type="text" name="dependentName[]" id="name" placeholder="Name" class="form-control"></td><td><input type="date" name="dependentBday[]" id="bday" placeholder="Birth Date" class="form-control"></td><td><select class="form-control" name="dependentRelationship[]" id="relationship"><option>----</option><option value="Father">Father</option><option value="Mother">Mother</option><option value="Brother">Brother</option><option value="Sister">Sister</option><option value="Grandfather">Grandfather</option><option value="Grandmother">Grandmother</option><option value="Uncle">Uncle</option><option value="Auntie">Auntie</option><option value="Cousin">Cousin</option></select></td><td><select class="form-control" name="dependentCivilStatus[]" id="civil"><option>----</option><option value="Single">Single</option><option value="Married">Married</option><option value="Widowed">Widowed</option><option>Separated</option></select></td><td><button name="remove" id="'+i+'" class="btn-danger btn-sm btn_remove">X</button></td></tr>');


  $(document).on('click','.btn_remove', function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
  });

});

});


function Membership(){
  $('.membership').empty();
  $('.membership').append("<option>Loading....</option>");

  $.ajax({
    type: "POST",
    url: "membershipType.php",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data){
      $('.membership').empty();
      $('.membership').append("<option value = ''>-Select Membership Type-</option>");
      $.each(data,function(i,item){
        $('.membership').append('<option value = "'+ data[i].id+'|'+data[i].percent +'|'+ data[i].name +'">'+ data[i].name +'</option>');
  });
},
complete: function(){

}
});
}

function Company(comp){
$('.company').empty();
$('.plans').append("<option value = ''>Loading.....</option>");
$.ajax({
  type: "POST",
  url: "company.php?comp="+comp,
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success: function(data){
    $('.company').empty();
    $('.company').append("<option value = ''>--Select Company--</option>");
    $.each(data,function(i,item){
      $('.company').append('<option value = "'+ data[i].id +'">'+ data[i].name +'</option>');
});
},
complete: function(){

}
});
}

$(document).ready(function(){
Membership();
$(".membership").change(function(){
  var membershipID = $(".membership").val();
  Company(membershipID);
});
});

function CompanyPlan(plan){
$('.plans').empty();
$.ajax({
  type: "POST",
  url: "companyPlan.php?plan="+plan,
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success: function(data2){
    $('.plans').empty();
    $('.plans').append("<option value = ''>--Select Plan--</option>");
    $.each(data2,function(i,item){
      $('.plans').append('<option value = "'+ data2[i].id2 +'">'+ data2[i].name2 +'</option>');
});
},
complete: function(){

}
});
}

$(document).ready(function(){
Company();
$(".company").change(function(){
  var companyID = $(".company").val();
  CompanyPlan(companyID);
});
});

function Plan(){
  $('.plans').empty();

  $.ajax({
    type: "POST",
    url: "plan.php",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data){
      $('.plans').empty();
      $('.plans').append("<option value = ''>--Select Plan--</option>");
      $.each(data,function(i,item){
        $('.plans').append('<option value = "'+ data[i].id +'">'+ data[i].name +'</option>');
  });
},
complete: function(){

}
});
}

function Amount(amount){
$('.planAmount').empty();
$('.planAnnualPayment').empty();

$.ajax({
  type: "POST",
  url: "amount.php?amount="+amount,
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success: function(data){
    $('.planAmount').empty();
    $('.planAnnualPayment').empty();

    $.each(data,function(i,item){
      $('.planAmount').val(data[i].name);

        //Adding Commas in Plan Amount Label
        $('#number_container').slideDown('fast');

        $('.planAmount').on('change',function(){
          console.log('Change event.');
          var val = $('.planAmount').val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('.planAmount').change(function(){
          console.log('Second change event...');
        });

        $('.planAmount').number( true, 2 );
        //END

      $('.planAnnualPayment').val(data[i].amount);

        //Adding Commas in Plan Annual Payment Label
        $('#number_container').slideDown('fast');

        $('.planAnnualPayment').on('change',function(){
          console.log('Change event.');
          var val = $('.planAnnualPayment').val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('.planAnnualPayment').change(function(){
          console.log('Second change event...');
        });

        $('.planAnnualPayment').number( true, 2 );
        //END

      // $('.planAmount').append('<option value = "'+ data[i].name +'">Php '+ data[i].name +'</option>');
      // $('.planAnnualPayment').append('<option value = "'+ data[i].amount +'">Php '+ data[i].amount +'</option>');
      // var input = $("#planAmount");
      // input.val(input.val() + data[i].amount)
});
},
complete: function(){

}
});
}

$(document).ready(function(){
Plan();
$(".plans").change(function(){
  var planID = $(".plans").val();
  Amount(planID);
});
});

$(document).ready(function(){

    $(".membership").change(function(){
      calculatePayment();
    });

    $(".planAnnualPayment").change(function(){
      calculatePayment();
    });

    $(".memberFrequency").change(function(){
      calculatePayment();
    });

});

function calculatePayment(){

  var percentage = document.getElementById("membership").value;
  var splitPercent = percentage.split("|");
  var percent = splitPercent['1'];

  var value = document.getElementById("memberFrequency").value;
  var splitFreq = value.split("|");
  var freq = splitFreq['1'];

  var addedPercentage =  parseInt($('.planAnnualPayment').val()) * (parseFloat(percent) / 100);
  var totalAnnualPayment = addedPercentage + parseInt($('.planAnnualPayment').val());
  var totalFreqPayment = totalAnnualPayment / parseInt(freq);

  document.getElementById('amountToPay').value = totalFreqPayment;
//Adding Comma in Amount To be Paid Label
  $('#amountToPay').slideDown('fast');

        $('#amountToPay').on('change',function(){
          console.log('Change event.');
          var val = $('#amountToPay').val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#amountToPay').change(function(){
          console.log('Second change event...');
        });

        $('#amountToPay').number( true, 2 );
    //END

}

$(".add_member").click(function(){

  if($("select[name=memberSpecs]").val() == 2){
    $("input[id=name]").prop('disabled', true);
    $("input[id=bday]").prop('disabled', true);
    $("input[id=relationship]").prop('disabled', true);
    $("select[id=civil]").prop('disabled', true);
    $("input[button=add]").prop('disabled', true);
  }
  else if ($("select[name=memberSpecs]").val() == 1) {
    $("input[id=name]").prop('disabled', false);
    $("input[id=bday]").prop('disabled', false);
    $("input[id=relationship]").prop('disabled', false);
    $("select[id=civil]").prop('disabled', false);
    $("input[button=add]").prop('disabled', false);
  }

});


$(".membership").change(function(){

  var name = document.getElementById("membership").value;
  var splitName = name.split("|");
  var value = splitName['2'];


  if(value == 'Corporate'){
    CompanyPlan();
    calculatePayment();
    $("input[name=mode]").prop('disabled', true);
    $("input[name=mode]").prop('checked', false);
    $("input[id=amountToPay]").prop('disabled', true);
    $("select[id=memberFrequency]").prop('disabled', true);
    $("select[id=company]").prop('disabled', false);
    $('#amount').val('');
    $('#annual').val('');
    $('#memberFrequency').val('');
    $('#amountToPay').val('');
  }

  else if(value == 'Individual'){
    Plan();
    $("input[name=mode]").prop('disabled', false);
    $("input[name=mode]").prop('checked', false);
    $("input[id=name]").prop('disabled', true);
    $("select[id=relationship]").prop('disabled', true);
    $("input[id=bday]").prop('disabled', true);
    $("select[id=civil]").prop('disabled', true);
    $("input[id=amountToPay]").prop('disabled', false);
    $("select[id=memberFrequency]").prop('disabled', false);
    $("select[id=company]").prop('disabled', true);
    $('#amount').val('');
    $('#annual').val('');
    $('#memberFrequency').val('');
    $('#amountToPay').val('');
  }


});

$(".company").change(function(){
  $('#amount').val('');
  $('#annual').val('');
  $('#memberFrequency').val('');
  $('#amountToPay').val('');
});



</script>
