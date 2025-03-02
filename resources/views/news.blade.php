@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<div class="pt-16">
    <section id="news" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
                <p class="text-lg text-gray-600">Temukan informasi terbaru dari Laboratorium Teknik Sipil UNSOED</p>
            </div>
            
            <!-- Search and Filter Section -->
            <div class="mb-10 bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Search Form -->
                    <div class="md:col-span-2">
                        <form action="" method="GET" class="flex">
                            <input type="text" name="search" placeholder="Cari berita..." class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    
                    <!-- Category Filter -->
                    <div>
                        <h3 class="text-md font-semibold mb-2">Filter Kategori:</h3>
                        <div class="flex flex-wrap gap-4">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="category[]" value="penelitian" class="form-checkbox h-4 w-4 text-blue-600">
                                <span>Penelitian</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="category[]" value="pengujian" class="form-checkbox h-4 w-4 text-blue-600">
                                <span>Pengujian</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="category[]" value="kegiatan" class="form-checkbox h-4 w-4 text-blue-600">
                                <span>Kegiatan</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="category[]" value="prestasi" class="form-checkbox h-4 w-4 text-blue-600">
                                <span>Prestasi</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- News Cards -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/news/uji-beton.jpg') }}" alt="Pengujian Kuat Tekan Beton" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-blue-600 font-medium bg-blue-100 px-2 py-1 rounded">Pengujian</span>
                            <span class="text-sm text-gray-500">Maret 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'pengujian-kuat-tekan-beton-untuk-pembangunan-gedung-rektorat') }}"> --}}
                                Pengujian Kuat Tekan Beton untuk Pembangunan Gedung Rektorat
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Laboratorium Teknik Sipil UNSOED telah melakukan pengujian kuat tekan beton untuk pembangunan gedung rektorat baru UNSOED. Pengujian ini dilakukan untuk memastikan kualitas beton yang digunakan memenuhi standar yang ditetapkan.
                        </p>
                        <div class="flex items-center">
                            <img src="{{ asset('images/authors/dr-budi.jpg') }}" alt="Dr. Budi Santoso" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Dr. Budi Santoso</span>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/news/penelitian-bahan.jpg') }}" alt="Penelitian Bahan Ramah Lingkungan" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium bg-green-100 px-2 py-1 rounded">Penelitian</span>
                            <span class="text-sm text-gray-500">Februari 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'penelitian-bahan-bangunan-ramah-lingkungan-dari-limbah-pertanian') }}"> --}}
                                Penelitian Bahan Bangunan Ramah Lingkungan dari Limbah Pertanian
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Tim peneliti Laboratorium Teknik Sipil UNSOED berhasil mengembangkan bahan bangunan alternatif yang ramah lingkungan dengan memanfaatkan limbah pertanian. Penelitian ini diharapkan dapat memberikan solusi untuk mengurangi dampak lingkungan dari industri konstruksi.
                        </p>
                        <div class="flex items-center">
                            <img src="{{ asset('images/authors/dr-siti.jpg') }}" alt="Dr. Siti Aminah" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Dr. Siti Aminah</span>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/news/kerjasama.jpg') }}" alt="Penandatanganan MoU" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-purple-600 font-medium bg-purple-100 px-2 py-1 rounded">Kegiatan</span>
                            <span class="text-sm text-gray-500">Januari 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'penandatanganan-mou-dengan-pt-pembangunan-perumahan') }}"> --}}
                                Penandatanganan MoU dengan PT Pembangunan Perumahan
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Laboratorium Teknik Sipil UNSOED menandatangani Memorandum of Understanding (MoU) dengan PT Pembangunan Perumahan untuk kolaborasi penelitian dan pengembangan material konstruksi. Kerjasama ini akan membuka kesempatan bagi mahasiswa teknik sipil untuk magang di perusahaan tersebut.
                        </p>
                        <div class="flex items-center">
                            <img src="{{ asset('images/authors/prof-ahmad.jpg') }}" alt="Prof. Ahmad Wijaya" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm text-gray-600">Prof. Ahmad Wijaya</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <a href="#" class="px-3 py-2 rounded-md bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="px-3 py-2 rounded-md bg-blue-600 text-white">1</a>
                    <a href="#" class="px-3 py-2 rounded-md bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white">2</a>
                    <a href="#" class="px-3 py-2 rounded-md bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white">3</a>
                    <span class="px-3 py-2">...</span>
                    <a href="#" class="px-3 py-2 rounded-md bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white">8</a>
                    <a href="#" class="px-3 py-2 rounded-md bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>
</div>
@endsection