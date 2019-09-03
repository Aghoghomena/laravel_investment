
@extends('master')
@section('title', 'View Users')
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
                            <h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">Single User</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-block cart-overview deals-table">
            <div class="row">
                <div class="column width-12">
                    <div class="cart-review">
                        <table class="table non-responsive">
                            <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-name">First Name</th>
                                <th class="product-price">Last Name</th>
                                <th class="product-quantity">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">
                                    <td class="product-remove center">
                                        <a href="#" class="product-remove icon-cancel"></a>
                                    </td>
                                    <td class="product-name">
                                        {{$user->first_name}}
                                    </td>
                                    <td class="product-name">
                                        {{$user->last_name}}
                                    </td>
                                    <td class="product-name">
                                        {{$user->email}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content End -->

@endsection
