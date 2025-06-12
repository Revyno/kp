<div>
    <style>
    body {
      background: #e0f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-container {
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

<div class="register-container">
  <div class="brand">AquaSwim</div>
  <h4 class="text-center mb-3">Buat Akun Baru</h4>

  <form>
    <div class="mb-3">
      <label for="fullname" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="fullname" placeholder="Masukkan nama lengkap Anda">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Buat password">
    </div>
    <div class="mb-3">
      <label for="confirm-password" class="form-label">Konfirmasi Password</label>
      <input type="password" class="form-control" id="confirm-password" placeholder="Ulangi password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms">
      <label class="form-check-label" for="terms">Saya setuju dengan <a href="#">syarat dan ketentuan</a></label>
    </div>
    <div class="d-grid mb-3">
      <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
    <div class="text-center my-2">Atau daftar dengan</div>
    <div class="d-grid gap-2">
      <button type="button" class="btn btn-google"><img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Google</button>
      <button type="button" class="btn btn-facebook"><img src="https://img.icons8.com/color/16/000000/facebook-new.png"/> Facebook</button>
    </div>
    <div class="text-center mt-3">
      Sudah punya akun? <a href="login.html">Masuk sekarang</a>
    </div>
  </form>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
