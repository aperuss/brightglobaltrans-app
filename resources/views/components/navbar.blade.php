<div>
    <div class="font-[Poppins]">
        <header class="bg-navbarTitle md:px-4 px-2">
            <nav class="flex justify-between items-center w-[100%]">
                <div class="flex justify-center items-center gap-2">
                    <img class="w-14 my-3 cursor-pointer" src="{{ asset('img/Logo.png') }}" alt="...">
                    <div class="text-baseBackground">
                        BrightGlobaltrans
                    </div>
                </div>
                <div class="nav-links duration-500 md:static absolute bg-navbarTitle md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-baseBackground">
                        <li>
                            <a class="" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('rent') }}">Mobil</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('aboutus') }}">Tentang</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('testimoni') }}">Testimoni</a>
                        </li>
                        <li>
                            <a class="" href="#">Informasi</a>
                        </li>
                        <li>
                            <a class="" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <button class="bg-baseBackground text-black px-5 py-2 rounded-full">Log in</button>
                    <!-- Toggle Menu Icon (for mobile) -->
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </div>
            </nav>  
        </header>    
    </div>
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[10%]')
        }
    </script>  
</div>
