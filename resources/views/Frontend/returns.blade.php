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
                <h1 class="heading">Return Policy</h1>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="page-slice">
                <div class="content-slice">
                    <div class="intro-copy">
                        <div class="page-slice contact-support"></div>
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