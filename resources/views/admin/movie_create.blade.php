@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <div class="container">

        <form enctype="multipart/form-data" action="/admin/movie" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 m-auto">

                    <span class="display-6">Create - Movie Section</span><br>

                    <label for="director">Choose a director for the movie</label>
                    <select name="director_id" class="form-control" id="">
                        @foreach($directors as $director)
                            <option value="{{ $director->id }}">{{ $director->name }}</option>
                        @endforeach
                    </select>

                    {{--Component for form inputs Movie--}}
                    <x-form.input
                        value="{{ old('movie_name') }}"
                        name="movie_name"
                        placeholder="Enter movie name"
                        labelName="Movie name">

                        @error('movie_name')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.input
                        value="{{ old('movie_studio') }}"
                        name="movie_studio"
                        placeholder="Enter studio name"
                        labelName="Studio production name">

                        @error('movie_studio')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.text-area
                        name="movie_description"
                        value="{!! \Stevebauman\Purify\Facades\Purify::clean(old('movie_description')) !!}"
                        labelName="Movie Description">

                        @error('movie_description')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.text-area>

                    <x-form.input
                        type="file"
                        name="movie_thumbnail"
                        labelName="Movie Thumbnail"
                        value="{{ old('movie_thumbnail') }}"
                        placeholder="Select movie thumbnail">

                        @error('movie_thumbnail')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.input
                        labelName="Domestic Box Office Revenue"
                        type="number"
                        value="{{ old('movie_domestic_box_office') }}"
                        placeholder="Input domestic box office generated revenue"
                        name="movie_domestic_box_office">

                        @error('movie_domestic_box_office')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.input
                        labelName="International Box Office Revenue"
                        value="{{ old('movie_international_box_office') }}"
                        type="number"
                        placeholder="Input international box office generated revenue"
                        name="movie_international_box_office">

                        @error('movie_international_box_office')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                </div>
                <button class="mt-3 btn btn-success btn-block" type="submit">Create Movie Post</button>
            </div>
        </form>
    </div>
@endsection

