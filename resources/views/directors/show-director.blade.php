@extends('layouts.app')

@section('title', $author->name )

@push('styles')

@endpush

@section('content')

    <div class="container">
        <x-home.jumbotron-header>
            MOVIES BY {{ $author->name }}
            <hr>
        </x-home.jumbotron-header>

        {{--Component to show the movie top navigation bar for Movie Display, Director and movie itself--}}
        <x-movie.show-movie-header>
            <i class="fa-solid fa-chevron-right chevron"></i>
            <span
                style="font-size: 17px;"
                class="{{ url()->current() ? 'text-muted' : '' }}">
                {{ $author->name }}
            </span>
        </x-movie.show-movie-header>

        <div class="row">
            <div class="col-md-2">
                <div style="padding: 4px">
                <img class="directors_image" src="/images/directors/nolan.jpg" style="border-radius: 5px" width="100%" alt="Director's image">
                <div class="mt-2">
                    <span>Name: {{ $author->name }} </span>
                    <br>
                    <span>Age: {{ $author->age }}</span>
                    <div style="text-align: justify;padding-top: 3px">
                        <span style="color: purple"><small> {{ $author->about }} </small></span>
                    </div>
                </div>
            </div>
            </div>

                @foreach($author->movies as $movie)
                    <x-movie.movie-card :movie="$movie" />
                @endforeach
        </div>
    </div>

@endsection
