window.toggleReplyForm = function(reviewId) {
    const form = document.getElementById('reply-form-' + reviewId);
    if (form) {
        form.classList.toggle('hidden');
    }
};

function submitReply(reviewId) {
    let content = document.getElementById('reply-content-' + reviewId).value;
    let loading = document.getElementById('loading-' + reviewId);
    loading.classList.remove('hidden');

    fetch("{{ route('reply.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            review_id: reviewId,
            content: content
        })
    })
    .then(async response => {
        loading.classList.add('hidden');
        if (!response.ok) {
            const errorText = await response.text();
            console.error("RESPON ERROR:\n", errorText);
            alert("Gagal mengirim balasan. Cek konsol untuk detail.");
            return;
        }
        return response.json();
    })
    .then(reply => {
        if (!reply) return;

        let replyContainer = document.createElement('div');
        replyContainer.classList.add('ml-6', 'p-2', 'bg-white', 'rounded');
        replyContainer.innerHTML = `<p><strong>${reply.user.name}</strong> (${new Date(reply.created_at).toLocaleString()}): ${reply.content}</p>`;

        document.getElementById('reply-container-' + reviewId).appendChild(replyContainer);
        document.getElementById('reply-content-' + reviewId).value = '';
    })
    .catch(error => {
        console.error("CATCH ERROR:\n", error);
        alert("Terjadi kesalahan. Silakan coba lagi nanti.");
        loading.classList.add('hidden');
    });
}