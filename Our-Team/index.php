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
    <title>Our Team</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Our-Team.css" media="screen">
    <script class="u-script" type="text/javascript" src="../javascript/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../javascript/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Aimyourhealth"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Our Team">
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../">Home</a>
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
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/logout.php" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>

<?php } ?>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-clearfix u-gradient u-section-1" id="sec-adc5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-border-8 u-border-black u-left-0 u-shape u-shape-1"></div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-43 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-text u-text-1" spellcheck="false">The Creators&nbsp;</h3>
                  <p class="u-text u-text-2">Get to know the team behind Aim Your Health</p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-17 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="193" data-image-height="158" data-href="https://www.ai-camp.org/"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-dff7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-align-center u-custom-font u-font-oswald u-text u-text-1" spellcheck="false">Our Team</h1>
          </div>
        </div>
        <div class="u-align-center-sm u-align-center-xs u-clearfix u-expanded-width-xs u-gutter-18 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-radius-3 u-shape-round u-size-20 u-white u-layout-cell-1">
                    <div class="u-container-layout">
                      <div class="u-container-style u-group u-group-2">
                        <div class="u-container-layout">
                          <h4 class="u-text u-text-palette-2-base u-text-2">Sage</h4>
                          <p class="u-text u-text-3" spellcheck="false">Hello! My name is Sage Sonnett and I am currently a Junior at Montour High School!&nbsp; I am involved with soccer and basketball.&nbsp; I have been playing these sports&nbsp;since I was little, which causes me to keep a healthy living style all my life.&nbsp; I am also currently interested in pursuing a career in the mechanical or chemical engineering field but have always been interested&nbsp;in coding.&nbsp; I am/have taken many computer-related courses over my time at Montour.<br>
                          </p>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-1" src="../images/3BD6B649-9401-4255-8CAD-89450B2A989B.jpeg" alt="" data-image-width="973" data-image-height="1080">
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-20 u-white u-layout-cell-2">
                    <div class="u-container-layout">
                      <div class="u-container-style u-group u-group-3">
                        <div class="u-container-layout">
                          <h4 class="u-text u-text-palette-2-base u-text-4">Abby</h4>
                          <p class="u-text u-text-5" spellcheck="false">Hey, I am Abby Chen and I'm a 2023 graduate at Montour High School! My career interests are computer science and machine learning. I am on the dance team for the school. Not only that but I am involved in outside school ativities such as I volunteer at Carnege Science Center and&nbsp; member of an AI Camp, hoping to do way more! I enjoyed creating this website and strive to learn more about coding to impact the community.</p>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-2" src="../images/IMG-5473.jpg" alt="" data-image-width="823" data-image-height="1080">
                    </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-3">
                    <div class="u-container-layout">
                      <div class="u-container-style u-group u-group-4">
                        <div class="u-container-layout">
                          <div class="u-container-style u-group u-group-5">
                            <div class="u-container-layout u-container-layout-8">
                              <h4 class="u-text u-text-palette-2-base u-text-6">Angelina</h4>
                              <p class="u-text u-text-7" spellcheck="false">Hi, I'm a junior at Montour High School and my interests include technology, games, and linguistics. I am currently enrolled in our school’s CHS Python class. I have taken 2 other python classes and test ran our school’s new artificial intelligence class as well as enrolled in it last year. I will have been at my job for a year now this May and hope to go to college for accounting.&nbsp;<br>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-preserve-proportions u-image-3" src="../images/unnamed.png" alt="" data-image-width="45" data-image-height="123">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-3" id="sec-4d1b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-20 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-20 u-white u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="u-container-style u-group u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                          <h4 class="u-text u-text-palette-2-base u-text-1">Micah</h4>
                          <p class="u-text u-text-2" spellcheck="false">I'm a soon-to-graduate senior from Montour High School. I plan to study Computer Science in college. My interests include swimming, coding, lifting weights, and listening to music. One fun fact about me includes my interest in game development! I enjoy making games and participating in game jams/hackathons. My favorite part of this project includes being rewarded for our efforts with UberEats.<br>
                          </p>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-1" src="../images/Capture.png" alt="" data-image-width="160" data-image-height="258">
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-20 u-white u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-3">
                      <div class="u-container-style u-group u-group-2">
                        <div class="u-container-layout">
                          <h4 class="u-text u-text-palette-2-base u-text-3">Robbie</h4>
                          <p class="u-text u-text-4" spellcheck="false">
                            <span style="font-size: 1rem;">Hi, my name is Robbie and my interests&nbsp;include anything related to technology or activities that allow me to see the behind-the-scenes. I am currently enrolled in our school's Java Programming class and I have previously taken two of ​our Python courses. I am also enrolled and participate&nbsp;in our student-oriented IT department called Smart Desk. I am a Stage Crew member in our musical this year as well.</span>
                            <br>
                          </p>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-2" src="../images/IMG-20220330-WA0001.jpg" alt="" data-image-width="624" data-image-height="1080">
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-3">
                    <div class="u-container-layout">
                      <div class="u-container-style u-group u-group-3">
                        <div class="u-container-layout">
                          <h4 class="u-text u-text-palette-2-base u-text-5">Ethan</h4>
                          <p class="u-text u-text-6" spellcheck="false">Hey! My name is Ethan Beadling and I am currently a senior. Some basic interests of mine are computer Science, video games, technology, building and deploying servers. I’m currently employed at 2 different places. One includes working at Montour School District as a student tech and my other job, I work at a pizza place. One club I'm proudly a part of is called Smart Desk and that also involves working on the technology in my school district. To get nerdy I am experienced with the programming languages that involves Python, PHP, Javascript, and the bundle of HTML and CSS.<br>
                          </p>
                        </div>
                      </div>
                      <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-3" src="../images/Screenshot2022-04-069.10.47PM.png" alt="" data-image-width="204" data-image-height="259">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a53"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Created by Montour High School Students</p>
      </div></footer>
  </body>
</html>