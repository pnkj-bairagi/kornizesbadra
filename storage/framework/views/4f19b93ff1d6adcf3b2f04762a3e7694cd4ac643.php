

<?php $__env->startPush('page-styles'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="container-fluid">
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Profile</h6>
                </div>
            </div>
            <!-- /.page-title -->
        </div>
        <!-- /.container-fluid -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="container-fluid">
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Admin ID</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="" value="#<?php echo e(Auth::user()->id); ?>" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l10">Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l10" placeholder="" value="<?php echo e(Auth::user()->name); ?>" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l2">Email Address</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons list-icon">mail_outline</i></div>
                                                    <!-- /.input-group-text -->
                                                </div>
                                                <!-- /.input-group-prepend -->
                                                <input class="form-control" id="l2" placeholder="Email Address" value="<?php echo e(Auth::user()->email); ?>" type="email" />
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-md-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l3">Password</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="material-icons list-icon">lock_open</i></div>
                                                    <!-- /.input-group-text -->
                                                </div>
                                                <!-- /.input-group-append -->
                                                <input class="form-control" id="l3" placeholder="Password" value="<?php echo e(Auth::user()->plain_password); ?>" type="password" />
                                            </div>
                                            <!-- /.input-group -->
                                        </div>
                                        <!-- /.col-md-9 -->
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary" type="button">Update</button>
                                                <button class="btn btn-outline-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </div>
        <!-- /.container-fluid -->
    </main>
    <!-- /.main-wrapper -->
<?php $__env->stopSection(); ?>
            

<?php echo $__env->make('Backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/profile.blade.php ENDPATH**/ ?>