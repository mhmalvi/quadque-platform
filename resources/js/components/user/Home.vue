<template>
  <div class="main-content">
    <video class="background-video" autoplay loop muted>
      <source :src="'assets/bg-video/header-video-3.mp4'" type="video/mp4" />
    </video>
    <div class="video-text">
      <v-typical
        class="blink"
        :steps="['We Build Awesome Creation', 500]"
        :loop="Infinity"
        :wrapper="'h1'"
      ></v-typical>
      <!--     <h1>We Build Awesome Creation</h1> -->
      <a href="javascript:void(0)"
        >contact us<img :src="'assets/img/contact-icon.png'"
      /></a>
    </div>
  </div>
</template>

<script>
import VTypical from "vue-typical";
export default {
  components: {
    VTypical,
  },
  data() {
    return {};
  },
  mounted() {},
};
</script>
<style scoped>
.video-text {
  position: absolute;
  top: 40rem;
  right: 32rem;
}
.video-text h1 {
  font-style: normal;
  font-weight: 700;
  font-size: 4.8rem;
  line-height: 4.5rem;
  text-transform: capitalize;
  color: #ffffff;
  width: 10rem;
}
.video-text a {
  font-weight: 500;
  font-size: 1.4rem;
  line-height: 2.1rem;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
}
.video-text a img {
  vertical-align: middle;
  margin-left: 1rem;
  width: 1.5rem;
  height: 1.5rem;
}
</style>


