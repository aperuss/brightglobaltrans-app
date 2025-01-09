<x-app title="Beranda">
    <div>
        <div>
            <div class="flex flex-wrap md:flex-nowrap overflow-hidden">
                <!-- Section Kiri -->
                <div class="w-full md:w-1/2 py-8 md:py-14 px-6 md:px-28 order-2 md:order-1">
                    <div>
                        <div class="text-4xl md:text-7xl leading-tight font-bold">
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
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-7 text-customGreen bg-baseBackground hover:bg-customGreen hover:text-white transition-colors duration-300">
                                ORDER NOW
                            </button>
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-10 text-customGreen bg-baseBackground hover:bg-customGreen hover:text-white transition-colors duration-300">
                                CONTACT
                            </button>
                        </div>
                        <div class="bg-white w-full rounded-md p-5 mt-4 drop-shadow-lg">
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
            <div class="flex flex-wrap md:flex-nowrap overflow-hidden">
                <!-- Gambar Logo -->
                <div class="w-full md:w-1/2 p-4 flex justify-center items-center">
                    <img src="{{ asset('img/Logo.png') }}" alt="logobrightglobaltrans" class="w-48 md:w-80">
                </div>
                <!-- Konten -->
                <div class="w-full md:w-1/2 flex justify-center md:justify-start items-center">
                    <div class="px-6 md:mr-16">
                        <div class="text-3xl md:text-5xl font-bold">
                            Title
                        </div>
                        <div class="text-justify py-4 text-sm md:text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit molestiae exercitationem sapiente vel 
                            labore nam doloribus, autem quidem nisi, iure dolorum pariatur architecto eum consequatur ipsum quaerat 
                            nulla ullam voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id recusandae illo earum 
                            labore itaque non praesentium aliquid quam aliquam eos, quia quaerat obcaecati debitis, dolor aut. Id, 
                            fugiat? Tenetur, obcaecati.
                        </div>
                        <div class="">
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-7 text-customGreen bg-baseBackground hover:bg-customGreen hover:text-white transition-colors duration-300">
                                SELENGKAPNYA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6 md:px-10">
            <div class="flex justify-center items-center mb-10">
                <h1 class="text-2xl md:text-4xl font-bold text-center">Informasi</h1>
            </div>
            <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-20">
                <div>
                    <label class="text-base md:text-xl font-semibold">Rental Mobil</label>
                    <img src="{{ asset('img/adv1.png') }}" alt="rental1" class="w-full md:w-72 pt-2 mx-auto">
                </div>
                <div>
                    <label class="text-base md:text-xl font-semibold">Rental Mobil</label>
                    <img src="{{ asset('img/adv2.png') }}" alt="rental2" class="w-full md:w-72 pt-2 mx-auto">
                </div>
                <div>
                    <label class="text-base md:text-xl font-semibold">Rental Mobil</label>
                    <img src="{{ asset('img/adv3.png') }}" alt="rental3" class="w-full md:w-72 pt-2 mx-auto">
                </div>
            </div>
        </div>
        <div class="px-6 md:px-28 mt-14">
            <div class="">
                <div class="text-3xl md:text-5xl font-bold ">
                    Title
                </div>
                <div class="text-justify py-4 text-sm md:text-base">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sint ipsam nihil voluptatum, 
                    libero quibusdam deleniti illum unde earum officia minima ducimus? Sapiente excepturi quam cupiditate 
                    perspiciatis minus magni consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam 
                    aut inventore quae delectus repellendus ducimus deserunt doloribus magnam maiores dolorum dignissimos 
                    error suscipit beatae fugit a nobis, molestiae debitis veritatis. Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quaerat perferendis odio animi, suscipit quasi officia, non cumque repudiandae repellendus 
                    quam deserunt qui nisi ipsam expedita pariatur excepturi earum inventore dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sint ipsam nihil voluptatum, 
                    libero quibusdam deleniti illum unde earum officia minima ducimus? Sapiente excepturi quam cupiditate 
                    perspiciatis minus magni consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam 
                    aut inventore quae delectus repellendus ducimus deserunt doloribus magnam maiores dolorum dignissimos 
                    error suscipit beatae fugit a nobis, molestiae debitis veritatis. Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quaerat perferendis odio animi, suscipit quasi officia, non cumque repudiandae repellendus 
                    quam deserunt qui nisi ipsam expedita pariatur excepturi earum inventore dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sint ipsam nihil voluptatum, 
                    libero quibusdam deleniti illum unde earum officia minima ducimus? Sapiente excepturi quam cupiditate 
                    perspiciatis minus magni consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam 
                    aut inventore quae delectus repellendus ducimus deserunt doloribus magnam maiores dolorum dignissimos 
                    error suscipit beatae fugit a nobis, molestiae debitis veritatis. Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quaerat perferendis odio animi, suscipit quasi officia, non cumque repudiandae repellendus 
                    quam deserunt qui nisi ipsam expedita pariatur excepturi earum inventore dolore.
                </div>
            </div>
        </div>
        <div class="px-8 md:px-28 lg:px-28 mt-14">
            <!-- Judul -->
            <div class="text-xl md:text-3xl lg:text-4xl font-bold text-center mb-6">
                Kenapa harus Brightglobaltrans?
            </div>
        
            <!-- Baris Pertama -->
            <div class="flex flex-col md:flex-row justify-center gap-14 md:gap-6 lg:gap-40">
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Banyaknya variasi kendaraan</p>
                    <img src="{{ asset('img/car3.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Tersedia berbagai macam jenis kendaraan disini baik dari segi tipe dan brand nya.
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Jaminan Terbaik</p>
                    <img src="{{ asset('img/car1.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Menjamin kualitas pelayanan serta produk rental mobil yang kami tawarkan kepada anda.
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Pelayanan Cepat 24 Jam</p>
                    <img src="{{ asset('img/contact.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Customer service kami melayani 24 jam membantu anda dengan balasan yang cepat dan responsif.
                    </p>
                </div>
            </div>
        
            <!-- Baris Kedua -->
            <div class="mt-12 flex flex-col md:flex-row justify-center gap-14 md:gap-6 lg:gap-40">
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Harga Paket Sewa</p>
                    <img src="{{ asset('img/Price.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Harga paket sewa mobil yang bervariatif dan tentunya harga yang sangat kompetitif. Pesan rental mobil sekarang!
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Jumlah Kursi Penumpang</p>
                    <img src="{{ asset('img/car2.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Jumlah kursi pada umumnya dibagi berdasarkan kelas kendaraan seperti MPV, SUV, City car dan lainnya.
                    </p>
                </div>
                <div class="w-full md:w-1/3 lg:w-80">
                    <p class="text-center font-bold">Charge Overtime</p>
                    <img src="{{ asset('img/time.svg') }}" alt="" class="mx-auto mt-4">
                    <p class="text-center mt-2">
                        Biaya tambahan masa sewa yang fleksibel. Biaya overtime bisa langsung hubungi customer service kami.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-14">
            <div class="text-xl md:text-3xl lg:text-4xl font-bold flex justify-center items-center mb-8">
                Dipercaya oleh banyak pelanggan
            </div>
            <div class="gap-10">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('img/partnership1.png') }}" alt="partnership1">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('img/partnership2.png') }}" alt="partnership2">
                </div>
            </div>
        </div>
    </div>
</x-app>
