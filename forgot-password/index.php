<?php
    
    require('connection.php');
    require'includes/Exception.php';
    require'includes/PHPMailer.php';
    require'includes/SMTP.php';
    // Load Composer's autoloader
    require'C:\xampp\htdocs\tubespw\forgot-password\phpmailer\vendor\autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function partiallyHideEmail($USER_EMAIL)
    {
        // use FILTER_VALIDATE_EMAIL filter to validates an email address
        if(filter_var($USER_EMAIL, FILTER_VALIDATE_EMAIL))
        {
            // split an email by "@"
            list($first, $last) = explode('@', $USER_EMAIL);
        
            // get half the length of the first part
            $firstLen = floor(strlen($first)/2);
        
            // partially hide a first part
            $first = str_replace(substr($first, $firstLen), str_repeat('*', strlen($first) - $firstLen), $first);
        
            // get the starting position of the "."
            $lastIndex = strpos($last, ".");
        
            // divide last part in two different strings
            $last1 = substr($last, 0, $lastIndex);
            $last2 = substr($last, $lastIndex);
        
            // get half the length of the "$last1"
            $lastLen  = floor(strlen($last1)/2);
        
            // partially hide a string by "*"
            $last1 = str_replace(substr($last1, $lastLen), str_repeat('*', strlen($last1) - $lastLen), $last1);
        
            // combine all parts together and return partially hide email
            $partiallyHideEmail = $first.'@'.$last1.''.$last2;
        
            return $partiallyHideEmail;
        }
    }

    function send_password_reset($USER_NAME, $USER_EMAIL, $TOKEN)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        // SENDER 
        $mail->Username = "udsatu7an@gmail.com"; //GMAIL
        $mail->Password = "UD_SATU_7AN "; //PASSWORD
        $mail->setFrom("udsatu7an@gmail.com", "ADMIN UD. SATU 7AN"); // IDENTITY

        // RECIPIENT
        $mail->addAddress($USER_EMAIL);

        $mail->isHTML(true);
        $mail->Subject = "Reset Password Notification";

        $mail_template = file_get_contents('C:\xampp\htdocs\forgot-password\email-template.html');
        $mail_template = str_replace('{{USERNAME}}', $USER_NAME, $mail_template);
        $mail_template = str_replace("{{USEREMAIL}}", $USER_EMAIL, $mail_template);
        $mail_template = str_replace("{{TOKEN}}", $TOKEN, $mail_template);
        
        $mail->Body = $mail_template;
        $mail->send();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $EMAIL = mysqli_real_escape_string($CONN, $_POST['email']);
        $TOKEN = md5(rand());
        $STATUS = array();

        $EC = "SELECT * FROM password_reset WHERE email = '$EMAIL' ";
        $EC_QUERY = mysqli_query($CONN, $EC);

        if(mysqli_num_rows($EC_QUERY) > 0)
        { 
            $ROW = mysqli_fetch_array($EC_QUERY);
            $USER_NAME = isset($ROW['username']) ? $ROW['username'] : '';
            $USER_EMAIL = isset($ROW['email']) ? $ROW['email'] : '';

            $UST = "UPDATE password_reset SET session_token = '$TOKEN' WHERE email = '$USER_EMAIL'";
            $UST_QUERY = mysqli_query($CONN, $UST);

            if($UST_QUERY)
            {
                send_password_reset($USER_NAME, $USER_EMAIL, $TOKEN);

                $STATUS['success'] = "Mail has been sent successfully";  
                $_SESSION['user_email'] = partiallyHideEmail($USER_EMAIL);

                date_default_timezone_set("Asia/Jakarta");
                $LIMIT = date('F j, Y, G:i A', strtotime('+1 hour'));
                
                $UTL = "UPDATE password_reset SET token_expiration = '$LIMIT' WHERE email = '$USER_EMAIL'";
                $UTL_QUERY = mysqli_query($CONN, $UTL); 

                header("refresh:2; url=mail-sent.php"); 
            }
            else
            {
                header("Location: error.php");
                $_SESSION['error'] = "- SOMETHING WENT WRONG";
                exit(0);
            }
        }
        else
        {
            $STATUS['error'] = "Couldn't find your Account";

            // header("refresh:5; url=error.html"); OR CAN BE "<script>setTimeout(\"location.href = 'error.html';\",2500);</script>"; 
            if(empty($EMAIL))
            {
                $STATUS['error'] = "Enter an email (..@gmail.com)";
            }
            else if(!preg_match("/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com+$/", $EMAIL))
            {
                $STATUS['error'] = "Please enter a valid email address (..@gmail.com)";
            }
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Forgot</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
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
                                            <img src="img/lock.png" width="140px" height="100px" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Trouble Logging In?</h3>
                                        </div>
                                    </div>
                                    <form class="signin-form" method="POST" novalidate="">
                                        <div class="form-group mb-3">
                                            <label class="label" for="name">Enter your email address and and we'll send you a link to reset your password and get back into your account.</label>
                                            <input type="email" name="email" class="form-control " placeholder="Input your email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary submit btn-block">Send Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="mx-5 py-3">
                <button class="btn btn-primary btn-lg rounded" onclick="location.href='/tubespw/pages/login.php'">
                    Go Back
                </button>
            </div>
    </body>
</html>