@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<div class="pt-16">
    <section id="news" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
                {{-- <p class="text-lg text-gray-600">Informasi Laboratorium Teknik Sipil UNSOED</p> --}}
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
                    <!-- Updated Category Filter with Modal -->
                    <div>
                        <button id="categoryFilterBtn" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter Kategori
                            <span class="ml-2 bg-white text-blue-600 rounded-full px-2 py-0.5 text-xs font-bold hidden" id="selectedCount">0</span>
                        </button>
                    </div>

                    <!-- Category Filter Modal -->
                    <div id="categoryModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                        <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold text-gray-900">Filter Berdasarkan Kategori</h3>
                                    <button id="closeModal" class="text-gray-400 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="space-y-3 mb-6">
                                    <label class="flex items-center p-2 hover:bg-gray-50 rounded cursor-pointer">
                                        <input type="checkbox" name="category[]" value="penelitian" class="category-checkbox form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-3 text-md">Penelitian</span>
                                        <span class="ml-auto bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">12</span>
                                    </label>
                                    
                                    <label class="flex items-center p-2 hover:bg-gray-50 rounded cursor-pointer">
                                        <input type="checkbox" name="category[]" value="pengujian" class="category-checkbox form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-3 text-md">Pengujian</span>
                                        <span class="ml-auto bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full">8</span>
                                    </label>
                                    
                                    <label class="flex items-center p-2 hover:bg-gray-50 rounded cursor-pointer">
                                        <input type="checkbox" name="category[]" value="kegiatan" class="category-checkbox form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-3 text-md">Kegiatan</span>
                                        <span class="ml-auto bg-purple-100 text-purple-600 text-xs px-2 py-1 rounded-full">15</span>
                                    </label>
                                    
                                    <label class="flex items-center p-2 hover:bg-gray-50 rounded cursor-pointer">
                                        <input type="checkbox" name="category[]" value="prestasi" class="category-checkbox form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-3 text-md">Prestasi</span>
                                        <span class="ml-auto bg-yellow-100 text-yellow-600 text-xs px-2 py-1 rounded-full">6</span>
                                    </label>
                                    
                                    <label class="flex items-center p-2 hover:bg-gray-50 rounded cursor-pointer">
                                        <input type="checkbox" name="category[]" value="kerjasama" class="category-checkbox form-checkbox h-5 w-5 text-blue-600">
                                        <span class="ml-3 text-md">Kerjasama</span>
                                        <span class="ml-auto bg-red-100 text-red-600 text-xs px-2 py-1 rounded-full">9</span>
                                    </label>
                                </div>
                                
                                <div class="flex justify-between space-x-3">
                                    <button id="resetFilter" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 w-1/2">
                                        Reset
                                    </button>
                                    <button id="applyFilter" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 w-1/2">
                                        Terapkan Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- News Cards -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/contoh3.jpeg') }}" alt="Pengujian Kuat Tekan Beton" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-blue-600 font-medium bg-blue-100 px-2 py-1 rounded">Pengujian</span>
                            <span class="text-sm text-gray-500">Maret 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'pengujian-kuat-tekan-beton-untuk-pembangunan-gedung-rektorat') }}"> --}}
                                Lorem ipsum dolor sit amet.
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat eum error labore sit, maiores aut.
                        </p>
                        <div class="flex items-center">
                            {{-- <img src="{{ asset('images/authors/dr-budi.jpg') }}" alt="" class="w-10 h-10 rounded-full mr-3"> --}}
                            <span class="text-sm text-gray-600">Penulis 1</span>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/contoh2.jpeg') }}" alt="Penelitian Bahan Ramah Lingkungan" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-green-600 font-medium bg-green-100 px-2 py-1 rounded">Penelitian</span>
                            <span class="text-sm text-gray-500">Februari 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'penelitian-bahan-bangunan-ramah-lingkungan-dari-limbah-pertanian') }}"> --}}
                                Lorem ipsum dolor sit amet.
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Tim peneliti Laboratorium Teknik Sipil UNSOED berhasil mengembangkan bahan bangunan alternatif yang ramah lingkungan dengan memanfaatkan limbah pertanian. Penelitian ini diharapkan dapat memberikan solusi untuk mengurangi dampak lingkungan dari industri konstruksi.
                        </p>
                        <div class="flex items-center">
                            {{-- <img src="{{ asset('images/authors/dr-siti.jpg') }}" alt="" class="w-10 h-10 rounded-full mr-3"> --}}
                            <span class="text-sm text-gray-600">Penulis 2</span>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                    <img src="{{ asset('images/contoh1.jpeg') }}" alt="Penandatanganan MoU" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-purple-600 font-medium bg-purple-100 px-2 py-1 rounded">Kegiatan</span>
                            <span class="text-sm text-gray-500">Januari 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 hover:text-blue-600">
                            {{-- <a href="{{ route('news.show', 'penandatanganan-mou-dengan-pt-pembangunan-perumahan') }}"> --}}
                                Lorem ipsum dolor sit.
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut quos eligendi nostrum ad blanditiis!
                        </p>
                        <div class="flex items-center">
                            {{-- <img src="{{ asset('images/authors/prof-ahmad.jpg') }}" alt="Prof. Ahmad Wijaya" class="w-10 h-10 rounded-full mr-3"> --}}
                            <span class="text-sm text-gray-600">Penulis 3</span>
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

<!-- JavaScript untuk modal dan filter kategori -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryBtn = document.getElementById('categoryFilterBtn');
        const modal = document.getElementById('categoryModal');
        const closeModal = document.getElementById('closeModal');
        const applyFilter = document.getElementById('applyFilter');
        const resetFilter = document.getElementById('resetFilter');
        const checkboxes = document.querySelectorAll('.category-checkbox');
        const selectedCount = document.getElementById('selectedCount');
        
        // Fungsi untuk menghitung dan menampilkan jumlah kategori yang dipilih
        function updateSelectedCount() {
            const count = document.querySelectorAll('.category-checkbox:checked').length;
            selectedCount.textContent = count;
            if (count > 0) {
                selectedCount.classList.remove('hidden');
            } else {
                selectedCount.classList.add('hidden');
            }
        }
        
        // Tambahkan event listener untuk semua checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedCount);
        });
        
        // Buka modal
        categoryBtn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scroll pada body
        });
        
        // Tutup modal
        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Mengaktifkan kembali scroll
        });
        
        // Klik di luar modal untuk menutup
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Terapkan filter
        applyFilter.addEventListener('click', function() {
            // Di sini Anda bisa menambahkan logika untuk menerapkan filter
            // Misalnya, submit form atau memanggil fungsi AJAX
            
            updateSelectedCount();
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            
            // Alert sementara untuk demo
            const selectedCategories = [];
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    selectedCategories.push(checkbox.value);
                }
            });
            
            if (selectedCategories.length > 0) {
                console.log('Kategori yang dipilih:', selectedCategories.join(', '));
                // Dalam implementasi nyata, Anda bisa memanggil fungsi untuk filter berita
            }
        });
        
        // Reset filter
        resetFilter.addEventListener('click', function() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            updateSelectedCount();
        });
    });
</script>

@endsection