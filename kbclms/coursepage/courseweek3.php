<?php
include('dbconfig.php');

if ( empty ( $_SESSION['user_email'])) {
echo "<script>
alert('Your session has expired.')
window.location.href='../pages/logout.php';
</script>";
}
else {
goto d;
} 

d:
    $user_email  = $_SESSION['user_email'];
$course_name= $_SESSION['course_name'];
$course_code = $_SESSION['course_code'];

    $sql="SELECT * FROM assesment WHERE user_email='$user_email' and course_name='$course_name' and course_code= '$course_code' and review_status= 'Approved' and week= 2 ";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>=1){

goto a;
}

else{

echo "<script>
alert('If you have submit your assessment, wait for approval before you proceed.');
window.location.href='../pages/dashboardcheck.php';
</script>";
}

exit;

a:
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">


<!-- course.html  19 Nov 2019 03:39:40 GMT -->
<!--  --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- / -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kings Branding Consult | Classroom</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/uikit.js"></script>
</head>

<body >

<header id="header">
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
	  <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
	    <div class="uk-container">
	      <div class="uk-position-z-index" data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo" href="#"><img src="img/favicon.png">Kings Branding Consult</a>
	        </div>
	        <div class="uk-navbar-right">
	          <ul class="uk-navbar-nav uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
	            
                <li ><a href="../pages/dashboardcheck.php">Dashboard</a></li>
                <li ><a href="../pages/logout.php">Logout</a></li>
	            
	          </ul>
	          
	                 
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	            data-uk-navbar-toggle-icon></span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>
	
</header>
<div id="course-video" class="uk-flex-top" data-uk-modal>
	<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
		<button class="uk-modal-close-outside" type="button" data-uk-close></button>
		<iframe src="https://player.vimeo.com/video/126241629" width="1000" height="562" data-uk-video></iframe>
	</div>
</div>


<div class="uk-section">
  <div class="uk-container">
    <div class="uk-grid-large" data-uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-article">          

          <h3>Social Media Management Tools and Promotion</h3>
          <ul class="uk-margin-top" data-uk-accordion="multiple: true">
           <li>
              <a class="uk-accordion-title" href="#">Introduction to social media advertising


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1dO3OEebPaWPz4X6oG4TIUFlTfb_B7g0j/preview"
        width="100%"
        height="500px"
      >
      </iframe>
</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>          
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Social Media advertising strategy 

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson1" data-uk-toggle>Social Media advertising strategy 

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Navigating the meta business suite

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson2" data-uk-toggle>Navigating the meta business suite

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Navigating the Facebook ad manager

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson3" data-uk-toggle>Navigating the Facebook ad manager

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>
            
             <li>
              <a class="uk-accordion-title" href="#">Boosting Instagram Posts

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson6" data-uk-toggle>Boosting Instagram Posts

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>
            
            <li>
              <a class="uk-accordion-title" href="#">Facebook page creation

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson7" data-uk-toggle>Facebook page creation

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Social media management tools and functionalities


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1ex1Ss_-8561KoS-iJqFXl1__ItijwEbR/preview"
        width="100%"
        height="500px"
      >
      </iframe>
</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>          
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Scheduling and automation of social media content

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson4" data-uk-toggle>Scheduling and automation of social media content

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>
            
            <li>
              <a class="uk-accordion-title" href="#">Influencer Marketing

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson8" data-uk-toggle>Influencer Marketing

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Social media listening

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson5" data-uk-toggle>Social media listening

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Implementing social listening tools and strategies


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/12QBPYSNqj8gBmn0kuVHeQBbNS5nuzGZR/preview"
        width="100%"
        height="500px"
      >
      </iframe>
</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>          
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Assessment

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                   <tr class="uk-text-primary">
                     <td><iframe
        src="https://drive.google.com/file/d/1xlTemopOuDe68i37GYmDlKpd_-Ke8Fjm/preview"
        width="100%"
        height="500px"
      >
      </iframe>
</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>        
                    <tr class="uk-text-primary">
                      <td><span></span>Click on the <strong>Submit Assessment button</strong> to upload your assessment for the week.

</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>  
                  </tbody>
                </table>
              </div>
            </li>
            
            <li>
              <a class="uk-accordion-title" href="#">Explanation of assessment expectations

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson9" data-uk-toggle>Explanation of assessment expectations

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    
                  </tbody>
                </table>
              </div>
            </li>
            
          </ul>     
                
        </div>


      </div>
      <div class="uk-width-1-3@m">
        <div data-uk-sticky="offset: 100; bottom: true; media: @m">
          <div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-border-rounded-large">
            
            <a href="../pages/assesment.php" class="uk-button uk-button-primary-preserve uk-button-large uk-width-1-1">Submit Assessment</a>
            
            
          </div>			
          
        </div>
      </div>
    </div>
  </div>
</div>

<div id="lesson1" class="uk-flex-top uk-modal-container" data-uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
		<button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Social Media advertising strategy

</h2>
      <iframe src="https://www.youtube.com/embed/8cIfNRuUrGk" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson2" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Navigating the meta business suite
</h2>
      <iframe src="https://www.youtube.com/embed/lj1dw24KeyE" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson3" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Navigating the Facebook ad manager
</h2>
      <iframe src="https://www.youtube.com/embed/WbdgIiOOWVA" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson4" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Scheduling and automation of social media content
</h2>
      <iframe src="https://www.youtube.com/embed/RCe-sSwnqbA" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<div id="lesson5" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Social media listening
</h2>
      <iframe src="https://www.youtube.com/embed/1wqJMAPhGuM" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<div id="lesson6" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Boosting Instagram Posts
</h2>
      <iframe src="https://www.youtube.com/embed/7pPnLEITIkw" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<div id="lesson7" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Facebook page creation
</h2>
      <iframe src="https://www.youtube.com/embed/Hj5vK-EyVnE" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<div id="lesson8" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Influencer Marketing
</h2>
      <iframe src="https://www.youtube.com/embed/HJK-VVtvUqw" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<div id="lesson9" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Explanation of assessment expectations
</h2>
      <iframe src="https://www.youtube.com/embed/X4sAt2s3lSM" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
     
    </div>    
  </div>
</div>

<footer class="uk-section uk-section-secondary uk-section-large">
  <div class="uk-container uk-text-muted">
    <div class="uk-child-width-1-2@s uk-child-width-1-5@m" data-uk-grid>
      
      
      
      <div>
        <div class="uk-margin">
          <a href="#" class="uk-logo"><img src="img/favicon.png"></a>
        </div>
        <div class="uk-margin uk-text-small">       
          <p><a href="https://kingsconsult.com.ng">Kings Branding Consult</a></p>
        </div>
        <div class="uk-margin">
          <div data-uk-grid class="uk-child-width-auto uk-grid-small">
            <div class="uk-first-column">
              <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
                target="_blank"></a>
            </div>
            <div>
              <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
                target="_blank"></a>
            </div>
            <div>
              <a href="mailto:info@blacompany.com" data-uk-icon="icon: mail" class="uk-icon-link uk-icon"
                target="_blank"></a>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</footer>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index-2.html">Kings Branding Consult</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="../pages/dashboardcheck.php">Dashboard</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>


<!-- course.html  19 Nov 2019 03:39:41 GMT -->
</html>