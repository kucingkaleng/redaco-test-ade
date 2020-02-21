<template>
  <LayoutDashboard title="Discovery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="appbar my-5">
            <h5 class="brand d-inline">Discovery</h5>
            <span><i class="fa fa-search float-right"></i></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 my-2" v-for="(x, i) in users" :key="i">
          <DiscoveryItem :id="i" :name="x.name" :email="x.email" />
        </div>
      </div>
    </div>
  </LayoutDashboard>
</template>

<script>
import LayoutDashboard from './LayoutDashboard'
import DiscoveryItem from '../Components/DiscoveryItem'

export default {
  components: {
    LayoutDashboard,
    DiscoveryItem
  },
  props: {
    user: Object,
    users: Array
  },
}
</script>