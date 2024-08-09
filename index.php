<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lohak Handcraft Market</title>
  <link rel="icon" type="image/png" href="pic/logo.png">

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- AOS CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css " />
  <link rel="stylesheet" href="css/index.css" />

</head>

<body>
  <?php
  include 'components/navbar.php';
  ?>



  <!-- Header -->
  <header class="jumbotron text-center" id="jumbotron" data-aos="fade-up">
    <div class="container">
      <h1 class="display-4 fade-in-up">
        Experience the Artistry of Cambodian Handcrafts
      </h1>
      <p class="lead fade-in-up">Discover pure Khmer handcraft products</p>
      <a
        href="product.html"
        class="btn btn-primary btn-lg fade-in-up"
        data-aos="zoom-in">
        Explore Our Product</a>
    </div>
  </header>
  <!-- Features Section -->
  <section id="features" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fade-in-up" data-aos="fade-up">Why us?</h2>
      <div class="row">
        <div class="col-md-4 text-center mb-4 fade-in-up" data-aos="fade-up">
          <i class="fas fa-paint-brush"></i>
          <h3>Authentic Craftsmanship</h3>
          <p>
            Each product is meticulously handcrafted by skilled Cambodian
            artisans, preserving centuries-old traditions.
          </p>
        </div>
        <div class="col-md-4 text-center mb-4 fade-in-up" data-aos="fade-up">
          <i class="fas fa-leaf"></i>
          <h3>Sustainable Materials</h3>
          <p>
            We prioritize eco-friendly, locally-sourced materials to support
            both our artisans and the environment.
          </p>
        </div>
        <div class="col-md-4 text-center mb-4 fade-in-up" data-aos="fade-up">
          <i class="fas fa-globe"></i>
          <h3>Cultural Heritage</h3>
          <p>
            Our products tell the story of Cambodia's rich cultural heritage,
            bringing a piece of history into your home.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2>About Lohak</h2>
          <p>
            LOHAK is a handcraft marketplace dedicated to authentic Cambodian
            arts, crafts, and traditional techniques dating back more than
            seven centuries to the ancient city of Angkor. We bridge the gap
            between skilled artisans and global consumers, ensuring fair trade
            practices and preserving Cambodia's rich cultural heritage.
          </p>
          <a href="aboutpage.html" class="btn btn-outline-primary">Learn More</a>
        </div>
        <div class="col-lg-6" data-aos="zoom-in">
          <img
            src="https://cambodiatravel.com/images/2020/10/Kampong-Thom-province-cambodia.jpg"
            alt="Cambodian artisan at work"
            class="img-fluid rounded"
            width="600"
            height="400"
            loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5" data-aos="fade-up">Featured Products</h2>
      <div class="row">
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card product-card">
            <img
              src="https://b3355779.smushcdn.com/3355779/wp-content/uploads/2023/06/suong_violet_1.jpeg?lossy=2&strip=1&webp=1"
              class="card-img-top"
              alt="Product 1"
              width="300"
              height="400"
              loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Handwoven Silk Scarf</h5>
              <p class="card-text">
                Exquisite silk scarf with traditional Khmer patterns.
              </p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card product-card">
            <img
              src="https://i.etsystatic.com/21007903/r/il/255fc7/6057082975/il_570xN.6057082975_fmcg.jpg"
              class="card-img-top"
              alt="Product 2"
              width="300"
              height="400"
              loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Carved Wooden Box</h5>
              <p class="card-text">
                Intricately carved wooden box inspired by Angkor Wat.
              </p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card product-card">
            <img
              src="https://img.artpal.com/069361/7-20-4-8-3-47-20m.jpg"
              class="card-img-top"
              alt="Product 3"
              width="300"
              height="400"
              loading="lazy" />
            <div class="card-body">
              <h5 class="card-title">Angkor Wat Painting</h5>
              <p class="card-text">
                Delicate showcasing traditional art painting of the seven
                wonder of the world.
              </p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog-->
  <section class="part3">
    <div class="part3-content container" data-aos="fade-up">
      <h1>Our Blog</h1>
      <hr />
      <div class="row part3-content-pic">
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="blog-card h-100">
            <img
              src="https://www.thefairtradevillage.com/wp-content/uploads/2019/06/AHA-Official-Seal-of-Authenticity.jpg"
              alt="Genuine Cambodian handmade gifts"
              width="300"
              height="250"
              loading="lazy" />
            <div class="blog-content">
              <h4>Finding genuine Cambodian handmade gifts</h4>
              <p class="date">June 6, 2019</p>
              <p>
                In busy workshops at Siem Reap's Fair Trade Village, some of
                Cambodia's most accomplished artisans are busy creating
                carvings, ceramics, jewelry and …
              </p>
              <a href="blog/b1.html" class="button">Read more</a>

            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="blog-card h-100">
            <img
              src="https://pppenglish.sgp1.digitaloceanspaces.com/image/main/20243/25_3_2024_hol_dgi.jpg"
              alt="Hol Pidan Exhibition"
              width="300"
              height="250"
              loading="lazy" />
            <div class="blog-content">
              <h4>Hol Pidan Exhibition in Phnom Penh</h4>
              <p class="date">March 21 to June 21, 2024</p>
              <p>
                The National Museum of Cambodia is currently hosting an
                exhibition dedicated to Hol Pidan fabrics, which showcases the
                intricate and culturally significant Khmer handicraft …
              </p>
              <a href="blog/b2.html" class="button">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="blog-card h-100">
            <img
              src="https://moitruongdulich.vn/en/mypicture/images/Myfolder/2023/T7/287Traditional-bamboo-weaving-helps-Khmer-people-in-Soc-Trang-escape-poverty-1.jpg"
              alt="Khmer Handicraft Villages"
              width="300"
              height="250"
              loading="lazy" />
            <div class="blog-content">
              <h4>Expansion of Khmer Handicraft Villages in Vietnam</h4>
              <p class="date">December 01, 2018</p>
              <p>
                Vietnam's Trà Vinh Province, several ethnic Khmer handicraft
                villages have experienced significant growth. The villages in
                Đại An and Hàm Giang communes, as well as the sedge mat
                weaving village in Hàm Tân, …
              </p>
              <a href="blog/b1.html" class="button">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5" data-aos="fade-up">
    <div class="container text-center">
      <h2>Contact Us</h2>
      <p>
        We'd love to hear from you! Whether you have a question about our
        products, pricing, or anything else, our team is ready to answer all
        your questions.
      </p>
      <a href="mailto:reaksmeyrin15@example.com" class="btn btn-primary">Email Us</a>
    </div>
  </section>
  <!-- Footer -->
   <?php include 'components/footer.php'; ?>


   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <!-- AOS JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>
  <script
    src="https://kit.fontawesome.com/1f1017027a.js"
    crossorigin="anonymous"></script>
</body>

</html>