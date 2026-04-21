<?php
$view_data = $this->view_data;
?>
<style>
/* ❌ JANGAN AUTO CLOSE */
.alert-danger,
.alert-warning {
    opacity: 1 !important;
    display: block !important;
}

/* ✅ hijau tetap default (auto close) */
</style>


<div class="card">
    <div class="card-body">

        <h4 class="mb-3">
            <i class="fa fa-copy"></i> Copy Data dari Kegiatan Sebelumnya
        </h4>

        <form method="post">

            <input type="hidden" name="csrf_token" value="<?= Csrf::$token ?>">
            <input type="hidden" name="id_matrik_honor"
                   value="<?= $view_data['id_matrik_honor'] ?>">

            <div class="form-group">
                <label>Nama Survei</label>
                <select name="nama_survei" class="form-control" required>
                    <option value="">-- pilih nama survei --</option>
                    <?php foreach ($view_data['nama_survei'] as $row): ?>
                        <option value="<?= $row['nama_survei'] ?>">
                            <?= $row['nama_survei'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Bulan Tahun</label>
                <select name="bulan_tahun" class="form-control" required>
                    <option value="">-- pilih bulan --</option>
                    <?php foreach ($view_data['bulan_tahun'] as $row): ?>
                        <option value="<?= $row['bulan_tahun'] ?>">
                            <?= $row['bulan_tahun'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mt-3">
                <button class="btn btn-primary">
                    <i class="fa fa-copy"></i> Copy Data
                </button>

                <a href="matrik_honor?id_matrik_honor=<?= $view_data['id_matrik_honor'] ?>"
                   class="btn btn-secondary">
                    Batal
                </a>
            </div>

        </form>

    </div>
</div>
