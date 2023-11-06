<?php
include('dbconfig.php');

if ( empty ( $_SESSION['user_email'])) {
echo "<script>
alert('Your session has expired.')
window.location.href='logout';
</script>";
}
else {

} 


$useremail = $_SESSION['user_email'] ;
$userpass  = $_SESSION['user_pass'];
$course_code = "SMM BLUEPRINT" ;
$review_comment = $_SESSION['review_comment'];

$sql="SELECT * FROM training WHERE user_email='$useremail' and user_pass='$userpass'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
while($rowval = mysqli_fetch_array($result))
 {

$lastname = $rowval['last_name'];
$firstname = $rowval['first_name'];
$phoneno = $rowval['phone_no'];
$location = $rowval['country'];
$occupation = $rowval['occupation'];
$profileinfo = $rowval['profile_info'];
$pic_dir = $rowval['pic_dir'];

$_SESSION['lastname'] = $rowval['last_name'];
$_SESSION['firstname'] = $rowval['first_name'];
$_SESSION['phoneno'] = $rowval['phone_no'];

//$picnamekeep= $rowval['picturename'];


}
}


//----get total course enrolled for----
$sql1="SELECT * FROM coursereg WHERE user_email='$useremail'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

if($count1== 1){
  //======
while($rowval = mysqli_fetch_array($result1))
 {

$progress = $rowval['progress'];
$course_status = $rowval['course_status'];
$current_stage = $rowval['current_stage'];
}
  //====
  $link_name = "Continue" ;
  $link = "classroom" ;

}
elseif ($count1== 0){
  $link_name = "Enroll" ;
  $link = "enroll" ;
  $progress = "0";
  $current_stage = "N/A";
$course_status = "In progress";
}
else{

  $link_name = "Enroll" ;
  $link = "#" ;
}
//=====

//----get total assessment----
$sql2="SELECT * FROM assesment WHERE user_email='$useremail'";
$result2=mysqli_query($conn,$sql2);

// Mysql_num_row is counting table row
$count2=mysqli_num_rows($result2);

//=====

//----get total projects----
$sql3="SELECT * FROM project WHERE user_email='$useremail'";
$result3=mysqli_query($conn,$sql3);

// Mysql_num_row is counting table row
$count3=mysqli_num_rows($result3);

//=====

?>
<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Kings Branding Consult :: Project
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
     
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">
         
          
         
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved0.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Project Review</h1>
            <p class="text-lead text-white"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h4></h4>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
              
              
            </div>
            <div class="card-body">
              <form action="uploadproject1" method="post" enctype="multipart/form-data">
                <label>Note: Check the reviewer's comment carefully and make neccessary changes, once you are done, you can re-submit on the project page.</label><br>

                 <div class="mb-3"> 
                  <p>
                    <?php  echo $review_comment ; ?>
                  </p>
                </div>                     
                               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">     
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Kings Branding Consult.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>