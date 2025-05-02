<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico" >
  <title>Sensasi Rumah</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=Mochiy+Pop+P+One&family=Moul&display=swap"
    rel="stylesheet">

  <style>
    
  </style>

</head>

<body>

  <!-- Header -->
  <header class="header">

  <div class="logo-store">
      <img src="img/logo.png" alt="WhatsApp Icon" class="contact-icon" />
    </div>

    <nav class="nav">
      <button><a href="#home">Home</a></button>
      <button><a href="#about">About</a></button>
      <button><a href="#product">Product</a></button>
      <button><a href="#service">Services</a></button>
      <button><a href="#contact">Contact</a></button>
    </nav>

    <div class="contact">
      <img src="img/whatsapp.svg" alt="WhatsApp Icon" class="contact-icon" />
      <div>
        <div class="whatsapp-label">whatsapp</div>
        <div class="phone-number">(085140xxxxxx)</div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <h1>the sensation of home</h1>
    <p>
      At our stall you can taste food and light drinks with a homey feel,
      made from authentic Indonesian ingredients.
    </p>
    <button type="button"><a href="/user_dashboard">Buy Now -></a></button>
  </section>
  <!-- === SECTION: ABOUT US + STATISTIK === -->
  <section class="about-section" >
    <!-- Statistik -->
    <div class="stats">
      <div class="stat-card">
        <img src="img/stars.svg" alt="Icon" />
        <div class="stat-number">4</div>
        <div class="stat-label">years experience</div>
      </div>
      <div class="stat-card">
        <img src="img/chef-hat.svg" alt="Icon" />
        <div class="stat-number">8</div>
        <div class="stat-label">Total Product</div>
      </div>
      <div class="stat-card">
        <img src="img/shopping-cart.svg" alt="Icon" />
        <div class="stat-number">78</div>
        <div class="stat-label">Order Everyday</div>
      </div>
    </div>

    <!-- About Us Content -->
    <div class="about-content" id="about">
      <!-- Images -->
      <div class="about-images">
        <img src="img/Tahu kocek.jpg" alt="Image 1" width="50%" height="600vh"  />
        <img src="img/es_campur.jpg" alt="Image 2" width="40%" height="400vh" />
      </div>

      <!-- Text -->
      <div class="about-text">
        <div class="about-tag">// ABOUT US</div>
        <h2 class="about-heading">WE MAKE EVERYTHING USING CORE OF OUR HEART</h2>
        <p class="about-desc">
          We believe in the simple joy of Indonesian snacks and drinks made with heart.
          From crispy chips to herbal teas and jamu, everything we make uses natural
          ingredients and traditional methods — because real flavor takes time, care,
          and love for our culture.
          <br /><br />
          We may be everyday people, but we’re passionate about creating extraordinary
          tastes that bring people together. For us, every bite and every sip is a way
          to share memories, celebrate local flavors, and keep our traditions alive.
        </p>
        <a href="#" class="read-more">Read More</a>
      </div>
    </div>
  </section>

  
  <!-- === SECTION: MENU PRODUK & MINUMAN === -->
  <section class="menu-section" id="product">
    <div class="menu-header">
      <h2 class="menu-title">OUR PRODUCTS & DRINKS</h2>
      <p class="menu-desc">Delicious, tasty, and traditional Indonesian snacks & drinks for every occasion.</p>
    </div>

    <div class="menu-items">
      <!-- Menu Item 1 -->
      <div class="menu-item">
        <img src="img/tahu_kocek2.jpg" alt="Tahu Penyet" height="100vh" />
        <h3 class="menu-item-name">Tahu Penyet</h3>
        <p class="menu-item-desc">Crispy fried tofu served with sambal and fresh vegetables.</p>
        <span class="menu-item-price">IDR 5.000</span>
      </div>

      <!-- Menu Item 2 -->
      <div class="menu-item">
        <img src="img/es_campur2.jpg" alt="Es Campur" height="100vh" />
        <h3 class="menu-item-name">Es Campur</h3>
        <p class="menu-item-desc">Traditional Indonesian shaved ice dessert with fruits and sweet syrup.</p>
        <span class="menu-item-price">IDR 3.000</span>
      </div>

      <!-- Menu Item 3 -->
      <div class="menu-item">
        <img src="img/varian_sosis.jpg" alt="Keripik Singkong" />
        <h3 class="menu-item-name">varian sosis</h3>
        <p class="menu-item-desc">Crunchy cassava chips with a savory flavor that’s perfect for snacking.</p>
        <span class="menu-item-price">IDR 5.000</span>
      </div>

      <!-- Menu Item 4 -->
      <div class="menu-item">
        <img src="img/Pop ice aneka rasa.jpg" alt="Jamu Kunyit Asam" />
        <h3 class="menu-item-name">varian ice</h3>
        <p class="menu-item-desc">a very nice drink with a cheaper price.just test all the varian of the drink</p>
        <span class="menu-item-price">IDR 12.000</span>
      </div>
    </div>
  </section>

  
  <!-- === SECTION: PROMO & LAYANAN === -->
  <section class="promo-section" id="service">
    <div class="promo-header">
      <h2 class="promo-title">SPECIAL OFFERS & SERVICES</h2>
      <p class="promo-desc">Nikmati penawaran spesial dari kami untuk pengalaman makan yang lebih memuaskan.</p>
    </div>

    <div class="promo-items">
      <!-- Promo Item 1 -->
      <div class="promo-item">
        <h3 class="promo-name">Diskon 20% Setiap Senin</h3>
        <p class="promo-desc">Dapatkan diskon 20% untuk setiap pembelian produk makanan dan minuman setiap hari Senin.
        </p>
      </div>

      <!-- Promo Item 2 -->
      <div class="promo-item">
        <h3 class="promo-name">Layanan Antar Gratis</h3>
        <p class="promo-desc">Nikmati layanan antar gratis untuk pembelian di atas IDR 50.000, berlaku setiap hari.</p>
      </div>

      <!-- Promo Item 3 -->
      <div class="promo-item">
        <h3 class="promo-name">Paket Hemat 4+1</h3>
        <p class="promo-desc">Beli 4 menu dan dapatkan 1 menu gratis dari pilihan yang tersedia.</p>
      </div>
    </div>
  </section>

  <!-- === STYLES === -->
  
  <!-- === SECTION: FOOTER === -->
  <footer class="footer-section" id="contact">
    <div class="footer-container">
      <!-- Footer Logo -->
      <div class="footer-logo">
        <img src="https://placehold.co/150x50" alt="Logo" />
        <p class="footer-description">Menyajikan hidangan terbaik dengan cinta dan perhatian untuk Anda.</p>
      </div>

      <!-- Footer Navigation -->
      <div class="footer-nav">
        <h3 class="footer-title">Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- Footer Contact -->
      <div class="footer-contact">
        <h3 class="footer-title">Contact Us</h3>
        <p><i class="fa fa-phone"></i> +62 123 456 789</p>
        <p><i class="fa fa-envelope"></i> info@restaurant.com</p>
        <p><i class="fa fa-map-marker"></i> Jl. Makan Enak No. 123, Jakarta</p>
      </div>

      <!-- Footer Social Media -->
      <div class="footer-social">
        <h3 class="footer-title">Follow Us</h3>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Restaurant Name. All Rights Reserved.</p>
    </div>
  </footer>

  
</body>

</html>