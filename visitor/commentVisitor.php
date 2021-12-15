<?php
session_start();
if(empty($_SESSION['level'])) {
    echo "<script>alert('Sorry, you are not allowed to access this page.'); document.location='../pages/login.php'</script>";
}
?>

<?php 
include "../includes/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dashboard Visitor</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- CSS only -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/btn.css" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- calendar file css -->
    <link rel="stylesheet" href="js/semantic.min.css" />
    <!-- Script ChartJS -->
    <script src="js/chart.js"></script>
    <!-- Teks Animasi -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styleAnimasi.css">
    <!-- Komentar -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="inner_page contact_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
            <div class="sidebar_blog_1">
                <div class="sidebar-header">
                    <div class="logo_section">
                        <a href="operator.html"><img class="logo_icon img-responsive" style="width: auto;" src="images/logo/status.png" alt="#" /></a>
                    </div>
                </div>
                <div class="sidebar_user_info">
                    <div class="icon_setting"></div>
                    <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/user.png" alt="#" /></div>
                        <div class="user_info">
                        <h6><?=$_SESSION['nama']?></h6>
                        <p><span class="online_animation"></span> Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_blog_2">
                <h4>General</h4>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboardvis.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                    </li>
                    <li><a href="mdpop.php"><i class="fa fa-desktop orange_color2"></i> <span>Master Data Product</span></a></li>
                    <li><a href="testimoni.php"><i class="fa fa-comments-o red_color"></i> <span>Testimoni</span></a></li>
                    <li><a href="commentVisitor.php"><i class="fa fa-thumbs-o-up green_color"></i> <span>Comment</span></a></li>
                </ul>
            </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
            <!-- topbar -->
            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                        <a href="operator.html"><img class="img-responsive" style="width: auto;" src="images/logo/UD. SATU 7AN.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                        <div class="icon_info">
                            <ul>
                                <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                            </ul>
                            <ul class="user_profile_dd">
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/user.png" alt="#" /><span class="name_user"><?=$_SESSION['nama']?></span></a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profilevis.php">My Profile</a>
                                    <a class="dropdown-item" href="settingsvis.php">Settings</a>
                                    <a class="dropdown-item" href="help.php">Help</a>
                                    <a class="dropdown-item" href="../pages/logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end topbar -->

                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                                <h2>Commentar Visitor</h2>
                            </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column1">
                            <div class="col-lg-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Commentar</h2>
                                    </div>
                                </div>
                                <div class="contain mx-5 mt-3">
                                    <div class="section-center">
                                        <!-- <div class="container"> -->
                                            <div class="booking-form">
                                                <form method="POST" id="comment_form">
                                                    <div class="form-group">
                                                        <span class="form-label">Name</span>
                                                        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Your Name...">
                                                    </div>
                                                    <div class="form-group">
                                                        <span class="form-label">Comment</span>
                                                        <textarea name="comment_content" id="comment_content" class="form-control" rows="5" placeholder="Enter Your Comment..."></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="comment_id" id="comment_id" value="0">
                                                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                                                        <input type="reset" class="btn btn-danger">
                                                    </div>
                                                </form>
                                                <span id="comment_message"></span>
                                                <br>
                                                <div id="display_comment"></div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            

                            <!-- end row -->
                        </div>
                        <!-- footer -->
                        <div class="container-fluid">
                            <div class="footer">
                            <p>Copyright © 2021 Designed by UD. SATU 7AN. All rights reserved.<br><br>
                                Distributed By: <a href="#">UD. SATU 7AN</a>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- end dashboard inner -->
                </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script> 
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- calendar file css -->     
        <script src="js/semantic.min.js"></script>
        <!-- Script Komentar -->
        <script>
            $(document).ready(function(){

                $('#comment_form').on('submit', function(event){
                    event.preventDefault();
                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"add_comment.php",
                        method:"POST",
                        data:form_data,
                        dataType:"JSON",
                        success:function(data)
                    {
                        if(data.error != '')
                        {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                        }
                    }
                    })
                });

                load_comment();

                function load_comment()
                {
                    $.ajax({
                    url:"fetch_comment.php",
                    method:"POST",
                    success:function(data)
                    {
                        $('#display_comment').html(data);
                    }
                    })
                }

                $(document).on('click', '.reply', function(){
                    var comment_id = $(this).attr("id");
                    $('#comment_id').val(comment_id);
                    $('#comment_name').focus();
                });
                
            });
        </script>
        
    </body>
</html>
