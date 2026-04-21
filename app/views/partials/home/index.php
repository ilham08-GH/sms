<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class="">
                        <style>
                            * {
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                            }
                            body {
                            font-family: Arial, sans-serif;
                            background: #f4f6f9;
                            overflow: hidden;
                            }
                            /* ===== TIRAI ===== */
                            .curtain {
                            position: fixed;
                            top: 0;
                            width: 50%;
                            height: 100vh;
                            background: linear-gradient(135deg, #1e3c72, #2a5298);
                            z-index: 9999;
                            animation-duration: 1.5s;
                            animation-fill-mode: forwards;
                            animation-timing-function: ease-in-out;
                            }
                            .curtain.left {
                            left: 0;
                            animation-name: openLeft;
                            }
                            .curtain.right {
                            right: 0;
                            animation-name: openRight;
                            }
                            @keyframes openLeft {
                            from { transform: translateX(0); }
                            to   { transform: translateX(-100%); }
                            }
                            @keyframes openRight {
                            from { transform: translateX(0); }
                            to   { transform: translateX(100%); }
                            }
                            /* ===== KONTEN ===== */
                            .content {
                            height: 30vh;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            opacity: 0;
                            animation: fadeIn 1s ease forwards;
                            animation-delay: 1.3s;
                            }
                            @keyframes fadeIn {
                            to { opacity: 1; }
                            }
                            h1 {
                            color: #1e3c72;
                            font-size: 2.5rem;
                            }
                            p {
                            color: #555;
                            font-size: 1.2rem;
                            margin-top: 10px;
                            }
                            /* ===== LOGO BERDETAK ===== */
                            .car-wrapper {
                            position: relative;
                            width: 100%;
                            height: 160px;
                            margin-top: 10px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            }
                            .car {
                            position: relative;
                            width: 160px;
                            animation: heartbeat 1.8s ease-in-out infinite;
                            transform-origin: center;
                            }
                            /* Animasi detak */
                            @keyframes heartbeat {
                            0% {
                            transform: scale(1);
                            }
                            10% {
                            transform: scale(1.12);
                            }
                            20% {
                            transform: scale(1);
                            }
                            30% {
                            transform: scale(1.18);
                            }
                            40% {
                            transform: scale(1);
                            }
                            100% {
                            transform: scale(1);
                            }
                            }
                        </style>
                        <!-- TIRAI -->
                        <div class="curtain left"></div>
                        <div class="curtain right"></div>
                        <!-- KONTEN -->
                        <div class="content">
                            <h1>Selamat Datang</h1>
                            <p>Sistem Manajemen Honor BPS Kabupaten Gresik</p>
                            <!-- MOBIL -->
                            <div class="car-wrapper">
                                <img 
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg/1160px-Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg.png"
                                    alt="Mobil"
                                    class="car"
                                    >
                                </div>
                            </div>
                            <script>
                                setTimeout(function() {
                                document.body.style.overflowY = 'auto';
                                }, 1600); // sesuaikan dengan durasi animasi tirai (1.5s)
                            </script>
                            </div><div class=""><br></div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-6 comp-grid">
                            <?php $rec_count = $comp_model->getcount_jumlahpetugas();  ?>
                            <a class="animated zoomIn record-count card bg-primary card-white"  href="<?php print_link("master_petugas/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-meh-o "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Jumlah Petugas</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 comp-grid">
                            <?php $rec_count = $comp_model->getcount_jumlahpegawai();  ?>
                            <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("user/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-user "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Jumlah Pegawai</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-3 comp-grid">
                            <?php $rec_count = $comp_model->getcount_matrikhonor();  ?>
                            <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("matrik_honor/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-list "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Matrik Honor</div>
                                            <small class="">SP2D CLEAR</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 comp-grid">
                            <?php $rec_count = $comp_model->getcount_matrikhonor_2();  ?>
                            <a class="animated zoomIn record-count card bg-danger text-white"  href="<?php print_link("matrik_honor/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-list-alt "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Matrik Honor</div>
                                            <small class="">SP2D UNCLEAR</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 comp-grid">
                            <?php $rec_count = $comp_model->getcount_matriktranslok();  ?>
                            <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("matrik_translok/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-pinterest-p "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Matrik Translok </div>
                                            <small class="">SP2D CLEAR</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 comp-grid">
                            <?php $rec_count = $comp_model->getcount_matriktranslok_2();  ?>
                            <a class="animated zoomIn record-count card bg-danger text-white"  href="<?php print_link("matrik_translok/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-pinterest "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Matrik Translok </div>
                                            <small class="">SP2D UNCLEAR</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 comp-grid">
                            <div class=""><?php
                                $bulan = date('n');
                                $tahun = date('Y');
                                $nama_bulan = [
                                1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
                                4 => 'April', 5 => 'Mei', 6 => 'Juni',
                                7 => 'Juli', 8 => 'Agustus', 9 => 'September',
                                10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                                ];
                                echo "Bulan {$nama_bulan[$bulan]} Tahun {$tahun}";
                            ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-6 comp-grid">
                            <?php $rec_count = $comp_model->getcount_jumlahpengajuanhonor();  ?>
                            <a class="animated zoomIn record-count card bg-secondary text-white"  href="<?php print_link("matrik_honor/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-list-alt "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Jumlah Pengajuan Honor</div>
                                            <small class="">Pengajuan Honor bulan ini</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 comp-grid">
                            <?php $rec_count = $comp_model->getcount_jumlahpengajuantranslok();  ?>
                            <a class="animated zoomIn record-count card bg-warning text-white"  href="<?php print_link("matrik_translok/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-pinterest-p "></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Jumlah Pengajuan Translok</div>
                                            <small class="">Pengajuan Translok bulan ini</small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
