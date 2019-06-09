@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('settings.sidebar')
            <div class="col-md-9">
                <h3 class="pb-2 border-bottom">{{ __('Public profile') }}</h3>
                <form action="{{ route('settings.update-profile') }}" method="POST">

                    {{ csrf_field() }}
                    <div class="form-group mt-4">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
