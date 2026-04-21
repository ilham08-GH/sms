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
                <div class="col-md-6 ">
                    <h4 class="record-title">Tambah Petugas <?php  echo $this->set_field_value('kegiatan',""); ?></h4>
                    <div class=""><?php
                        $ambilbulan = (int) ($_GET['bulan'] ?? 0);
                        $nama_bulan = [
                        1  => 'Januari',
                        2  => 'Februari',
                        3  => 'Maret',
                        4  => 'April',
                        5  => 'Mei',
                        6  => 'Juni',
                        7  => 'Juli',
                        8  => 'Agustus',
                        9  => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember',
                        ];
                        ?>
                        <span class="font-weight-bold text-primary">
                            Periode: <?= $nama_bulan[$ambilbulan] ?? '' ?>
                        </span>
                        <span class="font-weight-bold text-primary">
                            <?= $_GET['tahun'] ?? '' ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 comp-grid">
                    <div class=""><a class="btn btn-success"
                        href="<?= print_link("copy_spk_to_detail?id_matrik_honor=" . $this->set_field_value('id_matrik_honor', '')) ?>">
                        <i class="fa fa-copy"></i> Copy Petugas dari Kegiatan sebelumnya
                    </a>
                </div>
            </div>
            <div class="col-md-2 comp-grid">
                <div class=""><a class="btn btn-info"
                    href="<?php 
                    echo print_link("ed_detail_matrik_honor?id_matrik_honor=" 
                    . urlencode($_GET['id_matrik_honor']) 
                    . "&rincian_output_detail=" 
                    . urlencode($_GET['rincian_output_detail'])
                    ); 
                    ?>">
                    <i class="fa fa-upload"></i> Import Excel
                </a>
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
            <div class="col-md-12 comp-grid">
                <?php $this :: display_page_errors(); ?>
                <div  class="bg-light p-3 animated fadeIn page-content">
                    <form id="detail_matrik_honor-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("detail_matrik_honor/add?csrf_token=$csrf_token") ?>" method="post">
                        <div>
                            <input id="ctrl-id_matrik_honor"  value="<?php  echo $this->set_field_value('id_matrik_honor',""); ?>" type="hidden" placeholder="Masukkan Id Matrik Honor"  readonly required="" name="id_matrik_honor"  class="form-control " />
                                <input id="ctrl-rincian_output_detail"  value="<?php  echo $this->set_field_value('rincian_output_detail',""); ?>" type="hidden" placeholder="Masukkan Rincian Output Detail"  readonly required="" name="rincian_output_detail"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_petugas">Petugas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_petugas" name="id_petugas"  placeholder="--Pilih Data--"    class="custom-select" >
                                                        <option value="">--Pilih Data--</option>
                                                        <?php 
                                                        $id_petugas_options = $comp_model -> detail_matrik_honor_id_petugas_option_list();
                                                        if(!empty($id_petugas_options)){
                                                        foreach($id_petugas_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('id_petugas',$value, "");
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
                                                <label class="control-label" for="jabatan">Jabatan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-jabatan" name="jabatan"  placeholder="--Pilih Data--"    class="custom-select" >
                                                        <option value="">--Pilih Data--</option>
                                                        <?php 
                                                        $jabatan_options = $comp_model -> detail_matrik_honor_jabatan_option_list();
                                                        if(!empty($jabatan_options)){
                                                        foreach($jabatan_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('jabatan',$value, "");
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
                                                <label class="control-label" for="volume_spk">Volume SPK <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-volume_spk"  value="<?php  echo $this->set_field_value('volume_spk',""); ?>" type="number" placeholder="Volume SPK" step="1"  required="" name="volume_spk"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="volume_bast">Volume BAST <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-volume_bast"  value="<?php  echo $this->set_field_value('volume_bast',""); ?>" type="number" placeholder="Volume BAST" step="1"  readonly required="" name="volume_bast"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="satuan">Satuan <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  id="ctrl-satuan" name="satuan"  placeholder="--Pilih Data--"    class="custom-select" >
                                                                <option value="">--Pilih Data--</option>
                                                                <?php 
                                                                $satuan_options = $comp_model -> detail_matrik_honor_satuan_option_list();
                                                                if(!empty($satuan_options)){
                                                                foreach($satuan_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('satuan',$value, "");
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
                                                        <label class="control-label" for="harga_satuan">Harga Satuan <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-harga_satuan"  value="<?php  echo $this->set_field_value('harga_satuan',""); ?>" type="number" placeholder="Masukkan Harga Satuan" step="1"  required="" name="harga_satuan"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="total">Total <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-total"  value="<?php  echo $this->set_field_value('total',""); ?>" type="number" placeholder="Total" step="1"  readonly required="" name="total"  class="form-control " />
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
                                    <div class="col-md-8 comp-grid">
                                        <div class=""><div><br></div>
                                            <style>
                                                /* ❌ JANGAN AUTO CLOSE */
                                                .alert-danger,
                                                .alert-warning {
                                                opacity: 1 !important;
                                                display: block !important;
                                                }
                                                /* ✅ hijau tetap default (auto close) */
                                            </style>
                                        </div>
                                        <a  class="btn btn-primary" href="<?php print_link("matrik_honor/list") ?>">
                                            <i class="fa fa-arrow-left "></i>                               
                                            Kembali 
                                        </a>
                                    </div>
                                    <div class="col-md-4 comp-grid">
                                        <div class=""><div class="text-right"><br>
                                            <a 
                                                href="<?php print_link('detail_matrik_honor/list/id_matrik_honor/' . $this->set_field_value('id_matrik_honor')); ?>" 
                                                class="btn btn-success"
                                                >
                                                <i class="fa fa-users"></i> List Petugas
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
