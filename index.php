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
        </section>
    </main>
</body>

</html>