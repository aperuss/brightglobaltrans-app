<x-app>
    <div>
        <div class="bg-cover" style="background-image: url('{{ asset('img/bg-rent.png') }}')">
            <div class="flex flex-col justify-center items-center text-center space-y-4 md:space-y-8 px-4 md:px-16 lg:px-32 py-8 mb-5 md:mb-10">
                <div class="text-3xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] drop-shadow-lg">
                    BrightGlobaltrans
                </div>
                <div class="text-sm md:text-lg lg:text-xl text-[#fbf7eb] font-semibold leading-relaxed">
                    penyedia layanan sewa mobil dengan sopir untuk perjalanan lokal dan antar kota, serta layanan sewa mobil internasional untuk destinasi global.
                </div>
                <div class="flex flex-row  gap-4 md:gap-10 items-center pb-4">
                    <button class="text-sm md:text-xl border-2 bg-bigTitle border-bigTitle py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        ORDER NOW
                    </button>
                    <button class="text-sm md:text-xl border-2 bg-bigTitle border-bigTitle py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        CONTACT
                    </button>
                </div>
            </div>
        </div>
        <div>
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-4 md:mb-8">
                Team support
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mx-6 md:mx-12 lg:mx-16 my-8">
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" class="" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-2">
                Hubungi Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Tidak ada kontak selain platform dan kontak yang tertera
            </div>
            <div class="flex flex-col md:flex-row gap-8 p-6">
                <!-- Kontak Informasi -->
                <div class="w-full md:w-1/2 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Kontak Item dengan Hover -->
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/wa-hubungi-kami.svg') }}" alt="WhatsApp" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">081394234397</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/email-hubungi-kami.svg') }}" alt="Email" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">Global@trans.com</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/ig-hubungi-kami.svg') }}" alt="Instagram" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">@globalTrans</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/fb-hubungi-kami.svg') }}" alt="Facebook" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">Brightglobaltrans</span>
                        </div>
                    </div>
                </div>
            
                <!-- Google Map -->
                <div class="w-full md:w-1/2">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2820340975018!2d107.57189317475641!3d-6.856760593141673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6a81c9521bb%3A0xaa202e42a0872278!2sJl.%20Mekarwangi%20No.79%2C%20Sariwangi%2C%20Kec.%20Parongpong%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat%2040559!5e0!3m2!1sen!2sid!4v1736689481700!5m2!1sen!2sid"
                        class="w-full h-72 md:h-96 rounded-xl transition-transform transform hover:scale-105 hover:shadow-lg" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-app>