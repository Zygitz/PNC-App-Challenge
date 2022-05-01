<?php 
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Game</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Game.css" media="screen">
    <script class="u-script" type="text/javascript" src="../javascript/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../javascript/nicepage.js" defer=""></script>
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Aimyourhealth"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Game">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-black u-clearfix u-header u-header" id="sec-9bd4"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/Screenshot_2022-03-24_8.15.03_AM-removebg-preview.png" alt="" data-image-width="196" data-image-height="150">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="../" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="../Resource/" style="padding: 10px 20px;">Resource</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="../Game/" style="padding: 10px 20px;">Game</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="../Video/" style="padding: 10px 20px;">Video</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="../Our-Team/" style="padding: 10px 20px;">Our Team</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="https://docs.google.com/forms/d/15IiooaVI-UYYVxT2nGuPt-FBDlqKacEPWNH1t6uCvoM/viewform?edit_requested=true#settings" target="_blank" style="padding: 10px 20px;">Survey</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="https://quizlet.com/689138290/test/embed?i=svw5u&amp;x=1jj1" target="_blank" style="padding: 10px 20px;">Quiz</a>

<?php
session_start();
$info_tag = "";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ $info_tag = "Login/Sign up"; ?>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>
<?php
} if($_SESSION["loggedin"] == true){ $info_tag = "Welcome, {$_SESSION["firstname"]}. Click to Sign out"; ?>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/logout.php" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>

<?php } ?>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="..index.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Resource/">Resource</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Game/">Game</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Video/">Video</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Our-Team/">Our Team</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://docs.google.com/forms/d/15IiooaVI-UYYVxT2nGuPt-FBDlqKacEPWNH1t6uCvoM/viewform?edit_requested=true#settings" target="_blank">Survey</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-custom-color-6 u-text-hover-grey-90" href="https://quizlet.com/689138290/test/embed?i=svw5u&amp;x=1jj1" target="_blank" style="padding: 10px 20px;">Quiz</a>
<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ $info_tag = "Login/Sign up"; ?>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>
<?php
} if($_SESSION["loggedin"] == true){ $info_tag = "Welcome, {$_SESSION["firstname"]}. Click to Sign out"; ?>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login.logout.php" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>

<?php } ?>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-6da3" data-image-width="1332" data-image-height="850">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-effect-fade u-group u-hover-box u-palette-1-base u-group-1" data-href="../Matching/" target="_blank">
          <div class="u-back-slide u-container-layout u-valign-top u-container-layout-1">
            <h1 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1" spellcheck="false">Matching Game</h1>
            <h5 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-2" spellcheck="false">How To Play:<br>Open Game&nbsp;<br>Match the images<br>&nbsp;
            </h5>
          </div>
          <div class="u-black u-container-layout u-opacity u-opacity-25 u-over-slide u-container-layout-2"></div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a53"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Created by Montour High School Students</p>
      </div></footer>
  </body>
</html>