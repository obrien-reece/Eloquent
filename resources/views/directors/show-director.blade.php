@extends('layouts.app')

@section('title', $director->name )

@push('styles')

@endpush

@section('content')

    <div class="container">

        {{--Component to show the movie top navigation bar for Movie Display, Director and movie itself--}}
        <x-movie.show-movie-header>
            <a
                style="font-size: 17px;"
                class="show-links"
                href="/directors/">
                Movie Directors
            </a>
            <i class="fa-solid fa-chevron-right chevron"></i>
            <span
                style="font-size: 17px;"
                class="{{ url()->current() ? 'text-muted' : '' }}">
                {{ $director->name }}
            </span>
        </x-movie.show-movie-header>

        <div class="row">
            <div class="col-md-2 border-start border-top border-bottom">
                <img class="mt-2" src="/images/banner.jpg" style="border-radius: 5px" width="100%" alt="Director's image">
                <div class="mt-2">
                    <span>Name: {{ $director->name }} </span>
                    <br>
                    <span>Age: {{ $director->age }}</span>
                    <div style="text-align: justify;">
                        <span><small> {{ $director->about }} </small></span>
                    </div>
                </div>
            </div>
            <div class="col-md-8"></div>
        </div>

    </div>

@endsection
