<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien</title>
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
            margin-bottom: 60px;
        }

        .card-title {
            color: #343a40; /* Warna gelap seperti Daftar Pasien, Daftar Dokter, dan Daftar Pegawai */
            font-size: 28px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body class="bg-light">
    <header class="bg-white text-dark">
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
                        <div class="card-title">
                            <h5>Registrasi Pasien</h5>
                        </div>

                        <!-- Display success alert if it exists -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('registrasi_pasien') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama Pasien:</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="umur">Umur Pasien:</label>
                                <input type="text" name="umur" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat Pasien:</label>
                                <textarea name="alamat" rows="4" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk:</label>
                                <input type="date" name="tanggal_masuk" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Registrasi Pasien</button>
                        </form>
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
