

<?php $__env->startPush('page-styles'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="container-fluid">
                <div class="row page-title clearfix">
                    <div class="page-title-left">
                        <h6 class="page-title-heading mr-0 mr-r-5">Frame Thickness
                         <a type="button" href="<?php echo e(route('thickness.create')); ?>"  class="btn btn-primary pull-right">Add Thickness</a>
                        </h6>
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
                                <!-- /.widget-heading -->
                                <div class="widget-body clearfix">
                                    <table class="table table-striped" data-toggle="datatables" data-plugin-options='{"searching": false}'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Added</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($data): ?>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($dt->id); ?></td>
                                                <td><?php echo e($dt->title); ?></td>
                                                <td><?php echo e(date('d/m/Y',strtotime($dt->created_at))); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('thickness.edit',$dt->id)); ?>" class="color-content"><i class="material-icons">edit</i></a>
                                                    <a href="<?php echo e(route('thickness.show',$dt->id)); ?>" class="color-content"><i class="material-icons">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </table>
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
            

<?php echo $__env->make('Backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/thickness/index.blade.php ENDPATH**/ ?>