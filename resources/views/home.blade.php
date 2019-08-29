
@extends('master')
@section('title', 'Welcome Page')
@section('content')
    <!-- Content -->
    <div class="content clearfix">

        <!-- Fullscreen Slider Section -->
        <section class="section-block featured-media tm-slider-parallax-container">
            <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-scale-under="960">
                <ul class="tms-slides">
                    <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#222222" data-overlay-bkg-opacity="0.8">
                        <div class="tms-content">
                            <div class="tms-content-inner center v-align-middle">
                                <div class="row">
                                    <div class="column width-12">
                                        <h1 class="tms-caption mb-10 color-white title-xlarge font-alt-2 weight-light"
                                            data-animate-in="preset:slideInUpShort;duration:900ms;delay:100ms;"
                                            data-no-scale
                                        >Warhol: Financial Services</h1>
                                        <div class="clear"></div>
                                        <p class="tms-caption lead color-white mb-30"
                                           data-animate-in="preset:slideInUpShort;duration:900ms;delay:200ms;"
                                           data-no-scale
                                        >Financial Placement &amp; Management</p>
                                        <div class="clear"></div>
                                        <div class="tms-caption"
                                             data-animate-in="preset:scaleOut;duration:1000ms;delay:600ms;"
                                             data-no-scale>
                                            <a href="https://player.vimeo.com/video/43256303?autoplay=1&amp;portrait=0&amp;title=0&amp;byline=0&amp;loop=1&amp;color=33363a" class="lightbox-link no-margins icon-play icon-circled medium border-white bkg-hover-theme color-white color-hover-white"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img data-src="{{asset('image/slider/slide-9-fs.jpg')}}" src="{{asset ('image/blank.png') }}" alt=""/>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Fullscreen Slider Section End -->

        <!-- Stat Section 1 -->
        <div class="section-block stats-1 background-grey-ultralight feature-column-group pt-0 pb-0 center color-grey">
            <div class="row full-width collapse flex">
                <div class="column width-4 bkg-grey-ultralight">
                    <div class="feature-column">
                        <div class="stat">
                            <div class="stat-inner">
                                <h4 class="mb-20 font-alt-2 weight-light"><em>Projects Completed</em></h4>
                                <p class="counter"><strong><span class="stat-counter" data-count-from="1100" data-count-to="1234">1,100</span>+</strong></p>
                                <p class="description mt-10">Since Creation in 2013</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4 bkg-grey-light">
                    <div class="feature-column">
                        <div class="stat">
                            <div class="stat-inner">
                                <h4 class="mb-20 font-alt-2 weight-light"><em>Awards &amp; Mentions</em></h4>
                                <p class="counter"><strong><span class="stat-counter" data-count-from="440" data-count-to="640">260</span>+</strong></p>
                                <p class="description mt-10">Best Websites, Best Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4 bkg-grey-ultralight">
                    <div class="feature-column">
                        <div class="stat">
                            <div class="stat-inner">
                                <h4 class="mb-20 font-alt-2 weight-light"><em>Global Rank</em></h4>
                                <p class="counter"><strong><span class="stat-counter" data-count-from="365" data-count-to="645">640</span>K</strong></p>
                                <p class="description">Entrepreneur Magazine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stat Section 1 -->

        <!-- Intro -->
        <div class="section-block pb-0">
            <div class="row">
                <div class="column width-10 offset-1 center">
                    <p class="lead weight-regular mb-70">Use feature columns to highlight key information of one or multiple sections. Featured columns can be aligned, left, center, right and further styled using icons and boxes.</p>
                </div>
                <div class="column width-12">
                    <hr class="mb-70">
                </div>
            </div>
        </div>
        <!-- Intro End -->
        <!-- Basic Feature Columns -->
        <div class="section-block pt-0">
            <div class="row flex">
                <div class="column width-4">
                    <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;" data-threshold="1">
                        <span class="feature-icon icon-upload-to-cloud color-theme"></span>
                        <div class="feature-text">
                            <h5>Upload It</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;" data-threshold="1">
                        <span class="feature-icon icon-fingerprint color-theme"></span>
                        <div class="feature-text">
                            <h5>Fingerprint</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="feature-column small left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:400ms;" data-threshold="1">
                        <span class="feature-icon icon-crop color-theme"></span>
                        <div class="feature-text">
                            <h5>Crop It</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Feature Columns End -->

        <!-- Feature Column Section -->
        <div id="discover" class="section-block replicable-content bkg-grey-ultralight">
            <div class="row">
                <div class="column width-8 offset-2 center">
                    <h2 class="mb-30">Build a Stunning Website</h2>
                    <p class="lead font-alt-2 mb-80">Warhol is a complete design toolkit that gives you the tools you need to create a unique and professional looking website for you or your client.</p>
                </div>
            </div>
            <div class="row flex">
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small mb-50 left">
                            <span class="feature-icon icon-map color-theme"></span>
                            <div class="feature-text">
                                <h4>8 Homepages</h4>
                                <p>Warhol comes with 8 different homepages and 8 unique hero sections that can easily be dropped into any section of any page.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small left">
                            <span class="feature-icon icon-add-to-list color-theme"></span>
                            <div class="feature-text">
                                <h4>20+ Components</h4>
                                <p>Make any design stand out by using a combination of the 20+ components that come with Warhol. Accordions, tabs, buttons and much more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small mb-50 left">
                            <span class="feature-icon icon-power-plug color-theme"></span>
                            <div class="feature-text">
                                <h4>8+ Plugins</h4>
                                <p>As with all our templates, Warhol comes with 8 premium in-house developed plugins, which means that when there's an update, you'll get it.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small left">
                            <span class="feature-icon icon-grid color-theme"></span>
                            <div class="feature-text">
                                <h4>Block Based</h4>
                                <p>Warhol, like all our templates, is built using a block based, responsive framework that makes designing easier. Move blocks around and get a new design.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small mb-50 left">
                            <span class="feature-icon icon-credit color-theme"></span>
                            <div class="feature-text">
                                <h4>Ultimate Startup Pack</h4>
                                <p>Warhol is a great starting point for startups that need a quick and simple solution when it comes to creating a site. Save both time &amp; money.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column width-4">
                    <div class="box small bkg-white">
                        <div class="feature-column small left">
                            <span class="feature-icon icon-infinity color-theme"></span>
                            <div class="feature-text">
                                <h4>Infinite Possibilities</h4>
                                <p>With a range of pre-design content blocks, components and plugins, Sarte provides you with an unlimited number of possibilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Column Section End -->

        <!-- Product Grid -->
        <div class="section-block replicable-content pb-0">
            <div class="row">
                <div class="column width-6 push-3 center">
                    <h2 class="mb-80">Our New Products</h2>
                </div>
            </div>
        </div>
        <div id="product-grid" class="section-block grid-container products fade-in-progressively no-padding-top pb-80" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="700">
            <div class="row">
                <div class="column width-12">
                    <div class="row grid content-grid-4">
                        <div class="grid-item product portrait grid-sizer">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <span class="onsale">Sale</span>
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset ('image/shop/grid/large-margins/product-1-portrait.jpg') }}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Crew <span class="font-alt-2">&amp;</span> Man Sweater
                                    </a>
                                </h3>
                                <span class="product-price price"><del><span class="amount">$79.00</span></del><ins><span class="amount">$65.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-2-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Brogue Highs
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$35.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-5-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Cotton <span class="font-alt-2">&amp;</span> Nylon Blazer
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$125.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-10-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Vintage Hipster Bag
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$35.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-4-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Leather Biker Jacket
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$55.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-6-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Fairchild Hipster Shirt
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$47.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-7-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Hipster Nylon <span class="font-alt-2">&amp;</span> Cotton Bag
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$99.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item product portrait">
                            <div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                <a class="overlay-link" href="single-product.html">
                                    <img src="{{asset('image/shop/grid/large-margins/product-3-portrait.jpg')}}" alt=""/>
                                </a>
                                <div class="product-actions center">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-details center">
                                <h3 class="product-title">
                                    <a href="#">
                                        Cotton <span class="font-alt-2">&amp;</span> Cashmere Blend Coat
                                    </a>
                                </h3>
                                <span class="product-price price"><ins><span class="amount">$135.00</span></ins></span>
                                <div class="product-actions-mobile">
                                    <a href="#" class="button pill add-to-cart-button medium">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Grid End -->
    </div>
    <!-- Content End -->

@endsection
