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
            const review = data.data;
            const reviewHTML = `
            <ul class="pt-4 mt-4 space-y-2 font-medium border-t dark:border-gray-600">
            
                <p class="font-semibold text-lg text-gray-800">${data.user.name}</p>
            
                <div class="flex items-center text-yellow-400">
                    ${[...Array(5)].map((_, i) => `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ${i < data.rating ? 'text-yellow-400' : 'text-gray-300'}" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.974c.3.921-.755 1.688-1.54 1.118l-3.38-2.455a1 1 0 00-1.175 0l-3.38 2.455c-.784.57-1.838-.197-1.539-1.118l1.287-3.974a1 1 0 00-.364-1.118L2.045 9.4c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.287-3.974z" />
                        </svg>
                    `).join('')}
                </div>
            
                <p class="text-gray-700">${data.ulasan}</p>
                <p><span class="text-xs text-gray-500">Baru saja</span></p>
            
                <div class="review" data-review-id="${data.id}">
                    <button onclick="toggleLike(this)" class="flex items-center space-x-2 transition">
                        <span class="like-icon">
                            <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"/>
                            </svg>
                        </span>
                        <span class="like-count text-sm">0</span>
                    </button>
                </div>
            
                <button onclick="toggleReplyForm(${data.id})" class="mt-2 text-sm text-blue-600 hover:underline">Balas</button>
            
                <div id="reply-form-${data.id}" class="hidden mt-2">
                    <textarea id="reply-content-${data.id}" class="w-full border border-gray-300 rounded-lg p-2 text-sm" placeholder="Tulis Balasan"></textarea>
                    <button onclick="submitReply(${data.id})" class="mt-2 inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">Kirim</button>
                    <span id="loading-${data.id}" class="hidden text-sm text-gray-500 ml-2">Mengirim...</span>
                </div>
            
                <div id="reply-container-${data.id}" class="mt-2 space-y-2"></div>
            </ul>
            `;
            
            document.getElementById("no-review")?.remove();
            document.getElementById("reviews").insertAdjacentHTML("beforeend", reviewHTML);
            modal.classList.add("hidden");
            document.getElementById("reviewForm").reset();
            document.getElementById("ratingValue").value = 0;
            document.querySelectorAll(".star").forEach(s => s.classList.remove("text-yellow-400"));
        })
        .catch(error => {
            console.error("Review submit error:", error);
            alert("Terjadi kesalahan, coba lagi nanti.");
        });         
    });
});