<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom styles */
        .scrolling-wrapper {
        overflow-x: auto; /* Mengizinkan scroll horizontal */
        overflow-y: hidden; /* Menyembunyikan scroll vertikal */
        }

        /* Menyembunyikan scrollbar di semua browser */
        .scrolling-wrapper::-webkit-scrollbar {
            display: none; /* Untuk Chrome dan Safari */
        }

        .scrolling-wrapper {
            scrollbar-width: none; /* Untuk Firefox */
        }

        /* Kecepatan scroll untuk mobile */
        @media (max-width: 600px) {
            .scrolling-content {
                animation: scroll 10s linear infinite; /* Kecepatan lebih lambat di mobile */
            }

            section {
                padding-top: 48px; /* Tambahkan padding atas */
                padding-bottom: 30px; /* Tambahkan padding bawah */
            }
        }

        /* Kecepatan scroll untuk desktop */
        @media (min-width: 601px) {
            .scrolling-content {
                animation: scroll 5s linear infinite; /* Kecepatan lebih cepat di desktop */
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%); /* Sesuaikan dengan panjang konten */
            }
        }

        .scrolling-item {
            min-width: 200px; /* Sesuaikan dengan ukuran item Anda */
            margin-right: 1rem; /* Jarak antar item */
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%); /* Sesuaikan dengan lebar total konten yang digulir */
            }
        }

        .autoscroll {
            animation: scroll-left 30s linear infinite;
        }

        .modal {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.75); /* transparansi */
            z-index: 1000; /* modal di atas konten lain */
        }

        .modal img {
            max-height: 80vh; /* batas tinggi agar tidak terlalu besar */
            max-width: 90vw; /* batas lebar agar tidak terlalu besar */
        }

        .modal span {
            position: absolute;
            top: 70px; /* atur posisi atas */
            right: 20px; /* atur posisi kanan */
            font-size: 24px; /* ukuran font untuk tanda X */
            color: red !important;     
            cursor: pointer; /* pointer saat hover */
            z-index: 1001; /* pastikan di atas modal */
        }

        .swiper-slide {
            width: auto; /* Membuat slide menyesuaikan dengan konten */
            flex-shrink: 0; /* Menghindari slide mengecil */
        }


    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="bg-gray-900">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex items-center justify-between">
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Company</span>
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Product</a></li>
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Features</a></li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Pricing</a></li>
                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">About us</a></li>
                </ul>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                        <a href="/admin" class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                            Login
                            </a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                    <!-- Mobile menu dropdown -->
                    <div class="absolute top-0 left-0 w-full hidden z-50" id="mobile-menu"> <!-- tambahkan id dan kelas hidden -->
                        <div class="p-5 bg-white border rounded shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                            <rect x="3" y="1" width="7" height="12"></rect>
                                            <rect x="3" y="17" width="7" height="6"></rect>
                                            <rect x="14" y="1" width="7" height="6"></rect>
                                            <rect x="14" y="11" width="7" height="12"></rect>
                                        </svg>
                                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                                    </a>
                                </div>
                                <div>
                                    <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <nav>
                                <ul class="space-y-4">
                                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                                    <li>
                                        <a href="/admin" class="block w-full items-center rounded bg-rose-600 px-8 py-2 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                                            Login
                                            </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div>
        <section class="relative bg-[url('storage/grad.jpg')] bg-cover bg-center bg-no-repeat">
            
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/75 to-gray-900/25 sm:from-gray-900/95 sm:to-gray-900/25"></div>
        
            <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                <div class="max-w-xl text-center sm:text-left">
                    <h1 class="text-2xl font-extrabold text-white sm:text-3xl md:text-4xl">
                        Starting The Journey as 
                        <strong class="block font-extrabold text-rose-500">Friends.</strong>
                    </h1>
            
                    <p class="mt-4 max-w-lg text-white sm:text-lg md:text-xl">
                        The journey is long, but together, the destination is sweet. 
                    </p>
            
                    <div class="mt-6 flex flex-wrap gap-3 justify-center sm:justify-start">
                        <a href="#" class="block w-full rounded bg-rose-600 px-8 py-2 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Get Started
                        </a>
            
                        <a href="#" class="block w-full rounded bg-white px-8 py-2 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Technologi --}}
    <main class="container mx-auto px-4 py-6 flex flex-col items-center">
        <h1 class="text-xl font-bold mb-4 sm:text-2xl md:text-3xl">OUR TECHNOLOGY</h1> <!-- Ukuran heading responsif -->
    
        <div class="relative w-full overflow-hidden">
            <div class="scrolling-wrapper">
                <div class="scrolling-content autoscroll flex space-x-4"> <!-- Tambahkan space-x-4 untuk jarak antar item -->
                    @foreach ($teknologis as $teknologi)
                    <a class="card border-2 border-base-content/5 card-compact transition-all duration-1000 hover:shadow hover:-translate-y-1 scrolling-item flex flex-col items-center w-24 sm:w-32 md:w-40" target="_blank" rel="noopener, noreferrer">
                        <figure class="px-6 pt-3 pb-1 w-full aspect-[2/1] flex items-end justify-center overflow-visible">
                            <img loading="lazy" width="64" height="64" class="aspect-square h-auto" src="{{ asset('storage/' . $teknologi->image) }}" alt="{{ $teknologi->nama }}">
                        </figure>
                        <div class="card-body text-center">
                            <span class="text-sm sm:text-base font-sticky">{{ $teknologi->nama }}</span>
                        </div>
                    </a>
                    @endforeach
                    <!-- Duplicate items for continuous scrolling effect -->
                    @foreach ($teknologis as $teknologi)
                    <a class="card border-2 border-base-content/5 card-compact transition-all duration-200 hover:shadow hover:-translate-y-1 scrolling-item flex flex-col items-center w-24 sm:w-32 md:w-40" target="_blank" rel="noopener, noreferrer">
                        <figure class="px-6 pt-3 pb-1 w-full aspect-[2/1] flex items-end justify-center overflow-visible">
                            <img loading="lazy" width="64" height="64" class="aspect-square h-auto" src="{{ asset('storage/' . $teknologi->image) }}" alt="{{ $teknologi->nama }}">
                        </figure>
                        <div class="card-body text-center">
                            <span class="text-xs sm:text-sm font-bold">{{ $teknologi->nama }}</span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
 
    <!-- Main Content -->
    <main class="container mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold mb-8 text-center md:text-3xl">SHOWCASE PROJECT</h1>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8" > <!-- Mengurangi gap untuk mobile -->
            @foreach ($brands as $brand)
            <a href="{{ route('brands.show', $brand->id) }}" class="card bg-base-100 shadow-xl transition-transform transform hover:scale-105 duration-300 h-full">
                <figure class="h-32 md:h-48 lg:h-60"> <!-- Mengurangi tinggi untuk mobile -->
                    <img
                        src="{{ asset('storage/' . $brand->thumbnail) }}" alt="{{ $brand->nama }}" class="w-full h-full object-cover" />
                </figure>
                <div class="card-body flex flex-col justify-between px-2 md:px-4">
                    <h2 class="card-title text-lg font-semibold md:text-xl text-center md:text-left">{{ $brand->nama }}</h2>
                    <p class="text-sm text-gray-600 md:text-base text-start md:text-left">{{ $brand->slug }}</p>
                    <div class="card-actions justify-end mt-2 md:mt-4 space-x-1">
                        @foreach ($brand->teknologis as $index => $teknologi)
                            @php
                                // Tentukan warna badge berdasarkan urutan teknologi
                                $badgeClass = ($index % 2 === 0) ? 'badge badge-outline' : 'badge badge-secondary';
                            @endphp
                            <div class="{{ $badgeClass }}">{{ $teknologi->nama }}</div>
                        @endforeach
                    </div>
                </div>
                
            </a>
            @endforeach
        </div>
    </main>
    
    {{-- Author --}}
    <main class="grid mx-auto py-8 px-4 md:px-8 justify-center bg-white dark:bg-gray-900 w-full">
        <h1 class="text-2xl font-bold mb-8 text-center">AUTHOR</h1>
    
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($teams as $team)
                <div class="swiper-slide w-full max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 border border-gray-200 dark:border-gray-700 transition-transform duration-300 hover:scale-105 mb-4 mx-2"> <!-- Tambahkan mx-2 untuk jarak -->
                    <img class="object-cover w-full h-56" src="{{ asset('storage/' . ($team->image ?? 'default-image.jpg')) }}" alt="avatar">
                    <div class="py-5 text-center">
                        <a href="#" class="block text-xl font-bold text-gray-800 dark:text-white">{{ $team->name ?? 'No nama' }}</a>
                        <span class="text-sm text-gray-700 dark:text-gray-200">{{ $team->email ?? 'No email' }}</span>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
        
    </main>
    

    {{-- Carousel --}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h1 class="text-3xl font-bold text-center mb-8">Galeri Gambar</h1>
        <div class="grid gap-5 lg:grid-cols-2">
            <div class="flex items-center justify-center -mx-4 lg:pl-8">
                <div class="px-3">
                    <img onclick="openModal('https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500')" class="object-cover mb-3 w-40 h-40 rounded shadow-lg sm:h-64 xl:h-40 sm:w-64 xl:w-80 cursor-pointer" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
                    <img onclick="openModal('https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500')" class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80 cursor-pointer" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
                </div>
                <div class="flex flex-col items-start px-3">
                    <img onclick="openModal('https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260')" class="object-cover w-40 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40 cursor-pointer" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                    <img onclick="openModal('storage/maerakaca.jpeg')" class="object-cover mt-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56 cursor-pointer" src="storage/maerakaca.jpeg" alt="" />
                </div>
            </div>
            <div class="flex items-center justify-center -mx-4 lg:pl-8">
                <div class="flex flex-col items-end px-3">
                    <img onclick="openModal('storage/maerakaca.jpeg')" class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-32 sm:w-48 xl:w-56 cursor-pointer" src="storage/maerakaca.jpeg" alt="" />
                    <img onclick="openModal('https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260')" class="object-cover w-40 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40 cursor-pointer" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                </div>
                <div class="px-3">
                    <img onclick="openModal('https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500')" class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80 cursor-pointer" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
                </div>
            </div>
        </div>
    
        <!-- Modal -->
        <div id="modal" class="fixed inset-0 hidden bg-black bg-opacity-50 backdrop-blur items-center justify-center z-50">
            <div class="bg-white p-4 rounded shadow-lg max-w-lg mx-auto mt-40"> <!-- mt-20 untuk margin atas -->
                <span onclick="closeModal()" class="absolute top-4 right-4 text-white cursor-pointer text-2xl border border-white-800 rounded-full w-8 h-8 flex items-center justify-center">
                    &times;
                </span>                
                <img id="modal-image" class="max-w-full" src="" alt="popup image" />
            </div>
        </div>
    </div>
    

    {{-- Portofolio --}}
    {{-- <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Portfolio
            </h1>
    
            <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
            </p>
    
    
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image:url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80')">
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-semibold text-white capitalize">Best website collections</h2>
                        <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                    </div>
                </div>
    
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image:url('https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80')">
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-semibold text-white capitalize">Block of Ui kit collections</h2>
                        <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Ui kit</p>
                    </div>
                </div>
    
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image:url('https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-semibold text-white capitalize">Ton’s of mobile mockup</h2>
                        <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Mockups</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} TI21. All rights reserved.
            <p class="mt-2">Universitas Semarang, Semarang, Indonesia</p>
        </div>
    </footer>

    <script>
        function openModal(imageSrc) {
            document.getElementById('modal-image').src = imageSrc;
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }



        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto', // Mengatur jumlah slide untuk menyesuaikan otomatis
            spaceBetween: 20,
            loop: false,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 'auto', // Mengatur untuk menyesuaikan otomatis
                }
            },
            on: {
                init: function () {
                    this.slides[this.slides.length - 1].style.marginRight = '0'; // Menghilangkan margin pada slide terakhir
                },
            }
        });




        document.addEventListener("DOMContentLoaded", function() {
          const openMenuButton = document.querySelector('[aria-label="Open Menu"]');
          const closeMenuButton = document.querySelector('[aria-label="Close Menu"]');
          const mobileMenu = document.getElementById('mobile-menu');
      
          openMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden'); // Tampilkan menu
          });
      
          closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden'); // Sembunyikan menu
          });
        });

        

    </script>
      
    
</body>
</html>
