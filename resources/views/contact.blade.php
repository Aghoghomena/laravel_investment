
@extends('master')
@section('title', 'How it Works')
@section('content')

    <!-- Content -->
    <div class="content clearfix">

        <!-- Fullscreen Slider Section -->
        <section id="home" class="section-block featured-media tm-slider-parallax-container">
            <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-animation="scaleIn" data-speed="1400" data-scale-under="960">
                <ul class="tms-slides">
                    <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#333333" data-overlay-bkg-opacity="0.7">
                        <div class="tms-content">
                            <div class="tms-content-inner center v-align-middle">
                                <div class="row">
                                    <div class="column width-12">
                                        <h1 class="tms-caption title-xlarge font-alt-2 weight-light color-white mb-10"
                                            data-animate-in="preset:scaleOut;duration:1000ms;"
                                            data-no-scale
                                        >
                                            How It Works
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img data-src="{{asset('image/slider/slide-9-page-intro.jpg')}}" data-retina src="{{asset('images/blank.png')}}" alt=""/>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Fullscreen Slider Section End -->

        <!-- About Intro -->
        <div class="section-block replicable-content0">
            <div class="row">
                <div class="column width-10 offset-1">
                    <h4 class="weight-bold mb-10">The Brief</h4>
                    <p class="lead text-large weight-bold mb-50">
                        We rebuilt and revived a company identity that had lost touch with its target market; making it hip once again!
                    </p>
                </div>
                <div class="column width-5 offset-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="column width-5">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui.</p>
                </div>
                <div class="column width-5 offset-1">
                    <p class="project-attribute">
                        <span class="project-label">Client:</span><span class="project-value">Wicked Wear</span>
                    </p>
                    <p class="project-attribute">
                        <span class="project-label">Date:</span><span class="project-value">June 12, 2014</span>
                    </p>
                </div>
                <div class="column width-5">
                    <p class="project-attribute">
                        <span class="project-label">Type:</span><span class="project-value">photography</span>
                    </p>
                    <p class="project-attribute">
                        <span class="project-label">Site:</span><span class="project-value"><a href="#">www.clientsite.com</a></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- About Intro End -->

        <!-- Timeline Section -->
        <section class="section-block replicable-content">
            <div class="row">
                <div class="column width-12 center">
                    <h2 class="mb-80">The Design Process</h2>
                </div>
                <div class="column width-10 offset-1">
                    <ul class="timeline vertical-indication">
                        <li>
                            <div class="row flex">
                                <div class="timeline-title column width-6 right left-on-mobile">
                                    <div class="horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 1.</p>
                                        <h5 class="">Identifying Problem Areas</h5>
                                    </div>
                                </div>
                                <div class="timeline-description column width-6">
                                    <div class="horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
                                        <p class="mb-70">Worked as lead UX desinger overseeing UX site implementations, development and beta user testing. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row flex">
                                <div class="timeline-title column width-6 right left-on-mobile">
                                    <!-- mobile title -->
                                    <div class="hide show-on-mobile">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 2.</p>
                                        <h5 class="">Propose Rebranding Options</h5>
                                    </div>
                                    <div class="horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:200ms;">
                                        <p class="mb-70">Held the position of junior UX designer for app implementations and user interface research. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                </div>
                                <div class="timeline-description column width-6">
                                    <div class="horizon hide-on-mobile" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 2.</p>
                                        <h5 class="">Propose Rebranding Options</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row flex">
                                <div class="timeline-title column width-6 right left-on-mobile">
                                    <div class="horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:400ms;">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 3.</p>
                                        <h5 class="">Execute The Plan</h5>
                                    </div>
                                </div>
                                <div class="timeline-description column width-6">
                                    <div class="horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:400ms;">
                                        <p class="mb-70">Lead Designer and developer for Core Media website department.	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row flex">
                                <div class="timeline-title column width-6 right left-on-mobile">
                                    <!-- mobile title -->
                                    <div class="hide show-on-mobile">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 4.</p>
                                        <h5 class="">Client Review</h5>
                                    </div>
                                    <div class="horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:200ms;">
                                        <p class="mb-70">Held the position of junior UX designer for app implementations and user interface research. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                </div>
                                <div class="timeline-description column width-6">
                                    <div class="horizon hide-on-mobile" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;">
                                        <p class="color-grey font-alt-2 weight-light mb-0">Step 4.</p>
                                        <h5 class="">Client Review</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Timeline End -->

    </div>
    <!-- Content End -->

@endsection
