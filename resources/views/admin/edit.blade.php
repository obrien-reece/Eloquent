@extends('layouts.app')

@section('title', 'Edit - ' . $movie->name)

@section('content')
    <div class="container">

        <form action="" method="POST">
            @method('PUT')
            @csrf
                <div class="row">
                    <div class="col-md-6">

                        <span class="display-6">Edit - Movie Section</span>
                        {{--Component for form inputs Movie--}}
                        <x-form.input
                            value="{{ $movie->name }}"
                            name="movie"
                            placeholder="Enter movie name"
                            labelName="Movie name" />

                        <x-form.input
                            value="{{ $movie->studio }}"
                            name="studio"
                            placeholder="Enter studio name"
                            labelName="Studio production name" />

                        <x-form.text-area
                            value="{!! \Stevebauman\Purify\Facades\Purify::clean($movie->description) !!}"
                            labelName="Movie Description" />

                        <x-form.input
                            type="file"
                            name="movie_thumbnail"
                            labelName="Movie Thumbnail"
                            value="{{ $movie->image }}"
                            placeholder="Select movie thumbnail" />

                        <x-form.input
                            labelName="Domestic Box Office Revenue"
                            value="{{ $movie->domestic_box_office }}"
                            placeholder="Input domestic box office generated revenue"
                            name="domestic_box_office" />

                        <x-form.input
                            labelName="International Box Office Revenue"
                            value="{{ $movie->international_box_office }}"
                            placeholder="Input international box office generated revenue"
                            name="international_box_office" />

                        <x-form.input
                            labelName="WorldWide Box Office Revenue"
                            value="{{ $movie->worldwide_box_office }}"
                            placeholder="Input worldwide box office generated revenue"
                            name="worldwide_box_office" />

                    </div>
                    <div class="col-md-6">

                    <span class="display-6">Edit - Director Section</span>
                    {{--Component for form inputs Director--}}
                    <x-form.input
                        value="{{ $movie->director->name }}"
                        name="director"
                        placeholder="Enter director's name"
                        labelName="Director's name" />

                    <x-form.input
                        value="{{ $movie->director->age }}"
                        name="age"
                        placeholder="Enter director's age"
                        labelName="Director age" />

                    <x-form.text-area
                        rows="5"
                        value="{!! \Stevebauman\Purify\Facades\Purify::clean($movie->director->about) !!}"
                        labelName="Director's Description" />

                    <x-form.input
                        type="file"
                        name="director_image"
                        labelName="Director's Photo"
                        value="{{ $movie->director->image }}"
                        placeholder="Select director photo" />

                </div>
                    <button class="mt-3 btn btn-success btn-block" type="submit">Update Database Collection</button>
                </div>
        </form>
    </div>
@endsection

