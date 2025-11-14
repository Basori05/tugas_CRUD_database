<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bara Buku Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* === Tema Elegan Bara Buku Store === */
    body {
      background: 
        linear-gradient(rgba(25, 20, 20, 0.8), rgba(25, 20, 20, 0.8)),
        url('https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1600&q=80')
        no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      color: #f7f2e8;
    }

    .navbar {
      background: rgba(58, 42, 25, 0.95);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .navbar-brand {
      font-weight: 700;
      letter-spacing: 1px;
      font-size: 1.3rem;
      color: #f7e9b3 !important;
    }

    .navbar-brand span {
      color: #f5d97e;
    }

    h2.title {
      font-weight: 700;
      color: #f7e9b3;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
    }

    .container {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 25px 30px;
      border-radius: 16px;
      backdrop-filter: blur(6px);
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.3);
    }

    .card {
      border: none;
      border-radius: 15px;
      background-color: rgba(255, 255, 255, 0.12);
      color: #fff;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    }

    .btn-primary {
      background-color: #d4a373;
      border: none;
      color: #2d1c0f;
      font-weight: 600;
    }

    .btn-primary:hover {
      background-color: #e3b37a;
      color: #1e1207;
    }

    .alert-success {
      background-color: rgba(212, 243, 218, 0.9);
      border: none;
      color: #1b5e20;
      font-weight: 500;
    }

    footer {
      text-align: center;
      color: #f7e9b3;
      margin-top: 60px;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    }

    /* Scrollbar halus */
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-thumb {
      background: #d4a373;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">📚 <span>Bara Buku</span> Store</a>
    </div>
  </nav>

  <div class="container mt-4">
    <h2 class="text-center mb-3 title">Data Buku Bara Store</h2>

<div class="text-center mb-4">
  <a href="{{ route('tentang') }}" class="btn btn-outline-warning px-4 fw-semibold shadow-sm">
    Tentang Bara Buku Store
  </a>
</div>


    @if(session('success'))
      <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
      <script>
        // Hilangkan alert otomatis
        setTimeout(() => {
          const alertBox = document.getElementById('alertMessage');
          if (alertBox) {
            alertBox.classList.remove('show');
            alertBox.classList.add('fade');
            setTimeout(() => alertBox.remove(), 500);
          }
        }, 3000);
      </script>
    @endif

    @yield('content')
  </div>

  <footer>
    &copy; {{ date('Y') }} Bara Buku Store • Inspiring Readers Everywhere ✨
  </footer>
</body>
</html>
