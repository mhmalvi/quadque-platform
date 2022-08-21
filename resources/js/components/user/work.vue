<template>
  <div class="work-content">
    <div class="work-content-body">
      <div class="first-section">
        <div class="first-section-title">
          This title doesn’t make any sense<br />
          but still, i’ve to write something.
        </div>
        <div class="profile">
          <div class="thumbnail">
            <img :src="'assets/img/thumbnail/thumbnail.png'" />
          </div>
          <div class="profile-name">
            <span>By Manish Yadav </span>
            <span style="color: #8f00ff"> in </span
            ><span style="color: #8b8b8b"> Random Category</span>
          </div>
          <div class="published-date">Sunday 19, Sept 2021</div>
        </div>
      </div>
      <div class="second-section">
        <div class="second-section-title">
          This title doesn’t make any sense<br />
          but still, i’ve to write something.
        </div>
      </div>
      <div class="third-section">
        <div class="third-section-title">
          This title doesn’t make any sense<br />
          but still, i’ve to write something.
        </div>
      </div>
      <div class="fourth-section">
        <div class="fourth-section-title">
          This title doesn’t make any sense<br />
          but still, i’ve to write something.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.work-content {
  height: 100%;
  width: 100%;
  position: relative;
}

.work-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 6.1rem;
  left: 0;
  bottom: 0;
  height: 80vh;
  box-shadow: 0px 0 15px 10px #b9afaf80;
  overflow: hidden;
}
.first-section {
  position: absolute;
  width: 65%;
  height: 100%;
  left: 0rem;
  top: 0rem;
  background-image: url(/images/work-1.png?05ae4eb8e9af6ae9fcf601df7fee24f9);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.first-section .first-section-title {
  position: absolute;
  left: 13.12%;
  top: 64.86%;
  font-weight: 600;
  font-size: 3rem;
  line-height: 4.8rem;
  color: #ffffff;
}
.first-section .profile {
  position: absolute;
  left: 13.12%;
  top: 79.58%;
}

.first-section .profile .thumbnail {
  float: left;
  margin-top: 1rem;
}
.first-section .profile .thumbnail img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
.first-section .profile .profile-name {
  font-weight: 400;
  font-size: 2.2rem;
  color: #ffffff;
  float: left;
  margin-left: 1.5rem;
  margin-top: 2rem;
}
.first-section .profile .published-date {
  clear: right;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 2.2rem;
  color: #ededed;
  margin-left: 9.5rem;
}
.second-section {
  position: absolute;
  width: 35%;
  height: 28%;
  right: 0rem;
  top: 0;
  background-image: url(/images/work-2.png?af3d0852f22ffa1510ec9b4245cb0f40);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.second-section .second-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
  margin-left: 1.5rem;
}
.third-section {
  position: absolute;
  width: 35%;
  height: 28%;
  right: 0;
  top: 14rem;
  background-image: url(/images/work-3.png?f915764480600505dcde54c4e0347322);
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
}
.third-section .third-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
  margin-left: 1.5rem;
}
.fourth-section {
  position: absolute;
  width: 35%;
  right: 0rem;
  top: 29rem;
  background-image: url(/images/work-4.png?0c7d16c21abea599b135324272d52c9a);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.fourth-section .fourth-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
}

@media only screen and (min-width: 1200px) {
  .second-section .second-section-title {
    margin-top: 6rem;
  }

  .third-section .third-section-title {
    margin-top: 6rem;
  }

  .fourth-section {
    height: 64%;
  }

  .fourth-section .fourth-section-title {
    margin-top: 18rem;
    margin-left: 1rem;
  }
  .first-section .profile .thumbnail {
    width: 8rem;
    height: 8rem;
  }
}
@media only screen and (min-width: 1300px) {
  .second-section .second-section-title {
    margin-top: 6rem;
  }
  .third-section .third-section-title {
    margin-top: 6rem;
  }

  .fourth-section .fourth-section-title {
    margin-top: 18rem;
    margin-left: 2rem;
  }
  .fourth-section {
    height: 62%;
  }
}
@media only screen and (min-width: 1400px) {
  .first-section {
  }
  /*  .second-section{
             height: 31%;
        }
        .third-section{
            height: 33%;
        } */
  .fourth-section {
    height: 50%;
  }
}
@media only screen and (min-width: 1400px) {
  .first-section {
  }
  /*   .second-section{
             height: 32%;
        }
        .third-section{
            height: 34%;
        } */
  .fourth-section {
    height: 45%;
  }
}
@media only screen and (min-width: 1700px) {
  .second-section {
    height: 29%;
  }
  .third-section {
    height: 32%;
  }
  .fourth-section {
    height: 55.4%;
    top: 30rem;
  }
  .second-section .second-section-title {
    margin-top: 10rem;
    margin-left: 8rem;
  }
  .third-section .third-section-title {
    margin-top: 10rem;
    margin-left: 8rem;
  }
  .fourth-section .fourth-section-title {
    margin-top: 30rem;
    margin-left: 8rem;
  }
}
</style>


