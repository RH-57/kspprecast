<style>
    /* Wrapper Utama (Kiri Bawah) */
    .wa-widget-wrapper {
        position: fixed;
        bottom: 25px;
        left: 25px;
        z-index: 9999;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    }

    /* Tombol Floating Utama (Trigger) */
    .wa-trigger-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        animation: wa-pulse 3s infinite;
    }

    .wa-trigger-btn i {
        font-size: 30px;
        transition: transform 0.3s ease;
    }

    .wa-trigger-btn:hover {
        transform: scale(1.08);
        box-shadow: 0 12px 28px rgba(37, 211, 102, 0.6);
    }

    /* Pop-up Chat Box */
    .wa-chat-box {
        position: absolute;
        bottom: 75px;
        left: 0;
        width: 300px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px) scale(0.95);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    /* State Aktif Pop-up */
    .wa-chat-box.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
    }

    /* Header Pop-up */
    .wa-chat-header {
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: white;
        padding: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .wa-chat-header i {
        font-size: 24px;
    }

    .wa-header-info h4 {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
    }

    .wa-header-info p {
        margin: 2px 0 0 0;
        font-size: 12px;
        opacity: 0.9;
    }

    /* Body Pop-up (Daftar Kontak) */
    .wa-chat-body {
        padding: 16px;
        background: #F8F9FA;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* Item Kontak */
    .wa-contact-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #ffffff;
        padding: 12px 14px;
        border-radius: 10px;
        text-decoration: none;
        color: #333;
        border: 1px solid #E9ECEF;
        transition: all 0.2s ease;
    }

    .wa-contact-item:hover {
        background: #F0FDF4;
        border-color: #25D366;
        transform: translateX(4px);
    }

    .wa-contact-details {
        display: flex;
        flex-direction: column;
    }

    .wa-contact-name {
        font-size: 14px;
        font-weight: 600;
        color: #212529;
    }

    .wa-contact-status {
        font-size: 11px;
        color: #25D366;
        font-weight: 500;
    }

    .wa-contact-item i {
        font-size: 20px;
        color: #25D366;
    }

    /* Keyframes Pulse */
    @keyframes wa-pulse {
        0% { box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4); }
        50% { box-shadow: 0 8px 24px rgba(37, 211, 102, 0.7); }
        100% { box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4); }
    }

    /* Responsif untuk Layar HP Kecil */
    @media (max-width: 480px) {
        .wa-widget-wrapper {
            bottom: 20px;
            left: 20px;
        }
        .wa-chat-box {
            width: calc(100vw - 40px);
            max-width: 300px;
        }
    }
</style>

<div class="wa-widget-wrapper">
    <div class="wa-chat-box" id="waChatBox">
        <div class="wa-chat-header">
            <i class="bi bi-whatsapp"></i>
            <div class="wa-header-info">
                <h4>Hubungi Kami</h4>
                <p>Silakan pilih tim kami di bawah</p>
            </div>
        </div>
        <div class="wa-chat-body">
            <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
               class="wa-contact-item" target="_blank" title="Hubungi Admin 1">
                <div class="wa-contact-details">
                    <span class="wa-contact-name">Admin 1</span>
                    <span class="wa-contact-status">● Online</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>

            <a href="https://wa.me/{{$contacts->phone_1}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
               class="wa-contact-item" target="_blank" title="Hubungi Admin 2">
                <div class="wa-contact-details">
                    <span class="wa-contact-name">Admin 2</span>
                    <span class="wa-contact-status">● Online</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
    </div>

    <button class="wa-trigger-btn" id="waTriggerBtn" aria-label="Buka Chat WhatsApp">
        <i class="bi bi-whatsapp" id="waTriggerIcon"></i>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const triggerBtn = document.getElementById('waTriggerBtn');
        const chatBox = document.getElementById('waChatBox');
        const triggerIcon = document.getElementById('waTriggerIcon');

        triggerBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            chatBox.classList.toggle('active');

            // Toggle icon antara WhatsApp dan Close (X)
            if (chatBox.classList.contains('active')) {
                triggerIcon.className = 'bi bi-x-lg';
            } else {
                triggerIcon.className = 'bi bi-whatsapp';
            }
        });

        // Tutup chat box jika area di luar widget diklik
        document.addEventListener('click', function(e) {
            if (!chatBox.contains(e.target) && !triggerBtn.contains(e.target)) {
                chatBox.classList.remove('active');
                triggerIcon.className = 'bi bi-whatsapp';
            }
        });
    });
</script>
