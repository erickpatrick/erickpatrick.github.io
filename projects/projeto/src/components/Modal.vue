<template>
  <div class="modal" @click="close">
    <div class="modal__content" @click="close">
      <img :src="image" @click="close" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Modal',
  props: ['image'],
  methods: {
    close () {
      this.$emit('close:modal')
    }
  }
}
</script>

<style>
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, .9)
}

.modal__content {
  width: 100%;
  max-width: 1024px;
  height: 600px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.modal__content img {
  max-height: 100%;
}
</style>


