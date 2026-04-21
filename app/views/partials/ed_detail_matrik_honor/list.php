<?php
//$id_matrik_honor = $this->view_data['id_matrik_honor'] ?? '';
//$rincian_output_detail = $this->view_data['rincian_output_detail'] ?? '';
?>
<h3>Form Import Excel</h3>
<br>
<!-- Tombol Unduh Template -->
<a href="<?= print_link('assets/template_import_honor_petugas.xlsx') ?>" 
   class="btn btn-primary mb-3" 
   download>
    <i class="bi bi-file-earmark-excel"></i> Unduh Template Excel
</a>
<a href="<?= print_link('master_petugas/list_petugas_id_cek') ?>" 
   class="btn btn-primary mb-3" 
   target="_blank">
    <i class="bi bi-list-ul" style="margin-right:8px;"></i>
    List Daftar ID Petugas, ID Jabatan dan ID Satuan
</a>


<br>
<br>

<div class="alert alert-danger">
  <strong>Info!</strong> Pastikan data di cek terlebih dahulu dan sesuai aturan agar tidak terjadi kesalahan import.
</div>

<br>
<br>

<form method="post"
      enctype="multipart/form-data"
      action="<?= print_link('ed_detail_matrik_honor') ?>">

    <input type="file" name="file_excel" required>
    <input type="hidden" name="csrf_token" value="<?= Csrf::$token ?>">

    <button type="submit" class="btn btn-primary">
        Upload
    </button>
</form>
