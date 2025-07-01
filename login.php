<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSphere | Masuk</title>
    <?php include "./components/scripts/index.php" ?>
</head>

<body>
    <main class="flex justify-center items-center w-full min-h-screen p-4">
        <div class="flex flex-col md:flex-row w-full md:w-5/6 lg:w-3/4 max-w-6xl mx-auto bg-white shadow-md rounded-xl overflow-hidden">
            <!-- Gambar -->
            <div class="w-full md:w-1/2 hidden md:block">
                <img src="assets/images/images_on_auth.png" class="w-full h-full object-cover" alt="Auth Image">
            </div>

            <!-- Form -->
            <div class="w-full md:w-1/2 p-6 sm:p-10">
                <div class="mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#454545]">Masuk dengan akun anda</h2>
                    <p class="text-base sm:text-xl text-[#404040]">Masukkan email dan kata sandi anda untuk melanjutkan</p>
                </div>
                <form action="action/login_action.php" method="post">
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend text-base sm:text-lg">Email</legend>
                        <input type="text" class="input input-lg w-full" name="email" placeholder="Masukan email anda" />
                    </fieldset>
                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend text-base sm:text-lg">Kata Sandi</legend>
                        <input type="password" class="input input-lg w-full" name="password" placeholder="Masukan kata sandi anda" />
                    </fieldset>
                    <p class="text-[#A0A0A0] text-sm mb-2">Lupa kata sandi ? <a href="#" class="text-blue-500 hover:underline">ubah disini</a></p>
                    <div class="mt-4">
                        <button class="btn btn-neutral w-full mb-3" type="submit">Masuk</button>
                        <p class="text-center text-sm">Belum punya akun ? <a href="register.php" class="text-blue-500 hover:underline">daftar disini</a></p>
                    </div>

                    <div class="relative mt-10 mb-6">
                        <hr class="border-[#D1D1D1]">
                        <p class="absolute -top-3 left-1/2 -translate-x-1/2 bg-white px-4 text-[#D1D1D1] text-sm">Atau masuk menggunakan</p>
                    </div>

                    <button class="btn btn-outline w-full flex items-center justify-center gap-2">
                        <i class="fa-brands fa-google"></i> Masuk dengan Google
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>