<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Rumah Sakit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffffff; /* Putih */
            color: #6c757d; /* Abu-abu terang */
            text-align: center;
            padding: 30px 0;
            border-bottom: 5px solid #ced4da; /* Abu-abu lebih gelap */
        }

        nav {
            background-color: #209677;
            text-align: center;
            padding: 15px 0;
            border-bottom: 2px solid #1f2b38;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #3498db;
            color: #fff;
        }

        section {
            padding: 40px 0; /* Meningkatkan tinggi section */
            text-align: center;
        }

        footer {
            background-color: #209677;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            border-top: 2px solid #1f2b38;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .card-title {
            color: #3498db;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .icon {
            font-size: 64px;
            color: #3498db;
            margin-bottom: 20px; /* Menambahkan margin bottom */
        }

        .welcome-text {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px; /* Menambahkan margin bottom */
        }

        .navbar-brand img {
            width: 180px; /* Lebih besar sedikit dari sebelumnya */
            height: auto;
            margin-right: 10px;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        .home-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .home-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body class="bg-light">
    <header class="bg-white text-dark"> <!-- Ubah warna background menjadi putih dan teks menjadi abu-abu terang -->
        <h1 class="display-4">
            <img src="{{ asset('rssehatbahagia.png') }}" alt="Logo" style="width: 180px; height: auto; margin-right: 10px;" />
        </h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registrasi_pasien') }}">Registrasi Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daftar_pasien') }}">Daftar Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daftar_dokter') }}">Daftar Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daftar_pegawai') }}">Daftar Pegawai</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <i class="fas fa-hospital icon"></i>
                        <div class="card-title">
                            <h5>Sistem Informasi RS Sehat Bahagia</h5>
                        </div>
                        <div class="welcome-text">
                            <p>Pilih salah satu menu di atas untuk melanjutkan.</p>
                            <p>Silakan klik di bawah ini untuk keluar.</p>
                            <button class="logout-btn">Keluar</button> <!-- Pindahkan tombol logout ke dalam section -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white">
        &copy; 2024 RS Sehat Bahagia
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
