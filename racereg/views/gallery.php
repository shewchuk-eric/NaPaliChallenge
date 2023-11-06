<?php $pageTitle = "Image Gallery of The Na Pali Challenge || Gallery";
      $pageName = 'gal';
      $description = "Visit this page to see video and a photo slide-show from past races.";
      $alt = 'image of unlimited class race starting';
      $hero = selectHero($pageName, $alt, 1920, 280);
      include_once 'views/header.php'; ?>

<section id='mainContent'>
    <h1>Feel The Excitement!</h1>
<?php if(isset($message)) {echo $message;} ?>

<!-- EMBED MOST RECENT RACE VIDEO FROM YOUTUBE -->
    <div id="video">
        <h3>2023 Video</h3>
    <iframe width="100%" height="auto" src="https://youtube.com/embed/oauYOiFvbCg"></iframe>
    </div>

<!-- SLIDE SHOW CONTAINER AND CODE -->
    <div class="slideshow-container">
        <h3>Photos From The Race</h3>
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <img src="images/slide-show/slide1.webp" style="width:100%">
    <div class="text">Near Kalalau</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <img src="images/slide-show/slide2.webp" style="width:100%">
    <div class="text">Crew Change</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <img src="images/slide-show/slide3.webp" style="width:100%">
    <div class="text">Almost To Polihale</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <img src="images/slide-show/slide4.webp" style="width:100%">
    <div class="text">At The Wind Line</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <img src="images/slide-show/slide5.webp" style="width:100%">
    <div class="text">Past Milolii</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">6 / 10</div>
    <img src="images/slide-show/slide6.webp" style="width:100%">
    <div class="text">Heading South</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <img src="images/slide-show/slide7.webp" style="width:100%">
    <div class="text">Moving Fast In A Bradley</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <img src="images/slide-show/slide8.webp" style="width:100%">
    <div class="text">Leaving Hanalei</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <img src="images/slide-show/slide9.webp" style="width:100%">
    <div class="text">Getting Ready To Race</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <img src="images/slide-show/slide10.webp" style="width:100%">
    <div class="text">Passing Wainiha</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>
<?php $show = "<script src='scripts/slide-show.js'></script>"; ?>
<?php include_once 'footer.php'; ?>