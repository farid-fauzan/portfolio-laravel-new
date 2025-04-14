<!-- Project Modal Component -->
<div id="projectModal" class="modal-hyperspace" onclick="handleOutsideClick(event)">
    <div class="modal-inner box">
        <div id="modal-images" class="modal-images"></div>

        <h2 id="modal-title" class="major"></h2>
        <p id="modal-description"></p>
        <p><strong>Tech Stack:</strong> <br><span id="modal-tech"></span></p>
        <ul class="actions special">
            <li><a href="javascript:void(0);" onclick="closeModal()" class="button primary small">Close</a></li>
        </ul>
    </div>
</div>


@push('scripts')
<script>
    function openModal(title, description, tech, images) {
    document.getElementById('modal-title').innerText = title;
    document.getElementById('modal-description').innerText = description;
    document.getElementById('modal-tech').innerHTML = tech.map(t => `<span class='badge-tech'>${t}</span>`).join(' ');

    const container = document.getElementById('modal-images');
    container.innerHTML = ''; // Clear

    container.className = 'modal-images'; // Reset class
    if (images.length > 1) {
        container.classList.add('horizontal'); // Tambah horizontal kalau lebih dari 1
    }

    images.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        img.alt = title;
        container.appendChild(img);
    });

    document.getElementById('projectModal').classList.add('visible');
    }




    function closeModal() {
        document.getElementById('projectModal').classList.remove('visible');
    }

    function handleOutsideClick(event) {
        if (event.target.id === 'projectModal') {
            closeModal();
        }
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
            closeModal();
        }
    });
</script>

<style>
    .modal-hyperspace {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 6vh;
        background-color: rgba(0, 0, 0, 0.75);
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .modal-hyperspace.visible {
        opacity: 1;
        pointer-events: auto;
    }

    .modal-inner {
        background: #fff;
        border-radius: 1rem;
        padding: 2rem 2rem 3rem; /* ⬅️ padding bawah ditambah */
        max-width: 840px;
        width: 95%;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        animation: fadeIn 0.4s ease;
        color: #2c2c2c;
    }

    .modal-image {
        width: 100%;
        max-height: 320px;
        object-fit: cover;
        border-radius: 1rem;
        margin-bottom: 1.5rem;
    }

    @keyframes fadeIn {
        from { transform: translateY(40px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .badge-tech {
        background-color: #3faffa;
        color: white;
        padding: 0.35em 0.7em;
        border-radius: 0.5em;
        font-size: 0.85rem;
        margin: 0.2em 0.4em 0.2em 0;
        display: inline-block;
    }

    @media screen and (max-width: 768px) {
        .modal-inner {
            padding: 1.5rem;
            max-width: 95%;
        }
    }

    .modal-images {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.5rem;
    }

    .modal-images img {
        width: 100%;
        height: auto;
        border-radius: 1rem;
        object-fit: cover;
        box-shadow: 0 0.3rem 1rem rgba(0,0,0,0.1);
    }

    .modal-images.horizontal {
        flex-direction: row;
        overflow-x: auto;
        justify-content: center;
        padding-bottom: 0.5rem;
    }

    .modal-images.horizontal img {
        height: 400px;
        width: auto;
        flex-shrink: 0;
    }



</style>
@endpush
