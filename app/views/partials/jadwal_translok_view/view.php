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
                    <h4 class="record-title">View  Jadwal Translok View</h4>
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
                        $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
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
                                    <tr  class="td-id_user">
                                        <th class="title"> Id User: </th>
                                        <td class="value"> <?php echo $data['id_user']; ?></td>
                                    </tr>
                                    <tr  class="td-id_nama_survei">
                                        <th class="title"> Id Nama Survei: </th>
                                        <td class="value"> <?php echo $data['id_nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-tgl_translok">
                                        <th class="title"> Tgl Translok: </th>
                                        <td class="value"> <?php echo $data['tgl_translok']; ?></td>
                                    </tr>
                                    <tr  class="td-cek_double">
                                        <th class="title"> Cek Double: </th>
                                        <td class="value"> <?php echo $data['cek_double']; ?></td>
                                    </tr>
                                    <tr  class="td-nip">
                                        <th class="title"> Nip: </th>
                                        <td class="value"> <?php echo $data['nip']; ?></td>
                                    </tr>
                                    <tr  class="td-nama_user">
                                        <th class="title"> Nama User: </th>
                                        <td class="value"> <?php echo $data['nama_user']; ?></td>
                                    </tr>
                                    <tr  class="td-foto">
                                        <th class="title"> Foto: </th>
                                        <td class="value"> <?php echo $data['foto']; ?></td>
                                    </tr>
                                    <tr  class="td-id_tim">
                                        <th class="title"> Id Tim: </th>
                                        <td class="value"> <?php echo $data['id_tim']; ?></td>
                                    </tr>
                                    <tr  class="td-status">
                                        <th class="title"> Status: </th>
                                        <td class="value"> <?php echo $data['status']; ?></td>
                                    </tr>
                                    <tr  class="td-password">
                                        <th class="title"> Password: </th>
                                        <td class="value"> <?php echo $data['password']; ?></td>
                                    </tr>
                                    <tr  class="td-email">
                                        <th class="title"> Email: </th>
                                        <td class="value"> <?php echo $data['email']; ?></td>
                                    </tr>
                                    <tr  class="td-role">
                                        <th class="title"> Role: </th>
                                        <td class="value"> <?php echo $data['role']; ?></td>
                                    </tr>
                                    <tr  class="td-nama_survei">
                                        <th class="title"> Nama Survei: </th>
                                        <td class="value"> <?php echo $data['nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-bulan">
                                        <th class="title"> Bulan: </th>
                                        <td class="value"> <?php echo $data['bulan']; ?></td>
                                    </tr>
                                    <tr  class="td-tahun">
                                        <th class="title"> Tahun: </th>
                                        <td class="value"> <?php echo $data['tahun']; ?></td>
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
