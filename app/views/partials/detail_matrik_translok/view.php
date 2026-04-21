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
                    <h4 class="record-title">View Detail Matrik Translok</h4>
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
                                    <tr  class="td-id_matrik_translok">
                                        <th class="title"> Id Matrik Translok: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['id_matrik_translok']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_matrik_translok" 
                                                data-title="Enter Id Matrik Translok" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_matrik_translok']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_user">
                                        <th class="title"> Id User: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/detail_matrik_translok_id_user_option_list'); ?>' 
                                                data-value="<?php echo $data['id_user']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_user" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_user']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-volume">
                                        <th class="title"> Volume: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['volume']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="volume" 
                                                data-title="Masukkan Volume" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['volume']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-satuan">
                                        <th class="title"> Satuan: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/detail_matrik_translok_satuan_option_list'); ?>' 
                                                data-value="<?php echo $data['satuan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="satuan" 
                                                data-title="Select a value ..." 
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
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="total" 
                                                data-title="Total" 
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
                                    <tr  class="td-st">
                                        <th class="title"> St: </th>
                                        <td class="value"> <?php echo $data['st']; ?></td>
                                    </tr>
                                    <tr  class="td-visum">
                                        <th class="title"> Visum: </th>
                                        <td class="value"> <?php echo $data['visum']; ?></td>
                                    </tr>
                                    <tr  class="td-s_non_pkd">
                                        <th class="title"> S Non Pkd: </th>
                                        <td class="value"> <?php echo $data['s_non_pkd']; ?></td>
                                    </tr>
                                    <tr  class="td-laporan">
                                        <th class="title"> Laporan: </th>
                                        <td class="value"> <?php echo $data['laporan']; ?></td>
                                    </tr>
                                    <tr  class="td-dokumentasi">
                                        <th class="title"> Dokumentasi: </th>
                                        <td class="value"> <?php echo $data['dokumentasi']; ?></td>
                                    </tr>
                                    <tr  class="td-selesai_fp">
                                        <th class="title"> Selesai Fp: </th>
                                        <td class="value"> <?php echo $data['selesai_fp']; ?></td>
                                    </tr>
                                    <tr  class="td-pengajuan_spm">
                                        <th class="title"> Pengajuan Spm: </th>
                                        <td class="value"> <?php echo $data['pengajuan_spm']; ?></td>
                                    </tr>
                                    <tr  class="td-terbit_sp2d">
                                        <th class="title"> Terbit Sp2d: </th>
                                        <td class="value"> <?php echo $data['terbit_sp2d']; ?></td>
                                    </tr>
                                    <tr  class="td-tgl_sp2d">
                                        <th class="title"> Tgl Sp2d: </th>
                                        <td class="value"> <?php echo $data['tgl_sp2d']; ?></td>
                                    </tr>
                                    <tr  class="td-keterangan">
                                        <th class="title"> Keterangan: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("detail_matrik_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="keterangan" 
                                                data-title="Masukkan Keterangan Tgl Translok" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['keterangan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-master_bulan_id">
                                        <th class="title"> Master Bulan Id: </th>
                                        <td class="value"> <?php echo $data['master_bulan_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_bulan_kode_bulan">
                                        <th class="title"> Master Bulan Kode Bulan: </th>
                                        <td class="value"> <?php echo $data['master_bulan_kode_bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_id">
                                        <th class="title"> Matrik Translok Id: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_id']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_id_tim">
                                        <th class="title"> Matrik Translok Id Tim: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_id_tim']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_id_nama_survei">
                                        <th class="title"> Matrik Translok Id Nama Survei: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_id_nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_id_bulan_pengajuan">
                                        <th class="title"> Matrik Translok Id Bulan Pengajuan: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_id_bulan_pengajuan']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_tahun">
                                        <th class="title"> Matrik Translok Tahun: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_tahun']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_cek_double">
                                        <th class="title"> Matrik Translok Cek Double: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_cek_double']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_create_by">
                                        <th class="title"> Matrik Translok Create By: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_create_by']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_create_at">
                                        <th class="title"> Matrik Translok Create At: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_create_at']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_harga_satuan_honor">
                                        <th class="title"> Matrik Translok Harga Satuan Honor: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_harga_satuan_honor']; ?></td>
                                    </tr>
                                    <tr  class="td-matrik_translok_uraian_pengajuan">
                                        <th class="title"> Matrik Translok Uraian Pengajuan: </th>
                                        <td class="value"> <?php echo $data['matrik_translok_uraian_pengajuan']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-user_nip">
                                        <th class="title"> User Nip: </th>
                                        <td class="value"> <?php echo $data['user_nip']; ?></td>
                                    </tr>
                                    <tr  class="td-user_nama_user">
                                        <th class="title"> User Nama User: </th>
                                        <td class="value"> <?php echo $data['user_nama_user']; ?></td>
                                    </tr>
                                    <tr  class="td-user_foto">
                                        <th class="title"> User Foto: </th>
                                        <td class="value"> <?php echo $data['user_foto']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id_tim">
                                        <th class="title"> User Id Tim: </th>
                                        <td class="value"> <?php echo $data['user_id_tim']; ?></td>
                                    </tr>
                                    <tr  class="td-user_status">
                                        <th class="title"> User Status: </th>
                                        <td class="value"> <?php echo $data['user_status']; ?></td>
                                    </tr>
                                    <tr  class="td-user_password">
                                        <th class="title"> User Password: </th>
                                        <td class="value"> <?php echo $data['user_password']; ?></td>
                                    </tr>
                                    <tr  class="td-user_email">
                                        <th class="title"> User Email: </th>
                                        <td class="value"> <?php echo $data['user_email']; ?></td>
                                    </tr>
                                    <tr  class="td-user_role">
                                        <th class="title"> User Role: </th>
                                        <td class="value"> <?php echo $data['user_role']; ?></td>
                                    </tr>
                                    <tr  class="td-master_satuan_id">
                                        <th class="title"> Master Satuan Id: </th>
                                        <td class="value"> <?php echo $data['master_satuan_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_satuan_satuan">
                                        <th class="title"> Master Satuan Satuan: </th>
                                        <td class="value"> <?php echo $data['master_satuan_satuan']; ?></td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("detail_matrik_translok/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("detail_matrik_translok/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="⚠️ Apakah Anda yakin ingin menghapus data ini?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Hapus
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
