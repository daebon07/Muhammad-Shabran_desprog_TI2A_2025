<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX Lengkap</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Form Input dengan Validasi dan AJAX Lengkap</h1>
    <form id="myForm" method="post" action="">
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error"></span><br><br>

        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil-server" style="margin-top: 20px;">
        </div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form default
            
            var nama = $("#nama").val().trim();
            var email = $("#email").val().trim();
            var password = $("#password").val();
            var valid = true;

            // Bersihkan pesan kesalahan sebelumnya
            $(".error").text("");
            $("#hasil-server").html("");

            // --- 1. Validasi Client-Side ---
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi!"); valid = false;
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi!"); valid = false;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                // Contoh validasi format email sederhana di client
                $("#email-error").text("Format email tidak valid!"); valid = false;
            }
            
            // VALIDASI PASSWORD CLIENT-SIDE: MINIMAL 8 KARAKTER
            if (password.length < 8) { 
                $("#password-error").text("Password minimal 8 karakter!"); valid = false;
            } 

            // --- 2. Pengiriman Data Menggunakan AJAX ---
            if (valid) {
                var formData = $("#myForm").serialize();
                
                $.ajax({
                    // Mengirimkan kembali ke file ini (form_validasi_ajax_lengkap.php)
                    url: "form_validasi_ajax_lengkap.php", 
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Hanya menampilkan bagian output dari skrip PHP
                        $("#hasil-server").html(response);
                    }
                });
            } else {
                $("#hasil-server").html("<span class='error'>Perbaiki kesalahan di formulir Anda sebelum mengirim.</span>");
            }
        });
    });
    </script>
</body>
</html>
<?php
// --- Logika PHP (SERVER-SIDE) untuk memproses data AJAX ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan output PHP hanya mencakup hasil validasi (tanpa HTML form)
    
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $errors = array();

    // 1. Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi!";
    }

    // 2. Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // 3. Validasi Password SERVER-SIDE: MINIMAL 8 KARAKTER
    if (empty($password)) {
        $errors[] = "Password harus diisi!";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    // --- Hasil Validasi Server ---
    if (!empty($errors)) {
        echo "<span class='error'><b>Validasi Gagal di Server:</b></span><br>";
        foreach ($errors as $error) {
            echo "<span class='error'>" . $error . "</span><br>";
        }
    } else {
        // Data BERSIH: Lakukan pemrosesan aman (mis. hash password & simpan ke DB)
        echo "<span class='success'>Data berhasil dikirim: Nama = " . htmlspecialchars($nama) . ", Email = " . htmlspecialchars($email) . "</span>";
    }
    
    // Penting: Hentikan eksekusi setelah mengirim respons AJAX
    exit; 
}
?>