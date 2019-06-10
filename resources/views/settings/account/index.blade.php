@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('settings.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        @include('settings.account.email')
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        @include('settings.account.password')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
