<template>
    <div>

        <div class="image-upload">
            <label for="file-input">
                <img class="camara" src="public/fotos/camara.png">
            </label>

            <input  @change="onFileChange"  accept="image/*;capture=camera" id="file-input" type="file" />
        </div>
        <div class="rectangulo">
            <img class="imagenInterna" v-if="url" :src="url" />
        </div>

    </div>
</template>


<script>
export default {
    name: "Index",
    data() {
        return {
            url: null,
        }
    },
    methods: {
        onFileChange(e) {
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
}
</script>

<style scoped>
    .rectangulo{
        border: 1px solid #000;
        height: 400px;
        width: 500px;
        border-radius: 25px;
        margin: 0 auto;
    }

    .image-upload>input {
        display: none;
    }
    .imagenInterna{

        width: 440px;
        margin: 0 auto;
    }
    .camara{
        margin: 0 auto;
        width: 150px;
    }
</style>
