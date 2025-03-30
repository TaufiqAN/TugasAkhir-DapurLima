// Fungsi save resep

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".save-btn").forEach(button => {
        button.addEventListener("click", function() {
            event.stopPropagation();
            const resepId = this.getAttribute("data-resep-id");
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            fetch(`/save/${resepId}`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": token,
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                // Ubah ikon sesuai status yang dikembalikan
                if (data.status === "saved") {
                    this.innerHTML = `<svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                    </svg>`;
                } else {
                    this.innerHTML = `<svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                    </svg>`;
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
});
