<?php
$result = mysqli_query($con, "SELECT m1.memberTransID, m1.memberTransName, m1.memberTransEmail,
          m1.memberFrequency, m1.memberEffectivityDate, p1.planName, m1.memberTransAmountToPay
          FROM tblmembertransaction m1
          INNER JOIN tblmemberplan m3 ON m3.intMemberID = m1.memberTransID
          INNER JOIN tblplan p1 ON p1.planID = m3.intPlanID WHERE m1.status = 'Active'" );
          $ctr = 2;
          $noctr = 2;

          while ($row = mysqli_fetch_array($result)) {
            $id = $row['memberTransID'];
            $email = $row['memberTransEmail'];
            $name = $row['memberTransName'];
            $payment = $row['memberTransAmountToPay'];
            $plan = $row['planName'];
            $entry = $row['memberEffectivityDate'];
            $freq = $row['memberFrequency'];

?>


<div class="modal fade" id="billMember<?php echo $id?>" role="dialog" style="width: 150%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: -2em; margin-left: -45em">
      <div class="modal-body" style="width: 120%; margin-left: -17em">
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Mailbox
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Transaction-Billing</a></li>
              <li class="active">Mailbox</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-3">
                <a data-dismiss="modal" class="btn btn-danger btn-block margin-bottom">Back</a>

                <a class="btn btn-success btn-md btn-block" onclick="send(<?php echo $id?>)">Send</a>

<?php
$temp1 = $id;
$temp2 = $email;
 echo $temp1;
?>

                <form method="get" target="_blank" action="parts/modals/collection/billing/voucher.php">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Folders</h3>
                    <div class="box-tools">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                      <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                      <li><a href="#"><i class="fa fa-filter"></i> Junk</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                    </ul>
                  </div><!-- /.box-body -->
                </div><!-- /. box -->
              </div><!-- /.col -->
              <div class="col-md-9">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Compose New Message</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="form-group">
                      <input type="text" id="email<?php echo $id?>" class="form-control email" value="<?php echo $email?>" name="email" placeholder="To:">
                    </div>
                    <div class="form-group">
                      <input class="form-control" value="Plan Payment" placeholder="Subject:">
                    </div>
                    <div class="form-group">
                      <?php
                      $due = date('Y-m-d', strtotime("+5 days"));
                      $convertDueDate = date("M jS, Y", strtotime("$due"));
                      ?>
                      <textarea id="compose-textarea<?php echo $id?>" class="form-control" style="height: 300px">
                          Health Maintenance Organization
                          Payment Voucher

                          This email serves a reminder that you need to
                          settle your payment for your plan until
                          <?php echo $convertDueDate ?>


                          Plan Name: <?php echo $plan ?>

                          Payment Frequency: <?php echo $freq ?>

                          Amount To be Paid: Php <?php echo $payment ?>


                          You can use the voucher attached and present it
                          to a nearest accredited bank.

                        Thank you,
                        <?php echo $name ?>
                      </textarea>
                      <input type="hidden" value="<?php echo $id ?>" name="id">
                      <input type="hidden" value="<?php echo $name ?>" name="name">
                      <input type="hidden" value="<?php echo $plan ?>" name="plan">
                      <input type="hidden" value="<?php echo $payment ?>" name="payment">
                      <input type="hidden" value="<?php echo $entry ?>" name="entry">
                      <input type="hidden" value="<?php echo $freq ?>" name="frequency">
                    </div>
                    <div class="form-group">
                      <input type="submit"  name="btnGenerate" value="Generate Voucher">
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /. box -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
      </div>
      </form>

    </div>
  </div>
</div>
<script>
  // $(function () {
  //   //Add text editor
  //   $("#compose-textarea").wysihtml5();
  // });

  function send(id){
    var email = $("#email"+id).val();
    alert(email);
    var message = $("#compose-textarea"+id).val();
    alert(message);
    $.ajax({
      url:'email.php',
      dataType:'json',
      data:{
        'email':email,
        'message':message
      },
      complete: function(data){

      }
    });

  }
</script>

<?php } ?>

<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
