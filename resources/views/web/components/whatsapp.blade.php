<style>
    .wa-float-container {
        position: fixed;
        bottom: 30px;
        left: 30px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        z-index: 9999;
    }

    .wa-btn-custom {
        /* Modern Gradient Background */
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: white;
        padding: 12px 24px;
        border-radius: 50px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        font-weight: 600;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 15px;
        letter-spacing: 0.3px;

        /* Colored Glowing Shadow */
        box-shadow: 0 8px 24px rgba(37, 211, 102, 0.35);

        /* Bouncy Transition */
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);

        /* Subtle Pulse Animation */
        animation: wa-pulse 3s infinite;
    }

    .wa-btn-custom:hover {
        /* Warna agak menggelap saat di-hover */
        background: linear-gradient(135deg, #20BD5C 0%, #0F7569 100%);
        color: white;
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 12px 28px rgba(37, 211, 102, 0.55);
        animation: none; /* Matikan pulse saat di-hover */
    }

    /* Micro-interaction pada Icon */
    .wa-btn-custom i {
        font-size: 22px;
        transition: transform 0.3s ease;
    }

    .wa-btn-custom:hover i {
        transform: scale(1.15) rotate(10deg);
    }

    /* Keyframes untuk efek denyut lembut */
    @keyframes wa-pulse {
        0% {
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.35);
        }
        50% {
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.6);
        }
        100% {
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.35);
        }
    }
</style>

<div class="wa-float-container">
    {{-- Tombol Admin 1 --}}
    <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
       class="wa-btn-custom" target="_blank" title="Hubungi Admin 1">
        <i class="bi bi-whatsapp"></i>
        <span>Admin 1</span>
    </a>

    {{-- Tombol Admin 2 --}}
    <a href="https://wa.me/{{$contacts->phone_1}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
       class="wa-btn-custom" target="_blank" title="Hubungi Admin 2">
        <i class="bi bi-whatsapp"></i>
        <span>Admin 2</span>
    </a>
</div>
