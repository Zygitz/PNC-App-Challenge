<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $firstname = $lastname = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password, firstname, lastname FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $firstname, $lastname);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["firstname"] = $firstname;
                            $_SESSION["lastname"] = $lastname;
                            // Redirect user to welcome page
                            header("location: ../");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="../javascript/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../javascript/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Aimyourhealth"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
  <header class="u-black u-clearfix u-header u-header" id="sec-9bd4"><div class="u-clearfix u-sheet u-sheet-1">
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
$info_tag = "";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ $info_tag = "Login/Sign up"; ?>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/index.php" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>
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
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-hover-white u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-grey-90" href="../Login/index.php" style="padding: 10px 20px;"><?php echo $info_tag ?> </a>
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
    <section class="u-clearfix u-image u-section-1" id="sec-c309" data-image-width="1000" data-image-height="697">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-black u-border-14 u-border-custom-color-6 u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-border u-expanded-width-sm u-group u-opacity u-opacity-70 u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-image u-image-default u-opacity u-opacity-55 u-preserve-proportions u-image-1" src="../images/Screenshot_2022-03-24_8.15.03_AM-removebg-preview.png" alt="" data-image-width="196" data-image-height="150">
            <h2 class="u-align-center u-custom-font u-font-merriweather u-text u-text-custom-color-6 u-text-default u-text-1" spellcheck="false">Aim Your Health&nbsp;</h2>
            <h2 class="u-align-center u-text u-text-custom-color-6 u-text-default u-text-2" spellcheck="false">Login&nbsp;</h2>
            <div class="u-form u-login-control u-form-1">
            <?php 
            if(!empty($login_err)){
              echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
            ?>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-text-palette-2-base u-label-1">Username *</label>
                  <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1" required="" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-text-palette-2-base u-label-2">Password *</label>
                  <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-2" required="" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-text-palette-2-base u-label-3">Remember me</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a href="#" class="u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-2-base u-btn-1">Login</a>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" id="siteId" name="siteId" value="479917">
                <input type="hidden" id="pageId" name="pageId" value="1639978">
              </form>
            </div>
            <a href="../Signup/" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-2-base u-btn-2">Don't have an account?</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-5e75">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a53"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Created by Montour Highschool Students</p>
      </div></footer>
  </body>
</html>