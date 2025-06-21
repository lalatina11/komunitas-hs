<?php
require  "action/register_action.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSphere | Daftar</title>
    <?php include "./components/scripts/index.php" ?>
</head>

<body>
    <main class="flex justify-center items-center w-full h-screen">
        <div class="flex items-center w-5/6 mx-auto">
            <div class="w-1/2">
                <img src="assets/images/images_on_auth.png" class="block mx-auto" alt="" srcset="">
            </div>
            <div class="w-1/2">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-[#454545]">Daftar dengan akun anda</h2>
                    <p class="text-xl text-[#404040]">Masukkan email dan kata sandi anda untuk melanjutkan</p>
                </div>
                <form action="" method="post">
                    <fieldset class="fieldset mb-3">
                        <legend class="fieldset-legend text-lg">Nama Pengguna</legend>
                        <input type="text" class="input input-lg w-4/5" name="name" placeholder="Masukan nama anda" />
                    </fieldset>
                    <fieldset class="fieldset mb-3">
                        <legend class="fieldset-legend text-lg">Email</legend>
                        <input type="text" class="input input-lg w-4/5" name="email" placeholder="Masukan email anda" />
                    </fieldset>
                    <fieldset class="fieldset mb-3">
                        <legend class="fieldset-legend text-lg">Kata Sandi</legend>
                        <input type="password" class="input input-lg w-4/5" name="password" placeholder="Masukan kata sandi anda" />
                    </fieldset>
                    <p class="text-[#A0A0A0]">Lupa kata sandi ? <a href="">ubah disini</a></p>
                    <div class="w-4/5 mt-4">
                        <button class="btn btn-neutral w-full mb-3" type="submit">Daftar</button>
                        <p class="text-center">Sudah punya akun ? <a href="login.php">masuk disini</a></p>
                    </div>
                    <div class="w-4/5 relative mt-12">
                        <hr class="border-[#D1D1D1]">
                        <p class="absolute -top-3 left-40 bg-white px-5 text-[#D1D1D1]">Atau masuk menggunakan</p>
                    </div>
                    <button class="btn btn-outline w-4/5 mt-6"><i class="fa-brands fa-google"></i> Masuk dengan Google</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>