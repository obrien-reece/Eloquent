@extends('layouts.app')

@section('title', $author->name )

@section('content')

    <div class="container">
        <x-home.jumbotron-header>
            MOVIES BY {{ $author->name }}

            <x-slot:trigger>
                <form action="{{url()->current()}}" method="GET">
                    <div class="form-group">
                        <label for=""><small>Search by director's name, movie's name, studio's name and movie description</small></label>
                        {{--TODO--}}
                        <input
                            type="text"
                            readonly
                            name="search"
                            class="form-control mb-2"
                            placeholder="Currently not available">
                    </div>
                </form>
            </x-slot:trigger>

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
                <img class="directors_image" src="{{ asset('/storage/' . $author->image) }}" style="border-radius: 5px" width="100%" alt="Director's image">
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
