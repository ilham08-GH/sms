<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("spk_view/add");
$can_edit = ACL::is_allowed("spk_view/edit");
$can_view = ACL::is_allowed("spk_view/view");
$can_delete = ACL::is_allowed("spk_view/delete");
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
                    <h4 class="record-title">Rekap Honor Petugas</h4>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('spk_view/Rekap_honor'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('spk_view'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('spk_view'); ?>">
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
            <div class="container">
                <div class="row ">
                    <div class="col-md-2 comp-grid">
                        <div class=""><div>Filter Data Bulan dan Petugas</div>
                        </div>
                    </div>
                    <div class="col-md-3 comp-grid">
                        <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                            <div class="card mb-3">
                                <div class="p-2">
                                    <select   name="spk_view_bulan_tahun" class="form-control custom ">
                                        <option value="">Select a value ...</option>
                                        <?php 
                                        $spk_view_bulan_tahun_options = $comp_model -> spk_view_spk_viewbulan_tahun_option_list();
                                        if(!empty($spk_view_bulan_tahun_options)){
                                        foreach($spk_view_bulan_tahun_options as $option){
                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                        $selected = $this->set_field_selected('spk_view_bulan_tahun',$value);
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
                                    <select   name="spk_view_nama_petugas" class="form-control custom ">
                                        <option value="">Select a value ...</option>
                                        <?php 
                                        $spk_view_nama_petugas_options = $comp_model -> spk_view_spk_viewnama_petugas_option_list();
                                        if(!empty($spk_view_nama_petugas_options)){
                                        foreach($spk_view_nama_petugas_options as $option){
                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                        $selected = $this->set_field_selected('spk_view_nama_petugas',$value);
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
                            if(!empty(get_value('spk_view_bulan_tahun'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Bulan :</b> 
                                <?php 
                                if(get_value('spk_view_bulan_tahunlabel')){
                                echo get_value('spk_view_bulan_tahunlabel');
                                }
                                else{
                                echo get_value('spk_view_bulan_tahun');
                                }
                                $remove_link = unset_get_value('spk_view_bulan_tahun', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('spk_view_nama_petugas'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Nama Petugas :</b> 
                                <?php 
                                if(get_value('spk_view_nama_petugaslabel')){
                                echo get_value('spk_view_nama_petugaslabel');
                                }
                                else{
                                echo get_value('spk_view_nama_petugas');
                                }
                                $remove_link = unset_get_value('spk_view_nama_petugas', $this->route->page_url);
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
                            <div id="spk_view-rekap_honor-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-bulan_tahun"> Bulan</th>
                                                <th  class="td-nama_petugas"> Nama Petugas</th>
                                                <th  class="td-alamat"> Alamat</th>
                                                <th  class="td-kecamatan"> Kecamatan</th>
                                                <th  class="td-jabatan"> Jabatan</th>
                                                <th  class="td-rincian_output"> Rincian Output</th>
                                                <th  class="td-nama_survei"> Nama Survei</th>
                                                <th  class="td-uraian_kegiatan"> Uraian Kegiatan</th>
                                                <th  class="td-harga_satuan"> Harga Satuan</th>
                                                <th  class="td-volume_spk"> Volume SPK</th>
                                                <th  class="td-total"> Total SPK</th>
                                                <th  class="td-volume_bast"> Volume BAST</th>
                                                <th  class="td-total_honor"> Total Honor BAST</th>
                                                <th  class="td-satuan"> Satuan</th>
                                                <th  class="td-jangka_waktu"> Jangka Waktu</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            $sum_of_total_honor = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                            $counter++;
                                            $sum_of_total_honor = $sum_of_total_honor + $data['total_honor'];
                                            ?>
                                            <tr>
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                <td class="td-bulan_tahun"> <?php echo $data['bulan_tahun']; ?></td>
                                                <td class="td-nama_petugas"> <?php echo $data['nama_petugas']; ?></td>
                                                <td class="td-alamat"> <?php echo $data['alamat']; ?></td>
                                                <td class="td-kecamatan"> <?php echo $data['kecamatan']; ?></td>
                                                <td class="td-jabatan"> <?php echo $data['jabatan']; ?></td>
                                                <td class="td-rincian_output"> <?php echo $data['rincian_output']; ?></td>
                                                <td class="td-nama_survei"> <?php echo $data['nama_survei']; ?></td>
                                                <td class="td-uraian_kegiatan"> <?php echo $data['uraian_kegiatan']; ?></td>
                                                <td class="td-harga_satuan">  <span><?= number_format((int)($data['harga_satuan'] ?? 0), 0, ',', '.') ?></span></td>
                                                <td class="td-volume_spk"> <?php echo $data['volume_spk']; ?></td>
                                                <td class="td-total"> <span><?= number_format((int)($data['total'] ?? 0), 0, ',', '.') ?></span></td>
                                                <td class="td-volume_bast"> <?php echo $data['volume_bast']; ?></td>
                                                <td class="td-total_honor"><span>
                                                    <?= number_format(
                                                    (int)(($data['volume_bast'] ?? 0) * ($data['harga_satuan'] ?? 0)),
                                                    0,
                                                    ',',
                                                    '.'
                                                    ) ?>
                                                </span>
                                            </td>
                                            <td class="td-satuan"> <?php echo $data['satuan']; ?></td>
                                            <td class="td-jangka_waktu"> <?php echo $data['jangka_waktu']; ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                    <tfoot><tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th>
                                        Total Honor BAST = <br>Rp. <?= number_format($sum_of_total_honor, 0, ',', '.') ?>,-
                                        </th>
                                    <th></th><th></th></tr></tfoot>
                                    <?php
                                    }
                                    ?>
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
