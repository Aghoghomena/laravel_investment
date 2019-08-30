
@extends('master')
@section('title', 'Create Users')
@section('content')
    <!-- Content -->
    <div class="content clearfix">

        <!-- Intro Title -->
        <div class="section-block intro-title-2 small">
            <div class="media-overlay bkg-black opacity-03"></div>
            <div class="row">
                <div class="column width-12 center">
                    <div class="title-container">
                        <div class="title-container-inner color-white">
                            <h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">Create Users</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Title End -->

        <!-- Custom Signup Section -->
        <section class="section-block bkg-grey-ultralight">
            <div class="row flex">
                <div class="column width-6 v-align-middle">
                    <div class="signup-form-container signup-box horizon" data-animate-in="preset:slideInLeftLong;duration:1000ms;">
                        <h3 class="mb-10">Custom Subscribe Section</h3>
                        <p>We only use your email for sending you offers</p>
                        <form class="signup-form" action="php/subscribe.php" method="post" novalidate>
                            <div class="row">
                                <div class="column width-12">
                                    <div class="field-wrapper">
                                        <input type="text" name="fname" class="form-name form-element large left" placeholder="First Name*" tabindex="2" required>
                                    </div>
                                </div>
                                <div class="column width-12">
                                    <div class="field-wrapper">
                                        <input type="email" name="email" class="form-email form-element large left" placeholder="Email address*" tabindex="2" required>
                                    </div>
                                </div>
                                <div class="column width-5">
                                    <input type="submit" value="Subscribe" class="form-submit button pill large border-theme bkg-hover-theme color-theme color-hover-white">
                                </div>
                            </div>
                            <input type="text" name="honeypot" class="form-honeypot form-element">
                            <div class="form-response show"></div>
                        </form>
                    </div>
                </div>
                <div class="column width-5 offset-7 offset-1">
                    <div class="hero-content split-hero-content">
                        <div class="hero-content-inner left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;" data-threshold="0.6">
                            <div class="signup-form-container">
                                <form class="signup-form" action="php/subscribe.php" method="post" novalidate>
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="field-wrapper">
                                                <input type="text" name="fname" class="form-name form-element large left" placeholder="First Name*" tabindex="2" required>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="field-wrapper">
                                                <input type="email" name="email" class="form-email form-element large left" placeholder="Email address*" tabindex="2" required>
                                            </div>
                                        </div>
                                        <div class="column width-5">
                                            <input type="submit" value="Subscribe" class="form-submit button pill large border-theme bkg-hover-theme color-theme color-hover-white">
                                        </div>
                                    </div>
                                    <input type="text" name="honeypot" class="form-honeypot form-element">
                                    <div class="form-response show"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Custom Signup Section End -->


    </div>
    <!-- Content End -->

@endsection
