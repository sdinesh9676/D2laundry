<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laundry Partner</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    /* Basic Styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #fff;
      color: rgb(82, 186, 159);
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .logo span {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav {
      position: relative;
    }

    .nav-list {
      display: flex;
      list-style: none;
    }

    .nav-list li {
      margin: 0 10px;
    }

    .nav-list a {
      text-decoration: none;
      color: black;
      font-weight: bold;
      padding: 10px 20px;
      /* Added padding to make hover effect more prominent */
      border-radius: 5px;
      /* Optional: Add rounded corners */
      transition: all 0.3s ease;
      /* Added transition for smooth effect */
    }

    /* Hover Effect */
    .nav-list a:hover {
      color: #fff;
      /* Change text color */
      background-color: rgb(82, 186, 159);
      /* Set the background color */
      transform: scale(1.1);
      /* Slightly increase the size for a more dynamic effect */
    }

    /* Mobile Menu Toggle */
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .menu-toggle .bar {
      height: 3px;
      width: 25px;
      background-color: #fff;
      margin: 3px 0;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .menu-toggle {
        display: flex;
      }

      .nav-list {
        display: none;
        position: absolute;
        top: 60px;
        right: 20px;
        flex-direction: column;
        background-color: #4caf50;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        width: 200px;
      }

      .nav-list.active {
        display: flex;
      }

      .nav-list li {
        margin: 10px 0;
        text-align: center;
      }
    }

    /* Hero Section */
    .hero {
      position: relative;
      background: url("https://images.unsplash.com/photo-1583172747862-afcb755ebd13?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D") no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      padding: 20px;
    }

    .hero-content {
      background: rgba(0, 0, 0, 0.6);
      padding: 20px 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .highlights {
      list-style: none;
      text-align: left;
      margin-bottom: 20px;
    }

    .highlights li {
      font-size: 1.2rem;
      margin: 10px 0;
      display: flex;
      align-items: center;
    }

    .highlights li::before {
      content: "✔";
      color: #ffa500;
      font-weight: bold;
      margin-right: 10px;
    }

    .cta-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .cta-button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cta-button.primary {
      background-color: #ffa500;
      color: #fff;
      margin-left: 1px;
    }

    .cta-button.primary:hover {
      background-color: #ff7600;
    }

    .cta-button.secondary {
      background-color: #4caf50;
      color: #fff;
    }

    .cta-button.secondary:hover {
      background-color: #3a923e;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .menu-toggle {
        display: flex;
      }

      .nav-list {
        display: none;
        position: absolute;
        top: 60px;
        right: 20px;
        flex-direction: column;
        background-color: #4caf50;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        width: 200px;
      }

      .nav-list.active {
        display: flex;
      }

      .nav-list li {
        margin: 10px 0;
        text-align: center;
      }

      .hero-content h1 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1.2rem;
      }

      .highlights li {
        font-size: 1rem;
      }

      .cta-button {
        font-size: 0.9rem;
      }
    }

    /* About Us Section */
    .about-us {
      padding: 60px 20px;
      background-color: #f9f9f9;
      color: #333;
      text-align: center;
    }

    .about-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .about-us h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: rgb(82, 186, 159);
    }

    .about-us p {
      font-size: 1.2rem;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .highlights {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 40px 0;
    }

    .highlight-item {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 30%;
      margin-bottom: 20px;
      text-align: left;
    }

    .highlight-item h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #ffa500;
    }

    .highlight-item p {
      font-size: 1rem;
      line-height: 1.5;
    }

    .team {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 40px;
    }

    .team-member {
      text-align: center;
      width: 30%;
    }

    .team-member img {
      width: 100%;
      max-width: 150px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .team-member h4 {
      font-size: 1.2rem;
      color: #4caf50;
      margin-bottom: 5px;
    }

    .team-member p {
      font-size: 1rem;
      color: #666;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .highlights {
        flex-direction: column;
        align-items: center;
      }

      .highlight-item {
        width: 80%;
      }

      .team {
        flex-direction: column;
        align-items: center;
      }

      .team-member {
        width: 80%;
      }
    }

    /* Services Section */
    .services {
      padding: 60px 20px;
      background-color: #fff;
      text-align: center;
      color: #333;
    }

    .services-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .services h2 {
      font-size: 2.5rem;
      color: rgb(82, 186, 159);
      margin-bottom: 20px;
    }

    .service-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
      margin: 40px 0;
    }

    .service-item {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      flex: 1 1 calc(33% - 20px);
      max-width: calc(33% - 20px);
    }

    .service-item img {
      width: 200px;
      height: 185px;
      margin-bottom: 10px;
    }

    .service-item h3 {
      font-size: 1.5rem;
      color: #4caf50;
      margin-bottom: 10px;
    }

    .service-item p {
      font-size: 1rem;
      line-height: 1.5;
    }

    .cta {
      margin-top: 30px;
    }

    .cta-button {
      padding: 15px 30px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #ffa500;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #ff7600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .service-list {
        flex-direction: column;
        align-items: center;
      }

      .service-item {
        flex: 1 1 100%;
        max-width: 100%;
      }
    }

    /* Pricing Section */
    .pricing {
      padding: 60px 20px;
      background-color: #f9f9f9;
      color: #333;
      text-align: center;
    }

    .pricing-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .pricing h2 {
      font-size: 2.5rem;
      color: rgb(82, 186, 159);
      margin-bottom: 20px;
    }

    .pricing p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .pricing-table {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .pricing-card {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 30%;
      text-align: left;
    }

    .pricing-card h3 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #ffa500;
    }

    .pricing-card table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    .pricing-card table th,
    .pricing-card table td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .pricing-card table th {
      background-color: #f4f4f4;
    }

    .pricing-card ul {
      list-style-type: none;
      padding: 0;
    }

    .pricing-card ul li {
      margin-bottom: 10px;
      font-size: 1rem;
    }

    .cta {
      margin-top: 30px;
    }

    .cta-button {
      padding: 15px 30px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #ffa500;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #ff7600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .pricing-table {
        flex-direction: column;
        align-items: center;
      }

      .pricing-card {
        width: 80%;
        margin-bottom: 20px;
      }

      .cta-button {
        width: 100%;
      }
    }

    /* Booking Section */
    .booking {
      padding: 60px 20px;
      background-color: #f9f9f9;
      text-align: center;
      color: #333;
    }

    .booking-container {
      max-width: 900px;
      margin: 0 auto;
    }

    .booking h2 {
      font-size: 2.5rem;
      color: rgb(82, 186, 159);
      margin-bottom: 20px;
    }

    .booking p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .booking-form {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
      text-align: left;
    }

    .booking-form .form-group {
      margin-bottom: 20px;
    }

    .booking-form label {
      font-size: 1rem;
      color: #555;
    }

    .booking-form input,
    .booking-form select {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .booking-form input[type="datetime-local"] {
      padding: 8px;
    }

    .contact-option {
      margin-top: 20px;
    }

    .contact-button {
      padding: 12px 30px;
      font-size: 1rem;
      margin: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-button.whatsapp {
      background-color: #25d366;
      /* WhatsApp green */
      color: #fff;
      margin-left: 1px;
    }

    .contact-button.call {
      background-color: #007bff;
      /* Call button blue */
      color: #fff;
      margin-left: 1px;
    }

    .contact-button:hover {
      opacity: 0.8;
    }

    .cta-button {
      padding: 15px 30px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #ffa500;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #ff7600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .booking-form {
        width: 90%;
      }

      .contact-button {
        width: 100%;
        margin-bottom: 10px;
      }
    }

    /* Footer Section */
    .footer {
      background-color: #333;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-links,
    .footer-social {
      flex: 1;
      margin: 10px;
    }

    .footer-links ul,
    .footer-social ul {
      list-style-type: none;
      padding: 0;
    }

    .footer-links ul li,
    .footer-social ul li {
      margin-bottom: 10px;
    }

    .footer-links ul li a,
    .footer-social ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 1rem;
      transition: color 0.3s ease;
    }

    .footer-links ul li a:hover,
    .footer-social ul li a:hover {
      color: #ffa500;
      /* Highlight color */
    }

    .footer-social ul li a {
      font-size: 1.2rem;
    }

    .footer-copyright {
      width: 100%;
      margin-top: 30px;
    }

    .footer-copyright p {
      font-size: 1rem;
      color: #bbb;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
      }

      .footer-links,
      .footer-social {
        width: 100%;
        text-align: center;
      }

      .footer-copyright {
        margin-top: 20px;
      }
    }

    html {
      scroll-behavior: smooth;
    }

    .cta-button a {
      text-decoration: none;
      /* Removes underline */
      color: inherit;
      /* Inherits the color of the button */
      display: inline-block;
      /* Ensures proper button alignment */
      width: 100%;
      /* Ensures the clickable area spans the button */
      height: 100%;
    }

    .cta-button a:hover {
      color: inherit;
      /* Prevents color change on hover */
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">
      <a href="#">
        <img src="{{ asset('backend/images/logo.png') }}" alt="Clean & Reliable" />
      </a>
      <span></span>
    </div>
    <nav>
      <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="nav-list">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Fresh, Clean, Convenient</h1>
      <p>Your Trusted Laundry Partner</p>
      <ul class="highlights">
        <li>Free Pickup & Delivery</li>
        <li>Eco-Friendly Detergents</li>
        <li>Express Service Available</li>
      </ul>
      <div class="cta-buttons">
        <button class="cta-button primary">
          <a href="#booking">Book a Service Now</a>
        </button>
      </div>
    </div>
  </section>

  <section class="about-us" id="about">
    <div class="about-container">
      <h2>About Us</h2>
      <p>
        At <strong>Laundry Business</strong>, we began with a simple mission:
        to make laundry services hassle-free, eco-friendly, and accessible for
        everyone. Our journey started with a passion for delivering quality
        and convenience to busy households and professionals.
      </p>
      <p>
        We are committed to providing clean, fresh laundry using eco-friendly
        detergents, affordable pricing, and quick turnaround times. Whether
        it’s a single shirt or a week’s worth of clothes, we handle each item
        with care and precision.
      </p>

      <div class="highlights">
        <div class="highlight-item">
          <h3>Eco-Friendly Practices</h3>
          <p>
            We use biodegradable detergents and water-saving techniques to
            protect the planet.
          </p>
        </div>
        <div class="highlight-item">
          <h3>Affordable Rates</h3>
          <p>Premium-quality service at prices that won’t break the bank.</p>
        </div>
        <div class="highlight-item">
          <h3>Quick Turnaround</h3>
          <p>Fast and reliable service to fit your busy schedule.</p>
        </div>
      </div>

      <!-- <h3>Meet Our Team</h3>
        <div class="team">
          <div class="team-member">
            <img src="team-member1.jpg" alt="Team Member 1" />
            <h4>John Doe</h4>
            <p>Founder & CEO</p>
          </div>
          <div class="team-member">
            <img src="team-member2.jpg" alt="Team Member 2" />
            <h4>Jane Smith</h4>
            <p>Operations Manager</p>
          </div>
          <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3" />
            <h4>Emily Davis</h4>
            <p>Customer Success Lead</p>
          </div>
        </div> -->
    </div>
  </section>

  <section class="services" id="services">
    <div class="services-container">
      <h2>Our Services</h2>
      <div class="service-list">
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Wash & Fold Icon" />
          <h3>Wash & Fold</h3>
          <p>
            Freshly cleaned and neatly folded clothes delivered right to your
            doorstep.
          </p>
        </div>
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1561053720-76cd73ff22c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Dry Cleaning Icon" />
          <h3>Dry Cleaning</h3>
          <p>
            Professional dry cleaning for delicate fabrics and special
            garments.
          </p>
        </div>
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1489274495757-95c7c837b101?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Ironing Icon" />
          <h3>Ironing/Pressing</h3>
          <p>Wrinkle-free clothes ready to wear for any occasion.</p>
        </div>
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1531811096342-e7aad2d08400?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Stain Removal Icon" />
          <h3>Stain Removal</h3>
          <p>
            Expert solutions to tackle tough stains and restore your clothes.
          </p>
        </div>
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1552623082-052dd60ef441?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Pickup & Delivery Icon" />
          <h3>Pickup & Delivery</h3>
          <p>
            Convenient, hassle-free pickup and delivery service at your
            convenience.
          </p>
        </div>
        <div class="service-item">
          <img
            src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Customized Laundry Plans" />
          <h3>Customized Laundry Plans</h3>
          <p>Customized Laundry Plans</p>
        </div>
      </div>
      <div class="cta">
        <button class="cta-button primary">Schedule a Service</button>
      </div>
    </div>
  </section>

  <section class="pricing" id="pricing">
    <div class="pricing-container">
      <h2>Our Pricing</h2>
      <p>Transparent and affordable pricing for all your laundry needs.</p>

      <!-- Pricing Table -->
      <div class="pricing-table">
        <div class="pricing-card">
          <h3>Per Kilogram Rates</h3>
          <table>
            <thead>
              <tr>
                <th>Service</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Wash & Fold</td>
                <td>₹50/kg</td>
              </tr>
              <tr>
                <td>Dry Cleaning</td>
                <td>₹75/item</td>
              </tr>
              <tr>
                <td>Ironing</td>
                <td>₹20/One Pair</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="pricing-card">
          <h3>Special Offers For Memebership</h3>
          <table>
            <thead>
              <tr>
                <th>Plan</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Weekly Plan</td>
                <td>₹300/week (5kg)</td>
              </tr>
              <tr>
                <td>Monthly Plan</td>
                <td>₹1200/month (20kg)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="pricing-card">
          <h3>Discounts</h3>
          <ul>
            <li>10% off for first-time users.</li>
            <li>15% off for bulk orders (10kg+).</li>
            <li>Free pickup/delivery on orders above ₹300.</li>
          </ul>
        </div>
      </div>

      <div class="cta">
        <button class="cta-button primary">Book Now</button>
      </div>
    </div>
  </section>

  <section class="booking" id="booking">
    <div class="booking-container">
      <h2>Book a Service</h2>
      <p>Fill in the details below to book your laundry service.</p>

      <!-- Booking Form -->
      <form class="booking-form" action="/submit-booking" method="POST">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            required
            placeholder="Your Name" />
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input
            type="text"
            id="address"
            name="address"
            required
            placeholder="Your Address" />
        </div>

        <div class="form-group">
          <label for="contact">Contact Number</label>
          <input
            type="tel"
            id="contact"
            name="contact"
            required
            placeholder="Your Contact Number" />
        </div>

        <div class="form-group">
          <label for="service">Service Required</label>
          <select id="service" name="service" required>
            <option value="wash-fold">Wash & Fold</option>
            <option value="dry-cleaning">Dry Cleaning</option>
            <option value="ironing">Ironing</option>
            <option value="stain-removal">Stain Removal</option>
            <option value="pickup-delivery">Pickup & Delivery</option>
          </select>
        </div>

        <div class="form-group">
          <label for="pickup-time">Preferred Pickup/Delivery Time</label>
          <input
            type="datetime-local"
            id="pickup-time"
            name="pickup-time"
            required />
        </div>

        <div class="form-group">
          <label for="pickup-time">Preferred Pickup/Delivery Time</label>
          <input
            type="datetime-local"
            id="pickup-time"
            name="pickup-time"
            required />
        </div>
        <div class="form-group">
          <label>Estimated Delivery Date</label>
          <p id="delivery-date" style="font-weight: bold">
            Select a pickup time to see your delivery date
          </p>
        </div>

        <div class="form-group contact-option">
          <p>Choose how you'd like to book:</p>
          <button type="button" class="contact-button whatsapp">
            Book via WhatsApp
          </button>
          <button
            type="button"
            class="contact-button call"
            onclick="showPhoneNumber();">
            Call Us
          </button>
        </div>

        <button type="submit" class="cta-button primary">
          Submit Booking
        </button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="footer-social">
        <h4>Follow Us</h4>
        <ul>
          <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
          <li>
            <a href="https://instagram.com" target="_blank">Instagram</a>
          </li>
          <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
          <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
        </ul>
      </div>

      <div class="footer-copyright">
        <p>
          &copy; 2024 <strong>Your Laundry Business Name</strong>. All rights
          reserved.
        </p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
  <script>
    const userBookingForm = document.querySelector(".booking-form");

    // Handle user form submission
    userBookingForm.addEventListener("submit", function(event) {
      event.preventDefault();

      // Get form data
      const newBooking = {
        name: document.getElementById("name").value,
        address: document.getElementById("address").value,
        contact: document.getElementById("contact").value,
        service: document.getElementById("service").value,
        pickupTime: document.getElementById("pickup-time").value,
      };

      // Get existing bookings from local storage or initialize an empty array
      const existingBookings =
        JSON.parse(localStorage.getItem("bookings")) || [];

      // Add the new booking to the array
      existingBookings.push(newBooking);

      // Save the updated array back to local storage
      localStorage.setItem("bookings", JSON.stringify(existingBookings));

      // Reset the form
      userBookingForm.reset();

      // Optional: Confirmation message
      alert("Your booking has been submitted successfully!");
    });
  </script>
  <script>
    function showPhoneNumber() {
      const phoneNumber = "+917702536403";
      const userConfirmed = confirm(`Call ${phoneNumber}?`);
      if (userConfirmed) {
        window.location.href = `tel:${phoneNumber}`;
      }
    }
  </script>
</body>

</html>