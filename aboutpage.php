<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="icon" type="image/png" href="pic/logo.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"
  />
  <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="css/aboutpage.css">
</head>
<body>
  <!-- Navbar -->
  <?php include 'components/navbar.php';
    ?>

  <!-- Header Section -->
  <section id="home" class="header">
    <div class="container">
      <h1 data-aos="fade-down" data-aos-delay="100">Team</h1>
      <p data-aos="fade-up" data-aos-delay="200">
        This was made by ParagonIU freshman students
      </p>
    </div>
  </section>

  <!-- Our misson -->
  <section id="mission" class="mission-section text-center">
    <div class="container">
      <h2 class="mb-5" data-aos="fade-up">Our Mission</h2>
      <div class="row">
        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
          <div class="mission-icon">
            <i class="fas fa-leaf"></i>
          </div>
          <div class="mission-title">Sustainability</div>
          <div class="mission-description">
            We are committed to sustainable practices that protect the
            environment.
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="mission-icon">
            <i class="fas fa-hand-holding-heart"></i>
          </div>
          <div class="mission-title">Community</div>
          <div class="mission-description">
            Our goal is to give back to the community and support local
            initiatives.
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
          <div class="mission-icon">
            <i class="fas fa-lightbulb"></i>
          </div>
          <div class="mission-title">Innovation</div>
          <div class="mission-description">
            We strive to innovate and lead in our industry with cutting-edge
            solutions.
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Team Section -->
<section id="team" class="text-center py-5">
  <div class="container">
    <h2 class="mb-5" data-aos="fade-up">Meet Our Team</h2>
    <div class="row g-4">
      <!-- Team Member 1 -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card p-4 text-center">
          <img src="pic/profile/khun.jpg" alt="Kimkhun" class="team-img mb-3">
          <h5>Kimkhun</h5>
          <h4 class="role">Co-Founder</h4>
          <p>
            Khun is the driving force behind our company, leading with a
            vision for excellence and innovation.
          </p>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card p-4">
          <img src="pic/profile/smey.jpg" alt="Reaksmey" class="team-img mb-3">
          <h5>Reaksmey</h5>
          <h4 class="role">Founder</h4>
          <p>
            Smey oversees our operations, making sure everything runs
            smoothly and efficiently.
          </p>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card p-4">
          <img src="pic/profile/ream.jpg" alt="Sokream" class="team-img mb-3">
          <h5>Sokream</h5>
          <h4 class="role">Co-Founder</h4>
          <p>
            Ream is responsible for our technology strategy, ensuring we
            stay ahead of the curve in our industry.
          </p>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card p-4">
          <img src="pic/profile/roza.jpg" alt="Roza" class="team-img mb-3">
          <h5>Roza</h5>
          <h4 class="role">Co-Founder</h4>
          <p>
            Roza manages the company's finances, ensuring our financial
            stability and growth.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<?php include 'components/footer.php'; ?>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FontAwesome CDN for icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <!-- Initialize AOS -->
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
        });
      });
    });
  </script>
</body>

</html>