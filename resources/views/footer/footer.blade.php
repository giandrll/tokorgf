<style>
  
  .footer {
        background-color: #EEEEEE;
        color: white;
        padding: 40px 0 20px;
        padding-bottom: 20px;
    }

    @media (max-width: 768px) {
    .footer {
        padding-bottom: 100px;
    }

}


.footer .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer2,
.footer3,
.footer4 {
    flex: 1;
    min-width: 200px;
    margin-bottom: 20px;
    padding: 0 15px;
}

.footer img {
    margin-bottom: 15px;
}

.footer h4 {
    font-family: 'small-caps bold', sans-serif;
    color: #000;
    /* Teks hitam */
    margin: 10px 0;
    /* Margin vertikal */
    font-weight: 900;
}

.footer h6 {
    margin-bottom: 5px;
}

.footer a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer a:hover {
    color: #ddd;
}

.footer p {
    margin-bottom: 10px;
}

.social-links a {
    margin-right: 10px;
}

.text-center {
    width: 100%;
    text-align: center;
    padding-top: 20px;
    margin-top: 20px;
    border-top: 1px solid #555;
}

@media (max-width: 768px) {
    .footer .container {
        flex-direction: column;
    }

    .footer2,
    .footer3,
    .footer4 {
        width: 100%;
        margin-bottom: 30px;
    }
}

.abouth1 {
    font-weight: bold;
    /* Atau bisa menggunakan '700' */
}

.footerlogo {
    display: block;
    /* Pastikan logo ditampilkan sebagai blok */
}

.footer3 {
    display: flex;
    flex-direction: column;
    /* Mengatur elemen menjadi kolom */
    align-items: flex-start;
    /* Mengatur item di kiri */
    padding: 15px;
    /* Tambahkan padding sesuai kebutuhan */
    background-color: 0;
    /* Contoh warna latar belakang */
    color: white;
    /* Warna teks */
    border-radius: 8px;
    /* Radius border jika diinginkan */
    transition: transform 0.3s ease;
    margin: 10px;
    /* Tambahkan margin untuk spasi */
}

.footer4 {
    display: flex;
    flex-direction: column;
    /* Mengatur elemen menjadi kolom */
    align-items: flex-start;
    /* Mengatur item di kiri */
    padding: 15px;
    /* Tambahkan padding sesuai kebutuhan */
    background-color: 0;
    /* Contoh warna latar belakang */
    color: white;
    /* Warna teks */
    border-radius: 8px;
    /* Radius border jika diinginkan */
    transition: transform 0.3s ease;
    margin: 10px;
    /* Tambahkan margin untuk spasi */
}  
</style>
<footer class="footer">
    <div class="container">
        <div class="footer2">
            @foreach ($data_setting as $item)
        {{-- @dd($item) --}}
        <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Logo" width="230">
        <h4>{{ $item->nama_toko }}</h4>
            <p>To Infinity And Beyond</p>
        </div>
        <div class="footer3">
            <h4
                style=" font-weight: bold; font-weight: 900; cursor: pointer; text-decoration: none;  text-decoration: underline;">
                Company</h4>
            <h6><a href="#about" style="color: black;">About {{ $item->nama_toko }}</a></h6>
            <h6><a href="#contact" style="color: black;">News</a></h6>
            <h6><a href="#produk" style="color: black;">Carrers</a></h6>
        </div>
        <div class="footer4">
            <h4 style=" font-weight: bold; font-weight: 900; cursor: pointer; text-decoration: none;  text-decoration: underline;" id="contact">Contac Us</h4>
            <h6 style="color: black;">Email</a></h6>
            <p><a href="{{ $item->email_toko }}" style="color: #000000;"><i class="fas fa-envelope" style="color: #000000;"></i>  {{ $item->email_toko }}</a></p>
            <h6 style="color: black;">Telepon</a></h6>
            <p><a href="https://wa.me/62{{ $item->telefon_toko }}"  style="color: #000000;">      <i class="fab fa-whatsapp"></i>  Whatapp
            </a></p>

            <h6 style="color: black;">Media Sosial</a></h6>
            <p  style="color: #000000;">
                    <a href="{{ $item->facebook_toko }}"  style="color: #000000;"><i class="fab fa-facebook"></i></a> |
                    <a href="{{ $item->twitter_toko }}"  style="color: #000000;">      <i class="fab fa-twitter"></i>
                    </a> |
                    <a href="https://www.instagram.com/{{ $item->instagram_toko }}"  style="color: #000000;">      <i class="fab fa-instagram"></i>
                    </a>
                </p>
        </div>
        <p class="text-center">&copy; 2024 {{ $item->nama_toko }}, Idn. All rights reserved</p>
        @endforeach
    </div>
</footer>