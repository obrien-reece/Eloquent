@extends('layouts.master')

@prepend('styles')
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .app_name:hover {
            color: red;
        }
        span {
        font-family: 'Luxurious Roman', cursive;
        }
    </style>
@endprepend

@prepend('scripts')
    @vite(['resources/js/app.js'])
@endprepend
