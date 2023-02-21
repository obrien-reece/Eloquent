@extends('layouts.master')

@prepend('styles')
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
    <style>
        .app_name:hover {
            color: red;
        }
    </style>
@endprepend

@prepend('scripts')
    @vite(['resources/js/app.js'])
@endprepend
