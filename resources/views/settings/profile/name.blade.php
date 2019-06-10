<h3 class="pb-2 border-bottom">{{ __('Profile') }}</h3>
<form action="{{ route('settings.update-profile') }}" method="POST">

    {{ csrf_field() }}
    <div class="form-group mt-4">
        <label for="name">{{ __('Name') }}</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
