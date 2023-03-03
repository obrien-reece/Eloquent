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
                                <div class="form-group">
                                    <label for=""><small>Search by director's name, movie's name, studio's name and movie description</small></label>
                                    <input
                                        type="text"
                                        name="search"
                                        class="form-control mb-2"
                                        placeholder="Search for...">
                                </div>
                            </form>
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
                        {{ $movies->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    {{ $movies->links() }}--}}
@endsection
