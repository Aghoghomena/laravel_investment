
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
        <section class="section-block">
            <div class="row flex">
                <div class="column width-12">
                    <div class="signup-form-container signup-box horizon" data-animate-in="preset:slideInLeftLong;duration:1000ms;">
                        <h3 class="mb-10">Create Users</h3>
                        <form class="" method="post" action="/user">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <input type="text" name="fname" class="form-name form-element large left" placeholder="First Name*" tabindex="2">
                                    </div>
                                </div>
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <input type="text" name="lname" class="form-name form-element large left" placeholder="Last Name*" tabindex="2">
                                    </div>
                                </div>
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <input type="email" name="email" class="form-email form-element large left" placeholder="Email address*" tabindex="2">
                                    </div>
                                </div>
                                <div class="column width-6">
                                    <div class="field-wrapper">
                                        <input type="password" name="password" class="form-name form-element large left" placeholder="Password*" tabindex="2">
                                    </div>
                                </div>
                                <div class="column width-5">
                                    <button type="submit" class="form-submit button pill large border-theme bkg-hover-theme color-theme color-hover-white">Create</button>
                                </div>
                            </div>
                            <input type="text" name="honeypot" class="form-honeypot form-element">
                            <div class="form-response show"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Custom Signup Section End -->


    </div>
    <!-- Content End -->

@endsection
