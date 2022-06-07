<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="/"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../records"><i class="fas fa-chart-bar"></i>Records</a>
                        </li>
                        <li class="active">
                            <a href="../records/add"><i class="fas fa-plus-square"></i>Add Records</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../records"><i class="fas fa-chart-bar"></i>Records</a>
                        </li>
                        <li class="active">
                            <a href="../records/add"><i class="fas fa-plus-square"></i>Add Records</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row"> 
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Money Tracker</h2>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Add Record</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <?php if (validation_errors()) : ?>
                                                <div class="alert alert-danger">
                                                    <?php echo validation_errors(); ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php echo form_open('../records/add', 'enctype="multipart/form-data" class="form-horizontal"'); ?>
                                            
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Amount*</label>
                                                    <input id="cc-pament" name="amount" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="10000">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class=" form-control-label">Name*</label>
                                                    <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="date" class=" form-control-label">Date*</label>
                                                    <input type="datetime-local" id="date" name="date" class="form-control">
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-2">
                                                        <label class=" form-control-label">Type*</label>
                                                    </div>
                                                    <div class="col col-md-10">
                                                        <div class="form-check">
                                                            <div class="radio">
                                                                <label for="income" class="form-check-label">
                                                                    <input type="radio" id="income" name="recordtype" value="income" class="form-check-input" checked>Income
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="expense" class="form-check-label ">
                                                                    <input type="radio" id="expense" name="recordtype" value="expense" class="form-check-input">Expense
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="notes" class=" form-control-label">Notes</label>
                                                    <textarea name="notes" id="notes" rows="9" placeholder="Notes..." class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="attachment" class=" form-control-label">Attachment</label>
                                                    <input type="file" id="attachment" name="attachment" class="form-control-file">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            </div>

    </div>

    <!-- Jquery JS-->
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/slick/slick.min.js">
    </script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/wow/wow.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/animsition/animsition.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="https://storage.googleapis.com/fe-assets-subsmission-yudaduy22/assets/js/main.js"></script>

</body>

</html>
<!-- end document-->