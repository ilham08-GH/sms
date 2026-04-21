<?php
class JadwalTranslokController extends SecureController {

    function kalender() {
        $db = $this->GetModel();

        // =============================
        // Ambil filter bulan & tahun
        // =============================
        $bulan = isset($_GET['bulan']) ? (int)$_GET['bulan'] : date('m'); // default bulan sekarang
        $tahun = isset($_GET['tahun']) ? (int)$_GET['tahun'] : date('Y'); // default tahun sekarang

        // Hitung jumlah hari di bulan & tahun ini
        $jumlah_hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);

        // =============================
        // Buat kolom pivot per hari
        // =============================
        $cols = [];
        for($i=1;$i<=$jumlah_hari;$i++){
            $cols[] = "MAX(CASE WHEN DAY(jt.tgl_translok) = $i THEN jt.id_nama_survei END) AS `".str_pad($i,2,'0',STR_PAD_LEFT)."`";
        }

        $tgl_awal = "$tahun-".str_pad($bulan,2,'0',STR_PAD_LEFT)."-01";
        $tgl_akhir = "$tahun-".str_pad($bulan,2,'0',STR_PAD_LEFT)."-".str_pad($jumlah_hari,2,'0',STR_PAD_LEFT);

        // =============================
        // Query pivot semua user tanpa JOIN ke master_survei
        // =============================
        $sql = "
        SELECT u.nama_user, ".implode(",", $cols)."
        FROM user u
        LEFT JOIN jadwal_translok jt
            ON u.id = jt.id_user 
            AND jt.tgl_translok BETWEEN '$tgl_awal' AND '$tgl_akhir'
        GROUP BY u.nama_user
        ORDER BY u.nama_user
        ";

        $records = $db->rawQuery($sql);

        // =============================
        // Kirim ke view
        // =============================
        $this->view->records       = $records;
        $this->view->bulan         = $bulan;
        $this->view->tahun         = $tahun;
        $this->view->jumlah_hari   = $jumlah_hari;

        $this->render_view("jadwaltranslok/kalender.php");
    }
}
