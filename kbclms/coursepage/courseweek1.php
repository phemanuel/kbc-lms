<?php
include('dbconfig.php');

if ( empty ( $_SESSION['user_email'])) {
echo "<script>
alert('Your session has expired.')
window.location.href='../pages/logout.php';
</script>";
}
else {
goto a;
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

          <h3>Introduction to Social Media Management
</h3>
          <ul class="uk-margin-top" data-uk-accordion="multiple: true">

            <li>
              <a class="uk-accordion-title" href="#">Course objectives

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/16Vuezd-1DyAwwrijmtp9LYCfh8IKfJGj/preview"
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
              <a class="uk-accordion-title" href="#">Social media management overview
<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson1" data-uk-toggle>Social media management overview 1
</a></td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson2" data-uk-toggle>Social media management overview 2
</a></td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>          
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Impact of social media on businesses and brands


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1nFfQsIRN7hCGnHjMFoHwqOBItnCoosi5/preview"
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
              <a class="uk-accordion-title" href="#">Social Media Success Stories vs Disasters


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1whGvJlArm3tRumrFjgpJo3tRI1baxpCU/preview"
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
              <a class="uk-accordion-title" href="#">Benefits of effective social media management


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1nOG4f7JW5FQ8yrHz4SuprhUwQQlOnZZO/preview"
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
              <a class="uk-accordion-title" href="#">Introduction to major social media platforms
<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson3" data-uk-toggle>Introduction to major social media platforms
</a></td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>    
                         
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Platform demographics and user behavior 


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1LLmeoKm7ZAq2hvl9RLs9w8N-nhZaQ2Wo/preview"
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
              <a class="uk-accordion-title" href="#">Setting up and Optimizing social media profiles


<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1FG8r4oCDQJrQlrYXsGQUBrgg9ZnZr5f5/preview"
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
              <a class="uk-accordion-title" href="#">SMART goal-setting framework

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="#lesson4" data-uk-toggle>SMART goal-setting framework

</a></td>

                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr>                        
                  </tbody>
                </table>
              </div>
            </li>

            <li>
              <a class="uk-accordion-title" href="#">Aligning goals with key performance indicators (KPIs)

<span class="uk-align-right uk-margin-remove-bottom"></span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
                      <td><iframe
        src="https://drive.google.com/file/d/1r1tgDCKUdYgIHHR8Xq6XsZ_Y2OSLiOt-/preview"
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
        src="https://drive.google.com/file/d/1qH56dJT-bp8A5SbtmTg9XmBxRJ8SPz9V/preview"
        width="100%"
        height="500px"
      >
      </iframe>
</td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink"></td>
                    </tr> 
                    <tr class="uk-text-primary">
                      <td><span></span>Click on the <strong>Submit Assessment button</strong> to upload your assessment for the outline.

</td>
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
            
            
            <p class="uk-text-center"><a href="#contact" class="uk-link-muted" data-uk-scroll="offset: 100">Have a question, contact us</a></p>
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
    <h2 class="uk-modal-title">Social media management overview 1
</h2>
      <iframe src="https://www.youtube.com/embed/vUAqYJ7xDcA" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson2" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Social media management overview 2
</h2>
      <iframe src="https://www.youtube.com/embed/gUgjTPvBsY0" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson3" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">Introduction to major social media platforms
</h2>
      <iframe src="https://www.youtube.com/embed/4cXTm1REYoI" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
    <div class="uk-margin-top uk-article uk-text-muted">
      
    </div>    
  </div>
</div>

<div id="lesson4" class="uk-flex-top uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light uk-background-secondary 
    uk-border-rounded-large">
    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
    <h2 class="uk-modal-title">SMART goal-setting framework
</h2>
      <iframe src="https://www.youtube.com/embed/A4h1gark3UM" width="1000" height="562" data-uk-responsive data-uk-video></iframe>
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
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="sign-up.html">Sign Up</a>
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