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
                    <h4 class="record-title">View  Matrik Honor</h4>
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
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("detail_matrik_honor/list/id_matrik_honor/" . urlencode($data['id'])) ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['id'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_tim">
                                        <th class="title"> Id Tim: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/matrik_honor_id_tim_option_list'); ?>' 
                                                data-value="<?php echo $data['id_tim']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_tim" 
                                                data-title="Enter Tim" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_tim']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_nama_survei">
                                        <th class="title"> Id Nama Survei: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/matrik_honor_id_nama_survei_option_list'); ?>' 
                                                data-value="<?php echo $data['id_nama_survei']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_nama_survei" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_nama_survei']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-uraian_kegiatan">
                                        <th class="title"> Uraian Kegiatan: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['uraian_kegiatan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="uraian_kegiatan" 
                                                data-title="Uraian Kegiatan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['uraian_kegiatan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_bulan_pelaksanaan">
                                        <th class="title"> Id Bulan Pelaksanaan: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/matrik_honor_id_bulan_pelaksanaan_option_list'); ?>' 
                                                data-value="<?php echo $data['id_bulan_pelaksanaan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_bulan_pelaksanaan" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_bulan_pelaksanaan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tahun">
                                        <th class="title"> Tahun: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['tahun']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tahun" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tahun']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-jangka_waktu">
                                        <th class="title"> Jangka Waktu: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['jangka_waktu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="jangka_waktu" 
                                                data-title="Masukkan Jangka Waktu" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['jangka_waktu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-cek_double">
                                        <th class="title"> Cek Double: </th>
                                        <td class="value"> <?php echo $data['cek_double']; ?></td>
                                    </tr>
                                    <tr  class="td-no_surat_spk">
                                        <th class="title"> No Surat Spk: </th>
                                        <td class="value"> <?php echo $data['no_surat_spk']; ?></td>
                                    </tr>
                                    <tr  class="td-no_surat_bast">
                                        <th class="title"> No Surat Bast: </th>
                                        <td class="value"> <?php echo $data['no_surat_bast']; ?></td>
                                    </tr>
                                    <tr  class="td-create_by">
                                        <th class="title"> Create By: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['create_by']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="create_by" 
                                                data-title="Enter Create By" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['create_by']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-create_at">
                                        <th class="title"> Create At: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['create_at']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="create_at" 
                                                data-title="Enter Create At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['create_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-master_rincian_output_id">
                                        <th class="title"> Master Rincian Output Id: </th>
                                        <td class="value"> <?php echo $data['master_rincian_output_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_rincian_output_rincian_output">
                                        <th class="title"> Master Rincian Output Rincian Output: </th>
                                        <td class="value"> <?php echo $data['master_rincian_output_rincian_output']; ?></td>
                                    </tr>
                                    <tr  class="td-master_rincian_output_status_rincian_output">
                                        <th class="title"> Master Rincian Output Status Rincian Output: </th>
                                        <td class="value"> <?php echo $data['master_rincian_output_status_rincian_output']; ?></td>
                                    </tr>
                                    <tr  class="td-master_survei_id">
                                        <th class="title"> Master Survei Id: </th>
                                        <td class="value"> <?php echo $data['master_survei_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_survei_nama_survei">
                                        <th class="title"> Master Survei Nama Survei: </th>
                                        <td class="value"> <?php echo $data['master_survei_nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-master_bulan_id">
                                        <th class="title"> Master Bulan Id: </th>
                                        <td class="value"> <?php echo $data['master_bulan_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_bulan_bulan">
                                        <th class="title"> Master Bulan Bulan: </th>
                                        <td class="value"> <?php echo $data['master_bulan_bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_bulan_kode_bulan">
                                        <th class="title"> Master Bulan Kode Bulan: </th>
                                        <td class="value"> <?php echo $data['master_bulan_kode_bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-harga_satuan_honor">
                                        <th class="title"> Harga Satuan Honor: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['harga_satuan_honor']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="harga_satuan_honor" 
                                                data-title="Masukkan Harga Satuan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['harga_satuan_honor']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("matrik_honor/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("matrik_honor/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Yakin Hapus Data, Hapus Data Matrik Honor berakibat Detail Honor ikut terhapus ?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
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
