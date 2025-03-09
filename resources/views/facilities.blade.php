@extends('layouts.main')

@section('title', 'Fasilitas Laboratorium')

@section('content')
<div class="pt-16">
    <section id="laboratory" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Laboratorium A</h2>
                <p class="text-lg text-gray-600">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas voluptatem, laboriosam ratione provident aliquam obcaecati maxime eveniet eum vel nisi.
                </p>
            </div>
            
            <!-- Laboratory Overview -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <img src="{{ asset('images/Lab_Struktur.jpeg') }}" alt="Laboratorium Teknik Sipil UNSOED" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="space-y-6">
                    <h3 class="text-3xl font-semibold text-gray-900">Laboratorium Teknik Sipil</h3>
                    <p class="text-lg text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <p class="text-lg text-gray-600">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
            </div>
            
            <!-- Laboratory Sections -->
            {{-- <div class="mb-16">
                <h3 class="text-2xl font-semibold text-gray-900 mb-8 text-center">Fasilitas Laboratorium</h3>
                <div class="grid md:grid-cols-3 gap-6 mb-10">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Lab. Struktur</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Lab. Material</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Lab. Geoteknik</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div> --}}
            
            <!-- Equipment Gallery -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-8 text-center">Peralatan Laboratorium</h3>
                <p class="text-center text-gray-600 mb-8">Klik pada gambar untuk melihat detail peralatan</p>
                
                <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
                    <!-- Equipment Item 1 -->
                    <div class="equipment-item relative rounded-lg overflow-hidden shadow-md cursor-pointer" data-equipment="compression-test">
                        <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tekan Beton" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                        <div class="equipment-overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <h4 class="text-white text-xl font-semibold text-center px-4">Alat 1</h4>
                        </div>
                    </div>
                    
                    <!-- Equipment Item 2 -->
                    <div class="equipment-item relative rounded-lg overflow-hidden shadow-md cursor-pointer" data-equipment="tensile-test">
                        <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tarik Baja" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                        <div class="equipment-overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <h4 class="text-white text-xl font-semibold text-center px-4">Alat 3</h4>
                        </div>
                    </div>
                    
                    <!-- Equipment Item 3 -->
                    <div class="equipment-item relative rounded-lg overflow-hidden shadow-md cursor-pointer" data-equipment="soil-test">
                        <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tanah" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                        <div class="equipment-overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <h4 class="text-white text-xl font-semibold text-center px-4">Alat 4</h4>
                        </div>
                    </div>
                    
                    <!-- Equipment Item 4 -->
                    <div class="equipment-item relative rounded-lg overflow-hidden shadow-md cursor-pointer" data-equipment="concrete-mixer">
                        <img src="{{ asset('images/contoh1.jpeg') }}" alt="Concrete Mixer" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                        <div class="equipment-overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <h4 class="text-white text-xl font-semibold text-center px-4">alat 5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Equipment Modals -->
    <!-- Modal for Compression Test -->
    <div id="modal-compression-test" class="equipment-modal fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl max-w-4xl mx-4 w-full">
            <div class="relative">
                <div class="p-6">
                    <button class="modal-close absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tekan Beton" class="w-full h-auto rounded-lg">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Alat Uji 1</h3>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quis mollitia dolores, commodi maxime quaerat. Ullam officiis, eum sapiente aut inventore adipisci reiciendis dolorem minus.                            </p>
                            <div class="space-y-2">
                                <h4 class="text-lg font-semibold text-gray-900">Spesifikasi:</h4>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <li>Spesifikasi</li>
                                    <li>list daftar spek</li>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-900">Aplikasi:</h4>
                                <p class="text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Tensile Test -->
    <div id="modal-tensile-test" class="equipment-modal fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl max-w-4xl mx-4 w-full">
            <div class="relative">
                <div class="p-6">
                    <button class="modal-close absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tarik Baja" class="w-full h-auto rounded-lg">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Alat Uji 2</h3>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, est dicta, ipsum eum ducimus inventore quidem, sunt explicabo a iusto at laboriosam ab eos illo.                            </p>
                            <div class="space-y-2">
                                <h4 class="text-lg font-semibold text-gray-900">Spesifikasi:</h4>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <li>Spesifikasi</li>
                                    <li>list daftar spek</li>
                                </ul>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-900">Aplikasi:</h4>
                                <p class="text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Soil Test -->
    <div id="modal-soil-test" class="equipment-modal fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl max-w-4xl mx-4 w-full">
            <div class="relative">
                <div class="p-6">
                    <button class="modal-close absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <img src="{{ asset('images/contoh1.jpeg') }}" alt="Alat Uji Tanah" class="w-full h-auto rounded-lg">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Alat 2</h3>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, ullam.
                            </p>
                            <div class="space-y-2">
                                <h4 class="text-lg font-semibold text-gray-900">Spesifikasi:</h4>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <li>Spesifikasi</li>
                                    <li>list daftar spek</li>
                                </ul>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-900">Aplikasi:</h4>
                                <p class="text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolorem in explicabo tempora placeat atque vel! Dolor tempora earum praesentium in iste quos harum. Unde.                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Concrete Mixer -->
    <div id="modal-concrete-mixer" class="equipment-modal fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl max-w-4xl mx-4 w-full">
            <div class="relative">
                <div class="p-6">
                    <button class="modal-close absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <img src="{{ asset('images/contoh1.jpeg') }}" alt="Concrete Mixer" class="w-full h-auto rounded-lg">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Alat 2</h3>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, id!
                            </p>
                            <div class="space-y-2">
                                <h4 class="text-lg font-semibold text-gray-900">Spesifikasi:</h4>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <li>Spesifikasi</li>
                                    <li>list daftar spek</li>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-900">Aplikasi:</h4>
                                <p class="text-gray-600">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorum sapiente quibusdam adipisci excepturi iure fugit, a mollitia deserunt, accusantium saepe, quisquam nihil voluptatibus laborum?                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk modal peralatan -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all equipment items
        const equipmentItems = document.querySelectorAll('.equipment-item');
        
        // Get all modals
        const modals = document.querySelectorAll('.equipment-modal');
        
        // Get all close buttons
        const closeButtons = document.querySelectorAll('.modal-close');
        
        // Open modal when equipment item is clicked
        equipmentItems.forEach(item => {
            item.addEventListener('click', function() {
                const equipment = this.getAttribute('data-equipment');
                const modal = document.getElementById(`modal-${equipment}`);
                
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                }
            });
        });
        
        // Close modal when close button is clicked
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.equipment-modal');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Enable scrolling
            });
        });
        
        // Close modal when clicking outside the modal content
        modals.forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Enable scrolling
                }
            });
        });
    });
</script>
@endsection