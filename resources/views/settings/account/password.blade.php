<h3 class="pb-2 mt-5 border-bottom">{{ __('Password') }}</h3>
<form action="{{ route('settings.account.update-password') }}" method="POST">

    {{ csrf_field() }}

    <div class="form-group mt-2">
        <label for="password">{{ __('Password') }}</label>
        <input type="password"
               class="form-control @if($errors->has('password')) is-invalid @endif"
               id="password"
               name="password">

        @if($errors->has('password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="form-group mt-2">
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input type="password"
               class="form-control @if($errors->has('password_confirmation')) is-invalid @endif"
               id="password_confirmation"
               name="password_confirmation">
        @if($errors->has('password_confirmation'))
            <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
