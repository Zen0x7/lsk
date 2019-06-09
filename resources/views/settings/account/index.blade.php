@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('settings.sidebar')
            <div class="col-md-9">
                @include('settings.account.email')
                @include('settings.account.password')
            </div>
        </div>
    </div>
@endsection
