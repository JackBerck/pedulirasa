<x-layout title="Masuk">
    <section
        id="login"
        class="section-padding-x pt-24 pb-12 lg:pt-36 lg:pb-16 normal-font-size text-dark-base">
        <div class="container max-w-screen-sm lg:max-w-screen-lg">
            <div
                class="flex flex-col md:flex-row bg-light-base rounded-lg mx-auto shadow-md overflow-hidden"
            >
                <div
                    class="block md:w-1/2 bg-cover bg-center"
                    style="background-image: url('/images/backgrounds/charity-foodbank-volunteer.jpg')"
                >
                    <div class="h-full bg-black bg-opacity-50">
                        <div class="h-full flex justify-center items-end text-light-base p-4 md:p-8">
                            <p class="small-font-size text-right font-playfair">"Jangan pernah lupa untuk selalu bersyukur. Dan berbagi adalah salah satu cara untuk bersyukur atas nikmat-Nya."</p>
                        </div>
                    </div>
                </div>
                <div class="w-full p-8 md:w-1/2">
                    <h1 class="title-font-size font-bold mb-2 md:text-center">
                        Hallo! 🌟
                    </h1>
                    <p class="normal-font-size mb-4 md:text-center">
                        Selamat datang kembali!
                    </p>
                    <form action="" class="small-font-size flex flex-col gap-4 mb-4">
                        <div class="">
                            <label class="block font-semibold mb-2">Email</label>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="email"
                                placeholder="Masukkan alamat email..."
                            />
                        </div>
                        <div class="">
                            <div class="flex justify-between">
                                <label class="block font-semibold mb-2">Password</label>
                                <a href="#" class="text-xs hover:underline transition-all duration-75">Lupa password?</a>
                            </div>
                            <input
                                class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="password"
                                placeholder="Masukkan password..."
                            />
                        </div>
                        <div class="">
                            <button
                                type="submit"
                                class="border-2 border-green-base bg-green-base text-light-base hover:text-dark-base hover:bg-light-base font-bold py-2 px-4 w-full rounded transition-all duration-75"
                            >Masuk</button
                            >
                        </div>
                    </form>
                    <p class="small-font-size text-center">
                        Belum punya akun?
                        <a
                            href="/signup"
                            class="inline-block py-1 px-2 bg-green-base text-light-base rounded-md"
                        >Daftar sekarang</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
