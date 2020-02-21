<template>
  <layout title="Welcome">
    <div class="container">
      <div class="head-container">
        <div class="d-inline-flex">
          <Head v-for="(x, i) in head" :key="i" :active="i == 0 ? true : false" :text="x" />
        </div>
      </div>
      
      <div class="form-container my-5 d-flex justify-content-center">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group mb-1">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <a href="#!" class="d-block forget mb-5">Forget Your Password?</a>

            <inertia-link href="/discovery" class="btn btn-primary-gradient mb-3">Start</inertia-link>
            <a href="#!" class="btn">Register</a>
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from './Layout'
import Head from '../Components/Head'

export default {
  components: {
    Layout,
    Head
  },
  props: {
    user: Object,
    head: Array
  },
}
</script>