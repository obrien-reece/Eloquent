@extends('layouts.app')

@section('title', 'Movie'. ' - ' . $movie->name)

@section('content')
    <div class="container">

        {{--Component to show the movie top navigation bar for Movie Display, Director and movie itself--}}
        <x-movie.show-movie-header :movie="$movie" >
            <i class="fa-solid fa-chevron-right chevron"></i>
            <a
                style="font-size: 17px;"
                class="show-links"
                href="/director/{{ $movie->director->slug }}">
                {{ $movie->director->name }}
            </a>
            <i class="fa-solid fa-chevron-right"></i>
            <span
                style="font-size: 17px;"
                class="{{ url()->current() ? 'text-muted' : '' }}">
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

                {{--Middle movie right card--}}
                    <div class="mt-4" style="background-color: white;padding: 24px;border-radius: 4px">
                        <strong><span>Breakthrough Actors</span></strong>
                        <ul>
                            @foreach($movie->actors as $actor)
                                <a style="text-decoration: none;color: black" href="#">
                                    <li>{{ $actor->name }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>

                {{--Bottom movie right card component--}}
                <x-movie.show-movie-bottom-right-card />

                {{--Movie pricing disclaimer component--}}
                <x-movie.show-movie-bottom-right-card-disclaimer />

            </div>
        </div>

    </div>
@endsection



