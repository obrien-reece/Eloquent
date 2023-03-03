@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a style="text-decoration: none;color: black" href="#">
                    <span>Create New Post</span>
                </a>
            </div>
            <div class="col-md-8">
                <div style="padding: 12px" class="border-bottom border-top border-start border-end">
                    @php $counter = 1; @endphp
                </div>
            </div>
        </div>
    </div>
@endsection
