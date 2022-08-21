<template>
  <div class="case-study-content">
    <div class="case-study-content-body">
      <div class="ping-row">
        <div class="ping"></div>
      </div>
      <div class="case-study-text">
            <h1>Case study</h1>
            <p>We create premium web design, though and user</p>
      </div>
      <div class="case-study-box dji">
        <div class="case-study-img"> 
            <img src="assets/img/dji.png"/>
        </div>
        <div class="case-study-text">
            DJI international
        </div>  
      </div>
      <div class="case-study-box tube">
        <div class="case-study-img"> 
            <img src="assets/img/tube.png"/>
        </div>
        <div class="case-study-text">
           Tube
        </div>  
      </div>
      <div class="case-study-box boom">
        <div class="case-study-img"> 
            <img src="assets/img/boom.png"/>
        </div>
        <div class="case-study-text">
          Boom
        </div>  
      </div>
      <div class="case-study-box s">
        <div class="case-study-img"> 
            <img src="assets/img/s.png"/>
        </div>
        <div class="case-study-text">
           DJI international
        </div>  
      </div>
       <div class="case-study-box fedex">
        <div class="case-study-img"> 
            <img src="assets/img/fedex.png"/>
        </div>
        <div class="case-study-text">
         DJI international
        </div>  
      </div>
      <div class="case-study-box freelancing">
        <div class="case-study-img"> 
            <img src="assets/img/freelancing.png"/>
        </div>
        <div class="case-study-text">
          DJI international
        </div>  
      </div>

      <div class="more-company">

      </div>
     
      
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.case-study-content {
  height: 100%;
  width: 100%;
  position: relative;
}

.case-study-content-body {
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

.case-study-text h1{

    position: absolute;
    width: 25rem;
    height: 4rem;
    left: 16.8rem;
    top: 14rem;
    font-weight: 600;
    font-size: 3.2rem;
    line-height: 4rem;
    text-transform: capitalize;
    color: #FFFFFF;
}
.case-study-text p{

   position: absolute;
    width: 20.4rem;
    height: 3.6rem;
    font-weight: 300;
    font-size: 1.5rem;
    line-height: 1.8rem;
    letter-spacing: 0.04em;
    text-transform: capitalize;
    color: #FFFFFF;
}

.case-study-box{
    position: absolute;
    border-radius: 2rem;
   
}

.case-study-box img{
    width: 100%;
    height: 100%;
    z-index: 1;
}
.case-study-box .case-study-text{
    font-weight: 400;
    font-size: 13px;
    line-height: 20px;
    text-transform: capitalize;
    color: #FFFFFF;
    text-align: center;
    margin-top: -40px;
    background: rgba(255, 255, 255, 0.1);
    -webkit-backdrop-filter: blur(20px);
    backdrop-filter: blur(20px);
    border-radius: 0px 0px 20px 20px;
    padding: 10px 0px;
    z-index: 2;
}
.more-company{
    position: absolute;
    background-image: url(/images/Vector.png?1dd772c4f020df441917cf330f7b60f4);
    background-repeat: no-repeat;
    background-size: contain;
    width: 68px;
    height: 68px;
  

}


@media only screen and (min-width: 1200px) {
    .case-study-text h1{
         left: 10.3rem;
          top: 10rem;
    }
    .case-study-text p{
       left: 14.3rem;
        top: 16rem;
        
    }
    .case-study-box{
       Width: 16.121rem;
       Height: 22.607rem;
    }

    .dji{
            left: 37.591rem;
            top: 10.3rem;
    }
    .tube{
            left: 55.891rem;
            top: 10.3rem;
    }
    .boom{
            left: 73.891rem;
            top: 10.3rem;
    }
    .s{
        left: 22.4rem;
        top: 31.386rem;
    }
    .fedex{
        left: 40.7rem;
        top: 31.386rem;
    }
    .freelancing{
        left:  58.999rem;
        top: 31.386rem;

    }
    .more-company{
           left: 78.999rem;
    top: 37.386rem;
       
    }

}
@media only screen and (min-width: 1700px) {

    .case-study-text h1{
         left: 10.3rem;
          top: 10rem;
    }
    .case-study-text p{
       left: 14.3rem;
        top: 16rem;
        
    }

    .dji{
            left: 37.591rem;
            top: 10.3rem;
    }
    .tube{
            left: 58.891rem;
            top: 10.3rem;
    }
    .boom{
            left: 79.891rem;
            top: 10.3rem;
    }
    .s{
        left: 22.4rem;
        top: 40.386rem;
    }
    .fedex{
        left: 43.7rem;
        top: 40.386rem;
    }
    .freelancing{
        left:  64.999rem;
        top: 40.386rem;

    }
    .more-company{
        left: 87.999rem;
        top: 47.386rem;
       
    }
  
}

</style>


