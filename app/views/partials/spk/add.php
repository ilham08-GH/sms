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
                    <h4 class="record-title">Buat SPK</h4>
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
                    <form id="spk-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("spk/add?csrf_token=$csrf_token") ?>" method="post">
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nomor_spk">Nomor SPK <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="">
                                            <input id="ctrl-nomor_spk"  value="<?php  echo $this->set_field_value('nomor_spk',""); ?>" type="text" placeholder="Masukkan Nomor SPK"  required="" name="nomor_spk"  data-url="api/json/spk_nomor_spk_value_exist/" data-loading-msg="Sedang memeriksa ..." data-available-msg="Available" data-unavailable-msg="Data sudah ada" class="form-control  ctrl-check-duplicate" />
                                                <div class="check-status"></div> 
                                            </div>
                                            <small class="form-text">Misal: 3525.1514/SPKR/10/2025</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="bulan_spk">Bulan SPK <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-bulan_spk" data-load-select-options="id_petugas_spk" name="bulan_spk"  placeholder="--Pilih Data--"    class="custom-select" >
                                                    <option value="">--Pilih Data--</option>
                                                    <?php 
                                                    $bulan_spk_options = $comp_model -> spk_bulan_spk_option_list();
                                                    if(!empty($bulan_spk_options)){
                                                    foreach($bulan_spk_options as $option){
                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                    $selected = $this->set_field_selected('bulan_spk',$value, "");
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
                                            <label class="control-label" for="id_petugas_spk">Petugas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required=""  id="ctrl-id_petugas_spk" data-load-path="<?php print_link('api/json/spk_id_petugas_spk_option_list') ?>" name="id_petugas_spk"  placeholder="--Pilih Data--"    class="custom-select" >
                                                    <option value="">--Pilih Data--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tgl_spk">Tgl SPK <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input id="ctrl-tgl_spk" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('tgl_spk',""); ?>" type="datetime" name="tgl_spk" placeholder="Masukkan Tgl SPK" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                <label class="control-label" for="tgl_selesai_spk">Tgl Selesai SPK <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input id="ctrl-tgl_selesai_spk" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('tgl_selesai_spk',""); ?>" type="datetime" name="tgl_selesai_spk" placeholder="Masukkan Tgl Selesai SPK" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                    <label class="control-label" for="id_ppk">Nama PPK <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  id="ctrl-id_ppk" name="id_ppk"  placeholder="--Pilih Data--"    class="custom-select" >
                                                            <option value="">--Pilih Data--</option>
                                                            <?php 
                                                            $id_ppk_options = $comp_model -> spk_id_ppk_option_list();
                                                            if(!empty($id_ppk_options)){
                                                            foreach($id_ppk_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $selected = $this->set_field_selected('id_ppk',$value, "");
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
                                                    <label class="control-label" for="honor_pelatihan">Denda (Jika ada) <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-honor_pelatihan"  value="<?php  echo $this->set_field_value('honor_pelatihan',"0"); ?>" type="number" placeholder="Denda" step="1"  required="" name="honor_pelatihan"  class="form-control " />
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
                                <a  class="btn btn-primary" href="<?php print_link("spk") ?>">
                                    <i class="fa fa-arrow-left "></i>                               
                                    Kembali 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
