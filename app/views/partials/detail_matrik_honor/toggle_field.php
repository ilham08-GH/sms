<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("detail_matrik_honor/add");
$can_edit = ACL::is_allowed("detail_matrik_honor/edit");
$can_view = ACL::is_allowed("detail_matrik_honor/view");
$can_delete = ACL::is_allowed("detail_matrik_honor/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Detail Matrik Honor</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("detail_matrik_honor/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Tambah Detail Matrik Honor 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('detail_matrik_honor/'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Cari" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('detail_matrik_honor'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('detail_matrik_honor'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Cari
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="detail_matrik_honor-toggle_field-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <?php if($can_delete){ ?>
                                                <th class="td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                <?php } ?>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-id_matrik_honor"> Id Matrik Honor</th>
                                                <th  class="td-id_petugas"> Id Petugas</th>
                                                <th  class="td-jabatan"> Jabatan</th>
                                                <th  class="td-volume_spk"> Volume Spk</th>
                                                <th  class="td-volume_bast"> Volume Bast</th>
                                                <th  class="td-satuan"> Satuan</th>
                                                <th  class="td-harga_satuan"> Harga Satuan</th>
                                                <th  class="td-total"> Total</th>
                                                <th  class="td-cek_double"> Cek Double</th>
                                                <th  class="td-status_spk"> Status Spk</th>
                                                <th  class="td-id_spk"> Id Spk</th>
                                                <th  class="td-status_bast"> Status Bast</th>
                                                <th  class="td-id_bast"> Id Bast</th>
                                                <th  class="td-rincian_output_detail"> Rincian Output Detail</th>
                                                <th  class="td-kak"> Kak</th>
                                                <th  class="td-sk"> Sk</th>
                                                <th  class="td-spk_ttd"> Spk Ttd</th>
                                                <th  class="td-bast_ttd"> Bast Ttd</th>
                                                <th  class="td-selesai_fp"> Selesai Fp</th>
                                                <th  class="td-pengajuan_spm"> Pengajuan Spm</th>
                                                <th  class="td-terbit_sp2d"> Terbit Sp2d</th>
                                                <th  class="td-tgl_sp2d"> Tgl Sp2d</th>
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <?php if($can_delete){ ?>
                                                <th class=" td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </th>
                                                    <?php } ?>
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    <td class="td-id"><a href="<?php print_link("detail_matrik_honor/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                    <td class="td-id_matrik_honor">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['id_matrik_honor']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="id_matrik_honor" 
                                                            data-title="Masukkan Id Matrik Honor" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['id_matrik_honor']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-id_petugas">
                                                        <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/detail_matrik_honor_id_petugas_option_list'); ?>' 
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
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['id_petugas']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-jabatan">
                                                        <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/detail_matrik_honor_jabatan_option_list'); ?>' 
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
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['jabatan']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-volume_spk">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['volume_spk']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="volume_spk" 
                                                            data-title="Volume SPK" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['volume_spk']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-volume_bast">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['volume_bast']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="volume_bast" 
                                                            data-title="Volume BAST" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['volume_bast']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-satuan">
                                                        <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/detail_matrik_honor_satuan_option_list'); ?>' 
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
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['satuan']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-harga_satuan">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['harga_satuan']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="harga_satuan" 
                                                            data-title="Masukkan Harga Satuan" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['harga_satuan']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-total">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['total']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="total" 
                                                            data-title="Total" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['total']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-cek_double"> <?php echo $data['cek_double']; ?></td>
                                                    <td class="td-status_spk"> <?php echo $data['status_spk']; ?></td>
                                                    <td class="td-id_spk"> <?php echo $data['id_spk']; ?></td>
                                                    <td class="td-status_bast"> <?php echo $data['status_bast']; ?></td>
                                                    <td class="td-id_bast"> <?php echo $data['id_bast']; ?></td>
                                                    <td class="td-rincian_output_detail">
                                                        <span <?php if($can_edit){ ?> data-value="<?php echo $data['rincian_output_detail']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("detail_matrik_honor/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="rincian_output_detail" 
                                                            data-title="Masukkan Rincian Output Detail" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['rincian_output_detail']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-kak"> <?php echo $data['kak']; ?></td>
                                                    <td class="td-sk"> <?php echo $data['sk']; ?></td>
                                                    <td class="td-spk_ttd"> <?php echo $data['spk_ttd']; ?></td>
                                                    <td class="td-bast_ttd"> <?php echo $data['bast_ttd']; ?></td>
                                                    <td class="td-selesai_fp"> <?php echo $data['selesai_fp']; ?></td>
                                                    <td class="td-pengajuan_spm"> <?php echo $data['pengajuan_spm']; ?></td>
                                                    <td class="td-terbit_sp2d"> <?php echo $data['terbit_sp2d']; ?></td>
                                                    <td class="td-tgl_sp2d"> <?php echo $data['tgl_sp2d']; ?></td>
                                                    <th class="td-btn">
                                                        <?php if($can_view){ ?>
                                                        <a class="btn btn-sm btn-success has-tooltip" title="Lihat Data" href="<?php print_link("detail_matrik_honor/view/$rec_id"); ?>">
                                                            <i class="fa fa-eye"></i> View
                                                        </a>
                                                        <?php } ?>
                                                        <?php if($can_edit){ ?>
                                                        <a class="btn btn-sm btn-info has-tooltip" title="Edit Data Ini" href="<?php print_link("detail_matrik_honor/edit/$rec_id"); ?>">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <?php } ?>
                                                        <?php if($can_delete){ ?>
                                                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Hapus data ini" href="<?php print_link("detail_matrik_honor/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                            <i class="fa fa-times"></i>
                                                            Hapus
                                                        </a>
                                                        <?php } ?>
                                                    </th>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                <!--endrecord-->
                                            </tbody>
                                            <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                        <?php 
                                        if(empty($records)){
                                        ?>
                                        <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                            <i class="fa fa-ban"></i> Tidak ada data
                                        </h4>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    if( $show_footer && !empty($records)){
                                    ?>
                                    <div class=" border-top mt-2">
                                        <div class="row justify-content-center">    
                                            <div class="col-md-auto justify-content-center">    
                                                <div class="p-3 d-flex justify-content-between">    
                                                    <?php if($can_delete){ ?>
                                                    <button data-prompt-msg="⚠️ Apakah Anda yakin ingin menghapus data ini?" data-display-style="modal" data-url="<?php print_link("detail_matrik_honor/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                        <i class="fa fa-times"></i> Hapus yang Dipilih
                                                    </button>
                                                    <?php } ?>
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
                                                                </div>
                                                                <div class="col">   
                                                                    <?php
                                                                    if($show_pagination == true){
                                                                    $pager = new Pagination($total_records, $record_count);
                                                                    $pager->route = $this->route;
                                                                    $pager->show_page_count = true;
                                                                    $pager->show_record_count = true;
                                                                    $pager->show_page_limit =true;
                                                                    $pager->limit_count = $this->limit_count;
                                                                    $pager->show_page_number_list = true;
                                                                    $pager->pager_link_range=5;
                                                                    $pager->render();
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
