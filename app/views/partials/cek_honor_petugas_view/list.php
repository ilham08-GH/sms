<?php 
// Check if current user role
$user_role = strtolower(USER_ROLE);
$is_mitra = ($user_role == 'mitra');

// check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("cek_honor_petugas_view/add");
$can_edit = ACL::is_allowed("cek_honor_petugas_view/edit");
$can_view = ACL::is_allowed("cek_honor_petugas_view/view");
$can_delete = ACL::is_allowed("cek_honor_petugas_view/delete");
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
    <?php if( $show_header == true ){ ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="record-title">Cek Honor Petugas</h4>
                </div>
                <div class="col-sm-4">
                    <form  class="search" action="<?php print_link('cek_honor_petugas_view'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control form-control-sm" type="text" name="search"  placeholder="Masukkan NIK Petugas" />
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 comp-grid">
                <?php $this :: display_page_errors(); ?>
                <div class="animated fadeIn page-content">
                    <div id="cek_honor_petugas_view-list-records">
                        <div id="page-report-body" class="table-responsive">
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header bg-light">
                                    <tr>
                                        <th class="td-sno">#</th>
                                        <th class="td-bulan">Bulan</th>
                                        <th class="td-tahun">Tahun</th>
                                        <th class="td-nama_petugas">Nama Petugas</th>
                                        <th class="td-uraian_kegiatan">Uraian Kegiatan</th>
                                        <th class="td-volume_bast text-center">Volume</th>
                                        <th class="td-nama_satuan">Satuan</th>
                                        <th class="td-harga_satuan text-right">Harga Satuan</th>
                                        <th class="td-total_honor text-right">Total Honor</th>
                                        <th class="td-terbit_sp2d text-center">SP2D</th>
                                        <th class="td-tgl_sp2d">Tgl SP2D</th>
                                    </tr>
                                </thead>
                                
                                <?php 
                                // Data hanya tampil jika sedang Search ATAU User adalah Mitra
                                if( (!empty($_GET['search']) || $is_mitra) && !empty($records) ){ 
                                ?>
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <?php
                                    $counter = 0;
                                    foreach($records as $data){
                                        $counter++;
                                    ?>
                                    <tr>
                                        <th class="td-sno small text-muted"><?php echo $counter; ?></th>
                                        <td class="td-bulan"><strong><?php echo $data['bulan']; ?></strong></td>
                                        <td class="td-tahun"><?php echo $data['tahun']; ?></td>
                                        <td class="td-nama_petugas small"><?php echo $data['nama_petugas']; ?></td>
                                        <td class="td-uraian_kegiatan small"><?php echo $data['uraian_kegiatan']; ?></td>
                                        <td class="td-volume_bast text-center"><?php echo $data['volume_bast']; ?></td>
                                        <td class="td-nama_satuan small"><?php echo $data['nama_satuan']; ?></td>
                                        <td class="td-harga_satuan text-right">
                                            <?= number_format((int)($data['harga_satuan'] ?? 0), 0, ',', '.') ?>
                                        </td>
                                        <td class="td-total_honor text-right font-weight-bold text-primary">
                                            <?= number_format((int)($data['total_honor'] ?? 0), 0, ',', '.') ?>
                                        </td>
                                        <td class="td-terbit_sp2d text-center">
                                            <?php if ((int)$data['terbit_sp2d'] >= 1) { ?>
                                                <i class="fa fa-check text-success"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-clock-o text-muted"></i>
                                            <?php } ?>
                                        </td>
                                        <td class="td-tgl_sp2d small"><?php echo $data['tgl_sp2d']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <?php } ?>
                            </table>

                            <?php 
                            // Tampilkan pesan "Data tidak ditemukan" HANYA jika sedang mencari tapi hasil nihil
                            if(!empty($_GET['search']) && empty($records)){ ?>
                            <div class="text-center bg-light border-top text-muted animated bounce p-4">
                                <i class="fa fa-ban fa-3x mb-3"></i>
                                <h4>Data tidak ditemukan</h4>
                                <p>Pastikan NIK yang dimasukkan benar.</p>
                            </div>
                            <?php } ?>

                        </div>

                        <?php 
                        // PAGINATION PERBAIKAN: Hanya dirender jika ada records DAN sedang dalam mode pencarian/mitra
                        if($show_footer && !empty($records) && (!empty($_GET['search']) || $is_mitra)){ ?>
                        <div class="border-top mt-2">
                            <div class="row justify-content-center p-3">
                                <div class="col">
                                    <?php if($show_pagination){
                                        $pager = new Pagination($total_records, $record_count);
                                        $pager->route = $this->route; 
                                        $pager->render();
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>