<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex flex-col space-y-5">

        {{-- Utama sasd--}}
        <div class="bg-green-800">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-white-500 sm:text-lg ">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">MAKMUR KREASI
                        BERKAH UTAMA.</h2>
                    <p class="mb-4 text-white">CV Makmur Kreasi Berkah Utama adalah
                        perusahaan yang bergerak di bidang konsultan
                        lingkungan hidup. Perusahaan kami telah
                        melakukan kerja sama dengan berbagai
                        perusahaan baik badan usaha milik negara,
                        daerah dan swasta.</p>
                    <p class=" underline text-cyan-500 hover:text-cyan-700 text-sm "> <a href="/about">Read
                            more.</a></p>

                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                        alt="office content 1">
                    <img class="mt-4 w-full lg:mt-10 rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                        alt="office content 2">
                </div>
            </div>
        </div>

        {{--  --}}

        <hr>

        {{-- VIsi --}}
        <div class="px-4 sm:px-8 md:px-36">
            <div class="text-center pb-4 pt-4 px-4 delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0"
                data-taos-offset="300">
                <h2 class="font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl">
                    VISI dan MISI
                </h2>

                <div class="flex flex-wrap items-center mt-10 text-left">
                    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
                        <div class="bg-green-800 px-16 py-8 sm:px-32 sm:py-16 flex justify-center items-center">
                            <img src="img/visi.png" alt="gem" class="w-16 h-16 sm:w-32 sm:h-32">
                        </div>
                    </div>

                    <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
                        <h2 class="font-bold mt-4 text-lg sm:mt-0 sm:text-xl">
                            VISI
                        </h2>
                        <p class="text-base sm:text-lg mt-4 sm:mt-6">
                            Menjadi konsultan lingkungan yang profesional dan memiliki integritas dalam memberikan
                            pelayanan kepada pelanggan dengan mengedepankan metode ilmiah, praktis dan tepat guna.
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center mt-10 text-left">
                    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
                        <div class="bg-green-800 px-16 py-8 sm:px-32 sm:py-16 flex justify-center items-center">
                            <img src="img/misi.png" alt="gem" class="w-16 h-16 sm:w-32 sm:h-32">
                        </div>
                    </div>
                    <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first text-center md:text-left lg:pr-12">
                        <h2 class="font-bold mt-4 text-lg sm:mt-0 sm:text-xl">
                            MISI
                        </h2>
                        <p class="text-base sm:text-lg mt-4 sm:mt-6">
                            Memberikan pelayanan terbaik dengan menyediakan tim yang profesional dan kompeten untuk
                            dapat memberikan solusi yang tepat, inovatif dan praktis menyesuaikan dengan wawasan terkini
                            sehingga dapat memberikan nilai positif bagi pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <hr>

        {{-- Record --}}

        <div class=" px-32  text-center py-8  ">
            <div class="border-4 rounded-3xl bg-green-800 border-green-800 md-shadow-xl shadow-cyan-500/50 shadow-blink p-6 opacity-0 transition-opacity duration-1000 "
                id="animatedDiv">
                <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-white">Our Record</h2>
                <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                    <dl class="grid max-w-screen-md gap-8 mx-auto text-white sm:grid-cols-3 ">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                            <dd class="font-light text-white ">Client</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">1B+</dt>
                            <dd class="font-light text-white ">Jobs</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">4M+</dt>
                            <dd class="font-light text-white ">Customer</dd>
                        </div>
                    </dl>
                </div>
                <h3 class="font-light text-sm text-white">Menjadi pilihan anda merupakan kebanggaan buat kami</h3>
            </div>

        </div>

        {{--  --}}

        <hr class="">

        {{-- Client --}}
        <div class="delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0" data-taos-offset="300">
            <h2 class="text-center  mb-2  leading-8 font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">Our Clients
            </h2>
            <p class="text-center text-lg font-extralight leading-8 pb-8">We are trusted by the world’s most innovative
                teams
                </h2>

            <div
                class=" bg-green-800 logos group relative overflow-hidden whitespace-nowrap py-10 [mask-image:_linear-gradient(to_right,_transparent_0,_white_128px,white_calc(100%-128px),_transparent_100%)]">
                <div class="  animate-slide-left-infinite group-hover:animation-pause inline-block w-max">
                    <!-- Ensure that the images cover entire screen width for a smooth transition -->
                    <img class="mx-4 inline h-16"
                        src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg"
                        alt="Reform" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg"
                        alt="Tuple" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg"
                        alt="SavvyCal" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg"
                        alt="SavvyCal" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/laravel-logo-white.svg"
                        alt="SavvyCal" />
                </div>

                <!-- Duplicate of the above for infinite effect (you can use javascript to duplicate this too) -->
                <div class="animate-slide-left-infinite group-hover:animation-pause inline-block w-max">
                    <!-- Ensure that the images cover entire screen width for a smooth transition -->
                    <img class="mx-4 inline h-16"
                        src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg"
                        alt="Reform" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg"
                        alt="Tuple" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg"
                        alt="SavvyCal" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg"
                        alt="SavvyCal" />
                    <img class="mx-4 inline h-16" src="https://tailwindui.com/img/logos/158x48/laravel-logo-white.svg"
                        alt="SavvyCal" />
                </div>
            </div>
        </div>
        {{--  --}}


        <hr class="pt-8">

        {{-- Nilai Usung --}}
        <div class="delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="400">
            <h2 class="text-center mb-2 leading-8 font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl">Nilai Yang
                Kami
                Usung</h2>
            <div class="flex justify-center items-center py-8 sm:py-16">
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-8 md:space-x-16 lg:space-x-32">
                    <div class="bg-green-800 flex justify-center rounded-2xl items-center h-16 w-48">
                        <h2 class="text-white text-center text-lg sm:text-xl">INOVATIF</h2>
                    </div>
                    <div class="bg-green-800 flex justify-center rounded-2xl items-center h-16 w-48">
                        <h2 class="text-white text-center text-lg sm:text-xl">TEPAT GUNA</h2>
                    </div>
                    <div class="bg-green-800 flex justify-center rounded-2xl items-center h-16 w-48">
                        <h2 class="text-white text-center text-lg sm:text-xl">BERKELANJUTAN</h2>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}

        <hr>

        {{-- Layanan --}}
        <div>
            <div class="bg-green-800 py-8">
                <div class="text-center   leading-8  text-2xl sm:text-3xl md:text-4xl lg:text-5xl  ">
                    <h2
                        class="text-center mb-2 leading-8 font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl text-white">
                        Layanan Kami
                    </h2>
                    <p class="text-white text-center text-lg font-extralight leading-8 pb-1">Selamat datang di Layanan
                        Kami, di mana kami
                        menyediakan beragam pilihan layanan untuk memenuhi kebutuhan Anda..</p>
                </div>
            </div>
            <div class="py-1 px-4 mx-auto max-w-screen-xl ">

                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Konsultasi</h3>
                        <p class="text-black dark:text-black">Konsultasi terkait Pengelolaan Lingkungan.</p>
                    </div>

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Pelatihan</h3>
                        <p class="text-black dark:text-black">Pelatihan Sertifikasi Profesi Lingkungan Hidup</p>
                    </div>

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Pengurusan Izin</h3>
                        <p class="text-black dark:text-black">Pengurusan Izin Perusahaan ( TDG, IUI, SIUP IMB, MOU
                            Limbah B3, SKRK, PBG, dll )
                            .</p>
                    </div>

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Pengurusan</h3>
                        <p class="text-black dark:text-black">Pengurusan SLO Air Limbah, Emisi, Listrik, Genset dan
                            Penangkal Petir</p>
                    </div>

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Pengujian</h3>
                        <p class="text-black dark:text-black">Jasa Pengujian Air Limbah dan Emisi</p>
                    </div>

                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 ">

                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-800">Dokumen</h3>
                        <p class="text-black dark:text-black">Pembuatan Dokumen UKL - UPL</p>
                    </div>






                </div>
                <div class="text-center px-8 py-8">
                    <p class=" underline text-cyan-500 hover:text-cyan-700 text-sm "> <a href="/layanan">Read
                            more.</a>
                    </p>
                </div>

            </div>
        </div>

        {{--  --}}
        <hr>

        {{-- Image --}}
        <div>
            <div class=" mx-auto px-5 pb-11 lg:px-32 lg:pt-0">
                <h2
                    class="text-center  mb-2 leading-8 font-bold text-xl sm:text-2xl md:text-3xl lg:text-4xl text-green-800 py-8">
                    Libary</h2>
                <div class="-m-1 flex flex-wrap md:-m-2">
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" />
                        </div>
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" />
                        </div>
                    </div>
                    <div class="flex w-1/2 flex-wrap">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp" />
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                                src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        {{-- faq --}}
        <div class="bg-green-800">
            <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
                <h2 class="mb-12 text-4xl font-bold leadi text-center sm:text-5xl text-white">Frequently Asked
                    Questions</h2>
                <div class="flex flex-col divide-y sm:px-8 lg:px-12 xl:px-32 divide-white text-white">
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">How can I place an order?
                        </summary>
                        <div class="px-4 pb-4">
                            <p>You can easily place an order on our website by browsing our product catalog, selecting
                                the
                                items you want, and adding them to your cart. Then, proceed to checkout, where you can
                                provide your shipping and payment information to complete the order.</p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">What payment methods do you
                            accept?</summary>
                        <div class="px-4 pb-4">
                            <p>We accept various payment methods, including credit cards, debit cards, net banking, and
                                mobile wallet payments. You can choose the payment option that is most convenient for
                                you
                                during the checkout process.</p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">How long does shipping take?
                        </summary>
                        <div class="px-4 pb-4">
                            <p>Shipping times may vary depending on your location and the shipping method chosen.
                                Typically,
                                orders are processed within 1-2 business days, and delivery can take 3-7 business days
                                within India. You will receive a tracking notification once your order is shipped.</p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">Can I return a product if I'm
                            not
                            satisfied?</summary>
                        <div class="px-4 pb-4">
                            <p>Yes, we have a hassle-free return policy. If you are not satisfied with your purchase,
                                you
                                can initiate a return within 30 days of receiving the product. Please contact our
                                customer
                                support at <a href="" class="underline">example@gmail.com</a> for assistance.
                            </p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">Do you offer international
                            shipping?</summary>
                        <div class="px-4 pb-4">
                            <p>Currently, we only provide shipping services within India. However, we may consider
                                expanding
                                our shipping options to international locations in the future. Please stay updated with
                                our
                                website for any changes in shipping destinations.</p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">What is your customer support
                            contact?</summary>
                        <div class="px-4 pb-4">
                            <p>If you have any questions, concerns, or need assistance, you can reach our customer
                                support
                                team at 9911083755 during our business hours, Monday to Saturday from 10 am to 6 pm. You
                                can
                                also contact us via email at <a href=""
                                    class="underline">example@gmail.com</a>.
                            </p>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 outline-none cursor-pointer focus:underline">What are your terms and
                            conditions?</summary>
                        <div class="px-4 pb-4">
                            <p>You can find our detailed terms and conditions by visiting our
                                <a href="" class="underline">Terms of Service</a>
                                page on our website. It includes information about our policies, user guidelines, and
                                more.
                            </p>
                        </div>
                    </details>
                </div>
                <div class="text-center px-0 py-8">
                    <p class=" underline text-cyan-500 hover:text-cyan-700 text-sm "> <a href="/faq">Read
                            more.</a>
                    </p>
                </div>

            </div>

        </div>


        {{--  --}}


        <hr>
        {{-- contac an loc --}}
        <div class="container my-12 mx-auto px-2 md:px-4">

            <section class="mb-32">

                <div class="flex justify-center">
                    <div class="text-center md:max-w-xl lg:max-w-3xl">
                        <h2 class="mb-12 px-6 text-3xl font-bold">
                            Contact us
                        </h2>
                    </div>
                </div>

                <div class="flex flex-wrap">

                    <form class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">

                        <div class="mb-3 w-full">
                            <label class="block font-medium mb-[2px] text-green-800" htmlFor="exampleInput90">
                                Name
                            </label>
                            <input type="text" class="px-2 py-2 border w-full outline-none rounded-md"
                                id="exampleInput90" placeholder="Name" />
                        </div>

                        <div class="mb-3 w-full">
                            <label class="block font-medium mb-[2px] text-teal-700" htmlFor="exampleInput90">
                                Email
                            </label>
                            <input type="email" class="px-2 py-2 border w-full outline-none rounded-md"
                                id="exampleInput90" placeholder="Enter your email address" />
                        </div>

                        <div class="mb-3 w-full">
                            <label class="block font-medium mb-[2px] text-teal-700" htmlFor="exampleInput90">
                                Message
                            </label>
                            <textarea class="px-2 py-2 border rounded-[5px] w-full outline-none" name="" id=""></textarea>
                        </div>

                        <button type="button"
                            class="mb-6 inline-block w-full rounded bg-green-800 px-6 py-2.5 font-medium uppercase leading-normal text-white hover:shadow-md hover:bg-green-500">
                            Send
                        </button>

                    </form>

                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                        <div class="flex flex-wrap">
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-teal-400-100 p-4 text-teal-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold">
                                            Technical support
                                        </p>
                                        <p class="text-neutral-500 ">
                                            support@example.com
                                        </p>
                                        <p class="text-neutral-500 ">
                                            +1 234-567-89
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-teal-400-100 p-4 text-teal-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold ">
                                            Sales questions
                                        </p>
                                        <p class="text-neutral-500 ">
                                            sales@example.com
                                        </p>
                                        <p class="text-neutral-500 ">
                                            +1 234-567-89
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="align-start flex">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-teal-400-100 p-4 text-teal-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold ">Press</p>
                                        <p class="text-neutral-500 ">
                                            press@example.com
                                        </p>
                                        <p class="text-neutral-500 ">
                                            +1 234-567-89
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="align-start flex">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-teal-400-100 p-4 text-teal-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold">
                                            Bug report
                                        </p>
                                        <p class="text-neutral-500 ">
                                            bugs@example.com
                                        </p>
                                        <p class="text-neutral-500">
                                            +1 234-567-89
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        {{--  --}}




    </section>

</x-layout>
