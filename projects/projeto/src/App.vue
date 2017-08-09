<template>
  <div id="app">
    <Timeline/>
  </div>
</template>

<script>
import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import inViewportDirective from 'vue-in-viewport-directive'
import Timeline from './components/Timeline'

Vue.use(Vuex)
Vue.directive('in-viewport', inViewportDirective)

const store = new Vuex.Store({
  state: {
    moments: []
  },

  mutations: {
    update (state, data) {
      state.moments = data
    }
  },

  actions: {
    getMoments ({commit}) {
      axios.get('static/data.json')
        .then(function (response) {
          commit('update', response.data.moments)
        })
    }
  }
})

export default {
  name: 'app',
  store,
  components: {
    Timeline
  },
  mounted () {
    this.$store.dispatch('getMoments')
  }
}
</script>
