<template>
  <div class="project-content">
    <div class="project-content-body">
      <div class="ping-row">
        <div class="ping"></div>
      </div>
      <div class="content-area">
        <div class="header">
          <h1>
            <span>start</span>
            <span style="margin-left: 30px">project</span>
          </h1>
        </div>
        <div class="mobile-num">
          <p>Call us +61405899496</p>
        </div>
        <div class="project-menu-list">
          <ul>
            <li><a href="#">UI & UX</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">App Development</a></li>
            <li><a href="#">AI & IOT Solutions</a></li>
            <li><a href="#">Digital Marketing</a></li>
          </ul>
        </div>
        <form>
          <div class="social-media">
            <div>
              <input type="checkbox" id="digital-marketing" />
              <label for="digital-marketing">Digital Marketing</label>
            </div>
            <div>
              <input type="checkbox" id="social-media-marketing" />
              <label for="social-media-marketing">Social Media Marketing</label>
            </div>
            <div>
              <input type="checkbox" id="specific-apps-marketing" />
              <label for="specific-apps-marketing"
                >Specific Apps Marketing</label
              >
            </div>
            <div>
              <input type="checkbox" id="specific-apps-marketing" />
              <label for="specific-apps-marketing"
                >Specific Apps Marketing</label
              >
            </div>
          </div>
          <div class="contact-form">
            <div>
              <input type="text" placeholder="name" />
            </div>
            <div>
              <input type="text" placeholder="phone" />
            </div>
            <div>
              <input type="text" placeholder="E-mail" />
            </div>
            <div>
              <input type="text" placeholder="How can we help you" />
            </div>
            <div>
              <button type="button">start project</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.project-content {
  height: 100%;
  width: 100%;
  position: relative;
}

.project-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 61px;
  left: 0;
  bottom: 0;
  height: 80vh;
  background: #000;
}

.ping {
  background: #fff;
  border-radius: 50%;
  width: 13px;
  height: 13px;
  -webkit-animation: load-41d6cbe0 1.5s ease-out infinite;
  animation: load-41d6cbe0 1.5s ease-out infinite;
  float: right;
  margin-top: 30px;
  margin-right: 30px;
  outline: 1px solid #fff;
  border: 5px solid #000;
}

@keyframes load {
  0% {
    outline: 0px solid #fff;
    border: 0px solid #000;
  }
  50% {
    outline: 1px solid #fff;
    border: 5px solid #000;
  }
  100% {
    outline: 0px solid #fff;
    border: 0px solid #000;
  }
}

.header h1 {
  position: absolute;
  width: 249px;
  height: 80px;
  left: 120px;
  top: 115px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  line-height: 40px;
  text-transform: uppercase;
  color: #ffffff;
}
.mobile-num p {
  position: absolute;
  width: 168px;
  height: 23px;
  right: 120px;
  top: 115px;
  font-style: normal;
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  /* identical to box height */

  color: #ffffff;
}

.project-menu-list {
  position: absolute;
  left: 120px;
  top: 255px;
  font-style: normal;
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;

  color: #ffffff;
}
.project-menu-list ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
}

.project-menu-list ul li a {
  display: block;
  color: #fff;
  text-decoration: none;
  font-style: normal;
  font-weight: 600;
  font-size: 15px;
  line-height: 22px;
  text-transform: capitalize;
  padding-bottom: 10px;
  margin-bottom: 12px;
  border-bottom-width: 0px;
  transition: color 0.5s, border-bottom-width 1s;
}
.project-menu-list ul li a:hover {
  border-bottom-width: 1px;
  border-bottom-style: solid;
  border-bottom-color: #8f00ff;

  color: #8f00ff;
}

.social-media {
  position: absolute;
  width: 180px;
  left: 380px;
  top: 305px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 13px;
  line-height: 20px;
  text-transform: capitalize;
  color: #ffffff;
}
.contact-form {
  position: absolute;
  width: 344px;
  right: 120px;
  top: 255px;
}
.contact-form input {
  width: 100%;
  background: #000;
  border: none;
  border-bottom: 1px solid #fff;
  margin-bottom: 20px;
  font-style: normal;
  font-weight: 275;
  font-size: 12px;
  line-height: 15px;
  letter-spacing: 0.04em;
  color: #ffffff;
  font-weight: 500;
  padding-bottom: 5px;
}
</style>


