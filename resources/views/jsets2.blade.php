<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Sheracon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
    }
    .header {
        background-color: #1660b3;
        color: white;
        padding: 40px 20px;
    }
    .header h1 {
        margin: 0;
    }
    .contact-section {
        padding: 40px 20px;
    }
    .contact-section h3 {
        font-weight: bold;
    }
    .contact-section h3 span {
        color: #1660b3;
    }
    .form-control {
        margin-bottom: 15px;
    }
    .btn-primary {
        background-color: #1660b3;
        border: none;
    }
    .info-box {
        margin-top: 20px;
    }
    .footer {
        background-color: #f5f5f5;
        padding: 30px 20px;
        font-size: 14px;
    }
    .footer h6 {
        font-weight: bold;
    }
    .footer .logo {
        font-size: 18px;
        color: #1660b3;
        font-weight: bold;
    }
    iframe {
        width: 100%;
        height: 250px;
        border: 0;
    }
    </style>
</head>
<body>

    <div class="header">
    <h1>Contacts</h1>
    </div>

    <div class="contact-section container">
        <div class="row">
        <!-- form sama teks -->
        <div class="col-md-6">
        <h3>Lokasi dan kontak <span>Sheracon</span></h3>
        <p>
            Konsultasikan kebutuhan anda pada kontraktor berpengalaman, kami jual pagar panel beton, jual paving block, menyediakan buis beton bangunan.
        </p>
        <p>
            Produksi pagar panel beton mutu beton berkualitas dan murah. dan Jual Saluran untuk berulang cocok untuk industri dan perumahan.
        </p>
        <form id="contactForm" onsubmit="return validateForm(event)">
            <input type="text" class="form-control" id="name" placeholder="Nama">
            <input type="text" class="form-control" id="telp" placeholder="Nomor Telepon">
            <input type="email" class="form-control" id="email" placeholder="Email">
            <textarea class="form-control" id="pesan" placeholder="Pesan" rows="4"></textarea>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
        
    </div>

        <!-- peta sama kontak -->
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18..."></iframe>
        <div class="info-box">
            <h5><strong>PT. ADHI CIPTA INDAH</strong></h5>
            <p>Jl. Suryopranoto 2 Komplek Harmoni Plaza Block F-2<br>Jakarta Pusat 10130</p>
            <p>📧 ptadhiciptaindah@gmail.com<br>📞 021-5900630, 021-63865432<br>📱 08158870057<br>🌐 sheracon.com</p>
            </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer container-fluid">
    <div class="row">
        <div class="col-md-4">
        <div class="logo">SHERACON</div>
        <p>
            PT. ADHI CIPTA INDAH<br>
            Sheracon melakukan pengawasan kualitas produk yang ketat dalam proses produksi beton pracetak.
        </p>
    </div>
    <div class="col-md-4">
        <h6>Contact Info</h6>
        <p>
            Jl. Suryopranoto 2 Komplek Harmoni Plaza Block F-2<br>
            Jakarta Pusat 10130<br>
            021 5900630<br>
            021 63865432<br>
            ptadhiciptaindah@gmail.com
        </p>
    </div>
    <div class="col-md-4">
        <h6>Menu</h6>
        <p>Home<br>Profile<br>Our Products<br>Projects<br>Contacts<br>News & Article</p>
    </div>
    </div>
</div>

    <script>
    function validateForm(event) {
        event.preventDefault(); 
    
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var telp = document.getElementById("telp").value;
        var pesan = document.getElementById("pesan").value;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
        if (!name || !email || !telp || !pesan) {
            swal("Gagal!", "Semua field harus diisi!", "error");
            return false;
        }
    
        if (!emailPattern.test(email)) {
            swal("Gagal!", "Format email tidak valid!", "error");
            return false;
        }
    
        if (isNaN(telp)) {
        swal("Gagal!", "Nomor telepon harus terdiri dari angka!", "error");
        return false;
        }
    
        swal("Terkirim!", "Pesan Anda berhasil dikirim!", "success")
            .then(() => {
                document.getElementById("contactForm").reset();
            });
    
        return true;
    }
    </script>    
    
</body>
</html>
