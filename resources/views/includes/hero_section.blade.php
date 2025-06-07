<div class="header_parallex hero-area">

</div>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-12 mb-5 mb-lg-0 order-lg-12 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide" style=" max-width: 1200px;">
              <img src="assets/img/about_1.png" alt="Image" class="img-fluid">
            </div>
            <div class="swiper-slide" style=" max-width: 1200px;">
              <img src="assets/img/about_2.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

<!-- About 2 Section -->
<section id="about-2" class="about-2 section light-background">
  <div class="container">
    <div class="content">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
          <div class="img-wrap d-flex justify-content-center align-items-center" style="height: 100%;" data-aos="fade-up" data-aos-delay="100">
            <div class="img">
              <img src="{{ asset('assets/img/logo_.png') }}" class="img-fluid mt-4" loading="lazy">
            </div>
          </div>
        </div>

        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
          <h1 style="margin-bottom: 0.1rem;" data-aos="fade-up">
            Al Enayah Al Kamlah
          </h1>
          <p class="fst-italic text-muted small" data-aos="fade-up" data-aos-delay="100">
            Manufacturers of Premium Cosmetic Tools and Supplies
          </p>
          <p class="fst-italic text" data-aos="fade-up">
            <span style="color: #ffc451;">Al Enayah Al Kamlah</span> Excellence in Beauty Manufacturing
            <br><br>
            At Al Enayah Al Kamlah, we are proud to be a trusted leader in crafting and supplying top-tier cosmetic tools
            and professional-grade beauty products. With decades of experience in the beauty industry, we proudly serve
            salons, spas, and global retailers by delivering an extensive range of premium solutions thoughtfully designed
            to meet the unique needs of both beauty professionals and consumers.
            <span id="moreText" style="display: none;">
              <br><br>
              Our portfolio includes salon-focused hair care, skincare, shaving, and grooming essentials — all expertly
              formulated with effective ingredients, luxurious textures, and captivating fragrance profiles.
              <br><br>
              Beyond our signature brands, we also specialize in private label manufacturing, partnering with clients to
              bring their unique beauty visions to life through custom product development and bespoke packaging solutions.
              <br><br>
              Committed to uncompromising quality and safety, our operations proudly hold international ISO certifications.
              Our dedicated customer support team is available 24/7, ensuring seamless assistance at every step of your
              journey. From inspired innovation to flawless execution, Al Enayah Al Kamlah empowers beauty businesses
              worldwide with reliable, sophisticated, and performance-driven cosmetic solutions.
            </span>
            <a href="javascript:void(0);" id="toggleText" onclick="toggleMoreText()">Show more...</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About 2 Section -->


<!-- show more  -->
<script>
  let previousScrollY = 0;

  function toggleMoreText() {
    const moreText = document.getElementById("moreText");
    const toggleBtn = document.getElementById("toggleText");

    if (moreText.style.display === "none" || moreText.style.display === "") {
      previousScrollY = window.scrollY; // Save current scroll position
      moreText.style.display = "inline";
      toggleBtn.innerText = "Show less";
    } else {
      moreText.style.display = "none";
      toggleBtn.innerText = "Show more...";
      window.scrollTo({
        top: previousScrollY,
        behavior: "smooth"
      });
    }
  }
</script>