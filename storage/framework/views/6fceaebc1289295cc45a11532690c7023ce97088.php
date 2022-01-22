<!-- SIDEBAR -->
<aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="">
                <a href="<?php echo e(route('dashboard')); ?>"><i class="list-icon material-icons">home</i> <span class="hide-menu">Dashboard</span></a>
            </li>
            <li class="menu-item-has-children">
                <a href="javascript:void(0);"><i class="list-icon feather feather-clipboard"></i> <span class="hide-menu">Orders</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="allorders.html">List Orders</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="javascript:void(0);"><i class="list-icon feather feather-pocket"></i> <span class="hide-menu">Products</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="addproducts.html">Add Products</a></li>
                    <li><a href="updateproducts.html">Update Products</a></li>
                </ul>
            </li>
            <li class="">
                <a href="<?php echo e(route('users')); ?>"><i class="list-icon feather feather-user"></i> <span class="hide-menu">Users</span></a>
            </li>
            <li class="">
                <a href="reviews.html">
                    <i class="list-icon feather feather-check-square"></i> <span class="hide-menu">Reviews<span class="badge bg-info">7</span></span>
                </a>
            </li>
            <li class="menu-item-has-children">
                <a href="javascript:void(0);"><i class="list-icon feather feather-layers"></i> <span class="hide-menu">Masters</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="<?php echo e(route('material.index')); ?>">Material</a></li>
                    <li><a href="<?php echo e(route('color.index')); ?>">Colors</a></li>
                    <li><a href="<?php echo e(route('thickness.index')); ?>">Thickness</a></li>
                    <li><a href="<?php echo e(route('style.index')); ?>">Style </a></li>
                    <li><a href="#">Size </a></li>
                    <li><a href="#">Matting </a></li>
                    <li><a href="#">Glass </a></li>
                    <li><a href="#">Covers </a></li>
                </ul>
            </li>
            <li class="">
                <a href="<?php echo e(route('profile')); ?>"><i class="list-icon feather feather-feather"></i> <span class="hide-menu">Profile</span></a>
            </li>
            <li class="">
                <a href="<?php echo e(route('setting')); ?>"><i class="list-icon feather feather-settings"></i> <span class="hide-menu">Settings</span></a>
            </li>
            <li class="">
                <a href="screenunlock.html"><i class="list-icon feather feather-lock"></i> <span class="hide-menu">Screen Lock</span></a>
            </li>
            <li class="">
                <a href="<?php echo e(route('adminlogout')); ?>"><i class="list-icon feather feather-power"></i> <span class="hide-menu">Logout</span></a>
            </li>
        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
<!-- /.site-sidebar --><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/layout/includes/sidebar.blade.php ENDPATH**/ ?>