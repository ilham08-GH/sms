<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("sbml_detail_view/add");
$can_edit = ACL::is_allowed("sbml_detail_view/edit");
$can_view = ACL::is_allowed("sbml_detail_view/view");
$can_delete = ACL::is_allowed("sbml_detail_view/delete");
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
                    <h4 class="record-title">Daftar Survei Petugas SBML</h4>
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
                <div class="col-md-4 comp-grid">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Petugas
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php 
                            $option_list = $comp_model->sbml_detail_view_sbml_detail_viewid_petugas_option_list();
                            if(!empty($option_list)){
                            foreach($option_list as $option){
                            $value = (!empty($option['value']) ? $option['value'] : null);
                            $label = (!empty($option['label']) ? $option['label'] : $value);
                            $nav_link = $this->set_current_page_link(array('sbml_detail_view_id_petugas' => $value , 'sbml_detail_view_id_petugaslabel' => $label) , false);
                            ?>
                            <a class="dropdown-item <?php echo is_active_link('sbml_detail_view_id_petugas', $value); ?>" href="<?php print_link($nav_link) ?>">
                                <?php echo $label; ?>
                            </a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 comp-grid">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bulan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php 
                            $option_list = $comp_model->sbml_detail_view_sbml_detail_viewbulan_tahun_option_list();
                            if(!empty($option_list)){
                            foreach($option_list as $option){
                            $value = (!empty($option['value']) ? $option['value'] : null);
                            $label = (!empty($option['label']) ? $option['label'] : $value);
                            $nav_link = $this->set_current_page_link(array('sbml_detail_view_bulan_tahun' => $value , 'sbml_detail_view_bulan_tahunlabel' => $label) , false);
                            ?>
                            <a class="dropdown-item <?php echo is_active_link('sbml_detail_view_bulan_tahun', $value); ?>" href="<?php print_link($nav_link) ?>">
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
                        if(!empty(get_value('sbml_detail_view_id_petugas'))){
                        ?>
                        <div class="filter-chip card bg-light">
                            <b>Id Petugas :</b> 
                            <?php 
                            if(get_value('sbml_detail_view_id_petugaslabel')){
                            echo get_value('sbml_detail_view_id_petugaslabel');
                            }
                            else{
                            echo get_value('sbml_detail_view_id_petugas');
                            }
                            $remove_link = unset_get_value('sbml_detail_view_id_petugas', $this->route->page_url);
                            ?>
                            <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                &times;
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if(!empty(get_value('sbml_detail_view_bulan_tahun'))){
                        ?>
                        <div class="filter-chip card bg-light">
                            <b>Bulan :</b> 
                            <?php 
                            if(get_value('sbml_detail_view_bulan_tahunlabel')){
                            echo get_value('sbml_detail_view_bulan_tahunlabel');
                            }
                            else{
                            echo get_value('sbml_detail_view_bulan_tahun');
                            }
                            $remove_link = unset_get_value('sbml_detail_view_bulan_tahun', $this->route->page_url);
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
                        <div id="sbml_detail_view-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header bg-light">
                                        <tr>
                                            <th class="td-sno">#</th>
                                            <th  class="td-rincian_output"> Rincian Output</th>
                                            <th  class="td-uraian_kegiatan"> Uraian Kegiatan</th>
                                            <th  class="td-volume_spk"> Volume SPK</th>
                                            <th  class="td-volume_bast"> Volume BAST</th>
                                            <th  class="td-harga_satuan"> Harga Satuan</th>
                                            <th  class="td-totalhonor"> Total Honor BAST</th>
                                            <th  class="td-nama_petugas"> Nama Petugas</th>
                                            <th  class="td-alamat"> Alamat</th>
                                            <th  class="td-kecamatan"> Kecamatan</th>
                                            <th  class="td-bulan_tahun"> Bulan</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if(!empty($records)){
                                    ?>
                                    <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        $sum_of_totalhonor = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                        $counter++;
                                        $sum_of_totalhonor = $sum_of_totalhonor + $data['totalhonor'];
                                        ?>
                                        <tr>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-rincian_output"> <?php echo $data['rincian_output']; ?></td>
                                            <td class="td-uraian_kegiatan"> <?php echo $data['uraian_kegiatan']; ?></td>
                                            <td class="td-volume_spk"> <?php echo $data['volume_spk']; ?></td>
                                            <td class="td-volume_bast"> <?php echo $data['volume_bast']; ?></td>
                                            <td class="td-harga_satuan"> <?php echo $data['harga_satuan']; ?></td>
                                            <td class="td-totalhonor"> <?php echo $data['totalhonor']; ?></td>
                                            <td class="td-nama_petugas"> <?php echo $data['nama_petugas']; ?></td>
                                            <td class="td-alamat"> <?php echo $data['alamat']; ?></td>
                                            <td class="td-kecamatan"> <?php echo $data['kecamatan']; ?></td>
                                            <td class="td-bulan_tahun"> <?php echo $data['bulan_tahun']; ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                    <tfoot><tr><th></th><th></th><th></th><th></th><th></th><th></th><th>
                                        Total Honor BAST = <br>Rp. <?= number_format($sum_of_totalhonor, 0, ',', '.') ?>,-
                                        </th>
                                    <th></th><th></th><th></th><th></th></tr></tfoot>
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
