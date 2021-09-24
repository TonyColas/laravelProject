@extends('layouts.base')

@section('contents')

<!--event_part start-->
<section class="event_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event_slider owl-carousel" >
                    <div class="single_event_slider">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-md-6">
                                <div class="event_slider_content">
                                    <h5>Upcoming Event</h5>
                                    <h2>{{$voyage->destination}}</h2>
                                    <p>{{$voyage->description}}
                                    </p>
                                    <p>date: <span>{{$voyage->date}}</span> </p>
                                    <p>Cost: <span>{{$voyage->cost}}</span> </p>
                                    <p>Organizer: <span>{{$voyage->organizer}}</span> </p>
                                    <div class="rating">
                                        <span>Rating:</span>
                                        <div class="place_review">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn_1">Plan Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event_part end-->

<!-- tour details content css start-->
<section class="tour_details_content section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="content_iner">
                    {{$voyage->description}}       
                    {{$voyage->description}}               
                    <div class="tour_details_content_btn">
                        <a href="#" class="btn_1">Book Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tour details content css end-->

@endsection