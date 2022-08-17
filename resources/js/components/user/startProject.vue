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
            <span style="margin-left: 3rem">project</span>
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
              <input type="checkbox" id="ads" />
              <label for="ads">Google ADs</label>
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
            <div class="project-btn">
              <button type="button">start project</button>
            </div>
          </div>
        </form>
        <div class="spaceman"></div>
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
  top: 6.1rem;
  left: 0;
  bottom: 0;
  height: 80vh;
  background: #000;
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

@keyframes load {
  0% {
    outline: 0rem solid #fff;
    border: 0rem solid #000;
  }
  50% {
    outline: 0.1rem solid #fff;
    border: 0.5rem solid #000;
  }
  100% {
    outline: 0rem solid #fff;
    border: 0rem solid #000;
  }
}

.header h1 {
  position: absolute;
  width: 24.9rem;
  height: 8rem;
  left: 10rem;
  top: 8.5rem;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 4.8rem;
  line-height: 4rem;
  text-transform: uppercase;
  color: #ffffff;
}
.mobile-num p {
  position: absolute;
  width: 16.8rem;
  height: 2.3rem;
  right: 10rem;
  top: 8.5rem;
  font-style: normal;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 2.2rem;
  /* identical to box height */

  color: #ffffff;
}

.project-menu-list {
  position: absolute;
  left: 10rem;
  top: 24.5rem;
  font-style: normal;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 2.2rem;

  color: #ffffff;
}
.project-menu-list ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20rem;
}

.project-menu-list ul li a {
  display: block;
  color: #fff;
  text-decoration: none;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 2.2rem;
  text-transform: capitalize;
  padding-bottom: 1rem;
  margin-bottom: 1.2rem;
  border-bottom-width: 0rem;
  transition: color 0.5s, border-bottom-width 1s;
}
.project-menu-list ul li a:hover {
  border-bottom-width: 0.1rem;
  border-bottom-style: solid;
  border-bottom-color: #8f00ff;

  color: #8f00ff;
}

.social-media {
  position: absolute;
  width: 22rem;
  left: 32rem;
  top: 28.5rem;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 2.5rem;
  text-transform: capitalize;
  color: #ffffff;
}
.contact-form {
  position: absolute;
  width: 30rem;
  right: 10rem;
  top: 24.5rem;
}
.contact-form input {
  width: 100%;
  background: #000;
  border: none;
  border-bottom: 0.1rem solid #fff;
  margin-bottom: 2rem;
  font-style: normal;
  font-weight: 275;
  font-size: 1.2rem;
  line-height: 1.5rem;
  letter-spacing: 0.04em;
  color: #ffffff;
  font-weight: 500;
  padding-bottom: 0.5rem;
  outline: none;
}
input[type="text"]:focus {
  border: none;
  border-bottom: 0.1rem solid #fff;
}
.contact-form .project-btn {
  width: 100%;
  margin-top: 2rem;
  text-align: center;
}

.contact-form .project-btn button {
  width: 25.2rem;
  height: 4.6rem;
  background: #8f00ff;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.8rem;
  /* identical to box height, or 120% */

  letter-spacing: 0.04em;
  text-transform: capitalize;

  color: #ffffff;
}

input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  cursor: pointer;
}
input[type="checkbox"] + label::before {
  content: "";
  height: 1.5rem;
  width: 1.5rem;
  background: #000;
  outline: 0.1rem solid #fff;
  cursor: pointer;
  display: inline-block;
  margin-left: 0rem;
  margin-right: 0.8rem;
}
input[type="checkbox"]:checked + label::before {
  outline: 0.1rem solid #8f00ff;
  color: #8f00ff;
}
input[type="checkbox"]:checked + label {
  color: #8f00ff;
}
input[type="checkbox"]:not(:checked) + label::before {
  content: "";
  height: 1.5rem;
  width: 1.5rem;
  background: #000;
  outline: 0.1rem solid #fff;
  cursor: pointer;
  display: inline-block;
  margin-left: 0rem;
  margin-right: 0.8rem;
  transition: all 0.5s ease;
}

.spaceman {
  position: absolute;
  width: 22.1rem;
  height: 33.4rem;
  left: 30rem;

  background: url("../../../img/spaceman.png");
  background-repeat: no-repeat;
  transform: rotate(0.09deg);
  animation: floating 60s ease-in-out infinite;
}

@keyframes floating {
  0% {
    transform: translate(0%, 0%);
  }

  50% {
    transform: translate(-150%, -100%);
  }
  100% {
    transform: translate(0%, 0%);
  }
}

@media only screen and (min-width: 1200px) {
  .spaceman {
    top: 30rem;
  }
}
@media only screen and (min-width: 1300px) {
  .spaceman {
    top: 35rem;
  }
}
@media only screen and (min-width: 1400px) {
  .spaceman {
    top: 48rem;
  }
}
</style>


