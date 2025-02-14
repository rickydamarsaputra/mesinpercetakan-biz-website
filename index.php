<?php
require_once('const.php');
?>
<!doctype html>
<html lang="id">

<head>
  <!-- Metas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="author" content="Vicentra Dev" />
  <meta name="description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta name="keywords" content="mesin percetakan, mesin cetak offset, mesin digital printing, mesin cetak spanduk, mesin cetak stiker, mesin percetakan murah, jual mesin percetakan, harga mesin percetakan, distributor mesin percetakan, mesin percetakan terbaik">
  <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

  <title>Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik</title>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />
  <meta property="og:description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta property="og:image" content="https://mesinpercetakan.com/assets/images/logo-vicentra-black.webp" />
  <meta property="og:url" content="https://mesinpercetakan.com" />
  <meta property="og:site_name" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />
  <meta name="twitter:description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta name="twitter:image" content="https://mesinpercetakan.com/assets/images/logo-vicentra-black.webp" />
  <meta name="twitter:site" content="https://mesinpercetakan.com" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7FPFX21LX2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7FPFX21LX2');
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div id="app">
    <!-- HEADER -->
    <header class="border-b-2 py-4">
      <div class="lg:w-[80vw] mx-5 lg:mx-auto flex justify-between items-center relative">
        <a href="https://vicentra.co.id" class="beranda">
          <img src="./assets/images/logo-vicentra-black.webp" alt="logo-vicentra-black" class="h-[2.375rem]">
        </a>
        <div class="lg:hidden">
          <i :class="[isMenuShow ? 'fa-solid fa-xmark text-2xl' : 'fa-solid fa-bars text-2xl']" class=""
            @click="toggleMenu"></i>
        </div>
        <ul :class="[isMenuShow ? 'visible' : 'invisible']"
          class="lg:visible flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-5 absolute lg:static top-[3.125rem] left-0 right-0 bg-white lg:bg-transparent shadow lg:shadow-none p-2 lg:p-0 rounded lg:rounded-none">
          <li><a href="https://vicentra.co.id" class="beranda hover:underline">Beranda</a></li>
          <li><a href="https://vicentra.co.id/product/mesin/digital-printing"
              class="semua_produk hover:underline">Produk</a>
          </li>
          <li><a href="https://vicentra.co.id/terms-and-conditions"
              class="layanan_dan_perbaikan hover:underline">Layanan dan Perbaikan</a>
          </li>
          <li><a href="https://vicentra.co.id/about-us" class="tentang_kami hover:underline">Tentang Kami</a></li>
        </ul>
      </div>
    </header>
    <!-- HEADER -->

    <!-- PRODUCT SECTION -->
    <section>
      <div class="lg:w-[80vw] mx-5 lg:mx-auto grid lg:grid-cols-12 lg:gap-10 mt-10">
        <div class=" col-span-12 lg:col-span-8 order-first lg:order-none">
          <h1 class="text-3xl font-semibold text-gray-800">Butuh Mesin Percetakan? Inilah Rekomendasi Terbaik untuk Kualitas Hasil Maksimal Dari Vicentra!</h1>
          <figure>
            <img
              src="https://vicentra.co.id/storage/post-thumbnails/unboxing-dan-uji-coba-mesin-cnc-laser-co2-fortis-ntl-1390.webp"
              alt="unboxing-dan-uji-coba-mesin-cnc-laser-co2-fortis-ntl-1390" class="mt-[1.875rem] rounded-lg w-full">
            <figcaption class="text-center">unboxing dan uji coba mesin cnc laser co2 fortis ntl 1390</figcaption>
          </figure>
          <div class="mt-[1.875rem]">
            <p class="text-justify">
              Apakah Anda sedang mencari mesin percetakan yang andal untuk meningkatkan kualitas dan efisiensi bisnis Anda? Kami telah mengumpulkan beberapa rekomendasi mesin percetakan terbaik, mulai dari mesin cetak offset, mesin digital printing, hingga mesin cetak spanduk dan mesin cetak stiker yang cocok untuk berbagai kebutuhan. Temukan pilihan mesin percetakan murah dengan kualitas tinggi dari berbagai distributor mesin percetakan terpercaya. Kami juga menyediakan informasi mengenai harga mesin percetakan terbaru serta tempat jual mesin percetakan yang bisa Anda pertimbangkan. Yuk, simak daftarnya di bawah ini dan pilih mesin yang paling sesuai untuk bisnis Anda!
            </p>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="font-semibold">Tren Terkini dalam Industri Percetakan</h2>
            <p class="text-justify mt-4">
              Dalam setahun terakhir, permintaan terhadap produk percetakan seperti kemasan custom, label, stiker, dan merchandise kustom mengalami peningkatan signifikan. Hal ini seiring dengan pertumbuhan industri kreatif dan e-commerce di Indonesia. Dengan memiliki mesin-mesin di atas, Anda dapat memenuhi kebutuhan pasar yang terus berkembang dan meningkatkan daya saing bisnis Anda.
            </p>
            <h2 class="font-semibold mt-4">Kesimpulan</h2>
            <p class="text-justify mt-4">
              Memilih mesin percetakan yang tepat dapat meningkatkan efisiensi dan kualitas hasil cetak Anda. Jika Anda tertarik untuk mengetahui lebih detail mengenai mesin-mesin di atas, silakan kunjungi website utama kami di <a href="https://vicentra.co.id" class="underline">vicentra.co.id</a> atau channel youtube kami di <a href="https://www.youtube.com/@galeryvicentra" class="underline">@galeryvicentra</a> untuk melihat promo dan update terbaru. Jangan ragu untuk menghubungi kami jika Anda memerlukan konsultasi lebih lanjut. Selamat memilih mesin terbaik untuk bisnis Anda!
            </p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4 mt-[2rem] lg:mt-0">
          <h1 class="text-2xl font-semibold text-gray-800">Artikel Lainnya</h1>
          <div class="flex flex-col items-start gap-[0.625rem] mt-[1.875rem]">
            <?php foreach ($posts as $post): ?>
              <a href="<?= $post['link_post']; ?>">
                <h1 class="text-base"><?= $post['title']; ?></h1>
                <p class="text-xs text-gray-500"><?= $post['created_at']; ?></p>
                <hr class="mt-[0.625rem]">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- PRODUCT SECTION -->

    <!-- CTA SECTION -->
    <section class="my-[2.5rem]">
      <h1 class="capitalize text-3xl font-semibold text-center">Hubungi Kami</h1>
      <div class="relative flex justify-center mt-5">
        <div class="w-[80vw] h-[2px] bg-[#e1e1e1]"></div>
        <div class="w-[10vw] h-[2px] bg-[#1B0000] absolute"></div>
      </div>
      <div class="lg:w-[40vw] mx-5 lg:mx-auto flex justify-center mt-10">
        <?php foreach ($salesPeople as $sales): ?>
          <a href="https://api.whatsapp.com/send?phone=<?= $sales['phone']; ?>&text=Hallo%20Vicentra,%20Saya%20Ingin%20Memesan%20Mesin%20UV."
            target="_blank"
            class="<?= ($sales['id'] === 1) ? 'bg-[#006db8]' : 'bg-green-600'; ?> sales_<?= $sales['slug']; ?>_cta_link w-full h-[5rem] flex items-center gap-[1.5rem] rounded-full relative py-2 pl-[7rem]">

            <div class="absolute left-0">
              <div class="w-[5.5rem] h-[5.5rem] rounded-full border-[0.188rem] border-white relative">
                <img src="<?= $sales['photo']; ?>" alt="<?= $sales['name']; ?>" class="rounded-full" />
                <div class="w-[1.5rem] h-[1.5rem] flex justify-center items-center bg-white rounded-full absolute right-[-0.75rem] top-[50%] transform translate-y-[-50%]">
                  <i class="fa-brands fa-whatsapp text-green-500"></i>
                </div>
              </div>
            </div>

            <div class="mr-4">
              <div class="flex gap-2">
                <h1 class="text-sm font-medium text-white/50 capitalize">
                  <?= $sales['name']; ?>
                </h1>
                <span class="flex justify-center items-center text-xs font-semibold text-white bg-white/20 px-2 rounded-md capitalize">
                  online
                </span>
              </div>
              <p class="w-full text-sm font-medium text-white mt-1">
                <?= $sales['additional_sentence']; ?>
              </p>
            </div>

          </a>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- CTA SECTION -->

    <!-- FOOTER -->
    <footer class="bg-black py-5 flex justify-center items-center">
      <p class="text-sm text-white">Vicentra © 2025 Created By Vicentra Dev.</p>
    </footer>
    <!-- FOOTER -->
  </div>

  <script defer type="module" src="./assets/js/app.js"></script>
</body>

</html>