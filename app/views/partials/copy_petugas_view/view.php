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
                    <h4 class="record-title">View Copy Petugas View</h4>
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
                        $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id_rincian_output">
                                        <th class="title"> Id Rincian Output: </th>
                                        <td class="value"> <?php echo $data['id_rincian_output']; ?></td>
                                    </tr>
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-id_petugas">
                                        <th class="title"> Id Petugas: </th>
                                        <td class="value"> <?php echo $data['id_petugas']; ?></td>
                                    </tr>
                                    <tr  class="td-status_bast">
                                        <th class="title"> Status Bast: </th>
                                        <td class="value"> <?php echo $data['status_bast']; ?></td>
                                    </tr>
                                    <tr  class="td-status_spk">
                                        <th class="title"> Status Spk: </th>
                                        <td class="value"> <?php echo $data['status_spk']; ?></td>
                                    </tr>
                                    <tr  class="td-volume_spk">
                                        <th class="title"> Volume Spk: </th>
                                        <td class="value"> <?php echo $data['volume_spk']; ?></td>
                                    </tr>
                                    <tr  class="td-volume_bast">
                                        <th class="title"> Volume Bast: </th>
                                        <td class="value"> <?php echo $data['volume_bast']; ?></td>
                                    </tr>
                                    <tr  class="td-harga_satuan">
                                        <th class="title"> Harga Satuan: </th>
                                        <td class="value"> <?php echo $data['harga_satuan']; ?></td>
                                    </tr>
                                    <tr  class="td-total">
                                        <th class="title"> Total: </th>
                                        <td class="value"> <?php echo $data['total']; ?></td>
                                    </tr>
                                    <tr  class="td-uraian_kegiatan">
                                        <th class="title"> Uraian Kegiatan: </th>
                                        <td class="value"> <?php echo $data['uraian_kegiatan']; ?></td>
                                    </tr>
                                    <tr  class="td-tahun">
                                        <th class="title"> Tahun: </th>
                                        <td class="value"> <?php echo $data['tahun']; ?></td>
                                    </tr>
                                    <tr  class="td-jangka_waktu">
                                        <th class="title"> Jangka Waktu: </th>
                                        <td class="value"> <?php echo $data['jangka_waktu']; ?></td>
                                    </tr>
                                    <tr  class="td-harga_satuan_honor">
                                        <th class="title"> Harga Satuan Honor: </th>
                                        <td class="value"> <?php echo $data['harga_satuan_honor']; ?></td>
                                    </tr>
                                    <tr  class="td-nik">
                                        <th class="title"> Nik: </th>
                                        <td class="value"> <?php echo $data['nik']; ?></td>
                                    </tr>
                                    <tr  class="td-nama_petugas">
                                        <th class="title"> Nama Petugas: </th>
                                        <td class="value"> <?php echo $data['nama_petugas']; ?></td>
                                    </tr>
                                    <tr  class="td-alamat">
                                        <th class="title"> Alamat: </th>
                                        <td class="value"> <?php echo $data['alamat']; ?></td>
                                    </tr>
                                    <tr  class="td-kecamatan">
                                        <th class="title"> Kecamatan: </th>
                                        <td class="value"> <?php echo $data['kecamatan']; ?></td>
                                    </tr>
                                    <tr  class="td-pekerjaan">
                                        <th class="title"> Pekerjaan: </th>
                                        <td class="value"> <?php echo $data['pekerjaan']; ?></td>
                                    </tr>
                                    <tr  class="td-email">
                                        <th class="title"> Email: </th>
                                        <td class="value"> <?php echo $data['email']; ?></td>
                                    </tr>
                                    <tr  class="td-sobat_id">
                                        <th class="title"> Sobat Id: </th>
                                        <td class="value"> <?php echo $data['sobat_id']; ?></td>
                                    </tr>
                                    <tr  class="td-status_petugas">
                                        <th class="title"> Status Petugas: </th>
                                        <td class="value"> <?php echo $data['status_petugas']; ?></td>
                                    </tr>
                                    <tr  class="td-id_jabatan">
                                        <th class="title"> Id Jabatan: </th>
                                        <td class="value"> <?php echo $data['id_jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-jabatan">
                                        <th class="title"> Jabatan: </th>
                                        <td class="value"> <?php echo $data['jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-keterangan_jabatan">
                                        <th class="title"> Keterangan Jabatan: </th>
                                        <td class="value"> <?php echo $data['keterangan_jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-id_satuan">
                                        <th class="title"> Id Satuan: </th>
                                        <td class="value"> <?php echo $data['id_satuan']; ?></td>
                                    </tr>
                                    <tr  class="td-satuan">
                                        <th class="title"> Satuan: </th>
                                        <td class="value"> <?php echo $data['satuan']; ?></td>
                                    </tr>
                                    <tr  class="td-rincian_output">
                                        <th class="title"> Rincian Output: </th>
                                        <td class="value"> <?php echo $data['rincian_output']; ?></td>
                                    </tr>
                                    <tr  class="td-status_rincian_output">
                                        <th class="title"> Status Rincian Output: </th>
                                        <td class="value"> <?php echo $data['status_rincian_output']; ?></td>
                                    </tr>
                                    <tr  class="td-nama_survei">
                                        <th class="title"> Nama Survei: </th>
                                        <td class="value"> <?php echo $data['nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-bulan">
                                        <th class="title"> Bulan: </th>
                                        <td class="value"> <?php echo $data['bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-kode_bulan">
                                        <th class="title"> Kode Bulan: </th>
                                        <td class="value"> <?php echo $data['kode_bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-bulan_tahun">
                                        <th class="title"> Bulan Tahun: </th>
                                        <td class="value"> <?php echo $data['bulan_tahun']; ?></td>
                                    </tr>
                                    <tr  class="td-id_nama_survei">
                                        <th class="title"> Id Nama Survei: </th>
                                        <td class="value"> <?php echo $data['id_nama_survei']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Ekspor
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
