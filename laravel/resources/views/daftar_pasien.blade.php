<!-- resources/views/daftar_pasien.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasien</title>
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
            background-color: #ffffff;
            color: #6c757d;
            text-align: center;
            padding: 30px 0;
            border-bottom: 5px solid #ced4da;
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
            padding: 40px 0;
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

        .container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 1rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .thead-dark th {
            color: #fff;
            background-color: #209677;
            border-color: #454d55;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
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
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pasienList as $p)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->umur }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->tanggal_masuk }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Tidak ada data pasien</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
