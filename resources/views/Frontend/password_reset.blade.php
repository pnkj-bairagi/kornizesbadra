@extends('Frontend.layout.app')

@push('page-styles')
    <meta name="theme-color" content="#fff" media="(prefers-color-scheme: light)" />
@endpush

@section('main-content')
   <main id="site-main">
        <div class="page-wrapper">
            <div class="logo-wrapper-mobile">
                <span class="logo">
                    <a href="index.html">
                        <span>Frame It Easy</span>
                    </a>
                </span>
            </div>
            <div class="content-wrapper">
                <div class="page-slice">
                    <div class="content-slice">
                        <div class="content-box">
                            <h1 class="heading">Reset Password</h1>
                            <br />
    
                            <form id="password" action="https://www.frameiteasy.com/password" method="post">
                                <input type="hidden" name="password_reset" value="true" />
                                <p>
                                    Email Address:&nbsp;&nbsp;<input type="text" name="email" size="30" class="form-control" style="display: inline-block; width: 200px;" />
                                    <input type="submit" name="password_reset" value="Reset Password" class="btn btn-sky" />
                                </p>
                                <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection