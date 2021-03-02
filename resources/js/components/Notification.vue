<template>
   <div v-if="show" :class="'alert alert-'+type+' w-50 m-auto'" role="alert">
      <button type="button" @click="close" class="btn-close float-right"></button>
        {{ message }}
   </div>
</template>


<script>
export default {
  data () {
    return {
       show: this.showvue,
    }
  },
  methods: {
     close(){
        this.show = false
     }
  },
  props: ['showvue','type', 'message'],
   
}
</script>
