<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("jadwal_translok_view/add");
$can_edit = ACL::is_allowed("jadwal_translok_view/edit");
$can_view = ACL::is_allowed("jadwal_translok_view/view");
$can_delete = ACL::is_allowed("jadwal_translok_view/delete");
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
                    <h4 class="record-title">Jadwal Translok View</h4>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('jadwal_translok_view'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('jadwal_translok_view'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('jadwal_translok_view'); ?>">
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
                    <div class="col-md-3 comp-grid">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter Nama
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php 
                                $option_list = $comp_model->jadwal_translok_view_jadwal_translok_viewnama_user_option_list();
                                if(!empty($option_list)){
                                foreach($option_list as $option){
                                $value = (!empty($option['value']) ? $option['value'] : null);
                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                $nav_link = $this->set_current_page_link(array('jadwal_translok_view_nama_user' => $value , 'jadwal_translok_view_nama_userlabel' => $label) , false);
                                ?>
                                <a class="dropdown-item <?php echo is_active_link('jadwal_translok_view_nama_user', $value); ?>" href="<?php print_link($nav_link) ?>">
                                    <?php echo $label; ?>
                                </a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 comp-grid">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter Bulan
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                $jadwal_translok_view_bulan_options = Menu :: $jadwal_translok_view_bulan;
                                if(!empty($jadwal_translok_view_bulan_options)){
                                foreach($jadwal_translok_view_bulan_options as $option){
                                $value = $option['value'];
                                $label = $option['label'];
                                $nav_link = $this->set_current_page_link(array('jadwal_translok_view_bulan' => $value ) , false);
                                $is_active = is_active_link('jadwal_translok_view_bulan', $value);
                                ?>
                                <a class="dropdown-item <?php echo $is_active; ?>" href="<?php print_link($nav_link) ?>">
                                    <?php echo $label ?>
                                </a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 comp-grid">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter Tahun
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php 
                                $option_list = $comp_model->jadwal_translok_view_jadwal_translok_viewtahun_option_list();
                                if(!empty($option_list)){
                                foreach($option_list as $option){
                                $value = (!empty($option['value']) ? $option['value'] : null);
                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                $nav_link = $this->set_current_page_link(array('jadwal_translok_view_tahun' => $value , 'jadwal_translok_view_tahunlabel' => $label) , false);
                                ?>
                                <a class="dropdown-item <?php echo is_active_link('jadwal_translok_view_tahun', $value); ?>" href="<?php print_link($nav_link) ?>">
                                    <?php echo $label; ?>
                                </a>
                                <?php
                                }
                                }
                                ?>
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
                        <div class="filter-tags mb-2">
                            <?php
                            if(!empty(get_value('jadwal_translok_view_nama_user'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Nama :</b> 
                                <?php 
                                if(get_value('jadwal_translok_view_nama_userlabel')){
                                echo get_value('jadwal_translok_view_nama_userlabel');
                                }
                                else{
                                echo get_value('jadwal_translok_view_nama_user');
                                }
                                $remove_link = unset_get_value('jadwal_translok_view_nama_user', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('jadwal_translok_view_bulan'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Bulan :</b> 
                                <?php 
                                if(get_value('jadwal_translok_view_bulanlabel')){
                                echo get_value('jadwal_translok_view_bulanlabel');
                                }
                                else{
                                echo get_value('jadwal_translok_view_bulan');
                                }
                                $remove_link = unset_get_value('jadwal_translok_view_bulan', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('jadwal_translok_view_tahun'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Tahun :</b> 
                                <?php 
                                if(get_value('jadwal_translok_view_tahunlabel')){
                                echo get_value('jadwal_translok_view_tahunlabel');
                                }
                                else{
                                echo get_value('jadwal_translok_view_tahun');
                                }
                                $remove_link = unset_get_value('jadwal_translok_view_tahun', $this->route->page_url);
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
                            <div id="jadwal_translok_view-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-nama_user"> Nama Petugas</th>
                                                <th  class="td-nama_survei"> Nama Survei</th>
                                                <th  class="td-tgl_translok"> Tgl Translok</th>
                                                <th  class="td-bulan"> Bulan</th>
                                                <th  class="td-tahun"> Tahun</th>
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
                                            $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                <td class="td-nama_user"> <?php echo $data['nama_user']; ?></td>
                                                <td class="td-nama_survei"> <?php echo $data['nama_survei']; ?></td>
                                                <td class="td-tgl_translok"> <?php echo $data['tgl_translok']; ?></td>
                                                <td class="td-bulan"> <?php echo $data['bulan']; ?></td>
                                                <td class="td-tahun"> <?php echo $data['tahun']; ?></td>
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
