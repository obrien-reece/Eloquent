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
            <a
                style="font-size: 17px;"
                class="show-links"
                href="/director/{{ $movie->director->slug }}">
                {{ $movie->director->name }}
            </a>
            <i class="fa-solid fa-chevron-right"></i>
            <span
                style="font-size: 17px;"
                class="{{ request()->is('movies/*') ? 'text-muted' : '' }}">
                {{ $movie->name }}
            </span>
        </x-movie.show-movie-header>

        <div class="row">
            <div class="col-md-8 mb-4">

                {{--Entire Left page column--}}
               <x-movie.show-movie-left-div :movie="$movie" />

            </div>
            <div class="col-md-4">

                {{--Upper movie right card component--}}
                <x-movie.show-movie-upper-right-card :movie="$movie" />

                {{--Middle movie right card component--}}
                <x-movie.show-movie-middle-right-card :movie="$movie" />

                {{--Bottom movie right card component--}}
                <x-movie.show-movie-bottom-right-card />

                {{--Movie pricing disclaimer component--}}
                <x-movie.show-movie-bottom-right-card-disclaimer />

            </div>
        </div>

    </div>
@endsection


