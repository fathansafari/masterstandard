document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const pageContainer = document.querySelector('.page-container');

    // Fungsi untuk mengatur status sidebar berdasarkan ukuran layar
    function setSidebarState() {
        if (window.innerWidth <= 768) {
            pageContainer.classList.add('sidebar-collapsed');
        } else {
            pageContainer.classList.remove('sidebar-collapsed');
        }
    }

    // Atur status sidebar saat halaman pertama kali dimuat
    setSidebarState();

    // Tambahkan event listener untuk toggle klik
    sidebarToggle.addEventListener('click', function() {
        pageContainer.classList.toggle('sidebar-collapsed');
    });

    // (Opsional) Atur ulang status sidebar saat ukuran jendela diubah
    window.addEventListener('resize', setSidebarState);
});
