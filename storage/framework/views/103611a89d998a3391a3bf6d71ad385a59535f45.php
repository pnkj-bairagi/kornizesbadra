<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/backend')); ?>/demo/favicon.png" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kornizesbadra.com</title>
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/backend')); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Head Libs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    </head>

    <body class="body-bg-full profile-page" style="background-image: url(<?php echo e(asset('assets/backend')); ?>/img/site-bg.jpg);">
        <div id="wrapper" class="row wrapper">
            <div class="container-min-full-height d-flex justify-content-center align-items-center">
                <div class="login-center">
                    <div class="navbar-header text-center mt-2 mb-4">
                        <img alt="" src="<?php echo e(asset('assets/backend')); ?>/img/logo-dark.png" />
                    </div>
                    
                    <?php if($message = Session::get('error')): ?>
						<div class="alert alert-solid-danger mg-b-0" role="alert">
							<button aria-label="Close" class="close" data-dismiss="alert" type="button">
							<span aria-hidden="true">&times;</span></button>
							<strong><?php echo e($message); ?>.</strong>
						</div>
					<?php endif; ?>	

					<?php if(count($errors) > 0): ?>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p class="alert alert-danger"><?php echo e($error); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
                    <!-- /.navbar-header -->
                    <h2 class="mb-4 text-center">Welcome back!</h2>

                    <form method="post" action="<?php echo e(route('login.submit')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="example-email">Email</label>
                            <input type="email" placeholder="admin@gmail.com" class="form-control form-control-line" required name="email" id="example-email" />
                        </div>
                        <div class="form-group">
                            <label for="example-password">Password</label>
                            <input type="password" placeholder="password" id="example-password" name="password" required class="form-control form-control-line" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" >Login</button>
                        </div>
                        <div class="form-group no-gutters mb-0">
                            <div class="col-md-12 d-flex">
                                <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                                    <label class="d-flex"> <input type="checkbox" /> <span class="label-text">Remember me</span> </label>
                                </div>
                                <a href="<?php echo e(route('forgetpassword')); ?>" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i> Forgot Password?</a>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.form-group -->
                    </form>
                    <!-- /.form-material -->
                    <!--
                <hr>
                <div class="row btn-list">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="social-icons list-icon">facebook</i> facebook</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="social-icons list-icon">googleplus</i> google</button>
                    </div>
                </div>
                <footer class="col-sm-12 text-center">
                    <hr>
                    <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </p>
                </footer>
                --></div>
                <!-- /.login-center -->
            </div>
            <!-- /.d-flex -->
        </div>
        <!-- /.body-container -->
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo e(asset('assets/backend')); ?>/js/material-design.js"></script>
    </body>
</html>
<?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/login.blade.php ENDPATH**/ ?>