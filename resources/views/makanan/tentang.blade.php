@extends('layout.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="bg-white py-16 mt-16">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Tentang Kami</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Kami hadir untuk menjadikan pengalaman memasak di rumah lebih mudah, menyenangkan, dan penuh inspirasi.</p>
        </div>

        <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-xl shadow-sm mb-12">
            <p class="text-gray-700 text-lg leading-relaxed">
                Selamat datang di <span class="font-bold text-green-800">DapurLima</span>! Kami adalah komunitas pecinta kuliner yang ingin berbagi semangat memasak dengan siapa saja, dari pemula hingga yang sudah ahli. Di sini, kamu bisa menemukan berbagai resep lezat mulai dari masakan rumahan, cemilan hingga masakan sedang viral saat ini, lengkap dengan langkah-langkah mudah dan tips dapur praktis.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 mb-16">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Apa yang Kami Tawarkan?</h2>
                <ul class="space-y-3 text-gray-700 list-disc pl-5">
                    <li><strong>Resep Lengkap dan Teruji</strong> — dari masakan rumahan hingga makanan kekinian.</li>
                    <li><strong>Tutorial Langkah demi Langkah</strong> — mudah diikuti bahkan oleh pemula.</li>
                    <li><strong>Rating & Ulasan</strong> — berinteraksi dan bagikan pengalamanmu dengan pengguna lain.</li>
                    <li><strong>Kategori & Filter</strong> — cari resep berdasarkan kategori, jenis masakan, dan waktu masak.</li>
                    <li><strong>Desain Simpel & Bersih</strong> — fokus pada kenyamanan dan kemudahan membaca resep.</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/food/tentang.jpg') }}" alt="Memasak" class="rounded-xl shadow-lg w-full object-cover">
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold text-green-700 mb-3">Visi Kami</h3>
                <p class="text-gray-700 leading-relaxed">
                    Mendorong setiap orang untuk berani memasak dan menjelajahi cita rasa baru, dari dapur sendiri.
                    Kami ingin menjadi inspirasi bagi siapa pun untuk mencoba memasak, menikmati prosesnya, dan menemukan kelezatan dari kreasi sendiri.
                </p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold text-green-700 mb-3">Misi Kami</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>Membangun komunitas pecinta masak yang aktif & suportif.</li>
                    <li>Menyediakan konten resep akurat dan mudah dipahami.</li>
                    <li>Mendorong kebiasaan masak di rumah sebagai bentuk kasih sayang untuk keluarga.</li>
                </ul>
            </div>
        </div>

        <div class="mt-16 text-center">
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Terima kasih telah menjadi bagian dari <span class="font-semibold text-gray-800">DapurLima</span>. Yuk, berbagi resep dan cerita dapurmu bersama kami!
            </p>
        </div>
    </div>
</section>
@include('layout.footer')
@endsection
