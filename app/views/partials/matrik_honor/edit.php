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
                    <h4 class="record-title">Edit  Matrik Honor</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("matrik_honor/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-id_tim"  value="<?php  echo $data['id_tim']; ?>" type="hidden" placeholder="Masukkan Tim" list="id_tim_list"  readonly required="" name="id_tim"  class="form-control " />
                                    <datalist id="id_tim_list">
                                        <?php 
                                        $id_tim_options = $comp_model -> matrik_honor_id_tim_option_list();
                                        if(!empty($id_tim_options)){
                                        foreach($id_tim_options as $option){
                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                        ?>
                                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </datalist>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_rincian_output">Rincian Output <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_rincian_output" data-load-select-options="id_nama_survei" name="id_rincian_output"  placeholder="--Pilih Data--"    class="custom-select" >
                                                        <option value="">--Pilih Data--</option>
                                                        <?php
                                                        $rec = $data['id_rincian_output'];
                                                        $id_rincian_output_options = $comp_model -> matrik_honor_id_rincian_output_option_list();
                                                        if(!empty($id_rincian_output_options)){
                                                        foreach($id_rincian_output_options as $option){
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
                                                <label class="control-label" for="id_nama_survei">Nama Survei <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_nama_survei" data-load-path="<?php print_link('api/json/matrik_honor_id_nama_survei_option_list') ?>" name="id_nama_survei"  placeholder="--Pilih Data--"    class="custom-select" >
                                                        <?php
                                                        $rec = $data['id_nama_survei'];
                                                        $id_nama_survei_options = $comp_model -> matrik_honor_id_nama_survei_option_list($data['id_rincian_output']);
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
                                                <label class="control-label" for="uraian_kegiatan">Uraian Kegiatan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-uraian_kegiatan"  value="<?php  echo $data['uraian_kegiatan']; ?>" type="text" placeholder="Uraian Kegiatan"  required="" name="uraian_kegiatan"  class="form-control " />
                                                    </div>
                                                    <small class="form-text">Harus Lengkap. Misal : Pencacahan KSA Padi, Pencacahan SHK 2.1 Outlet dsb Karena akan dipakai SPK dan BAST.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="id_bulan_pelaksanaan">Bulan Pelaksanaan <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  id="ctrl-id_bulan_pelaksanaan" name="id_bulan_pelaksanaan"  placeholder="--Pilih Data--"    class="custom-select" >
                                                            <option value="">--Pilih Data--</option>
                                                            <?php
                                                            $rec = $data['id_bulan_pelaksanaan'];
                                                            $id_bulan_pelaksanaan_options = $comp_model -> matrik_honor_id_bulan_pelaksanaan_option_list();
                                                            if(!empty($id_bulan_pelaksanaan_options)){
                                                            foreach($id_bulan_pelaksanaan_options as $option){
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
                                                        <select required=""  id="ctrl-tahun" name="tahun"  placeholder="--Pilih Data--"    class="custom-select" >
                                                            <option value="">--Pilih Data--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="jangka_waktu">Jangka Waktu <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-jangka_waktu"  value="<?php  echo $data['jangka_waktu']; ?>" type="text" placeholder="Masukkan Jangka Waktu"  required="" name="jangka_waktu"  class="form-control " />
                                                        </div>
                                                        <small class="form-text">Misal: 01-31 Maret 2025, sesuai format untuk pembuatan SPK dan BAST.</small>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="status_pengajuan_honor">Status Pengajuan Honor <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <select required=""  id="ctrl-status_pengajuan_honor" name="status_pengajuan_honor"  placeholder="Status Pengajuan Honor"    class="custom-select" >
                                                                    <option value="">Status Pengajuan Honor</option>
                                                                    <?php
                                                                    $status_pengajuan_honor_options = Menu :: $status_pengajuan_honor;
                                                                    $field_value = $data['status_pengajuan_honor'];
                                                                    if(!empty($status_pengajuan_honor_options)){
                                                                    foreach($status_pengajuan_honor_options as $option){
                                                                    $value = $option['value'];
                                                                    $label = $option['label'];
                                                                    $selected = ( $value == $field_value ? 'selected' : null );
                                                                    ?>
                                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                        <?php echo $label ?>
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
