

<?php $__env->startPush('page-styles'); ?>
    <link rel="preload" href="<?php echo e(asset('assets/frontend')); ?>/fonts/montserrat-v15-latin/montserrat-v15-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/frame-styles.css" media="screen,print" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
<main id="site-main">
    <div class="page-wrapper">
        <div class="logo-wrapper-mobile">
            <span class="logo">
                <a href="index.html">
                    <span>Frame It Easy</span>
                </a>
            </span>
        </div>
        <div id="page-header">
            <div class="content-box">
                <h1 class="heading">Frame Styles</h1>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="page-slice">
                <div class="page-slice-full-width">
                    <div id="frame-styles-gallery" class="content-slice">
                        <div class="row">
                            <div id="sort-options" class="col-md-3">
                                <h3>Sort Frames By:</h3>
                            </div>
                            <div class="col-md-9 text-center">
                                <ul id="frame-styles-sort">
                                    <li class="metal gold black white silver color shiny matte dark light flat modern thin">
                                        <a href="">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-1.jpg" class="lazyload" />
                                            <h4>Frame-1</h4>
                                        </a>
                                    </li>
                                    <li class="metal black silver shiny matte dark light flat modern thick">
                                        <a href="frame-styles/bradford.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-2.jpg" class="lazyload" />
                                            <h4>Frame-2</h4>
                                        </a>
                                    </li>
                                    <li class="wood wood-natural black white gold dark light wood-colored flat rustic thick">
                                        <a href="frame-styles/dayton.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-3.jpg" class="lazyload" />
                                            <h4>Frame-3</h4>
                                        </a>
                                    </li>
                                    <li class="wood black white dark light wood-colored flat rustic thick">
                                        <a href="frame-styles/derby.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-4.jpg" class="lazyload" />
                                            <h4>Frame-4</h4>
                                        </a>
                                    </li>
                                    <li class="metal gold black white silver color shiny matte dark light flat modern thin">
                                        <a href="">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-1.jpg" class="lazyload" />
                                            <h4>Frame-1</h4>
                                        </a>
                                    </li>
                                    <li class="metal black silver shiny matte dark light flat modern thick">
                                        <a href="frame-styles/bradford.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-2.jpg" class="lazyload" />
                                            <h4>Frame-2</h4>
                                        </a>
                                    </li>
                                    <li class="wood wood-natural black white gold dark light wood-colored flat rustic thick">
                                        <a href="frame-styles/dayton.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-3.jpg" class="lazyload" />
                                            <h4>Frame-3</h4>
                                        </a>
                                    </li>
                                    <li class="wood black white dark light wood-colored flat rustic thick">
                                        <a href="frame-styles/derby.html">
                                            <img data-sizes="auto" src="<?php echo e(asset('assets/frontend')); ?>/images/cart/profiles/frame-4.jpg" class="lazyload" />
                                            <h4>Frame-4</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="holiday-shipping-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Shipping Times</h4>
                <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p>
                    While our team is currently working overtime to craft and ship orders accurately and quickly, our shipping carriers have let us know that with the unprecedented increase in online sales, they are experiencing a multitude
                    of shipping delays. Please be patient with our shipping partners as we all do the best we can to get to get through this together!
                </p>
                <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page-scripts'); ?>
<script type="text/javascript">
    renderAllFramePreviews();
</script>

<script type="text/javascript" src="<?php echo e(asset('assets/frontend')); ?>/js/frame-styles.js"></script>

<script>
    var accessibeActivated = false;
    $(window).on("load resize scroll", function () {
        if ($("#site-footer").isOnScreen() && !accessibeActivated) {
            (function () {
                var s = document.createElement("script"),
                    e = !document.body ? document.querySelector("head") : document.body;
                s.src = "https://acsbapp.com/apps/app/dist/js/app.js";
                s.async = true;
                s.onload = function () {
                    acsbJS.init({
                        statementLink: "",
                        footerHtml: "",
                        hideMobile: false,
                        hideTrigger: false,
                        language: "en",
                        position: "right",
                        leadColor: "#146FF8",
                        triggerColor: "#146FF8",
                        triggerRadius: "50%",
                        triggerPositionX: "right",
                        triggerPositionY: "bottom",
                        triggerIcon: "people",
                        triggerSize: "medium",
                        triggerOffsetX: 20,
                        triggerOffsetY: 20,
                        mobile: { triggerSize: "small", triggerPositionX: "right", triggerPositionY: "bottom", triggerOffsetX: 10, triggerOffsetY: 10, triggerRadius: "50%" },
                    });
                };
                e.appendChild(s);
            })();
            accessibeActivated = true;
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Frontend/framestyles.blade.php ENDPATH**/ ?>