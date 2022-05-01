<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $age = $firstname = $lastname = "";
$username_err = $password_err = $confirm_password_err = $age_err = $firstname_err = $lastname_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate Age
    if(empty(trim($_POST["age"]))){
      $age_err = "Please enter an Age.";     
    } elseif(!preg_match('/[0-9_]+$/', trim($_POST["age"]))){
      $age_err = "Age needs to be a number";
    } else{
	$age = trim($_POST["age"]);
	}

    // Validate First name
    if(empty(trim($_POST["firstname"]))){
      $firstname_err = "Please enter a First Name.";     
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["firstname"]))){
      $firstname_err = "First name can only contain letters, numbers, and underscores.";
    }else{
    $firstname = trim($_POST["firstname"]);    
}
    // Validate Last Name
    if(empty(trim($_POST["lastname"]))){
      $lastname_err = "Please enter a Last Name.";     
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["lastname"]))){
      $lastname_err = "Last name can only contain letters, numbers, and underscores.";
    }else{
	$lastname = trim($_POST["lastname"]);    
}


    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, age, firstname, lastname) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_age, $param_firstname, $param_lastname);
            
            // Set parameters
            $param_username = $username;
            $param_age = $age;
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../Login/");
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
    <title>Signup</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Signup.css" media="screen">
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
    <meta property="og:title" content="Signup">
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
	  <div class="u-black u-menu-overlay u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-c309" data-image-width="1000" data-image-height="697">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-black u-border-14 u-border-custom-color-6 u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-border u-group u-opacity u-opacity-70 u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-font-merriweather u-text u-text-custom-color-6 u-text-default u-text-1" spellcheck="false">Aim Your Health&nbsp;</h2>
            <img class="u-image u-image-default u-opacity u-opacity-55 u-preserve-proportions u-image-1" src="../images/Screenshot_2022-03-24_8.15.03_AM-removebg-preview.png" alt="" data-image-width="196" data-image-height="150">
            <h2 class="u-align-center u-text u-text-custom-color-6 u-text-default u-text-2" spellcheck="false">Create an Account</h2>
            <div class="u-form u-login-control u-form-1">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-text-palette-2-base u-label-1">First Name *</label>
                  <input type="text" placeholder="Enter your First Name" id="password-a30d" name="firstname" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-1" required="" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $firstname_err; ?></span>                
                </div>
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-text-palette-2-base u-label-2">Last Name *</label>
                  <input type="text" placeholder="Enter your Last Name" id="username-a30d" name="lastname" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-2" required="" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
                </div>
                <div class="u-form-group u-form-password u-label-top u-form-group-3">
                  <label for="text-f4c1" class="u-label u-text-palette-2-base u-label-3">Age *</label>
                  <input type="text" placeholder="Enter your Age" id="text-f4c1" name="age" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-3" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $age_err; ?></span>
                </div>
                <div class="u-form-group u-form-password u-label-top u-form-group-4">
                  <label for="text-7ab7" class="u-label u-text-palette-2-base u-label-4">Create Username *</label>
                  <input type="text" placeholder="Enter your Username" id="text-7ab7" name="username" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-4">
                  <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="u-form-group u-form-password u-label-top u-form-group-5">
                  <label for="text-c176" class="u-label u-text-palette-2-base u-label-5">Enter Password *</label>
                  <input type="password" placeholder="Enter your Password" id="text-c176" name="password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-5" spellcheck="false">
                  <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="u-form-group u-form-password u-label-top u-form-group-6">
                  <label for="text-4066" class="u-label u-text-palette-2-base u-label-6">Confirm Password *</label>
                  <input type="password" placeholder="Enter your Password Again" id="text-4066" name="confirm_password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-text-custom-color-6 u-input-6">
                  <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-text-palette-2-base u-label-7">Remember me</label>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a href="#" class="u-border-2 u-border-custom-color-6 u-btn u-btn-submit u-button-style u-hover-custom-color-6 u-none u-text-custom-color-6 u-text-hover-white u-btn-1">SIGN UP<br>
                  </a>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" id="siteId" name="siteId" value="479917">
                <input type="hidden" id="pageId" name="pageId" value="1758454">
              </form>
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
