document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("reviewModal");
    const openModalBtn = document.getElementById("openModal");
    const closeModalBtn = document.getElementById("closeModal");

    openModalBtn.addEventListener("click", () => modal.classList.remove("hidden"));
    closeModalBtn.addEventListener("click", () => modal.classList.add("hidden"));

    document.querySelectorAll(".star").forEach(star => {
        star.addEventListener("click", function () {
            let value = this.getAttribute("data-value");
            document.getElementById("ratingValue").value = value;
            document.querySelectorAll(".star").forEach(s => s.classList.remove("text-yellow-400"));
            for (let i = 0; i < value; i++) {
                document.querySelectorAll(".star")[i].classList.add("text-yellow-400");
            }
        });
    });

    document.getElementById("reviewForm").addEventListener("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        fetch("/reviews", { 
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            }
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("reviews").innerHTML += `<div><strong>${data.user.name}</strong> - ${data.rating}★<p>${data.ulasan}</p></div>`;
            modal.classList.add("hidden"); // Tutup modal setelah kirim ulasan
            document.getElementById("reviewForm").reset();
            document.getElementById("ratingValue").value = 0;
            document.querySelectorAll(".star").forEach(s => s.classList.remove("text-yellow-400"));
        })
        .catch(error => alert("Terjadi kesalahan, coba lagi nanti."));
    });
});