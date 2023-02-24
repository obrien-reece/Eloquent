@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="banner">
                    <x-home.jumbotron-header>
                        MOVIES ON DISPLAY
                    </x-home.jumbotron-header>

                    <br><br>
                    <div class="row">
                        @foreach($movies as $movie)
                            <x-movie.movie-card :movie="$movie" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    {{ $movies->links() }}--}}
@endsection
