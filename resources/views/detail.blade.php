<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .border-active {
            border: 4px solid #3b82f6; /* Warna border, bisa disesuaikan */
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.3); /* Tambahkan efek bayangan jika diinginkan */
        }
        
    </style>
    
</head>
<body>
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


    {{-- Breadcrumbs --}}
    <div class="flex items-center justify-center px-4 mt-4 overflow-x-auto whitespace-nowrap sm:px-48">
        <a href="/" class="text-gray-600 dark:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            /
        </span>

        <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">
            Brand
        </a>
    </div>

    {{-- Detail Project --}}
    <div class="px-4 py-8 mx-auto max-w-full mb-20 md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid lg:grid-cols-2 ">
            <div class="grid grid-cols-3 gap-6 mb-8">
                <!-- Gambar Utama -->
                <img id="mainImage" class="object-fit w-full h-[200px] lg:h-[400px] md:h-[400px] sm:h-[300px] col-span-3 rounded-lg shadow-xl"
                    src="{{ asset('storage/' . $brand->thumbnail) }}" alt="{{ $brand->nama }}" />

                <!-- Gambar Kecil -->
                <img class="smallImage object-cover w-full h-[100px] md:h-[150px] sm:h-[120px] rounded-lg shadow-lg cursor-pointer" 
                    src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->nama }}" />
                <img class="smallImage object-cover w-full h-[100px] md:h-[150px] sm:h-[120px] rounded-lg shadow-lg cursor-pointer" 
                    src="{{ asset('storage/' . $brand->image_2) }}" alt="{{ $brand->nama }}" />
                <img class="smallImage object-cover w-full h-[100px] md:h-[150px] sm:h-[120px] rounded-lg shadow-lg cursor-pointer" 
                    src="{{ asset('storage/' . $brand->image_3) }}" alt="{{ $brand->nama }}" />
            </div>

            <div class="flex flex-col px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-12 lg:py-0 bg-white rounded-xl shadow-xl dark:bg-gray-800 max-w-sm sm:max-w-md">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">{{ $brand->nama }}</h1>
                    <p class="text-gray-500 mt-2 text-lg">{{ $brand->slug }}</p>
                </div><br>

                <!-- Badge Teknologi -->
                <div class="flex flex-wrap space-x-2">
                    @foreach ($brand->teknologis as $index => $teknologi)
                            @php
                                // Tentukan warna badge berdasarkan urutan teknologi
                                $badgeClass = ($index % 2 === 0) ? 'badge badge-outline' : 'badge badge-secondary';
                            @endphp
                            <div class="{{ $badgeClass }}">{{ $teknologi->nama }}</div>
                        @endforeach
                </div>

                <hr class="w-full my-4 border-gray-300" />

                <!-- Section Fitur -->
                <div class="flex flex-col gap-4 max-w-screen-2xl">
                    @foreach([$brand->fitur_1, $brand->fitur_2, $brand->fitur_3, $brand->fitur_4] as $fitur)
                    <div class="flex items-center mb-4">
                        <div class="mr-6">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100">
                                <svg class="w-10 h-10 text-indigo-500" stroke="currentColor" viewBox="0 0 52 52">
                                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-xl font-semibold leading-5 text-gray-900 dark:text-white">{{ $fitur }}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>

                <hr class="w-full my-4 border-gray-300" />

                <!-- Footer Section -->
                
                <div class="p-6 items-end">
                    <div class="flex items-center justify-between">
                        <!-- Profile & Name -->
                       
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full" src="{{ asset('storage/' . $brand->team->image) }}" alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">{{ $brand->team->name }}</a>
                        </div>
                        
                        <!-- Button -->
                        <div>
                            <a href="{{ $brand->link }}" target="_blank" class="w-full rounded-md border border-transparent bg-indigo-600 ml-8 px-2 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                View Demo
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    {{-- Similar Project --}}
    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="container px-6 py-24 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Project Similar</h1>
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-20 xl:gap-12 lg:grid-cols-4">
                @foreach ($similarBrands as $similar)
                    <a href="{{ route('brands.show', $similar->id) }}" class="card-project bg-base-100 w-70 h-auto shadow-xl">
                        <!-- Grid item dengan tinggi responsif -->
                        <div class="grid items-end overflow-hidden bg-cover rounded-lg h-60 sm:h-40 md:h-48 lg:h-60 relative" 
                             style="background-image: url('{{ asset('storage/' . $similar->thumbnail) }}'); background-size: 100% 100%; background-position: center;">
                            <div class="card-actions absolute top-0 right-0 px-2 py-5">
                                <div class="badge badge-outline">{{ $similar->tekno }}</div>
                                <div class="badge badge-secondary">{{ $similar->tekno_2 }}</div>
                            </div>
                            <div class="w-full px-8 py-2 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">{{ $similar->nama }}</h2>
                                <p class="mt-2 text-xs tracking-wider text-blue-500 uppercase dark:text-blue-400">{{ $similar->slug }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} TI21. All rights reserved.
            <p class="mt-2">Universitas Semarang, Semarang, Indonesia</p>
        </div>
    </footer>
    
    {{-- Script JS --}}
    <script>
        // Ambil elemen gambar utama
        const mainImage = document.getElementById('mainImage');
        
        // Ambil semua gambar kecil
        const smallImages = document.querySelectorAll('.smallImage');
        
        // Iterasi melalui gambar kecil dan tambahkan event listener
        smallImages.forEach(smallImage => {
            smallImage.addEventListener('click', function() {
                // Simpan sementara src dari gambar utama
                const tempSrc = mainImage.src;

                // Tukar src gambar utama dengan gambar yang diklik
                mainImage.src = this.src;

                // Tukar src gambar yang diklik dengan gambar utama
                this.src = tempSrc;

                // Hapus border aktif dari semua gambar kecil
                smallImages.forEach(img => img.classList.remove('border-active'));

                // Tambahkan border aktif pada gambar yang diklik
                this.classList.add('border-active');
            });
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
