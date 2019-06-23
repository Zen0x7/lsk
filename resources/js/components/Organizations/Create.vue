<script>
    import { Api } from "../../services/api";
    import EventBus from "../../services/event-bus";
    import * as Swal from "sweetalert2";

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
                        Api.post('/api/organizations', {
                            name: this.name
                        }).then((response) => {
                            Swal.fire({
                                type: 'success',
                                title: 'Great',
                                text: 'The organization was created',
                                footer: '<a href="/organizations/' + response.id + '">View</a>'
                            });
                            EventBus.$emit('organization-created');
                        });
                    }
                })
            }
        }
    }
</script>
