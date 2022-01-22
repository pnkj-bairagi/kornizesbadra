

<?php $__env->startPush('page-styles'); ?>
    <meta name="theme-color" content="#fff" media="(prefers-color-scheme: light)" />
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/signup.css" media="screen,print">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
<main id="site-main">
    <div class="page-wrapper">
        <div class="logo-wrapper-mobile">
            <span class="logo">
                <a href="index.html"> </a>
            </span>
        </div>
        <div id="page-header">
            <div class="content-box">
                <h2>Sign Up</h2>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="page-slice">
                <div class="container">
                    <div id="mlb2-1621228" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1621228">
                        <div class="ml-form-align-center">
                            <div class="ml-form-embedWrapper embedForm">
                                <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                                    <div class="ml-form-embedContent" style="">
                                        <p>We'd love to keep you up to date with relevant information & updates &mdash; what types of emails would you be interested in receiving? Choose as many as you'd like! (Optional)</p>
                                    </div>
                                    <form class="ml-block-form" action="https://app.mailerlite.com/webforms/submit/c6z5e9" data-code="c6z5e9" method="post" target="_blank" rel="noopener noreferrer">
                                        <div class="ml-form-formContent">
                                            <div class="ml-form-fieldRow ml-last-item">
                                                <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                                    <input type="email" class="form-control" data-inputmask="" name="fields[email]" value="" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-form-interestGroupsRow ml-block-groups ml-validate-required">
                                            <div class="ml-form-interestGroupsRowCheckbox group" style="">
                                                <label>
                                                    <input type="checkbox" name="groups[]" value="107456554" />
                                                    <div class="label-description">Framing tips, ideas, and announcements (+ occasional discounts) that will keep you regularly inspired.</div>
                                                </label>
                                            </div>
                                            <div class="ml-form-interestGroupsRowCheckbox group" style="">
                                                <label>
                                                    <input type="checkbox" name="groups[]" value="103901549" />
                                                    <div class="label-description">Reseller resources to help artists, designers, and photographers sell your own art/designs/photos using our services.</div>
                                                </label>
                                            </div>
                                            <div class="ml-form-interestGroupsRowCheckbox last-group" style="">
                                                <label>
                                                    <input type="checkbox" name="groups[]" value="107456557" />
                                                    <div class="label-description">
                                                        Information for businesses looking to build a relationship with an expert frame source for all order fulfillment & distribution. (Great for galleries, museums, corporate offices,
                                                        retail stores, the hospitality industry, municipalities, interior design firms, schools / universities, etc.)
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .ml-form-recaptcha {
                                                margin-bottom: 20px;
                                                float: left;
                                            }
                                            .ml-form-recaptcha.ml-error iframe {
                                                border: solid 1px red;
                                            }
                                            @media  screen and (max-width: 768px) {
                                                .ml-form-recaptcha {
                                                    transform: scale(0.77);
                                                    -webkit-transform: scale(0.77);
                                                    transform-origin: 0 0;
                                                    -webkit-transform-origin: 0 0;
                                                }
                                            }
                                        </style>
                                        <input type="hidden" name="fields[signup_form_location]" value="signup" />
                                        <input type="hidden" name="ml-submit" value="1" />
                                        <div class="ml-form-embedSubmit">
                                            <button type="submit" class="primary btn btn-sky">Sign Up!</button>
                                            <button disabled="disabled" style="display: none;" type="button" class="loading">
                                                <div class="ml-form-embedSubmitLoad">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </button>
                                        </div>
                                        <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                    </form>
                                </div>
                                <div class="ml-form-successBody row-success" style="display: none;">
                                    <div class="ml-form-successContent">
                                        <h4>Thank you!</h4>
                                        <p>You have successfully joined our subscriber list.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function ml_webform_success_1621228() {
                            try {
                                window.top.location.href = "https://www.frameiteasy.com/thank-you?utm_source=fie&utm_medium=website&utm_campaign=signup";
                            } catch (t) {
                                window.location.href = "https://www.frameiteasy.com/thank-you?utm_source=fie&utm_medium=website&utm_campaign=signup";
                            }
                        }
                    </script>
                    <img
                        src="https://track.mailerlite.com/webforms/o/1621228/c6z5e9?v4a60e9ef938a7fa0240ac9ba567062cb"
                        width="1"
                        height="1"
                        alt="webform"
                        style="max-width: 1px; max-height: 1px; visibility: hidden; padding: 0; margin: 0; display: block;"
                        border="0"
                    />
                    <script src="https://static.mailerlite.com/js/w/webforms.min.js?v4a60e9ef938a7fa0240ac9ba567062cb" type="text/javascript"></script>
                </div>
            </div>
            <script type="text/javascript">
                dataLayer.push({
                    event: "GAEvent",
                    eventCategory: "landingpage",
                    eventAction: "marketing",
                    eventLabel: "email-signup",
                    eventValue: undefined,
                });
            </script>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Frontend/signup.blade.php ENDPATH**/ ?>