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
                    <h4 class="record-title">View  Bast</h4>
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
                        
// ---------------------------------------------------------------------------------
// BAGIAN ATAS (FUNGSI + LOAD DATA)
// ---------------------------------------------------------------------------------

// Untuk mencegah error
function safe($v){
    return isset($v) ? $v : '';
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

// Terbilang tanggal BAST
function tahun_terbilang($tahun) {
    $ribu = floor($tahun / 1000);
    $sisa = $tahun % 1000;
    return trim(angka_ke_teks($ribu) . " ribu " . angka_ke_teks($sisa));
}

function hitung_terbilang_tanggal($tanggal){
    if(!$tanggal) return [];

    $bulan_nama = [
        '01'=>'Januari', '02'=>'Februari', '03'=>'Maret', '04'=>'April', '05'=>'Mei', '06'=>'Juni',
        '07'=>'Juli', '08'=>'Agustus', '09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember'
    ];

    $pecah = explode('-', $tanggal);
    $tahun = $pecah[0];
    $bulan = $pecah[1];
    $tanggal_angka = intval($pecah[2]);

    $hariIndo = [
        'Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu'
    ];

    return [
        'hari' => $hariIndo[date('l', strtotime($tanggal))],
        'tanggal_terbilang' => angka_ke_teks($tanggal_angka),
        'bulan_terbilang' => $bulan_nama[$bulan],
        'tahun_terbilang' => tahun_terbilang(intval($tahun)),
    ];
}

// Data dari View
$data = isset($data) ? $data : $this->view_data;

// ---------------------------------------------------------------------------------
// AMBIL TOTAL HONOR
// ---------------------------------------------------------------------------------

$comp_model = new SharedController;
$db = $comp_model->GetModel();

$id_bast = safe($data['id']);

$total_honor = $db->rawQueryValue("
    SELECT SUM(total)
    FROM detail_matrik_honor
    WHERE id_bast = ?
", [$id_bast]);


$total_honor = $total_honor ?: 0;
$total_honor_fix = is_array($total_honor) ? array_sum($total_honor) : $total_honor;

// Ambil Keteranganb Jabatan untuk KOP dan keterangan petugas lainnya
// Ambil detail + keterangan jabatan
$detail_jabatan = $db->rawQuery("
    SELECT 
        dmh.*, 
        mjp.keterangan_jabatan
    FROM detail_matrik_honor AS dmh
    LEFT JOIN master_jabatan_petugas AS mjp ON dmh.jabatan = mjp.id
    WHERE dmh.id_bast = ?
", [$id_bast]);

// Jika hanya mau ambil satu jabatan (pertama)
$keterangan_jabatan = $detail_jabatan[0]['keterangan_jabatan'] ?? '';
$keterangan_jabatan_upper = strtoupper($keterangan_jabatan);

// Ambil detail + Rincian Output
$detail_rincian_output = $db->rawQuery("
    SELECT 
        dmh.*, 
        mro.rincian_output
    FROM detail_matrik_honor AS dmh
    LEFT JOIN master_rincian_output AS mro ON dmh.rincian_output_detail = mro.id
    WHERE dmh.id_bast = ?
", [$id_bast]);

$rincian_output = $detail_rincian_output[0]['rincian_output'] ?? '';
//$rincian_output_upper = strtoupper($rincian_output);
$rincian_output_upper = strtoupper(preg_replace('/\s*\(.*?\)/', '', $rincian_output));
$rincian_output_tanpakurung = preg_replace('/\s*\(.*?\)/', '', $rincian_output);

//AMBIl SEMUA BARIS HONOR
$list_honor = $db->rawQuery("
    SELECT 
        dh.volume_bast,
        ms.satuan AS satuan,   
        dh.harga_satuan,
        dh.total,
        mh.uraian_kegiatan,
        mh.jangka_waktu,
        mro.rincian_output
    FROM detail_matrik_honor dh
    LEFT JOIN matrik_honor mh ON dh.id_matrik_honor = mh.id
    LEFT JOIN master_rincian_output mro ON mh.id_rincian_output = mro.id
    LEFT JOIN master_satuan ms ON dh.satuan = ms.id   
    WHERE dh.id_bast = ?
", [$id_bast]);



// Format rupiah
function rupiah($angka){
    return number_format($angka, 0, ',', '.');
}

// Terbilang honor
$terbilang_honor = trim(terbilang_uang($total_honor)) . " rupiah";

// Terbilang tanggal
$terbilang = hitung_terbilang_tanggal(safe($data['tgl_bast']));
?>

                        <div class="card">
                            
                            <?php
// Your full merged BAST template file
// NOTE: Replace this header and paste actual PHP logic + variables as needed
?>

    <style>
    
                            @page {
                                size: A4 portrait;
                                margin-top: 8mm;
                                margin-bottom: 8mm;
                                margin-left: 8mm;
                                margin-right: 8mm;
                            }
        body {
            font-family: "Bookman Old Style", Georgia, serif;
            font-size: 11pt;
            margin: 0;
            padding: 20px;
        }
        .header-title {
            text-align: center;
            font-weight: bold;
            line-height: 1.6;
            font-size: 12pt;
        }
        .table-pihak {
            width: 100%;
            border-collapse: collapse;
        }
        .table-pihak td {
            padding: 3px 0;
            vertical-align: top;
        }
        .number-col { width: 20px; }
        .name-col { width: 120px; }
        .colon-col { width: 10px; }
        .desc-col { width: auto; }
    </style>


<div class="header-title">
    BERITA ACARA SERAH TERIMA HASIL PEKERJAAN <br>
    <?=$keterangan_jabatan_upper ?> KEGIATAN  <?= htmlspecialchars($rincian_output_upper) ?>
 <br>
    PADA BADAN PUSAT STATISTIK <br>
    KABUPATEN GRESIK <br><br>
    NOMOR : <?= safe($data['nomor_bast']); ?>
</div>

<br>

<p style="text-align: justify; margin-top: 10px;">
    Pada hari ini <?= safe($terbilang['hari']); ?>, tanggal <?= safe($terbilang['tanggal_terbilang']); ?>, 
    bulan <?= safe($terbilang['bulan_terbilang']); ?>, tahun <?= safe($terbilang['tahun_terbilang']); ?>, 
    kami yang bertanda tangan di bawah ini :
</p>

<br>

<table class="table-pihak">
    <tr>
        <td class="number-col">1.</td>
        <td class="name-col">Nama</td>
        <td class="colon-col">:</td>
        <td class="desc-col"><?= safe($data['master_ppk_nama_ppk']); ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Jabatan</td>
        <td>:</td>
        <td>Pejabat Pembuat Komitmen Badan Pusat Statistik Kabupaten Gresik</td>
    </tr>
    <tr>
        <td></td>
        <td>Alamat</td>
        <td>:</td>
        <td>Jl. Dr. Wahidin Sudirohusodo, No. 364 Gresik</td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">dalam hal ini bertindak untuk dan atas nama Badan Pusat Statistik Kabupaten Gresik selanjutnya disebut <b>PIHAK PERTAMA</b>.</td>
    </tr>

    <tr><td colspan="4"><br></td></tr>

    <tr>
        <td class="number-col">2.</td>
        <td class="name-col">Nama</td>
        <td class="colon-col">:</td>
        <td class="desc-col"><?= safe($data['master_petugas_nama_petugas']); ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?= safe($data['master_petugas_pekerjaan']); ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Alamat</td>
        <td>:</td>
        <td><?= safe($data['master_petugas_alamat']); ?></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">dalam hal ini bertindak untuk dan atas nama diri sendiri, selanjutnya disebut <b>PIHAK KEDUA</b>.</td>
    </tr>
</table>


<p style="text-align: justify;">
    Dengan ini menyatakan sebagai berikut:
</p>

<p style="text-align: justify; padding-left: 1.5em; text-indent: -1.5em;">
    1) <b>PIHAK KEDUA</b> menyerahkan kepada <b>PIHAK PERTAMA</b> dan <b>PIHAK PERTAMA</b> menerima penyerahan dari <b>PIHAK KEDUA </b>
    Hasil <?=$keterangan_jabatan ?> <?= htmlspecialchars($rincian_output_tanpakurung) ?>, 
    dengan rincian sebagai berikut :
</p>

<table style="margin-left: 2em; width:100%; border-collapse:collapse;">

    <?php 
    $no = 1; 
    foreach ($list_honor as $row): ?>
        <tr>
            <td><?= $no++; ?>.</td>
            <td><?= $row['volume_bast'] ?? '' ?></td>
            <td><?= $row['satuan'] ?? '' ?></td>
            <td>
                Melakukan <?= $row['uraian_kegiatan'] ?? '' ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



<p style="text-align: justify; padding-left: 1.5em; text-indent: -1.5em;">
    2) Berita Acara Serah Terima ini menjadi dasar dilakukannya pembayaran oleh <b>PIHAK PERTAMA</b> kepada Petugas <?=$keterangan_jabatan ?>.
</p>

<br>

<p style="text-align: justify;">
    Demikian Berita Acara Serah Terima Hasil Pekerjaan ini dibuat sebagai bukti yang sah untuk dipergunakan sebagaimana mestinya.
</p>

<br><br><br>

<table width="100%">
    <tr>
        <td style="text-align:center; width:50%;">
            <b>PIHAK KEDUA,</b><br><br><br><br><br>
            <b><?= safe($data['master_petugas_nama_petugas']); ?></b>
        </td>
        <td style="text-align:center; width:50%;">
            <b>PIHAK PERTAMA,</b><br><br><br><br><br>
            <b><?= safe($data['master_ppk_nama_ppk']); ?></b>
        </td>
    </tr>
</table>

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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("bast/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("bast/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> Tidak ada data
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
