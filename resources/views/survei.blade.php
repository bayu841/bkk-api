<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survei</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Satoshi Variable', sans-serif;
        }

        nav {
            background-color: #ffffff;
            font-weight: bold;
            height: 80px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            z-index: 999;
        }

        nav ul img{
            margin-right: 45rem;
        }

        nav ul {
            display: flex;
            gap: 24px;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
        }

        nav .btn {
            width: 100px;
        }

        .btn {
            justify-content: end;
            width: 100px;
            margin-left: 47rem;
        }
    </style>
    <nav>
        <ul>
            <li><img src="{{ asset('image/logo.png') }}" alt="" width="200"></li>
            <li><a href="{{route('home')}}">Beranda</a></li>
            <li><a href="{{route('home')}}">Tentang</a></li>
            <li><a href="{{route('daftarlowongan')}}">Loker</a></li>
            <li><a href="{{route('home')}}">Perusahaan</a></li>
        </ul>
    </nav><br><br><br>
    <section class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="text-center p-4 shadow-sm bg-white rounded" style="max-width: 900px; width: 100%; height: 400px;">
            <!-- Logo -->
            <img src="{{ asset('image/logosmk (1).png') }}" alt="Logo Sekolah" class="mb-3" style="width: 80px;">

            <!-- Judul -->
            <h2 class="fw-bold">Hai Selamat Datang</h2>
            <p class="text-muted">Silahkan isi beberapa survey berikut</p>

            <!-- Form -->
            <form>
                <div class="mb-3 text-start">
                    <label for="nisn" class="form-label">NISN<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN">
                </div>
               <a href="{{route('form')}}" class="btn btn-primary">Lanjut</a>
            </form>
        </div>
    </section>

</body>

</html>
