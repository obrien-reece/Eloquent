@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <div class="container">

        <form enctype="multipart/form-data" action="/admin/actor" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 m-auto">

                    <span class="display-6">Insert Actor's Profile</span>

                    <label for="actor">Choose a movie the actor stars in</label>
                    <select name="movie_id" class="form-control" id="">
                        @foreach($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                        @endforeach
                    </select>

                    {{--Component for form inputs Director--}}
                    <x-form.input
                        value="{{ old('actors_name') }}"
                        name="actors_name"
                        placeholder="Enter actors's name"
                        labelName="Actor's name">

                        @error('actors_name')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.input
                        value="{{ old('actors_age') }}"
                        name="actors_age"
                        type="number"
                        placeholder="Enter actors's age"
                        labelName="Director age">

                        @error('actors_age')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.text-area
                        rows="5"
                        name="actors_about"
                        value="{!! \Stevebauman\Purify\Facades\Purify::clean(old('actors_about')) !!}"
                        labelName="Actor's Description">

                        @error('actors_about')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.text-area>

                </div>
                <button class="mt-3 btn btn-success btn-block" type="submit">Insert Actor Profile</button>
            </div>
        </form>
    </div>
@endsection

