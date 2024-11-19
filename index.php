<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Awaiken" />
  <!-- Page Title -->
  <title>Deck Point - Home</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/Logo/header3.png" />
  <!-- Google Fonts Css-->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Unbounded:wght@200..900&amp;display=swap"
    rel="stylesheet" />
  <!-- Bootstrap Css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <!-- SlickNav Css -->
  <link href="css/slicknav.min.css" rel="stylesheet" />
  <!-- Swiper Css -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <!-- Font Awesome Icon Css-->
  <link href="css/all.css" rel="stylesheet" media="screen" />
  <!-- Animated Css -->
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Magnific Popup Core Css File -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <!-- Mouse Cursor Css File -->
  <link rel="stylesheet" href="css/mousecursor.css" />
  <!-- Main Custom Css -->
  <link href="css/custom.css" rel="stylesheet" media="screen" />

  <style>
    .opacityClass {
      opacity: 0.5;
    }

    /* Preloader styling */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #39d5ff;
      /* White background */
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      /* Ensure it overlays the content */
    }

    /* Larger Logo with optional animation */
    .loading-logo {
      width: 400px;
      /* Increased logo size */
      height: auto;
      /* Maintains aspect ratio */
      animation: bounce 2s infinite ease-in-out;
      /* Bouncing animation */
    }

    /* Bouncing animation */
    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-100px);
        /* Adjust the height of the bounce */
      }
    }
  </style>

</head>

<body>
  <!-- Preloader Start -->
  <div class="preloader">
    <div class="loading-container1">
      <img class="loading-logo" src="images/Logo/trans1.png" alt="Logo" />
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Navbar Start -->
  <header class="main-header">
    <div class="header-sticky">
      <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <!-- Logo Start -->
          <a class="navbar-brand" href="index.php">
            <img src="images/Logo/header4.png" alt="Logo" width="60px" />
          </a>
          <!-- Logo End -->

          <!-- Main Menu Start -->
          <div class="collapse navbar-collapse main-menu">
            <div class="nav-menu-wrapper">
              <ul class="navbar-nav mr-auto" id="menu">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="project.php">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="story.php">Our Story</a>
                </li>
                <!-- <li class="nav-item submenu">
                                <a class="nav-link" href="#">Pages</a>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="service-single.php">Service Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog-single.php">Blog Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="project-single.php">Project Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="case-study.php">Case Study</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="case-study-single.php">Case Study Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="team.php">Our Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="team-single.php">Team Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="testimonial.php">Testimonial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="faqs.php">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="404.php">404</a>
                                    </li>
                                </ul>
                            </li> -->
                <li class="nav-item highlighted-menu">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
            </div>
            <!-- Let’s Start Button Start -->
            <div class="header-btn d-inline-flex">
              <a href="contact.php" class="btn-default">contact us</a>
            </div>
            <!-- Let’s Start Button End -->
          </div>
          <!-- Main Menu End -->
          <div class="navbar-toggle"></div>
        </div>
      </nav>
      <div class="responsive-menu"></div>
    </div>
  </header>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <div class="hero hero-video">
    <!-- Video Start -->
    <div class="hero-bg-video">
      <!-- Selfhosted Video Start -->
      <video autoplay muted loop id="myVideo">
        <source src="https://demo.awaikenthemes.com/assets/videos/brixo-video.mp4" type="video/mp4" />
      </video>


    </div>
    <!-- Video End -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <!-- Hero Content Start -->
          <div class="hero-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">welcome to builtup</h3>
              <h1 class="text-anime-style-3" data-cursor="-opaque">
                Building dreams with Builtup
              </h1>
            </div>
            <!-- Section Title End -->

            <!-- Hero Content Body Start -->
            <div class="hero-content-body wow fadeInUp" data-wow-delay="0.24s">
              <a href="contact.php" class="btn-default">contact now</a>
              <a href="project.php" class="btn-default btn-border">view Projects</a>
            </div>
            <!-- Hero Content Body End -->
          </div>
          <!-- Hero Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Section End -->

  <!-- Our Services Section Start -->
  <div class="our-services">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-8">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">services</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">
              A Full Range of Expert Solutions
            </h2>
          </div>
          <!-- Section Title End -->
        </div>

        <div class="col-lg-4">
          <!-- Section Btn Start -->
          <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
            <a href="service.php" class="btn-default">view all services</a>
          </div>
          <!-- Section Btn End -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp">
            <div class="icon-box">
              <img src="images/icon-services-1.svg" alt="" />
            </div>
            <div class="service-content">
              <h3>building construction</h3>
              <p>
                We offer quality building construction services with
                innovative solutions, ensuring timely completion and
                functional, aesthetically pleasing structures.
              </p>
            </div>
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
            <div class="icon-box">
              <img src="images/icon-services-3.svg" alt="" />
            </div>
            <div class="service-content">
              <h3>general contracting</h3>
              <p>
                We offer quality building construction services with
                innovative solutions, ensuring timely completion and
                functional, aesthetically pleasing structures.
              </p>
            </div>
          </div>
          <!-- Service Item End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Service Item Start -->
          <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
            <div class="icon-box">
              <img src="images/icon-services-3.svg" alt="" />
            </div>
            <div class="service-content">
              <h3>new home construction</h3>
              <p>
                We offer quality building construction services with
                innovative solutions, ensuring timely completion and
                functional, aesthetically pleasing structures.
              </p>
            </div>
          </div>
          <!-- Service Item End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Our Services Section End -->

  <!-- About Us Section Start -->
  <div class="about-us">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-8">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">about us</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">
              Your Trusted Partner in Construction Excellence
            </h2>
          </div>
          <!-- Section Title End -->
        </div>

        <div class="col-lg-4">
          <!-- Section Btn Start -->
          <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
            <a href="about.php" class="btn-default">about us</a>
          </div>
          <!-- Section Btn End -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7">
          <!-- About Content Start -->
          <div class="about-content wow fadeInUp">
            <p>
              We specialize in a wide range of construction services,
              including residential, commercial, and industrial projects. From
              initial design to final inspection, we work closely with our
              clients to understand their unique needs and vision.
            </p>
          </div>
          <!-- About Content End -->
        </div>

        <div class="col-lg-5">
          <!-- About List Start -->
          <div class="about-list wow fadeInUp" data-wow-delay="0.25s">
            <ul>
              <li>Unmatched Expertise with Decades of Experience</li>
              <li>Commitment to Quality and Precision</li>
              <li>Sustainable and Responsible Building Practices</li>
            </ul>
          </div>
          <!-- About List End -->
        </div>

      </div>
    </div>
  </div>
  <!-- About Us Section End -->

  <!-- Why Choose Us Section Start -->
  <div class="why-choose-us">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-9">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">why choose us</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">
              Why we're your best choice
            </h2>
          </div>
          <!-- Section Title End -->
        </div>

        <div class="col-lg-3">
          <!-- Section Btn Start -->
          <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
            <a href="contact.php" class="btn-default">contact now</a>
          </div>
          <!-- Section Btn End -->
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6">
          <!-- Why Choose Image Start -->
          <div class="why-choose-image">
            <figure class="image-anime ">
              <img src="images/why.png" alt="" />
            </figure>
          </div>
          <!-- Why Choose Image End -->
        </div>

        <div class="col-lg-6">
          <!-- Why Choose Content Start -->
          <div class="why-choose-content">
            <!-- Why Choose Item Start -->
            <div class="why-choose-item wow fadeInUp">
              <h3><span>01. </span>comprehensive services</h3>
              <p>
                Offering comprehensive solar services, from installation to
                maintenance, ensuring efficient, eco-friendly energy
                solutions.
              </p>
            </div>
            <!-- Why Choose Item End -->

            <!-- Why Choose Item Start -->
            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
              <h3><span>02. </span>Innovative Building Techniques</h3>
              <p>Leveraging innovative construction technologies to create sustainable, efficient, and durable
                structures.
              </p>
            </div>
            <!-- Why Choose Item End -->

            <!-- Why Choose Item Start -->
            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
              <h3><span>03. </span>transparent communication</h3>
              <p>
                Committed to transparent communication, we ensure clarity and
                trust throughout your entire solar journey.
              </p>
            </div>
            <!-- Why Choose Item End -->
          </div>
          <!-- Why Choose Content End -->
        </div>
      </div>
    </div>

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
      <!-- Scrolling Ticker Start -->
      <div class="scrolling-ticker-box">
        <div class="scrolling-content">
          <span>Experience You Can Trust</span>
          <span>Innovative Solutions</span>
          <span>Safety and Integrity</span>
          <span>Unmatched Expertise</span>
        </div>

        <div class="scrolling-content">
          <span>Experience You Can Trust</span>
          <span>Innovative Solutions</span>
          <span>Safety and Integrity</span>
          <span>Unmatched Expertise</span>
        </div>
      </div>
    </div>
    <!-- Scrolling Ticker Section End -->
  </div>
  <!-- Why Choose Us Section End -->

  <!-- Our Project Section Start -->
  <div class="our-project">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-8">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">our project</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">
              Explore our diverse range of projects
            </h2>
          </div>
          <!-- Section Title End -->
        </div>

        <div class="col-lg-4">
          <!-- Section btn Start -->
          <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
            <a href="project.php" class="btn-default btn-highlighted">view all project</a>
          </div>
          <!-- Section btn End -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <!-- Project Item Start -->
          <div class="project-item wow fadeInUp">
            <!-- Project Image Start -->
            <div class="project-image">
              <!-- <a href="project-single.php" class="image-anime" data-cursor-text="View"> -->
              <figure>
                <img src="images/project22.png" alt="" />
              </figure>
              <!-- </a> -->
            </div>
            <!-- Project Image End -->

            <!-- Project Content Start -->
            <div class="project-content">
              <h3>Shanti Heights</h3>
              <!-- <p>
                Our post-construction services gives you peace of mind
                knowing.
              </p> -->
            </div>
            <!-- Project Content End -->

            <!-- Project Button Start -->
            <div class="project-btn">
              <a href="project-single.php"><img src="images/arrow-white.svg" alt="" /></a>
            </div>
            <!-- Project Button End -->
          </div>
          <!-- Project Item End -->
        </div>

        <div class="col-md-6">
          <!-- Project Item Start -->
          <div class="project-item wow fadeInUp" data-wow-delay="0.25s">
            <!-- Project Image Start -->
            <div class="project-image">
              <!-- <a href="project-single.php" class="image-anime" data-cursor-text="View"> -->
              <figure>
                <img src="images/project11.png" alt="" />
              </figure>
              <!-- </a> -->
            </div>
            <!-- Project Image End -->

            <!-- Project Content Start -->
            <div class="project-content">
              <h3>Dev Villa</h3>
              <!-- <p>
                Our post-construction services gives you peace of mind
                knowing.
              </p> -->
            </div>
            <!-- Project Content End -->

            <!-- Project Button Start -->
            <div class="project-btn">
              <a href="project-single.php"><img src="images/arrow-white.svg" alt="" /></a>
            </div>
            <!-- Project Button End -->
          </div>
          <!-- Project Item End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Our Project Section End -->

  <!-- Industry Archivement Section Start -->
  <div class="industry-archivement">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-9">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">did you know?</h3>
            <h2 class="text-anime-style-3" data-cursor="-opaque">
              Eye-Opening Facts About the Construction Industry
            </h2>
          </div>
          <!-- Section Title End -->
        </div>

        <div class="col-lg-3">
          <!-- Industry Contact Circle Start -->
          <div class="industry-contact-circle">
            <img src="images/logo/header4.png" alt="" />
          </div>
          <!-- Industry Contact Circle End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Industry Archivement Section End -->

  <!-- What We Do Section Start -->
  <div class="what-we-do">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-lg-6">
          <!-- What We Content Start -->
          <div class="what-we-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">what we do</h3>
              <h2 class="text-anime-style-3" data-cursor="-opaque">
                Get premium industrial services
              </h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">
                Get premium industrial services tailored to your needs,
                offering expert solutions in maintenance, engineering, and
                safety. Our team ensures top-quality performance, efficiency,
                and reliability for all your industrial operations.
              </p>
            </div>
            <!-- Section Title End -->

            <!-- What We Body Start -->
            <div class="what-we-body">
              <!-- What We Item Start -->
              <div class="what-we-item wow fadeInUp" data-wow-delay="0.5s">
                <div class="icon-box">
                  <img src="images/icon-what-we-do-1.svg" alt="" />
                </div>
                <div class="what-we-item-content">
                  <h3>building construction</h3>
                  <p>
                    Expert building construction And services, delivering
                    quality.
                  </p>
                </div>
              </div>
              <!-- What We Item End -->

              <!-- What We Item Start -->
              <div class="what-we-item wow fadeInUp" data-wow-delay="0.5s">
                <div class="icon-box">
                  <img src="images/icon-what-we-do-2.svg" alt="" />
                </div>
                <div class="what-we-item-content">
                  <h3>painting and coating</h3>
                  <p>
                    Professional painting and coating services for durable,
                    flawless.
                  </p>
                </div>
              </div>
              <!-- What We Item End -->
            </div>
            <!-- What We Body End -->

            <!-- What We Button Start -->
            <div class="what-we-btn wow fadeInUp" data-wow-delay="0.75s">
              <a href="contact.php" class="btn-default btn-highlighted">contact now</a>
            </div>
            <!-- What We Button End -->
          </div>
          <!-- What We Content End -->
        </div>

        <div class="col-lg-6">
          <!-- What We Image Start -->
          <div class="what-we-image">
            <figure>
              <img src="images/what-we-do-image.jpg" alt="" />
            </figure>
          </div>
          <!-- What We Image End -->
        </div>
      </div>
    </div>
  </div>
  <!-- What We Do Section End -->

  <!-- CTA Box Section Start -->
  <div class="cta-box">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <!-- CTA Box Content Start -->
          <div class="cta-box-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">Need help?</h3>
              <h2 class="text-anime-style-3" data-cursor="-opaque">
                Let's build something great together !
              </h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">
                Don't wait any longer to bring your construction dreams to
                life. Partner with Builtup and experience unparalleled service
                and quality.
              </p>
            </div>
            <!-- Section Title End -->

            <!-- Section Btn Start -->
            <div class="section-btn">
              <a href="contact.php" class="btn-default">get free quote</a>
            </div>
            <!-- Section Btn End -->

            <!-- CTA Experience Circle Start -->
            <div class="cta-experience-circle">
              <img src="images/cta-experience-circle.svg" alt="" />
            </div>
            <!-- CTA Experience Circle End -->
          </div>
          <!-- CTA Box Content End -->
        </div>

        <div class="col-lg-5">
          <!-- CTA Box Image Start -->
          <div class="cta-box-image">
            <img src="images/man.png" alt="" />
          </div>
          <!-- CTA Box Image End -->
        </div>
      </div>
    </div>
  </div>
  <!-- CTA Box Section End -->

  <!-- Our FAQs Section Start -->
  <div class="our-faqs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- Our FAQs Content Start -->
          <div class="our-faqs-content">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">faq</h3>
              <h2 class="text-anime-style-3" data-cursor="-opaque">
                Frequently asked questions
              </h2>
              <p class="wow fadeInUp" data-wow-delay="0.25s">
                We specialize in a wide range of construction services,
                including residential, commercial, and industrial projects.
              </p>
            </div>
            <!-- Section Title End -->

            <!-- Section Btn Start -->
            <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
              <a href="contact.php" class="btn-default">contact now</a>
            </div>
            <!-- Section Btn End -->
          </div>
          <!-- Our FAQs Content End -->
        </div>

        <div class="col-lg-6">
          <div class="our-faq-section">
            <!-- FAQ Accordion Start -->
            <div class="faq-accordion" id="faqaccordion">
              <!-- FAQ Item Start -->
              <div class="accordion-item wow fadeInUp">
                <h2 class="accordion-header" id="heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    What services do you offer?
                  </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                  data-bs-parent="#faqaccordion">
                  <div class="accordion-body">
                    <p>
                      We provide comprehensive construction solutions, including planning, building, and maintenance.
                    </p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item End -->

              <!-- FAQ Item Start -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Do you work on both residential and commercial projects?
                  </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                  data-bs-parent="#faqaccordion">
                  <div class="accordion-body">
                    <p>
                      Yes, we handle both residential and commercial construction projects.
                    </p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item End -->

              <!-- FAQ Item Start -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3"
                    aria-expanded="false" aria-controls="collapse3">
                    Do you offer a free, no obligation quotation?
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="heading3"
                  data-bs-parent="#faqaccordion">
                  <div class="accordion-body">
                    <p>
                      Our post-construction services gives you peace of mind
                      knowing that we are still here for you even after.
                    </p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item End -->

              <!-- FAQ Item Start -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    Do you provide post-construction support?
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                  data-bs-parent="#faqaccordion">
                  <div class="accordion-body">
                    <p>
                      Yes, we provide ongoing maintenance and support to ensure your project remains in excellent
                      condition even after completion.
                    </p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item End -->

              <!-- FAQ Item Start -->
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="heading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Do you use sustainable materials?
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                  data-bs-parent="#faqaccordion">
                  <div class="accordion-body">
                    <p>
                      Yes, we prioritize eco-friendly and sustainable construction practices.
                    </p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item End -->
            </div>
            <!-- FAQ Accordion End -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Our FAQs Section End -->



  <!-- Footer / script links start -->
  <!-- Footer Start -->
  <footer class="main-footer">
    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
      <!-- Scrolling Ticker Start -->
      <div class="scrolling-ticker-box">
        <div class="scrolling-content">
          <span>Deck point</span>
          <span>Deck point</span>
          <span>Deck point</span>
          <span>Deck point</span>
        </div>

        <div class="scrolling-content">
          <span>Deck point</span>
          <span>Deck point</span>
          <span>Deck point</span>
          <span>Deck point</span>
        </div>
      </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-3 col-6">
          <!-- Footer Links Start -->
          <div class="footer-links">
            <h3>follow us</h3>
            <ul>
              <li><a href="#">facebook</a></li>
              <li><a href="#">instagram</a></li>
              <li><a href="#">pinterest</a></li>
              <li><a href="#">twitter</a></li>
              <li><a href="#">linked in</a></li>
            </ul>
          </div>
          <!-- Footer Links End -->
        </div>

        <div class="col-lg-3 col-md-3 col-6">
          <!-- Footer Links Start -->
          <div class="footer-links">
            <h3>company</h3>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="service.php">Services</a></li>
              <li><a href="project.php">Projects</a></li>
              <li><a href="story.php">Our Story</a></li>
              <li><a href="contact.php">contact us</a></li>
            </ul>
          </div>
          <!-- Footer Links End -->
        </div>

        <div class="col-lg-3 col-md-3 col-7">
          <!-- Footer Links Start -->
          <div class="footer-links footer-contact-info">
            <h3>resources</h3>
            <p>+1 809 120 705</p>
            <p>info@deckpoint.com</p>
            <p>37 San Juan Graaf Florisstraat 22A,3021, NYK, US</p>
          </div>
          <!-- Footer Links End -->
        </div>

        <div class="col-lg-3 col-md-3 col-5">
          <!-- About Footer Start -->
          <div class="about-footer">
            <!-- Footer Logo Start -->
            <div class="footer-logo">
              <img src="images/Logo/footer-logo.png" alt="" />
            </div>
            <!-- Footer Logo End -->
          </div>
          <!-- About Footer End -->
        </div>
      </div>

      <!-- Footer Copyright Section Start -->
      <div class="footer-copyright">
        <div class="row align-items-center ">
          <div class="col-lg-12 col-md-12">
            <!-- Footer Copyright Start -->
            <div class="footer-copyright-text">
              <p>Copyright © 2024 All Rights Reserved.</p>
            </div>
            <!-- Footer Copyright End -->
          </div>

        </div>
      </div>
      <!-- Footer Copyright Section End -->
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Jquery Library File -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js file -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Validator js file -->
  <script src="js/validator.min.js"></script>
  <!-- SlickNav js file -->
  <script src="js/jquery.slicknav.js"></script>
  <!-- Swiper js file -->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- Counter js file -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Magnific js file -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- SmoothScroll -->
  <script src="js/SmoothScroll.js"></script>
  <!-- Parallax js -->
  <script src="js/parallaxie.js"></script>
  <!-- MagicCursor js file -->
  <script src="js/gsap.min.js"></script>
  <script src="js/magiccursor.js"></script>
  <!-- Text Effect js file -->
  <script src="js/SplitText.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <!-- YTPlayer js File -->
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Wow js file -->
  <script src="js/wow.js"></script>
  <!-- Main Custom js file -->
  <script src="js/function.js"></script>
  <!-- Footer / script links end -->

</body>


</html>