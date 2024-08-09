<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="pic/logo.png">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'components/navbar.php';
    ?>

    <!-- Contact Header -->
    <header class="contact-header" data-aos="fade-in">
        <div class="container">
            <h1 style="color: white;">Get in Touch</h1>
            <p>We're here to answer any questions you may have about our products, services, or company. Reach out to us
                and we'll respond as soon as we can.</p>
        </div>
    </header>
    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="contact-form" data-aos="fade-right">
                        <h2>Send Us a Message</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info" data-aos="fade-left">
                        <h2>Contact Information</h2>
                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>315 Street, TK , Phnom Penh, Cambodia</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone"></i>
                            <span>+1 (855) 456-7890</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <span>lohak@mywebsite.com</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-clock"></i>
                            <span>Monday - Friday: 9am - 5pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <section class="map" data-aos="fade-up">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.573492945606!2d104.89540131114863!3d11.582402688572213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2z4Z6f4Z624Z6A4Z6b4Z6c4Z634Z6R4Z-S4Z6Z4Z624Z6b4Z-Q4Z6Z4Z6i4Z6T4Z-S4Z6P4Z6a4Z6H4Z624Z6P4Z634Z6V4Z624Z6a4Z-J4Z624Z6g4Z-S4Z6C4Z6T!5e0!3m2!1skm!2skh!4v1721746200099!5m2!1skm!2skh"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Footer -->
        <?php include 'components/footer.php'; ?>

        
        <!-- Bootstrap JS CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FontAwesome CDN for icons -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <!-- AOS JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true,
            });
        </script>
</body>

</html>