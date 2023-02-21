@extends('layouts.master')

@prepend('styles')
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
@endprepend

@prepend('scripts')
    @vite(['resources/js/app.js'])
@endprepend
