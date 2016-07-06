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

    <section class="hero" style="background: url('../assets/img/medo-hero.jpg'); background-size: cover; background-position: center center;"></section>

    <section class="section case">
      <div class="container">
        <div class="case-header">
          <h1 class="huge">Better cancer management through connected devices</h1>
          <ul class="services">
            <li class="services-heading">Services</li>
            <li class="small">Watch Design</li>
            <li class="small">Mobile Design</li>
          </ul>
          <div class="dates">
            <ul>
              <li class="services-heading">Dates</li>
              <li class="date">MAY 2015 - JUN 2015</li>
            </ul>
          </div>
        </div>
        <div class="body-copy">
          <h1 class="heading">Introduction</h1>
          <p>I was recommended to Dan the CTO of <a class="link-body highlight highlight-small" href="http://www.medopad.com" target="_blank">Medopad</a> by a developer I had worked with on a previous project.</p>
          <p>Medopad are doing some really interesting things in healthcare by connecting hospitals and doctors directly to patients through the use of mobile technology.</p>
          <p>The company has always been quick to adopt new technology and my brief was to create an Apple Watch app to coincide with the first release of the Apple Watch in June 2015.</p>
          <h1 class="heading">The Problem</h1>
          <p>The ability to effectively manage cancer treatment relies heavily on strict drug regimens. These drugs can often cause adverse side-effects which result in the patient not adhering to their schedules and missing much needed medication.</p>
          <p>For patients, communicating these side-effects to doctors is a pain and unless a patient has a direct line of communication to their physician, the lapses in drug adherence can go unnoticed until the next hospital visit.</p>
          <h1 class="heading">Research</h1>
          <p>I use both iOS and Android devices in my day to day and I rely on that familiarity to make sure I am up to date with the current design patterns, navigation structures and interactions of each platform. However Apple Watch was a completely new device with no way to get my hands on one pre-release.</p>
          <p>A quick visit to the Apple website to read through the Apple Watch documentation allowed me to learn about the new features and design patterns.</p>
          <figure class="figure9-3">
            <img src="../assets/img/medo-apple.jpg">
            <figcaption>The Apple documentation allowed me to get up to speed with the new technology.</figcaption>
          </figure>
          <p>Having got up to speed, I worked with Medopad and their Medical Advisors to define the scope of the first version of the app. It would allow patients to do four things:</p>
          <ul>
            <li>Receive real-time alerts to remind patients which medication to take at what time and at what dosage.</li>
            <li>Mark a medication as taken so their adherence can be measured and reported back to physicians.</li>
            <li>Report any symptoms they experience after taking their medication.</li>
            <li>Track their temperature throughout the day and report it back to their physician.</li>
          </ul>
        </div>
      </div>
      <figure class="contained">
        <img src="../assets/img/medo-flow.jpg" alt="">
        <figcaption>Illustrating the main Watch app flow.</figcaption>
      </figure>
      <div class="container">
        <div class="body-copy">
          <h1 class="heading">Notifications</h1>
          <p>Notifications are a powerful feature on the Apple Watch. They allow information to be presented to the user right where they need it.</p>
          <figure class="figure9-3">
            <img src="../assets/img/medo-in-situ.jpg" alt="">
            <figcaption>Notifications are a powerful feature on the Apple Watch.</figcaption>
          </figure>
          <p>The user initially receives a vibration to alert them they have a notification. They raise their wrist to view the Short Look and if they keep their wrist raised the notification turns into a Long Look which allows them to interact with it, for example by marking a medication as taken.</p>
        </div>
      </div>
      <figure class="contained">
        <img src="../assets/img/medo-flow2.jpg" alt="">
        <figcaption>The flow for a user receiving a medication reminder.</figcaption>
      </figure>
      <div class="container">
        <div class="body-copy">
          <h1 class="heading">Reporting Symptoms</h1>
          <p>The ability to report any symptoms experienced after taking medication is an important feature of the app. The design allowed for consumers to select from a list of potential symptoms and submit them to their doctor.</p>
          <div class="copy-figure4-4">
            <div class="copy">
              <p>I conceived a design that allowed for three different states:</p>
              <ul>
                <li>Initial state which allowed the user to select the symptom.</li>
                <li>Selected state which asked the user to confirm and submit to their doctor.</li>
                <li>Confirmed state which showed the user that they had already selected that symptom.</li>
              </ul>
            </div>
            <figure>
              <div class="watch-section">
                <div class="watch">
                  <img class="apple-watch" src="../assets/img/watch-front.jpg" alt="">
                  <div class="watch-window">
                    <img src="../assets/img/symptoms.gif" alt="">
                  </div>
                </div>
              </div>
            </figure>
          </div>
          <h1 class="heading">The Results</h1>
          <p>The app launch received some very positive feedback from both patients and doctors and was featured on a BBC news report (video length - 6:53 min).</p>
        </div>
        <div class="contained">
          <figure>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Cfkqd4AJ1ms" frameborder="0" allowfullscreen></iframe>
            <figcaption>Medopad Watch App on BBC World News.<a class="highlight highlight-small" href="https://www.youtube.com/watch?v=Cfkqd4AJ1ms" target="_blank"> Source</a></figcaption>
          </figure>
        </div>
        <div class="body-copy">
          <p>The product continues to be developed and now has an companion iPhone app that mirrors a lot of the Watch apps' functionality.</p>
          <p>This initial engagement led to an offer to go full-time with Medopad in a Product Management & Design role which I respectfully declined.</p>
          <div class="figure6-6">
            <figure>
              <img src="../assets/img/medo-watches-1.jpg" alt="">  
            </figure>
            <figure>
              <img src="../assets/img/medo-watches-2.jpg" alt="">  
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="section case-previews">
      <div class="container">
        <div class="case-preview case-preview-sm">
          <a href="parkhound">
            <div class="case-preview-img-wrap">
              <div class="case-preview-img" style="background: url('../assets/img/ph-hero.jpg'); background-size: cover; background-position: center center; ">
              </div>
            </div>
          </a>
          <div class="case-preview-text">
            <h1 class="heading"><a href="parkhound" class="highlight">Solving the parking crisis</a></h1>
            <p class="small">Case Study</p>
            <p class="read-time">4 min read</p>
          </div>
        </div>
        <div class="case-preview case-preview-lg">
          <a href="jio-health">
            <div class="case-preview-img-wrap">
              <div class="case-preview-img" style="background: url('../assets/img/jio-hero.jpg'); background-size: cover; background-position: center center; ">
              </div>
            </div>
          </a>
          <div class="case-preview-text">
            <h1 class="heading"><a href="jio-health" class="highlight">Connecting physicians and patients for better health</a></h1>
            <p class="small">Case Study</p>
            <p class="read-time">6 min read</p>
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
      spaceBetween: 20,
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