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
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
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
                        @forelse($movies as $movie)
                            <x-movie.movie-card :movie="$movie" />
                        @empty
                            <div class="text-center">
                                <span>No movies in the catalogue to display, please come back later</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
