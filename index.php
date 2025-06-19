<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSphere</title>
    <?php include "./components/scripts/index.php" ?>
</head>

<body>
    <?php include "./components/navbar-landing-page.php" ?>
    <main class="flex flex-col justify-center items-center my-8 p-4 px-10">
        <section id="jelajahi" class="relative">
            <img src="/assets/images/bg-jelajahi.svg" alt="bg" class="flex-1 relative z-1" />
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
            <section id="pusatbantuan" class="relative flex flex-col justify-center items-center mt-20">
                <img src="assets/images/pusat-bantuan/110679.svg" alt="">
                <img src="assets/images/pusat-bantuan/Group 3.svg" class="absolute left-20 top-28" alt="">
                <img src="assets/images/pusat-bantuan/Frame 27.svg" class="absolute left-[303px] top-[149px]" alt="">
                <img src="assets/images/pusat-bantuan/Frame 28.svg" class="absolute left-[294px] top-[238px]" alt="">
                <img src="assets/images/pusat-bantuan/Frame 26.svg" class="absolute left-[342px] top-[394px]" alt="">
                <div class="absolute left-[647px] top-[105px] h-[334px] flex flex-col justify-between">
                    <button class="btn rounded-full w-fit btn-accent px-6">⦁ Jelajahi</button>
                    <span class="font-[800] text-[40px] text-[#FAFF9A]">Temukan Lebih Banyak Komunitas</span>
                    <span class="font-[600] text-[20px] text-primary-content">Banyak pengguna yang ingin menjelajahi
                        berbagai daerah hanya dari rumah, kami hadir untuk mempermudah akses semua pengguna dalam satu
                        aplikasi</span>
                    <a href="login.php" class="btn btn-warning w-fit">Gabung Sekarang ➚</a>
                </div>
            </section>
        </section>
    </main>
</body>

</html>