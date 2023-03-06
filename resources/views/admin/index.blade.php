@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">

                <a
                    style="text-decoration: none;color: black"
                    href="{{ route('director.create') }}">
                    <span>First, publish a director</span>
                </a>

                <br>

                <a
                    style="text-decoration: none;color: black"
                    href="{{ route('movie.create') }}">
                    <span>Second, Add a movie post</span>
                </a>

            </div>
            <div class="col-md-8">
                <div class="mb-2"><span><i>Available Posts</i></span></div>
                <div style="padding: 12px" class="border-bottom border-top border-start border-end">

                    @php $counter = 1; @endphp
                    @foreach($movies as $movie)
                        <span>{{ $counter++ }}.</span>
                        <span>{{ $movie->name }}</span> -
                        <span>{!! Str::of(\Stevebauman\Purify\Facades\Purify::clean($movie->description))->limit(82) !!}</span>
                        <span style="float: right">

                            <a
                                style="text-decoration: none;color: blue;padding-right: 17px"
                                href="/admin/{{ $movie->slug }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a
                                style="text-decoration: none;color: green;padding-right: 17px"
                                href="/admin/{{ $movie->slug }}/edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form action="/admin/{{ $movie->id }}" method="Post">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Are you sure you want to delete this post')" style="color: red" class="btn"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </span>

                        <br><hr>
                    @endforeach

                    {{ $movies->links('pagination::bootstrap-5') }}

                </div>
            </div>
        </div>
    </div>
@endsection
