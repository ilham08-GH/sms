<?php
// Ambil variabel dari controller, beri default jika belum ada
$records     = $this->view->records ?? [];
$bulan       = $this->view->bulan ?? date('m');
$tahun       = $this->view->tahun ?? date('Y');
$jumlah_hari = $this->view->jumlah_hari ?? 0;
?>

<div class="container-fluid mt-3">
    <?php
    // Include partial kalender
    if (!empty($this->view->content)) {
        include $this->view->get_theme_file($this->view->content);
    }
    ?>
</div>
