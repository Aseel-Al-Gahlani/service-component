<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="{{ App::getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Service | {{ env('APP_NAME') }}</title>
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
<script src="{{ asset("assets/js/alpine.min.js") }}"></script>
<style>
    .theme-dark body {
    @apply bg-gray-900 text-white;
}

    </style>
    <!-- inject:css -->
    {{-- <link rel="stylesheet" href="{{ asset('mekaeils-package/css/style.css') }}"> --}}
    <!-- //end inject -->
    {{-- <link rel="shortcut icon" href="../../images/favicon.png" /> --}}
    @vite('resources/css/app.css')
    @yield('header')

</head>

<body>
   <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }"
>

 <!-- Desktop sidebar -->
    @include('includes.desktop-sidebar')

    <!-- Mobile sidebar -->
    @include('includes.mobile-sidebar')

    <div class="flex flex-col flex-1 w-full">
        @include('includes.header')
        <main class="h-full overflow-y-auto">
  {{-- <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                <div class="col-lg-4 mx-auto"> --}}

                    {{-- @include('mekaeils-package.layouts.alert') --}}



                    {{-- <div class="auth-form-light text-left p-5 bg-gray-50"> --}}

                    <br>
                    <br>
                        <a href="{{ url('/') }}" class="brand-logo">
                        <img src="{{ config('service_component.logo_url') }}" class="w-1/3 h-44 m-auto object-fill">
                    </a>


