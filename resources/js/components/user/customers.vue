<template>
  <div class="customer-content">
    <div class="customer-content-body">
      <div class="ping-row">
        <div class="ping"></div>
      </div>
      <div class="customers-text">
        <h1>More then valuable <span class="cus-num">100</span> coustomers</h1>
        <p>
          We create premium web design, though and user-friendly that solve
          business problems We create premium web design.
        </p>
      </div>
      <div class="customers-icon-group-one">
        <div class="icon-box">
          <img :src="'assets/img/microsoft.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/tesla.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/microsoft.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/tesla.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/microsoft.png'" />
        </div>
      </div>
      <div class="customers-icon-group-two">
        <div class="icon-box">
          <img :src="'assets/img/spotify.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/google.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/spotify.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/google.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/spotify.png'" />
        </div>
      </div>
      <div class="customers-icon-group-three">
        <div class="icon-box">
          <img :src="'assets/img/yassir.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/tiktok.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/yassir.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/tiktok.png'" />
        </div>
        <div class="icon-box">
          <img :src="'assets/img/yassir.png'" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.customer-content {
  height: 100%;
  width: 100%;
  position: relative;
}

.customer-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 6.1rem;
  left: 0;
  bottom: 0;
  height: 80vh;
  background: #000;
  overflow: hidden;
}
.ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load-41d6cbe0 1.5s ease-out infinite;
  animation: load-41d6cbe0 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
}
.customers-text {
  position: absolute;
  width: 25.2rem;
  height: 18.2rem;
  left: 15.2rem;
  top: 26.9rem;
}
.customers-text h1 {
  font-weight: 600;
  font-size: 2.4rem;
  line-height: 4rem;
  text-transform: capitalize;
  color: #ffffff;
}
.customers-text .cus-num {
  font-weight: 700;
  font-size: 4rem;
  line-height: 4rem;
  text-transform: capitalize;
  color: #8f00ff;
}
.customers-text p {
  font-weight: 300;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
}
.customers-icon-group-one {
  position: absolute;
  left: 51.9rem;
  top: 0.55rem;
}
.customers-icon-group-two {
  position: absolute;
  left: 70.4rem;
  top: 2rem;
}
.customers-icon-group-three {
  position: absolute;
  left: 88.8rem;
  top: 0.55rem;
}
.icon-box {
  width: 16rem;
  height: 10rem;
  background: rgba(143, 0, 255, 0.15);
  margin-bottom: 3.5rem;
}
.icon-box img {
  transform: translate(1.5rem, 3.5rem);
  width: 13.7rem;
  height: 2.9rem;
}
@media only screen and (min-width: 1200px) {
  .customers-text {
    left: 8.2rem;
  }
  .customers-icon-group-one {
    left: 38.9rem;
  }
  .icon-box {
    height: 10rem;
    margin-bottom: 1.5rem;
  }
  .customers-icon-group-two {
    left: 57.4rem;
  }
  .customers-icon-group-three {
    left: 75.8rem;
  }
}
@media only screen and (min-width: 1700px) {
  .customers-text {
    left: 16.2rem;
  }
  .customers-icon-group-one {
    left: 47.9rem;
  }
  .icon-box {
    height: 10.5rem;
    margin-bottom: 3.5rem;
  }
  .customers-icon-group-two {
    left: 67.4rem;
  }
  .customers-icon-group-three {
    left: 86.8rem;
  }
}
</style>


