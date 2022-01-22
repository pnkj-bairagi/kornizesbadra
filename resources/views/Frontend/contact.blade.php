@extends('Frontend.layout.app')

@push('page-styles')
    <meta name="theme-color" content="#fff" media="(prefers-color-scheme: light)" />
@endpush

@section('main-content')
    <main id="site-main">
        <div class="page-wrapper">
            <div class="logo-wrapper-mobile">
                <span class="logo">
                    <a href="index.html"> </a>
                </span>
            </div>
            <div id="page-header">
                <div class="content-box">
                    <h1 class="heading">Contact Us</h1>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="page-slice">
                    <div class="content-slice">
                        <div class="intro-copy">
                            <div class="page-slice contact-support">
                                <div class="content-slice">
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
                                                <textarea name="message" class="form-control" rows="2" placeholder="Write your Message here"></textarea>
                                            </div>
                                        </div>
                                        <br />
    
                                        <button type="submit" class="btn btn-orange">
                                            Submit
                                        </button>
                                        <br />
                                        <div class="success-msg">
                                            <div class="msg-align">
                                                <div></div>
                                            </div>
                                        </div>
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
                        <div class="modal fade video-modal" id="measure-art-for-framing-modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">How to Measure Your Photo, Artwork, or Poster</h4>
                                        <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="youtube-container">
                                            <div class="youtube-player" data-id="WS-GcYFl2Wo" data-img="images/template/learn/measure-art-for-framing.jpg"></div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection