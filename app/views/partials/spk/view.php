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
                    <h4 class="record-title">Print SPK</h4>
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

// Terbilang tanggal SPK
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

$id_spk = safe($data['id']);

$total_honor = $db->rawQueryValue("
    SELECT SUM(total)
    FROM detail_matrik_honor
    WHERE id_spk = ?
", [$id_spk]);


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
    WHERE dmh.id_spk = ?
", [$id_spk]);

// Jika hanya mau ambil satu jabatan (pertama)
$keterangan_jabatan = $detail_jabatan[0]['keterangan_jabatan'] ?? '';
$keterangan_jabatan_upper = strtoupper($keterangan_jabatan);

// Format rupiah
function rupiah($angka){
    return number_format($angka, 0, ',', '.');
}

// Terbilang honor
$terbilang_honor = trim(terbilang_uang($total_honor)) . " rupiah";

// Terbilang tanggal
$terbilang = hitung_terbilang_tanggal(safe($data['tgl_spk']));

// Terbilang tanggal selesai SPK
$terbilangtglselesai = hitung_terbilang_tanggal(safe($data['tgl_selesai_spk']));


//CEK APAKAH HONOR PELATIHAN TIDAK 0
$honor_pelatihan = (int)$data['honor_pelatihan'];

//AMBIL DATA AGAR KODE KECAMATAN DALA []TIDAK IKUT
$kecamatan = $data['master_petugas_kecamatan'];
$hasil_kecamatan = trim(preg_replace('/\[[^\]]*\]/', '', $kecamatan));


?>





                        
                        
                        <div class="card">

                            <style>
                            @page {
                                size: A4;
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
                                font-weight: bold;
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
                                PERJANJIAN KERJA <br>
                                PETUGAS <?= $keterangan_jabatan_upper; ?>
 <br>
                                PADA BADAN PUSAT STATISTIK KABUPATEN GRESIK <br>
                                NOMOR : <?= safe($data['nomor_spk']); ?>
                            </div>
                            
                            <br>
                            
                            <p class="desc-col">
                                Pada hari ini <?= $terbilang['hari']; ?>, tanggal 
                                <?= $terbilang['tanggal_terbilang']; ?>, bulan 
                                <?= $terbilang['bulan_terbilang']; ?>, tahun 
                                <?= $terbilang['tahun_terbilang']; ?> 
                                [<?= date('d-m-Y', strtotime(safe($data['tgl_spk']))); ?>] bertempat di Kabupaten Gresik, yang bertanda tangan di bawah ini:
                            </p>
                            
                            <table class="table-pihak">
                                <tr>
                                    <td class="number-col">1.</td>
                                    <td class="name-col">
                                        <b><?= safe($data['master_ppk_nama_ppk']); ?></b><br>
                                        NIP. <?= safe($data['master_ppk_nip_ppk']); ?>
                                    </td>
                                    <td class="colon-col">:</td>
                                    <td class="desc-col">
                                        Pejabat Pembuat Komitmen Badan Pusat Statistik Kabupaten Gresik, 
                                        berkedudukan di Jl. Dr. Wahidin Sudirohusodo No. 364 Gresik, 
                                        bertindak untuk dan atas nama Badan Pusat Statistik Kabupaten Gresik, 
                                        selanjutnya disebut sebagai <b>PIHAK PERTAMA</b>.
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td class="number-col">2.</td>
                                    <td class="name-col">
                                        <b><?= safe($data['master_petugas_nama_petugas']); ?></b><br>
                                        NIK : <?= safe($data['master_petugas_nik']); ?><br>
                                        SOBAT ID : <?= safe($data['master_petugas_sobat_id']); ?>
                                    </td>
                                    <td class="colon-col">:</td>
                                    <td class="desc-col">
                                        Petugas <?= $keterangan_jabatan; ?>, berkedudukan di 
                                        <?= safe($data['master_petugas_alamat']); ?>, kecamatan <?= safe($hasil_kecamatan); ?>,
                                        bertindak untuk dan atas nama diri sendiri, 
                                        selanjutnya disebut sebagai <b>PIHAK KEDUA</b>.
                                    </td>
                                </tr>
                            </table>
                            
                            <p class="desc-col">
                                Bahwa <b>PIHAK PERTAMA </b>dan <b>PIHAK KEDUA </b>yang secara bersama-sama disebut <b>PARA PIHAK</b>, 
                                sepakat untuk mengikatkan diri dalam Perjanjian Kerja Petugas <?= $keterangan_jabatan; ?> 
                                pada Badan Pusat Statistik Kabupaten Gresik Nomor : <?= safe($data['nomor_spk']); ?>, 
                                yang selanjutnya disebut <b>Perjanjian</b>, dengan ketentuan-ketentuan sebagai berikut :
                            </p>
                            
                            <!-- Pasal 1 sampai Pasal 13 -->
                            <div class="pasal">
                                <center><b>Pasal 1</b></center>
                                <b>PIHAK PERTAMA</b> memberikan pekerjaan kepada <b>PIHAK KEDUA</b> dan <b>PIHAK KEDUA</b> menerima pekerjaan dari <b>PIHAK PERTAMA</b> sebagai Petugas <?= $keterangan_jabatan; ?> pada Badan Pusat Statistik Kabupaten Gresik, dengan lingkup pekerjaan yang ditetapkan oleh <b>PIHAK PERTAMA</b>.
                            </div>
                            
                            <div class="pasal">
                                <center><b>Pasal 2</b></center>
                                Ruang lingkup pekerjaan dalam Perjanjian ini mengacu pada wilayah kerja dan beban kerja sebagaimana tertuang dalam lampiran Perjanjian, Pedoman <?= $keterangan_jabatan; ?>, dan ketentuan-ketentuan lainnya yang ditetapkan oleh <b>PIHAK PERTAMA</b>.
                            </div>
                            
                            <br>
                            <div class="pasal">
                                <center><b>Pasal 3</b></center>
                                Jangka waktu Perjanjian ini terhitung sejak tanggal <?= $terbilang['tanggal_terbilang']; ?>, bulan 
                                <?= $terbilang['bulan_terbilang']; ?>, tahun 
                                <?= $terbilang['tahun_terbilang']; ?> sampai dengan tanggal <?= $terbilangtglselesai['tanggal_terbilang']; ?>, bulan 
                                <?= $terbilangtglselesai['bulan_terbilang']; ?>, tahun 
                                <?= $terbilangtglselesai['tahun_terbilang']; ?>.
                            </div>
                            <br>
                            <div class="pasal-numbered">
                                <center><b>Pasal 4</b></center>
                                
                                <p>
                                (1) <b>PIHAK KEDUA</b> berkewajiban mengikuti Pelatihan/Briefing Petugas Pelaksanaan (<?= $keterangan_jabatan; ?>) sesuai ketentuan yang telah ditetapkan oleh <b>PIHAK PERTAMA</b>.</p>
                                <p>
                                (2) <b>PIHAK KEDUA</b> berkewajiban menyelesaikan pekerjaan yang diberikan oleh <b>PIHAK PERTAMA</b> sesuai ruang lingkup pekerjaan sebagaimana dimaksud dalam Pasal 2, dengan menerapkan protokol kesehatan pencegahan Covid-19 yang berlaku di wilayah kerja masing-masing merujuk pada ketentuan pemerintah.</p>
                                <p>
                                (3) <b>PIHAK KEDUA</b> untuk waktu yang tidak terbatas dan/atau tidak terikat kepada masa berlakunya Perjanjian ini, menjamin untuk memberlakukan sebagai rahasia setiap data/informasi yang diterima atau diperolehnya dari <b>PIHAK PERTAMA</b>, serta menjamin bahwa keterangan demikian hanya dipergunakan untuk melaksanakan tujuan menurut Perjanjian ini.
                                </p>
                            </div>
                            
                            <!-- Pasal 5 sampai 13 bisa ditambahkan sama seperti Pasal 4, untuk menjaga format yang sama -->
                            <div class="pasal-numbered">
                                <center><b>Pasal 5</b></center>
                                <p>
                                (1) <b>PIHAK KEDUA</b> apabila melakukan peminjaman dokumen/data/aset milik <b>PIHAK PERTAMA</b>, wajib menjaga dan menggunakan sesuai dengan tujuan perjanjian dan mengembalikan dalam keadaan utuh sama dengan saat peminjaman, serta dilarang menggandakan, menyalin, menunjukkan, dan/atau mendokumentasikan dalam bentuk foto atau bentuk apapun untuk kepentingan pribadi ataupun kepentingan lain yang tidak berkaitan dengan tujuan perjanjian ini.</p>
                                <p>
                                (2) <b>PIHAK KEDUA</b> dilarang memberikan dokumen/data/aset milik <b>PIHAK PERTAMA</b> yang berada dalam penguasaan <b>PIHAK KEDUA</b>, baik secara langsung maupun tidak langsung, termasuk memberikan akses kepada pihak lain untuk menggunakan, menyalin, memfotokopi, menunjukkan, dan/atau mendokumentasikan dalam bentuk foto atau bentuk apapun, sehingga informasi diketahui oleh pihak lain untuk tujuan apapun.</p>
                            </div>
                            
                            <div class="pasal-numbered">
                                <center><b>Pasal 6</b></center>
                                <p>
                                (1)	<b>PIHAK KEDUA</b> berhak untuk mendapatkan honorarium dari <b>PIHAK PERTAMA</b> sebesar Rp. <?= rupiah($total_honor_fix); ?>,- (<?= ucfirst(angka_ke_teks($total_honor_fix)); ?> rupiah) atau sesuai dengan beban pekerjaan yang diselesaikan sesuai dengan yang tercantum dalam BAST untuk pekerjaan sebagaimana dimaksud dalam Pasal 2, termasuk biaya pajak, dan jasa pelayanan keuangan.</p>
                                <p>
                                (2)	Honorarium sebagaimana dimaksud pada ayat (1) dibayarkan oleh <b>PIHAK PERTAMA</b> kepada <b>PIHAK KEDUA</b> setelah menyelesaikan seluruh pekerjaan yang ditargetkan sebagaimana tercantum dalam Lampiran Perjanjian, dituangkan dalam Berita Acara Serah Terima Hasil Pekerjaan. </p>                

                            </div>
                            
                            <div class="pasal-numbered">
                                <center><b>Pasal 7</b></center>
                                <p>
                                (1)	Pembayaran honorarium sebagaimana dimaksud dalam Pasal 6, dilakukan setelah <b>PIHAK KEDUA</b> menyelesaikan dan menyerahkan hasil pekerjaan sebagaimana dimaksud dalam Pasal 2 kepada <b>PIHAK PERTAMA</b>.</p>
                                <p>
                                (2)	Pembayaran sebagaimana dimaksud pada ayat (1) dilakukan oleh <b>PIHAK PERTAMA</b> kepada <b>PIHAK KEDUA</b> sesuai dengan ketentuan peraturan perundang-undangan.</p>
                                                 

                            </div>
                            
                            <div class="pasal-numbered">
                                <center><b>Pasal 8</b></center>
                                <p>
                                (1)	<b>PIHAK PERTAMA</b> secara berjenjang melakukan pemeriksaan dan evaluasi atas target penyelesaian dan kualitas hasil pekerjaan yang dilaksanakan oleh <b>PIHAK KEDUA</b>.</p>
                                <p>
                                (2)	Hasil pemeriksaan dan evaluasi sebagaimana dimaksud pada ayat (1) menjadi dasar pembayaran honorarium <b>PIHAK KEDUA</b> oleh <b>PIHAK PERTAMA</b> sebagaimana dimaksud dalam Pasal 6 ayat (2), yang dituangkan dalam Berita Acara Serah Terima Hasil Pekerjaan yang ditandatangani oleh <b>PARA PIHAK</b>.</p>

                                                 

                            </div>
                            
                            <div class="pasal">
                                <center><b>Pasal 9</b></center>
                                <b>PIHAK PERTAMA</b> dapat memutuskan Perjanjian ini secara sepihak sewaktu-waktu dalam hal <b>PIHAK KEDUA</b> tidak dapat melaksanakan kewajibannya sebagaimana dimaksud dalam Pasal 4, termasuk terindikasi terinfeksi virus Covid-19, dengan menerbitkan Surat Pemutusan Perjanjian Kerja.

                                                 
                            <br>
                            </div>
                            
                             <br>
                                <center><b>Pasal 10</b></center>
                                
                                <div class="pasal-numbered">
                                  <p>  
                                (1)	Apabila <b>PIHAK KEDUA</b> mengundurkan diri dengan tidak menyelesaikan pekerjaan sebagaimana dimaksud dalam  Pasal 2, maka akan diberikan sanksi oleh <b>PIHAK PERTAMA</b>, sebagai berikut:</p>
                                <ul>
                                    
                                    a.	mengundurkan diri setelah pelatihan diberikan sanksi sebesar Rp.  <?php
                                        if ($honor_pelatihan > 0) {
                                            echo rupiah($honor_pelatihan) . ',- (' . ucfirst(angka_ke_teks($honor_pelatihan)) . ' rupiah)';
                                        } else {
                                            echo rupiah($total_honor_fix) . ',- (' . ucfirst(angka_ke_teks($total_honor_fix)) . ' rupiah)';
                                        }
                                        ?>
                                    biaya yang dikeluarkan untuk pelatihan/briefing petugas yang telah diterima;
                                    
                                </ul>
                                <ul>
                                
                                    b.	mengundurkan diri pada saat pelaksanaan pekerjaan, diberikan sanksi tidak diberikan honorarium atas pekerjaan yang telah dilaksanakan.
                                
                                </ul>
                                <p> 
                                (2)	Dikecualikan tidak dikenakan sanksi sebagaimana dimaksud pada ayat (1) oleh <b>PIHAK PERTAMA</b>, apabila <b>PIHAK KEDUA</b> meninggal dunia, mengundurkan diri karena sakit dengan keterangan rawat inap, terindikasi terinfeksi virus Covid-19 dengan keterangan pihak yang berwenang, kecelakaan dengan keterangan kepolisian, dan/atau telah diberikan Surat Pemutusan Perjanjian Kerja dari <b>PIHAK PERTAMA</b>.
                                </p>
                                <p>
                                (3)	Dalam hal terjadi peristiwa sebagaimana dimaksud pada ayat (2), <b>PIHAK PERTAMA</b> membayarkan honorarium kepada <b>PIHAK KEDUA</b> secara proporsional sesuai pekerjaan yang telah dilaksanakan.</p>
                                    

                                                 

                            </div>
                            
                            <div class="pasal-numbered">
                                <center><b>Pasal 11</b></center>
                                <p>
                                (1)	Apabila terjadi Keadaan Kahar, yang meliputi bencana alam, bencana nonalam, dan bencana sosial, <b>PIHAK KEDUA</b> memberitahukan kepada <b>PIHAK PERTAMA</b> dalam waktu paling lambat 14 (empat belas) hari sejak mengetahui atas kejadian Keadaan Kahar dengan menyertakan bukti.</p>
                                <p>
                                (2)	Apabila terjadi kerusakan perangkat pengolahan yang menyebabkan pelaksanaan <?= $keterangan_jabatan; ?> tidak dapat dilakukan, <b>PIHAK KEDUA</b> melalui pengawas memberitahukan kepada <b>PIHAK PERTAMA</b> dalam waktu paling lambat 7 (tujuh) hari sejak terjadi kerusakan dimaksud.</p>
                                <p>
                                (3)	Dalam hal terjadi peristiwa sebagaimana dimaksud pada ayat (1) dan/atau ayat (2), pelaksanaan pekerjaan oleh <b>PIHAK KEDUA</b> dihentikan sementara dan dilanjutkan kembali setelah Keadaan Kahar berakhir, merujuk pada ketentuan yang ditetapkan oleh <b>PIHAK PERTAMA</b>. </p>
                                <p>
                                (4)	Apabila akibat Keadaan Kahar tidak memungkinkan dilanjutkan/diselesaikannya pelaksanaan pekerjaan, <b>PIHAK KEDUA</b> berhak menerima honorarium secara proporsional sesuai pekerjaan yang telah diselesaikan dan diterima oleh <b>PIHAK PERTAMA</b>.</p>


                                                 

                            </div>
                            
                            
                            <div class="pasal">
                                <center><b>Pasal 12</b></center>
                                Hal-hal yang belum diatur dalam Perjanjian ini atau segala perubahan terhadap Perjanjian ini diatur lebih lanjut oleh <b>PARA PIHAK</b> dalam perjanjian tambahan/adendum dan merupakan bagian tidak terpisahkan dari Perjanjian ini.

                                                 
                            <br>
                            </div>
                            <br>
                            <div class="pasal-numbered">
                                <center><b>Pasal 13</b></center>
                                <p>
                                (1)	Segala perselisihan atau perbedaan pendapat yang mungkin timbul sebagai akibat dari Perjanjian ini, diselesaikan secara musyawarah untuk mufakat oleh <b>PARA PIHAK</b>.</p>
                                <p>
                                (2)	Apabila musyawarah untuk mufakat sebagaimana dimaksud pada ayat (1) tidak berhasil, maka <b>PARA PIHAK</b> sepakat untuk menyelesaikan perselisihan dengan memilih kedudukan/domisili hukum di Kepaniteraan Pengadilan Negeri Kabupaten Gresik. </p>
                                <p>
                                (3)	Selama perselisihan dalam proses penyelesaian pengadilan, <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> wajib tetap melaksanakan kewajiban masing-masing berdasarkan Perjanjian ini.</p>
                                
                                </div>
                            
                            <!-- Pasal 6 sampai 13 silakan copy struktur sama dengan <div class="pasal"> ... </div> -->
                            
                            <div class="pasal">
                                Demikian Perjanjian ini dibuat dan ditandatangani oleh <b>PARA PIHAK</b> sebanyak 2 rangkap bermaterai cukup, tanpa paksaan dari <b>PIHAK</b> manapun dan untuk dilaksanakan oleh <b>PARA PIHAK</b>.
                            </div>
                                <!-- Kolom TANDA TANGAN (Tabel agar rapi di PDF) -->
                                <table style="width:100%; margin-top:50px; border-collapse: collapse; table-layout: fixed;">
                                    <tr>
                                        <td style="width:50%; text-align:center; vertical-align:bottom; border: none; padding: 10px; position: relative;">
                                            <div style="font-weight: bold; margin-bottom: 15px;">PIHAK KEDUA,</div>
                                            
                                            <div style="min-height: 80px; position: relative;">
                                                
                                                <div style="position: absolute; left: 10px; top: 10px; border: 1px solid #000; padding: 5px; font-size: 7pt; width: 60px; text-align: center; line-height: 1.2;">
                                                    Materai<br>10.000
                                                </div>

                                                <?php 
                                                $status_e_ttd = isset($data['status_mitra']) ? strtolower(trim($data['status_mitra'])) : '';
                                                if($status_e_ttd == 'disetujui') { ?>
                                                    <div style="font-family: 'Arial', sans-serif; font-weight: bold; font-size: 22pt; margin-bottom: 0;">ttd</div>
                                                    <div style="font-size: 8pt; font-family: Arial, sans-serif;">(Disetujui secara elektronik)</div>
                                                <?php } else { ?>
                                                    <div style="height: 50px;"></div>
                                                <?php } ?>
                                            </div>

                                            <br>
                                            <span style="font-weight: bold; font-family:'Bookman Old Style'; display: inline-block; min-width: 180px; padding-bottom: 2px;">
                                                <?= strtoupper(safe($data['master_petugas_nama_petugas'])); ?>
                                            </span>
                                        </td>

                                        <td style="width:50%; text-align:center; vertical-align:bottom; border: none; padding: 10px;">
                                            <div style="font-weight: bold; margin-bottom: 15px;">PIHAK PERTAMA,</div>
                                            
                                            <div style="min-height: 80px;">
                                                <?php 
                                                // Asumsi menggunakan status_pegawai untuk Pihak Pertama
                                                $status_p1 = isset($data['status_pegawai']) ? strtolower(trim($data['status_pegawai'])) : '';
                                                if($status_p1 == 'disetujui') { ?>
                                                    <div style="font-family: 'Arial', sans-serif; font-weight: bold; font-size: 22pt; margin-bottom: 0;">ttd</div>
                                                    <div style="font-size: 8pt; font-family: Arial, sans-serif;">(Disetujui secara elektronik)</div>
                                                <?php } elseif($status_p1 == 'ditolak') { ?>
                                                    <div style="font-family: 'Arial', sans-serif; font-weight: bold; font-size: 18pt; color: #d9534f; margin-bottom: 0;">Ditolak</div>
                                                    <div style="font-size: 8pt; font-family: Arial, sans-serif; color: #d9534f;">(Ditolak oleh Admin/TU)</div>
                                                <?php } else { ?>
                                                    <div style="height: 50px;"></div>
                                                <?php } ?>
                                            </div>

                                            <br>
                                            <span style="font-weight: bold; font-family:'Bookman Old Style'; display: inline-block; min-width: 180px; padding-bottom: 2px;">
                                                <?= safe($data['master_ppk_nama_ppk']); ?>
                                            </span>
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
