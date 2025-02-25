@extends('layouts.main')

@section('title', 'About')

@section('content')
<div class="pt-16"> <!-- Padding for fixed navbar -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-gray-900">Laboratorium Teknik Sipil UNSOED</h2>
                    <p class="text-lg text-gray-600">
                        Laboratorium Teknik Sipil Universitas Jenderal Soedirman merupakan fasilitas penelitian dan pengujian yang dilengkapi dengan peralatan modern untuk mendukung kegiatan akademik, penelitian, dan pengabdian kepada masyarakat dalam bidang teknik sipil.
                    </p>
                    <p class="text-lg text-gray-600">
                        Dengan dukungan staf ahli yang berpengalaman dan peralatan yang terstandarisasi, laboratorium kami siap memberikan layanan pengujian material dan penelitian dalam berbagai aspek teknik sipil.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/lab-photo.jpg') }}" alt="Laboratorium Teknik Sipil" class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Pengantar Kepala Laboratorium</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                    <img src="{{ asset('images/Pak Hery.jpg') }}" alt="Pak Hery" class="rounded-lg shadow-lg w-40 h-40">
                    <div class="ml-6 space-y-4">
                        <p class="text-lg text-gray-600">
                            "Sebagai Kepala Laboratorium Teknik Sipil, saya berkomitmen untuk terus meningkatkan kualitas penelitian, pengujian, dan inovasi di bidang teknik sipil. Dengan fasilitas yang terus berkembang dan tim yang kompeten, kami siap menghadapi tantangan serta mendukung perkembangan ilmu teknik sipil di Indonesia."
                        </p>
                        <p class="text-lg font-semibold text-gray-900">Pak Hery</p>
                        <p class="text-gray-600">Kepala Laboratorium Teknik Sipil UNSOED</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
            </div>
            <div class="space-y-6">
                <p class="text-lg text-gray-600"><strong>Visi:</strong> Menjadi pusat unggulan riset dan inovasi teknik sipil.</p>
                <p class="text-lg text-gray-600"><strong>Misi:</strong> Pengembangan riset, fasilitas unggul, kolaborasi strategis, dan peningkatan SDM.</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Tim Pengelola</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/koordinator.jpg') }}" alt="Koordinator Riset" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Daplun</h3>
                    <p class="text-gray-600">Koordinator Riset dan Pengembangan</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/manajer.jpg') }}" alt="Manajer Operasional" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Daplunina</h3>
                    <p class="text-gray-600">Manajer Operasional Laboratorium</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/spesialis.jpg') }}" alt="Spesialis Analisis Struktur" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-xl font-semibold">YAYa</h3>
                    <p class="text-gray-600">Spesialis Analisis Struktur</p>
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
    });
</script>