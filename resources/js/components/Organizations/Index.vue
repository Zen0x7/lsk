<script>
    import { Api } from '../../services/api';
    import EventBus from "../../services/event-bus";

    export default {
        data() {
            return {
                organizations: [],
            }
        },
        mounted() {
            let self = this;
            self.fetch();
            EventBus.$on('organization-created', function(){
                self.fetch();
            })
        },
        methods: {
            async fetch() {
                this.organizations = await Api.get('/api/organizations');
            }
        }
    }
</script>
