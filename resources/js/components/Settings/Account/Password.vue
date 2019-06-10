<script>
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {
        data() {
            return {
                errors: '',
                password: '',
                password_confirmation: '',
            }
        },
        computed: {
            passwordHasError: function () {
                return this.errors.password !== undefined;
            },
            passwordConfirmationHasError: function () {
                return this.errors.password_confirmation !== undefined;
            }
        },
        methods: {
            update() {
                let self = this;
                axios.post('/settings/account/update-password', {
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }).then((response) => {
                    Swal.fire({
                        type: 'success',
                        title: 'Great',
                        text: 'Your password was updated'
                    });
                    self.errors = {};
                }).catch((error) => {
                    Swal.fire({
                        type: 'error',
                        title: 'Whoops',
                        text: 'Something went wrong',
                        footer: 'See the errors'
                    });
                    self.errors = error.response.data.errors;
                });
            }
        }
    }
</script>
