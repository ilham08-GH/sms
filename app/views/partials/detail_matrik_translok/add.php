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
                        <form id="detail_matrik_translok-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("detail_matrik_translok/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-id_matrik_translok"  value="<?php  echo $this->set_field_value('id_matrik_translok',""); ?>" type="hidden" placeholder="Masukkan Id Matrik Translok"  required="" name="id_matrik_translok"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_user">Nama <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-id_user" name="id_user"  placeholder="-- Pilih Data --"    class="custom-select" >
                                                        <option value="">-- Pilih Data --</option>
                                                        <?php 
                                                        $id_user_options = $comp_model -> detail_matrik_translok_id_user_option_list();
                                                        if(!empty($id_user_options)){
                                                        foreach($id_user_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('id_user',$value, "");
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
                                                <label class="control-label" for="volume">Volume <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-volume"  value="<?php  echo $this->set_field_value('volume',""); ?>" type="number" placeholder="Masukkan Volume" step="1"  required="" name="volume"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input id="ctrl-satuan"  value="<?php  echo $this->set_field_value('satuan',"13"); ?>" type="hidden" placeholder="Masukkan Satuan" list="satuan_list"  required="" name="satuan"  class="form-control " />
                                            <datalist id="satuan_list">
                                                <?php 
                                                $satuan_options = $comp_model -> detail_matrik_translok_satuan_option_list();
                                                if(!empty($satuan_options)){
                                                foreach($satuan_options as $option){
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
                                                        <label class="control-label" for="keterangan">Keterangan Tgl Translok <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <textarea placeholder="Masukkan Keterangan Tgl Translok" id="ctrl-keterangan"  required="" rows="5" name="keterangan" class=" form-control"><?php  echo $this->set_field_value('keterangan',""); ?></textarea>
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Silakan masukkan teks</div>-->
                                                        </div>
                                                        <small class="form-text">Masukkan Tgl Translok Misal: 5,6,8 Januari 2026</small>
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
                                    <div class="col-md-6 comp-grid">
                                        <div class=""><div><br></div>
                                        </div>
                                        <a  class="btn btn-primary" href="<?php print_link("matrik_translok/list") ?>">
                                            <i class="fa fa-arrow-left "></i>                               
                                            Kembali 
                                        </a>
                                    </div>
                                    <div class="col-md-6 comp-grid">
                                        <div class=""><div class="text-right"><br>
                                            <a 
                                                href="<?php print_link('detail_matrik_translok/list/id_matrik_translok/' . $this->set_field_value('id_matrik_translok')); ?>" 
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
