<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSphere</title>
    <?php include "./components/scripts/index.php" ?>
</head>

<body>
    <nav class="w-full">
        <div class="navbar bg-base-100 w-11/12 mx-auto">
            <div class="navbar-start">
                <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Tentang Kami</a></li>
                    <li><a>Jelajahi</a></li>
                    <li><a>FAQ</a></li>
                    <li><a>Pusat Bantuan</a></li>
                </ul>
                </div>
                <a class="font-medium text-[24px]">Hype<span class="font-normal">Sphere</span></a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-[16px] font-medium text-[#8c8c8c]">
                    <li><a>Tentang Kami</a></li>
                    <li><a>Jelajahi</a></li>
                    <li><a>FAQ</a></li>
                    <li><a>Pusat Bantuan</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <?php include "components/darkmode.php" ?>
                <a class="btn btn-neutral">Gabung Sekarang ➚</a>
            </div>
        </div>
    </nav>

    <main class="flex flex-col justify-center items-center my-8 p-4 px-10 w-11/12 mx-auto">
        <section id="jelajahi" class="relative">
            <img src="assets/images/bg-jelajahi.svg" alt="bg" class="flex-1 relative z-1" />
            <div class="absolute top-40 z-2 left-20 max-w-[632px] flex flex-col gap-[30px]">
                <span class="text-[#FAFF9A] font-[800] text-[48px]">
                    Jelajahi Berbagai Komunitas Diseluruh
                    Indonesia
                </span>
                <span class="text-[20px] font-[600] text-primary-content">
                    Kami memberi akses kepada penngguna untuk memudahkan mereka dalam berkomunikasi dari berbagai
                    macam daerah yang ada di seluruh Indonesia
                </span>
                <a href="login.php" class="btn btn-warning w-fit">Gabung Sekarang ➚</a>
            </div>
        </section>
        <section id="tentangkami" class="relative flex flex-col my-32">
            <button class="btn rounded-full w-fit btn-accent px-6">⦁ Tentang Kami</button>
            <div class="flex justify-between gap-16 my-20 text-zinc-500">
                <span class="font-[800] text-[40px] min-w-[484px]">
                    Komunitas Dari Berbagai Macam Daerah
                </span>
                <span>
                    Kami memberikan akses tanpa batas kepada pengguna, yang bisa menghubungkan seluruh pengguna dari
                    berbagai daerah
                </span>
                <a href="login.php" class="btn btn-warning w-fit">Gabung Sekarang ➚</a>
            </div>
            <img src="/assets/images/tentang-kami.svg" class="w-[83.2%] m-auto" alt="">
        </section>
    </main>
</body>

</html>