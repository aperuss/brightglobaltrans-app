<x-app title="Beranda">
    <div class="overflow-hidden">
        <div>
            <div class="flex flex-wrap md:flex-nowrap">
                <!-- Section Kiri -->
                <div class="w-full md:w-1/2 py-8 md:py-14 px-6 md:px-28 order-2 md:order-1">
                    <div>
                        <div class="text-4xl md:text-7xl leading-tight font-bold text-bigTitle">
                            Bright Globaltrans
                        </div>
                        <div class="text-justify py-4 text-sm md:text-base">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias soluta voluptatum rerum dignissimos 
                            corporis eveniet omnis dolores voluptas quia voluptate repellendus suscipit obcaecati nesciunt 
                            eaque sapiente, non adipisci blanditiis. Ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quidem ipsa maxime in natus a eum reprehenderit culpa laboriosam tempora dolorum facere atque, 
                            voluptatem aut vitae suscipit repudiandae magni et dignissimos!
                        </div>
                        <div class="flex flex-col md:flex-row gap-4 md:gap-10 items-center pb-4">
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-7 text-customGreen  hover:bg-customGreen hover:text-white transition-colors duration-300">
                                ORDER NOW
                            </button>
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-10 text-customGreen  hover:bg-customGreen hover:text-white transition-colors duration-300">
                                CONTACT
                            </button>
                        </div>
                        <div class="bg-navbarTitle w-full rounded-md p-5 mt-4 drop-shadow-lg text-white">
                            <div class="flex flex-col md:flex-row gap-4">
                                <!-- Section Kiri -->
                                <div class="w-full md:w-1/2 text-justify">
                                    <h2 class="text-lg md:text-xl font-bold">Section Kiri</h2>
                                    <p>Konten untuk section kiri.</p>
                                </div>
                                <!-- Section Kanan -->
                                <div class="w-full md:w-1/2 text-justify">
                                    <h2 class="text-lg md:text-xl font-bold">Section Kanan</h2>
                                    <p>Konten untuk section kanan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Kanan -->
                <div class="w-full md:w-1/2 p-4 order-1 md:order-2 relative">
                    <div class="flex justify-center md:justify-end">
                        <img src="{{ asset('img/Road.jpg') }}" alt="road" class="rounded-full w-3/4 md:w-[85%] -mr-20 md:-mr-32 absolute hidden md:block">
                    </div>
                    <div class="absolute top-40 md:top-102 left-101 transform -translate-x-1/2 -translate-y-1/2 hidden md:block">
                        <div class="max-w-7xl w-full md:w-100">
                            <img src="{{ asset('img/fortuner.png') }}" alt="fortuner" class="z-10 w-3/4 md:w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-20 mt-8">
            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class=" h-[80vh] md:min-h-screen overflow-hidden rounded-lg">
                    <!-- Text Content -->
                    <div class="relative inset-0 z-40 flex flex-col items-center justify-start md:justify-center px-4 md:px-16 lg:px-32 pt-8 md:pt-0">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-bigTitle drop-shadow-lg absolute top-32 md:top-52 right-20 md:left-[33rem]">
                            BrightGlobaltrans
                        </h1>
                        <p class="mt-4 text-xs md:text-lg lg:text-xl text-gray-100 font-medium drop-shadow-lg py-2 md:py-4 absolute top-40 md:top-72 right-20 md:left-[5rem] text-justify md:text-center pl-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deserunt dolores hic voluptatum voluptates illo neque ad, fuga quidem quibusdam excepturi sunt officia sed commodi ipsam quos facere corporis praesentium.
                        </p>
                        <div class="flex md:flex-row gap-4 mt-6 absolute top-64 md:top-96 left-2.5 md:left-[38rem]">
                            <button class="text-xs md:text-lg border-2 border-bigTitle py-2 px-4 md:px-8 text-bigTitle hover:text-white hover:bg-customGreen hover:border-customGreen transition duration-300">
                                ORDER NOW
                            </button>
                            <button class="text-xs md:text-lg border-2 border-bigTitle py-2 px-4 md:px-8 text-bigTitle hover:text-white hover:bg-customGreen hover:border-customGreen transition duration-300">
                                CONTACT
                            </button>
                        </div>
                    </div>
                    <!-- Slider Images -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/armada-bgt-slider-1.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('img/armada-bgt-slider-2.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/armada-bgt-slider-3.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                </div>
        
                <!-- Slider Controls -->
                <button type="button" class="hidden absolute top-0 left-0 z-50 md:flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-black/30 rounded-full group-hover:bg-black/50 transition duration-300">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="hidden absolute top-0 right-0 z-50 md:flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-black/30 rounded-full group-hover:bg-black/50 transition duration-300">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        
        
        <div class="px-8 md:px-28 lg:px-28 my-14">
            {{-- <!-- Judul -->
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center mb-14">
                Layanan <span class="text-bigTitle">Unggul</span>
            </div> --}}
        
            <!-- Baris Pertama -->
            <div class="flex flex-col md:flex-row justify-center gap-14 md:gap-6 lg:gap-40">
                <div class="w-full md:w-1/3 lg:w-80">
                    
                    <img src="{{ asset('img/calendar.svg') }}" alt="" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">3 <span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center">
                        Tahun
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    <img src="{{ asset('img/partner.svg') }}" alt="" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle ">2000<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center">
                        Customer
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    
                    <img src="{{ asset('img/car.svg') }}" alt="" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">200<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center">
                        Kendaraan
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                   
                    <img src="{{ asset('img/maps.svg') }}" alt="" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">20<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center">
                        Pilihan Rute
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-bigTitle mb-2">
                Layanan Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Pilih Layanan Terbaik Dari Kami
            </div>
            <div class="px-8 py-10 flex flex-wrap justify-center gap-5">
                <!-- REGULER Section -->
                <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-2xl">REGULER</div>
                    <div>
                        <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                    </div>
                    <div>
                        <ul class="list-outside">
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-16">
                        <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                    </div>
                </div>
        
                <!-- Most Picked Section -->
                <div class="bg-bigTitle rounded-xl p-2 w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-xl pb-2">
                        Most Picked
                    </div>
                    <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full">
                        <div class="text-center text-[#fbf7eb] font-semibold text-2xl">CHARTER</div>
                        <div>
                            <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                        </div>
                        <div>
                            <ul class="list-outside">
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            </ul>
                        </div>
                        <div class="flex justify-center pt-4">
                            <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                        </div>
                    </div>
                </div>
        
                <!-- INTERNATIONAL Section -->
                <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-2xl">INTERNATIONAL</div>
                    <div>
                        <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                    </div>
                    <div>
                        <ul class="list-outside">
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-16">
                        <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green-600">
            <div class="px-8 md:px-28 lg:px-28 py-5">
                <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-bigTitle mb-2">
                    Rute Kami
                </div>
                <div class="text-[#fbf7eb] text-sm md:text-xl mb-4">
                    Kami menyediakan rute-rute ke kota-kota besar yang tersedia setiap harinya
                </div>
                <div class="flex md:flex-row flex-col gap-3 pb-4 text-lg">
                    <button id="ruteKhusus" class="text-[#fbf7eb] bg-bigTitle py-2 px-7 font-semibold rounded-xl" onclick="showRuteKhusus()">Rute Khusus</button>
                    <button id="ruteInternational" class="text-customGreen bg-[#fbf7eb] py-2 px-7 font-semibold rounded-xl" onclick="showRuteInternational()">Rute Internasional</button>
                </div>
                
                <div id="ruteContainer" class="bg-[#f6f1eb] rounded-lg text-lg">
                    <!-- Data awal ditampilkan di sini -->
                    <div class="py-4">
                        <span class="text-xl font-semibold px-10">Untuk perjalanan antar kota</span>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Bandara</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Yogyakarta</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Bali</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Semarang</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Surabaya</div>
                    </div>
                    <div class="mx-6 mt-8 mb-2">
                        <div class="bg-customGreen w-full h-0.5 ">
                        </div>
                    </div>
                    <div class="p-5">
                        <button class="text-[#fbf7eb] bg-bigTitle w-full h-14 rounded-xl text-xl font-bold border-2 border-bigTitle hover:bg-[#f6f1eb] hover:text-bigTitle trans transition duration-300">Hubungi Kami</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
