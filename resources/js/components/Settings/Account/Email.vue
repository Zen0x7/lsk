<script>
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {
        data() {
            return {
                errors: '',
                new_email: '',
            }
        },
        computed: {
            emailHasError: function () {
                return this.errors.new_email !== undefined;
            }
        },
        methods: {
            update() {
                let self = this;
                axios.post('/settings/account/update-email', {
                    new_email: this.new_email
                }).then((response) => {
                    Swal.fire({
                        type: 'success',
                        title: 'Great',
                        text: 'Your email was updated',
                        footer: 'You must verify'
                    });
                    document.getElementById('current_email').value = response.data.email;
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
