@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('settings.sidebar')
            <div class="col-md-9">
                <h3 class="pb-2 border-bottom">{{ __('Organizations') }}</h3>
            </div>
        </div>
    </div>
@endsection
