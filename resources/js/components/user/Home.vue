<template>
  <div class="main-content">
    <!-- Desktop and Laptop version-->

    <!-- menu  -->
    <div id="menu">
      <div class="logo">
        <img :src="'assets/img/logo.png'" />
      </div>
      <div class="cancel-button">
        <img
          class="cancel-menu"
          @click="hideMenu"
          :src="'assets/img/cancel-button.png'"
        />
      </div>
      <div class="service">
        <a
          href="#category"
          @click="hideMenu"
          @mouseover="showMenuText('Service')"
          @mouseleave="hideMenuText"
        >
          service
        </a>
      </div>
      <div class="about">
        <a
          href="#about"
          @click="hideMenu"
          @mouseenter="showMenuText('About')"
          @mouseleave="hideMenuText"
          >about</a
        >
      </div>
      <div class="portfolio">
        <a
          href="#caseStudy"
          @click="hideMenu"
          @mouseenter="showMenuText('Portfolio')"
          @mouseleave="hideMenuText"
          >portfolio</a
        >
      </div>
      <div class="blogs">
        <a
          href="#blog"
          @click="hideMenu"
          @mouseenter="showMenuText('Blogs')"
          @mouseleave="hideMenuText"
          >blogs</a
        >
      </div>
      <div class="contact">
        <a
          href="#contact"
          @click="hideMenu"
          @mouseenter="showMenuText('Contact')"
          @mouseleave="hideMenuText"
          >contact</a
        >
      </div>
      <div class="showMenuText"></div>
    </div>
    <!-- end menu -->
    <!-- blog-details  -->
    <div id="blog-details">
      <div class="row">
        <div class="blog-button">
          <img
            class="cancel-menu cancel-blog-details"
            :src="'assets/img/cancel-button.png'"
          />
        </div>
        <div class="date">
          <span>Tutorials </span><span>{{ this.blogDate }}</span>
        </div>
      </div>
      <div class="row">
        <div class="blog-content">
          <div class="blog-title">
            {{ this.blog.title }}
          </div>
          <div class="blog-text"></div>
          <div class="bottom-border"></div>
        </div>
      </div>
      <div class="row">
        <div class="other-blog">
          <div class="other-blog-title">Other interesting posts</div>
        </div>
        <div
          class="other-blog-section"
          v-for="singleBlog in blogs"
          :key="singleBlog.id"
        >
          <div class="other-blog-content d-flex justify-content-between">
            <div class="other-blog-text">
              <p class="other-blog-date">
                <span style="margin-right: 15px">weekly update </span
                ><span>{{ new Date(singleBlog.created_at) }}</span>
              </p>
              <p class="other-blog-title" @click="showBlog(singleBlog.id)">
                {{ singleBlog.title.slice(0, 100) }}
              </p>
              <p class="other-blog-details">
                {{ singleBlog.title.slice(0, 150) }}
              </p>
            </div>
            <div class="other-blog-image">
              <img
                class="cancel-menu"
                :src="`/assets/img/blogs/${singleBlog.thumbnail}`"
              />
            </div>
          </div>
        </div>

        <div class="see-more" v-if="seeMore">
          <a href="javascript:void(0)" @click="seeMoreBlog">See More</a>
        </div>
      </div>
    </div>
    <!-- end menu -->

    <section id="home" class="section d-none d-xl-block">
      <video class="background-video d-none d-xl-block" autoplay loop muted>
        <source src="/assets/bg-video/header-video-3.mp4" type="video/mp4" />
      </video>
      <div class="video-text">
        <v-typical
          class="blink"
          :steps="['We Build Awesome Creation', 500]"
          :loop="Infinity"
          :wrapper="'h1'"
        ></v-typical>
        <!--     <h1>We Build Awesome Creation</h1> -->
        <a href="#contact"
          >contact us<img :src="'assets/img/contact-icon.png'"
        /></a>
      </div>
    </section>
    <section id="category" class="section d-none d-xl-block">
      <div class="category-content">
        <div class="category-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
          </div>
          <div class="category-bg"></div>
          <h1>ui/ux</h1>
          <p>
            We create premium web design, thoughtful and user-friendly that
            solve business problems We create premium web design, thoughtful and
            user-friendly that solve business problems
          </p>
          <div class="project-btn">
            <button type="button">start project</button>
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
        </div>
      </div>
    </section>
    <section id="customer" class="section d-none d-xl-block">
      <div class="customer-content">
        <div class="customer-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
          </div>
          <div class="customers-text">
            <h1>
              More then valuable <span class="cus-num">100</span> coustomers
            </h1>
            <p>
              We create premium web design, though and user-friendly that solve
              business problems We create premium web design.
            </p>
          </div>
          <dynamic-marquee class="customers-icon-group-one">
            <div>
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
          </dynamic-marquee>
          <dynamic-marquee class="customers-icon-group-two" :reverse="true">
            <div>
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
          </dynamic-marquee>

          <dynamic-marquee class="customers-icon-group-three">
            <div>
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
          </dynamic-marquee>
        </div>
      </div>
    </section>
    <section id="about" class="section d-none d-xl-block">
      <div class="about-content">
        <div class="about-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
          </div>
          <div class="first-section-bg"></div>
          <div class="first-section-gradient"></div>
          <div class="about-section">
            <h1>About us</h1>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
            <div class="about-text">
              <h2>This is the first feature</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                ultricies tristique nulla enim tortor. Nibh tortor id aliquet
                lectus proin nibh nisl condimentum Interdum varius.
              </p>
              <span class="about-bar"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="caseStudy" class="section d-none d-xl-block">
      <div class="case-study-content">
        <div class="case-study-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
          </div>
          <div class="case-study-main-content">
            <div class="row row-1">
              <div class="case-study-text">
                <h1>Case study</h1>
                <p>We create premium web design, though and user</p>
              </div>
              <div class="first-casestudy-section">
                <div class="first-casestudy-section-content">
                  <ul>
                    <li
                      v-for="caseStudyFirstRow in caseStudyFirstRows"
                      :key="caseStudyFirstRow.id"
                    >
                      <div class="case-study-box dji">
                        <div class="case-study-img">
                          <img
                            :src="`/assets/img/case_study/${caseStudyFirstRow.com_image}`"
                          />
                        </div>
                        <div class="case-study-text">
                          {{ caseStudyFirstRow.com_name }}
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row row-2 d-flex justify-content-end">
              <div class="second-casestudy-section">
                <div class="second-casestudy-section-content">
                  <ul>
                    <li
                      v-for="caseStudySecondRow in caseStudySecondRows"
                      :key="caseStudySecondRow.id"
                    >
                      <div class="case-study-box dji">
                        <div class="case-study-img">
                          <img
                            :src="`/assets/img/case_study/${caseStudySecondRow.com_image}`"
                          />
                        </div>
                        <div class="case-study-text">
                          {{ caseStudySecondRow.com_name }}
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div
                class="more-company"
                @click="moreUserCase"
                v-if="this.caseStudyNums == 6"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonial" class="section d-none d-xl-block">
      <div class="testimonials-content">
        <div class="testimonials-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
          </div>

          <div class="first-section">
            <div class="quotation-img">
              <img :src="'assets/img/quatation.png'" />
              <h1>Our clients speak</h1>
            </div>
            <div class="client-img">
              <img :src="'assets/img/testimonial.png'" />
            </div>
          </div>
          <div class="second-section">
            <P class="client-review">
              We create premium web design, though and user Business Analytics
              is not based on rote memorization of equations or facts, but
              focuses on honing your understanding of key concepts, your
              managerial judgment, and your ability to apply course concepts to
              real business problems. This course begins with basic descriptive
              statistics and progresses to regression analysis.
            </P>
            <p class="client-name">Sourav Sen</p>
            <p class="client-designation">TextLab CEO</p>
            <div class="pagination">
              <span class="prev">Prev</span
              ><span class="pagination-arrow"></span
              ><span class="next">Next</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="media" class="section d-none d-xl-block">
      <div class="media-content">
        <div class="media-content-body">
          <div class="media-bg">
            <h1>our media buying</h1>
            <div class="media-img">
              <img :src="'assets/img/media.png'" />
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
              ultricies tristique...
            </p>
            <div class="project-btn">
              <button type="button">start project</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="blog" class="section d-none d-xl-block">
      <div class="work-content">
        <div class="work-content-body">
          <div class="first-section">
            <div
              class="first-section-title"
              @click="showBlog(blogsInfo.firstBlogId)"
            >
              {{ blogsInfo.firstBlogTitle }}
            </div>
            <div class="profile">
              <div class="thumbnail">
                <img :src="'assets/img/thumbnail/thumbnail.png'" />
              </div>
              <div class="profile-name">
                <span>By Admin </span>
                <span style="color: #8f00ff"> in </span
                ><span style="color: #8b8b8b"> Random Category</span>
              </div>
              <div class="published-date">{{ blogsInfo.firstBlogDate }}</div>
            </div>
          </div>
          <div class="second-section">
            <div
              class="second-section-title"
              @click="showBlog(blogsInfo.secondBlogId)"
            >
              {{ blogsInfo.secondBlogTitle }}
            </div>
          </div>
          <div class="third-section">
            <div
              class="third-section-title"
              @click="showBlog(blogsInfo.thirdBlogId)"
            >
              {{ blogsInfo.thirdBlogTitle }}
            </div>
          </div>
          <div class="fourth-section">
            <div
              class="fourth-section-title"
              @click="showBlog(blogsInfo.fourthBlogId)"
            >
              {{ blogsInfo.fourthBlogTitle }}
            </div>
            <div class="read-more">
              <button class="btn btn-secondary" @click="seeMoreBlog">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="startProject" class="section d-none d-xl-block">
      <div class="project-content">
        <div class="project-content-body">
          <div class="ping-row">
            <div>
              <a class="ping d-inline-block" href="#startProject"></a>
            </div>
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
                  <label for="social-media-marketing"
                    >Social Media Marketing</label
                  >
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
    </section>
    <section id="contact" class="section d-none d-xl-block">
      <div class="contact-content">
        <div class="contact-content-body">
          <div class="logo">
            <img src="assets/img/contact-bg-icon.svg" />
          </div>
          <h1>Have a Good Web Designe Today</h1>
          <div class="talk-btn">
            <a href="#" class="btn btn-secondary">let's talk</a>
          </div>

          <div class="text">
            <p>
              High level experience in web design and development knowledge,
              producing quality work.
            </p>
          </div>
          <div class="social-icon">
            <ul>
              <li>
                <a href="https://www.facebook.com/quadquetech" target="_blank">
                  <font-awesome-icon icon="fa-brands fa-facebook-f"
                /></a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/channel/UCXbnZTYKk6q82Hbux3ffILA"
                  target="_blank"
                >
                  <font-awesome-icon icon="fa-brands fa-youtube"
                /></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/quadquetech/?hl=en"
                  target="_blank"
                >
                  <font-awesome-icon icon="fa-brands fa-instagram"
                /></a>
              </li>
              <li>
                <a href="https://twitter.com/QuadqueT" target="_blank">
                  <font-awesome-icon icon="fa-brands fa-twitter"
                /></a>
              </li>
            </ul>
          </div>
          <div class="product">
            <h4>product</h4>
            <ul>
              <li>landing page</li>
              <li>popup builder</li>
              <li>web-design</li>
              <li>content</li>
              <li>integration</li>
            </ul>
          </div>
          <div class="usecase">
            <h4>use cases</h4>
            <ul>
              <li>web-designers</li>
              <li>marketers</li>
              <li>small business</li>
              <li>website builder</li>
            </ul>
          </div>
          <div class="resources">
            <h4>resources</h4>
            <ul>
              <li>academy</li>
              <li>blog</li>
              <li>themes</li>
              <li>hosting</li>
              <li>developers</li>
              <li>support</li>
            </ul>
          </div>
          <div class="company">
            <h4>company</h4>
            <ul>
              <li><a href="#about">about us</a></li>
              <li><a href="#">careers</a></li>
              <li><a href="#">faqs</a></li>
              <li><a href="#">teams</a></li>
              <li><a href="#contact">contact us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile version of QuadQue Tech Laravel Vue version-->

    <!--------------- Mobile header section ----------------------->

    <section id="mobile-header">
      <div class="mobile-header d-flex justify-content-between">
        <div class="mobile-icon">
          <img :src="'/assets/img/mobile-icon.svg'" />
        </div>
        <div class="mobile-hambergur">
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </section>

    <!--------------- Mobile home section ----------------------->

    <section id="mobile-home">
      <div class="hero-text">
        <h1>We Build Awesome Creation</h1>
      </div>
      <div class="hero-contact-us">
        Contact Us<a href="#mobile-contact"
          ><img :src="'assets/img/contact-icon.png'"
        /></a>
      </div>
      <div class="mobile-hero-video">
        <video autoplay loop muted>
          <source src="/assets/bg-video/header-video-3.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="lower-section d-flex justify-content-between">
        <div class="home-start-project"><a href="#">Start Project</a></div>
        <div class="home-language"><a href="#">EN</a><a href="#">BN</a></div>
      </div>
    </section>

    <!--------------- Mobile customer section ----------------------->

    <section id="mobile-customers">
      <div class="customer-text">
        <h2>More then valuable <span>100</span>coustomers</h2>
        <p>
          We create premium web design, though and user-friendly that solve
          business problems We create premium web design.
        </p>
      </div>
      <div class="customer-gallery">
        <div class="d-flex justify-content-between">
          <div><img src="/assets/img/customers/atr.svg" /></div>
          <div><img src="/assets/img/customers/otobi.svg" /></div>
        </div>
        <div class="d-flex justify-content-between">
          <div><img src="/assets/img/customers/ibm.svg" /></div>
          <div><img src="/assets/img/customers/nta.svg" /></div>
        </div>
        <div class="d-flex justify-content-between">
          <div><img src="/assets/img/customers/officemate.svg" /></div>
          <div><img src="/assets/img/customers/toptrip.svg" /></div>
        </div>
        <div class="d-flex justify-content-between">
          <div><img src="/assets/img/customers/marriage.svg" /></div>
          <div><img src="/assets/img/customers/otobi.svg" /></div>
        </div>
      </div>
    </section>

    <!--------------- Mobile case study section----------------------->

    <section id="mobile-caseStudy">
      <div class="caseStudy-text">
        <h1>Case study</h1>
        <p>We create premium web design, though and user</p>
        <a href="#">See More</a>
      </div>
      <div class="mob-casestudy-carousel" v-if="case_studies.length > 0">
        <carousel :items="1" :loop="true" :autoplay="true" :dots="false">
          <img
            style="width: 250px"
            v-for="case_studie in case_studies"
            :key="case_studie.id"
            :src="`/assets/img/case_study/${case_studie.com_image}`"
          />
        </carousel>
      </div>
    </section>

    <!--------------- Mobile client section ----------------------->

    <section id="mobile-client">
      <h1>Our clients speak</h1>
      <carousel :items="1" :loop="true" :autoplay="true" :dots="false">
        <div class="mob-client-carousel">
          <div class="client-details d-flex justify-content-between">
            <p>Sourab Sen</p>
            <p>Texlab CEO</p>
          </div>
          <div class="mob-client-img">
            <img src="/assets/img/client_img.svg" />
          </div>
          <div class="client-comment">
            <p>
              We create premium web design, though and user Business Analytics
              is not based on rote memorization of equations or facts, but
              focuses on honing your understanding of key concepts, your
              managerial judgment, and your ability to apply course concepts to
              real business problems. This course begins with basic descriptive
              statistics and progresses to regression analysis.
            </p>
          </div>
        </div>
        <div class="mob-client-carousel">
          <div class="client-details d-flex justify-content-between">
            <p>Sourab Sen</p>
            <p>Texlab CEO</p>
          </div>
          <div class="mob-client-img">
            <img src="/assets/img/client_img.svg" />
          </div>
          <div class="client-comment">
            <p>
              We create premium web design, though and user Business Analytics
              is not based on rote memorization of equations or facts, but
              focuses on honing your understanding of key concepts, your
              managerial judgment, and your ability to apply course concepts to
              real business problems. This course begins with basic descriptive
              statistics and progresses to regression analysis.
            </p>
          </div>
        </div>
        <div class="mob-client-carousel">
          <div class="client-details d-flex justify-content-between">
            <p>Sourab Sen</p>
            <p>Texlab CEO</p>
          </div>
          <div class="mob-client-img">
            <img src="/assets/img/client_img.svg" />
          </div>
          <div class="client-comment">
            <p>
              We create premium web design, though and user Business Analytics
              is not based on rote memorization of equations or facts, but
              focuses on honing your understanding of key concepts, your
              managerial judgment, and your ability to apply course concepts to
              real business problems. This course begins with basic descriptive
              statistics and progresses to regression analysis.
            </p>
          </div>
        </div>
      </carousel>
    </section>

    <!--------------- Mobile media buying section ----------------------->

    <section id="mobile-media">
      <h1>Our Media Buying</h1>
      <p class="mob-media-text">
        Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
        ultricies tristique...
      </p>
      <div class="mob-media-img">
        <img src="/assets/img/media_buying.svg" />
      </div>
      <div class="mob-client-start-project">
        <a href="#">Start Project</a>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
          ultricies tristique nulla enim tortor.
        </p>
      </div>
    </section>

    <!--------------- Mobile about us section ----------------------->

    <section id="mobile-aboutus">
      <h1>About us</h1>
      <div class="aboutus-img">
        <img src="/assets/img/mob_about_us.svg" />
      </div>
      <div class="aboutus-progressbar"></div>
      <div class="aboutus-scrollbox">
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
        <div class="scroll-item">
          <h4>This is the second feature</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
            ultricies tristique...
          </p>
        </div>
      </div>
    </section>

    <!--------------- Mobile contact section ----------------------->
    <section id="mobile-contact">
      <h1>Have a Good Web Designe Today</h1>
      <div class="lets-talk">
        <a href="#" class="btn btn-secondary">let's talk</a>
      </div>
      <div class="row">
        <div class="col-6 mob-contact-product">
          <h5>Product</h5>
          <ul>
            <li>Landing Page</li>
            <li>Pricing</li>
            <li>FAQ</li>
            <li>Affiliate</li>
          </ul>
          <p>Level 1, 7 Greenfield Parade Bankstown, NSW 2200</p>
          <p>
            <img src="/assets/img/vector.svg" />
            Quadque<br />
            Technologies Pty Ltd<br />
            LEVEL 1/7 Greenfield Parade,<br />
            Bankstown NSW 2200
          </p>
        </div>
        <div class="col-6 mob-contact-company">
          <h5>Company</h5>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Career</a></li>
          </ul>
          <p>+61405899496 info@quadque.tech</p>
          <p>
            <img src="/assets/img/vector.svg" />
            Quadque<br />
            Technologies Limited<br />
            Level -7, 8/C, F.R Tower,<br />
            Panthapath, Dhaka 1207
          </p>
        </div>
      </div>
      <div class="mob-social-icon">
        <ul>
          <li>
            <a href="https://www.facebook.com/quadquetech/" target="_blank"
              ><img src="/assets/img/facebook-current.svg"
            /></a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/quadquetech/?hl=en"
              target="_blank"
              ><img src="/assets/img/instagram-current.svg"
            /></a>
          </li>
          <li>
            <a href="https://twitter.com/quadquet?lang=en" target="_blank"
              ><img src="/assets/img/twitter-current.svg"
            /></a>
          </li>
          <li>
            <a
              href="https://www.youtube.com/channel/UCXbnZTYKk6q82Hbux3ffILA/videos?view=0&sort=p"
              target="_blank"
              ><img src="/assets/img/youtube-current.svg"
            /></a>
          </li>
        </ul>
      </div>
      <div class="all-right">Quadque©2022, All rights reserved</div>
    </section>

    <!--------------- Mobile start project section ----------------------->
    <section id="mobile-start-project">
      <h1 class="">
        <span>Start</span>
        <span>Project</span>
      </h1>
      <div class="row mob-start-project-menu">
        <div class="col-6 mob-start-project-menu1">
          <ul>
            <li><a href="#">UI &UX</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <div class="col-6 mob-start-project-menu2">
          <ul>
            <li><a href="#">AI & IoT Solutions</a></li>
            <li><a href="#">App Development</a></li>
          </ul>
        </div>
      </div>
      <div class="start-project-social-btn">
        <a href="#" class="btn btn-secondary"></a>
      </div>
    </section>
  </div>
</template>

<script>
import axios from "axios";
import VTypical from "vue-typical";
import MarqueeText from "vue-marquee-text-component";
import DynamicMarquee from "vue-dynamic-marquee";
import carousel from "vue-owl-carousel";
export default {
  props: ["caseStudyFirstRows", "caseStudySecondRows", "blogsInfo"],
  components: {
    VTypical,
    MarqueeText,
    DynamicMarquee,
    carousel,
  },
  data() {
    return {
      case_studies: [],
      caseQueryNum: 2,
      caseStudyNums:
        Object.keys(this.caseStudyFirstRows).length +
        Object.keys(this.caseStudySecondRows).length,
      blog: "",
      blogs: "",
      blogDate: "",
      seeMore: 1,
      reverse: true,
      speed: {
        type: "duration",
        number: 100000,
      },
    };
  },

  methods: {
    //get all case study for mobile version
    getAllCaseStudy() {
      axios
        .get("/get/case-study/all/")
        .then((response) => {
          this.case_studies = response.data;
        })
        .catch((error) => {});
    },
    //show menu text after hover

    hideMenu() {
      $("#menu").hide();
      $("#menu").css("transition", "all 10s");
      $("#menu").css("position", "relative");
      $("#menu").css("top", "0%");
      $("#menu").css("z-index", "-1");
    },
    blogTextShow(str) {
      $(".blog-text").html(str);
    },

    showBlog(id) {
      axios
        .get("/get/blog/" + id)
        .then((response) => {
          this.blog = response.data.blog;
          this.blogs = response.data.blogs;
          this.blogDate = response.data.blogDate;
          this.blogTextShow(this.blog.text);
          this.seeMore = 1;

          $("#blog-details").css("display", "block");
          $("#blog-details").css("transition", "all 2s");
          $("#blog-details").css("position", "absolute");
          $("#blog-details").css("top", "0");
          $("#blog-details").css("z-index", "10");
        })
        .catch((error) => {});
    },

    //get the more blogs when clciking Read More and See More button
    seeMoreBlog() {
      axios
        .get("/see/more/blog/")
        .then((response) => {
          this.blog = "";
          this.blogDate = "";
          this.blogs = response.data.blogs;
          this.seeMore = 0;

          $("#blog-details").css("display", "block");
          $("#blog-details").css("transition", "all 2s");
          $("#blog-details").css("position", "absolute");
          $("#blog-details").css("top", "0");
          $("#blog-details").css("z-index", "10");
        })
        .catch((error) => {});
    },
    moreUserCase() {
      $("#caseStudy")
        .find(".case-study-box")
        .css("transition", "all 1s")
        .css("transform", "rotateY(360deg)");
      $("#caseStudy")
        .find(".first-casestudy-section-content")
        .css("transition", "margin 1s")
        .css("margin-right", "-130%");
      $("#caseStudy")
        .find(".second-casestudy-section-content")
        .css("transition", "margin 1s ")
        .css("margin-left", "-130%");

      axios
        .get("/get/case-study/more/" + this.caseQueryNum)
        .then((response) => {
          if (response.data.caseStudyFirstRows.length > 0) {
            this.caseStudyFirstRows = response.data.caseStudyFirstRows;
          }

          if (response.data.caseStudySecondRows.length > 0) {
            this.caseStudySecondRows = response.data.caseStudySecondRows;
          }

          this.caseQueryNum++;
        })
        .catch((error) => {});

      setTimeout(function () {
        $("#caseStudy")
          .find(".case-study-box")
          .css("transition", "all 2s")
          .css("transform", "rotateY(0deg)");
        $("#caseStudy")
          .find(".first-casestudy-section-content")
          .css("transition", "margin 2s")
          .css("margin-right", "0%");
        $("#caseStudy")
          .find(".second-casestudy-section-content")
          .css("transition", "margin 2s")
          .css("margin-left", "0%");
      }, 2000);
    },

    //show the menu largely after hover

    showMenuText(str) {
      $(".showMenuText")
        .css("opacity", "1")
        .css("visibility", "visible")
        .css("text-transform", "uppercase")
        .css("transition", "opacity 1.5s, visibility 1.5s");
      $(".showMenuText").text(str);
    },

    hideMenuText() {
      $(".showMenuText").css("opacity", "0").css("visibility", "hidden");
    },
  },

  mounted() {
    this.getAllCaseStudy();
  },
};
</script>
<style scoped>
/************* Home page  ****************/

.main-content {
  scroll-behavior: smooth;
  scroll-snap-type: y mandatory;
}
.section {
  scroll-snap-align: center;
  height: 100vh;
}
#home {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}
#menu {
  display: none;
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 3%;
  background: #000;
}

#menu .logo img {
  position: absolute;
  width: 183px;
  height: 49px;
  left: 5%;
  top: 10%;
}

#menu .cancel-button {
  cursor: pointer;
}
#menu .cancel-button img {
  position: absolute;
  width: 15.14px;
  height: 14.21px;
  right: 5%;
  top: 12%;
}
#menu .service a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 269px;
  height: 61px;
  left: 192px;
  top: 288px;
  font-weight: 400;
  font-size: 50px;
  line-height: 61px;
  color: #ffffff;
}
#menu .about a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 269px;
  height: 61px;
  left: 750px;
  top: 288px;
  font-weight: 400;

  font-size: 50px;
  line-height: 61px;
  color: #ffffff;
}
#menu .portfolio a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 269px;
  height: 61px;
  right: 192px;
  top: 288px;
  font-weight: 400;

  font-size: 50px;
  line-height: 61px;
  color: #ffffff;
}
#menu .blogs a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 182px;
  height: 48px;
  left: 450px;
  top: 450px;
  font-weight: 400;
  font-size: 40px;
  line-height: 48px;
  color: #ffffff;
}

#menu .contact a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 182px;
  height: 48px;
  left: 58%;
  top: 450px;
  font-weight: 400;
  font-size: 40px;
  line-height: 48px;
  color: #ffffff;
}
#menu a {
  transition: all 0.5s;
}
#menu a:hover {
  font-weight: 500;
  color: #8f00ff;
}
#menu .showMenuText {
  position: absolute;
  bottom: 13%;
  font-size: 100px;
  letter-spacing: 8px;
  text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff,
    1px 1px 0 #fff;
  width: 100%;
  text-align: center;
  opacity: 0;
  visibility: hidden;
  transition: opacity 1.5s, visibility 1.5s;
}

/******** blog details style *************/

#blog-details {
  display: none;
  height: 100vh;
  width: 100%;
  margin-top: 0%;
  margin-bottom: 3%;
  background: #000;
  color: #fff;
  overflow-y: scroll;
  scroll-behavior: smooth;
}
#blog-details::-webkit-scrollbar {
  display: none;
}
#blog-details .date {
  margin-left: 5%;
  color: #fff;
  font-size: 18px;
  text-align: left;
}

#blog-details .blog-button {
  text-align: right;
  cursor: pointer;
}
#blog-details .blog-button img {
  display: inline-block;
  margin-right: 5%;
  margin-top: 5%;
}

#blog-details .blog-content {
  padding: 1% 6%;
}
#blog-details .blog-content .blog-title {
  font-weight: 500;
  font-size: 32px;
  line-height: 48px;
  letter-spacing: -0.03em;
  padding: 1% 0;
  color: #ffffff;
  width: 100%;
}
#blog-details .blog-content .blog-text {
  font-size: 18px;
  line-height: 150%;
  color: #ffffff;
  text-align: justify;
  width: 90%;
  margin: 0 auto;
}
.blog-text-style {
  font-size: 18px !important;
  line-height: 150% !important;
  color: #ffffff !important;
  text-align: justify !important;
}

#blog-details .blog-content .bottom-border {
  width: 100%;
  height: 2px;
  background: #fff;
  margin-top: 5%;
}

#blog-details .other-blog,
.other-blog-section {
  padding: 1% 6%;
}
#blog-details .other-blog .other-blog-title {
  font-weight: 500;
  font-size: 32px;
  line-height: 48px;
  cursor: pointer;
}
#blog-details .other-blog-section {
  padding: 2% 6% 5% 6%;
}
#blog-details .other-blog-date {
  font-weight: 400;
  font-size: 18px;
  line-height: 120%;
  text-transform: uppercase;
  padding-bottom: 3%;
  /* text-align: center; */
}
#blog-details .other-blog-title {
  font-weight: 400;
  font-size: 28px;
  line-height: 130%;
  width: 88%;
  cursor: pointer;
}
#blog-details .other-blog-details {
  font-weight: 400;
  font-size: 20px;
  line-height: 150%;
  color: rgba(255, 255, 255, 0.5);
  width: 88%;
}
.other-blog-details-text {
  font-weight: 400;
  font-size: 20px;
  line-height: 150%;
  color: rgba(255, 255, 255, 0.5);
  width: 88%;
}
#blog-details .other-blog-image img {
  width: 276px;
  height: 200px;
}
#blog-details .see-more {
  text-align: center;
  padding-top: 0;
  padding-bottom: 10%;
}
#blog-details .see-more a {
  display: inline-block;
  text-decoration: none;
  color: #fff;
  font-size: 20px;
}

/*********** blog style end  *********/

#home .background-video {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 0;
  left: 0;
  bottom: 0;
}
#home .video-text {
  position: absolute;
  top: 44rem;
  right: 50rem;
}
#home .video-text h1 {
  font-style: normal;
  font-weight: 700;
  font-size: 4.8rem;
  line-height: 4.5rem;
  text-transform: capitalize;
  color: #ffffff;
  width: 10rem;
}
#home .video-text a {
  font-weight: 500;
  font-size: 1.4rem;
  line-height: 2.1rem;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
}
#home .video-text a img {
  vertical-align: middle;
  margin-left: 1rem;
  width: 1.5rem;
  height: 1.5rem;
}

/************* Category page  ****************/
#category {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
}
#category .category-content {
}

#category .category-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 0;
  left: 0;
  bottom: 0;
  overflow: hidden;
}
#category .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  z-index: 1;
  cursor: pointer;
}
#category .category-bg {
  position: absolute;
  width: 107%;
  height: 100%;
  left: -49px;
  top: 0;
  background-image: url(../../../img/category.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  z-index: -1;
}
#category h1 {
  position: absolute;
  width: 195px;
  height: 64px;
  left: 150px;
  top: 115px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 58px;
  line-height: 100%;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: #ffffff;
}
#category p {
  position: absolute;
  width: 208px;
  height: 144px;
  left: 192px;
  top: 254px;

  font-family: "Poppins";
  font-style: normal;
  font-weight: 300;
  font-size: 15px;
  line-height: 18px;
  /* or 120% */

  letter-spacing: 0.04em;
  text-transform: capitalize;

  color: #ffffff;
}
#category .project-btn button {
  background: #8f00ff;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  position: absolute;
  width: 252px;
  height: 46px;
  left: 150px;
  top: 605px;
  border: 1px solid #8f00ff;
}
#category .project-menu-list {
  position: absolute;
  width: 187px;
  height: 230px;
  left: 78%;
  top: 18%;
  font-style: normal;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 2.2rem;
  color: #ffffff;
}
#category .project-menu-list ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20rem;
}

#category .project-menu-list ul li a {
  display: block;
  color: #fff;
  text-decoration: none;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1rem;
  text-transform: capitalize;
  padding-bottom: 1rem;
  margin-bottom: 1.2rem;
  border-bottom-width: 0rem;
  transition: color 0.5s, border-bottom-width 1s;
}
#category .project-menu-list ul li a:hover {
  color: #8f00ff;
}

/************* customer  *****************/
#customer {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
}

#customer .customer-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 0;
  left: 0;
  bottom: 0;
  background: #000;

  overflow: hidden;
}
#customer .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  cursor: pointer;
}
#customer .customers-text {
  position: absolute;
  width: 25.2rem;
  height: 18.2rem;
  left: 15.2rem;
  top: 26rem;
}
#customer .customers-text h1 {
  font-weight: 600;
  font-size: 2.4rem;
  line-height: 4rem;
  text-transform: capitalize;
  color: #ffffff;
}
#customer .customers-text .cus-num {
  font-weight: 700;
  font-size: 4rem;
  line-height: 4rem;
  text-transform: capitalize;
  color: #8f00ff;
}
#customer .customers-text p {
  font-weight: 300;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
}
#customer .customers-icon-group-one {
  position: absolute !important;
  right: 78.9rem !important;
  top: 0 !important;
  overflow: visible !important;
  width: auto !important;
}
#customer .customers-icon-group-two {
  position: absolute !important;
  right: 55rem !important;
  top: 0 !important;
  overflow: visible !important;
  width: auto !important;
}
#customer .customers-icon-group-three {
  position: absolute !important;
  right: 31rem !important;
  top: 0.55rem !important;
  overflow: visible !important;
  width: auto !important;
}
#customer .icon-box {
  width: 20rem;
  height: 14rem;
  background: rgba(143, 0, 255, 0.15);
  margin-bottom: 1.5rem;
}
#customer .icon-box img {
  transform: translate(2.5rem, 5.5rem);
  width: 13.7rem;
  height: 2.9rem;
}

/**************** case study ********** */
#caseStudy {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
}

#caseStudy .case-study-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  left: 0;
  bottom: 0;
  background: #000;

  overflow: hidden;
}
#caseStudy .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  cursor: pointer;
}

#caseStudy .row-1 {
  margin-top: 6%;
  padding-left: 7%;
}
#caseStudy .row-2 {
  margin-top: 8%;
}

#caseStudy .case-study-text {
  width: 25%;
  float: left;
}
#caseStudy .case-study-text h1 {
  width: 25rem;
  height: auto;
  font-weight: 600;
  font-size: 3.2rem;
  line-height: 4rem;
  text-transform: capitalize;
  color: #ffffff;
}
#caseStudy .case-study-text p {
  width: 20.4rem;
  height: auto;
  font-weight: 300;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
}
#caseStudy .first-casestudy-section {
  float: right;
  width: 65%;
  text-align: right;
}
#caseStudy .first-casestudy-section .first-casestudy-section-content {
  height: 100%;
}
#caseStudy .second-casestudy-section .second-casestudy-section-content {
  height: 100%;
}
#caseStudy .first-casestudy-section ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#caseStudy .first-casestudy-section ul li {
  display: inline;
  margin-left: 7%;
}

#caseStudy .second-casestudy-section {
  float: left;
  width: 64%;
  text-align: left;
}
#caseStudy .second-casestudy-section ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#caseStudy .second-casestudy-section ul li {
  display: inline;
  margin-right: 7%;
}

#caseStudy .case-study-box {
  border-radius: 2rem;
  width: 215px;
  height: 226px;
  display: inline-block;
}

#caseStudy .case-study-img {
}

#caseStudy .case-study-box img {
  width: 100%;
  height: 100%;
  z-index: 1;
}
#caseStudy .case-study-box .case-study-text {
  font-weight: 400;
  font-size: 13px;
  line-height: 20px;
  text-transform: capitalize;
  color: #ffffff;
  text-align: center;
  margin-top: -40px;
  background: rgba(255, 255, 255, 0.1);
  -webkit-backdrop-filter: blur(20px);
  backdrop-filter: blur(20px);
  border-radius: 0px 0px 20px 20px;
  padding: 10px 0px;
  z-index: 2;
  width: 100%;
}
#caseStudy .more-company {
  background-image: url(/images/Vector.png?1dd772c4f020df441917cf330f7b60f4);
  background-repeat: no-repeat;
  background-size: contain;
  width: 68px;
  height: 68px;
  cursor: pointer;
  margin-top: 6%;
  width: 21%;
  overflow: hidden;
}

/************ testimonial *************/
#testimonial {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}

#testimonial .testimonials-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  background: #000;
  left: 0;
  bottom: 0;
  overflow: hidden;
}
#testimonial .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  cursor: pointer;
}
#testimonial .first-section {
  width: 40%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
#testimonial .first-section .quotation-img {
  margin-top: 8rem;
  margin-left: 2rem;
  /* margin-bottom: 8rem; */
}
#testimonial .first-section .quotation-img img {
  float: left;
}
#testimonial .first-section .quotation-img h1 {
  float: left;
  margin-top: 3rem;
  margin-left: -4rem;
  font-weight: 500;
  font-size: 32px;
  line-height: 48px;
  color: #ffffff;
}
#testimonial .client-img img {
  clear: both;
  display: inline-block;
  margin-top: 4rem;
  margin-left: 9rem;
}
#testimonial .second-section {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 60%;
  height: 80%;
  padding-left: 25px;
}
#testimonial .second-section .client-review {
  width: 440px;
  height: 144px;
  font-weight: 400;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  margin-left: 20px;
  margin-top: 130px;
  margin-bottom: 20px;
}
#testimonial .second-section .client-name {
  font-weight: 500;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  margin-left: 20px;
}
#testimonial .second-section .client-designation {
  font-weight: 500;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: rgba(255, 255, 255, 0.5);
  margin-left: 20px;
}
#testimonial .second-section .pagination {
  margin-left: 20px;
  margin-top: 6rem;
}
#testimonial .second-section .prev {
  font-weight: 400;
  font-size: 24px;
  line-height: 27px;
  text-indent: 2px;
  color: rgba(255, 255, 255, 0.5);
  float: left;
  cursor: pointer;
}
#testimonial .second-section .pagination-arrow {
  display: inline-block;
  width: 100px;
  height: 2px;
  background: #fff;
  float: left;
  margin-left: 18px;
  margin-top: 15px;
}
#testimonial .second-section .next {
  font-weight: 400;
  font-size: 24px;
  line-height: 27px;
  text-indent: 2px;
  float: left;
  color: #ffffff;
  margin-left: 18px;
  cursor: pointer;
}

/************* **********************/
#startProject {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}
#startProject .project-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  left: 0;
  bottom: 0;
  background: #000;
}

#startProject .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  cursor: pointer;
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

#startProject .header h1 {
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
#startProject .mobile-num p {
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

#startProject .project-menu-list {
  position: absolute;
  left: 10rem;
  top: 24.5rem;
  font-style: normal;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 2.2rem;
  color: #ffffff;
  z-index: 1;
}
#startProject .project-menu-list ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20rem;
}

#startProject .project-menu-list ul li a {
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
#startProject .project-menu-list ul li a:hover {
  border-bottom-width: 0.1rem;
  border-bottom-style: solid;
  border-bottom-color: #8f00ff;

  color: #8f00ff;
}

#startProject .social-media {
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
#startProject .contact-form {
  position: absolute;
  width: 30rem;
  right: 10rem;
  top: 24.5rem;
}
#startProject .contact-form input {
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
#startProject input[type="text"]:focus {
  border: none;
  border-bottom: 0.1rem solid #fff;
}
#startProject .contact-form .project-btn {
  width: 100%;
  margin-top: 2rem;
  text-align: center;
}

#startProject .contact-form .project-btn button {
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

#startProject input[type="checkbox"] {
  display: none;
}
#startProject input[type="checkbox"] + label {
  cursor: pointer;
}
#startProject input[type="checkbox"] + label::before {
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
#startProject input[type="checkbox"]:checked + label::before {
  outline: 0.1rem solid #8f00ff;
  color: #8f00ff;
}
#startProject input[type="checkbox"]:checked + label {
  color: #8f00ff;
}
#startProject input[type="checkbox"]:not(:checked) + label::before {
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

#startProject .spaceman {
  position: absolute;
  width: 22.1rem;
  height: 33.4rem;
  left: 30rem;
  bottom: -120px;

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
    transform: translate(-25%, -25%);
  }
  100% {
    transform: translate(0%, 0%);
  }
}

/*************** Blog ************/
#blog {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}

#blog .work-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  top: 0px;
  left: 0;
  bottom: 0;
  overflow: hidden;
}
#blog .first-section {
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
#blog .first-section .first-section-title {
  position: absolute;
  left: 13.12%;
  top: 64.86%;
  font-weight: 600;
  font-size: 3rem;
  line-height: 4.8rem;
  color: #ffffff;
  cursor: pointer;
}
#blog .first-section .profile {
  position: absolute;
  left: 13.12%;
  top: 79.58%;
}

#blog .first-section .profile .thumbnail {
  float: left;
  margin-top: 1rem;
}
#blog .first-section .profile .thumbnail img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
#blog .first-section .profile .profile-name {
  font-weight: 400;
  font-size: 2.2rem;
  color: #ffffff;
  float: left;
  margin-left: 1.5rem;
  margin-top: 2rem;
}
#blog .first-section .profile .published-date {
  clear: right;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 2.2rem;
  color: #ededed;
  margin-left: 10.8rem;
}
#blog .second-section {
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
#blog .second-section .second-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
  margin-left: 1.5rem;
  cursor: pointer;
  margin-right: 5rem;
  margin-left: 5rem;
  margin-top: 10rem;
}
#blog .third-section {
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
#blog .third-section .third-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
  margin-left: 1.5rem;
  cursor: pointer;
  margin-right: 5rem;
  margin-left: 5rem;
  margin-top: 10rem;
}
#blog .fourth-section {
  position: absolute;
  width: 35%;
  right: 0rem;
  top: 29rem;
  background-image: url(/images/work-4.png?0c7d16c21abea599b135324272d52c9a);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

#blog .fourth-section .fourth-section-title {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #ffffff;
  cursor: pointer;
  margin-top: 19rem;
  margin-left: 5rem;
  margin-right: 5rem;
  margin-top: 18rem;
  margin-left: 8rem;
}
#blog .read-more {
  text-align: center;
}
#blog .read-more button {
  margin-top: 5%;
  width: 134px;
  height: 46px;
  background: #8f00ff;
  color: #fff;
  font-weight: 600;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
}

/**************** media **************/
#media {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}
#media .media-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  left: 0;
  bottom: 0;
  overflow: hidden;
}
#media .ping {
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
  z-index: 1;
  cursor: pointer;
}
#media .media-bg {
  position: absolute;
  width: 106%;
  height: 100%;
  left: -47px;
  top: 0;
  background-image: url(/images/mediabuyingbg.png?27c9137651c13ef37b166af5b774987f);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  z-index: -1;
}
#media .project-btn button {
  background: #8f00ff;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  position: absolute;
  width: 252px;
  height: 46px;
  left: 560px;
  top: 558px;
}
#media .media-bg h1 {
  position: absolute;
  width: 291px;
  height: 44px;
  left: 535px;
  top: 75px;
  font-weight: 500;
  font-size: 32px;
  line-height: 44px;
  text-align: center;
  text-transform: capitalize;
  color: #ffffff;
}

#media .media-bg p {
  position: absolute;
  width: 432px;
  height: 46px;
  left: 470px;
  top: 500px;
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  text-align: center;
  letter-spacing: 0.04em;
  color: #ffffff;
}

/*************** about **************/
#about {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}
#about .about-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  background: #000;
  left: 0;
  bottom: 0;
  overflow: hidden;
}
#about .ping {
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
  cursor: pointer;
}
#about .first-section-bg {
  position: absolute;
  width: 40%;
  height: 100%;
  left: 0;
  top: 0;
  background-image: url(/images/about-bg.png?4542677c06a8797da4cf9e0afb26bf83);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  /*  filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); */
}
#about .first-section-gradient {
  position: absolute;
  width: 40%;
  height: 100%;
  left: 0;
  top: 0;
  background: linear-gradient(
    360deg,
    #0c0e13 0%,
    #0c0e13 0.01%,
    rgba(12, 14, 19, 0) 61.67%
  );
  filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}

#about .about-section {
  position: absolute;
  width: 60%;
  height: 75%;
  right: 30px;
  top: 10rem;
  overflow-y: scroll;
}
#about .about-section::-webkit-scrollbar {
  width: 9px;
  height: 118px;
}
#about .about-section::-webkit-scrollbar-thumb {
  background: #8f00ff;
  border: 3px solid #8f00ff;
  background-clip: content-box;
}
#about .about-section::-webkit-scrollbar-track {
  width: 1px;
  background: #fff;
}
#about .about-section h1 {
  font-weight: 500;
  font-size: 3.2rem;
  color: #fff;
  line-height: 4.8rem;
  margin-left: 8rem;
  margin-bottom: 3rem;
}
#about .about-text h2 {
  margin-left: 11rem;
  font-weight: 700;
  font-size: 24px;
  line-height: 180%;
  color: #ffffff;
}
#about .about-text p {
  margin-left: 11rem;
  width: 432px;
  height: 92px;
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
}
#about .about-text .about-bar {
  width: 42rem;
  height: 0.2rem;
  background: #fff;
  display: block;
  margin-left: 9rem;
  margin-top: 3rem;
  margin-bottom: 3rem;
}

#testimonial .second-section {
  position: absolute;
  /* right: 0px; */
  left: 66rem;
  bottom: 16px;
  width: 60%;
  height: 80%;
  /* padding-left: 25px; */
}
#testimonial .second-section .client-review {
  width: 460px;
  height: 144px;
  font-weight: 400;
  font-size: 18px;
  line-height: 28px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  margin-left: 20px;
  margin-top: 100px;
  margin-bottom: 140px;
}
#testimonial .second-section .client-name {
  font-weight: 500;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  margin-left: 20px;
}
#testimonial .second-section .client-designation {
  font-weight: 500;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: rgba(255, 255, 255, 0.5);
  margin-left: 20px;
}
#testimonial .second-section .pagination {
  margin-left: 20px;
  margin-top: 2rem;
}
#testimonial .client-img img {
  clear: both;
  display: inline-block;
  margin-top: 4rem;
  margin-left: 15rem;
  height: 422px;
}
#startProject .project-menu-list ul li a {
  font-size: 1.8rem;
}
#startProject .social-media {
  width: 25rem;
  left: 40rem;
  font-size: 1.8rem;
}
#startProject .contact-form {
  width: 45rem;
}
#startProject .contact-form input {
  margin-bottom: 3rem;
  font-size: 1.5rem;
}
#media .media-bg h1 {
  position: absolute;
  width: 291px;
  height: 44px;
  left: 40%;
  top: 16%;
  font-weight: 500;
  font-size: 32px;
  line-height: 44px;
  text-align: center;
  text-transform: capitalize;
  color: #ffffff;
}
#media .media-bg .media-img {
  position: absolute;
  width: 582.38px;
  height: 298px;
  left: 32%;
  top: 27%;
}
#media .media-bg p {
  position: absolute;
  width: 500px;
  height: 46px;
  left: 36%;
  top: 68%;
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  text-align: center;
  letter-spacing: 0.04em;
  color: #ffffff;
}
#media .project-btn button {
  background: #8f00ff;
  font-style: normal;
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.8rem;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  position: absolute;
  width: 252px;
  height: 46px;
  left: 42%;
  top: 79%;
}
#blog .second-section {
  height: 29%;
}
#blog .third-section {
  height: 32%;
}
#blog .fourth-section {
  height: 55.4%;
  top: 30rem;
}

#blog .second-section {
  height: 24%;
  position: absolute;
  width: 35%;
  right: 0rem;
  top: 0;
  background-image: url(/images/work-2.png?af3d085…);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
#blog .third-section {
  height: 24%;
  position: absolute;
  width: 35%;
  right: 0;
  top: 17rem;
  background-image: url(/images/work-3.png?f915764480600505dcde54c4e0347322);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
#blog .fourth-section {
  height: 64%;
  top: 34rem;
  position: absolute;
  width: 35%;
  right: 0rem;

  background-image: url(/images/work-4.png?0c7d16c21abea599b135324272d52c9a);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

/*********  Customer **********/
#contact {
  height: 100%;
  width: 100%;
  position: relative;
  top: 0%;
  left: 0%;
  right: 0%;
  bottom: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
}

#contact .contact-content-body {
  width: 100%;
  position: absolute;
  height: 100%;
  object-fit: cover;
  left: 0;
  bottom: 0;
  background: #000;
  overflow: hidden;
}
#contact .ping {
  background: #fff;
  border-radius: 50%;
  width: 1.3rem;
  height: 1.3rem;
  -webkit-animation: load 1.5s ease-out infinite;
  animation: load 1.5s ease-out infinite;
  float: right;
  margin-top: 3rem;
  margin-right: 3rem;
  outline: 0.1rem solid #fff;
  border: 0.5rem solid #000;
  cursor: pointer;
}
#contact .logo img {
  position: absolute;
  width: 415px;
  height: 350px;
  left: 81%;
  top: -8%;
}

#contact h1 {
  position: absolute;
  width: 587px;
  height: 110px;
  left: 168px;
  top: 126px;
  font-weight: 600;
  font-size: 50px;
  line-height: 55px;
  color: #ffffff;
}

#contact .talk-btn a {
  display: inline-block;
  padding: 5px 26px;
  position: absolute;
  width: 240px;
  height: 60px;
  left: 108px;
  top: 40%;
  border: 2px solid #ffffff;
  border-radius: 30px;
  font-weight: 400;
  font-size: 16px;
  line-height: 47px;
  text-align: center;
  background: inherit;
  color: #ffffff;
  text-transform: capitalize;
}
#contact .text p {
  position: absolute;
  width: 266px;
  height: 92px;
  left: 108px;
  top: 60%;
  font-size: 21px;
  line-height: 23px;
  /* or 115% */

  color: #ffffff;
}

#contact .product,
.usecase,
.resources,
.company {
  position: absolute;
  width: 203px;
  height: 197px;
  color: #ffffff;
  text-transform: capitalize;
}
#contact .product {
  left: 35%;
  top: 60%;
}
#contact .usecase {
  left: 50%;
  top: 60%;
}
#contact .resources {
  left: 65%;
  top: 60%;
}
#contact .company {
  left: 80%;
  top: 60%;
}
#contact .product h4,
.usecase h4,
.resources h4,
.company h4 {
  font-weight: 500;
  font-size: 20px;
  line-height: 27px;
  margin-bottom: 10%;
}
#contact .product ul,
.usecase ul,
.resources ul,
.company ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

#contact .product ul li,
.usecase ul li,
.resources ul li,
.company ul li {
  font-weight: 400;
  font-size: 15px;
  line-height: 21px;
  margin-bottom: 3%;
  color: #ffffff;
}
#contact .company ul li a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  color: #fff;
}
#contact .social-icon {
  position: absolute;
  left: 108px;
  top: 84.03%;
  bottom: 14.03%;
  width: 200px;
}
#contact .social-icon ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
#contact .social-icon ul li {
  display: inline;
  margin-right: 15px;
}
#contact .social-icon ul li a {
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  color: #fff;
}

/************** responsive  **************/

@media screen and (max-width: 1600px) {
  #menu .about a {
    left: 590px;
  }
  #home .video-text {
    top: 40rem;
  }
  #blog .work-content-body {
    top: 0px;
  }
  #customer .customers-icon-group-one {
    right: 81rem !important;
  }
  #customer .customers-icon-group-two {
    right: 56rem !important;
  }
  #testimonial .first-section .quotation-img {
    margin-top: 1rem;
    margin-left: 1rem;
  }
  #customer .customers-text {
    top: 30rem;
  }
  #customer .icon-box {
    width: 22rem;
    height: 16rem;
  }
  #customer .icon-box img {
    margin-left: 4px;
    transform: translate(3.5rem, 6.5rem);
  }

  #blog .fourth-section .fourth-section-title {
    margin-top: 12rem;
  }
  #contact .logo img {
    left: 77%;
  }
  #caseStudy .case-study-box {
    width: 160px;
  }
  #caseStudy .more-company[data-v-1b29d588] {
    margin-top: 4%;
  }
  #caseStudy .row-2[data-v-1b29d588] {
    margin-top: 4%;
  }
  #about .first-section-bg {
    width: 50%;
  }
  #about .first-section-gradient {
    width: 50%;
  }
  #about .about-section {
    width: 50%;
  }
  #media .media-bg .media-img {
    left: 32%;
  }
  #blog .second-section {
    height: 27%;
  }
  #blog .third-section {
    height: 27%;
  }

  #blog .fourth-section {
    top: 34rem;
    height: 48%;
  }
  #category .category-bg {
    height: 110%;
    top: -48px;
  }
  #startProject .header h1 {
    top: 10.5rem;
  }
  #startProject .project-menu-list {
    top: 31.5rem;
  }
  #startProject .social-media {
    top: 33.5rem;
  }
  #startProject .contact-form {
    top: 31.5rem;
  }
  #startProject .mobile-num p {
    top: 10.5rem;
  }
  #caseStudy .row-1 {
    margin-top: 7%;
  }
  #startProject .spaceman {
    bottom: -90px;
  }
  #contact h1 {
    left: 104px;
  }
  #category .project-btn button {
    top: 515px;
  }
  #media .project-btn button {
    left: 45%;
  }
}

@media screen and (max-width: 1366px) {
  #menu .service a {
    top: 25%;
  }
  #menu .about a {
    top: 25%;
    left: 506px;
  }
  #menu .portfolio a {
    top: 25%;
  }
  #menu .blogs a {
    top: 45%;
  }
  #menu .contact a {
    top: 45%;
  }

  #home .video-text {
    top: 36rem;
  }
  #category h1 {
    font-size: 50px;
  }
  #category p {
    font-size: 13px;
  }
  #category .project-btn button {
    width: 200px;
    height: 40px;
    left: 13%;
    top: 77%;
  }
  #category .project-menu-list ul li a {
    font-weight: 500;
  }
  #caseStudy .case-study-box {
    width: 140px;
  }
  #caseStudy .row-1 {
    margin-top: 5%;
  }

  #caseStudy .row-2 {
    margin-top: 0%;
  }
  #customer .customers-icon-group-one {
    right: 63.9rem !important;
  }
  #customer .icon-box {
    width: 20rem;
    height: 11rem;
  }
  #customer .icon-box img {
    margin-left: 12px;
    transform: translate(1.5rem, 4.5rem);
  }

  #customer .customers-icon-group-two {
    left: 79.4rem !important;
  }
  #caseStudy .more-company {
    height: 50px;
  }
  #startProject .header h1 {
    font-size: 3rem;
    top: 7.5rem;
  }
  #startProject .project-menu-list {
    top: 24.5rem;
  }
  #startProject .project-menu-list ul li a {
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 1.2rem;
  }
  #startProject .spaceman {
    left: 18rem;
  }
  #startProject .social-media {
    top: 27.5rem;
    font-size: 1.5rem;
  }
  #startProject .contact-form {
    top: 24.5rem;
  }
  #blog .second-section {
    height: 27%;
  }
  #blog .second-section .second-section-title {
    font-weight: 500;
    font-size: 14px;
  }
  #blog .third-section {
    height: 25%;
  }
  #blog .third-section .third-section-title {
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
  }
  #blog .fourth-section {
    top: 33rem;
    height: 52%;
  }
  #blog .fourth-section .fourth-section-title {
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    margin-top: 12rem;
  }
  #blog .read-more button {
    width: 120px;
    height: 35px;
    font-weight: 500;
    font-size: 12px;
  }
  #media .media-bg {
    left: -40px;
  }
  #media .media-bg h1 {
    font-size: 25px;
  }
  #media .media-bg .media-img {
    left: 30%;
  }
  #media .media-bg .media-img img {
    width: 700px;
    height: 350px;
  }
  #media .media-bg p {
    font-weight: 400;
    font-size: 13px;
    width: 406px;
  }
  #media .project-btn button {
    font-weight: 500;
    font-size: 1.3rem;

    left: 42%;
    top: 81%;
    width: 225px;
    height: 39px;
  }
  #testimonial .first-section .quotation-img {
    margin-top: 4rem;
    margin-left: 2rem;
  }
  #testimonial .first-section .quotation-img img {
    width: 75px;
    height: 60px;
  }
  #testimonial .first-section .quotation-img h1 {
    margin-top: 1rem;
    margin-left: -3rem;
    font-weight: 500;
    font-size: 25px;
    line-height: 48px;
  }
  #testimonial .client-img img {
    margin-top: 6rem;
    margin-left: 7rem;
    height: 300px;
    width: 370px;
  }
  #testimonial .second-section {
    left: 60rem;
    bottom: 0px;
    width: 60%;
    height: 80%;
  }
  #testimonial .second-section .client-review {
    width: 427px;
    height: 144px;
    font-weight: 400;
    font-size: 13px;
    line-height: 23px;
    margin-left: 20px;
    margin-top: 65px;
    margin-bottom: 45px;
  }
  #testimonial .second-section .client-name {
    font-size: 14px;
  }
  #testimonial .second-section .client-designation {
    font-size: 14px;
  }
  #testimonial .second-section .prev {
    font-weight: 400;
    font-size: 20px;
  }
  #testimonial .second-section .pagination-arrow {
    width: 60px;
  }
  #testimonial .second-section .next {
    font-weight: 400;
    font-size: 20px;
  }
  #contact h1 {
    width: 400px;
    height: 110px;
    left: 105px;
    top: 75px;
    font-weight: 500;
    font-size: 30px;
    line-height: 45px;
  }
  #contact .talk-btn a {
    width: 163px;
    height: 37px;
    left: 108px;
    top: 40%;
    font-size: 13px;
    line-height: 24px;
  }
  #contact .text p {
    width: 262px;

    font-size: 15px;
  }
  #contact .social-icon {
    top: 80.03%;
  }
  #contact .social-icon ul li a {
    font-size: 20px;
  }
  #contact .product h4,
  .usecase h4,
  .resources h4,
  .company h4 {
    font-size: 16px;
  }
  #contact .product ul li,
  .usecase ul li,
  .resources ul li,
  .company ul li {
    font-size: 13px;
  }
  #contact .logo img {
    width: 342px;
    height: 335px;
    top: -11%;
  }
  #about .about-text h2 {
    font-weight: 500;
    font-size: 20px;
  }
  #about .about-text p {
    font-weight: 500;
    font-size: 13px;
  }
  #about .about-text .about-bar {
    margin-top: 0rem;
  }
  #customer .customers-icon-group-one {
    right: 79.9rem !important;
  }
  #customer .customers-icon-group-two {
    left: 83.4rem !important;
  }
  #customer .customers-icon-group-three {
    right: 33rem !important;
  }
  #customer .customers-text {
    top: 22rem;
  }
}

/****************  Mobile version style ************ *********/
#mobile-header {
  width: 100%;
  position: fixed;
  background: transparent;
  z-index: 10;
}
#mobile-home {
  width: 100%;
  height: auto;
  margin-top: 25%;
}
#mobile-header .mobile-header {
  padding-top: 4%;
  padding-left: 7%;
  padding-right: 7%;
  padding-bottom: 4%;
}
#mobile-header .mobile-header .mobile-hambergur {
  width: 50px;
  height: auto;
}
#mobile-header .mobile-header .mobile-hambergur ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  width: 100%;
  height: 100%;
}
#mobile-header .mobile-header .mobile-hambergur ul li:nth-child(1) {
  width: 13px;
  height: 3px;
  background: #fff;
  border-radius: 25px;
  margin-bottom: 5px;
}
#mobile-header .mobile-header .mobile-hambergur ul li:nth-child(2) {
  width: 30px;
  height: 3px;
  background: #fff;
  border-radius: 25px;
  margin-bottom: 5px;
}
#mobile-header .mobile-header .mobile-hambergur ul li:nth-child(3) {
  width: 13px;
  height: 3px;
  background: #fff;
  border-radius: 25px;
  margin-left: 16px;
}
#mobile-home .hero-text,
.hero-contact-us {
  padding: 0% 7%;
}

#mobile-home .hero-text {
  width: 31%;
  margin-top: 10%;
}
#mobile-home .hero-text h1 {
  font-weight: 500;
  font-size: 32px;
  line-height: 30px;
  letter-spacing: 0.05em;
  text-transform: capitalize;
  color: #ffffff;
}
#mobile-home .hero-contact-us {
  font-weight: 400;
  font-size: 15px;
  line-height: 24px;
  text-transform: uppercase;
  color: #ffffff;
  margin-bottom: 4%;
}
#mobile-home .hero-contact-us img {
  display: inline-block;
  width: 4%;
  margin-left: 3%;
}
#mobile-home .mobile-hero-video {
  width: 100vw;
  height: 46vh;
}
#mobile-home .mobile-hero-video video {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
}
#mobile-home .lower-section {
  padding: 7% 7% 7% 7%;
}
#mobile-home .home-start-project a {
  font-weight: 600;
  font-size: 15px;
  line-height: 22px;
  text-transform: uppercase;
  text-decoration: none;
  color: #ffffff;
}
#mobile-home .home-language a:nth-child(1) {
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  text-decoration: none;
  color: #ffffff;
  margin-right: 5px;
}
#mobile-home .home-language a:nth-child(2) {
  font-weight: 500;
  font-size: 15px;
  line-height: 22px;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  text-decoration: none;
  color: #888888;
}

/*********** Mobile customers *************** */
#mobile-customers .customer-text {
  padding: 7% 7% 0% 7%;
}
#mobile-customers .customer-text h2 {
  font-weight: 600;
  font-size: 16px;
  line-height: 35px;
  width: 214px;
  text-transform: capitalize;
  color: #ffffff;
}
#mobile-customers .customer-text h2 span {
  font-weight: 600;
  font-size: 32px;
  line-height: 35px;
  text-transform: capitalize;
  color: #8f00ff;
  margin-right: 5%;
}
#mobile-customers .customer-text p {
  font-weight: 300;
  font-size: 12px;
  line-height: 25px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
}
#mobile-customers .customer-gallery {
  padding: 0% 7% 7% 7%;
}

/********* mobile case study styles ******/
#mobile-caseStudy {
  padding: 5%;
}
#mobile-caseStudy .caseStudy-text {
}
#mobile-caseStudy .caseStudy-text h1 {
  font-weight: 600;
  font-size: 26px;
  line-height: 40px;
  text-transform: capitalize;
  color: #ffffff;
}
#mobile-caseStudy .caseStudy-text p {
  font-weight: 300;
  width: 200px;
  font-size: 12px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;

  color: #ffffff;
}
#mobile-caseStudy .caseStudy-text a {
  font-weight: 400;
  font-size: 12px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
}
#mobile-caseStudy .mob-casestudy-carousel {
  margin-top: 10%;
  transform: translateX(17%);
}

/************ mobile clients styles ***********/
#mobile-client {
  padding: 7%;
}

#mobile-client h1 {
  width: 140px;
  font-weight: 500;
  font-size: 26px;
  line-height: 25px;
  color: #ffffff;
}
#mobile-client .client-details {
  margin: 7% 0 0% 0;
  font-weight: 500;
  font-size: 13px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #ffffff;
}
#mobile-client .mob-client-img {
  height: 172px;
}
#mobile-client .mob-client-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#mobile-client .client-comment p {
  font-weight: 300;
  font-size: 12px;
  line-height: 16px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: rgba(255, 255, 255, 0.8);
  margin-top: 5%;
}

/********* mobile media *********/
#mobile-media {
  padding: 7%;
  margin-top: 10%;
}
#mobile-media h1 {
  width: 136px;
  font-weight: 500;
  font-size: 26px;
  line-height: 25px;
  color: #ffffff;
  margin-bottom: 8%;
}
#mobile-media .mob-media-text {
  font-weight: 300;
  font-size: 12px;
  line-height: 15px;
  letter-spacing: 0.04em;
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 8%;
}

#mobile-media .mob-media-img {
  height: 350px;
  margin-bottom: 10%;
}
#mobile-media .mob-media-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
#mobile-media .mob-client-start-project {
}
#mobile-media .mob-client-start-project a {
  font-weight: 600;
  font-size: 15px;
  line-height: 18px;
  letter-spacing: 0.04em;
  text-transform: capitalize;
  color: #8f00ff;
  display: block;
  text-decoration: none;
  margin-bottom: 5%;
}
#mobile-media .mob-client-start-project p {
  font-weight: 300;
  font-size: 12px;
  line-height: 15px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
  width: 82%;
}

/********* about us **************/
#mobile-aboutus {
  padding: 7%;
  margin-top: 5%;
}
#mobile-aboutus h1 {
  font-weight: 500;
  font-size: 26px;
  line-height: 39px;
  color: #ffffff;
}
#mobile-aboutus .aboutus-img {
  height: 150px;
  width: 100%;
  margin-bottom: 5%;
}
#mobile-aboutus .aboutus-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
#mobile-aboutus .aboutus-progressbar {
}
#mobile-aboutus .aboutus-scrollbox {
  width: 100%;
  height: 500px;
  overflow-y: scroll;
  text-align: left;
}
#mobile-aboutus .aboutus-scrollbox::-webkit-scrollbar {
  display: none;
}
#mobile-aboutus .aboutus-scrollbox .scroll-item {
  padding: 5% 0 5% 0;
  border-top: 1px solid #fafafa;
}
#mobile-aboutus .aboutus-scrollbox .scroll-item h4 {
  font-weight: 500;
  font-size: 18px;
  line-height: 180%;
  color: #fff;
}
#mobile-aboutus .aboutus-scrollbox .scroll-item:nth-child(1) h4 {
  color: #8f00ff;
}
#mobile-aboutus .aboutus-scrollbox .scroll-item p {
  font-weight: 300;
  font-size: 12px;
  line-height: 15px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
}

/********** contact page ******/

#mobile-contact {
  padding: 7%;
}
#mobile-contact h1 {
  font-weight: 500;
  font-size: 25px;
  line-height: 35px;
  color: #ffffff;
  width: 233px;
  margin-top: 10%;
}
#mobile-contact .lets-talk {
  margin: 10% 0 10% 0;
}

#mobile-contact .lets-talk a {
  border: 1px solid #ffffff;
  border-radius: 30px;
  width: 160px;
  background: transparent;
}
#mobile-contact .mob-contact-product {
}
#mobile-contact .mob-contact-product h5 {
  font-weight: 500;
  font-size: 20px;
  line-height: 138%;
  color: #eeeeee;
}
#mobile-contact .mob-contact-product ul {
  margin: 10% 0;
  padding: 0;
  list-style-type: none;
}
#mobile-contact .mob-contact-product ul li {
  font-weight: 400;
  font-size: 15px;
  line-height: 172%;
  margin-top: 5%;
  color: #acafb8;
}
#mobile-contact .mob-contact-product p:nth-of-type(1) {
  font-weight: 300;
  font-size: 13px;
  line-height: 20px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
}
#mobile-contact .mob-contact-product p:nth-of-type(2) {
  font-weight: 200;
  font-size: 10px;
  line-height: 14px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
}
#mobile-contact .mob-contact-product p:nth-of-type(2) img {
}
#mobile-contact .company {
}
#mobile-contact .mob-contact-company h5 {
  font-weight: 500;
  font-size: 20px;
  line-height: 138%;
  color: #eeeeee;
}
#mobile-contact .mob-contact-company ul {
  padding: 0;
  list-style-type: none;
}
#mobile-contact .mob-contact-company ul li a {
  font-weight: 400;
  font-size: 15px;
  line-height: 172%;
  margin-top: 5%;
  color: #acafb8;
  display: inline-block;
  text-decoration: none;
}
#mobile-contact .mob-contact-company p:nth-of-type(1) {
  font-weight: 300;
  font-size: 13px;
  line-height: 20px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
}
#mobile-contact .mob-contact-company p:nth-of-type(2) {
  font-weight: 200;
  font-size: 10px;
  line-height: 14px;
  letter-spacing: 0.04em;
  color: #d0d4ea;
  margin-top: 20%;
}
#mobile-contact .mob-contact-company p:nth-of-type(2) img {
}
#mobile-contact .mob-social-icon {
  margin-top: 5%;
}
#mobile-contact .mob-social-icon ul {
  list-style-type: none;
  display: flex;
  justify-content: center;
  margin: 0;
  padding: 0;
  width: 100%;
  margin-bottom: 5%;
}
#mobile-contact .mob-social-icon ul li {
  margin: 0 0;
}
#mobile-contact .mob-social-icon ul li a img {
  width: 40px;
  height: 40px;
}
#mobile-contact .all-right {
  font-weight: 400;
  font-size: 13px;
  line-height: 172%;
  letter-spacing: -0.05em;
  font-feature-settings: "salt" on, "liga" off;
  color: #acafb8;
  text-align: center;
}

/********** Mobile Case  */

@media screen and (min-width: 429px) {
  #mobile-home,
  #mobile-customers,
  #mobile-caseStudy,
  #mobile-header,
  #mobile-client,
  #mobile-media,
  #mobile-aboutus,
  #mobile-contact,
  #mobile-start-project {
    display: none;
  }
}
</style>


