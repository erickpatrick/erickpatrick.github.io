<template>
  <div class="cd-timeline-block" v-in-viewport="{top: -200, bottom: -250}">
    <div class="cd-timeline-img cd-picture">
      <img :src="icon" alt="Picture">
    </div>
  
    <div class="cd-timeline-content">
      <span class="cd-date">{{moment.day}}</span>
      <h2>{{moment.place}}</h2>
      <p>{{moment.description}}</p>
      <img v-if="moment.image" @click="open" :src="pathAsset('image')" width="100%" height="auto" :alt="moment.description" />
      <iframe v-if="moment.youtube" type="text/html" width="100%" height="auto" :src="ytEmbedUrl(moment.youtube)" frameborder="0"></iframe>
      <video v-if="moment.video" :src="pathAsset('video')" width="100%" height="auto" controls />
    </div>
  </div>
</template>

<script>
const ASSETS_PATH = './static/images/'

export default {
  name: 'TimelineBlock',
  props: ['moment'],
  data () {
    return {
      icons: {
        location: 'static/svg/location.svg',
        video: 'static/svg/video.svg',
        youtube: 'static/svg/youtube.svg',
        image: 'static/svg/image.svg'
      }
    }
  },
  methods: {
    pathAsset (prop) {
      return ASSETS_PATH + this.moment[prop]
    },
    ytEmbedUrl (videoId) {
      return `https://www.youtube.com/embed/${videoId}?autoplay=0`
    },
    open () {
      this.$emit('open:modal', this.pathAsset('image'))
    }
  },
  computed: {
    icon () {
      const entry = Object.keys(this.moment).filter(
        key => Object.keys(this.icons).includes(key)
      )

      return entry.length === 1 ? this.icons[entry.pop()] : this.icons['location']
    }
  }
}
</script>

<style scoped>
.above-viewport,
.below-viewport {
  opacity: 0;
  transition: opacity .5s
}

.in-viewport {
  opacity: 1;
  transition: opacity .5s
}
</style>
