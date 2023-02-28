@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="banner">
                    <x-home.jumbotron-header>
                        MOVIES ON DISPLAY
                        <x-slot:trigger>
                            <form action="/movies" method="GET">
                        </x-slot:trigger>
                    </x-home.jumbotron-header>

                    <br><br>
                    <div class="row">
                        @forelse($movies as $movie)
                            <x-movie.movie-card :movie="$movie" />
                        @empty
                            <div class="text-center">
                                <span style="font-size: 20px">No movies found from the search parameter specified</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    {{ $movies->links() }}--}}
@endsection
