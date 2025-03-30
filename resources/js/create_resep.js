document.addEventListener("DOMContentLoaded", function() {
                
    // Fungsi tambah bahan
    document.getElementById('add-bahan').addEventListener('click', function() {
        let container = document.getElementById('bahan-container');
        let div = document.createElement('div');
        div.classList.add('flex', 'items-center', 'space-x-2', 'mt-2');
        div.innerHTML = `<input type="text" name="bahan[]" class="w-full border border-gray-300 rounded-lg p-2">
                        <button type="button" class="text-red-500 font-bold text-xl remove-item">🗑</button>`;
        container.appendChild(div);
    });

    // Fungsi tambah cara membuat
    document.getElementById('add-cara').addEventListener('click', function() {
        let container = document.getElementById('cara-container');
        let div = document.createElement('div');
        div.classList.add('flex', 'items-center', 'space-x-2', 'mt-2');
        div.innerHTML = `<input type="text" name="cara_membuat[]" class="w-full border border-gray-300 rounded-lg p-2">
                        <button type="button" class="text-red-500 font-bold text-xl remove-item">🗑</button>`;
        container.appendChild(div);
    });

    // Fungsi hapus bahan atau cara membuat
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-item')) {
            e.target.parentElement.remove();
        }
    });
});