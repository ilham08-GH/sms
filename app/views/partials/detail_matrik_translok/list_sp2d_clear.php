<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("detail_matrik_translok/add");
$can_edit = ACL::is_allowed("detail_matrik_translok/edit");
$can_view = ACL::is_allowed("detail_matrik_translok/view");
$can_delete = ACL::is_allowed("detail_matrik_translok/delete");
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
                <div class="col-md-8 ">
                    <h4 class="record-title">Detail Matrik Translok</h4>
                    <div class=""><?php
                        $first = $records[0] ?? null;
                        ?>
                        <span class="font-weight-bold text-primary"><?= $first['master_bulan_bulan'] ?? '' ?></span>
                        <span class="font-weight-bold text-primary"><?= $first['matrik_translok_tahun'] ?? '' ?></span>: 
                        <span><?= $first['matrik_translok_uraian_pengajuan'] ?? '' ?></span>
                    </div>
                </div>
                <div class="col-md-12 comp-grid">
                    <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                        <form  class="search" action="<?php print_link('detail_matrik_translok/list_sp2d_clear'); ?>" method="get">
                            <div class="input-group">
                                <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Cari" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <hr />
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </form>
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
                        <div class=""><div>
                            Keterangan: 
                            <span class="badge badge-primary text-white">1</span> ST <span class="badge badge-secondary text-white">2</span> Visum <span class="badge badge-warning text-white">3</span> Surat Non PKD <span class="badge badge-info text-white">4</span> Laporan <span class="badge badge-primary text-white">5</span> Dokumentasi <span class="badge badge-dark text-white">6</span> Selesai FP <span class="badge badge-success text-white">7</span> Pengajuan SPM <span class="badge badge-success text-white">8</span> Terbit SP2D
                        </div></div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <div class=""><br></div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 comp-grid">
                            <?php $this :: display_page_errors(); ?>
                            <div  class=" animated fadeIn page-content">
                                <div id="detail_matrik_translok-list_sp2d_clear-records">
                                    <div id="page-report-body" class="table-responsive">
                                        <table class="table  table-striped table-sm text-left">
                                            <thead class="table-header bg-light">
                                                <tr>
                                                    <th class="td-sno">#</th>
                                                    <th  class="td-user_nama_user"> Nama Petugas</th>
                                                    <th  class="td-volume"> Volume</th>
                                                    <th  class="td-harga_satuan"> Harga Satuan</th>
                                                    <th  class="td-total"> Total</th>
                                                    <th  class="td-keterangan"> Keterangan</th>
                                                    <th  class="td-st"> <span class="badge badge-primary text-white">1</span></th>
                                                    <th  class="td-visum"> <span class="badge badge-secondary text-white">2</span></th>
                                                    <th  class="td-s_non_pkd"> <span class="badge badge-warning text-white">3</span></th>
                                                    <th  class="td-laporan"> <span class="badge badge-info text-white">4</span></th>
                                                    <th  class="td-dokumentasi"> <span class="badge badge-primary text-white">5</span></th>
                                                    <th  class="td-selesai_fp"> <span class="badge badge-dark text-white">6</span></th>
                                                    <th  class="td-pengajuan_spm"> <span class="badge badge-success text-white">7</span></th>
                                                    <th  class="td-terbit_sp2d"> <span class="badge badge-success text-white">8</span></th>
                                                    <th  class="td-tgl_sp2d"> Tgl SP2D</th>
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
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    <td class="td-user_nama_user"> <?php echo $data['user_nama_user']; ?></td>
                                                    <td class="td-volume"> <?php echo $data['volume']; ?></td>
                                                    <td class="td-harga_satuan">  <span><?= number_format((int)($data['harga_satuan'] ?? 0), 0, ',', '.') ?></span>
                                                    </td>
                                                    <td class="td-total">  <span><?= number_format((int)($data['total'] ?? 0), 0, ',', '.') ?></span>
                                                    </td>
                                                    <td class="td-keterangan"> <?php echo $data['keterangan']; ?></td>
                                                    <td class="td-st"><?php if ((int)$data['st'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-visum"><?php if ((int)$data['visum'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-s_non_pkd"><?php if ((int)$data['s_non_pkd'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-laporan"><?php if ((int)$data['laporan'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-dokumentasi"><?php if ((int)$data['dokumentasi'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-selesai_fp"><?php if ((int)$data['selesai_fp'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-pengajuan_spm"><?php if ((int)$data['pengajuan_spm'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-terbit_sp2d"><?php if ((int)$data['terbit_sp2d'] >= 1) { ?>
                                                        <i class="fa fa-check text-success"></i>
                                                        <?php } else { ?>
                                                        <i class="fa fa-close text-danger"></i>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="td-tgl_sp2d"> <?php echo $data['tgl_sp2d']; ?></td>
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
                                <div  class="">
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-md-12 comp-grid">
                                                <div class=""><div><br></div>
                                                </div>
                                                <a  class="btn btn-primary" href="<?php print_link("matrik_translok/list_sp2d_clear") ?>">
                                                    <i class="fa fa-arrow-left "></i>                               
                                                    Kembali 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
