<div class="col-md-3">
    <div class="card">
        <div class="card-header">{{ __('Personal Settings') }}</div>

        <div class="list-group list-group-flush">
            <a href="{{ route('settings.profile') }}" class="list-group-item list-group-item-action @if(request()->is('settings/profile')) active @endif">
                {{ __('Profile') }}
            </a>
            <a href="{{ route('settings.account') }}" class="list-group-item list-group-item-action @if(request()->is('settings/account')) active @endif">
                {{ __('Account') }}
            </a>
            <a href="{{ route('settings.organizations') }}" class="list-group-item list-group-item-action @if(request()->is('settings/organizations')) active @endif">
                {{ __('Organizations') }}
            </a>
            <a href="{{ route('settings.notifications') }}" class="list-group-item list-group-item-action @if(request()->is('settings/notifications')) active @endif">
                {{ __('Notifications') }}
            </a>
            <a href="{{ route('settings.sessions') }}" class="list-group-item list-group-item-action @if(request()->is('settings/sessions')) active @endif">
                {{ __('Sessions') }}
            </a>
        </div>
    </div>
</div>
