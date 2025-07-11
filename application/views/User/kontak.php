<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak & Dukungan UMKM Wonorejo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">

    <?php $this->load->view('User/templates/header'); ?>

    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Kami Siap Membantu Anda</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Punya pertanyaan tentang produk, ingin bergabung, atau sekadar ingin berdiskusi? Tim kami di UMKM Wonorejo siap membantu Anda.
            </p>
        </div>
    </section>

    <section id="kontak" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
                
                <div class="lg:col-span-1 bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Informasi Kontak</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1 mr-4"></i>
                            <div><strong>Alamat:</strong><br>Jl. Wonorejo No.123, Rungkut, Surabaya, Jawa Timur</div>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-blue-600 mr-4"></i>
                            <a href="tel:081234567890" class="hover:text-blue-600">0812-3456-7890</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-user-tie text-blue-600 mr-4"></i>
                            <div><strong>Kontak Person:</strong> Bapak Surya Hadi</div>
                        </li>
                         <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-600 mr-4"></i>
                            <a href="mailto:info@umkmwonorejo.com" class="hover:text-blue-600">info@umkmwonorejo.com</a>
                        </li>
                    </ul>
                    <div class="mt-8 border-t pt-6">
                         <h4 class="text-lg font-semibold mb-3 text-gray-800">Jam Operasional</h4>
                         <p class="text-gray-600">Senin - Jumat: 08:00 - 16:00 WIB</p>
                         <p class="text-gray-600">Sabtu: 09:00 - 13:00 WIB</p>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Kirim Pesan Langsung</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <label for="subjek" class="block text-sm font-medium text-gray-700 mb-1">Subjek</p>
                            <select id="subjek" name="subjek" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option>Pertanyaan Umum</option>
                                <option>Pendaftaran Anggota</option>
                                <option>Kemitraan & Kerjasama</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda</label>
                            <textarea id="pesan" name="pesan" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
         <div class="max-w-6xl mx-auto px-4">
             <h2 class="text-3xl font-bold text-center mb-10">Temukan Lokasi Kami</h2>
            <div class="w-full h-96 md:h-[500px] shadow-xl rounded-xl overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15829.41249247653!2d112.7937338871408!3d-7.314646049970926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa687357c21b%3A0x2cb338b251a66a3!2sWonorejo%2C%20Rungkut%2C%20Surabaya%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1694503780331!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
         </div>
    </section>

    <?php $this->load->view('User/templates/footer'); ?>
</body>
</html>