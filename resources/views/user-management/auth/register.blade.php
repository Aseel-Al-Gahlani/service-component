@extends('user-management.auth.master')

@section('header')
    @parent

@endsection

@section('content')
@php
    $buttons = [
        ['color' => 'blue', 'outline' => false, 'rounded' => false, 'label' => 'Blue Button'],
        ['color' => 'green', 'outline' => false, 'rounded' => true, 'label' => 'Green Rounded'],
        ['color' => 'gray', 'outline' => true, 'rounded' => false, 'label' => 'Gray Outline'],
        ['color' => 'red', 'outline' => false, 'rounded' => true, 'label' => 'Red Rounded'],
        ['color' => 'yellow', 'outline' => true, 'rounded' => true, 'label' => 'Yellow Outline Rounded'],
        ['color' => 'black', 'outline' => false, 'rounded' => false, 'label' => 'Black Button'],
    ];
@endphp

<x-button-group-component :buttons="$buttons" />

    <h4>{{ __('trans.new_here') }}</h4>
    <h6 class="font-weight-light">
        {{ __('trans.sign_up_title') }}
    </h6>
{{-- action="{{ route('auth.user.register') }}" --}}
    <form class="pt-3" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="first_name" class="form-control form-control-lg bg" placeholder="{{ __('trans.placeholders.first_name') }}" required>
        </div>

        <div class="form-group">
            <input type="text" name="last_name" class="form-control form-control-lg" placeholder="{{ __('trans.placeholders.last_name') }}" required>
        </div>

        <div class="form-group">
            {{-- config('service-component.auth.username') --}}
            <input type="{{ ( config('service_component.auth.username') == 'mobile' ) ? 'text' : 'email' }}" name="{{ config('service-component.auth.username') }}" class="form-control form-control-lg" placeholder="{{ __('trans.placeholders.username') }}" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="{{ __('trans.placeholders.password') }}" required>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="{{ __('trans.placeholders.confirm_password') }}" required>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                {{ __('trans.sign_up') }}
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            {{ __('trans.have_account') }}
            <a href="{{ route('login') }}" class="text-primary">{{ __('trans.login') }}</a>
        </div>
    </form>
@endsection

@section('footer')
    @parent

@endsection
