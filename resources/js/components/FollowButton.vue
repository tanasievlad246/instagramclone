<template>
    <div>
        <button class="btn btn-primary ml-3" @click="followUser">{{ buttonText }}</button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],
        data(){
            return {
                status: this.follows
            }
        },
        methods: {
            followUser() {
                axios.post(`/follow/${this.userId}`)
                    .then(
                        response => {
                            this.status = !this.status;
                            console.log(response.data)
                    })
                    .catch(error => {
                        if (error.response.status == 401) {
                            window.location = '/login';
                        }
                    })
            }
        },

        computed: {
            buttonText() {
                return this.status ? "Unfollow" : "Follow";
            }
        }
    }
</script>
