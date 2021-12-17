<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!$_SESSION['user_email'])
    {
        header("Location: error.php");
        $_SESSION['error'] = "- SESSION HAS ENDED";
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Mail Sent</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="row justify-content-center mt-4">
            <div class="alert col-lg-4 col-md-6 col-sm-6 col-6 justify-content-center d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="30" height="30" role="img" aria-label="Danger:">
                </svg>
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
                                            <img src="img/gmail.png" width="100px" height="100px" alt="">
                                        </div>  
                                    </div>
                                    <div class="d-flex">
                                        <div class="w-100">
                                            <h3 class="mb-4">Email Sent</h3>
                                        </div>
                                    </div>
                                    <form class="signin-form" novalidate="">
                                        <div class="form-group mb-4">
                                            <label class="label" for="name" style="font-size: 14px">We sent an email to <b><?php echo $_SESSION['user_email'];?></b> with a link to get back into your account.</label>
                                                <div class="mt-4" style="padding-top: 16.6px;">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="forbid.php"><button type="button" name="ok" class="btn btn-primary submit btn-block">Ok</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </body>
</html>