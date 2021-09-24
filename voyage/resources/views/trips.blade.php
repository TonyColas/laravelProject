@extends('layouts.base')

@section('contents')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>Trips</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- hotel list css start-->
<section class="top_place section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Top Places to visit</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach ($voyages as $voyage)
            <div class="col-lg-6 col-md-6">
                <div class="single_place">
                    <img src="img/single_place_1.png" alt="">
                    <div class="hover_Text d-flex align-items-end justify-content-between">
                        <div class="hover_text_iner">
                            <a href="{{route('show_trip', $voyage->id)}}" class="place_btn">travel</a>
                            <h3>{{$voyage->destination}}</h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                        </div>
                        <div class="details_icon text-right">
                            <i class="ti-share"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
    </div>
</section>
<!-- hotel list css end -->

@endsection