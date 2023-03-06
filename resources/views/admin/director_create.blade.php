@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <div class="container">

        <form enctype="multipart/form-data" action="/admin/director" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 m-auto">

                    <span class="display-6">Publish a director</span>
                    {{--Component for form inputs Director--}}
                    <x-form.input
                        value="{{ old('director_name') }}"
                        name="director_name"
                        placeholder="Enter director's name"
                        labelName="Director's name">

                        @error('director_name')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.input
                        value="{{ old('director_age') }}"
                        name="director_age"
                        type="number"
                        placeholder="Enter director's age"
                        labelName="Director age">

                        @error('director_age')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                    <x-form.text-area
                        rows="5"
                        name="director_about"
                        value="{!! \Stevebauman\Purify\Facades\Purify::clean(old('director_about')) !!}"
                        labelName="Director's Description">

                        @error('director_about')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.text-area>

                    <x-form.input
                        type="file"
                        name="director_image"
                        labelName="Director's Photo"
                        value="{{ old('director_image') }}"
                        placeholder="Select director photo">

                        @error('director_image')
                        <span style="color: red">{{ $message }}</span>
                        @enderror

                    </x-form.input>

                </div>
                <button class="mt-3 btn btn-success btn-block" type="submit">Publish Post</button>
            </div>
        </form>
    </div>
@endsection

