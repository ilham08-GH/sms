<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Matrik Translok</h4>
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
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("matrik_translok/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-id_tim"  value="<?php  echo $data['id_tim']; ?>" type="hidden" placeholder="Masukkan Id Tim"  required="" name="id_tim"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_bulan_pengajuan">Bulan Pengajuan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_bulan_pengajuan" name="id_bulan_pengajuan"  placeholder="-- Pilih Data --"    class="custom-select" >
                                                        <option value="">-- Pilih Data --</option>
                                                        <?php
                                                        $rec = $data['id_bulan_pengajuan'];
                                                        $id_bulan_pengajuan_options = $comp_model -> matrik_translok_id_bulan_pengajuan_option_list();
                                                        if(!empty($id_bulan_pengajuan_options)){
                                                        foreach($id_bulan_pengajuan_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                        ?>
                                                        <option 
                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
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
                                                <label class="control-label" for="tahun">Tahun <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-tahun" name="tahun"  placeholder="-- Pilih Data --"    class="custom-select" >
                                                        <option value="">-- Pilih Data --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_nama_survei">Nama Survei <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_nama_survei" name="id_nama_survei"  placeholder="-- Pilih Data --"    class="custom-select" >
                                                        <option value="">-- Pilih Data --</option>
                                                        <?php
                                                        $rec = $data['id_nama_survei'];
                                                        $id_nama_survei_options = $comp_model -> matrik_translok_id_nama_survei_option_list();
                                                        if(!empty($id_nama_survei_options)){
                                                        foreach($id_nama_survei_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                        ?>
                                                        <option 
                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
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
                                                <label class="control-label" for="uraian_pengajuan">Uraian Pengajuan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <textarea placeholder="Masukkan Uraian Pengajuan" id="ctrl-uraian_pengajuan"  required="" rows="5" name="uraian_pengajuan" class=" form-control"><?php  echo $data['uraian_pengajuan']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Silakan masukkan teks</div>-->
                                                </div>
                                                <small class="form-text">Misal: Translok petugas pemeriksaan lapangan Survei IBS bulanan</small>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="ctrl-create_at"  value="<?php  echo $data['create_at']; ?>" type="hidden" placeholder="Masukkan Create At"  required="" name="create_at"  class="form-control " />
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="harga_satuan_honor">Harga Satuan <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-harga_satuan_honor"  value="<?php  echo $data['harga_satuan_honor']; ?>" type="number" placeholder="Masukkan Harga Satuan" step="1"  required="" name="harga_satuan_honor"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-ajax-status"></div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary" type="submit">
                                                Update
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
