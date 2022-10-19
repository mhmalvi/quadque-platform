//change category option in category page
function changeCategory(domObj) {
    $(".project-menu-list ul li a").each(function () {
        $(this).removeClass("category_list_active");
    });
    const category = $(domObj);
    $(category).addClass("category_list_active");
    let type = $(category).attr("type");
    if (type == "ui") {
        $(".category-heading").text("ui/ux");
        $(".category-details").text(
            ` Outstanding visuals and aesthetic designs to take your brand to the next level.`
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/category_bg.png)"
        );
    }
    if (type == "web") {
        $(".category-heading").text("web development");
        $(".category-details").text(
            `Custom web development to represent your business and increase user engagement. `
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/web-development.png)"
        );
    }
    if (type == "dm") {
        $(".category-heading").text("digital marketing");
        $(".category-details").text(
            `Trending digital strategies to make a powerful and lasting impact on your target market. `
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/digital-marketing.png)"
        );
    }
    if (type == "ad") {
        $(".category-heading").text("app development");
        $(".category-details").text(
            `Intuitively designed mobile applications for a more appreciative user interaction.  `
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/app-development.png)"
        );
    }
    if (type == "ai") {
        $(".category-heading").text("ai & iot solutions");
        $(".category-details").text(
            `The latest Artificial Intelligence (AI) and Internet of Things (IOT) solutions for highly precise automation. `
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/ai-iot-solution.png)"
        );
    }
    if (type == "sd") {
        $(".category-heading").text("software development");
        $(".category-details").text(
            `Customised software packages to put your unique ideas and business dreams into action. `
        );
        $(".category-bg").css(
            "background-image",
            "url(/images/ai-iot-solution.png)"
        );
    }
}

//change project services option in start project page
function changeProject(domObj) {
    //get the dom object
    const projectCategory = $(domObj);

    //remove active styles from others list
    $(".start-project-list li a").each(function () {
        $(this).removeClass("project-menu-list-active");
    });
    //hide all services initially
    $(".project-services").each(function () {
        $(this).css("display", "none");
    });

    //add active styles
    $(projectCategory).addClass("project-menu-list-active");
    let type = $(projectCategory).attr("type");

    if (type == "ux") {
        //show all ux services
        $(".ux").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "dm") {
        //show all digital marketing services
        $(".dm").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "web") {
        //show all web services
        $(".web").each(function () {
            $(this).css("display", "block");
        });
    }

    if (type == "ai") {
        //show all web services
        $(".ai").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "ad") {
        //show all web services
        $(".ad").each(function () {
            $(this).css("display", "block");
        });
    }
}
function showMenuMobile() {
    $("#mobile-menu").toggleClass("showMenuMobile");
    let menuTop = $(".main-content").scrollTop();
    if (menuTop != 0) {
        $("#mobile-menu").css("top", menuTop - 105);
        //$(".mob-menu-item").css("margin-top", "15%");
    }

    $("#mobile-home").toggleClass("hideOtherSection");
    $("#mobile-customers").toggleClass("hideOtherSection");
    $("#mobile-caseStudy").toggleClass("hideOtherSection");
    $("#mobile-client").toggleClass("hideOtherSection");
    $("#mobile-media").toggleClass("hideOtherSection");
    $("#mobile-aboutus").toggleClass("hideOtherSection");
    $("#mobile-contact").toggleClass("hideOtherSection");
    $("#mobile-start-project").toggleClass("hideOtherSection");
    $("#mobile-blogs").toggleClass("hideOtherSection");
    $("#mobile-career").toggleClass("hideOtherSection");
    $("#mobile-gallery").toggleClass("hideOtherSection");
    $("#mobile-team").toggleClass("hideOtherSection");
    $("#faq").toggleClass("hideOtherSection");
    $("#mobile-service").toggleClass("hideOtherSection");
    $("#mobile-service-detail").toggleClass("hideOtherSection");
}
function showBlogMobile() {
    console.log("blog");
    $("#mobile-blog-details").toggleClass("showBlogMobile");
    let Top = $(".main-content").scrollTop();

    $("#mobile-blog-details").css("top", Top - 190);
}

function showNext(cusobj) {
    $(cusobj).carousel.next();
}

// show mobile project category
function mobProjectStartMenu(myDom) {
    const projectType = $(myDom);

    $(".mob-start-project-menu ul li a").each(function () {
        $(this).removeClass("active-service");
    });

    $(projectType).addClass("active-service");

    $(".m-project-services").each(function () {
        $(this).css("display", "none");
    });

    let type = $(projectType).attr("type");

    if (type == "m-ux") {
        //show all ux services
        $(".ux").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "m-dm") {
        //show all digital marketing services
        $(".m-dm").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "m-wd") {
        //show all web services
        $(".m-wd").each(function () {
            $(this).css("display", "block");
        });
    }

    if (type == "m-ai") {
        //show all web services
        $(".m-ai").each(function () {
            $(this).css("display", "block");
        });
    }
    if (type == "m-ad") {
        //show all web services
        $(".m-app-d").each(function () {
            $(this).css("display", "block");
        });
    }
}
//get all case study for mobile version
function getAllCaseStudy() {
    axios
        .get("/get/case-study/all/")
        .then((response) => {
            this.case_studies = response.data;
        })
        .catch((error) => {});
}
//show menu text after hover

function hideMenu() {
    $("#menu").hide();
    $("#menu").css("transition", "all 10s");
    $("#menu").css("position", "relative");
    $("#menu").css("top", "0%");
    $("#menu").css("z-index", "-1");
}
function blogTextShow(str) {
    $(".blog-text").html(str);
}

function showBlog(id) {
    $("#fullpage").css("display", "none");

    axios
        .get("/get/blog/" + id)
        .then((response) => {
            console.log(response.data);
            blog = response.data.blog;
            blogs = response.data.moreblogs;
            blogDate = response.data.blogDate;

            $("#blog-details .date").css("display", "block");
            $("#blog-details .blog-content").css("display", "block");
            $("#blog-details .see-more").css("display", "block");

            $("#blog-details").scrollTop(0);
            $(".blogDate").text(blogDate);
            $(".blog-title").text(blog.title);
            $(".blog-text").html(blog.text);
            $(".other-blog-inner-section").html(blogs);

            // this.blogTextShow(this.blog.text);
            // this.seeMore = 1;

            $("#blog-details").css("display", "block");
            $("#blog-details").css("transition", "all 2s");
            $("#blog-details").css("position", "absolute");
            $("#blog-details").css("top", "0");
            $("#blog-details").css("z-index", "10");
        })
        .catch((error) => {});
}

//get the more blogs when clciking Read More and See More button
function seeMoreBlog() {
    axios
        .get("/see/more/blog/")
        .then((response) => {
            $("#blog-details .date").css("display", "none");
            $("#blog-details .blog-content").css("display", "none");
            $("#blog-details .see-more").css("display", "none");

            let blogs = response.data.moreblogs;
            $(".other-blog-inner-section").html(blogs);

            $("#blog-details").css("display", "block");
            $("#blog-details").css("transition", "all 2s");
            $("#blog-details").css("position", "absolute");
            $("#blog-details").css("top", "0");
            $("#blog-details").css("z-index", "10");
        })
        .catch((error) => {});
}
function moreUserCase() {
    $("#caseStudy")
        .find(".case-study-box")
        .css("transition", "all 1s")
        .css("transform", "rotateY(360deg)");

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
}

//show the menu largely after hover

function showMenuText(str) {
    $(".showMenuText")
        .css("opacity", "1")
        .css("visibility", "visible")
        .css("text-transform", "uppercase")
        .css("transition", "opacity 1.5s, visibility 1.5s");
    $(".showMenuText").text(str);
}

function hideMenuText() {
    $(".showMenuText").css("opacity", "0").css("visibility", "hidden");
}
