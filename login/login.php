<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: after.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
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
        $sql = "SELECT number, username, password FROM users WHERE username = ?";
        
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
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["usr"] = $username . "#" . $id;                            
                            // Redirect user to welcome page
                            header("location: after.php");
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!---c u s t o m--->
    <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/one.css">
    <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/two.css">
    <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/three.css">
    <link rel="stylesheet" href="https://ayaan-codes.github.io/packages/style/extra.css">
    <style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        background: #ededed;
    }

    input,
    button {
        border: none;
        outline: none;
        background: none;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
    }

    .tip {
        font-size: 20px;
        margin: 40px auto 50px;
        text-align: center;
    }

    .cont {
        overflow: hidden;
        position: relative;
        width: 900px;
        height: 550px;
        margin: 0 auto 100px;
        background: #fff;
    }

    .form {
        position: relative;
        width: 640px;
        height: 100%;
        transition: transform 1.2s ease-in-out;
        padding: 50px 30px 0;
    }

    .sub-cont {
        overflow: hidden;
        position: absolute;
        left: 640px;
        top: 0;
        width: 900px;
        height: 100%;
        padding-left: 260px;
        background: #fff;
        transition: transform 1.2s ease-in-out;
    }

    .cont.s--signup .sub-cont {
        transform: translate3d(-640px, 0, 0);
    }

    button {
        display: block;
        margin: 0 auto;
        width: 260px;
        height: 36px;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
    }

    .img {
        overflow: hidden;
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 260px;
        height: 100%;
        padding-top: 360px;
    }

    .img:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 900px;
        height: 100%;
        background-image: url("data:image/jpeg;base64,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");
        background-size: cover;
        transition: transform 1.2s ease-in-out;
    }

    .img:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .cont.s--signup .img:before {
        transform: translate3d(640px, 0, 0);
    }

    .img__text {
        z-index: 2;
        position: absolute;
        left: 0;
        top: 50px;
        width: 100%;
        padding: 0 20px;
        text-align: center;
        color: #fff;
        transition: transform 1.2s ease-in-out;
    }

    .img__text h2 {
        margin-bottom: 10px;
        font-weight: normal;
    }

    .img__text p {
        font-size: 14px;
        line-height: 1.5;
    }

    .cont.s--signup .img__text.m--up {
        transform: translateX(520px);
    }

    .img__text.m--in {
        transform: translateX(-520px);
    }

    .cont.s--signup .img__text.m--in {
        transform: translateX(0);
    }

    .img__btn {
        overflow: hidden;
        z-index: 2;
        position: relative;
        width: 100px;
        height: 36px;
        margin: 0 auto;
        background: transparent;
        color: #fff;
        text-transform: uppercase;
        font-size: 15px;
        cursor: pointer;
    }

    .img__btn:after {
        content: "";
        z-index: 2;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #fff;
        border-radius: 30px;
    }

    .img__btn span {
        position: absolute;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        transition: transform 1.2s;
    }

    .img__btn span.m--in {
        transform: translateY(-72px);
    }

    .cont.s--signup .img__btn span.m--in {
        transform: translateY(0);
    }

    .cont.s--signup .img__btn span.m--up {
        transform: translateY(72px);
    }

    h2 {
        width: 100%;
        font-size: 26px;
        text-align: center;
    }

    label {
        display: block;
        width: 260px;
        margin: 25px auto 0;
        text-align: center;
    }

    label span {
        font-size: 12px;
        color: #cfcfcf;
        text-transform: uppercase;
    }

    input {
        display: block;
        width: 100%;
        margin-top: 5px;
        padding-bottom: 5px;
        font-size: 16px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.4);
        text-align: center;
    }

    .forgot-pass {
        margin-top: 15px;
        text-align: center;
        font-size: 12px;
        color: #cfcfcf;
    }

    .submit {
        margin-top: 40px;
        margin-bottom: 20px;
        background: #d4af7a;
        text-transform: uppercase;
    }

    .fb-btn {
        border: 2px solid #d3dae9;
        color: #8fa1c7;
    }

    .fb-btn span {
        font-weight: bold;
        color: #455a81;
    }

    .sign-in {
        transition-timing-function: ease-out;
    }

    .cont.s--signup .sign-in {
        transition-timing-function: ease-in-out;
        transition-duration: 1.2s;
        transform: translate3d(640px, 0, 0);
    }

    .sign-up {
        transform: translate3d(-900px, 0, 0);
    }

    .cont.s--signup .sign-up {
        transform: translate3d(0, 0, 0);
    }

    .icon-link {
        position: absolute;
        left: 5px;
        bottom: 5px;
        width: 32px;
    }

    .icon-link img {
        width: 100%;
        vertical-align: top;
    }

    .icon-link--twitter {
        left: auto;
        right: 5px;
    }
    </style>
</head>

<body>
    <div class="form sign-in">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username"
                    class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"
                    class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>

</html>