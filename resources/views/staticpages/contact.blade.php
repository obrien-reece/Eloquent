@extends('layouts.app')

@section('title', 'Contact us')

@section('content')

    <x-static-page.static-page>
        <div style="margin-top: 100px">
            <span class="display-5">Eloquent</span><span class="display-5 text-danger">Lutrix</span>
            <p style="font-size: 18px">
                You can effectively reach us via the following handles
            </p>

            {{--Component to display link hrefs for fontawesome icons--}}
            <span class="display-6" style="color: purple">
                <x-icons.font-awesome class="fa-twitter"/>
                <x-icons.font-awesome class="fa-instagram"/>
                <x-icons.font-awesome class="fa-facebook"/>
                <x-icons.font-awesome class="fa-whatsapp"/>
            </span>
        </div>
    </x-static-page.static-page>

@endsection
