<?php
$menus = [
    [
        'nama' => 'Paket Nasi Kotak Premium',
        'harga' => '35.000',
        'deskripsi' => 'Nasi putih, ayam bakar kecap, capcay, telur balado, tempe orek, dan kerupuk udang',
        'gambar' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=2072'
    ],
    [
        'nama' => 'Paket Prasmanan Gold',
        'harga' => '85.000/orang',
        'deskripsi' => 'Nasi putih, ayam bakar, ikan gurame, sop buntut, sayur asem, aneka lauk, dan dessert',
        'gambar' => 'https://images.unsplash.com/photo-1555244162-803834f70033?q=80&w=2070'
    ],
    [
        'nama' => 'Paket Snack Box Deluxe',
        'harga' => '25.000',
        'deskripsi' => '4 macam kue tradisional, roti isi, buah potong, dan minuman premium',
        'gambar' => 'https://images.unsplash.com/photo-1621857426350-ddab819cf0cc?q=80&w=2069'
    ],
    [
        'nama' => 'Paket Tumpeng Mini',
        'harga' => '450.000',
        'deskripsi' => 'Tumpeng nasi kuning lengkap dengan 7 macam lauk pauk tradisional (untuk 10 orang)',
        'gambar' => 'https://images.unsplash.com/photo-1590828413506-d632c9e582c8?q=80&w=2072'
    ],
    [
        'nama' => 'Paket Nasi Kuning Komplit',
        'harga' => '40.000',
        'deskripsi' => 'Nasi kuning, ayam goreng, telur balado, perkedel, mie goreng, dan sambal',
        'gambar' => 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=2013'
    ],
    [
        'nama' => 'Paket Coffee Break',
        'harga' => '30.000/orang',
        'deskripsi' => 'Aneka kue tradisional, roti, kopi/teh, dan air mineral (min. 50 orang)',
        'gambar' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=2037'
    ],
    [
        'nama' => 'Paket Prasmanan Premium',
        'harga' => '150.000/orang',
        'deskripsi' => 'Nasi putih, 3 pilihan main course, 5 side dish, soup, salad bar, dan aneka dessert',
        'gambar' => 'https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?q=80&w=2070'
    ],
    [
        'nama' => 'Paket Rijsttafel',
        'harga' => '200.000/orang',
        'deskripsi' => '12 jenis hidangan Indonesia tradisional disajikan dengan gaya rijsttafel (min. 30 orang)',
        'gambar' => 'https://images.unsplash.com/photo-1567337710282-00832b415979?q=80&w=2030'
    ],
    [
        'nama' => 'Paket Ulang Tahun Spesial',
        'harga' => '100.000/orang',
        'deskripsi' => 'Nasi tumpeng mini, aneka lauk pauk, snack box, kue ulang tahun, dan dekorasi meja (min. 20 orang)',
        'gambar' => 'https://images.unsplash.com/photo-1559620192-032c4bc4674e?q=80&w=2029'
    ]
];

foreach ($menus as $index => $menu) {
    echo '<div class="menu-item">';
    echo '<div class="menu-image" style="background-image: url(\'' . $menu['gambar'] . '\')"></div>';
    echo '<div class="menu-content">';
    echo '<h3>' . $menu['nama'] . '</h3>';
    echo '<p class="harga">' . $menu['harga'] . '</p>';
    echo '<button class="detail-btn" onclick="showDetail(' . $index . ')">Lihat Detail</button>';
    echo '</div>';
    echo '</div>';
}
?>

<!-- Modal Detail Menu -->
<div id="menuModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-body">
            <div class="modal-image"></div>
            <h3 class="modal-title"></h3>
            <p class="modal-harga"></p>
            <p class="modal-deskripsi"></p>
            <button class="pesan-btn" onclick="pesanSekarang()">Pesan Sekarang</button>
        </div>
    </div>
</div>

<script>
const menus = <?php echo json_encode($menus); ?>;
let selectedMenu = null; // Untuk menyimpan menu yang sedang dipilih

function showDetail(index) {
    const menu = menus[index];
    selectedMenu = menu; // Simpan menu yang dipilih
    const modal = document.getElementById('menuModal');
    const modalImage = modal.querySelector('.modal-image');
    const modalTitle = modal.querySelector('.modal-title');
    const modalHarga = modal.querySelector('.modal-harga');
    const modalDeskripsi = modal.querySelector('.modal-deskripsi');

    modalImage.style.backgroundImage = `url('${menu.gambar}')`;
    modalTitle.textContent = menu.nama;
    modalHarga.textContent = `Rp ${menu.harga}`;
    modalDeskripsi.textContent = menu.deskripsi;

    modal.style.display = 'flex';
}

function pesanSekarang() {
    if (!selectedMenu) return;

    // Format pesan untuk WhatsApp
    const pesan = `Halo, saya ingin memesan:%0A%0A` +
                 `*${selectedMenu.nama}*%0A` +
                 `Harga: Rp ${selectedMenu.harga}%0A` +
                 `Detail: ${selectedMenu.deskripsi}%0A%0A` +
                 `Mohon informasi lebih lanjut. Terima kasih.`;

    // Ganti nomor WhatsApp sesuai dengan nomor catering Anda
    const nomorWA = '6281234567890';
    
    // Buka WhatsApp dengan pesan yang sudah diformat
    window.open(`https://wa.me/${nomorWA}?text=${pesan}`, '_blank');
}

// Close modal when clicking the close button or outside the modal
document.querySelector('.close-modal').onclick = function() {
    document.getElementById('menuModal').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById('menuModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

// Prevent modal from closing when clicking inside modal content
document.querySelector('.modal-content').onclick = function(event) {
    event.stopPropagation();
}
</script> 