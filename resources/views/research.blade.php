@extends('layouts.main')

@section('title', 'Research')

@section('content')
<section class="bg-gray-50 py-12 mt-15">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Search and Filter Bar -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form action="" method="GET" class="space-y-4 md:space-y-0 md:flex md:items-end md:gap-4">
                <!-- Search Bar -->
                <div class="flex-1">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Penelitian</label>
                    <input type="text" id="search" name="search" placeholder="Masukkan judul atau nama peneliti..." 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Category Filter -->
                <div class="w-full md:w-48">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select id="category" name="category" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Kategori</option>
                        <option value="struktur">Struktur</option>
                        <option value="geoteknik">Geoteknik</option>
                        <option value="transportasi">Transportasi</option>
                        <option value="hidrolika">Hidrolika</option>
                        <option value="material">Material</option>
                    </select>
                </div>

                <!-- Year Filter -->
                <div class="w-full md:w-40">
                    <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <select id="year" name="year" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Tahun</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>

                <!-- Search Button -->
                <div class="w-full md:w-auto">
                    <button type="submit" class="w-full md:w-auto px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <!-- Research Results -->
        <div class="space-y-6">
            <!-- Result Count -->
            <div class="text-gray-600 mb-4">
                Menampilkan 3 hasil penelitian
            </div>

            <!-- Research Items -->
            <div class="space-y-6">
                <!-- Item 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 transition-all hover:shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-800 hover:text-blue-600 mb-2">
                        <a href="">Analisis Pengaruh Variasi Campuran Abu Sekam Padi Terhadap Kuat Tekan Beton</a>
                    </h2>
                    <div class="flex flex-wrap gap-2 mb-3">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Material</span>
                    </div>
                    <div class="text-gray-600 mb-4">
                        <span class="font-medium">Penulis:</span> Dr. Agus Supriyanto, S.T., M.T., Ir. Bambang Widodo, M.T., Hendra Kusuma, S.T., M.Eng.
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <div>Dipublikasikan: <span class="font-medium">2023</span></div>
                        <a href="" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Lihat Detail
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 transition-all hover:shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-800 hover:text-blue-600 mb-2">
                        <a href="">Kajian Dampak Perubahan Tata Guna Lahan Terhadap Banjir di Kota Purwokerto</a>
                    </h2>
                    <div class="flex flex-wrap gap-2 mb-3">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Hidrolika</span>
                    </div>
                    <div class="text-gray-600 mb-4">
                        <span class="font-medium">Penulis:</span> Dr. Retno Sulistyowati, S.T., M.T., Prof. Ir. Suhartono, Ph.D., Eka Putri, S.T., M.Sc.
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <div>Dipublikasikan: <span class="font-medium">2022</span></div>
                        <a href="" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Lihat Detail
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 transition-all hover:shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-800 hover:text-blue-600 mb-2">
                        <a href="">Evaluasi Struktural Jembatan Serayu dengan Metode Non-Destructive Testing</a>
                    </h2>
                    <div class="flex flex-wrap gap-2 mb-3">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Struktur</span>
                    </div>
                    <div class="text-gray-600 mb-4">
                        <span class="font-medium">Penulis:</span> Prof. Dr. Ir. Ahmad Yusuf, M.Eng., Dr. Dina Kartika, S.T., M.T., Budi Santoso, S.T., M.Eng.
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <div>Dipublikasikan: <span class="font-medium">2024</span></div>
                        <a href="" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Lihat Detail
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-between border-t border-gray-200 pt-6 mt-8">
                <div class="flex justify-between w-full">
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md opacity-50 cursor-not-allowed">
                        Previous
                    </a>
                    <div class="hidden md:flex">
                        <a href="#" class="px-4 py-2 mx-1 text-sm font-medium text-white bg-blue-600 rounded-md">1</a>
                        <a href="#" class="px-4 py-2 mx-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">2</a>
                        <a href="#" class="px-4 py-2 mx-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">3</a>
                    </div>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </div>
{{-- </section> --}}
@endsection