<x-layout title="Daftar">
    <section
        id="register"
        class="section-padding-x pt-24 pb-12 lg:pt-36 lg:pb-16 normal-font-size text-dark-base">
        <div class="container max-w-screen-sm lg:max-w-screen-lg">
            <div
                class="flex flex-col md:flex-row-reverse bg-light-base rounded-lg mx-auto shadow-md overflow-hidden"
            >
                <div
                    class="block md:w-1/2 bg-cover bg-center"
                    style="background-image: url('/images/backgrounds/people-bringing-supplies-neighbors.jpg')"
                >
                    <div class="h-full bg-black bg-opacity-50">
                        <div class="h-full flex justify-center items-end text-light-base p-4 md:p-8">
                            <p class="small-font-size text-right font-playfair">"Dalam hidup ini, berbagi kepada sesama memberi jiwa rasa damai. Berbagi dengan tulus tanpa pamrih memberikan perasaan suka cita"</p>
                        </div>
                    </div>
                </div>
                <div class="w-full p-8 md:w-1/2">
                    <h1 class="title-font-size font-bold mb-2 md:text-center">
                        Hai, Selamat Datang! 🌟
                    </h1>
                    <p class="normal-font-size mb-4 md:text-center">
                        Ayo bergabung dengan kami!
                    </p>
                    <form id="register-form" action="" method="post" class="small-font-size flex flex-col gap-4 mb-4">
                        @csrf
                        <div class="">
                            <label class="block font-semibold mb-2" for="name-input">Nama Lengkap <span class="text-red-600">*</span></label>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="text"
                                name="name"
                                id="name-input"
                                placeholder="Masukkan nama lengkap..."
                                required
                            />
                        </div>
                        <div class="">
                            <label class="block font-semibold mb-2" for="email-input">Email <span class="text-red-600">*</span></label>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="email"
                                name="email"
                                id="email-input"
                                placeholder="Masukkan alamat email..."
                                required
                            />
                        </div>
                        <div class="">
                            <label class="block font-semibold mb-2" for="phone-input">Nomor Telepon <span class="text-red-600">*</span></label>
                            <div class="flex">
                                <span class="bg-gray-200 border border-gray-300 rounded-l py-2 px-4">+62</span>
                                <input
                                    class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded-r py-2 px-4 block w-full appearance-none"
                                    type="text"
                                    name="phone"
                                    id="phone-input"
                                    placeholder="Masukkan nomor telepon..."
                                    required
                                />
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-between">
                                <label class="block font-semibold mb-2" for="password-input">Password <span class="text-red-600">*</span></label>
                            </div>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="password"
                                name="password"
                                id="password-input"
                                placeholder="Masukkan password..."
                                required
                            />
                        </div>
                        <div class="">
                            <div class="flex justify-between">
                                <label class="block font-semibold mb-2" for="confirm-password-input">Konfirmasi Password <span class="text-red-600">*</span></label>
                            </div>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="password"
                                name="confirm-password"
                                id="confirm-password-input"
                                placeholder="Masukkan password..."
                                required
                            />
                        </div>
                        <div id="password-error" class="text-red-600 text-sm hidden">
                            Password dan konfirmasi password tidak cocok.
                        </div>
                        <div class="">
                            <button
                                type="submit"
                                class="border-2 border-green-base bg-green-base text-light-base hover:text-dark-base hover:bg-light-base font-bold py-2 px-4 w-full rounded transition-all duration-75"
                            >Daftar</button
                            >
                        </div>
                    </form>
                    <p class="small-font-size text-center">
                        Sudah punya akun?
                        <a
                            href="/login"
                            class="inline-block py-1 px-2 bg-green-base text-light-base rounded-md"
                        >Masuk sekarang</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('register-form').addEventListener('submit', function(event) {
            const password = document.getElementById('password-input').value;
            const confirmPassword = document.getElementById('confirm-password-input').value;
            const errorDiv = document.getElementById('password-error');

            if (password !== confirmPassword) {
                event.preventDefault();
                errorDiv.classList.remove('hidden');
            } else {
                errorDiv.classList.add('hidden');
            }
        });
    </script>
</x-layout>
