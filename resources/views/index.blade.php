<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Farmasi</title>
    <!-- Style CSS (dapat disimpan dalam file terpisah jika diinginkan) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Membuat konten terisi setidaknya seluruh tinggi layar */
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #f0f0f0;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .container {
            flex: 1; /* Mengisi ruang yang tersisa */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .content-left, .content-right {
            flex-grow: 1; /* Mengambil ruang yang tersisa */
        }
        .content-right img {
            max-width: 100%; 
            height: auto;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard Farmasi</h1>
    </header>

    <nav>
        <ul>
            @foreach($menuItems as $menuItem => $link)
                <li><a href="{{ route('dashboard.page', ['page' => $link]) }}">{{ $menuItem }}</a></li>
            @endforeach
        </ul>
    </nav>

    <div class="container">
        <div class="content-wrapper">
            <div class="content-left">
                <h2>Welcome to Dashboard Farmasi</h2>
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        <p>Hak Cipta &copy; 2024 Contoh Perusahaan.</p>
    </footer>
</body>
</html>
