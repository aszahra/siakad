<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-5">
                <div class="bg-white w-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 w-full text-gray-900 dark:text-gray-100">
                        <div class="bg-slate-200 p-4 mb-5">
                            Form Tambah Jurusan
                        </div>
                        <form action="{{route('jurusan.store')}}" method="post">
                            @csrf
                            <div class="mb-5">
                                <label for="kode_jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Jurusan</label>
                                <input type="text" id="kode_jurusan" name="kode_jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kode Jurusan" required />
                            </div>
                            <div class="mb-5">
                                <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <input type="text" id="jurusan" name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Jurusan" required />
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                        </form>
                    </div>
                </div>
                <div class="bg-white w-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 w-full text-gray-900 dark:text-gray-100">
                        Jurusan
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>