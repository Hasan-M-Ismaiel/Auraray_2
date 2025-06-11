<!-- About Section -->
<section id="about" class="about section" style="padding: 60px 0; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="400">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="assets/img/about_1.png" alt="Image" class="about-image">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/about_2.png" alt="Image" class="about-image">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .about-image {
    height: 250px;
    width: auto;
    object-fit: contain;
    margin: 0 auto;
    display: block;
    border-radius: 12px;
    /* Removed box-shadow */
  }

  .about-2 {
    padding: 60px 40px; /* padding replaces margin for spacing inside */
    max-width: 1200px;
    margin: 0 auto; /* center horizontally */
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  .text-col {
    flex: 1 1 60%;
    min-width: 300px;
  }

  .image-col {
    flex: 1 1 35%;
    min-width: 250px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
  }

  #moreTextRow {
    display: none;
    padding-top: 1.5rem;
    width: 100%;
  }

  #moreTextRow p {
    font-style: italic;
    color: #444;
    margin: 0 0 0.5rem 0;
    line-height: 1.5;
  }

  #toggleText {
    cursor: pointer;
    color: #007bff;
    text-decoration: underline;
    margin-left: 0.5rem;
  }

  #toggleText.expandable {
    margin-left: 0;
  }
</style>

<section id="about-2" class="about-2 section">
  <div class="container">
    <div class="content">

      <!-- First row: text and image side by side -->
      <div class="row">
        <div class="text-col" data-aos="fade-up">
          <h1 style="margin-bottom: 0.1rem;">Al Enayah Al Kamlah</h1>
          <p class="fst-italic text-muted small">
            Manufacturers of Premium Cosmetic Tools and Supplies
          </p>
          <p class="fst-italic text" style="margin-bottom: 0;">
            <span style="color: #ffc451;">Al Enayah Al Kamlah</span> Excellence in Beauty Manufacturing.
            At Al Enayah Al Kamlah, we are proud to be a trusted leader in crafting and supplying top-tier cosmetic tools
            and professional-grade beauty products. With decades of experience in the beauty industry, we proudly serve
            salons, spas, and global retailers by delivering an extensive range of premium solutions thoughtfully designed
            to meet the unique needs of both beauty professionals and consumers.
            <a id="toggleText" onclick="toggleMoreText()">Show more...</a>
          </p>
        </div>

        <div class="image-col" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset('assets/img/logo_.png') }}" class="img-fluid about-image" loading="lazy" alt="Logo">
        </div>
      </div>

      <!-- Second row: extra text full width, hidden initially -->
      <div id="moreTextRow" class="row">
        <p class="fst-italic text">
          Our portfolio includes salon-focused hair care, skincare, shaving, and grooming essentials — all expertly
          formulated with effective ingredients, luxurious textures, and captivating fragrance profiles.
          <br>
          Beyond our signature brands, we also specialize in private label manufacturing, partnering with clients to
          bring their unique beauty visions to life through custom product development and bespoke packaging solutions.
          <br>
          Committed to uncompromising quality and safety, our operations proudly hold international ISO certifications.
          Our dedicated customer support team is available 24/7, ensuring seamless assistance at every step of your
          journey. From inspired innovation to flawless execution, Al Enayah Al Kamlah empowers beauty businesses
          worldwide with reliable, sophisticated, and performance-driven cosmetic solutions.
          <a id="toggleTextBottom" class="expandable" onclick="toggleMoreText()">Show less</a>
        </p>
      </div>

    </div>
  </div>
</section>

<script>
  let previousScrollY = 0;

  function toggleMoreText() {
    const moreTextRow = document.getElementById("moreTextRow");
    const toggleBtnTop = document.getElementById("toggleText");
    const toggleBtnBottom = document.getElementById("toggleTextBottom");

    if (moreTextRow.style.display === "none" || moreTextRow.style.display === "") {
      previousScrollY = window.scrollY;
      moreTextRow.style.display = "block";
      toggleBtnTop.style.display = "none";
      toggleBtnBottom.style.display = "inline";
    } else {
      moreTextRow.style.display = "none";
      toggleBtnTop.style.display = "inline";
      toggleBtnBottom.style.display = "none";
      window.scrollTo({
        top: previousScrollY,
        behavior: "smooth"
      });
    }
  }

  window.onload = () => {
    const toggleBtnBottom = document.getElementById("toggleTextBottom");
    if (toggleBtnBottom) toggleBtnBottom.style.display = "none";
  };
</script>
