

<?php $__env->startPush('page-styles'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
   <main class="main-wrapper clearfix" style="min-height: 231px;">
            <!-- Page Title Area -->
            <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Material</h6>
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
                                    <?php echo $__env->make('Backend.admin.layout.includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <form action="<?php if($data): ?><?php echo e(route('material.update',['material'=>$data->id])); ?><?php else: ?><?php echo e(route('material.store')); ?><?php endif; ?>" method="post" id="Material-Form">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l11">Title</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="title" placeholder="Enter Material Title" name="title" type="text" value="<?php if($data): ?><?php echo e($data->title); ?><?php endif; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="l15">Description</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="description" rows="3"><?php if($data): ?><?php echo e($data->description); ?><?php endif; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                        <div class="form-actions">
                                            <div class="form-group row">
                                                <div class="col-md-9 ml-md-auto btn-list">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                    <a class="btn btn-outline-default" type="button" href="<?php echo e(route('material.index')); ?>">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                </form>
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
        </div>
    </main>
    <!-- /.main-wrapper -->
<?php $__env->stopSection(); ?>
            

<?php echo $__env->make('Backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/material/add.blade.php ENDPATH**/ ?>