@extends('layouts.main')

@section('title', 'About')

@section('content')
<div class="pt-16">
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
                    <img src="{{ asset('images/lab-photo.jpeg') }}" alt="Laboratorium Teknik Sipil" class="rounded-lg shadow-lg w-full h-auto">
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ipsa! Reprehenderit voluptatibus dolor quas sint.
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
                <p class="text-lg text-gray-600"><strong>Visi:</strong></p>
                <p class="text-lg text-gray-600 mt-1">
                    Menjadi laboratorium Teknik Sipil yang bermutu dan maju
                    untuk mendukung kegiatan akademik, penelitian dan
                    industri konstruksi sehingga dapat berkontribusi bagi
                    pembangunan bangsa dan negara.
                </p>
                <p class="text-lg text-gray-600"><strong>Misi:</strong>
                    <ol class="text-lg text-gray-600" start="1">
                        <li>
                            1. Memberikan pelayanan praktikum kepada mahasiswa
                        </li>
                        <li>
                            2. Memberikan pelayanan penelitian kepada dosen dan mahasiswa
                        </li>
                        <li>
                            3. Memberi pelayanan pengujian kepada kontraktor dan
                            konsultan
                        </li>
                    </ol>
                </p>
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
                    <h3 class="text-xl font-semibold">Lorem, ipsum.</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/manajer.jpg') }}" alt="Manajer Operasional" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/spesialis.jpg') }}" alt="Spesialis Analisis Struktur" class="rounded-full w-32 h-32 mx-auto mb-4">
                    <h3 class="text-xl font-semibold">YAYa</h3>
                    <p class="text-gray-600">Lab</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection