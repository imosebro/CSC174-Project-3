<?php include "inc/header.inc" ?>

<?php include "inc/nav.inc" ?>


  <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
  <meta name="viewport" content="width=device-width">
  <!-- End SlidesJS Required -->

  <!-- CSS for slidesjs.com example -->
  <!-- <link rel="stylesheet" href="css/example.css"> -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- End CSS for slidesjs.com example -->

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top:70px;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:3px;
    }

    #slides .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    #slides .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
  </style>
  <!-- SlidesJS Required: -->
</head>
<body>

  <!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
  <div class="container">
    <div id="slides">

      <div class="fSection">
        <h1 class="centerThis">Intense Milk</h1>

        <div class="sideBySide">

          <div class="portDesc">
            <p>This website was developed to have a great visual appeal
              in advertising intense milk. It uses custom css and google
              fonts to create a pleasing experience.</p>

            <a class="button" href="http://urcsc170.org/imosebro/lab09/">Visit Now</a>

          </div>

         <img class="portImg" src="images/site1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">

        </div>
      </div>

      <div class="fSection">
        <h1 class="centerThis">Phonebook Application</h1>

        <div class="sideBySide">

          <div class="portDesc">
            <p>This website was created to give users a chance to add
              their friends to a phonebook. Once they do so, they
              can view all their contact information at once.</p>

            <a class="button" href="http://urcsc174.org/imosebro/lab12/">Visit Now</a>

          </div>

         <img class="portImg" src="images/site3.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">

        </div>
      </div>

<div class="fSection">
        <h1 class="centerThis">Wordpress Website</h1>

        <div class="sideBySide">

          <div class="portDesc">
            <p>This site gives a demo of a wordpress website. In addition to
              new styles, the site also features interesting plugins, like
              an image slider.</p>

            <a class="button" href="http://www.urcsc174.org/imosebro/lab11/">Visit Now</a>

          </div>

         <img class="portImg" src="images/site2.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">

        </div>
      </div>

      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
    </div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });
  </script>
  <!-- End SlidesJS Required -->
</body>
</html>
