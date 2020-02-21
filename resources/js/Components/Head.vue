<template>
  <div :class="['card card-head', {active:active}]">
    <div class="card-body">
      <h3 class="title">{{text}}</h3>

      <div :class="['liner', {active:active}]"></div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    active: Boolean,
    text: String
  }
}
</script>