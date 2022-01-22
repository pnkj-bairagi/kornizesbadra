@extends('Frontend.layout.app')

@push('page-styles')
    <meta name="theme-color" content="#fff" media="(prefers-color-scheme: light)" />

    
@endpush

@section('main-content')
    <main id="site-main">
        <div class="page-wrapper">
            <div id="home-hero">
                <div class="hero-wrapper" style="background-image: url('{{asset('assets/frontend')}}/images/template/banners/banner1.png');">
                    <div class="logo-wrapper-mobile">
                        <span class="logo">
                            <a href="{{url('/')}}">
                                <span>Kornizesbadra.com</span>
                            </a>
                        </span>
                    </div>
                    <div class="container">
                        <div class="hero-content">
                            <h1>Providing Online Photo Frames that are Fast &amp; Easy!</h1>
                            <p>Use our website to create a custom frame for art you already have, or upload a photo that we’ll print and frame so it arrives at your door step ready to Use.</p>
                            <!--<p class="made-in-the-usa"><img src="images/icons/flag.svg" alt="American Flag" aria-hidden="true"> <span>Proudly Made in Greece</span></p>-->
                            <p class="hero-options"><a class="button orange scroll-link" href="#design-your-frame">Design Frame Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div id="home-content" class="page-slice">
                    <div id="design-your-frame" class="content-slice">
                        <div class="row">
                            <h2>Design Your Frame</h2>
                        </div>
                        <div id="the-frame-builder" class="row">
                            <!-- Tabs and Content -->
                            <div class="col-xs-7">
                                <div id="tab-box" class="tab-box frame-preview">
                                    <div class="tabs your-frame-wrapper">
                                        <div class="your-frame-line-item tab active visited" data-tab-id="1" data-tab-name="size" data-highlight="artwork">
                                            <span class="step">1</span>
                                            <div class="title-wrapper"><span class="title">Art Work</span></div>
                                            <span class="size-text">8" x 10"</span>
                                            <span
                                                id="art-size-popover"
                                                class="label label-default has-popover"
                                                data-container="body"
                                                data-toggle="popover"
                                                data-trigger="hover"
                                                data-placement="top"
                                                data-content="<p>The outside measurements of your frame will be <span class='outside-measurements-width'>10 1/16&quot;</span> x <span class='outside-measurements-height'>12 1/16&quot;</span>, and it will be <span class='outside-measurements-depth'>3/4&quot;</span> deep.</p><p>Your artwork will be covered by 1/4&quot; on each side. This is to hold the art in place, or prevent it from “falling through” the matboard or frame.</p>"
                                            >
                                                Details
                                            </span>
                                            <div class="arrow"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="content">
                                            <div class="tab-content active" data-tab-id="1" data-tab-name="size">
                                                <p>
                                                    Enter the size of your art
                                                    <span
                                                        class="has-popover"
                                                        data-container="body"
                                                        data-toggle="popover"
                                                        data-trigger="hover"
                                                        data-placement="top"
                                                        data-content="<p>Measure each side edge to edge:</p> <p>The yellow area is the 1/4&quot; which will end up covered by the frame or matboard.</p><p>Questions? Contact us - we'll help!</p>"
                                                    >
                                                    </span>
                                                    &nbsp;
                                                </p>
                                                <div class="dimension-group">
                                                    <div class="width-form">
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label><i class="fas fa-arrows-h" aria-hidden="true"></i>&nbsp;Width:&nbsp;</label>
                                                                <select type="dropdown" class="form-control inline-dimension-input width-int">
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8" selected="selected">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                </select>
                                                                &nbsp;&&nbsp;
                                                                <select type="dropdown" class="form-control inline-dimension-input width-frac">
                                                                    <option value="0" selected="selected">0</option>
                                                                    <option value="1">1/16</option>
                                                                    <option value="2">1/8</option>
                                                                    <option value="3">3/16</option>
                                                                    <option value="4">1/4</option>
                                                                    <option value="5">5/16</option>
                                                                    <option value="6">3/8</option>
                                                                    <option value="7">7/16</option>
                                                                    <option value="8">1/2</option>
                                                                    <option value="9">9/16</option>
                                                                    <option value="A">5/8</option>
                                                                    <option value="B">11/16</option>
                                                                    <option value="C">3/4</option>
                                                                    <option value="D">13/16</option>
                                                                    <option value="E">7/8</option>
                                                                    <option value="F">15/16</option>
                                                                </select>
                                                                &nbsp;inches
                                                            </div>
                                                            <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                        </form>
                                                    </div>
                                                    <div class="height-form">
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label><i class="fas fa-arrows-v" aria-hidden="true"></i>&nbsp;Height:&nbsp;</label>
                                                                <select type="dropdown" class="form-control inline-dimension-input height-int">
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10" selected="selected">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                </select>
                                                                &nbsp;&&nbsp;
                                                                <select type="dropdown" class="form-control inline-dimension-input height-frac">
                                                                    <option value="0" selected="selected">0</option>
                                                                    <option value="1">1/16</option>
                                                                    <option value="2">1/8</option>
                                                                    <option value="3">3/16</option>
                                                                    <option value="4">1/4</option>
                                                                    <option value="5">5/16</option>
                                                                    <option value="6">3/8</option>
                                                                    <option value="7">7/16</option>
                                                                    <option value="8">1/2</option>
                                                                    <option value="9">9/16</option>
                                                                    <option value="A">5/8</option>
                                                                    <option value="B">11/16</option>
                                                                    <option value="C">3/4</option>
                                                                    <option value="D">13/16</option>
                                                                    <option value="E">7/8</option>
                                                                    <option value="F">15/16</option>
                                                                </select>
                                                                &nbsp;inches
                                                            </div>
                                                            <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="pick-a-photo selection-tile">
                                                    <div class="after-picked">
                                                        <div class="photo-picked">
                                                            <p class="text-center info-line">This image will be printed and mounted with your frame order:</p>
                                                            <div class="image"><img src="#" /></div>
                                                            <p class="text-center info-line">
                                                                <a class="btn btn-default btn-remove reset-image-upload"><i class="fas fa-ban"></i> Remove Image</a>
                                                            </p>
                                                            <div class="description">
                                                                <div class="slide-bar-wrapper">
                                                                    <div class="slide-title smallest"><i class="far fa-square" aria-hidden="true"></i>Smallest</div>
                                                                    <div class="print-size-slider" data-default-value="0"></div>
                                                                    <div class="slide-title largest"><i class="far fa-square" aria-hidden="true"></i>Largest</div>
                                                                </div>
                                                                <p class="text-center">
                                                                    <span class="size-text">8" x 10"</span>&nbsp;–&nbsp;<span class="dpi-text"></span> dots per inch
                                                                    <a class="no-dashed" role="button" data-toggle="modal" data-target="#how-many-dpi-modal"><i class="fas fa-question-circle"></i></a>
                                                                    <a class="no-dashed" role="button" data-toggle="modal" data-target="#how-many-dpi-video-modal"><i class="fas fa-video"></i></a>
                                                                </p>
                                                            </div>
                                                            <div class="paper-type-wrapper">
                                                                <hr />
                                                                <p><strong>What type of paper would you like this to be printed on?</strong></p>
                                                                <p>Both papers are a high quality choice that will produce a great print! <a href="learn/photo-paper-vs-art-paper-which-print-paper-type-to-choose/index.html">Learn More</a></p>
                                                                <div class="paper-type-group-wrapper">
                                                                    <div class="selection-tile" data-name="custom_print_paper_type" data-value="1">
                                                                        <div class="paper-type-options-wrapper">
                                                                            <div class="image"><i class="fas fa-camera"></i></div>
                                                                            <div class="description">
                                                                                <p><strong>Photo Paper</strong></p>
                                                                                <p>
                                                                                    Our <em>Photo Paper</em> is a semi-matte, bright white paper with a slight gloss/luster to it. It has a smooth surface and subtle sheen that will bring a
                                                                                    brightness and richness to prints. Perfect for photographs and text-heavy images, as well as most general, all-purpose uses.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="selection-tile" data-name="custom_print_paper_type" data-value="2">
                                                                        <div class="paper-type-options-wrapper">
                                                                            <div class="image"><i class="fas fa-paint-brush-alt"></i></div>
                                                                            <div class="description">
                                                                                <p><strong>Art Paper</strong></p>
                                                                                <p>
                                                                                    Our <em>Art Paper</em> is a cotton, natural white paper that is matte — it has no gloss or luster to it. It has the slightest warmth and a semi-smooth surface
                                                                                    that will bring elegance and nuance to prints. Best for artwork reproductions and/or digital graphics and art.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="before-picked" style="display: block;">
                                                        <div class="image-upload-wrapper">
                                                            <span class="btn btn-default fileinput-button">
                                                                <label for="files[]"><span>Print my Photo / Artwork</span></label>&nbsp;
                                                                <i class="far fa-cloud-upload" aria-hidden="true"></i>
                                                                <input id="fileupload-desktop" type="file" name="files[]" />
                                                            </span>
                                                            <div class="upload-content-policy-message">By uploading, you agree to our <a class="dashed" role="button" data-toggle="modal" data-target="#">Content Policy</a>.</div>
                                                            <div id="progress" class="progress">
                                                                <div class="progress-bar progress-bar-striped active progress-bar-sky"></div>
                                                            </div>
                                                            <div id="files" class="files"></div>
                                                        </div>
                                                        <div class="image-uploaded-wrapper">
                                                            Image uploaded!
                                                            <img src="#" style="max-width: 100px;" alt="Uploaded Image" />
                                                            <i class="fas fa-times reset-image-upload" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="button next-step" data-tab-name="style">Continue to Step 2: Size</span>
                                            </div>
                                        </div>
                                        <div class="your-frame-line-item tab" data-tab-id="2" data-tab-name="style" data-highlight="frame">
                                            <span class="step">2</span>
                                            <div class="title-wrapper"><span class="title">Size</span></div>
                                            <span class="style-text">Derby</span>&nbsp;in&nbsp;
                                            <span class="color-text">Black</span>
                                            <div class="arrow"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="content">
                                            <div class="tab-content" data-tab-id="2" data-tab-name="style">
                                                <ul class="profile-button-group">
                                                    <li class="button active" data-profile-materials="All">All</li>
                                                    <li class="button" data-profile-materials="Wood">Wood</li>
                                                    <li class="button" data-profile-materials="Metal">Metal</li>
                                                </ul>
                                                <div class="profile-wrap">
                                                    <div class="profile-box active" data-profile-materials="Wood" data-profile-id="7" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Derby<a href="frame-styles/derby.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description">1 <sup>1</sup>&frasl;<sub>4</sub>" Wood</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 42" x 42" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-7-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-1.jpg?r=478');"></div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-7" class="color-input form-control col-xs-12">
                                                                        <option value="-1">9 Colors Available:</option>
                                                                        <option value="12" selected="selected" }>Black</option>
                                                                        <option value="13" }>Black Grain</option>
                                                                        <option value="14" }>Merlot</option>
                                                                        <option value="16" }>Coffee</option>
                                                                        <option value="17" }>Rustic Gray</option>
                                                                        <option value="18" }>Wheat</option>
                                                                        <option value="19" }>Hazel</option>
                                                                        <option value="20" }>Russet</option>
                                                                        <option value="21" }>White</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Black"
                                                                            data-color-id="12"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/black_grain.png')"
                                                                            alt="Black Grain"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Black Grain"
                                                                            data-color-id="13"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Black Grain"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #432e30;"
                                                                            alt="Merlot"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Merlot"
                                                                            data-color-id="14"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Merlot"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #2a2724;"
                                                                            alt="Coffee"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Coffee"
                                                                            data-color-id="16"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Coffee"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/rustic_gray.png')"
                                                                            alt="Rustic Gray"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Rustic Gray"
                                                                            data-color-id="17"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Rustic Gray"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/wheat.png')"
                                                                            alt="Wheat"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Wheat"
                                                                            data-color-id="18"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Wheat"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/hazel.png')"
                                                                            alt="Hazel"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Hazel"
                                                                            data-color-id="19"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Hazel"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/russet.png')"
                                                                            alt="Russet"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Russet"
                                                                            data-color-id="20"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Russet"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ffffff;"
                                                                            alt="White"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="White"
                                                                            data-color-id="21"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="White"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Wood" data-profile-id="11" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Dayton<a href="" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description">1 <sup>1</sup>&frasl;<sub>4</sub>" Natural Wood</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 42" x 42" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-11-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-2.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-11" class="color-input form-control col-xs-12">
                                                                        <option value="-1">7 Colors Available:</option>
                                                                        <option value="12" }>Black</option>
                                                                        <option value="29" }>Cocoa</option>
                                                                        <option value="30" }>Umber</option>
                                                                        <option value="26" }>Gold</option>
                                                                        <option value="31" }>Sand</option>
                                                                        <option value="33" }>Whitewash</option>
                                                                        <option value="21" }>White</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Black"
                                                                            data-color-id="12"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/cocoa.png')"
                                                                            alt="Cocoa"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Cocoa"
                                                                            data-color-id="29"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Cocoa"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/umber.png')"
                                                                            alt="Umber"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Umber"
                                                                            data-color-id="30"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Umber"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #c99c56;"
                                                                            alt="Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gold"
                                                                            data-color-id="26"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-image: url('{{asset('assets/frontend')}}/images/template/profile_colors/sand.png')"
                                                                            alt="Sand"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Sand"
                                                                            data-color-id="31"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Sand"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #d6d4ce;"
                                                                            alt="Whitewash"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Whitewash"
                                                                            data-color-id="33"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Whitewash"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ffffff;"
                                                                            alt="White"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="White"
                                                                            data-color-id="21"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="White"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Wood" data-profile-id="10" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Granby<a href="frame-styles/.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description">1 <sup>3</sup>&frasl;<sub>8</sub>" Ornate Wood</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 42" x 42" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-10-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-3.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-10" class="color-input form-control col-xs-12">
                                                                        <option value="-1">2 Colors Available:</option>
                                                                        <option value="26" disabled="disabled" }>Gold (out of stock)</option>
                                                                        <option value="27" }>Silver</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #c99c56;"
                                                                            alt="Gold"
                                                                            class="color-choice color-tooltip out-of-stock"
                                                                            data-color-name="Gold"
                                                                            data-color-id="26"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gold (out of stock)"
                                                                        >
                                                                            <i class="fas fa-times" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #c7c6c6;"
                                                                            alt="Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Silver"
                                                                            data-color-id="27"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Silver"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Metal" data-profile-id="1" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Hanover<a href="frame-styles/hanover.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description"><sup>3</sup>&frasl;<sub>8</sub>" Rounded Metal</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 62" x 62" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-1-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-4.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-1" class="color-input form-control col-xs-12">
                                                                        <option value="-1">10 Colors Available:</option>
                                                                        <option value="2" }>Satin Black</option>
                                                                        <option value="1" }>Gloss Black</option>
                                                                        <option value="4" }>Satin Silver</option>
                                                                        <option value="3" }>Gloss Silver</option>
                                                                        <option value="6" }>Satin Gold</option>
                                                                        <option value="5" }>Gloss Gold</option>
                                                                        <option value="21" }>White</option>
                                                                        <option value="23" }>Red</option>
                                                                        <option value="22" }>Green</option>
                                                                        <option value="11" }>Blue</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #292929;"
                                                                            alt="Satin Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Black"
                                                                            data-color-id="2"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Gloss Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Black"
                                                                            data-color-id="1"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #dcdbdb;"
                                                                            alt="Satin Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Silver"
                                                                            data-color-id="4"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #afafaf;"
                                                                            alt="Gloss Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Silver"
                                                                            data-color-id="3"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #cca662;"
                                                                            alt="Satin Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Gold"
                                                                            data-color-id="6"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #c1913d;"
                                                                            alt="Gloss Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Gold"
                                                                            data-color-id="5"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ffffff;"
                                                                            alt="White"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="White"
                                                                            data-color-id="21"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="White"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #a91818;"
                                                                            alt="Red"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Red"
                                                                            data-color-id="23"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Red"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #1f5534;"
                                                                            alt="Green"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Green"
                                                                            data-color-id="22"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Green"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #254c94;"
                                                                            alt="Blue"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Blue"
                                                                            data-color-id="11"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Blue"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Metal" data-profile-id="3" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Ashford<a href="frame-styles/ashford.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description"><sup>3</sup>&frasl;<sub>8</sub>" Flat Metal</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 62" x 62" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-3-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-1.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-3" class="color-input form-control col-xs-12">
                                                                        <option value="-1">9 Colors Available:</option>
                                                                        <option value="2" }>Satin Black</option>
                                                                        <option value="1" }>Gloss Black</option>
                                                                        <option value="4" }>Satin Silver</option>
                                                                        <option value="3" }>Gloss Silver</option>
                                                                        <option value="6" }>Satin Gold</option>
                                                                        <option value="5" }>Gloss Gold</option>
                                                                        <option value="32" }>Rose Gold</option>
                                                                        <option value="21" }>White</option>
                                                                        <option value="25" }>Hot Pink</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #292929;"
                                                                            alt="Satin Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Black"
                                                                            data-color-id="2"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Gloss Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Black"
                                                                            data-color-id="1"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #dcdbdb;"
                                                                            alt="Satin Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Silver"
                                                                            data-color-id="4"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #afafaf;"
                                                                            alt="Gloss Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Silver"
                                                                            data-color-id="3"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #cca662;"
                                                                            alt="Satin Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Gold"
                                                                            data-color-id="6"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #c1913d;"
                                                                            alt="Gloss Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Gold"
                                                                            data-color-id="5"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ba7f66;"
                                                                            alt="Rose Gold"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Rose Gold"
                                                                            data-color-id="32"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Rose Gold"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ffffff;"
                                                                            alt="White"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="White"
                                                                            data-color-id="21"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="White"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #ff25a8;"
                                                                            alt="Hot Pink"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Hot Pink"
                                                                            data-color-id="25"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Hot Pink"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Metal" data-profile-id="2" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Hammond<a href="frame-styles/hammond.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description"><sup>7</sup>&frasl;<sub>8</sub>" Rounded Metal</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 62" x 62" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-2-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-2.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-2" class="color-input form-control col-xs-12">
                                                                        <option value="-1">4 Colors Available:</option>
                                                                        <option value="2" }>Satin Black</option>
                                                                        <option value="1" }>Gloss Black</option>
                                                                        <option value="4" }>Satin Silver</option>
                                                                        <option value="3" }>Gloss Silver</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #292929;"
                                                                            alt="Satin Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Black"
                                                                            data-color-id="2"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Gloss Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Black"
                                                                            data-color-id="1"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #dcdbdb;"
                                                                            alt="Satin Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Silver"
                                                                            data-color-id="4"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #afafaf;"
                                                                            alt="Gloss Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Silver"
                                                                            data-color-id="3"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Silver"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Metal" data-profile-id="4" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Bradford<a href="frame-styles/bradford.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description">1" Flat Metal</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 62" x 62" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-4-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-3.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-4" class="color-input form-control col-xs-12">
                                                                        <option value="-1">4 Colors Available:</option>
                                                                        <option value="2" }>Satin Black</option>
                                                                        <option value="1" }>Gloss Black</option>
                                                                        <option value="4" }>Satin Silver</option>
                                                                        <option value="3" }>Gloss Silver</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #292929;"
                                                                            alt="Satin Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Black"
                                                                            data-color-id="2"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Gloss Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Black"
                                                                            data-color-id="1"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #dcdbdb;"
                                                                            alt="Satin Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Silver"
                                                                            data-color-id="4"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #afafaf;"
                                                                            alt="Gloss Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Silver"
                                                                            data-color-id="3"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Silver"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-box" data-profile-materials="Metal" data-profile-id="5" data-color-id="12">
                                                        <div class="profile-select-container">
                                                            <div class="profile-title-wrapper">
                                                                <h3 class="heading">
                                                                    Stafford<a href="frame-styles/stafford.html" target="_blank" rel="noopener noreferrer"><i class="fas fa-question-circle" title="Click here for more information"></i></a>
                                                                </h3>
                                                                <h4 class="description">1 <sup>1</sup>&frasl;<sub>2</sub>" Flat Metal</h4>
                                                                <div class="disabled-text">
                                                                    <div class="well">Available for art plus matting 62" x 62" and smaller.</div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-image-sub-container">
                                                                <div class="profile-image profile-5-image" style="background-image:url('{{asset('assets/frontend')}}/images/cart/profiles/frame-4.jpg?r=478');"></div>
                                                                <div class="profile-image-zoom-in" role="button" data-toggle="modal" data-target="#frame-preview-modal" data-sku="" data-image="" data-profile-id="" data-color-id="21">
                                                                    <i class="fas fa-search-plus" title="Zoom in"></i>
                                                                </div>
                                                            </div>
                                                            <div class="profile-details-wrapper">
                                                                <div class="color-input-wrapper">
                                                                    <select id="profile-color-5" class="color-input form-control col-xs-12">
                                                                        <option value="-1">4 Colors Available:</option>
                                                                        <option value="2">Satin Black</option>
                                                                        <option value="1">Gloss Black</option>
                                                                        <option value="4">Satin Silver</option>
                                                                        <option value="3">Gloss Silver</option>
                                                                    </select>
                                                                </div>
                                                                <div class="profile-color-list">
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #292929;"
                                                                            alt="Satin Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Black"
                                                                            data-color-id="2"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #070707;"
                                                                            alt="Gloss Black"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Black"
                                                                            data-color-id="1"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Black"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #dcdbdb;"
                                                                            alt="Satin Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Satin Silver"
                                                                            data-color-id="4"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Satin Silver"
                                                                        ></div>
                                                                    </div>
                                                                    <div class="color-choice-container">
                                                                        <div
                                                                            style="background-color: #afafaf;"
                                                                            alt="Gloss Silver"
                                                                            class="color-choice color-tooltip"
                                                                            data-color-name="Gloss Silver"
                                                                            data-color-id="3"
                                                                            data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Gloss Silver"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="button next-step" data-tab-name="matting">Continue to Step 3: Frame</span>
                                            </div>
                                        </div>
                                        <div class="your-frame-line-item matting-group tab" data-tab-id="3" data-tab-name="matting" data-highlight="outer-mat">
                                            <span class="step">3</span>
                                            <div class="matting-wrapper">
                                                <div class="single-mat" data-tab-name="matting" data-highlight="outer-mat">
                                                    <div class="title-wrapper"><span class="title">Frame </span></div>
                                                    <span class="matting-text">None</span>
                                                </div>
                                                <div class="double-mat outer" data-tab-name="matting" data-highlight="outer-mat">
                                                    <div class="title-wrapper"><span class="title">Outer Mat</span></div>
                                                    <span class="matting-text"> </span>
                                                </div>
                                                <div class="double-mat inner" data-tab-name="matting" data-highlight="inner-mat">
                                                    <div class="title-wrapper"><span class="title">Inner Mat</span></div>
                                                    <span class="matting-text"> </span>
                                                </div>
                                            </div>
                                            <div class="arrow"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="content">
                                            <div id="matting-group" class="tab-content" data-tab-id="3" data-tab-name="matting">
                                                <p style="font-size: 15px;">
                                                    <strong>Optional.</strong> Matting adds a decorative touch and separates your art from the cover.<br />
                                                    <a class="text-link" href="learn/custom-picture-framing-quarter-inch-overlap/index.html" target="_blank" rel="noopener noreferrer">
                                                        This covers your art by 1/4" on each side and goes around (not into) it.
                                                    </a>
                                                    <span
                                                        class="has-popover"
                                                        data-container="body"
                                                        data-toggle="popover"
                                                        data-trigger="hover"
                                                        data-placement="top"
                                                        data-content="<img data-src='{{asset('assets/frontend')}}/images/template/how-matting-works.jpg' alt='How Matting Works'></p><p>Matting goes around the artwork. The yellow area is where the mat overlaps the artwork by 1/4&quot; on each side.</p><p>Questions? Contact us - we'll help!</p>"
                                                    >
                                                        <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                    </span>
                                                </p>
                                                <div class="matting-group-wrapper">
                                                    <div class="selection-tile active" data-mat-quantity="0">
                                                        <div class="matting-options-wrapper">
                                                            <div class="image no-mat">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/matboards/no-mat.jpg" width="140" height="140" alt="No Mat" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>No Mat</strong></p>
                                                                <p>Perfect for posters or large prints.</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="outer-mat-type-id" value="0" />
                                                        <input type="hidden" name="inner-mat-type-id" value="0" />
                                                    </div>
                                                    <div class="selection-tile" data-mat-quantity="1">
                                                        <div class="selection-tile-content">
                                                            <div class="matting-options-wrapper">
                                                                <div class="image">
                                                                    <img data-src="{{asset('assets/frontend')}}/images/template/matboards/single-mat.jpg" width="140" height="140" alt="Single Mat" />
                                                                </div>
                                                                <div class="description">
                                                                    <p><strong>Single Mat</strong></p>
                                                                    <p class="enabled-text">Draws the eye towards the framed piece and gives it a finished look.</p>
                                                                    <p class="enabled-text hidden-unless-active" style="margin-bottom: 0;">
                                                                        <a class="dashed" role="button" data-toggle="modal" data-target="#how-much-matting-modal">
                                                                            How much matting do I need? <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                                        </a>
                                                                    </p>
                                                                    <p class="disabled-text">Available for art sized 28" x 36" and smaller.</p>
                                                                </div>
                                                            </div>
                                                            <div class="mat-options">
                                                                <div class="row outer-mat-options" style="clear: both;">
                                                                    <strong>Options:</strong>
                                                                </div>
                                                                <div class="row outer-mat-options" style="margin-top: 10px;">
                                                                    <form class="form-inline">
                                                                        <div class="form-group">
                                                                            <a class="btn btn-default mat-design-input" data-mat="outer">
                                                                                <br />
                                                                                ()
                                                                            </a>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="outer-mat-width-int" class="hide-label">Width Inches</label>
                                                                            <select name="outer-mat-width-int" type="dropdown" class="form-control inline-dimension-input width-int" data-mat="outer" data-measure="int">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                            </select>
                                                                            <span>&nbsp;&&nbsp;</span>
                                                                            <label for="outer-mat-width-frac" class="hide-label">Width Fractions</label>
                                                                            <select name="outer-mat-width-frac" type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="outer" data-measure="frac">
                                                                                <option value="0">0</option>
                                                                                <option value="1">1/16</option>
                                                                                <option value="2">1/8</option>
                                                                                <option value="3">3/16</option>
                                                                                <option value="4">1/4</option>
                                                                                <option value="5">5/16</option>
                                                                                <option value="6">3/8</option>
                                                                                <option value="7">7/16</option>
                                                                                <option value="8">1/2</option>
                                                                                <option value="9">9/16</option>
                                                                                <option value="A">5/8</option>
                                                                                <option value="B">11/16</option>
                                                                                <option value="C">3/4</option>
                                                                                <option value="D">13/16</option>
                                                                                <option value="E">7/8</option>
                                                                                <option value="F">15/16</option>
                                                                            </select>
                                                                            <label>&nbsp;inches visible&nbsp;</label>
                                                                        </div>
                                                                        <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="selection-tile" data-mat-quantity="2">
                                                        <div class="matting-options-wrapper">
                                                            <div class="image">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/matboards/double-mat.jpg" width="140" height="140" alt="Double Mat" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>Double Mat</strong></p>
                                                                <p class="enabled-text">A second mat is used to add depth, or as an accent color for a greater effect.</p>
                                                                <p class="enabled-text hidden-unless-active" style="margin-bottom: 0;">
                                                                    <a class="dashed" role="button" data-toggle="modal" data-target="#how-much-matting-modal">
                                                                        How much matting do I need? <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                                    </a>
                                                                </p>
                                                                <p class="disabled-text">Available for art sized 28" x 36" and smaller.</p>
                                                            </div>
                                                        </div>
                                                        <div class="mat-options">
                                                            <div class="row outer-mat-options" style="clear: both;">
                                                                <strong>Outer Mat Options:</strong>
                                                            </div>
                                                            <div class="row outer-mat-options" style="margin-top: 10px;">
                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <a class="btn btn-default mat-design-input" data-mat="outer">
                                                                            <i class="fas fa-th" aria-hidden="true"></i><br />
                                                                            ()
                                                                        </a>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-int" data-mat="outer" data-measure="int">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                        <label>&nbsp;&&nbsp;</label>
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="outer" data-measure="frac">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1/16</option>
                                                                            <option value="2">1/8</option>
                                                                            <option value="3">3/16</option>
                                                                            <option value="4">1/4</option>
                                                                            <option value="5">5/16</option>
                                                                            <option value="6">3/8</option>
                                                                            <option value="7">7/16</option>
                                                                            <option value="8">1/2</option>
                                                                            <option value="9">9/16</option>
                                                                            <option value="A">5/8</option>
                                                                            <option value="B">11/16</option>
                                                                            <option value="C">3/4</option>
                                                                            <option value="D">13/16</option>
                                                                            <option value="E">7/8</option>
                                                                            <option value="F">15/16</option>
                                                                        </select>
                                                                        <label>&nbsp;inches visible&nbsp;</label>
                                                                    </div>
                                                                    <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                </form>
                                                            </div>
                                                            <div class="row inner-mat-options" style="clear: both; margin-top: 15px;">
                                                                <strong>Inner Mat Options:</strong>
                                                            </div>
                                                            <div class="row inner-mat-options" style="margin-top: 10px;">
                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <a class="btn btn-default mat-design-input" data-mat="inner">
                                                                            <i class="fas fa-th" aria-hidden="true"></i><br />
                                                                            ()
                                                                        </a>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-int" data-mat="inner" data-measure="int">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                        </select>
                                                                        <label>&nbsp;&&nbsp;</label>
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="inner" data-measure="frac">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1/16</option>
                                                                            <option value="2">1/8</option>
                                                                            <option value="3">3/16</option>
                                                                            <option value="4">1/4</option>
                                                                            <option value="5">5/16</option>
                                                                            <option value="6">3/8</option>
                                                                            <option value="7">7/16</option>
                                                                            <option value="8">1/2</option>
                                                                            <option value="9">9/16</option>
                                                                            <option value="A">5/8</option>
                                                                            <option value="B">11/16</option>
                                                                            <option value="C">3/4</option>
                                                                            <option value="D">13/16</option>
                                                                            <option value="E">7/8</option>
                                                                            <option value="F">15/16</option>
                                                                        </select>
                                                                        <label>&nbsp;inches visible&nbsp;</label>
                                                                    </div>
                                                                    <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="button next-step" data-tab-name="cover">Continue to Step 4: Matting</span>
                                            </div>
                                        </div>
                                        <div class="your-frame-line-item matting-group tab" data-tab-id="4" data-tab-name="matting" data-highlight="outer-mat">
                                            <span class="step">4</span>
                                            <div class="matting-wrapper">
                                                <div class="single-mat" data-tab-name="matting" data-highlight="outer-mat">
                                                    <div class="title-wrapper"><span class="title">Matting </span></div>
                                                    <span class="matting-text">None</span>
                                                </div>
                                                <div class="double-mat outer" data-tab-name="matting" data-highlight="outer-mat">
                                                    <div class="title-wrapper"><span class="title">Outer Mat</span></div>
                                                    <span class="matting-text"> </span>
                                                </div>
                                                <div class="double-mat inner" data-tab-name="matting" data-highlight="inner-mat">
                                                    <div class="title-wrapper"><span class="title">Inner Mat</span></div>
                                                    <span class="matting-text"> </span>
                                                </div>
                                            </div>
                                            <div class="arrow"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="content">
                                            <div id="matting-group" class="tab-content" data-tab-id="4" data-tab-name="matting">
                                                <p style="font-size: 15px;">
                                                    <strong>Optional.</strong> Matting adds a decorative touch and separates your art from the cover.<br />
                                                    <a class="text-link" href="learn/custom-picture-framing-quarter-inch-overlap/index.html" target="_blank" rel="noopener noreferrer">
                                                        This covers your art by 1/4" on each side and goes around (not into) it.
                                                    </a>
                                                    <span
                                                        class="has-popover"
                                                        data-container="body"
                                                        data-toggle="popover"
                                                        data-trigger="hover"
                                                        data-placement="top"
                                                        data-content="<img data-src='{{asset('assets/frontend')}}/images/template/how-matting-works.jpg' alt='How Matting Works'></p><p>Matting goes around the artwork. The yellow area is where the mat overlaps the artwork by 1/4&quot; on each side.</p><p>Questions? Contact us - we'll help!</p>"
                                                    >
                                                        <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                    </span>
                                                </p>
                                                <div class="matting-group-wrapper">
                                                    <div class="selection-tile active" data-mat-quantity="0">
                                                        <div class="matting-options-wrapper">
                                                            <div class="image no-mat">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/matboards/no-mat.jpg" width="140" height="140" alt="No Mat" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>No Mat</strong></p>
                                                                <p>Perfect for posters or large prints.</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="outer-mat-type-id" value="0" />
                                                        <input type="hidden" name="inner-mat-type-id" value="0" />
                                                    </div>
                                                    <div class="selection-tile" data-mat-quantity="1">
                                                        <div class="selection-tile-content">
                                                            <div class="matting-options-wrapper">
                                                                <div class="image">
                                                                    <img data-src="{{asset('assets/frontend')}}/images/template/matboards/single-mat.jpg" width="140" height="140" alt="Single Mat" />
                                                                </div>
                                                                <div class="description">
                                                                    <p><strong>Single Mat</strong></p>
                                                                    <p class="enabled-text">Draws the eye towards the framed piece and gives it a finished look.</p>
                                                                    <p class="enabled-text hidden-unless-active" style="margin-bottom: 0;">
                                                                        <a class="dashed" role="button" data-toggle="modal" data-target="#how-much-matting-modal">
                                                                            How much matting do I need? <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                                        </a>
                                                                    </p>
                                                                    <p class="disabled-text">Available for art sized 28" x 36" and smaller.</p>
                                                                </div>
                                                            </div>
                                                            <div class="mat-options">
                                                                <div class="row outer-mat-options" style="clear: both;">
                                                                    <strong>Options:</strong>
                                                                </div>
                                                                <div class="row outer-mat-options" style="margin-top: 10px;">
                                                                    <form class="form-inline">
                                                                        <div class="form-group">
                                                                            <a class="btn btn-default mat-design-input" data-mat="outer">
                                                                                <br />
                                                                                ()
                                                                            </a>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="outer-mat-width-int" class="hide-label">Width Inches</label>
                                                                            <select name="outer-mat-width-int" type="dropdown" class="form-control inline-dimension-input width-int" data-mat="outer" data-measure="int">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                            </select>
                                                                            <span>&nbsp;&&nbsp;</span>
                                                                            <label for="outer-mat-width-frac" class="hide-label">Width Fractions</label>
                                                                            <select name="outer-mat-width-frac" type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="outer" data-measure="frac">
                                                                                <option value="0">0</option>
                                                                                <option value="1">1/16</option>
                                                                                <option value="2">1/8</option>
                                                                                <option value="3">3/16</option>
                                                                                <option value="4">1/4</option>
                                                                                <option value="5">5/16</option>
                                                                                <option value="6">3/8</option>
                                                                                <option value="7">7/16</option>
                                                                                <option value="8">1/2</option>
                                                                                <option value="9">9/16</option>
                                                                                <option value="A">5/8</option>
                                                                                <option value="B">11/16</option>
                                                                                <option value="C">3/4</option>
                                                                                <option value="D">13/16</option>
                                                                                <option value="E">7/8</option>
                                                                                <option value="F">15/16</option>
                                                                            </select>
                                                                            <label>&nbsp;inches visible&nbsp;</label>
                                                                        </div>
                                                                        <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="selection-tile" data-mat-quantity="2">
                                                        <div class="matting-options-wrapper">
                                                            <div class="image">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/matboards/double-mat.jpg" width="140" height="140" alt="Double Mat" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>Double Mat</strong></p>
                                                                <p class="enabled-text">A second mat is used to add depth, or as an accent color for a greater effect.</p>
                                                                <p class="enabled-text hidden-unless-active" style="margin-bottom: 0;">
                                                                    <a class="dashed" role="button" data-toggle="modal" data-target="#how-much-matting-modal">
                                                                        How much matting do I need? <i class="fas fa-question-circle" title="Click here for more information"></i>
                                                                    </a>
                                                                </p>
                                                                <p class="disabled-text">Available for art sized 28" x 36" and smaller.</p>
                                                            </div>
                                                        </div>
                                                        <div class="mat-options">
                                                            <div class="row outer-mat-options" style="clear: both;">
                                                                <strong>Outer Mat Options:</strong>
                                                            </div>
                                                            <div class="row outer-mat-options" style="margin-top: 10px;">
                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <a class="btn btn-default mat-design-input" data-mat="outer">
                                                                            <i class="fas fa-th" aria-hidden="true"></i><br />
                                                                            ()
                                                                        </a>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-int" data-mat="outer" data-measure="int">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                        <label>&nbsp;&&nbsp;</label>
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="outer" data-measure="frac">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1/16</option>
                                                                            <option value="2">1/8</option>
                                                                            <option value="3">3/16</option>
                                                                            <option value="4">1/4</option>
                                                                            <option value="5">5/16</option>
                                                                            <option value="6">3/8</option>
                                                                            <option value="7">7/16</option>
                                                                            <option value="8">1/2</option>
                                                                            <option value="9">9/16</option>
                                                                            <option value="A">5/8</option>
                                                                            <option value="B">11/16</option>
                                                                            <option value="C">3/4</option>
                                                                            <option value="D">13/16</option>
                                                                            <option value="E">7/8</option>
                                                                            <option value="F">15/16</option>
                                                                        </select>
                                                                        <label>&nbsp;inches visible&nbsp;</label>
                                                                    </div>
                                                                    <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                </form>
                                                            </div>
                                                            <div class="row inner-mat-options" style="clear: both; margin-top: 15px;">
                                                                <strong>Inner Mat Options:</strong>
                                                            </div>
                                                            <div class="row inner-mat-options" style="margin-top: 10px;">
                                                                <form class="form-inline">
                                                                    <div class="form-group">
                                                                        <a class="btn btn-default mat-design-input" data-mat="inner">
                                                                            <i class="fas fa-th" aria-hidden="true"></i><br />
                                                                            ()
                                                                        </a>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-int" data-mat="inner" data-measure="int">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                        </select>
                                                                        <label>&nbsp;&&nbsp;</label>
                                                                        <select type="dropdown" class="form-control inline-dimension-input width-frac" data-mat="inner" data-measure="frac">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1/16</option>
                                                                            <option value="2">1/8</option>
                                                                            <option value="3">3/16</option>
                                                                            <option value="4">1/4</option>
                                                                            <option value="5">5/16</option>
                                                                            <option value="6">3/8</option>
                                                                            <option value="7">7/16</option>
                                                                            <option value="8">1/2</option>
                                                                            <option value="9">9/16</option>
                                                                            <option value="A">5/8</option>
                                                                            <option value="B">11/16</option>
                                                                            <option value="C">3/4</option>
                                                                            <option value="D">13/16</option>
                                                                            <option value="E">7/8</option>
                                                                            <option value="F">15/16</option>
                                                                        </select>
                                                                        <label>&nbsp;inches visible&nbsp;</label>
                                                                    </div>
                                                                    <input name="token" type="hidden" value="e8da3f2e0cd0587ac3b25974bd03a1702c649e5136713996857cd7251d32d591" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="button next-step" data-tab-name="cover">Continue to Step 5: Glass</span>
                                            </div>
                                        </div>
                                        <div class="your-frame-line-item tab" data-tab-id="5" data-tab-name="cover">
                                            <span class="step">5</span>
                                            <div class="cover-wrapper">
                                                <div class="title-wrapper"><span class="title">Glass</span></div>
                                                <span class="cover-text">Clear Acrylic</span>
                                            </div>
                                            <div class="arrow"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="content">
                                            <div class="tab-content" data-tab-id="5" data-tab-name="cover">
                                                <p style="font-size: 15px;">
                                                    Our glass-alternatives below look and act like glass, but are safe and easy to ship.
                                                    <a class="dashed" role="button" data-toggle="modal" data-target="#clear-vs-non-glare">How do these compare? <i class="fas fa-video" title="Click here to watch more"></i></a>
                                                </p>
                                                <div class="cover-group-wrapper">
                                                    <div class="selection-tile active" data-cover-id="3" data-alt-cover-id="3">
                                                        <div class="cover-options-wrapper">
                                                            <div class="image">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/covers/clear-acrylic-small.jpg" width="140" height="140" alt="Clear Acrylic" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>Clear</strong></p>
                                                                <p>Clear like glass. Great for use in homes, galleries, and museums. Protects your art from some UV light.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="selection-tile" data-cover-id="5" data-alt-cover-id="5">
                                                        <div class="cover-options-wrapper">
                                                            <div class="image">
                                                                <img data-src="{{asset('assets/frontend')}}/images/template/covers/non-glare-acrylic-small.jpg" width="140" height="140" alt="Non-Glare Acrylic" />
                                                            </div>
                                                            <div class="description">
                                                                <p><strong>Non-Glare</strong></p>
                                                                <p>
                                                                    Elegantly diffuses light with a matted finish (softens colors slightly). Protects your art from some UV light.
                                                                    <strong>(Not recommended for art that includes matting as it will cause a less crisp display.)</strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="no-cover" style="display: none;">
                                                        <div class="selection-tile" data-cover-id="4" data-alt-cover-id="4">
                                                            <div class="cover-options-wrapper">
                                                                <div class="description">
                                                                    <p><strong>No Cover</strong></p>
                                                                    <p>
                                                                        Your frame won't have any acrylic in front of the artwork. Not recommended if your art needs to be held in place or protected from accidental damage, dust, and ultraviolet
                                                                        light.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="button next-step last-step">Preview My Frame</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span
                                        id="art-size-popover-mobile"
                                        class="label label-default has-popover"
                                        data-container="body"
                                        data-toggle="popover"
                                        data-trigger="hover"
                                        data-placement="top"
                                        data-content="<p>The outside measurements of your frame will be <span class='outside-measurements-width'>10 1/16&quot;</span> x <span class='outside-measurements-height'>12 1/16&quot;</span>, and it will be <span class='outside-measurements-depth'>3/4&quot;</span> deep.</p><p>Your artwork will be covered by 1/4&quot; on each side. This is to hold the art in place, or prevent it from “falling through” the matboard or frame.</p>"
                                    >
                                        Frame Size Details
                                    </span>
                                </div>
                            </div>
                            <!-- Right Column-->
                            <div class="col-xs-5">
                                <!-- Frame Preview -->
                                <div class="frame-preview-notification-wrapper" style="background-image: url('{{asset('assets/frontend')}}/images/template/framepreview.png'); ">
                                    <span class="frame-preview-canvas-hover" data-toggle="modal" data-target="#print-modal"><i class="fas fa-camera" aria-hidden="true"></i></span>
                                    <div id="canvas-home" class="frame-preview-canvas" data-width="320" data-height="320" data-sku="26071203020801000000000000000" data-quality="medium"></div>
                                    <div class="frame-preview-notification">
                                        <div class="alert alert-info">
                                            <span class="frame-preview-notification-text"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Frame Options-->
                                <div class="your-frame-wrapper">
                                    <div class="your-frame-content">
                                        <div class="your-frame-totals">
                                            $<span class="price-text">100.00</span>
                                            <span class="coupon-asterisk-wrapper" style="display: none;">
                                                <div
                                                    class="coupon-asterisk has-popover"
                                                    data-container="body"
                                                    data-toggle="popover"
                                                    data-trigger="hover"
                                                    data-placement="top"
                                                    data-content="This is the price after your coupon. Your discount is listed separately in your cart."
                                                    role="heading"
                                                >
                                                    <i class="fas fa-asterisk" aria-hidden="true"></i>
                                                </div>
                                            </span>
                                            <i class="fas fa-times" aria-hidden="true"></i>
                                            <select type="dropdown" class="form-control frame-preview-quantity">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                        <a class="btn btn-orange add-to-cart-button"><i class="fas fa-shopping-cart" aria-hidden="true"></i><i class="fas fa-spinner" aria-hidden="true"></i>&nbsp;&nbsp;Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pillar-content" class="page-slice-full-width">
                    <div class="content-slice wide">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h3>Our Guidline section will help you to Ordering Framing Service Online.</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="everything-to-know-picture-frames-online.html">
                                    <img data-sizes="auto" src="{{asset('assets/frontend')}}/images/template/preview.jpg" alt="Variety of custom frame options" class="main-frame lazyload" />
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="guide.html">
                                    <h3 class="center">Everything You will Know Before Buying Picture Frames Online</h3>
                                </a>
                                <p>The complete guide to understanding picture frames and which ones will best fit your photos and art when ordering frames online.</p>
                                <a href="guide.html" class="button btn-sky read-more">View the Guideline</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="frame-preview-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Your Frame Preview</h4>
                                <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="frame-preview-wrapper">
                                    <div id="frame-preview-modal-canvas" class="frame-preview-canvas" width="918" height="480" data-width="918" data-height="480" data-sku="26071203020801000000000000000"></div>
                                </div>
                                <div class="profile-image-box">
                                    <img class="profile-image-corner" src="#" />
                                </div>
                                <div class="profile-image-box">
                                    <img class="profile-image-side" src="#" />
                                </div>
                                <div class="profile-image-box">
                                    <img class="profile-image-measurements" src="#" />
                                    <video muted playsinline autoplay loop class="video_loop">
                                        <source src="#" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                            <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                        </div>
                    </div>
                </div>
                <div id="share-frame-modal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Share Frame</h4>
                                <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                            </div>
                            <div class="modal-body">
                                <p>You can give the following link to anyone, and they will be able to view your frame preview in any web browser.</p>
                                <p><strong>Please note</strong> that they will also be able to see the image you selected for your frame. If the frame is not purchased, after two weeks the frame will only be viewable without the image.</p>
                                <input id="share-url" class="form-control share-frame-link text-center" type="text" value="" readonly />
                                <button id="share-button" class="btn copy-to-clipboard" data-clipboard-target="#share-url" data-toggle="popover" data-placement="top" data-content="Copied!">
                                    <i class="fas fa-copy" aria-hidden="true"></i> Copy Link
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="how-many-dpi-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">How many dots per inch do I need?</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>General Guidelines:</strong></p>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Dots Per Inch</th>
                                                <th>Looks best from...</th>
                                                <th>Looks good from...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>300+</td>
                                                <td>All distances</td>
                                                <td>All distances</td>
                                            </tr>
                                            <tr>
                                                <td>200</td>
                                                <td>2+ feet away</td>
                                                <td>1 foot away</td>
                                            </tr>
                                            <tr>
                                                <td>150</td>
                                                <td>3+ feet away</td>
                                                <td>1 1/2 feet away</td>
                                            </tr>
                                            <tr>
                                                <td>100</td>
                                                <td>4+ feet away</td>
                                                <td>2 feet away</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p><strong>Detailed Description:</strong></p>
                                    <p>Dots per inch (or "DPI" for short) refers to the number of dots a printer puts down in a one-inch line. The greater this number, the more detail we can see in a printed photo.</p>
                                    <p>
                                        When you take a photo, your camera saves it at a certain level of detail which depends on the quality of the camera. It is not possible to add detail to a photo after it is taken - for example, there is
                                        nothing that can be done to a photo taken by an older cell phone camera to make it look like a picture taken by professional photography equipment.
                                    </p>
                                    <p>
                                        When you upload this photo to our website, we will always print it at the highest possible dots per inch for the size that you select. However, because it is not possible to add detail to a photo after it
                                        is taken, the larger you choose to print your photo the blurrier it will look up close. Think about stretching a standard 4" by 6" photo to fit a billboard - it will look great from a couple hundred feet
                                        away but will look very blurry up close.
                                    </p>
                                    <p>If you have any questions about dots per inch or framing in general, please do not hesitate to contact us using the phone number, email address, or instant chat box in the footer of our website.</p>
                                    <p><strong>If you found your photo online:</strong></p>
                                    <p style="margin-bottom: 0;">
                                        Usually, photos found online are not nearly as detailed as photos that are intended to be printed on paper. That's because most screens cannot display more than 72 dots per inch. However, when you print a
                                        photo out and hold it at arm's length, your eyes can discern up to 300 dots per inch. You may notice that our website won't let you print a photo larger than a certain size - this is to avoid printing
                                        something of very low quality.
                                    </p>
                                    <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade video-modal" id="how-many-dpi-video-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Photo Printing and Dots Per Inch</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="youtube-container">
                                        <div class="youtube-player" data-id="fh58Npzhci4" data-img="images/template/learn/how-many-dpi-video.jpg"></div>
                                    </div>
                                    <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade video-modal" id="upload-art-for-framing-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Framing a Photo from your Smartphone, Tablet, or Computer</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="youtube-container">
                                        <div class="youtube-player" data-id="9C0Vq7MthwU" data-img="images/template/learn/upload-art-for-framing.jpg"></div>
                                    </div>
                                    <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                                </div>
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
                    <div class="modal fade video-modal" id="clear-vs-non-glare" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Clear Acrylic vs Non-Glare Acrylic</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <video muted playsinline autoplay loop class="video_loop">
                                        <source src="#" type="video/mp4" />
                                    </video>
                                </div>
                                <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="content-policy-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Content Policy</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        We built our website to provide the simplest and best framing experience possible. You upload an image, we print and frame it, and you receive a high-quality ready-to-hang frame in the mail at an
                                        unbeatable price. In order to keep providing this great service, we have a few rules for what kind of content we accept to print and frame.
                                    </p>
                                    <p>
                                        <strong>
                                            In the simplest words possible: you need to have the rights to reproduce every single image you upload into our website (or otherwise share with us for the purpose of printing) in order for us to be
                                            able to print it.
                                        </strong>
                                    </p>
                                    <hr />
                                    <p>By uploading an image into our website (or otherwise sharing it with us for the purpose of printing), you certify that:</p>
                                    <ul>
                                        <li>
                                            You have all of the necessary rights required to use the image without infringing upon or violating the rights of any third party. These rights include but are not limited to trademarks, copyrights,
                                            patents, rights of privacy, rights of publicity, and moral rights.
                                        </li>
                                        <li>The image is not unlawful in any way and does not violate any applicable rule, regulation, or another person's privacy.</li>
                                        <li>The image is not obscene, hateful, libelous, threatening, or slanderous.</li>
                                    </ul>
                                    <hr />
                                    <p>By uploading an image into our website (or otherwise sharing it with us for the purpose of printing), you further agree that that:</p>
                                    <ul>
                                        <li>
                                            You will indemnify and release Frame It Easy from all liability (including attorney's fees and legal costs) for any claims related to the infringement of any third party's rights by the reproduction
                                            by Frame It Easy of the image you upload into our website or share with us for the purpose of printing (whether said claims are alleged or actual).
                                        </li>
                                    </ul>
                                    <hr />
                                    <p>By uploading an image into our website (or otherwise sharing it with us for the purpose of printing), you certify that you understand:</p>
                                    <ul>
                                        <li>Frame It Easy reserves the right to review the image, but receives many such images and cannot always review each one individually.</li>
                                        <li>Frame It Easy takes no ownership of the content you upload or share with us for the purpose of printing.</li>
                                        <li>Frame It Easy reserves the right to delete any uploaded or shared file which falls into one or more of the categories forbidden above, and refuse to fulfill any associated order.</li>
                                        <li>
                                            If your image is not blurry and was taken in average lighting conditions with a relatively modern camera, your print is very likely to come out beautiful. If your image is taken with an older camera,
                                            or is blurry, or is taken in dark lighting conditions, it may look differently printed than it does on your screen. This is because all screens (unless professionally calibrated) will display images
                                            differently. Frame It Easy stays as true as possible to your photo by printing it exactly as we receive it: we do not edit it, nor do we apply any of our own color profiles to it. If your photo was
                                            taken in unusual conditions or with unusual equipment and you are concerned about the print quality, please reach out to us and we would be happy to answer all of your questions and help you to get
                                            the best print possible.
                                        </li>
                                    </ul>
                                    <hr />
                                    <p>
                                        By uploading an image into our website (or otherwise sharing it with us for the purpose of printing), you also accept and agree to our other Policies, links to which are available in the footer of our
                                        website.
                                    </p>
                                    <hr />
                                    <p>
                                        TO THE FULLEST EXTENT PERMISSIBLE BY APPLICABLE LAW, NEITHER FRAME IT EASY OR ITS DIRECTORS, OFFICERS, MEMBERS, SHAREHOLDERS, EMPLOYEES, CONTRACTORS, AGENTS, REPRESENTATIVES, OR AFFILIATES (THE “FRAME IT
                                        EASY PARTIES”) SHALL BE LIABLE FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL, EXEMPLARY OR PUNITIVE DAMAGES WHETHER BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL THEORY, EVEN IF THE FRAME
                                        IT EASY PARTIES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, ARISING OUT OF OR RELATING IN ANY WAY TO OUR PROVISION (OR FAILURE TO PROVIDE) PRODUCTS OR SERVICES.
                                    </p>
                                </div>
                                <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="mat-designs-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Matboard Designs</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body"></div>
                                <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="how-much-matting-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">How much matting do I need?</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Generally speaking, the larger the piece you're framing, the larger the matting around it should be. Below are a few common sizes and types of framed pieces, and how much matting is typically used for
                                        them.
                                    </p>
                                    <table class="table table-striped table-bordered text-center">
                                        <tr>
                                            <th class="text-center" style="width: 33.33%;">Art Size</th>
                                            <th class="text-center" style="width: 33.34%;">Typical Use</th>
                                            <th class="text-center" style="width: 33.33%;">Typical Matting</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                Up to<br />
                                                5" x 7"
                                            </td>
                                            <td>
                                                Small photos,<br />
                                                Instagram prints
                                            </td>
                                            <td>1" - 1 1/2"</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Up to<br />
                                                8 1/2" x 11"
                                            </td>
                                            <td>
                                                Medium photos,<br />
                                                small prints
                                            </td>
                                            <td>1 1/2" - 2"</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Up to<br />
                                                11" x 14"
                                            </td>
                                            <td>
                                                Large photos,<br />
                                                small posters & prints
                                            </td>
                                            <td>2" - 2 1/2"</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Up to<br />
                                                18" x 24"
                                            </td>
                                            <td>
                                                Medium<br />
                                                posters & prints
                                            </td>
                                            <td>2" - 3"</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Over<br />
                                                18" x 24"
                                            </td>
                                            <td>
                                                Large and very large<br />
                                                posters & prints
                                            </td>
                                            <td>2" - 5"</td>
                                        </tr>
                                    </table>
                                    <p style="margin-bottom: 0;">
                                        Of course, framing your artwork or photo is very personal and you should use our frame preview to build the frame that looks perfect to you, even if the matting options don't agree with what is typically
                                        used above.
                                    </p>
                                </div>
                                <button type="button" class="btn close-this-modal" data-dismiss="modal">Close This Modal</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="print-or-not-print" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Do you want to print and frame your uploaded image?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="frame-preview-wrapper">
                                        <div id="print-this-canvas" class="frame-preview-canvas" width="300" height="300" data-width="300" data-height="300" data-sku="26071203020801000000000000000"></div>
                                        <a id="print-this-confirm" class="btn btn-default">Yes, I want my frame to include this art as shown above.</a>
                                    </div>
                                    <span class="or"><strong>or</strong></span>
                                    <div class="frame-preview-wrapper">
                                        <div id="dont-print-this-canvas" class="frame-preview-canvas" width="300" height="300" data-width="300" data-height="300" data-sku="26071203020801000000000000000"></div>
                                        <a id="dont-print-this-confirm" class="btn btn-default">No, I want just the frame without art as shown above.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="added-to-cart-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="added-to-cart-text">Added to cart!</h4>
                                    <div class="section row">
                                        <div class="col-md-3 item-image">
                                            <div class="frame-preview-container">
                                                <div id="canvas-add-to-cart" class="frame-preview-canvas" width="117" height="117" data-width="117" data-height="117" data-quality="small"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-description-container">
                                                <strong><span class="item-name"></span></strong>
                                                <br />
                                                <div class="item-description"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <span>
                                                <span class="item-quantity"></span>
                                                <i class="fas fa-times" aria-hidden="true"></i>
                                                <span class="item-price"></span>
                                                <span class="coupon-asterisk-wrapper">
                                                    <span
                                                        class="coupon-asterisk has-popover"
                                                        data-container="body"
                                                        data-toggle="popover"
                                                        data-trigger="hover"
                                                        data-placement="top"
                                                        data-content="This is the price after your coupon. Your discount is listed separately in your cart."
                                                        role="heading"
                                                    >
                                                        <i class="fas fa-asterisk" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="additional-hardware" class="section row hide">
                                        <div class="col-md-12">
                                            <p class="text">We highly recommend adding the following secure hanging hardware to all of your large frames for added support:</p>
                                        </div>
                                        <div class="col-md-3">
                                            <img data-sizes="auto" data-src="{{asset('assets/frontend')}}/images/cart/accessories/85.jpg" class="hardware-thumbnail lazyload" alt="Metal Frame Secure Hanging Hardware" />
                                        </div>
                                        <div class="col-md-9">
                                            <div class="accessory-title col-md-7">
                                                <h4>Secure Hanging Hardware (Metal Frames)</h4>
                                                <a class="toggle-video dashed">How does it work? <i class="fas fa-video" title="Click here to watch a video"></i></a>
                                            </div>
                                            <div class="accessory-price col-md-5">
                                                $3.99&nbsp;<i class="fas fa-times" aria-hidden="true"></i>&nbsp;
                                                <select name="quantity" type="dropdown" class="form-control accessory-quantity">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                    <option value="61">61</option>
                                                    <option value="62">62</option>
                                                    <option value="63">63</option>
                                                    <option value="64">64</option>
                                                    <option value="65">65</option>
                                                    <option value="66">66</option>
                                                    <option value="67">67</option>
                                                    <option value="68">68</option>
                                                    <option value="69">69</option>
                                                    <option value="70">70</option>
                                                    <option value="71">71</option>
                                                    <option value="72">72</option>
                                                    <option value="73">73</option>
                                                    <option value="74">74</option>
                                                    <option value="75">75</option>
                                                    <option value="76">76</option>
                                                    <option value="77">77</option>
                                                    <option value="78">78</option>
                                                    <option value="79">79</option>
                                                    <option value="80">80</option>
                                                    <option value="81">81</option>
                                                    <option value="82">82</option>
                                                    <option value="83">83</option>
                                                    <option value="84">84</option>
                                                    <option value="85">85</option>
                                                    <option value="86">86</option>
                                                    <option value="87">87</option>
                                                    <option value="88">88</option>
                                                    <option value="89">89</option>
                                                    <option value="90">90</option>
                                                    <option value="91">91</option>
                                                    <option value="92">92</option>
                                                    <option value="93">93</option>
                                                    <option value="94">94</option>
                                                    <option value="95">95</option>
                                                    <option value="96">96</option>
                                                    <option value="97">97</option>
                                                    <option value="98">98</option>
                                                    <option value="99">99</option>
                                                    <option value="100">100</option>
                                                </select>
                                                <input type="hidden" name="item_type_id" value="32" />
                                                <input type="hidden" name="accessory_id" value="85" />
                                                <button class="btn btn-default add-accessory-to-cart-button">
                                                    <i class="fas fa-plus" aria-hidden="true"></i><i class="fas fa-spinner" aria-hidden="true"></i><i class="fas fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<span class="text"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <iframe id="hanging-hardware-video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="row buttons-row">
                                        <div class="col-md-6">
                                            <a href="cart.html" class="btn btn-sky"><i class="fas fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;View Cart</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-orange" href="cart.html">
                                                <i class="far fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i class="fab fa-paypal" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Secure Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="modal fade" id="print-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Print</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="pick-a-photo selection-tile">
                                        <div class="after-picked">
                                            <div class="photo-picked text-center">
                                                <div class="image" style="margin-bottom: 10px;"><img src="#" /></div>
                                                <p class="text-center info-line">This image will be printed and mounted with your frame order.</p>
                                                <p class="text-center info-line"><a class="btn btn-default reset-image-upload">Remove It</a> or <a class="btn btn-default reset-image-upload">Pick a New One</a></p>
                                                <div class="description">
                                                    <div class="slide-bar-wrapper">
                                                        <div class="slide-title smallest"><i class="far fa-square" aria-hidden="true"></i>Smallest</div>
                                                        <div class="print-size-slider" data-default-value="0"></div>
                                                        <div class="slide-title largest"><i class="far fa-square" aria-hidden="true"></i>Largest</div>
                                                    </div>
                                                    <p class="text-center"><span class="size-text">8" x 10"</span>&nbsp;&nbsp;&nbsp;–&nbsp;&nbsp;&nbsp;<span class="dpi-text"></span> dots per inch</p>
                                                    <p class="text-center">
                                                        <i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp;<a class="dashed" role="button" data-toggle="modal" data-target="#how-many-dpi-modal">How many dots per inch do I need?</a>
                                                    </p>
                                                    <p class="text-center">
                                                        <i class="fas fa-video" aria-hidden="true"></i>&nbsp;<a class="dashed" role="button" data-toggle="modal" data-target="#how-many-dpi-video-modal">Watch a video about it!</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="before-picked" style="display: block;">
                                            <div class="image-upload-wrapper">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                <span class="btn btn-default fileinput-button">
                                                    <i class="far fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                                    <label for="files[]"><span>Upload a photo for us to print...</span></label>
                                                    <!-- The file input field used as target for the file upload widget -->
                                                    <input id="fileupload-mobile" type="file" name="files[]" />
                                                </span>
                                                <div class="upload-content-policy-message">By uploading, you agree to our <a class="dashed" role="button" data-toggle="modal" data-target="#content-policy-modal">Content Policy</a>.</div>
                                                <!-- The global progress bar -->
                                                <div id="progress" class="progress">
                                                    <div class="progress-bar progress-bar-striped active progress-bar-sky"></div>
                                                </div>
                                                <!-- The container for the uploaded files -->
                                                <div id="files" class="files"></div>
                                            </div>
                                            <div class="image-uploaded-wrapper">
                                                Image uploaded!
                                                <img src="#" style="max-width: 100px;" />
                                                <i class="fas fa-times reset-image-upload" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn close-this-modal" data-dismiss="modal">Continue Designing Frame</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('page-scripts')
<script type="text/javascript">
    var id = new Array(),
        price = 0,
        page = "product";

    var dataSku = "26071203020801000000000000000",
        componentsJson = "null";

    if (componentsJson !== "null") {
        id = Object.values(JSON.parse(componentsJson))
            .reduce(function (carry, components) {
                components.forEach(function (component) {
                    carry.push(component);
                });
                return carry;
            }, [])
            .map(function (component) {
                return component.sku;
            })
            .join("+");
    } else {
        id = dataSku;
    }

    price = 22.53;

    var google_tag_params = {
        ecomm_prodid: id,
        ecomm_pagetype: page,
        ecomm_totalvalue: price,
    };

    dataLayer.push({
        event: "dynamicremarketing",
        google_tag_params: "google_tag_params",
        ecomm_prodid: google_tag_params.ecomm_prodid,
        ecomm_pagetype: google_tag_params.ecomm_pagetype,
        ecomm_totalvalue: google_tag_params.ecomm_totalvalue,
    });
</script>
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
@endpush