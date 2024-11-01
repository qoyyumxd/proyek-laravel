<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    <img src="{{ asset('logo.png') }}" alt="Logo UNNES" width="75">
    <h1 style="text-align: center;" id="Judul">HALAMAN LOGIN</h1>
    <p style="text-align: center;" class="paragraf">Selamat datang di Mata kuliah Pemrograman Web</p>
    <div class="halamanlogin">
        <img src="{{ asset('myunnes.png') }}" alt="Logo MyUNNES" class="foto-login">
        <div class="separator"></div>
        <div class="form-login">
            <h2 class="teks-login"><u>Login</u></h2>
            <p style="color: blue; background-color: white;">Silahkan masukkan NIM dan Password.</p>
            <form>
                <label>NIM:</label><br>
                <input type="text"><br>
                <label>Password:</label><br>
                <input type="password"><br>
            </form>
            <button onclick="document.location='belajar4.html'" style="margin-left: 20px;">Login</button>
        </div>
    </div>
    <script>
        window.alert("Login telah berhasil!");
    </script>
</body>
</html>