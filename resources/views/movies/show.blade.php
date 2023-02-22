@extends('layouts.app')

@section('title', 'Movie'. ' - ' . $movie->name)

@push('styles')
    <style>
        i {
            margin-right: 10px;
        }
        .show-links {
            text-decoration: none;
            color: black
        }
        .show-links:hover {
            color: lightsalmon;
        }
    </style>
@endpush

@section('content')
    <div class="container">

        {{--Component to show the moviwe top navigation bar for Movie Display, Director and movie itself--}}
        <x-movie.show-movie-header :movie="$movie" >
                <a class="show-links" href="/director/{{ $movie->director->slug }}">{{ $movie->director->name }}</a> >
                <span class="{{ request()->is('movies/*') ? 'text-muted' : '' }}">{{ $movie->name }}</span>
        </x-movie.show-movie-header>

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

                    <div class="mt-4 border-bottom">
                        <small><span>Director(Executive Director)</span></small>
                        <div>
                            <span style="font-size: 18px">Christopher Nolan</span><br>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-xl fa-envelope"></i>
                            <i class="fa-brands fa-xl fa-fw fa-telegram"></i>
                            <i class="fa-brands fa-xl fa-square-facebook"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span>Rate the movie</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div style="background-color: #e5e7eb;border-radius: 4px;padding: 22px">
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Standout Actors</strong>
                        </div>
                        <div class="col-md-4">test</div>
                        <div class="col-md-4">test</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection

