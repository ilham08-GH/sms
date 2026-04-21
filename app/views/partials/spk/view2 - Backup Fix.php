<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Lampiran SPK</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        
                        
                        <div id="page-report-body" class="">
                         <?php
                        // --- BATAS LAYOUT REPORT -------------------------------------------------
                        $data = isset($data) ? $data : $this->view_data;
                        
                        // Untuk mencegah error
                        function safe($v){
                            return isset($v) ? $v : '';
                        }
                        
                        
                        
                        // Tahun terbilang
                        function tahun_terbilang($tahun) {
                            $ribu = floor($tahun / 1000);
                            $sisa = $tahun % 1000;
                            return trim(angka_ke_teks($ribu) . " ribu " . angka_ke_teks($sisa));
                        }
                        
                       
                        ?>
                        
                        <?php
                        
                        
                        // Fungsi terbilang rupiah lengkap hingga jutaan/milyar
                        function terbilang_uang($angka){
                            $angka = intval($angka);
                            $bilangan = [
                                "", "satu", "dua", "tiga", "empat", "lima",
                                "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"
                            ];
                        
                            if ($angka < 12) {
                                return $bilangan[$angka];
                            } elseif ($angka < 20) {
                                return terbilang_uang($angka - 10) . " belas";
                            } elseif ($angka < 100) {
                                return terbilang_uang($angka/10) . " puluh " . terbilang_uang($angka % 10);
                            } elseif ($angka < 200) {
                                return "seratus " . terbilang_uang($angka - 100);
                            } elseif ($angka < 1000) {
                                return terbilang_uang($angka/100) . " ratus " . terbilang_uang($angka % 100);
                            } elseif ($angka < 2000) {
                                return "seribu " . terbilang_uang($angka - 1000);
                            } elseif ($angka < 1000000) {
                                return terbilang_uang($angka/1000) . " ribu " . terbilang_uang($angka % 1000);
                            } elseif ($angka < 1000000000) {
                                return terbilang_uang($angka/1000000) . " juta " . terbilang_uang($angka % 1000000);
                            } else {
                                return $angka; // fallback
                            }
                        }
                        
                        // Konversi angka dasar 1–99
                        function angka_ke_teks($angka) {
                            $angka = intval($angka);
                        
                            $bilangan = array(
                                "", "satu", "dua", "tiga", "empat", "lima", "enam",
                                "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"
                            );
                        
                            if ($angka < 12) {
                                return $bilangan[$angka];
                            } elseif ($angka < 20) {
                                return angka_ke_teks($angka - 10) . " belas";
                            } elseif ($angka < 100) {
                                return angka_ke_teks(intval($angka / 10)) . " puluh " . angka_ke_teks($angka % 10);
                            } elseif ($angka < 200) {
                                return "seratus " . angka_ke_teks($angka - 100);
                            } elseif ($angka < 1000) {
                                return angka_ke_teks(intval($angka / 100)) . " ratus " . angka_ke_teks($angka % 100);
                            } elseif ($angka < 2000) {
                                return "seribu " . angka_ke_teks($angka - 1000);
                            } elseif ($angka < 1000000) {
                                return angka_ke_teks(intval($angka / 1000)) . " ribu " . angka_ke_teks($angka % 1000);
                            } elseif ($angka < 1000000000) {
                                return angka_ke_teks(intval($angka / 1000000)) . " juta " . angka_ke_teks($angka % 1000000);
                            } elseif ($angka < 1000000000000) {
                                return angka_ke_teks(intval($angka / 1000000000)) . " miliar " . angka_ke_teks($angka % 1000000000);
                            } else {
                                return angka_ke_teks(intval($angka / 1000000000000)) . " triliun " . angka_ke_teks($angka % 1000000000000);
                            }
                        }
                        ?>
                        
                        <?php
                        // Ambil Keteranganb Jabatan untuk KOP dan keterangan petugas lainnya
                        // Ambil detail + keterangan jabatan
                        $db = $comp_model->GetModel();
                        $id_spk = safe($data['id']);
                        $detail_jabatan = $db->rawQuery("
                            SELECT 
                                dmh.*, 
                                mjp.keterangan_jabatan
                            FROM detail_matrik_honor AS dmh
                            LEFT JOIN master_jabatan_petugas AS mjp ON dmh.jabatan = mjp.id
                            WHERE dmh.id_spk = ?
                        ", [$id_spk]);
                        
                        // Jika hanya mau ambil satu jabatan (pertama)
                        $keterangan_jabatan = $detail_jabatan[0]['keterangan_jabatan'] ?? '';
                        $keterangan_jabatan_upper = strtoupper($keterangan_jabatan);
                        ?>
                        
                        <div class="card">

                            <style>
                            @page {
                                size: A4 landscape;
                                margin-top: 8mm;
                                margin-bottom: 8mm;
                                margin-left: 8mm;
                                margin-right: 8mm;
                            }

                            
                            body, table, td, p, div, span {
                                font-family: "Bookman Old Style", serif;
                                font-size: 11pt;
                                margin: 0;
                                padding: 0;
                            }
                            
                            .header-title {
                                font-size: 12pt;
                                
                                text-align: center;
                                line-height: 1.4;
                            }
                            
                            .table-pihak {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 15px;
                                table-layout: fixed;
                            }
                            
                            .table-pihak td {
                                vertical-align: top;
                                padding: 3px 5px;
                            }
                            
                            .number-col {
                                width: 30px;
                                text-align: right;
                                padding-right: 5px;
                            }
                            
                            .name-col {
                                width: 250px;
                                padding-right: 5px;
                            }
                            
                            .colon-col {
                                width: 20px;
                                text-align: center;
                            }
                            
                            .desc-col {
                                width: auto;
                                text-align: justify;
                                text-justify: inter-word;
                            }
                            
                            .pasal {
                                text-align: justify;
                                margin-top: 5px;
                            }
                            
                            
                            .pasal-numbered p {
                                margin: 0 0 10px 0;
                                text-align: justify;   /* rata kiri-kanan */
                                line-height: 1.3;
                                padding-left: 1.8em;   /* jarak total dari tepi kiri */
                                text-indent: -1.8em;   /* nomor berada di luar indentasi */
                                font-family: "Bookman Old Style", Georgia, serif;
                            }
                            .pasal-numbered b {
                                margin-right: 5px; /* spasi setelah nomor */
                            }
                            .letter-list {
                                list-style-position: inside; /* nomor/letter berada di dalam paragraf */
                                padding-left: 30px;          /* jarak dari margin kiri */
                                margin: 0 0 5px 0;
                                text-align: justify;
                            }
                            .letter-list li {
                                margin-bottom: 3px;
                            }

                    
                            </style>
                            
                            <div class="header-title">
                                LAMPIRAN<br>
                                PERJANJIAN (KOMITMEN) KERJA PETUGAS <?= $keterangan_jabatan_upper; ?> <br>
                                PADA BADAN PUSAT STATISTIK KABUPATEN GRESIK <br>
                                NOMOR : <?= safe($data['nomor_spk']); ?>
                                <br><br>
                                DAFTAR URAIAN TUGAS, JANGKA WAKTU, TARGET PEKERJAAN DAN NILAI PERJANJIAN<br>
                                NAMA PETUGAS : <?= safe($data['master_petugas_nama_petugas']); ?><br><br>
                            </div>
                            
                            <br>
                            
                            <style>
    table {
        width: 100%;
        border-collapse: collapse; 
        font-family: "Bookman Old Style", Georgia, serif;
        font-size: 11pt;
    }

    th, td {
        border: none;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    th {
        background-color: #f2f2f2;
        height: 40px;
        font-weight: bold;
        border: 1px solid black; 
    }

    tbody td {
    border-right: 1px solid black;
    border-left: 1px solid black;
    padding-top: 4px;      /* jarak atas sel */
    padding-bottom: 4px;   /* jarak bawah sel */
    line-height: 1.0;      /* jarak teks vertikal */
    }

    tbody tr:last-child td {
        border-bottom: 1px solid black;
    }

    tfoot td {
        border: 1px solid black;
    }

    .col-no { width: 5%; }
    .col-uraianheader { width: 30%; }
    .col-uraian { width: 30%; } 
    .col-jangka { width: 15%; }
    .col-volume { width: 8%; }
    .col-satuan-target { width: 7%; }
    .col-harga { width: 10%; }
    .col-nilai { width: 10%; }
    .col-beban { width: 15%; }
    .row-number td {
    font-size: 9pt !important;   /* kecil */
    border-left: 1px solid black !important;
    border-right: 1px solid black !important;
    border-bottom: 1px solid black !important;
}



</style>

<?php
$id_spk = $data['id']; 
$db = $comp_model->GetModel();


// ============================
// AMBIL SEMUA BARIS HONOR
// ============================
//$list_honor = $db->rawQuery("
//    SELECT 
//        dh.volume_spk,
 //       dh.satuan,
 //       dh.harga_satuan,
  //      dh.total,
  //      mh.uraian_kegiatan,
  //      mh.jangka_waktu,
   //     mro.rincian_output
   // FROM detail_matrik_honor dh
  //  LEFT JOIN matrik_honor mh ON dh.id_matrik_honor = mh.id
  //  LEFT JOIN master_rincian_output mro ON mh.id_rincian_output = mro.id
   // WHERE dh.id_spk = ?
//", [$id_spk]);

$list_honor = $db->rawQuery("
    SELECT 
        dh.volume_spk,
        ms.satuan AS satuan,   
        dh.harga_satuan,
        dh.total,
        mh.uraian_kegiatan,
        mh.jangka_waktu,
        mro.rincian_output
    FROM detail_matrik_honor dh
    LEFT JOIN matrik_honor mh ON dh.id_matrik_honor = mh.id
    LEFT JOIN master_rincian_output mro ON mh.id_rincian_output = mro.id
    LEFT JOIN master_satuan ms ON dh.satuan = ms.id   -- join dengan master_satuan
    WHERE dh.id_spk = ?
", [$id_spk]);





// ============================
// TOTAL DARI SEMUA BARIS
// ============================
$total_honor = array_sum(array_column($list_honor, 'total'));
$terbilang_honor = trim(terbilang_uang($total_honor)) . " rupiah";
// fallback jika kosong
$total_honor = $total_honor ?: 0;


// ============================
// PERBAIKAN ENTITY ERROR PHPRad
// ============================
ob_start(function($buffer){
    $buffer = str_replace(['&nbsp;', '&Acirc;'], ' ', $buffer);
    $buffer = str_replace(["\xC2"], ' ', $buffer);
    return $buffer;
});
?>

<table border="1" cellspacing="0" cellpadding="4" width="100%">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Uraian Tugas</th>
            <th rowspan="2">Jangka Waktu</th>
            <th colspan="2">Target Pekerjaan</th>
            <th rowspan="2">Harga Satuan</th>
            <th rowspan="2">Nilai Perjanjian</th>
            <th rowspan="2">Beban Anggaran</th>
        </tr>
        <tr>
            <th>Volume</th>
            <th>Satuan</th>
        </tr>
        <tr class="row-number">
            <td>(1)</td>
            <td>(2)</td>
            <td>(3)</td>
            <td>(4)</td>
            <td>(5)</td>
            <td>(6)</td>
            <td>(7)</td>
            <td>(8)</td>
        </tr>
    </thead>

    <tbody>
            <?php //AMBIL DATA UNTUK TAMPIL DI TABEL ?>
            <?php 
            $no = 1; 
            foreach($list_honor as $row): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td style="text-align: left;"><?= $row['uraian_kegiatan'] ?? '' ?></td>
                <td><?= $row['jangka_waktu'] ?? '' ?></td>
                <td><?= $row['volume_spk'] ?? '' ?></td>
                <td><?= $row['satuan'] ?? '' ?></td>
                <td style="text-align: right;"><?= isset($row['harga_satuan']) ? number_format((float)$row['harga_satuan'], 0, ',', '.') : '' ?></td>
                <td style="text-align: right;"><?= isset($row['total']) ? number_format((float)$row['total'], 0, ',', '.') : '' ?></td>
                <td><?= $row['rincian_output'] ?? '' ?></td>
            </tr>
            <?php endforeach; ?>

            
            

        <!-- Jika ingin tetap ada baris kosong -->
        <?php for ($i=0; $i<3; $i++): ?>
            <tr>
                <td>&nbsp;</td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td>
            </tr>
        <?php endfor; ?>

    </tbody>

    <tfoot>
        <tr>
            <td colspan="6" style="text-align:right; font-family: 'Times New Roman', serif; font-style: italic;">Terbilang: <?= ucfirst(trim(terbilang_uang($total_honor))); ?> Rupiah</td>
            <td style="text-align: right;">
                Rp. <?= number_format($total_honor, 0, ',', '.'); ?>
            </td>
            
        </tr>
    </tfoot>
</table>

<?php ob_end_flush(); ?>


                            
                            
                            
                            
                            
                        </div>    
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
