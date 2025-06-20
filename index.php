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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a href="#tentangkami">Tentang Kami</a></li>
                        <li><a href="#jelajahi">Jelajahi</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#pusatbantuan">Pusat Bantuan</a></li>
                    </ul>
                </div>
                <a class="font-medium text-[24px]">Hype<span class="font-normal">Sphere</span></a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-[16px] font-medium text-[#8c8c8c]">
                    <li><a href="#tentangkami">Tentang Kami</a></li>
                    <li><a href="#jelajahi">Jelajahi</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#pusatbantuan">Pusat Bantuan</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <?php include "components/darkmode.php" ?>
                <a href="login.php" class="btn btn-neutral">Gabung Sekarang ➚</a>
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
        <section id="faq" class="flex flex-col justify-center items-center gap-32 my-[75px]">
            <div class="flex flex-col justify-center items-center gap-[10px] max-w-[664px]">
                <span class="text-[#A19D9D] font-[800] text-[40px]">Frequently Asked Question</span>
                <span class="text-[#A19D9D] font-[600] text-[20px]">Mungkin anda masih bertanya-tanya mengenai apa itu
                    HypeSphere, berikut beberapa pertanyaan yang
                    mungkin bisa membantu anda! Butuh bantuan lainnya? Klik disini</span>
            </div>
            <div class="max-w-[675px]">
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" checked="checked" />
                    <div class="collapse-title font-semibold">Bagaimana cara mengakses aplikasi ini?</div>
                    <div class="collapse-content text-sm">Bagi pengguna baru, anda bisa mendaftarkan diri anda dengan
                        mendaftarkan akun pada menu Daftar disini. Dan bagi anda yang sudah mendaftar, anda cukup masuk
                        dengan email dan password yang telah anda daftarkan sebelumnya</div>
                </div>
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">Bagaimana cara mengubah kata sandi?</div>
                    <div class="collapse-content text-sm">Anda bisa pergi ke halaman akun anda dan pilih opsi “Ubah kata
                        sandi”, lalu anda dapat mengubah kata sandi anda yang lama dengan kata sandi yang baru</div>
                </div>
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">Apakah aplikasi ini aman digunakan?</div>
                    <div class="collapse-content text-sm">Ya, aplikasi ini sudah terjamin keamanannya. Anda juga tidak
                        perlu khawatir terkait keamanan data, karena privasi anda adalah prioritas kami</div>
                </div>
            </div>
        </section>
    </main>
    <footer class="px-[78px] pt-[63px] pb-[46px] bg-[#454545]">
        <div class="flex justify-between">
            <span class="text-primary-content text-[32px] font-[800]">Hype<span class="font-[400]">Sphere</span>
            </span>
            <div class="flex flex-col gap-[5px] max-w-[525px]">
                <span class="text-[20px] font-[800px] text-[#FAFF9A]">
                    Jelajahi Berbagai Komunitas Diseluruh Indonesia
                </span>
                <span class="text-primary-content text-[16px] font-[700]">
                    Kami memberikan akses tanpa batas kepada pengguna, yang bisa menghubungkan seluruh pengguna dari
                    berbagai daerah
                </span>
            </div>
            <a href="login.php" class="btn btn-warning w-fit">Coba Sekarang ➚</a>
        </div>
        <!-- Social Media -->
        <div class="flex gap-[54px] mt-[50px]">
            <div class="flex flex-col gap-[15px]">
                <span class="text-[#FAFF9A] text-[16px] font-[800]">Ikuti Kami</span>
                <div class="flex gap-[55px]">
                    <div class="flex gap-[10px] items-center text-primary-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                            </g>
                        </svg>
                        <span class="">@hype_sphere</span>
                    </div>
                    <div class="flex gap-[10px] items-center text-primary-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path
                                    d="M2.5 17a24.1 24.1 0 0 1 0-10a2 2 0 0 1 1.4-1.4a49.6 49.6 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.1 24.1 0 0 1 0 10a2 2 0 0 1-1.4 1.4a49.6 49.6 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                                <path d="m10 15l5-3l-5-3z" />
                            </g>
                        </svg>
                        <span class="">Hype Sphere</span>
                    </div>
                    <div class="flex gap-[10px] items-center text-primary-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                        </svg>
                        <span class="">Hype Sphere Official</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[15px]">
                <span class="text-[#FAFF9A] text-[16px] font-[800]">Hubungi Kami</span>
                <div class="flex gap-[55px]">
                    <div class="flex gap-[10px] items-center text-primary-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18.866 20.962q-1.362 0-2.316-.954t-.954-2.316v-4.5q0-.791.547-1.338t1.338-.546t1.338.546q.547.547.547 1.338v4.5h-1v-4.5q0-.373-.256-.628q-.256-.256-.63-.256t-.628.256t-.256.628v4.5q0 .936.668 1.603q.667.667 1.605.667t1.601-.667q.665-.667.665-1.603v-4h1v4q0 1.362-.954 2.316t-2.316.954M3.482 17q-.666 0-1.141-.475t-.474-1.14V4.615q0-.666.474-1.14T3.48 3h14.77q.666 0 1.14.475q.476.474.476 1.14v5.77H17.48q-1.195 0-2.04.813t-.845 1.994V17zm7.385-6.884l8-5.231L18.558 4l-7.692 5l-7.693-5l-.307.885z" />
                        </svg>
                        <span class="">hypesphere@admin.com</span>
                    </div>
                    <div class="flex gap-[10px] items-center text-primary-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                        <span class="">085123456789</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-[30px] w-full h-[1px] bg-[#878787]"></div>
        <span class="text-[16px] font-[700px] text-primary-content flex justify-center items-center">
            © 2024 All Rights Reserved. Created by JWD Engineer Team
        </span>
    </footer>
</body>

</html>