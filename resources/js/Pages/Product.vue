<template>
    <div>
        <div class="custom_whole_bodysec">
        </div>
        <div class="container">
            <div class="fotos">
                <div class="row">
                    <div v-for="(item,key) in data" class="fotoCamara col-lg-4 col-md-6 col-12">
                    <div class="rectangulo">
                        <div class="imagenCamara">
                            <div v-if="!item.url"  class="image-upload">
                                <label :for="'file-input' + key">
                                    <img class="camara" src="public/fotos/camara.png">
                                </label>
                                <input  @change="onFileChange1($event,key)"  accept="image/*;capture=camera"  :id="'file-input' + key" type="file" />
                            </div>
                        </div>
                        <img class="imagenInterna" v-if="item.url" :src="item.url" />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            url: null,
            url1: null,
            data: [
                {
                    url: ''
                },
                {
                    url: ''
                },
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
                ,
                {
                    url: ''
                }
            ]
        }
    },
    methods: {
        onFileChange1(e,key) {

            const file = e.target.files[0];
            console.log("la key");
            console.log(key);
            this.data[key].url = URL.createObjectURL(file);
        },

    }
}
</script>

<style scoped>

.returnButton{
    background-color: gray;
}

.fotoCamara{
    margin: 10px auto 0 auto;

}
.fotos{
    display: flex;
    flex-wrap: wrap;
}
.imagenCamara{
    padding: 65px 0;
}

.rectangulo{
    border: 1px solid #000;
    height: 270px;
    width: 100%;
    border-radius: 25px;
    margin: 0 auto;
    justify-content: center;
    display: flex;

}

.image-upload>input {
    display: none;
}
.imagenInterna{
    object-fit: cover;
    border-radius: 25px;
    height: 100%;
    width:100%;
}
.camara{
    margin: 0 auto;
    width: 150px;
}
</style>
