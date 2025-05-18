<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darul Faroh</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white border-gray-500 dark:bg-gray-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo df.png" class="h-22" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Darul Faroh</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900">
                    <li><a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 dark:text-white">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 dark:text-white">About</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 dark:text-white">Services</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 dark:text-white">Pricing</a></li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 dark:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6"></h1>

        <div class="relative w-full mb-8" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/dsaaa.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/dsaa.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/dsaaaa.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/dsaaaa.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/dsaa.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <section class="mb-8 bg-center bg-no-repeat bg-cover bg-[url('/public/images/dsa.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">MASA MUDA</h1>
                                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">ILMU bagaikan AIR yang JERNIH</h1>

                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                    apabila terkurung disuatu tempat AIR tersebut akan mengeruh.
                    Tetapi, jika AIR tersebut mengalir maka AIR tersebut akan tetap jernih.
                    Selagi Masih muda, selagi  bisa lebih mudah mengingat materi-materi pelajaran gunakanlah waktu muda untuk belajar.
                    Memang, selagi masih muda seringkali  berpikiran untuk terus bermain dan sulit sekali rasanya untuk belajar.
                    Bahkan, tak jarang kita mendengar omongan orang seperti
                    "masih muda tuh puas-puasin main, nanti kalau sudah tua gak bisa main kayak gini lagi".
                    Dengan belajar dimasa muda pun, kelak dapat memanfaatkan ilmu yang sudah di  dapat kepada anak cucu  kelak.
                    Tertuang dalam kitab Ta'lim Muta'allim</p>

            </div>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                </div>
        <div style="display: flex; gap: 20px; margin-bottom: 8;">
            <div style="width: 48%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden;">
                <div style="background-color: #f9f9f9; padding: 10px;">
                    <span style="font-size: 12px; color: #555;">AMALIYAH, KAJIAN TURUTS, TOKOH</span> <span style="font-size: 10px; color: #888;">Latest</span>
                </div>
                <img src="images/ct1.jpg" style="width: 100%; display: block;">
                <div style="padding: 15px;">
                    <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Berada di ujung akhir Tahun Pembelajaran 2025/2026 ada beberapa kegiatan yang harus dilewati</h3>
                    <p style="font-size: 12px; color: #777; margin-bottom: 8px;">Jul 22, 2024 | Amaliyah | 0 <span style="color: gold;">★★★★★</span></p>
                    <p style="font-size: 14px; color: #333; line-height: 1.4;">Batam, (PPDF)</p>
                </div>
            </div>
            <div style="width: 48%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden;">
                <div style="background-color: #f9f9f9; padding: 10px;">
                    <span style="font-size: 12px; color: #555;">TOKOH</span> <span style="font-size: 10px; color: #888;">Latest</span>
                </div>
                <img src="images/ct2.jpg" alt="Santri Membaca Al-Quran" style="width: 100%; display: block;">
                <div style="padding: 15px;">
                    <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Ayat Alquran Tentang Benda-benda Langit yang Menakjubkan</h3>
                    <p style="font-size: 12px; color: #777; margin-bottom: 8px;">BY DARUL FAROH | JAN 4, 2025 | TOKOH | 0 <span style="color: gold;">★★★★★</span></p>
                    <p style="font-size: 14px; color: #333; line-height: 1.4;">Banyak ayat-ayat dalam Alquran yang menjelaskan tentang fenomena alam semesta yang menakjubkan....</p>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">GALERI SANTRI</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/4.jpg" alt="Gallery Image 1" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/5.jpg" alt="Gallery Image 2" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/2.jpg" alt="Gallery Image 3" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/3.jpg" alt="Gallery Image 4" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/5.jpg" alt="Gallery Image 5" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/6.jpg" alt="Gallery Image 6" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/7.jpg" alt="Gallery Image 7" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-md overflow-hidden shadow-md">
                <img src="/images/4.jpg" alt="Gallery Image 8" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>
</div>
        

    </main>


<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">

        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>


</body>
</html>