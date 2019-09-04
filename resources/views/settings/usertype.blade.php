
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
                            <h1 class="title-xlarge font-alt-2 weight-light color-white mb-10">User Type List</h1>
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
                                <th class="product-remove"></th>
                                <th class="product-remove"></th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Desc</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)
                                <tr class="cart-item">
                                    <td class="product-remove center">
                                        <a href="#" class="product-remove icon-cancel"></a>
                                    </td>
                                    <td class="product-remove center">
                                        <a href="/usertype/{{ $type->id }}" class="product-remove icon-select-arrows"></a>
                                    </td>
                                    <td class="product-remove center">
                                        <a href="/usertype/{{ $type->id }}/edit" class="product-remove icon-edit"></a>
                                    </td>
                                    <td class="product-name">
                                        {{$type->name}}
                                    </td>
                                    <td class="product-name">
                                        {{$type->type_desc}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content End -->

@endsection
