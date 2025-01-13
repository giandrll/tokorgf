<style>
    /* Global Footer Styling */
    .footer {
      background-color: #e0e0e0; /* Abu lebih gelap */
      color: #222; /* Teks lebih gelap untuk kontras */
      padding: 40px 20px;
      font-family: Arial, sans-serif;
    }
  
    .footer .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
    }
  
    .footer-section {
      flex: 1;
      min-width: 250px;
      margin: 10px;
    }
  
    .footer-logo img {
      max-width: 200px;
      margin-bottom: 15px;
    }
  
    .footer h4 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #222;
    }
  
    .footer p {
      font-size: 14px;
      line-height: 1.6;
      color: #444; /* Abu lebih gelap */
      margin-bottom: 10px;
    }
  
    .footer a {
      color: #222;
      text-decoration: none;
      transition: color 0.3s ease;
    }
  
    .footer a:hover {
      color: #0056b3; /* Biru lebih gelap untuk hover */
    }
  
    .footer .social-links a {
      font-size: 18px;
      margin-right: 15px;
      color: #222;
      transition: color 0.3s ease;
    }
  
    .footer .social-links a:hover {
      color: #0056b3;
    }
  
    .footer .contact-info {
      margin-top: 10px;
    }
  
    .footer .contact-info i {
      margin-right: 10px;
    }
  
    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      margin-top: 30px;
      border-top: 1px solid #bbb; /* Garis abu-abu lembut */
      font-size: 14px;
      color: #666; /* Abu lebih lembut */
    }
  
    /* Responsive Design */
    @media (max-width: 768px) {
      .footer .container {
        flex-direction: column;
      }
  
      .footer {
        padding-bottom: 115px;
      }
  
      .footer-section {
        margin-bottom: 30px;
      }
    }
  </style>
  
  <footer class="footer">
    <div class="container">
      <!-- Logo and Description -->
      @foreach ($data_setting as $item)
      <div class="footer-section footer-logo">
        <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo {{ $item->nama_toko }}">
        <h4>{{ $item->nama_toko }}</h4>
        <p>To Infinity And Beyond</p>
      </div>
  
      <!-- Navigation Links -->
      <div class="footer-section">
        <h4>Company</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#about">About {{ $item->nama_toko }}</a></li>
          <li><a href="#contact">News</a></li>
          <li><a href="#produk">Careers</a></li>
        </ul>
      </div>
  
      <!-- Contact Info -->
      <div class="footer-section">
        <h4>Contact Us</h4>
        <div class="contact-info">
          <p><i class="fas fa-envelope"></i> <a href="mailto:{{ $item->email_toko }}">{{ $item->email_toko }}</a></p>
          <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/62{{ $item->telefon_toko }}">WhatsApp</a></p>
        </div>
        <h4>Follow Us</h4>
        <div class="social-links">
          <a href="{{ $item->facebook_toko }}"><i class="fab fa-facebook"></i></a>
          <a href="{{ $item->twitter_toko }}"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/{{ $item->instagram_toko }}"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      &copy; 2024 {{ $item->nama_toko }}. All rights reserved.
    </div>
  </footer>
  