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
    <title>Resource</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Resource.css" media="screen">
    <script class="u-script" type="text/javascript" src="../javascript/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../javascript/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Aimyourhealth"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Resource">
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
    <section class="u-align-center u-border-6 u-border-black u-clearfix u-palette-1-light-3 u-section-1" id="sec-04d8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1" spellcheck="false">Ge​neral ​Health Facts</h2>
        <p class="u-text u-text-2">There are a few basic facts about your health that you already know: Drink plenty of water! Get adequate sleep! Exercise regularly! But it turns out there's a lot more to it than that, and we're willing to bet you&nbsp;missed&nbsp;a few elements.</p>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="325" data-image-height="464">
                <img class="u-back-image u-expanded" src="../images/Screenshot2022-04-068.49.39PM.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="547" data-image-height="741">
                <img class="u-back-image u-expanded" src="../images/1abe823d5a11847ec840fb2bd7252c06.png">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="737" data-image-height="924">
                <img class="u-back-image u-expanded" src="../images/healthy-food-with-nutritional-facts-vector-21371476.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-10 u-section-2" id="sec-d467">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-palette-2-base u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1" spellcheck="false">Average Balanced Plate</h3>
          </div>
        </div>
        <div class="u-clearfix u-gutter-58 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-size-60" style="">
                <div class="u-layout-row" style="">
                  <div class="u-container-style u-image u-layout-cell u-size-22-lg u-size-22-md u-size-22-sm u-size-22-xs u-size-25-xl u-image-1" data-image-width="790" data-image-height="737">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-35-xl u-size-38-lg u-size-38-md u-size-38-sm u-size-38-xs u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-group u-group-2">
          <div class="u-container-layout u-container-layout-4">
            <div class="u-absolute-hcenter u-border-2 u-border-white u-container-style u-expanded u-group u-shape-rectangle u-white u-group-3">
              <div class="u-container-layout u-container-layout-5">
                <p class="u-text u-text-2" spellcheck="false">Intended for people with NO specific medical conditions that require a certain diet and for those with diabetes.</p>
                <p class="u-text u-text-3" spellcheck="false">Consists of 1/2 vegetables or fruits, 1/4 carbohydrates, 1/4 protein, and some fat either used to cook the food, as a sauce, or on the side like avocado.<br>
                  <br>Remember to drink water with meals as well. It helps with digestion!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-custom-color-4 u-shape u-shape-rectangle u-shape-1"></div>
        <h3 class="u-text u-text-4" spellcheck="false">Weight Restoration</h3>
        <div class="u-clearfix u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-2">
          <div class="u-gutter-0 u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-size-60" style="">
                <div class="u-layout-row" style="">
                  <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-18-md u-size-18-sm u-size-18-xs u-size-21-lg u-size-21-xl u-image-2" data-image-width="720" data-image-height="1080">
                    <div class="u-container-layout u-valign-bottom u-container-layout-6" src="">
                      <div class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-2"></div>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-39-lg u-size-39-xl u-size-42-md u-size-42-sm u-size-42-xs u-layout-cell-4">
                    <div class="u-container-layout u-container-layout-7">
                      <div class="u-absolute-hcenter u-container-style u-expanded u-group u-shape-rectangle u-white u-group-4">
                        <div class="u-container-layout u-container-layout-8">
                          <p class="u-text u-text-5" spellcheck="false">Intended for people who need to gain weight to their natural set-point (not according to BMI). For example, those recovering from an eating disorder or other malnutrition.&nbsp;</p>
                          <p class="u-text u-text-6" spellcheck="false">Consists of 1/2 carbohydrates; 1/4 protein; 1/4 vegetables/fruits; fat either used in cooking, sauce, dessert, etc. ; and a nutritious drink on the side.&nbsp;&nbsp;<span style="font-size: 1.25rem;"></span>
                            <br>
                            <br>After undereating, carbs are important to restore blood sugar. They are the fastest source of energy for a body that really needs fuel!
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-3" id="carousel_4d7b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-palette-2-base u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
            <h3 class="u-text u-text-1" spellcheck="false">Why is Everything Important?</h3>
          </div>
        </div>
        <div class="u-align-left u-container-style u-expanded-width u-gradient u-group u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h3 class="u-text u-text-2" spellcheck="false">Carbohydrates</h3>
            <ul class="u-text u-text-3" spellcheck="false">
              <li><b>Our bodies' top choice for energy that helps fuel us through our everyday tasks; whether it's doing homework or hiking</b>
              </li>
              <li><b>Carbs fuel both our brains and muscles; we literally can't live without them!</b>
              </li>
              <li><b>Diets that cut out carbs are extremely dangerous for those without specific medical consultation to do so because of medical conditions such as epilepsy!</b>
                <br>
              </li>
            </ul>
            <img class="u-image u-image-default u-image-1" src="../images/Functions-of-Carbohydrates.webp" alt="" data-image-width="750" data-image-height="428">
            <h3 class="u-text u-text-4" spellcheck="false">Protein</h3>
            <img class="u-image u-image-default u-image-2" src="../images/Screenshot2022-04-068.36.06PM.png" alt="" data-image-width="409" data-image-height="314">
            <ul class="u-text u-text-5" spellcheck="false">
              <li><b>Building block for tissue in muscles, bone, skin, and even your heart to name a few</b>
              </li>
              <li><b>Made of amino acids that are broken down and rebuilt as new kinds of proteins that help our cells with tasks including transporting nutrients</b>
              </li>
            </ul>
            
            <h3 class="u-text u-text-6" spellcheck="false">Vegetables and Fruit</h3>
            <ul class="u-text u-text-7" spellcheck="false">
              <li style=""><b>Fiber provides long term energy + food for good gut bacteria that help you absorb nutrients</b>
              </li>
              <li style=""><b>Colorful veggies contain lots of nutrients vital to your health</b>
              </li>
            </ul>
            <img class="u-image u-image-default u-image-3" src="../images/Screenshot2022-04-068.34.37PM.png" alt="" data-image-width="376" data-image-height="328">
            <h3 class="u-text u-text-8" spellcheck="false">Lipids</h3>
            <ul class="u-text u-text-9" spellcheck="false">
              <li><b>Did you know the human brain is nearly 60% fat! Fat is vital in allowing the brain to function efficiently!</b>
              </li>
              <li><b>Fats are also important in regulating body temperature, skin, and hair health</b>
              </li>
              <li><b>Without fat, the body can't absorb certain nutrients so make sure to have some with your salads! Go ahead and eat the dressing!</b>
              </li>
            </ul>
            <img class="u-image u-image-default u-image-4" src="../images/Screenshot2022-04-068.31.13PM.png" alt="" data-image-width="251" data-image-height="403">
            <h3 class="u-text u-text-10" spellcheck="false">Water</h3>
            <ul class="u-text u-text-11" spellcheck="false">
              <li><b>Up to 60% of the adult body is water</b>
              </li>
              <li><b>Helps the body remove waste, digest food, regulate body temperature, and even in cellular respiration.</b>
              </li>
              <li><b>Remember to drink water to feel awake and to avoid headaches!</b>
                <br>
              </li>
            </ul>
            <img class="u-image u-image-default u-image-5" src="../images/WaterHumanBody.png" alt="" data-image-width="456" data-image-height="426">
            <h3 class="u-text u-text-12" spellcheck="false">Dairy</h3>
            <ul class="u-text u-text-13" spellcheck="false">
              <li>
                <span style="font-weight: 700;"> Dairy is an important source of calcium which is essential for bone growth and maintenance.&nbsp;</span>
              </li>
              <li>
                <span style="font-weight: 700;">There are many other alternatives to dairy for calcium such as soy, nuts, leafy green vegetables, and orange juice.</span>
                <br>
              </li>
            </ul>
            <img class="u-image u-image-default u-image-6" src="../images/Screenshot2022-04-068.24.58PM.png" alt="" data-image-width="528" data-image-height="234">
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a53"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Created by Montour High School Students</p>
      </div></footer>
  </body>
</html>