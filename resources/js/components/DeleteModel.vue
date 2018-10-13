<template>
  <div>
    <a href="#" class="text-red" data-toggle="tooltip" title="Delete" v-on:click="showConfirmation"><i class="fa fa-trash"></i></a>
    <form :action="url" method="POST" id="form-delete">
      <input type="hidden" name="_method" value="DELETE">
      <input name="_token" type="hidden" :value="csrf">
    </form>
  </div>
</template>

<script>
  export default {
    props: {
      url: {
        type: String,
        required: true
      }
    },

    data(){
      return {
        csrf: null
      }
    },

    mounted(){
      this.csrf = document.head.querySelector('meta[name="csrf-token"]').content;
    },

    methods: {
      showConfirmation(){
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            $('#form-delete').submit();
          }
        });
      }
    }
  }
</script>
