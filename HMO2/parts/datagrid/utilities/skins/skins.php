<?php

$fetchSkins = mysqli_query($con, "SELECT * FROM tblskins");

while ($row = mysqli_fetch_array($fetchSkins)) {

  $id = $row['utilitiesID'];
  $name = $row['utilitiesskin'];

}
?>
<form id="layoutskins" method="post" autocomplete="off" enctype="multipart/form-data">

  <div style="padding:100px; float:right;  width: 100%; height: 100%;" class="btn btn-outline-secondary ">
    <center>
      <img id="uploadPreview" style="width: 100px; height: 100px;" />
    </center>
    <center>
        <input id="myPhoto" type="file" name="Filename" onchange="PreviewImage();"/>
    </center>
    <input type="submit" name="submit"></input>

  </div>
<div class="box box-solid" style="clear:both; max-width: 300px;">
    <div class="box-body no-padding">




        <table id="layout-skins-list" class="table table-striped bring-up nth-2-center">
            <thead>
                <tr>
                    <th style="width: 210px;">Skin Class</th>
                    <th>Preview</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>skin-blue</code>
                    </td>
                    <td>
                        <button id="skinblue" href="#" data-skin="skin-blue" class="btn btn-primary btn-xs skin-blue" value="skin-blue" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-blue-light</code>
                    </td>
                    <td>
                        <button id="skinbluelight" href="#" data-skin="skin-blue-light" class="btn btn-primary btn-xs" value="skin-blue-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-yellow</code>
                    </td>
                    <td>
                        <button id="skinyellow" href="#" data-skin="skin-yellow" class="btn btn-warning btn-xs" value="skin-yellow" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-yellow-light</code>
                    </td>
                    <td>
                        <button id="skinyellowlight" href="#" data-skin="skin-yellow-light" class="btn btn-warning btn-xs" value="skin-yellow-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-green</code>
                    </td>
                    <td>
                        <button id="skingreen" href="#" data-skin="skin-green" class="btn btn-success btn-xs" value="skin-green" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-green-light</code>
                    </td>
                    <td>
                        <button id="skingreenlight" href="#" data-skin="skin-green-light" class="btn btn-success btn-xs" value="skin-green-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-purple</code>
                    </td>
                    <td>
                        <button id="skinpurple" href="#" data-skin="skin-purple" class="btn bg-purple btn-xs" value="skin-purple" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-purple-light</code>
                    </td>
                    <td>
                        <button id="skinpurplelight" href="#" data-skin="skin-purple-light" class="btn bg-purple btn-xs" value="skin-purple-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-red</code>
                    </td>
                    <td>
                        <button id="skinred" href="#" data-skin="skin-red" class="btn btn-danger btn-xs" value="skin-red" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-red-light</code>
                    </td>
                    <td>
                        <button id="skinredlight" href="#" data-skin="skin-red-light" class="btn btn-danger btn-xs" value="skin-red-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/eye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-black</code>
                    </td>
                    <td>
                        <button id="skinblack" href="#" data-skin="skin-black" class="btn bg-black btn-xs" value="skin-black" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/whiteeye.png" /><i class="fa fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><code>skin-black-light</code>
                    </td>
                    <td>
                      <button id="skinblacklight" href="#" data-skin="skin-black-light" class="btn bg-black btn-xs" value="skin-black-light" name="btnUpdate"><img align="middle" height="20px" width="20px" src="dist/img/whiteeye.png" /><i class="fa fa-eye"></i>
                      </button>
                    </td>
                </tr>
            </tbody>
            <input type="hidden" value="<?php echo $id?>" name="id">
        </table>

    </div>
    <!-- /.box-body -->
</div>
</div>
<!-- /.box -->
</form>
<script type="text/javascript">

function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("myPhoto").files[0]);

oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};

</script>


<?php

if(isset($_POST['btnUpdate'])){

  require 'parts/php/post/utilities/skins/btnUpdate.php';

}
else if (isset($_POST['submit'])) {

  require 'parts/php/post/utilities/logo/btnUpdate.php';


}
?>
