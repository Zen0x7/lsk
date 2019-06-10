<settings-account-email inline-template>
    <div>
        <h3 class="pb-2 border-bottom">{{ __('Email Address') }}</h3>
        <form action="#" novalidate>
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
                       class="form-control"
                       id="new_email"
                       v-bind:class="{ 'is-invalid': emailHasError }"
                       name="new_email"
                       v-model="new_email"
                       aria-describedby="newEmailHelp">
                <div v-if="emailHasError"
                     class="invalid-feedback">
                    @{{ errors.new_email[0] }}
                </div>
            </div>
            <button type="button" class="btn btn-primary" @click="update">{{ __('Update') }}</button>
        </form>
    </div>
</settings-account-email>
