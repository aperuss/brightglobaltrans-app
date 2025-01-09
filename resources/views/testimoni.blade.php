<x-app>
    @vite('resources/js/slide-testimoni.js')
    <div class="px-10 md:px-28">
        <div class="bg-gold px-6 sm:px-10 py-6 sm:py-8 rounded-lg my-6 sm:my-10">
            <div class="text-red-700 text-xl sm:text-2xl md:text-3xl font-bold">
                PORTOFOLIO
            </div>
            <div class="text-2xl sm:text-4xl md:text-5xl font-bold pb-4 pt-1">
                GALERI TESTIMONI
            </div>
            <div class="text-sm sm:text-base md:text-lg leading-relaxed">
                Lihat pengalaman pelanggan kami melalui galeri foto di bawah ini. Kami bangga telah melayani berbagai kebutuhan sewa kendaraan,
                mulai dari liburan keluarga hingga perjalanan bisnis. Setiap foto mencerminkan komitmen kami untuk memberikan layanan terbaik dan
                kendaraan berkualitas.
            </div>
        </div>
    </div>
    <div class="px-4 md:px-10">
        <div class="swiper my-1">
            <div class="wrapper overflow-hidden mx-10">
                <div class="flex swiper-wrapper">   
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gold w-full lg:w-72  h-60 flex justify-center items-center rounded-xl  ">
                            img testimoni
                        </div>
                    </div>
                </div>
                <div class="pt-10">
                    <div class="swiper-pagination "></div>
                </div>
                
                {{-- <div class="flex justify-center items-center">
                    <div class="swiper-pagination"></div>
                </div> --}}
                <div class="swiper-button-prev "></div>
                <div class="swiper-button-next"></div>
                {{-- <div class="flex justify-center items-center py-5 gap-4">
                    <div class="swiper-button-prev">
                        <svg class="w-[35px] h-[35px] fill-customGreen" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                          </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg class="w-[35px] h-[35px] fill-customGreen" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                          </svg>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
   

</x-app>