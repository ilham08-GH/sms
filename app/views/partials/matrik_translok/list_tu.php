<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("matrik_translok/add");
$can_edit = ACL::is_allowed("matrik_translok/edit");
$can_view = ACL::is_allowed("matrik_translok/view");
$can_delete = ACL::is_allowed("matrik_translok/delete");
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
                    <h4 class="record-title">Matrik Translok</h4>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('matrik_translok/List_tu'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('matrik_translok'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('matrik_translok'); ?>">
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
                        <a  class="btn btn-primary" href="<?php print_link("matrik_translok/list_tu") ?>">
                            <i class="fa fa-pinterest-p "></i>                              
                            Matrik Translok 
                        </a>
                        <a  class="btn btn-success" href="<?php print_link("matrik_translok/list_tu_sp2d_clear") ?>">
                            <i class="fa fa-pinterest "></i>                                
                            Matrik Translok SP2D CLEAR 
                        </a>
                        <div class=""><div><br></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-2 comp-grid">
                        <div class=""><div>Filter Bulan & Tahun</div>
                        </div>
                    </div>
                    <div class="col-md-3 comp-grid">
                        <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                            <div class="card mb-3">
                                <div class="p-2">
                                    <select   name="master_bulan_bulan" class="form-control custom ">
                                        <option value="">Select a value ...</option>
                                        <?php 
                                        $master_bulan_bulan_options = $comp_model -> matrik_translok_master_bulanbulan_option_list();
                                        if(!empty($master_bulan_bulan_options)){
                                        foreach($master_bulan_bulan_options as $option){
                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                        $selected = $this->set_field_selected('master_bulan_bulan',$value);
                                        ?>
                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                        </option>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="p-2">
                                    <select   name="matrik_translok_tahun" class="form-control custom ">
                                        <option value="">Select a value ...</option>
                                        <?php 
                                        $matrik_translok_tahun_options = $comp_model -> matrik_translok_matrik_transloktahun_option_list();
                                        if(!empty($matrik_translok_tahun_options)){
                                        foreach($matrik_translok_tahun_options as $option){
                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                        $selected = $this->set_field_selected('matrik_translok_tahun',$value);
                                        ?>
                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                        </option>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div class="filter-tags mb-2">
                            <?php
                            if(!empty(get_value('master_bulan_bulan'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Bulan :</b> 
                                <?php 
                                if(get_value('master_bulan_bulanlabel')){
                                echo get_value('master_bulan_bulanlabel');
                                }
                                else{
                                echo get_value('master_bulan_bulan');
                                }
                                $remove_link = unset_get_value('master_bulan_bulan', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('matrik_translok_tahun'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Tahun :</b> 
                                <?php 
                                if(get_value('matrik_translok_tahunlabel')){
                                echo get_value('matrik_translok_tahunlabel');
                                }
                                else{
                                echo get_value('matrik_translok_tahun');
                                }
                                $remove_link = unset_get_value('matrik_translok_tahun', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div  class=" animated fadeIn page-content">
                            <div id="matrik_translok-list_tu-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-master_tim_nama_tim"> Tim</th>
                                                <th  class="td-master_survei_nama_survei"> Nama Survei</th>
                                                <th  class="td-uraian_pengajuan"> Uraian Pengajuan</th>
                                                <th  class="td-master_bulan_bulan"> Bulan</th>
                                                <th  class="td-tahun"> Tahun</th>
                                                <th  class="td-create_at"> Tgl Pengajuan</th>
                                                <th  class="td-harga_satuan_honor"> Harga Satuan</th>
                                                <th  class="td-status_pengajuan_translok"> Status Pengajuan Translok</th>
                                                <th  class="td-jumlah_petugas"> Jumlah Petugas</th>
                                                <th  class="td-status_sp2d"> Status SP2D</th>
                                                <th  class="td-list_petugas"> </th>
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
                                                <td class="td-master_tim_nama_tim"><?php
                                                    $nama = $data['master_tim_nama_tim'] ?? '';
                                                    $hash = md5($nama);
                                                    // Batasi warna agar cenderung gelap
                                                    $r = hexdec(substr($hash, 0, 2)) % 150;
                                                    $g = hexdec(substr($hash, 2, 2)) % 150;
                                                    $b = hexdec(substr($hash, 4, 2)) % 150;
                                                    $color = "rgb($r,$g,$b)";
                                                    ?>
                                                    <span class="badge"
                                                        style="background-color: <?= $color ?>; color:#fff;">
                                                        <?= htmlspecialchars($nama) ?>
                                                    </span>
                                                </td>
                                                <td class="td-master_survei_nama_survei"> <?php echo $data['master_survei_nama_survei']; ?></td>
                                                <td class="td-uraian_pengajuan"> <?php echo $data['uraian_pengajuan']; ?></td>
                                                <td class="td-master_bulan_bulan"> <?php echo $data['master_bulan_bulan']; ?></td>
                                                <td class="td-tahun"> <?php echo $data['tahun']; ?></td>
                                                <td class="td-create_at"> <?php echo $data['create_at']; ?></td>
                                                <td class="td-harga_satuan_honor">
                                                    <span><?= number_format((int)($data['harga_satuan_honor'] ?? 0), 0, ',', '.') ?></span>
                                                </td>
                                                <td class="td-status_pengajuan_translok"><?php
                                                    if ($data['status_pengajuan_translok'] == "Final") {
                                                    echo '<span class="badge badge-success">' . $data['status_pengajuan_translok'] . '</span>';
                                                    } else {
                                                    echo '<span class="badge badge-danger">' . $data['status_pengajuan_translok'] . '</span>';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="td-jumlah_petugas">
                                                    <span class="badge bg-info">
                                                        <?= $data['jumlah_petugas'] ?>
                                                    </span>
                                                </td>
                                                <td class="td-status_sp2d"><?php if(!empty($data['status_sp2d'])): ?>
                                                    <span class="badge <?= $data['status_sp2d']=='SP2D CLEAR' ? 'bg-success' : 'bg-danger' ?>">
                                                        <?= $data['status_sp2d'] ?>
                                                    </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="td-list_petugas"><a href="<?php print_link("detail_matrik_translok/list_tu/id_matrik_translok/$data[id]") ?>"><?php echo $data['list_petugas']; ?></a></td>
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
                        </section>
