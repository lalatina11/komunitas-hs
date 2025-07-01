<?php
session_start();

// check session user
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HypeSphere | Dashboard</title>
    <?php include "./components/scripts/index.php" ?>
</head>

<body class="px-10">
    <nav
        class="fixed z-10 w-[20vw] h-screen flex flex-col gap-[23px] justify-between shadow-sm shadow-zinc-500 pb-[20px]">
        <a class="mx-[20px] font-semibold text-[24px] mt-[30px]" href="/">Hype<span
                class="font-medium mb-[15px]">Sphere</span></a>
        <div class="mx-[20px] mb-10 flex flex-col gap-[10px]">
            <span class="text-zinc-500">Navigasi</span>
            <div class="flex flex-col gap-0.5">
                <a class="btn flex justify-start items-center">Beranda</a>
                <span class="btn flex justify-start items-center">Jelajahi</span>
                <span class="btn flex justify-start items-center">Notifikasi</span>
                <span class="btn flex justify-start items-center">Komunitasmu</span>
            </div>
        </div>
        <div class="mx-[20px] mb-10 flex flex-col gap-[10px]">
            <span class="text-zinc-500">Setelan</span>
            <div class="flex flex-col gap-0.5">
                <?php include "components/darkmode.php" ?>
                <a class="btn flex justify-start items-center">Disukai</a>
                <span class="btn flex justify-start items-center">Disimpan</span>
                <span class="btn flex justify-start items-center">Ubah Data Pribadi</span>
            </div>
        </div>
        <a href="action/logout_action.php" class="btn flex justify-start items-center mx-[15px]">Keluar</a>
    </nav>
    <nav class="fixed right-10 z-10 w-[20vw] ml-auto h-screen shadow-sm shadow-zinc-500 pt-[40px]">
        <div class="px-[20px] flex flex-col gap-[25px]">
            <div class="flex gap-[15px] items-center">
                <div class="avatar">
                    <div class="ring-primary ring-offset-base-100 w-[50px] rounded-full ring-2 ring-offset-2">
                        <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-[16px] font-bold capitalize"><?= $name ?></span>
                    <span class="text-zinc-500 text-[13px]">26 lencana dimiliki</span>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-zinc-500 text-[13px]">Tentang</span>
                <span>Berjuang keras tanpa mengenal lelah</span>
            </div>
            <div class="flex flex-col gap-[10px]">
                <span class="text-zinc-500 text-[13px]">Lencana</span>
                <div class="flex flex-col gap-[10px]">
                    <div class="flex gap-[10px] items-center">
                        <div class="avatar">
                            <div class="ring-primary ring-offset-base-100 w-[35px] rounded-full ring-2 ring-offset-2">
                                <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
                            </div>
                        </div>
                        <div class="text-[13px]">Lencana 1</div>
                    </div>
                    <div class="flex gap-[10px] items-center">
                        <div class="avatar">
                            <div class="ring-primary ring-offset-base-100 w-[35px] rounded-full ring-2 ring-offset-2">
                                <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
                            </div>
                        </div>
                        <div class="text-[13px]">Lencana 1</div>
                    </div>
                    <div class="flex gap-[10px] items-center">
                        <div class="avatar">
                            <div class="ring-primary ring-offset-base-100 w-[35px] rounded-full ring-2 ring-offset-2">
                                <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
                            </div>
                        </div>
                        <div class="text-[13px]">Lencana 1</div>
                    </div>
                    <div class="flex gap-[10px] items-center">
                        <div class="avatar">
                            <div class="ring-primary ring-offset-base-100 w-[35px] rounded-full ring-2 ring-offset-2">
                                <img src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" />
                            </div>
                        </div>
                        <div class="text-[13px]">Lencana 1</div>
                    </div>
                </div>
                <span class="text-zinc-500 text-[13px]">20+ Lencana Lainnya</span>
            </div>
        </div>
    </nav>
    <div class="container relative mx-auto px-16 w-[60vw] min-h-screen z-10">
        <div class="fixed w-full">
            <form class="max-w-[42vw] mt-2 gap-3 flex w-full">
                <input placeholder="Cari sesuatu..." class="input flex-1" type="text" name="" id="">
                <button class="btn btn-accent">Cari</button>
            </form>
        </div>
        <div class="flex flex-col w-full">
            <h2 class="text-4xl font-bold text-primary mb-4 mt-14">Selamat datang, <?= $name ?>!</h2>
            <div>

            </div>
        </div>
    </div>
</body>

</html>