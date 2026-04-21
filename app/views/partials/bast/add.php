<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Buat BAST</h4>
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
                <div class="col-md-7 comp-grid">
                    <div class=""><div class="alert alert-primary">
                        <strong>Info!</strong> Lihat Nomor SPK dan BAST <?php
                        echo "<a href='https://docs.google.com/spreadsheets/d/1DH_4-ZzDN1cdPDVJm5T87_8BO-HglgRX-m154Gj5tB0/edit?usp=sharing' target='_blank'>di Sini</a>";
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
            <div class="col-md-7 comp-grid">
                <?php $this :: display_page_errors(); ?>
                <div  class="bg-light p-3 animated fadeIn page-content">
                    <form id="bast-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("bast/add?csrf_token=$csrf_token") ?>" method="post">
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nomor_bast">Nomor BAST <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="">
                                            <input id="ctrl-nomor_bast"  value="<?php  echo $this->set_field_value('nomor_bast',""); ?>" type="text" placeholder="Masukkan Nomor BAST"  required="" name="nomor_bast"  data-url="api/json/bast_nomor_bast_value_exist/" data-loading-msg="Sedang memeriksa ..." data-available-msg="Available" data-unavailable-msg="Data sudah ada" class="form-control  ctrl-check-duplicate" />
                                                <div class="check-status"></div> 
                                            </div>
                                            <small class="form-text">Misal: B-66/BAST/PL.714/01/2025</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="bulan_bast">Bulan BAST <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-bulan_bast" data-load-select-options="id_petugas_bast" name="bulan_bast"  placeholder="--Pilih Data--"    class="custom-select" >
                                                    <option value="">--Pilih Data--</option>
                                                    <?php 
                                                    $bulan_bast_options = $comp_model -> bast_bulan_bast_option_list();
                                                    if(!empty($bulan_bast_options)){
                                                    foreach($bulan_bast_options as $option){
                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                    $selected = $this->set_field_selected('bulan_bast',$value, "");
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
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_petugas_bast">Petugas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-id_petugas_bast" data-load-path="<?php print_link('api/json/bast_id_petugas_bast_option_list') ?>" data-load-select-options="rincian_output_bast" name="id_petugas_bast"  placeholder="--Pilih Data--"    class="custom-select" >
                                                    <option value="">--Pilih Data--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rincian_output_bast">Rincian Output BAST <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-rincian_output_bast" data-load-path="<?php print_link('api/json/bast_rincian_output_bast_option_list') ?>" name="rincian_output_bast"  placeholder="--Pilih Data--"    class="custom-select" >
                                                    <option value="">--Pilih Data--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tgl_bast">Tgl BAST <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input id="ctrl-tgl_bast" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('tgl_bast',""); ?>" type="datetime" name="tgl_bast" placeholder="Masukkan Tgl BAST" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_ppk_bast">Nama PPK <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_ppk_bast" name="id_ppk_bast"  placeholder="--Pilih Data--"    class="custom-select" >
                                                        <option value="">--Pilih Data--</option>
                                                        <?php 
                                                        $id_ppk_bast_options = $comp_model -> bast_id_ppk_bast_option_list();
                                                        if(!empty($id_ppk_bast_options)){
                                                        foreach($id_ppk_bast_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('id_ppk_bast',$value, "");
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
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-submit-btn-holder text-center mt-3">
                                    <div class="form-ajax-status"></div>
                                    <button class="btn btn-primary" type="submit">
                                        Simpan
                                        <i class="fa fa-send"></i>
                                    </button>
                                </div>
                            </form>
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
                        <a  class="btn btn-primary" href="<?php print_link("bast") ?>">
                            <i class="fa fa-arrow-left "></i>                               
                            Kembali 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
