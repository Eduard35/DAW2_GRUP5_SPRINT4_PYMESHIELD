<!-- Codi de la pàgina -->
<template>
    <form method="post" id="form">
        <input type="file" name="file" id="" @change="handleFileUpload( $event )">
        <button type="button" @click="uploadImage()">Send</button>
    </form>
</template>

<!-- Estils per a esta vista -->
<style scoped>

</style>

<!-- Scripts per a la vista -->
<script>
    import axios from 'axios'

    export default {
        name: 'Form',
        data() {
            return {
                form: {
                    file: '',
                    id: 0
                }
            }
        },
        methods: {
            handleFileUpload(event) {
                this.form.file = event.target.files[0]
            },
            uploadImage() {
                let formData = new FormData()
                formData.append('file', this.form.file)

                axios.post('/imagenes', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(() => console.log('Èxit!'))

                
            }
        }
    }
</script>
