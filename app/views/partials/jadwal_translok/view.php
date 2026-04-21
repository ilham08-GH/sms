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
                    <h4 class="record-title">View  Jadwal Translok</h4>
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
                                    <tr  class="td-id_user">
                                        <th class="title"> Id User: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['id_user']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("jadwal_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_user" 
                                                data-title="Enter Id User" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_user']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_nama_survei">
                                        <th class="title"> Id Nama Survei: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/jadwal_translok_id_nama_survei_option_list'); ?>' 
                                                data-value="<?php echo $data['id_nama_survei']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("jadwal_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_nama_survei" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_nama_survei']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tgl_translok">
                                        <th class="title"> Tgl Translok: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tgl_translok']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("jadwal_translok/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tgl_translok" 
                                                data-title="Masukkan Tgl Translok" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tgl_translok']; ?> 
                                            </span>
                                        </td>
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
                                    <tr  class="td-master_survei_id">
                                        <th class="title"> Master Survei Id: </th>
                                        <td class="value"> <?php echo $data['master_survei_id']; ?></td>
                                    </tr>
                                    <tr  class="td-master_survei_nama_survei">
                                        <th class="title"> Master Survei Nama Survei: </th>
                                        <td class="value"> <?php echo $data['master_survei_nama_survei']; ?></td>
                                    </tr>
                                    <tr  class="td-cek_double">
                                        <th class="title"> Cek Double: </th>
                                        <td class="value"> <?php echo $data['cek_double']; ?></td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("jadwal_translok/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("jadwal_translok/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
