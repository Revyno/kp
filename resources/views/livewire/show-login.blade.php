<div>
     <title>Login - AquaSwim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: #e0f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 2rem;
      max-width: 400px;
      width: 100%;
    }
    .brand {
      font-size: 24px;
      font-weight: bold;
      color: #00bcd4;
      text-align: center;
      margin-bottom: 1rem;
    }
    .btn-google, .btn-facebook {
      background: white;
      border: 1px solid #ddd;
      color: #555;
      width: 100%;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="brand">AquaSwim</div>
  <h4 class="text-center mb-3">Selamat Datang Kembali!</h4>

  <form>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password <a href="#" class="float-end">Lupa password?</a></label>
      <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="remember">
      <label class="form-check-label" for="remember">Ingat saya</label>
    </div>
    <div class="d-grid mb-3">
      <button type="submit" class="btn btn-primary">Masuk</button>
    </div>
    <div class="text-center my-2">Atau masuk dengan</div>
    <div class="d-grid gap-2">
      <button type="button" class="btn btn-google"><img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Google</button>
      <button type="button" class="btn btn-facebook"><img src="https://img.icons8.com/color/16/000000/facebook-new.png"/> Facebook</button>
    </div>
    <div class="text-center mt-3">
      Belum punya akun? <a href="register.html">Daftar sekarang</a>
    </div>
  </form>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
