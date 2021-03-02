<template>
  <div class="container my-5 py-5 z-depth-1">
         <div v-if="show" class="alert alert-success w-50 m-auto" role="alert">
            <button type="button" class="btn-close float-right" @click="close"></button>
           <p class="ml-3">Vos informations sont modifiés!</p>
         </div>
         <div v-if="errors" class="alert alert-danger w-50 m-auto" role="alert">
            <button type="button" class="btn-close float-right" @click="closeerrors"></button>
           <p class="ml-3">{{ message }}</p>
         </div>
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <p class="h4 mb-4">Mes Informations</p>
            <input type="text" v-model="nom" class="form-control mb-4" placeholder="Name">
            <input type="email" v-model="mail" class="form-control mb-4" placeholder="E-mail">
            <button class="btn btn-info btn-block" @click="update" type="submit">Modifier</button>
        </div>
      </div>
    </section>
  </div>
</template>


<script>
export default {
  methods: {
    close () { 
     this.show = false
    },
   closeerrors () { 
     this.errors = false
    },
     update(){
        this.errors = false
        this.show = false
        axios.post('information',{
           'email' : this.mail,
           'name' : this.nom,
        }).then(res => {
           this.show = true
        }).catch(err => {
           this.errors = true 
           this.message = err.response.data.errors.name[0]
        })
     }
  },
  data () {
    return {
      show: false,
      errors: false,
      message: '',
       mail: this.email,
       nom: this.name
    }
  },
  props:['email', 'name'],
   
}
</script>
