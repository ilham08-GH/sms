<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("spk/add");
$can_edit = ACL::is_allowed("spk/edit");
$can_view = ACL::is_allowed("spk/view");
$can_delete = ACL::is_allowed("spk/delete");
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
$user_role = strtolower(USER_ROLE);
$is_tu_admin = in_array($user_role, ['tu', 'administrator', 'admin']);
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">SPK</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("spk/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Buat SPK 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('spk'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
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
                                        <a class="text-decoration-none" href="<?php print_link('spk'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('spk'); ?>">
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
                        <div class=""><div class="alert alert-primary">
                            <strong>Info!</strong> Jika ada biaya pelatihan Klik pada nilai biaya pelatihan. Ganti nilai sebesar nilai biaya pelatihan.
                        </div>
                    </div>
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
                        <div id="spk-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table table-striped table-sm text-left">
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
                                            <th class="td-nomor_spk"> Nomor SPK</th>
                                            <th class="td-tgl_spk"> Tgl SPK</th>
                                            <th class="td-tgl_selesai_spk"> Tgl Selesai SPK</th>
                                            <th class="td-bulan_spk"> Bulan SPK</th>
                                            <th class="td-master_ppk_nama_ppk"> Nama PPK</th>
                                            <th class="td-master_petugas_nama_petugas"> Nama Petugas</th>
                                            <th class="td-master_petugas_alamat"> Alamat</th>
                                            <th class="td-master_petugas_kecamatan"> Kecamatan</th>
                                            <th class="td-honor_pelatihan"> Denda (Jika ada)</th>
                                            <th class="td-Print_Lampiran"> </th>
                                            
                                            <th class="td-approve_mitra text-center">Aksi</th>

                                            <?php if(!$is_tu_admin){ ?>
                                                <th class="td-upload-pdf text-center">Upload PDF</th>
                                            <?php } ?>

                                            <th class="text-right">Menu</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php if(!empty($records)){ ?>
                                    <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                            $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                            $counter++;
                                            $status_pdf = isset($data['status_pegawai']) ? strtolower($data['status_pegawai']) : '';
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
                                            <td class="td-nomor_spk"> <?php echo $data['nomor_spk']; ?></td>
                                            <td class="td-tgl_spk"> <?php echo $data['tgl_spk']; ?></td>
                                            <td class="td-tgl_selesai_spk"> <?php echo $data['tgl_selesai_spk']; ?></td>
                                            <td class="td-bulan_spk"> <?php echo $data['bulan_spk']; ?></td>
                                            <td class="td-master_ppk_nama_ppk"> <?php echo $data['master_ppk_nama_ppk']; ?></td>
                                            <td class="td-master_petugas_nama_petugas" style="padding:2px 6px;font-size:13px;white-space:nowrap;"> <?php echo $data['master_petugas_nama_petugas']; ?></td>
                                            <td class="td-master_petugas_alamat" style="padding:2px 6px;font-size:13px;white-space:nowrap;"> <?php echo $data['master_petugas_alamat']; ?></td>
                                            <td class="td-master_petugas_kecamatan" style="padding:2px 6px;font-size:13px;white-space:nowrap;"> <?php echo $data['master_petugas_kecamatan']; ?></td>
                                            <td class="td-honor_pelatihan">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['honor_pelatihan']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("spk/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="honor_pelatihan" 
                                                    data-title="Denda" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['honor_pelatihan']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-Print_Lampiran">
                                                <a href="<?php print_link("spk/view2/$rec_id") ?>" title="Print Lampiran">
                                                    📑 Lampiran
                                                </a>
                                            </td>

                                            <td class="td-approve_mitra" style="text-align:center;vertical-align:middle;">
                                                <?php 
                                                if(in_array($user_role, ['tu', 'administrator', 'admin'])) {
                                                    if($status_pdf == '' || $status_pdf == 'pending') { ?>
                                                        <form method="post" action="<?php print_link('spk/approve_pdf/' . $data['id']); ?>" style="display:inline;">
                                                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                                            <button type="submit" name="aksi" value="setujui" class="btn btn-xs btn-success py-0 px-1" style="font-size: 10px;">
                                                                <i class="fa fa-check"></i>
                                                            </button>   
                                                            <button type="submit" name="aksi" value="tolak" class="btn btn-xs btn-danger py-0 px-1" style="font-size: 10px;">
                                                                <i class="fa fa-times"></i>
                                                            </button>                                                         
                                                        </form>
                                                    <?php } elseif($status_pdf == 'disetujui') { ?>
                                                        <span class="badge badge-success">Selesai</span>
                                                    <?php } elseif($status_pdf == 'ditolak') { ?>
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    <?php }
                                                } else if($user_role == 'mitra') {
                                                    $status_mitra = (isset($data['status_mitra']) ? $data['status_mitra'] : 'pending');
                                                    if($status_mitra == 'pending' || empty($status_mitra)) { ?>
                                                        <form method="post" action="<?php print_link('spk/approve_mitra/' . $data['id']); ?>" style="display:inline;">
                                                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                                            <button type="submit" class="btn btn-xs btn-primary">
                                                                <i class="fa fa-check"></i> Setujui
                                                            </button>
                                                        </form>
                                                    <?php } else { ?>
                                                        <span class="badge badge-success"><i class="fa fa-check"></i></span>
                                                    <?php }
                                                } ?>
                                            </td>

                                            <?php if(!$is_tu_admin) { ?>
                                            <td class="td-upload-pdf" style="text-align:center;vertical-align:middle;">
                                                <?php 
                                                $file_pdf = !empty($data['file_pdf_mitra']) ? $data['file_pdf_mitra'] : '';
                                                if ($user_role == 'mitra') { ?>
                                                    <form method="post" action="<?php print_link('spk/upload_pdf/' . $data['id']); ?>" enctype="multipart/form-data" style="display:inline;">
                                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                                        <input type="file" id="pdf_file_<?php echo $data['id']; ?>" name="pdf_file" accept="application/pdf" required style="display:none;" onchange="this.form.submit()">
                                                        <?php if(!empty($file_pdf)) { ?>
                                                            <label for="pdf_file_<?php echo $data['id']; ?>" style="margin:0;cursor:pointer;display:inline-block;" title="Hold/Klik untuk mengganti file">
                                                                <span class="badge badge-success" style="padding:8px 12px;font-size:12px;">
                                                                    <i class="fa fa-check"></i> Sudah Diunggah
                                                                </span>
                                                            </label>
                                                        <?php } else { ?>
                                                            <label for="pdf_file_<?php echo $data['id']; ?>" style="margin:0;cursor:pointer;">
                                                                <button type="button" class="btn btn-xs btn-primary" style="cursor:pointer;" onclick="document.getElementById('pdf_file_<?php echo $data['id']; ?>').click(); return false;">
                                                                    <i class="fa fa-upload"></i> Upload PDF
                                                                </button>
                                                            </label>
                                                        <?php } ?>
                                                    </form>
                                                <?php } ?>
                                            </td>
                                            <?php } ?>

                                            <td class="text-right">
                                            <?php if(strtolower(USER_ROLE) == 'mitra') { ?>
                                                <a class="btn btn-sm btn-primary-outline" href="<?php print_link("spk/view/$rec_id"); ?>" title="Lihat / Print SPK">
                                                    <i class="fa fa-eye"></i> Lihat
                                                </a>
                                            <?php } else { ?>
                                                <div class="dropdown">
                                                    <button class="btn btn-xs btn-light border dropdown-toggle" data-toggle="dropdown">
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item small" href="<?php print_link("spk/view/$rec_id"); ?>">
                                                            <i class="fa fa-eye"></i> Lihat / Print SPK
                                                        </a>
                                                        <?php if($can_delete){ ?>
                                                            <a class="dropdown-item small text-danger record-delete-btn" href="<?php print_link("spk/delete/$rec_id/?csrf_token=$csrf_token"); ?>">
                                                                <i class="fa fa-times"></i> Hapus
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <?php } ?>
                                </table>
                                    <?php 
                                    if(empty($records)){
                                    ?>
                                    <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                        <i class="fa fa-ban"></i> No record found
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
                                                <button data-prompt-msg="⚠️ Apakah Anda yakin ingin menghapus data ini?" data-display-style="modal" data-url="<?php print_link("spk/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                    <i class="fa fa-times"></i> Hapus yang Dipilih
                                                </button>
                                                <?php } ?>
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
