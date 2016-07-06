<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Hamish Irving - Product Designer</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//ajax.googleapis.com" rel="dns-prefetch">
    <link href="../assets/css/style.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i|Source+Serif+Pro:400,600" rel="stylesheet">

    <script src="../assets/components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <nav class="navbar" id="navbar" role="navigation">
      <div class="container">
        <div class="brand">
          <a href="/">
            <svg version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
               x="0px" y="0px" width="40px" height="50px" viewBox="0 0 40 50" style="enable-background:new 0 0 40 50;" class="logo" xml:space="preserve">
            <g>
              <defs>
                <path id="SVGID_1_" d="M14.9,19.9h10.2v9.9H14.9V19.9z M25.1,5H35v40h-9.9V5z M5,5h9.9v40H5V5z"/>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
              </clipPath>
              <rect style="clip-path:url(#SVGID_2_);" width="40" height="50"/>
            </g>
            </svg>
          </a>
        </div>
        <ul class="nav-links">
          <li><a href="../work" class="link highlight highlight-small">Work</a></li>
          <li><a href="../about" class="link highlight highlight-small">About</a></li>
          <li><a href="../contact" class="link highlight highlight-small">Contact</a></li>
        </ul>
      </div>
    </nav>

    <section class="hero" style="background: url('../assets/img/ph-hero.jpg'); background-size: cover; background-position: center center;"></section>

    <section class="section case">
      <div class="container">
        <div class="case-header">
          <h1 class="huge">Solving the parking crisis with the sharing economy</h1>
          <ul class="services">
            <li class="services-heading">Services</li>
            <li class="small">Branding</li>
            <li class="small">Mobile Design</li>
            <li class="small">Web Design</li>
          </ul>
          <div class="dates">
            <ul>
              <li class="services-heading">Dates</li>
              <li class="date">JUL 2013 - AUG 2015</li>
            </ul>
          </div>
        </div>
        <div class="body-copy">
          <h1 class="heading">Introduction</h1>
          <p><a class="link-body highlight highlight-small" href="http://www.parkhound.com.au" target="_blank">Parkhound</a> is an online car parking Marketplace based in Australia where Sellers make extra cash by listing their spare parking spaces and Buyers find cheap parking options in and around cities and suburbs.</p>
          <p>The service launched at the end of 2013 and has gained steady traction since, providing a valuable solution to the parking crisis in the country.</p>
          <figure class="figure9-3">
            <img src="../assets/img/ph-fine.jpg">
            <figcaption class="img-push-copy">Finding affordable car parking can be expensive business.</figcaption>
          </figure>
        </div>
        <div class="body-copy">
          <h1 class="heading">The Problem</h1>
          <p>Parking marketplaces were not a new idea, there were already implementations both in Australia and internationally. It was a good sign as competition helps validate that there is a market that can sustain a business.</p>
          <p>We created a MVP using a simple Shopify template which allowed us to upload listings. Meanwhile I designed a landing page for Parkhound to explain the proposition and direct users to the Shopify site.</p>
          <p>One feature we explored was a place where users could tell their parking horror stories, providing them a way to vent frustration while resonating with the problem we were solving.</p>
        </div>
        <div class="contained">
          <img src="../assets/img/ph-horror-stories.gif" alt="">
        </div>
        <div class="body-copy">
          <h1 class="heading">Branding</h1>
          <p>The goal was to really stand out from the competition, to create something that was personable and we could use to tell a story.</p>
          <p>After iterating through a number of parking related symbols, I felt that they were too generic and conceived the idea of using man’s best friend. This symbol helped us create some branded terminology for our users, who we always welcome to the ‘pack’.</p>
        </div>
        <div class="contained">
          <img src="../assets/img/ph-tweet.png" alt="">
        </div>
      </div>
      <figure class="full-bleed">
        <img src="../assets/img/ph-brand.jpg" alt="">
        <figcaption>Some of the elements from the Parkhound Brand Guidelines.</figcaption>
      </figure>
      <div class="container">
        <div class="body-copy">
          <h1 class="heading">Responsive Design</h1>
          <p>We knew the web app needed to be designed responsively so that it worked seamlessly across all devices. Booking parking spaces for long periods ahead of time translated well to desktop, however we wanted to encourage the behaviour of finding parking spaces in real time when on the move. This required a solution that worked equally well on mobile.</p>
          <figure class="figure9-3">
            <img src="../assets/img/ph-in-situ.jpg" alt="">
            <figcaption>It was essential that the service worked seamlessly on mobile.</figcaption>
          </figure>
        </div>
      </div>
      <div class="container">
        <div class="body-copy">
          <p>Initially this meant that I designed all screens at Desktop, Tablet and Mobile screen sizes, making sure that content was shifted and prioritised to meet the needs of the user on that device. However, I recognised that this wasn't a very efficient way of communicating designs to our developers. We needed to create components which could be designed once and re-used throughout the site, we needed to create a Style Guide.</p>
        </div>
      </div>
      <figure class="full-bleed">
        <img src="../assets/img/ph-responsive.jpg" alt="">
        <figcaption>All screens were designed for mobile, tablet and desktop.</figcaption>
      </figure>
      <div class="container">
        <div class="body-copy">
          <p>The Style Guide would be a living document, whose HTML structure, class naming conventions and css(sass) styles would be used to define the front-end of the app. It would be a single source of truth where developers could come to pick and choose components to make up the app flows. This way they could spend less time on the design and more on the functionality.</p>
        </div>
        <figure class="contained">
          <img src="../assets/img/ph-style-guide.jpg" alt="">
          <figcaption>I started developing a Living Style Guide.</figcaption>
        </figure>
      </div>
      <div class="container">
        <div class="body-copy">
          <h1 class="heading">Mapping the streets</h1>
          <p>An unprecidented feature to Parkhound is the ability to view Street Parking information in select cities, where you can look up the parking restrictions for specific parking signs ahead of time. This gives users information on when certain streets might be available to park for free, where disabled parking is located and the cost of parking at metered spots.</p>
          <p>Educating the user about the new feature was critical. When they first enable it on the Search Results page, a popup is displayed explaining the functionality.</p>
        </div>
        <figure class="contained">
          <div class="swiper-container swiper-contained">
            <div class="swiper-wrapper">
              <div class="swiper-slide swiper-contained-slide">
                <img src="../assets/img/ph-demo-slides.jpg" alt="">
              </div>
              <div class="swiper-slide swiper-contained-slide">
                <img src="../assets/img/ph-demo-slides-2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <figcaption>Introduction slides explaining the new functionality.</figcaption>
        </figure>
        <div class="body-copy">
          <h1 class="heading">Going native</h1>
          <p>It became important early on that we had a presence in the app store. Because the website had been designed to be responsive, we were able to take a hybrid approach and provide some native functionality while we developed a more robust set of API’s on the back-end. This way, any features that we hadn’t yet developed for iOS would call a web view in the app without degrading the user experience.</p>
        </div>
        <div class="iphone-section-wrapper">
          <figure class="iphone-section">
            <div class="iphone">
              <img src="../assets/img/iphone6.png" alt="" class="iphone-device">
              <div class="swiper-container iphone-screen">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background:url('../assets/img/ph-results-list.jpg') no-repeat; background-size: contain;"></div>
                  <div class="swiper-slide" style="background:url('../assets/img/ph-results-map.jpg') no-repeat; background-size: contain;"></div>
                  <div class="swiper-slide" style="background:url('../assets/img/ph-listing.jpg') no-repeat; background-size: contain;"></div>
                  <div class="swiper-slide" style="background:url('../assets/img/ph-listing-2.jpg') no-repeat; background-size: contain;"></div>
                  <div class="swiper-slide" style="background:url('../assets/img/ph-enquiry-success.jpg') no-repeat; background-size: contain;"></div>
                </div>
              </div>
              <div class="swiper-pagination-2"></div>
            </div>
            <figcaption>Users search for a park in their area, view the details and book.</figcaption>
          </figure>
        </div>
        <div class="body-copy">
          <p>The app is constantly receiving updates and becoming closer to feature parity with the website. The app was featured in the Australian App Store and has received more than 7,000 downloads.</p>
        </div>
        <figure class="contained">
          <img src="../assets/img/ph-featured.jpg" alt="">
          <figcaption>Best New App</figcaption>
        </figure>
      </div>
    </section>

    <section class="section case-previews">
      <div class="container">
        <div class="case-preview case-preview-sm">
          <a href="real-estate-tube">
            <div class="case-preview-img-wrap">
              <div class="case-preview-img" style="background: url('../assets/img/ret-hero.jpg'); background-size: cover; background-position: center center; ">
              </div>
            </div>
          </a>
          <div class="case-preview-text">
            <h1 class="heading"><a href="real-estate-tube" class="highlight">Use video to sell your property</a></h1>
            <p class="small">Case Study</p>
            <p class="read-time">3 min read</p>
          </div>
        </div>
        <div class="case-preview case-preview-lg">
          <a href="medopad">
            <div class="case-preview-img-wrap">
              <div class="case-preview-img" style="background: url('../assets/img/medo-hero.jpg'); background-size: cover; background-position: center center; ">
              </div>
            </div>
          </a>
          <div class="case-preview-text">
            <h1 class="heading"><a href="medopad" class="highlight">Better cancer management with connected devices</a></h1>
            <p class="small">Case Study</p>
            <p class="read-time">3 min read</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="section">
      <div class="container">
      <div class="copyright">
        <p>&copy; Hamish Irving 2016</p>
      </div>
        <ul class="social">
          <li><a href="https://twitter.com/HamishAIrving" target="_blank">
            <svg class="svg" version="1.1" x="0px" y="0px" width="30px" height="24.4px" viewBox="0 0 30 24.4" style="enable-background:new 0 0 30 24.4;" xml:space="preserve">
              <path d="M30,2.9c-1.1,0.5-2.3,0.8-3.5,1c1.3-0.8,2.2-2,2.7-3.4c-1.2,0.7-2.5,1.2-3.9,1.5C24.1,0.7,22.5,0,20.8,0c-3.4,0-6.2,2.8-6.2,6.2c0,0.5,0.1,1,0.2,1.4C9.7,7.3,5.1,4.9,2.1,1.1C1.6,2,1.3,3.1,1.3,4.2c0,2.1,1.1,4,2.7,5.1C3,9.3,2,9,1.2,8.6c0,0,0,0.1,0,0.1c0,3,2.1,5.5,4.9,6c-0.5,0.1-1.1,0.2-1.6,0.2c-0.4,0-0.8,0-1.2-0.1c0.8,2.4,3.1,4.2,5.7,4.3c-2.1,1.7-4.8,2.6-7.6,2.6c-0.5,0-1,0-1.5-0.1c2.7,1.7,6,2.8,9.4,2.8c11.3,0,17.5-9.4,17.5-17.5c0-0.3,0-0.5,0-0.8C28.1,5.2,29.2,4.1,30,2.9z"/>
            </svg>
          </a></li>
          <li><a href="https://www.instagram.com/hamishirving/" target="_blank">
            <svg class="svg" version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
            <path d="M19.3,12c0,4-3.2,7.3-7.3,7.3c-4,0-7.3-3.2-7.3-7.3c0-0.5,0-0.9,0.1-1.4H0v9.6C0,22.3,1.7,24,3.8,24h16.5
              c2.1,0,3.8-1.7,3.8-3.8v-9.6h-4.9C19.2,11.1,19.3,11.5,19.3,12z M20.2,0H3.8C1.7,0,0,1.7,0,3.8v4.1h6.1C7.4,6,9.6,4.7,12,4.7
              c2.4,0,4.6,1.2,5.9,3.1H24V3.8C24,1.7,22.3,0,20.2,0z M22.1,4.6c0,0.4-0.3,0.7-0.7,0.7h-2c-0.4,0-0.7-0.3-0.7-0.7v-2
              C18.7,2.3,19,2,19.4,2h2c0.4,0,0.7,0.3,0.7,0.7V4.6z M16.5,12c0-2.5-2-4.5-4.5-4.5c-2.5,0-4.5,2-4.5,4.5s2,4.5,4.5,4.5
              C14.5,16.5,16.5,14.5,16.5,12z"/>
            </svg>
          </a></li>
        </ul>
        <div class="about">
          <p>Built with<span>☕</span>power by me.</p>
        </div>
      </div>
    </footer>

    <script src="../assets/components/jquery/jquery.min.js"></script>
    <script src="../assets/js/swiper.jquery.min.js"></script>
    <script src="../assets/js/scripts.min.js"></script>

    <script>
    var swiper = new Swiper('.swiper-container', {
      initialSlide: 2,
      spaceBetween: 20,
      grabCursor: true,
      slideToClickedSlide: true,
      pagination: '.swiper-pagination-2'
    });
    </script>
    <script>
    var swiper = new Swiper('.swiper-contained', {
      speed: 700,
      grabCursor: true,
      autoplay: 3000,
      pagination: '.swiper-pagination'
    });
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

  </body>
</html>