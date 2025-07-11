<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'UMKM Wonorejo' ?></title>
  <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    .nav-underline {
      position: relative;
      display: inline-block;
    }
    .nav-underline::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 0;
      height: 2px;
      background: #fff;
      transition: width 0.3s;
    }
    .nav-underline:hover::after {
      width: 100%;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-green-700 text-white text-lg p-4" x-data="{ open: false }">
  <div class="container mx-auto flex items-center justify-between flex-wrap">
    <!-- Logo / Judul -->
    <h1 class="text-lg font-semibold">UMKM Wonorejo</h1>

    <!-- Tombol hamburger (hanya muncul di mobile) -->
    <button @click="open = !open" class="md:hidden focus:outline-none">
      <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Navigasi -->
    <nav :class="{'block': open, 'hidden': !open}" class="w-full md:w-auto mt-2 md:mt-0 md:flex md:items-center md:space-x-6 hidden">
      <a href="<?= base_url() ?>" class="block py-2 text-center md:py-0 nav-underline">Beranda</a>
      <a href="<?= base_url('umkm') ?>" class="block py-2 text-center md:py-0 nav-underline">UMKM</a>
      <a href="<?= base_url('galeri') ?>" class="block py-2 text-center md:py-0 nav-underline">Galeri UMKM</a>
      <a href="<?= base_url('tentang') ?>" class="block py-2 text-center md:py-0 nav-underline">Tentang</a>
      <a href="<?= base_url('kontak') ?>" class="block py-2 text-center md:py-0 nav-underline">Kontak</a>
    </nav>
  </div>
</header>
