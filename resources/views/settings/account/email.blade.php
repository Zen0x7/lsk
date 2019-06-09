<h3 class="pb-2 border-bottom">{{ __('Email Address') }}</h3>
<form action="{{ route('settings.account.update-email') }}" method="POST" novalidate>

    {{ csrf_field() }}

    <div class="form-group mt-2">
        <label for="current_email">{{ __('Current') }}</label>
        <input type="email"
               class="form-control"
               name="current_email"
               id="current_email"
               value="{{ auth()->user()->email }}"
               disabled>
    </div>

    <div class="form-group mt-2">
        <label for="new_email">{{ __('New') }}</label>
        <input type="email"
               class="form-control @if($errors->has('new_email')) is-invalid @endif"
               id="new_email"
               name="new_email"
               aria-describedby="newEmailHelp">
        @if($errors->has('new_email'))
            <div class="invalid-feedback">{{ $errors->first('new_email') }}</div>
        @endif
        <small id="newEmailHelp" class="form-text text-muted">{{ __('You must verify after') }}.</small>
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
