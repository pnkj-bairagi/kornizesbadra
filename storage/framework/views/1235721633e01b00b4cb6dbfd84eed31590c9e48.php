

<?php $__env->startPush('page-styles'); ?>
   <link rel="preload" href="<?php echo e(asset('assets/frontend')); ?>/fonts/montserrat-v15-latin/montserrat-v15-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/account.css" media="screen,print">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
    <main id="site-main">
        <div class="page-wrapper">
            <div class="logo-wrapper-mobile">
                 <span class="logo"> <a href="index.html"> </a> </span>
            </div>
            <div id="page-header">
    			<div class="content-box">
    				<h1 class="heading">Login</h1>
     			</div>
    		</div>
            <div class="content-wrapper">
            	<div class="page-slice">
            		<div class="content-slice">
            			<div class="content-box">
            				<h1 class="heading">Login</h1>
            				<div class="row">
            					<div class="col-md-6">
            						<div class="well">
            							<p><strong>New Customer</strong></p>
            							<p>You can create an account (optional) at the same time as completing your purchase. When you are ready to purchase, simply go to your <a class="dashed" href="cart.html">Cart</a> and proceed to checkout from there.</p><br/><br/>
    									<input type="submit" class="btn btn-sky" value="Register Now">
            						</div>
            					</div>
            					<div class="col-md-6">
            						<div class="well">
            							<p style="margin-bottom:20px;"><strong>Returning Customer</strong></p>											
            							<form class="form-inline" action="" method="post">
            								<input type="hidden" name="do_login" value="true">
            								<p>
                								<div class="row">
                									<div class="col-sm-3">
                										<strong>Email:</strong>
                									</div>
                									<div class="col-sm-9">
                										<input class="form-control" type="text" name="email" style="width:100%;">
                									</div>
                								</div>
            								</p>
            								<p>
                							    <div class="row">
                									<div class="col-sm-3">
                										<strong>Password:</strong>
                									</div>
                									<div class="col-sm-9">
                										<input class="form-control" type="password" name="password" style="width:100%;">
                									</div>
                								</div>
            								</p>
            								<p class="text-right">
            									<a class="dashed" href="password.html">Forgot your password?</a>
            								</p>
            								<p class="text-right">
            									<input type="submit" class="btn btn-sky" value="Login">
            								</p>
            								<input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591">
            							</form>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Frontend/account.blade.php ENDPATH**/ ?>