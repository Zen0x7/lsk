<settings-account-password inline-template>
    <div>
        <h3 class="pb-2 border-bottom">{{ __('Password') }}</h3>
        <form action="#" novalidate>
            <div class="form-group mt-2">
                <label for="password">{{ __('Password') }}</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       v-bind:class="{ 'is-invalid': passwordHasError }"
                       v-model="password"
                       name="password">
                <div v-if="passwordHasError"
                     class="invalid-feedback">
                    @{{ errors.password[0] }}
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input type="password"
                       class="form-control"
                       id="password_confirmation"
                       v-bind:class="{ 'is-invalid': passwordConfirmationHasError }"
                       v-model="password_confirmation"
                       name="password_confirmation">
                <div v-if="passwordConfirmationHasError"
                     class="invalid-feedback">
                    @{{ errors.password_confirmation[0] }}
                </div>
            </div>

            <button type="button" class="btn btn-primary" @click="update">{{ __('Update') }}</button>
        </form>
    </div>
</settings-account-password>
