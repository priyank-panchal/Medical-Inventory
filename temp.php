<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">  
<?php include'script_user.php';?>
<body>
  <div class="site-wrap">
    <?php include 'links.php';?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home/</a> 
            <strong class="text-black">
          Product
          </strong></div>
        </div>
      </div>
    </div>
   
    <div class="site-section">
      <div class="container">
          <div class="row">
          <div class="col-lg-12" style="margin-bottom: 5%;">
               <input type="text" name="text" class="form-control" style="margin-left: 
                30%; width: 50%; float: left;margin-right: 3%" id="textValue" />
         
          </div> 
          </div>

        <div class="row">
          <div class="col-lg-4" style="background-color: #85eaea;">
            <div>
              <h2>Search by Brand</h2>
              <select class="form-control" id="selectBrand"> 
                <option value="0">Select Brand</option>
                </select>
                
                 
              </select>
            </div>
        
            <div>
              <h2>Search by Cateogry</h2>
              <select class="form-control" id="selectCat">
                <option value="0">Select SubCateogry</option>
              
              </select>
            </div>
       
          </div>
          <div class="col-lg-8" id="vv">
            <div class="row" id="newid" >
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include'footer_user.php';?>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
<!---  <script src="js/popper-min.js"></script>--->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      function seldata()
      {
        $.ajax({
         url:"controller/c_u_shopall.php",
         method:"POST",
         success:function(data)
         {
           $("#vv #newid").html(data);
         }
      });
    }
    seldata();
    $("#textValue").on("keyup",function()
    {
      var ab=$(this).val();
      $.ajax(
      {
        url:"controller/c_search.php",
        method:"POST",
        data:{search:ab},
        success:function(data)
        {
          if(ab.length>=3)
          {
          $("#vv #newid").empty();
          $("#vv #newid").html(data);
          }
          if($.trim(ab.length)==0)
          {
            seldata();
          }
         }
      });
    });



    //brand search 
      function brandData()
      {
      $.ajax({
        url:"controller/ajax_search_brand.php",
        method:"POST",
        success:function(data)  
        {
          $("#selectBrand").append(data);
        }
      });
    }
    brandData();
      $("#selectBrand").change(function(){
        var bdata=$(this).val();
        console.log(bdata);
        $.ajax({
          url:"controller/ajax_search_brand2.php",
          method:"POST",
          data:{brandid:bdata},
          success:function(data)
          {
            $("#vv #newid").empty();
            $("#vv #newid").html(data);
            if(bdata==0)
            {
              seldata();   
            }
          }
        });
      });


      //subcategory search

       function subcatData()
      {
      $.ajax({
        url:"controller/ajax_search_sub.php",
        method:"POST",
        success:function(data)  
        {
          $("#selectCat").append(data);

        }
      });
    }
    subcatData();
      $("#selectCat").change(function(){
        var bdata1=$(this).val();        
        $.ajax({
          url:"controller/ajax_search_sub2.php",
          method:"POST",
          data:{subid:bdata1},
          success:function(data)
          {
            $("#vv #newid").empty();
            $("#vv #newid").html(data);
            if(bdata1==0)
            {
              seldata();   
            }
          }
        });
      });


    });
  </script>
</body>
</html> 