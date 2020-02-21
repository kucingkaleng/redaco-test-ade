<template>
  <div class="media">
    <img :src="`https://picsum.photos/id/${id+25}/200/200`" class="align-self-center mr-3 avatar">
    <div class="media-body">
      <h5 class="title mt-0">{{name}}</h5>
      <p>{{email}}</p>
    </div>
    <div class="media-action pl-3">
      <a href="#!" class="mt-3 d-block text-primary"><i class="fa fa-plus"></i></a>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: Number,
    name: String,
    email: String
  }
}
</script>