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
                    <h4 class="record-title">View  Detail Matrik Honor</h4>
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
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-id_matrik_honor">
                                        <th class="title"> Id Matrik Honor: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['id_matrik_honor']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_matrik_honor" 
                                                data-title="Enter Id Matrik Honor" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_matrik_honor']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_petugas">
                                        <th class="title"> Id Petugas: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/detail_matrik_honor_id_petugas_option_list'); ?>' 
                                                data-value="<?php echo $data['id_petugas']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_petugas" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_petugas']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-jabatan">
                                        <th class="title"> Jabatan: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/detail_matrik_honor_jabatan_option_list'); ?>' 
                                                data-value="<?php echo $data['jabatan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="jabatan" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['jabatan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-volume_spk">
                                        <th class="title"> Volume Spk: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['volume_spk']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="volume_spk" 
                                                data-title="Volume SPK" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['volume_spk']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-volume_bast">
                                        <th class="title"> Volume Bast: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['volume_bast']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="volume_bast" 
                                                data-title="Volume BAST" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['volume_bast']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-satuan">
                                        <th class="title"> Satuan: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/detail_matrik_honor_satuan_option_list'); ?>' 
                                                data-value="<?php echo $data['satuan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="satuan" 
                                                data-title="--Pilih Data--" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['satuan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-harga_satuan">
                                        <th class="title"> Harga Satuan: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['harga_satuan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="harga_satuan" 
                                                data-title="Masukkan Harga Satuan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['harga_satuan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-total">
                                        <th class="title"> Total: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['total']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total" 
                                                data-title="Masukkan Total" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['total']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-cek_double">
                                        <th class="title"> Cek Double: </th>
                                        <td class="value"> <?php echo $data['cek_double']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_id">
                                        <th class="title"> Master Petugas Id: </th>
                                        <td class="value"> <?php echo $data['master_petugas_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_nik">
                                        <th class="title"> Master Petugas Nik: </th>
                                        <td class="value"> <?php echo $data['master_petugas_nik']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_nama_petugas">
                                        <th class="title"> Master Petugas Nama Petugas: </th>
                                        <td class="value"> <?php echo $data['master_petugas_nama_petugas']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_alamat">
                                        <th class="title"> Master Petugas Alamat: </th>
                                        <td class="value"> <?php echo $data['master_petugas_alamat']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_kecamatan">
                                        <th class="title"> Master Petugas Kecamatan: </th>
                                        <td class="value"> <?php echo $data['master_petugas_kecamatan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_pekerjaan">
                                        <th class="title"> Master Petugas Pekerjaan: </th>
                                        <td class="value"> <?php echo $data['master_petugas_pekerjaan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_email">
                                        <th class="title"> Master Petugas Email: </th>
                                        <td class="value"> <?php echo $data['master_petugas_email']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_sobat_id">
                                        <th class="title"> Master Petugas Sobat Id: </th>
                                        <td class="value"> <?php echo $data['master_petugas_sobat_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_jabatan">
                                        <th class="title"> Master Petugas Jabatan: </th>
                                        <td class="value"> <?php echo $data['master_petugas_jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_petugas_status_petugas">
                                        <th class="title"> Master Petugas Status Petugas: </th>
                                        <td class="value"> <?php echo $data['master_petugas_status_petugas']; ?></td>
                                    </tr>
                                    <tr  class="td-master_jabatan_petugas_id">
                                        <th class="title"> Master Jabatan Petugas Id: </th>
                                        <td class="value"> <?php echo $data['master_jabatan_petugas_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_jabatan_petugas_jabatan">
                                        <th class="title"> Master Jabatan Petugas Jabatan: </th>
                                        <td class="value"> <?php echo $data['master_jabatan_petugas_jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_jabatan_petugas_keterangan_jabatan">
                                        <th class="title"> Master Jabatan Petugas Keterangan Jabatan: </th>
                                        <td class="value"> <?php echo $data['master_jabatan_petugas_keterangan_jabatan']; ?></td>
                                    </tr>
                                    <tr  class="td-master_satuan_id">
                                        <th class="title"> Master Satuan Id: </th>
                                        <td class="value"> <?php echo $data['master_satuan_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_satuan_satuan">
                                        <th class="title"> Master Satuan Satuan: </th>
                                        <td class="value"> <?php echo $data['master_satuan_satuan']; ?></td>
                                    </tr>
                                    <tr  class="td-status_spk">
                                        <th class="title"> Status Spk: </th>
                                        <td class="value"> <?php echo $data['status_spk']; ?></td>
                                    </tr>
                                    <tr  class="td-id_spk">
                                        <th class="title"> Id Spk: </th>
                                        <td class="value"> <?php echo $data['id_spk']; ?></td>
                                    </tr>
                                    <tr  class="td-status_bast">
                                        <th class="title"> Status Bast: </th>
                                        <td class="value"> <?php echo $data['status_bast']; ?></td>
                                    </tr>
                                    <tr  class="td-id_bast">
                                        <th class="title"> Id Bast: </th>
                                        <td class="value"> <?php echo $data['id_bast']; ?></td>
                                    </tr>
                                    <tr  class="td-rincian_output_detail">
                                        <th class="title"> Rincian Output Detail: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['rincian_output_detail']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="rincian_output_detail" 
                                                data-title="Enter Rincian Output Detail" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['rincian_output_detail']; ?> 
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("detail_matrik_honor/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("detail_matrik_honor/delete/$rec_id/?csrf_token=$csrf_token"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
