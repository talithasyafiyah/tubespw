<?php

    // PRE-LOAD PHP VALIDATOR
    require_once'connection.php';

    if(!isset($_SESSION))
    {
        session_start();
    }
    
    // TO GET EMAIL AND TOKEN FROM THE URL 
    $EMAIL_CHECK = $_GET['email'];
    $TOKEN_CHECK = $_GET['token'];

    $CHECK = "SELECT * FROM password_reset WHERE email ='$EMAIL_CHECK' AND session_token = '$TOKEN_CHECK'";
    $CHECK_QUERY = mysqli_query($CONN, $CHECK);

    if(mysqli_num_rows($CHECK_QUERY) > 0)
    {
        date_default_timezone_set("Asia/Jakarta");
        $CUR_DATE = date('F j, Y, G:i A');

        $ROW = mysqli_fetch_array($CHECK_QUERY);
        $EXP_DATE = isset($ROW['token_expiration']) ? $ROW['token_expiration'] : '';

        if($CUR_DATE > $EXP_DATE === false)
        {
            header("url: #");
        }
        else
        {
            header("Location: error.php");
            $_SESSION['error'] = "- TOKEN IS EXPIRED";
        }
    }
    else
    {
        header("Location: error.php");
        $_SESSION['error'] = "- INVALID LINK OR URL";
    }

    // ON-SUBMIT VALIDATOR
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $EMAIL = mysqli_real_escape_string($CONN, $_POST['email']);
        $NEW_PASSWORD = mysqli_real_escape_string($CONN, $_POST['new-password']);
        $NEW_PASSWORD_CONFIRMATION = mysqli_real_escape_string($CONN, $_POST['new-password-confirmation']);
        $STATUS = array();

        $EC = "SELECT * FROM password_reset WHERE email = '$EMAIL' ";
        $EC_QUERY = mysqli_query($CONN, $EC);

        if(mysqli_num_rows($EC_QUERY) > 0)
        { 
            if(empty($NEW_PASSWORD) || empty($NEW_PASSWORD_CONFIRMATION))
            {
                $STATUS['error'] = "Password cannot be empty";
            }
            else if($NEW_PASSWORD_CONFIRMATION != $NEW_PASSWORD)
            {
                $STATUS['error'] = "Password does not match";   
            }
            else
            {
                date_default_timezone_set("Asia/Jakarta");
                $CUR_DATE = date('F j, Y, G:i A');
                $EXP_DATE = isset($ROW['token_expiration']) ? $ROW['token_expiration'] : '';
                $HASHED_PASSWORD = password_hash($NEW_PASSWORD_CONFIRMATION, PASSWORD_DEFAULT);
                
                if($CUR_DATE > $EXP_DATE === false)
                {
                    $CONFIRMATION = "UPDATE password_reset SET password = '$HASHED_PASSWORD' WHERE email = '$EMAIL'";
                    $CONFIRMATION_QUERY = mysqli_query($CONN, $CONFIRMATION);

                    if($CONFIRMATION_QUERY)
                    {
                        $DELETE_TOKEN  = "UPDATE password_reset SET session_token = '', token_expiration = '' WHERE email ='$EMAIL'";
                        $DELETE_TOKEN_QUERY = mysqli_query($CONN, $DELETE_TOKEN);

                        if($DELETE_TOKEN_QUERY)
                        {
                            $STATUS['success'] = "Your password has successfully changed";
                            header("refresh:2; url=forgot.php");
                        }
                    }
                    else
                    {
                        header("Location: error.php");
                        $_SESSION['error'] = "- PASSWORD IS NOT UPDATED";
                    }
                }
                else
                {
                    header("Location: error.php");
                    $_SESSION['error'] = "- TOKEN IS EXPIRED";
                }
            }
        }
        else
        {
            $STATUS['error'] = "Something went wrong";
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Reset</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body style="overflow: hidden">
    <?php 
        if(isset($STATUS['error']) || isset($STATUS['success'])) echo
        '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>'; ?>
            <div class="row justify-content-center mt-4">
                <div class="alert col-lg-4 col-md-6 col-sm-6 col-6 
                <?php 
                if(isset($STATUS['error']))
                {
                    echo "alert-danger";
                } 
                if(isset($STATUS['success']))
                {
                    echo "alert-success";
                }
                ?>
                justify-content-center d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="30" height="30" role="img" aria-label="Danger:">
                        <?php
                            if(isset($STATUS['error']))
                            {
                                echo '<use xlink:href="#exclamation-triangle-fill"/>';
                            }
                            if(isset($STATUS['success']))
                            {
                                echo '<use xlink:href="#check-circle-fill"/>';
                            }
                        ?>
                    </svg>
                    <div class="mx-3">
                        <?php 
                            if(isset($STATUS['error']))
                            {
                                echo $STATUS['error'];
                            }
                            if(isset($STATUS['success']))
                            {
                                echo $STATUS['success'];
                            }
                        ?>
                    </div>
                </div>
            </div>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-7 col-md-10 col-lg-6 text-center">
                            <div class="wrap">
                                <div class="login-wrap p-4 p-lg-5">
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <img src="img/reset-lock.png" width="80px" height="80px" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Set New Password</h3>
                                        </div>
                                    </div>
                                    <form method="POST" class="signin-form" novalidate="">
                                        <div class="form-group text-left mb-0">
                                            <label class="label left" for="new password">New Password</label>
                                            <input type="hidden" name="email" value ="<?php echo $EMAIL_CHECK; ?>">
                                            <input type="password" id="new-password" name="new-password" class="form-control" placeholder="New Password" onkeyup="trigger();" required autofocus>
                                            <div class="text" style="transition: all 0.5s linear; font-size: 12px; font-weight: 1000" id="validator">&nbsp</div>
                                        </div>
                                        <div class="form-group text-left">
                                            <label class="label" for="new password confirmation">New Password Confirmation</label>
                                            <input type="password" name="new-password-confirmation" class="form-control" placeholder="New Password Confirmation" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="reset" class="btn btn-primary submit btn-block">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <script src="js/script.js"></script>
    </body>
</html>