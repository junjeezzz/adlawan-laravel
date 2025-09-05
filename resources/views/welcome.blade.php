<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BakeHub</title>
  <meta name="description" content="Your Sweetest Moments, Baked to Perfection.">
  <meta name="keywords" content="bakery, cakes, pastries, bread, desserts, custom cakes">

  <!-- Favicons -->
  <link href="../../../landing-page/assets/img/favicon.png" rel="icon">
  <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../landing-page/assets/css/main.css" rel="stylesheet">

  <!-- Custom CSS - For Bakery Specific Styling (Add your styles here!) -->
  <style>
    body {
      font-family: 'Open Sans', sans-serif; /* A clean, readable font */
      background-color: #fef8f5; /* Soft, warm background color */
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Great Vibes', cursive; /* Elegant, handwritten-style font */
    }
    /* Add more bakery-specific styles here (e.g., for buttons, navigation) */

     /* Notification styles */
    #orderNotification {
      display: none;
      position: fixed;
      top: 25px;
      right: 25px;
      z-index: 9999;
      background: #ffe8d2;
      color: #a0522d;
      border: 2px solid #f9c784;
      border-radius: 10px;
      padding: 18px 32px;
      font-size: 1.15rem;
      font-family: 'Open Sans', sans-serif;
      box-shadow: 0 4px 18px #f9c78455;
      transition: opacity .25s;
    }

    #orderNotification.success {
      background: #eafaf1;
      color: #2b7a46;
      border-color: #81c784;
    }

    #orderNotification.error {
      background: #ffe0e0;
      color: #d32f2f;
      border-color: #f44336;
    }

    /* Bakery-style modal */
    .modal-bakery .modal-content {
      border-radius: 22px;
      border: 2px solid #f9c784;
      background: #fff8f5;
      box-shadow: 0 4px 18px #f9c78455;
    }
    .modal-bakery .modal-header {
      border-bottom: 1.5px solid #f9c784;
    }
    .modal-bakery .modal-title {
      font-family: 'Great Vibes', cursive;
      font-size: 2rem;
      color: #a0522d;
      letter-spacing: 1px;
    }
    .modal-bakery .form-control {
      background: #fffbe7;
      border: 1.5px solid #f9c784;
      border-radius: 8px;
    }
    .modal-bakery .form-control:focus {
      border-color: #a0522d;
    }
    .modal-bakery .btn-bakery {
      background: #a0522d;
      color: #fffbe7;
      border-radius: 20px;
      font-weight: bold;
      border: none;
      padding: 8px 30px;
      font-size: 1.1rem;
      transition: background 0.18s;
    }
    .modal-bakery .btn-bakery:hover {
      background: #ef7c8e;
      color: #fff;
    }
    .modal-bakery .modal-footer {
      border-top: none;
    }
    /* Overlay for modal (Bootstrap provides this, but in case of custom modal) */
    .modal-backdrop.show {
      opacity: 0.5;
      background: #f9c784;
    }
  </style>

  <!-- =======================================================
  * Template Name: BakeHaven
  * Template URL: [Your Template URL Here]
  * Updated: [Date]
  * Author: [Your Name/Company]
  * License: [License Information]
  ======================================================== -->
</head>

<body class="index-page">

   <!-- Notification -->
  <div id="orderNotification"></div>

  <!-- Login/Sign in Modal -->
  <div class="modal fade modal-bakery" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="loginModalLabel">Sign In to BakeHub</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background:none;"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm" autocomplete="off">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="loginEmail" placeholder="your@email.com" required>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn-bakery">Sign In</button>
            </div>
          </form>
          <hr>
          <small class="d-block text-center text-muted">Don't have an account? <a href="#" id="showSignup" style="color:#a0522d;font-weight:600;">Sign Up</a></small>
        </div>
        <!-- Optional: Sign Up form in modal -->
        <div class="modal-body d-none" id="signupSection">
          <form id="signupForm" autocomplete="off">
            <div class="mb-3">
              <label for="signupEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="signupEmail" placeholder="your@email.com" required>
            </div>
            <div class="mb-3">
              <label for="signupPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="signupPassword" placeholder="Password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn-bakery">Create Account</button>
            </div>
          </form>
          <hr>
          <small class="d-block text-center text-muted">Already have an account? <a href="#" id="showSignin" style="color:#a0522d;font-weight:600;">Sign In</a></small>
        </div>
      </div>
    </div>
  </div>


   <header id="header" class="header d-flex align-items-center sticky-top" style="background-color: #f8f0e5;">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename" style="font-family: 'Arial', sans-serif; color: #a0522d;">BakeHub</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active" style="color: #a0522d;">Dashboard<br></a></li>
          <li><a href="#about" style="color: #a0522d;">About</a></li>
          <li><a href="#menu" style="color: #a0522d;">Menu</a></li>
          <li><a href="#events" style="color: #a0522d;">Special Offers</a></li>
          <li><a href="#chefs" style="color: #a0522d;">Bakery Team</a></li>
          <li><a href="#gallery" style="color: #a0522d;">Gallery</a></li>
          <li><a href="#contact" style="color: #a0522d;">Contact</a></li>
          <li>
            <a href="#" id="cartNavBtn" style="color: #a0522d; font-weight: 700; position:relative;">
              <i class="bi bi-cart4"></i> Cart
              <span id="cartCount" style="background:#ef7c8e; color:#fff; border-radius:50%; padding:2px 8px; font-size:0.9em; position:absolute; top:0; right:-18px; min-width:24px; text-align:center;">0</span>
            </a>
          </li>
          <li>
            <a href="#" id="loginNavBtn" style="color: #ef7c8e;font-weight:700;">
              <i class="bi bi-person-circle"></i> Sign In
            </a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color: #a0522d;"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/#book-a-table') }}" style="background-color: #a0522d; color: #fff; border-radius: 5px; padding: 10px 20px; text-decoration: none;">Reserve your treats</a>
    </div>
</header>

  <main class="main">
    

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Bake it Happen</h1>
            <p data-aos="fade-up" data-aos-delay="100">Your central destination for fresh, handcrafted baked goods.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Reserve your treats</a>
              <a href="https://youtu.be/uYAlFoMHfcc?si=UIQ5RCtC4bIoXpNW" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="../../../landing-page/assets/img/heroimg/hero-img1.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

     <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Story<br></h2>
        <p><span>A Sweet Beginning</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="../../../landing-page/assets/img/BakeHub-Ambience.jpg" class="img-fluid mb-4 rounded-3" alt="BakeHub Ambience">
            <div class="book-a-table rounded-3 p-3" style="background-color: #f8f9fa;">
              <h3 class="fw-bold">Craving Something Sweet?</h3>
              <p class="mb-0">Call us to order: <span class="fw-bold">+63 992 048 6917</span></p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Step into BakeHub, where every day is a celebration of flavors and aromas! We're a family of bakers dedicated to bringing you the finest, freshly baked goods. From the perfect morning croissant to a decadent cake for any occasion, we pour love and care into every creation. Enjoy a cozy atmosphere with a cup of coffee, a refreshing juice, or a delightful dessert – because here, every bite is a moment of joy.
              </p>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> <span class="fw-bold">Freshly Baked Daily:</span> Discover a wide array of breads, pastries, and cakes, made with the best ingredients.</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> <span class="fw-bold">Beverage Delights:</span> Savor our selection of freshly squeezed juices and expertly brewed coffee.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <span class="fw-bold">A Sweet Spot:</span> Relax and enjoy delicious treats in a welcoming, friendly atmosphere.</li>
              </ul>
              <p>
                BakeHub, where every treat is made with love! We offer fresh, daily baked goods and custom cakes, crafted with the finest ingredients to sweeten your day.
              </p>

              <div class="position-relative mt-4">
                <img src="../../../landing-page/assets/img/about 2.jpg" class="img-fluid rounded-3" alt="BakeHub Treats">
                <a href="https://youtu.be/uYAlFoMHfcc?si=UIQ5RCtC4bIoXpNW" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
<section id="why-us" class="why-us section light-background">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3>Why Choose BakeHub</h3>
          <p>
            At BakeHub, we bring the heart of Naga City into every loaf and pastry. Our passion for baking is matched only by our love for our community. We don’t just bake; we create sweet memories that linger long after the last crumb. With daily fresh ingredients and a cozy, inviting atmosphere, BakeHub isn't just a bakery – it's your home away from home, where every bite is a warm hug.
          </p>
          <div class="text-center">
            <a href="#" class="more-btn"><span>Discover More</span> <i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- End Why Box -->

      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-clipboard-data"></i>
              <h4>Freshly Baked, Daily Delights</h4>
              <p>Every treat is lovingly made from scratch, baked fresh each day right here in Naga City, ensuring the highest quality and the most delightful flavors.
              </p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-heart"></i>
              <h4>Made with Love</h4>
              <p>Every pastry, loaf, and cake is crafted with care, reflecting our commitment to quality and the joy of baking. Experience the love in every bite!
              </p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-xl-4">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-star"></i>
              <h4>Your Favorite Neighborhood Bakery</h4>
              <p>Join our family of happy customers who cherish our delightful offerings and warm service. BakeHub is where your cravings meet community!
              </p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div><!-- End Why Us Content -->

    </div>
  </div>
</section>

   <!-- Bakery Stats Section -->
    <section id="stats" class="stats section bakery-background">

      <img src="../../../landing-page/assets/img/stats_magic.jpg" alt="Bakery Delights" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Customers</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cakes & Pastries Baked</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours of Baking</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Passionate Bakers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Bakery Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Beverages</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Pastries</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Cakes</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Beverages</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
  <a href="../../../landing-page/assets/img/menu/menu-item-1.jpg" class="glightbox">
    <img src="../../../landing-page/assets/img/menu/menu-item-1.jpg" class="menu-img img-fluid" alt="">
  </a>
  <h4>Cappuccino</h4>
  <p class="ingredients">
    A classic Italian coffee drink with steamed milk and a layer of foam.
  </p>
  <p class="price">
    ₱65.00
  </p>
  <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Cappuccino"
      data-price="65.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
</div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-2.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cowffee</h4>
                <p class="ingredients">
                  A signature's coffee that has a special blend of fresh cow's milk, rich in flavor and creamy.
                </p>
                <p class="price">
                  ₱59.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Cowffee"
      data-price="59.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-3.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Espresso</h4>
                <p class="ingredients">
                  A strong and bold shot of espresso for the coffee connoisseur.
                </p>
                <p class="price">
                  ₱59.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Espresso"
      data-price="59.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-4.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Calamansi Juice</h4>
                <p class="ingredients">
                  A tangy and refreshing drink made with calamansi, a citrus fruit native to the Philippines.
                </p>
                <p class="price">
                  ₱20.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Calamansi Juice"
      data-price="20.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-5.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Halo-Halo</h4>
                <p class="ingredients">
                  A popular Filipino dessert, with shaved ice, sweet beans, fruits, jellies, and leche flan, topped with evaporated milk.

                </p>
                <p class="price">
                  ₱50.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Halo-Halo"
      data-price="50.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-6.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Iced Tea</h4>
                <p class="ingredients">
                  Classic iced tea with a choice of flavors like lemon, peach, or raspberry.
                </p>
                <p class="price">
                  ₱25.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Iced Tea"
      data-price="25.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-7.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt=""></a>
                <h4>Milkshakes</h4>
                <p class="ingredients">
                  Classic milkshakes with a choice of flavors like chocolate, vanilla, or strawberry.
                </p>
                <p class="price">
                  ₱40.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Milkshakes"
      data-price="40.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-8.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt=""></a>
                <h4>Smoothies</h4>
                <p class="ingredients">
                  Blended fruit smoothies with a choice of flavors like mango, banana, or strawberry.
                </p>
                <p class="price">
                  ₱40.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Smoothies"
      data-price="40.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-9.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt=""></a>
                <h4>Taho</h4>
                <p class="ingredients">
                  A warm soybean curd dessert, served with arnibal (sweet brown syrup) and tapioca pearls.
                </p>
                <p class="price">
                  ₱40.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Taho"
      data-price="40.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>
              <!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pastries</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-10.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-10.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cinnamon Rolls</h4>
                <p class="ingredients">
                 Soft, gooey, and full of cinnamon flavor.
                </p>
                <p class="price">
                  ₱50.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Cinnamon Rolls"
      data-price="50.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-11.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-11.png" class="menu-img img-fluid" alt=""></a>
                <h4>Croissants</h4>
                <p class="ingredients">
                  A delightful dance of crisp, flaky layers and rich, buttery goodness.
                </p>
                <p class="price">
                  ₱60.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Croissants"
      data-price="60.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-12.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-12.png" class="menu-img img-fluid" alt=""></a>
                <h4>Muffins</h4>
                <p class="ingredients">
                  Offer a variety of flavors like blueberry, chocolate chip, and banana nut.
                </p>
                <p class="price">
                  ₱40.00
                </p>
                 <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Muffins"
      data-price="40.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-13.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-13.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pain au Chocolat</h4>
                <p class="ingredients">
                  A classic French pastry with rich chocolate filling.
                </p>
                <p class="price">
                  ₱70.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Pain au Chocolat"
      data-price="70.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-14.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-14.png" class="menu-img img-fluid" alt=""></a>
                <h4>Scones</h4>
                <p class="ingredients">
                  Perfect for afternoon tea, with options like cranberry orange and plain.
                </p>
                <p class="price">
                  ₱40.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Scones"
      data-price="40.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-15.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-15.png" class="menu-img img-fluid" alt=""></a>
                <h4>The BakeHub Loaf</h4>
                <p class="ingredients">
                  A signature sourdough bread, made with a unique blend of local grains.
                </p>
                <p class="price">
                  ₱180.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="The BakeHub Loaf"
      data-price="180.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>
              
              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-16.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-16.png" class="menu-img img-fluid" alt=""></a>
                <h4>Butter Choco Chunk Cookies</h4>
                <p class="ingredients">
                  Rich and buttery cookies with chunks of dark chocolate.

                </p>
                <p class="price">
                  ₱45.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Butter Choco Chunk Cookies"
      data-price="45.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-17.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-17.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lemon Poppyseed Loaf</h4>
                <p class="ingredients">
                  A light and refreshing loaf with a burst of citrus flavor.
                </p>
                <p class="price">
                  ₱80.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Lemon Poppyseed Loaf"
      data-price="80.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-18.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-18.png" class="menu-img img-fluid" alt=""></a>
                <h4>Peanut Butter and Jelly Bars</h4>
                <p class="ingredients">
                  A nostalgic treat, packed with creamy peanut butter, sweet jelly, and a satisfyingly chewy texture.
                </p>
                <p class="price">
                  ₱45.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Peanut Butter and Jelly Bars"
      data-price="45.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-19.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-19.png" class="menu-img img-fluid" alt=""></a>
                <h4>Salted Caramel Choco Chip Cookies</h4>
                <p class="ingredients">
                  A decadent treat with a touch of saltiness.
                </p>
                <p class="price">
                  ₱45.00
                </p>
                 <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Salted Caramel Choco Chip Cookies"
      data-price="45.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/menu-item-20.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/menu-item-20.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ube Cheesecake</h4>
                <p class="ingredients">
                  A unique and flavorful combination of Filipino ube and creamy cheesecake.
                </p>
                <p class="price">
                  ₱45.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Ube Cheesecake"
      data-price="45.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div>
              <!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Cakes</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/5.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ube Macapuno Delight</h4>
                <p class="ingredients">
                  A moist ube (purple yam) cake layered with creamy macapuno (sweet coconut sport) filling and topped with a delicate ube buttercream frosting and macapuno flakes.
                </p>
                <p class="price">
                  ₱850.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Ube Macapuno Delight"
      data-price="850.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/6.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mango Tango Cake</h4>
                <p class="ingredients">
                  A light and airy vanilla sponge cake infused with fresh mango puree, layered with mango cream, and finished with a mango glaze and fresh mango slices.
                </p>
                <p class="price">
                  ₱900.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Mango Tango Cake"
      data-price="900.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/4.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate Overload Cake</h4>
                <p class="ingredients">
                  A rich, decadent chocolate cake with layers of chocolate ganache, chocolate mousse, and a dark chocolate frosting. Decorated with chocolate shavings and a drizzle of ganache.
                </p>
                <p class="price">
                  ₱900.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Chocolate Overload Cake"
      data-price="900.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/3.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Sans Rival Supreme</h4>
                <p class="ingredients">
                  Layers of crispy, chewy meringue with a rich buttercream filling, studded with cashews. A classic Filipino dessert, perfected.
                </p>
                <p class="price">
                  ₱1000.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Sans Rival Supreme"
      data-price="1000.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/1.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Salted Caramel Cheesecake</h4>
                <p class="ingredients">
                  A creamy New York-style cheesecake swirled with salted caramel, baked on a graham cracker crust, and drizzled with more caramel.
                </p>
                <p class="price">
                  ₱900.00
                </p>
                <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Salted Caramel Cheesecake"
      data-price="900.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="../../../landing-page/assets/img/menu/cakes/2.png" class="glightbox"><img src="../../../landing-page/assets/img/menu/cakes/2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Strawberry Shortcake Dream</h4>
                <p class="ingredients">
                  Fluffy vanilla sponge cake layered with fresh strawberries and whipped cream, topped with more strawberries and a dusting of powdered sugar.
                </p>
                <p class="price">
                  ₱800.00
                </p>
                 <!-- Cart controls start -->
  <div class="cart-controls mt-2" style="display:flex; align-items:center;">
    <input type="number" min="1" value="1" class="cart-qty-input" style="width:50px; margin-right:8px;">
    <button class="btn btn-sm btn-bakery add-to-cart-btn"
      data-name="Strawberry Shortcake Dream"
      data-price="800.00">
      <i class="bi bi-cart-plus"></i> Add to Cart
    </button>
  </div>
  <!-- Cart controls end -->
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>BakeHub's cakes are absolutely divine! The Ube Macapuno Delight is my absolute favorite. It's moist, flavorful, and the perfect treat for any occasion!.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Fyang Smith</h3>
                      <h4>Singer &amp; Actress</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../../../landing-page/assets/img/testimonials/testi3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>I love the atmosphere at BakeHub! The coffee is great, and the pastries are always fresh and delicious. It's my go-to spot for a relaxing afternoon</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ferdinand M.</h3>
                      <h4>Politician</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../../../landing-page/assets/img/testimonials/testi1.jpeg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>The Mango Tango Cake from BakeHub is the best I've ever had! The mango flavor is so fresh and vibrant, and the cake is perfectly light and airy. Highly recommend!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jose Sixto "Dingdong" Gonzalez Dantes III</h3>
                      <h4>Actor</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../../../landing-page/assets/img/testimonials/testi2.webp" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>BakeHub's customer service is top-notch. They're always friendly and helpful, and the quality of their baked goods is consistently excellent. A true gem in the neighborhood!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jessica Sojo</h3>
                      <h4>Broadcaster</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../../../landing-page/assets/img/testimonials/testi4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

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
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/bundle.jpg)">
              <h3>BakeHub Bundles</h3>
              <div class="price align-self-start">₱299.00</div>
              <p class="description">
                Pre-packaged assortments of baked goods for special occasions or gifts.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/bakingclasses.jpg)">
              <h3>Baking Classes</h3>
              <div class="price align-self-start">₱500.00</div>
              <p class="description">
                Offer hands-on baking classes for all levels.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/bakeathome.jpg)">
              <h3>Baking Kits</h3>
              <div class="price align-self-start">₱300.00</div>
              <p class="description">
                Pre-measured ingredients and instructions for customers to bake their own treats.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/Customize-Cake.jpg)">
              <h3>Customize Cakes</h3>
              <div class="price align-self-start">₱1999-4999.00</div>
              <p class="description">
                Your vision, our creation. Custom cakes for every celebration, crafted with flavor and design in mind. Choose your flavors, fillings, and decorations.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/bakingclass.jpg)">
              <h3>Baking Class</h3>
              <div class="price align-self-start">₱500.00</div>
              <p class="description">
                Offer hands-on baking classes for all levels.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../../../landing-page/assets/img/Special-Offers/bakeathome2.jpg)">
              <h3>Bake at Dashboard</h3>
              <div class="price align-self-start">₱300.00</div>
              <p class="description">
                Pre-measured ingredients and instructions for customers to bake their own treats.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>chefs</h2>
        <p><span>Our</span> <span class="description-title">Bakery Team<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/bakerbh.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Karoline Mae Smith</h4>
                <span>Baker</span>
                <p>Karoline started as a home baker, perfecting his sourdough recipe during the pandemic. He then took a local baking course to refine his skills.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/pastry-chef-bh.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mark Joseph "MJ" Jhonson</h4>
                <span>Pastry Chef</span>
                <p>MJ trained at Le Cordon Bleu in Paris, specializing in French pastries. She worked at a Michelin-starred restaurant before joining BakeHub.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/head-baker-bh.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Daniel John Ford jr.</h4>
                <span>Head Baker</span>
                <p>Daniel has been baking since he was a child in his family's bakery. He has over 15 years of experience and a passion for creating new bread recipes.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

           <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/cakedeco.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chloe San Jose</h4>
                <span>Cake Decorator</span>
                <p>Chloe is a self-taught cake decorator with a degree in Fine Arts. She's known for her whimsical designs and intricate sugar flowers.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

           <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/bakery-manager-bh.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jessie Lee</h4>
                <span>Bakery Manager</span>
                <p>Jessie has a degree in Business Management and years of experience managing coffee shops and cafes. He's excellent at customer service and operations.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="../../../landing-page/assets/img/chefs/bakery-owner-bh.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Julia Garcia</h4>
                <span>Bakery Owner</span>
                <p>Julia is a former architect who always dreamed of opening a bakery. She took business classes and culinary courses to learn the ropes. She loves creating a warm, welcoming space.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Reserve your Treats</h2>
        <p><span>Savor the</span> <span class="description-title">moment with Us<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url(../../../landing-page/assets/img/reservation.jpg);"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form role="form" class="php-email-form" id="reservationForm" autocomplete="off">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Book a Table</button>
              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-1.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-2.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-3.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-4.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-5.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-6.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-7.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-8.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-9.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-9.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-10.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-10.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-11.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-11.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../../../landing-page/assets/img/gallery/gallery-12.jpg"><img src="../../../landing-page/assets/img/gallery/gallery-12.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d404.5770479793324!2d123.7403485987909!3d10.18958611294651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1752063168352!5m2!1sen!2sph" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>3656-3623 Cebu S Rd, Naga, Cebu</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+63 992 048 6917</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>bakeHubph@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section>
    
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Junjeezzz</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../../../landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../landing-page/assets/js/main.js"></script>
  <script src="../../../landing-page/assets/js/cart.js"></script>
<script>
// Simple demo login/auth logic
let loggedIn = localStorage.getItem('bakehub_loggedin') === 'yes';
let users = JSON.parse(localStorage.getItem('bakehub_users') || '{}');

// Notification function
function showNotification(message, type = 'success') {
  const notif = document.getElementById('orderNotification');
  notif.textContent = message;
  notif.className = '';
  notif.classList.add(type === 'success' ? 'success' : 'error');
  notif.style.display = 'block';
  setTimeout(() => { notif.style.display = 'none'; }, 4000);
}

// Modal switching logic (for login/sign up)
document.addEventListener('DOMContentLoaded', function() {
  const loginNav = document.getElementById('loginNavBtn');
  const loginModalEl = document.getElementById('loginModal');
  let loginModal;
  if (typeof bootstrap !== 'undefined')
    loginModal = new bootstrap.Modal(loginModalEl);

  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');
  const showSignup = document.getElementById('showSignup');
  const showSignin = document.getElementById('showSignin');
  const loginSection = loginForm.parentElement;
  const signupSection = document.getElementById('signupSection');

  // Show modal on nav btn click
  loginNav.addEventListener('click', function(e) {
    e.preventDefault();
    if (loginModal) loginModal.show();
    loginSection.classList.remove('d-none');
    signupSection.classList.add('d-none');
  });

  showSignup.addEventListener('click', function(e) {
    e.preventDefault();
    loginSection.classList.add('d-none');
    signupSection.classList.remove('d-none');
  });
  showSignin.addEventListener('click', function(e) {
    e.preventDefault();
    signupSection.classList.add('d-none');
    loginSection.classList.remove('d-none');
  });

  // Handle sign in
  loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('loginEmail').value.trim().toLowerCase();
    const pw = document.getElementById('loginPassword').value;
    if(users[email] && users[email] === pw) {
      loggedIn = true;
      localStorage.setItem('bakehub_loggedin', 'yes');
      if (loginModal) loginModal.hide();
      showNotification('Welcome back to BakeHub! Your account is ready.', 'success');
    } else {
      showNotification('Invalid email or password.', 'error');
    }
  });

  // Handle sign up
  signupForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('signupEmail').value.trim().toLowerCase();
    const pw = document.getElementById('signupPassword').value;
    if(users[email]) {
      showNotification('Account already exists.', 'error');
    } else {
      users[email] = pw;
      localStorage.setItem('bakehub_users', JSON.stringify(users));
      showNotification('Account created! Please sign in.', 'success');
      signupSection.classList.add('d-none');
      loginSection.classList.remove('d-none');
    }
  });

  // Book a Table form logic
  const reservationForm = document.getElementById('reservationForm');
  if (reservationForm) {
    reservationForm.addEventListener('submit', function(e) {
      if(!loggedIn) {
        e.preventDefault();
        showNotification('Please sign in to place your order.', 'error');
        if (loginModal) loginModal.show();
      } else {
        // Let the form submit, but show a notification for the user (simulate order process)
        e.preventDefault();
        reservationForm.reset();
        showNotification('Order received! Your treats are being prepared. 🍰', 'success');
      }
    });
  }
});
</script>
  
<div class="modal-body">
  <!-- Cart items list -->
  <div id="cartItemsList"></div>
  

  <!-- Place this here: -->
  <div id="customerInfo" class="mb-3">
    <h5>Customer Information</h5>
    <div class="mb-2">
      <input type="text" id="custName" class="form-control" placeholder="Full Name" required>
    </div>
    <div class="mb-2">
      <input type="email" id="custEmail" class="form-control" placeholder="Email" required>
    </div>
    <div class="mb-2">
      <input type="text" id="custAddress" class="form-control" placeholder="Address" required>
    </div>
    <div class="mb-2">
      <input type="tel" id="custPhone" class="form-control" placeholder="Phone Number" required>
    </div>
    <div class="mb-2">
      <textarea id="custNote" class="form-control" placeholder="Order Note (optional)"></textarea>
    </div>
  </div>
  
  <!-- Checkout button -->
  <button id="checkoutBtn" class="btn btn-success">Checkout</button>
</div>

<!-- Cart Modal -->
<div class="modal fade modal-bakery" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="cartModalLabel">Your Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background:none;"></button>
      </div>
      <div class="modal-body" id="cartModalBody" >
        <!-- inside your modal-body -->
<div id="cartItemsList"></div>
<!-- ...customer info fields... -->
<button id="checkoutBtn" class="btn btn-success w-100">Checkout</button>
        <!-- Cart items and form will be rendered here by JS -->
      </div>
    </div>
  </div>
</div>

</body>

</html>