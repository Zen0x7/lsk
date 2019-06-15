<script>
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {
        data() {
            return {
                name: '',
            }
        },
        methods: {
            store() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        axios.post('/api/organizations', {
                            name: this.name
                        }).then((response) => {
                            Swal.fire({
                                type: 'success',
                                title: 'Great',
                                text: 'The organization was created',
                                footer: '<a href="/organizations/' + response.data.id + '">View</a>'
                            });
                        }).catch(error => {
                            Swal.fire({
                                type: 'error',
                                title: 'Whoops',
                                text: 'Something went wrong',
                                footer: error.response.data.message,
                            });
                        });
                    }
                })
            }
        }
    }
</script>
