<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="">

    <meta name="author" content="Evolution Blockchain">
    <title>Tiyapuy</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

     <!-- Styles-->
    <?php include 'includes/styles.php';?>
    
    <style>
        .horizontal-menu.navbar-floating:not(.blank-page) .app-content{
            padding-top: 5.75rem;
        }
    </style>

</head>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    
    <!-- Aqui va el sidebar -->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
           
            <!-- aqui va breadcrumb -->

            <div class="">
                <div class="content-body">
                    <div class="row justify-content-center">                   	

						<div class="col-md-6">
							<div class="card">
								<div class="card-header">								
						          <h4 class="card-title text-center">Login</h4>
						        </div>
                                <hr>
								<div class="card-body" style="padding-top: 0;">
									<form id="productoForm">

                                    <div class="form-group mt-1">
                                        <label for="email">Email</label>
                                        <div class="form-group">
                                            <input type="email" id="email" class="form-control" placeholder="Ejm: admin@example.com" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="*****" autofocus required>
                                    </div>
						               
									<button class="btn btn-primary" id="btn-producto-form">Login</button>
									</form>
								</div>
							</div>
						</div>

					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include 'includes/footer.php';?>

    <?php include 'includes/scripts.php';?>
    


	<script src="js/auth.js"></script>

</body>