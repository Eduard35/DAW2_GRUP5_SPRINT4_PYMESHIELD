<template>
    <form method="post" id="form">
        <input type="file" name="files[]" id="" @change="handleFileUpload( $event )" multiple>
        <button type="button" @click="uploadImage()">Send</button>
    </form>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'Form',
        data() {
            return {
                form: {
                    files: []
                }
            }
        },
        methods: {
            handleFileUpload(event) {
                this.form.files = event.target.files
            },
            uploadImage() {
                let formData = new FormData()
                for (let i = 0; i < this.form.files.length; i++) {
                    formData.append('files[]', this.form.files[i])
                }
                console.log(formData)
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
