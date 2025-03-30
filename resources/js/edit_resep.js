document.addEventListener("DOMContentLoaded", function () {
    // Bahan
    const bahanList = document.getElementById("bahan-list");
    document.getElementById("tambah-bahan").addEventListener("click", function () {
        const li = document.createElement("li");
        li.className = "flex items-center space-x-3";
        li.innerHTML = `
            <input type="text" name="bahan[]" class="w-full p-2 border border-gray-300 rounded-lg">
            <button type="button" class="text-red-500 font-bold remove-bahan">✖</button>
        `;
        bahanList.appendChild(li);
    });

    bahanList.addEventListener("click", function (event) {
        if (event.target.classList.contains("remove-bahan")) {
            event.target.closest("li").remove();
        }
    });

    // Cara Membuat
    const caraList = document.getElementById("cara-list");
    document.getElementById("tambah-cara").addEventListener("click", function () {
        const li = document.createElement("li");
        li.className = "flex items-center space-x-3";
        li.innerHTML = `
            <input type="text" name="cara_membuat[]" class="w-full p-2 border border-gray-300 rounded-lg">
            <button type="button" class="text-red-500 font-bold remove-cara">✖</button>
        `;
        caraList.appendChild(li);
    });

    caraList.addEventListener("click", function (event) {
        if (event.target.classList.contains("remove-cara")) {
            event.target.closest("li").remove();
        }
    });
}); 