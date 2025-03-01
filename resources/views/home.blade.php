{{-- resources/views/home.blade.php --}}
@extends('layouts.main')

@section('title', 'Home')

@section('content')
{{-- <div class="pt-16"> <!-- Padding for fixed navbar -->
    <!-- Hero Video Section with Parallax -->
    <div class="relative h-screen w-full overflow-hidden">
        <video class="absolute z-10 w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('videos/header.mp4') }}" type="video/mp4">
        </video>
        <div class="relative z-20 h-full flex items-center justify-center bg-gradient-to-b from-black/50 to-black/70">
            <div class="text-center text-white px-4 animate-fade-in">
                <h1 class="text-5xl md:text-7xl font-bold mb-20 animate-slide-up">
                    Build Quality to Bring Dignity
                </h1>
                <p class="text-xl md:text-3xl mb-8 animate-slide-up-delay">
                    Build Quality to Bring Dignity
                </p>
                <div class="space-x-4">
                    <a href="/about" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        Explore Lab
                    </a>
                    <a href="/lab-service" class="bg-transparent border-2 border-white hover:bg-white hover:text-black text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="pt-16"> <!-- Padding for fixed navbar -->
        <!-- Hero Video Section with Parallax -->
        <div class="relative h-screen w-full overflow-hidden">
            <video class="absolute z-10 w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset('videos/header.mp4') }}" type="video/mp4">
            </video>
            <div class="relative z-20 h-full flex items-center justify-center bg-gradient-to-b from-black/50 to-black/70">
                <div class="text-center text-white px-4 animate-fade-in">
                    <h1 class="text-5xl md:text-7xl font-bold mb-20 animate-slide-up">
                        Build Quality to Bring Dignity
                    </h1>
                    {{-- <p class="text-xl md:text-3xl mb-8 animate-slide-up-delay">
                        Build Quality to Bring Dignity
                    </p> --}}
                    <div class="space-x-4">
                        <a href="/about" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                            Explore Lab
                        </a>
                        <button id="openVideoModal" class="bg-transparent border-2 border-white hover:bg-white hover:text-black text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 z-50 hidden overflow-y-auto overflow-x-hidden flex items-center justify-center">
        <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>
        
        <div class="relative w-full max-w-4xl p-4 mx-auto my-auto">
            <div class="relative bg-black rounded-lg shadow-xl overflow-hidden">
                <!-- Close button -->
                <button id="closeVideoModal" class="absolute top-2 right-2 text-white hover:text-gray-300 z-10 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                
                <!-- Video container with responsive aspect ratio -->
                <div class="relative pb-[56.25%] h-0">
                    <iframe id="youtubeIframe" class="absolute top-0 left-0 w-full h-full"
                        src="" 
                        title="YouTube video player" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="py-20 bg-white">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Kolom Informasi -->
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Laboratorium Teknik Sipil UNSOED</h2>
                    <div class="space-y-4">
                        <p class="text-base md:text-lg text-gray-600">
                            Laboratorium Teknik Sipil Universitas Jenderal Soedirman merupakan fasilitas penelitian dan pengujian yang dilengkapi dengan peralatan modern untuk mendukung kegiatan akademik, penelitian, dan pengabdian kepada masyarakat dalam bidang teknik sipil.
                        </p>
                        <p class="text-base md:text-lg text-gray-600">
                            Dengan dukungan staf ahli yang berpengalaman dan peralatan yang terstandarisasi, laboratorium kami siap memberikan layanan pengujian material dan penelitian dalam berbagai aspek teknik sipil.
                        </p>
                    </div>
                    <div class="pt-2">
                        <a href="/about" class="inline-block px-6 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition duration-300 text-center">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                
                <!-- Kolom Gambar -->
                <div class="order-first md:order-last">
                    <img src="{{ asset('images/lab-photo.jpeg') }}" alt="Laboratorium Teknik Sipil" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>


    <!-- Latest Research Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest Research</h2>
                <p class="text-xl text-gray-600">Discover our recent research projects and innovations</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Research Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- <img src="{{ asset('images/research1.jpg') }}" alt="Research 1" class="w-full h-48 object-cover"> -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi!.</p>
                        <a href="/research" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More →</a>
                    </div>
                </div>

                <!-- Research Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- <img src="{{ asset('images/research2.jpg') }}" alt="Research 2" class="w-full h-48 object-cover"> -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vel ratione adipisci?</p>
                        <a href="/research" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More →</a>
                    </div>
                </div>

                <!-- Research Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- <img src="{{ asset('images/research3.jpg') }}" alt="Research 3" class="w-full h-48 object-cover"> -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing.</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, sequi?</p>
                        <a href="/research" class="text-blue-600 hover:text-blue-800 font-semibold">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditation Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Akreditasi & Sertifikasi</h2>
                <p class="text-xl text-gray-600">Laboratorium kami telah terakreditasi dan tersertifikasi oleh berbagai lembaga</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- KAN Accreditation -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/kan-logo.png') }}" alt="nama gambar" class="h-24 mx-auto mb-6">
                    <h3 class="text-xl font-semibold mb-4">Terakreditasi IABEE</h3>
                    <p class="text-gray-600">LP-1234-IDN</p>
                </div>
                
                <!-- ISO Certification -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/iso-logo.png') }}" alt="ISO Logo" class="h-24 mx-auto mb-6">
                    <h3 class="text-xl font-semibold mb-4">Terakreditasi PII</h3>
                    <p class="text-gray-600">Sistem Manajemen Mutu Laboratorium Pengujian</p>
                </div>

                <!-- Other Certification -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/cert-logo.png') }}" alt="Certification Logo" class="h-24 mx-auto mb-6">
                    <h3 class="text-xl font-semibold mb-4">Akreditasi BAN-PT</h3>
                    <p class="text-gray-600">Lembaga Akreditasi Perguruan Tinggi</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/cert-logo.png') }}" alt="Certification Logo" class="h-24 mx-auto mb-6">
                    <h3 class="text-xl font-semibold mb-4">Akreditasi BAN-PT</h3>
                    <p class="text-gray-600">Lembaga Akreditasi Perguruan Tinggi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Visit Our Laboratory</h2>
                <p class="text-xl text-gray-600">Find us at the heart of UNSOED campus</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-semibold mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <p class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Jl. Mayjen Sungkono KM 5, Blater, Kalimanah
                            </p>
                            <p class="flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                laboratoriumsipil.unsoed@gmail.com
                            </p>
                            <p class="flex items-center text-gray-600">
                                <svg class="h-6 w-6 mr-3 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                  </svg>
                                  (+62)81393133408
                            </p>
                        </div>
                    </div>
                </div>
                <div class="h-[400px]">
                    <iframe 
                        class="w-full h-full rounded-lg shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273768企業情報を保護するため、実際の位置情報は伏せています" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

<!-- CSS -->
<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-in;
    }
    
    .animate-slide-up {
        animation: slideUp 0.8s ease-out;
    }
    
    .animate-slide-up-delay {
        animation: slideUp 0.8s ease-out 0.2s;
        animation-fill-mode: backwards;
    }
    
    @keyframes fadeIn {
        from { 
            opacity: 0; 
        }
        to { 
            opacity: 1; 
        }
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Tambahan class untuk animasi */
    .animate-scale-in {
        animation: scaleIn 0.8s ease-out;
    }

    .animate-slide-right {
        animation: slideInRight 0.8s ease-out;
    }

    .animate-slide-left {
        animation: slideInLeft 0.8s ease-out;
    }

    /* Animasi hover untuk cards */
    .hover-scale {
        transition: transform 0.3s ease-in-out;
    }

    .hover-scale:hover {
        transform: scale(1.05);
    }

    /* Animasi untuk statistik */
    .stat-number {
        animation: countUp 2s ease-out forwards;
        opacity: 0;
    }

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }

    /* Efek parallax untuk background */
    .parallax {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Loading animation untuk images */
    .img-loading {
        opacity: 0;
        transition: opacity 0.3s ease-in;
    }

    .img-loaded {
        opacity: 1;
    }

    /* Animasi untuk button hover */
    .btn-hover {
        transition: all 0.3s ease;
    }

    .btn-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Animasi untuk section headers */
    .section-header {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease-out;
    }

    .section-header.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Animasi untuk cards ketika muncul */
    .card-animate {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease-out;
    }

    .card-animate.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Tambahkan script untuk mengaktifkan animasi saat scroll -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk mengecek elemen dalam viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fungsi untuk menambahkan class visible saat elemen dalam viewport
        function handleScroll() {
            const sections = document.querySelectorAll('.section-header, .card-animate');
            sections.forEach(section => {
                if (isInViewport(section)) {
                    section.classList.add('visible');
                }
            });
        }

        // Event listener untuk scroll
        window.addEventListener('scroll', handleScroll);
        
        // Trigger saat pertama kali load
        handleScroll();

        // Handling image loading
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.classList.add('img-loading');
            img.onload = function() {
                this.classList.add('img-loaded');
            }
        });

        const openBtn = document.getElementById('openVideoModal');
        const closeBtn = document.getElementById('closeVideoModal');
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('youtubeIframe');
        const videoId = 'QMn3g51K_S0';
        
        // Set iframe src when opening to optimize page load
        openBtn.addEventListener('click', function() {
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden'); // Prevent scrolling when modal is open
        });
        
        // Close modal and stop video
        closeBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
            iframe.src = '';
            document.body.classList.remove('overflow-hidden');
        });
        
        // Close modal when clicking outside the video
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeBtn.click();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeBtn.click();
            }
        });
    });
</script>