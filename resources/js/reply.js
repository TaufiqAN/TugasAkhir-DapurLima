
window.toggleReplyForm = function (reviewId) {
    const form = document.getElementById('reply-form-' + reviewId);
    form?.classList.toggle('hidden');
};

window.submitReply = function (reviewId) {
    const contentInput = document.getElementById('reply-content-' + reviewId);
    const loadingText = document.getElementById('loading-' + reviewId);
    const replyContainer = document.getElementById('reply-container-' + reviewId);

    const content = contentInput.value.trim();
    if (!content) {
        alert('Balasan tidak boleh kosong.');
        return;
    }

    loadingText.classList.remove('hidden');

    fetch("/reply", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: JSON.stringify({
            review_id: reviewId,
            content: content
        })
    })
    .then(res => res.json())
    .then(reply => {
        loadingText.classList.add('hidden');
        contentInput.value = "";

        // Tambahkan balasan ke reply-container
        const replyHTML = `
            <div class="border-l-4 border-gray-700 pl-4 mt-2">
                <p class="font-semibold text-lg text-gray-800">${reply.user.name}</p>
                <p class="text-gray-700">${reply.content}</p>
                <p><span class="text-xs text-gray-500">${new Date(reply.created_at).toLocaleString()}</span></p>
            </div>
        `;
        replyContainer.insertAdjacentHTML('beforeend', replyHTML);
        document.getElementById('reply-form-' + reviewId).classList.add('hidden');

    })
    
    .catch(err => {
        loadingText.classList.add('hidden');
        console.error(err);
        alert("Gagal mengirim balasan.");
    });
};
