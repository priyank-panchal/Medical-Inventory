<?php
session_start();
 include 'controller/c_profile.php';
if(!isset($_SESSION['customer']))
{
    ?>
    <script type="text/javascript">
      alert("YOU HAVE TO LOGIN FIRST");
      window.location="login.php";
    </script>
<?php
}?>
<!DOCTYPE html>
<html lang="en">

<?php include'script_user.php';?>
<body>
      <?php include 'links.php';?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Profile</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="name" value="<?php echo $selectall->c_name; ?>">
                  </div>
                  <div class="error" style="color: red"><?php echo $val; ?></div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">   
                     <label for="c_area" class="text-black">Area<span class="text-danger">*</span></label>
                      <select class="form-control dropdown-item" name="aname" style="border:1px solid #d2d2e4; "value="<?php echo $areaname;?>">
                       
                          <?php 
                            foreach ($b as $value) {
                          ?>
                            <option value="<?php echo $value->area_id;?>" <?php if($value->area_id==$selectall->area_id){
                              echo "selected";
                            } ?>><?php echo $value->area_name; ?></option> 
                            <?php           
                              }
                            ?>
                        </select>
                    </div>
                    <div class="error" style="color: red"><?php echo $val1; ?></div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_gender" class="text-black">Gender<span class="text-danger">*</span></label> 
                    <div class="form-group">
                        <input type="radio" name="gen" value="Male" <?php if($selectall->gender=="Male") echo "checked";?>>Male
                        <input type="radio" name="gen" value="Female" <?php if($selectall->gender=="Female") echo "checked";?>>Female
                    </div>      
                    <div class="error" style="color: red"><?php echo $val2; ?></div>            
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Address<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="c_address" name="address" placeholder=""><?php echo $selectall->address; ?></textarea>
                  </div>
                  <div class="error" style="color: red"><?php echo $val3; ?></div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Contact Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_subject" name="cno" value="<?php echo $selectall->contact_no; ?> ">
                  </div>
                  <div class="error" style="color: red"><?php echo $val6; ?></div>
                </div> 
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="<?php echo $selectall->email_id; ?>" readonly>
                  </div>
                  <div class="error" style="color: red"><?php echo $val4; ?></div>
                </div>
               
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="sub" value="Edit Profile">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <?php include'footer_user.php';?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>