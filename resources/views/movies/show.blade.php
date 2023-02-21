@extends('layouts.app')

@section('title', 'Movie'. ' - ' . $movie->name)

@push('styles')
    <style>
        i {
            margin-right: 10px;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <img src="{{ URL('images/banner.jpg') }}" style="border-radius: 5px" width="100%" alt="Banner Image">
                </div>
            </div>
            <div class="col-md-4">
                <div style="background-color: antiquewhite;padding: 24px;border-radius: 4px">
                    <div class="border-bottom">
                        <small><span>Posted {{ $movie->created_at->diffForHumans() }}</span></small>
                        <br>
                        <strong><span class="card-title" style="font-size: 23px">{{ $movie->name }}</span></strong>
                    </div>

                    <div class="mt-2">
                        <small><span>Director(Executive Director)</span></small>
                        <div>
                            <span style="font-size: 18px">Christopher Nolan</span><br>
                        </div>
                        <div class="mt-2">
                            <i class="fa-solid fa-xl fa-envelope"></i>
                            <i class="fa-brands fa-xl fa-fw fa-telegram"></i>
                            <i class="fa-brands fa-xl fa-square-facebook"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

