<script>
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {
        data() {
            return {
                organizations: [],
            }
        },
        mounted() {
            this.fetch();
        },
        methods: {
            fetch() {
                let self = this;
                axios.get('/settings/organizations').then((response) => {
                    self.organizations = response.data;
                }).catch(error => {
                    Swal.fire({
                        type: 'error',
                        title: 'Whoops',
                        text: 'Something went wrong',
                        footer: error.response.data.message,
                    });
                });
            }
        }
    }
</script>
