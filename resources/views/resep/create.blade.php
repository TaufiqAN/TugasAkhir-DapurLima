

 @extends('layout.app')

 <div class="max-w-2xl mx-auto mt-28">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold text-gray-700 mb-4">Tambah Resep</h2>

        <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data" 
        {{-- class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md" --}}
        >
           @csrf
           <!-- Judul Resep -->
           <div class="mb-4">
               <label for="title" class="block text-gray-700 font-bold">Judul Resep</label>
               <input type="text" name="nama_resep" id="title" placeholder="Masukkan nama resep" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
           </div>
       
           <!-- Deskripsi -->
           <div class="mb-4">
               <label for="deskripsi" class="block text-gray-700 font-bold">Deskripsi</label>
               <textarea name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"></textarea>
           </div>
       
           <!-- Upload Gambar -->
           <div class="mb-4">
               <label for="image" class="block text-gray-700 font-bold">Gambar Resep</label>
               <input type="file" name="image" id="image" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
           </div>
       
           <!-- Waktu & Porsi -->
           <div class="grid grid-cols-2 gap-4">
               <div class="mb-4">
                   <label for="time" class="block text-gray-700 font-bold">Waktu Memasak (Menit)</label>
                   <input type="number" name="waktu" id="time" placeholder="Masukkan waktu" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
               </div>
               <div class="mb-4">
                   <label for="porsi" class="block text-gray-700 font-bold">Porsi</label>
                   <input type="number" name="porsi" id="porsi" placeholder="Masukkan porsi" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
               </div>
           </div>
       
           <!-- Kategori -->
           <div class="mb-4">
               <label for="kesulitan" class="block text-gray-700 font-bold">Kategori</label>
               <select name="kategori_id" id="" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach
               </select>
           </div>

           <!-- Tingkat Kesulitan -->
           <div class="mb-4">
               <label for="kesulitan" class="block text-gray-700 font-bold">Tingkat Kesulitan</label>
               <select name="kesulitan" id="kesulitan" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                   <option value="Mudah">Mudah</option>
                   <option value="Sedang">Sedang</option>
                   <option value="Sulit">Sulit</option>
               </select>
           </div>
       
           <!-- Bahan -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Bahan</label>
                <div x-data="{ bahan: [''] }">
                <template x-for="(bahann, index) in bahan" :key="index">
                        <div class="flex space-x-2 mt-2">
                            <input type="text" :name="'bahan[]'" x-model="bahan[index]"
                                class="w-full p-2 border border-gray-300 rounded-lg"
                                placeholder="Masukkan bahan"
                                required>
                            <button type="button" class="text-red-500 font-bold" @click="bahan.splice(index, 1)" x-show="bahan.length > 1">✖</button>
                        </div>
                    </template>
                    <button type="button" class="mt-2 bg-blue-500 text-white px-3 py-1 rounded-lg" @click="bahan.push('')">Tambah Bahan</button>
                </div>
            </div>

            <!-- Cara Membuat -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Cara Membuat</label>
                <div x-data="{ cara_membuat: [''] }">
                    <template x-for="(cara_membuatt, index) in cara_membuat" :key="index">
                        <div class="flex space-x-2 mt-2">
                            <input type="text" :name="'cara_membuat[]'" x-model="cara_membuat[index]"
                                class="w-full p-2 border border-gray-300 rounded-lg"
                                placeholder="Masukkan langkah"
                                required>
                            <button type="button" class="text-red-500 font-bold" @click="cara_membuat.splice(index, 1)" x-show="cara_membuat.length > 1">✖</button>
                        </div>
                    </template>
                    <button type="button" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg" @click="cara_membuat.push('')">Tambah Langkah</button>
                </div>
            </div>

       
           <!-- Submit Button -->
           <button type="submit" class="min-w-full bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan Resep</button>
       </form>
    </div>
 </div>

