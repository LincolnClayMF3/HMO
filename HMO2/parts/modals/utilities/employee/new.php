<div class="modal fade" id="newEmployee" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 6em; margin-left: 1em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Employee
        </h4>
      </div>
      <div class="modal-body">
        <form class="requireform" role="form" method="post" autocomplete="off">

          <div class="form-group col-xs-12">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Employee Type</label>
            <div class="radio" align="center">
              <label>
                <input type="radio" name="employeeType" value="Administrator">
                Administrator
              </label>&nbsp;&nbsp;
              <label>
                <input type="radio"  name="employeeType"  value="Coordinator">
                Hospital Coordinator
              </label>
            </div>
          </div>

          <div class="form-group col-xs-4">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Last Name</label>
            <input type="text" class="form-control" name="employeeLastName" placeholder="Last Name" required maxlength="40" onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> First Name</label>
            <input type="text" class="form-control" name="employeeFirstName" placeholder="First Name" required maxlength="40" onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-4">
          <label>Middle Name</label>
            <input type="text" class="form-control" name="employeeMiddleName" placeholder="Middle Name" required maxlength="40" onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-4">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Telephone No.</label>
            <input type="text" class="form-control" name="employeeTelephone" placeholder="Telephone" required maxlength="7">
          </div>

          <div class="form-group col-xs-4">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Mobile No.</label>
            <input type="text" class="form-control" name="employeeMobile" placeholder="Mobile" required maxlength="11">
          </div>

          <div class="form-group col-xs-4">
          <label>Email</label>
            <input type="text" class="form-control" name="employeeEmail" placeholder="Email" maxlength="40">
          </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Birthdate</label>
          <input type="date" class="form-control" name="employeeBday">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
          <div class="radio">
            <label>
              <input type="radio" name="status" value="Active" checked>
              Active
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio"  name="status"  value="Inactive" disabled>
              Inactive
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Username</label>
          <input type="text" class="form-control" name="employeeUsername" placeholder="Username" maxlength="40">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Password</label>
          <input type="password" class="form-control" name="employeePassword" placeholder="Password" maxlength="40">
        </div>

      </div>
      <div class="modal-footer">
        <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red"></span> are Required</p>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
        <input type="submit" class="btn btn-success" name="btnCreate" value="Create">
      </form>
      </div>
    </div>
  </div>
</div>


<?php

if(isset($_POST['btnCreate'])){

  require 'parts/php/post/utilities/employee/btnCreate.php';

}

?>
