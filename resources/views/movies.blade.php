@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gloock&family=Luxurious+Roman&display=swap');
        .box-shadow-hover:hover {
            box-shadow: 0 2px 5px 0 rgba(227, 166, 200, 1), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .box-shadow-hover {
            transition: box-shadow 0.5s;
        }
        .pointer {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="banner">
                    <x-home.jumbotron-header />
                    <br>
                    <div class="text-center">
                        <span class="display-6" style="font-family: 'Luxurious Roman', cursive;">
                            ITEMS ON DISPLAY
                        </span>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card box-shadow-hover pointer">
                                <div class="card shadow">
                                    <a href="/movies/">
                                        <img src="images/banner.jpg" style="border-radius: 5px" width="100%" alt="">
                                    </a>
                                    <div class="card-body">
                                        <span class="card-left-text">
                                            <strong>Kes 1,490,000</strong>
                                        </span>
                                        <span class="card-right-text" style="float: right">
                                            <strong>Nairobi</strong>
                                        </span>
                                        <div class="row">
                                            <div class="col-md-6 mb-2"><small><i class="fa-solid fa-user"></i><span> Test</span></small></div>
                                            <div class="col-md-6 mb-2"><small><i class="fa-solid fa-building"></i><span> Headquarters</span></small></div>
                                            <div class="col-md-6 mb-2"><small><i class="fa-solid fa-car"></i><span> Vehicle</span></small></div>
                                            <div class="col-md-6 mb-2"><small><i class="fa-solid fa-gas-pump"></i><span> Oil Consumed</span></small></div>
                                            <div class="col-md-6 mb-2"><small><i class="fa-solid fa-droplet"></i><span> Model</span></small></div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"
                                               style="padding: 10px 74px 10px 74px"
                                               class="btn btn-block btn-primary">
                                                See Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection