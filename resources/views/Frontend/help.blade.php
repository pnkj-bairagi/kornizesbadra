@extends('Frontend.layout.app')

@push('page-styles')
    <meta name="theme-color" content="#fff" media="(prefers-color-scheme: light)" />
@endpush

@section('main-content')
    <main id="site-main">
        <div class="page-wrapper">
            <div class="logo-wrapper-mobile">
                <span class="logo"> <a href="{{url('/')}}"></a> </span>
            </div>
            <div id="page-header">
                <div class="content-box">
                    <h1 class="heading">Help</h1>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="page-slice">
                    <div class="content-slice">
                        <div class="intro-copy">
                            <h2>How can we help you today?</h2>
    
                            <div class="page-slice contact-support">
                                <div class="content-slice">
                                    <p>
                                        If you have a question that this page cannot answer or if you just need some additional help, please fill out this form below and one of our support team members will be happy to reach out and assist you.
                                    </p>
                                    <br />
                                    <form id="help-form" action="sendmail.php" method="post">
                                        <div class="row first-row">
                                            <div class="col-xs-12">
                                                <input name="name" type="text" class="form-control" placeholder="*Name" />
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input name="email_address" type="text" class="form-control" placeholder="*Email Address" />
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input name="phone_number" type="text" class="form-control" placeholder="Phone Number" />
                                            </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <textarea name="message" class="form-control" rows="2" placeholder="*How can we help you?"></textarea>
                                            </div>
                                        </div>
                                        <br />
    
                                        <button type="submit" class="btn btn-orange">
                                            Submit
                                        </button>
                                        <br />
    
                                        <div class="error-msg">
                                            <div class="msg-align">
                                                <div>
                                                    <p class="text"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection