<template>
  <div>
    <header>
      <h1>Timeline dos nossos {{namoro}} anos
        <small>São {{numberOfMoments}} momentos dessa longa trajetória</small>
      </h1>
    </header>
    <section class="cd-container cd-container--explanation">
      <p>Vários e vários dos nossos momentos, bons e ruins, catalogados aqui. Vários também não estão presentes mas, claro, fazem parte dessa história,
        <em>nossa</em> história.</p>
      <p>Quantos mais virão? Não sei, espero que muitos, de preferência bons...</p>
    </section>
    <section id="cd-timeline" class="cd-container">
      <TimelineBlock @open:modal="open" v-for="moment in moments" :key="moment.day" :moment="moment" />
    </section>
    <transition name="fade">
      <modal v-show="modalOpen" @close:modal="close" :image="modalImage" />
    </transition>
  </div>
</template>

<script>
import TimelineBlock from './TimelineBlock'
import Modal from './Modal'

export default {
  name: 'Timeline',
  components: {
    TimelineBlock,
    Modal
  },
  data () {
    return {
      namoro: 6,
      casado: 5,
      modalImage: '',
      modalOpen: false
    }
  },
  computed: {
    moments () {
      return this.$store.state.moments
    },
    numberOfMoments () {
      return this.moments.length
    }
  },
  methods: {
    open (path) {
      this.modalOpen = true
      this.modalImage = path
    },

    close () {
      this.modalOpen = false
    }
  }
}
</script>

<style scoped>
h1 small {
  display: block;
  font-size: 18px;
}

.cd-container--explanation {
  margin: 1rem auto;
  padding: 1rem 3rem;
  background: white;
}

.cd-container--explanation p {
  font-size: 1.5rem;
  line-height: 1.25;
  color: black;
  padding: 1rem 0;
}

.cd-container--explanation em {
  font-style: italic;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0
}
</style>
