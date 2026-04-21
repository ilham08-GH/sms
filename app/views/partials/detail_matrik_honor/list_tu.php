<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("detail_matrik_honor/add");
$can_edit = ACL::is_allowed("detail_matrik_honor/edit");
$can_view = ACL::is_allowed("detail_matrik_honor/view");
$can_delete = ACL::is_allowed("detail_matrik_honor/delete");
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
                <div class="col-md-7 ">
                    <h4 class="record-title">Detail Matrik Honor</h4>
                    <div class=""><?php
                        $first = $records[0] ?? null;
                        ?>
                        <span class="font-weight-bold text-primary"><?= $first['master_bulan_bulan'] ?? '' ?></span>
                        <span class="font-weight-bold text-primary"><?= $first['matrik_honor_tahun'] ?? '' ?></span>: 
                        <span><?= $first['matrik_honor_uraian_kegiatan'] ?? '' ?></span>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                        <form  class="search" action="<?php print_link('detail_matrik_honor/List'); ?>" method="get">
                            <div class="input-group">
                                <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <hr />
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Pastikan Volume BAST sesuai sebelum Cetak BAST</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
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
                    <div class="col-md-12 comp-grid">
                        <div class=""><div class="alert alert-info">
                            <strong>Info!</strong> Jika ingin merubah Status silakan Klik pada baris status yang ingin diubah.
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
                    <div  class=" animated fadeIn page-content">
                        <div id="detail_matrik_honor-list_tu-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header bg-light">
                                        <tr>
                                            <th class="td-sno">#</th>
                                            <th  class="td-master_petugas_nama_petugas"> Nama Petugas</th>
                                            <th  class="td-master_petugas_alamat"> Alamat</th>
                                            <th  class="td-master_petugas_kecamatan"> Kecamatan</th>
                                            <th  class="td-volume_spk"> Volume SPK</th>
                                            <th  class="td-volume_bast"> Volume BAST</th>
                                            <th  class="td-harga_satuan"> Harga Satuan</th>
                                            <th  class="td-master_satuan_satuan"> Satuan</th>
                                            <th  class="td-total"> Total SPK</th>
                                            <th  class="td-total_bast"> Total BAST</th>
                                            <th  class="td-kak"> KAK</th>
                                            <th  class="td-sk"> SK</th>
                                            <th  class="td-spk_ttd"> SPK Ttd</th>
                                            <th  class="td-bast_ttd"> BAST Ttd</th>
                                            <th  class="td-selesai_fp"> Selesai FP</th>
                                            <th  class="td-pengajuan_spm"> Pengajuan SPM</th>
                                            <th  class="td-terbit_sp2d"> Terbit SP2D</th>
                                            <th  class="td-tgl_sp2d"> </th>
                                            <th class="td-btn"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if(!empty($records)){
                                    ?>
                                    <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <tr>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-master_petugas_nama_petugas"> <?php echo $data['master_petugas_nama_petugas']; ?></td>
                                            <td class="td-master_petugas_alamat"> <?php echo $data['master_petugas_alamat']; ?></td>
                                            <td class="td-master_petugas_kecamatan"> <?php echo $data['master_petugas_kecamatan']; ?></td>
                                            <td class="td-volume_spk"> <?php echo $data['volume_spk']; ?></td>
                                            <td class="td-volume_bast"> <span><b><?php echo $data['volume_bast']; ?></b></span></td>
                                            <td class="td-harga_satuan">  <span><?= number_format((int)($data['harga_satuan'] ?? 0), 0, ',', '.') ?></span>
                                            </td>
                                            <td class="td-master_satuan_satuan"> <?php echo $data['master_satuan_satuan']; ?></td>
                                            <td class="td-total"><span><?= number_format((int)($data['total'] ?? 0), 0, ',', '.') ?></span>
                                            </td>
                                            <td class="td-total_bast"><span><b><?= number_format((int)($data['total_bast'] ?? 0), 0, ',', '.') ?></b></span>
                                            </td>
                                            <td class="td-kak"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="kak" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['kak']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-sk"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="sk" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['sk']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-spk_ttd"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="spk_ttd" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['spk_ttd']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-bast_ttd"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="bast_ttd" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['bast_ttd']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-selesai_fp"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="selesai_fp" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['selesai_fp']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-pengajuan_spm"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="pengajuan_spm" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['pengajuan_spm']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    // Event delegation untuk semua toggle-field
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field'); // bisa kak, sk, spk, bast
                                                    if(!el) return;
                                                    // Cegah klik ganda saat request berjalan
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field; // kolom yang di-toggle
                                                    const i = el.querySelector('i');
                                                    // Simpan class lama dan tampilkan loading
                                                    const oldClass = i.className;
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>', {
                                                    method: 'POST',
                                                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status === 'ok'){
                                                    el.dataset.value = resp.value;
                                                    i.className = resp.html.match(/class="([^"]+)"/)[1]; // ganti class dari response HTML
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err => {
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(() => {
                                                    delete el.dataset.locked;
                                                    });
                                                    });
                                                </script>
                                                <style>
                                                    /* Animasi loading putar */
                                                    .spin {
                                                    animation: spin 1s linear infinite;
                                                    }
                                                    @keyframes spin {
                                                    100% { transform: rotate(360deg); }
                                                    }
                                                </style>
                                            </td>
                                            <td class="td-terbit_sp2d"><?php
                                                $csrf = Csrf::$token;
                                                ?>
                                                <script>
                                                    window.CSRF_TOKEN = <?= json_encode($csrf) ?>;
                                                </script>
                                                <!-- Contoh span per baris -->
                                                <span class="toggle-field" 
                                                    data-id="<?= $data['id'] ?>" 
                                                    data-field="terbit_sp2d" 
                                                    style="cursor:pointer">
                                                    <i class="bi <?= ($data['terbit_sp2d']==1?'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger') ?>"></i>
                                                </span>
                                                <script>
                                                    document.addEventListener('click', function(e){
                                                    const el = e.target.closest('.toggle-field');
                                                    if(!el) return;
                                                    if(el.dataset.locked) return;
                                                    el.dataset.locked = '1';
                                                    const id = el.dataset.id;
                                                    const field = el.dataset.field;
                                                    const i = el.querySelector('i');
                                                    const oldClass = i.className;
                                                    // loading icon
                                                    i.className = 'bi bi-arrow-repeat text-warning spin';
                                                    fetch('<?= print_link("detail_matrik_honor/toggle_field") ?>',{
                                                    method: 'POST',
                                                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                                                    body: new URLSearchParams({
                                                    id: id,
                                                    field: field,
                                                    csrf_token: window.CSRF_TOKEN
                                                    })
                                                    })
                                                    .then(res => res.json())
                                                    .then(resp => {
                                                    if(resp.status==='ok'){
                                                    // update icon toggle
                                                    i.className = 'bi ' + ((resp.value==1)? 'bi-check-circle-fill text-success':'bi-x-circle-fill text-danger');
                                                    // jika field terbit_sp2d, update tgl_sp2d
                                                    if(field==='terbit_sp2d'){
                                                    const tglCell = document.querySelector('.tgl-sp2d[data-id="'+id+'"]');
                                                    if(tglCell){
                                                    tglCell.textContent = resp.tgl_sp2d || '';
                                                    }
                                                    }
                                                    } else {
                                                    alert(resp.msg || 'Gagal update');
                                                    i.className = oldClass;
                                                    }
                                                    })
                                                    .catch(err=>{
                                                    console.error(err);
                                                    alert('Terjadi kesalahan jaringan');
                                                    i.className = oldClass;
                                                    })
                                                    .finally(()=> delete el.dataset.locked );
                                                    });
                                                </script>
                                                <style>
                                                    .spin { animation: spin 1s linear infinite; }
                                                    @keyframes spin { 100%{ transform: rotate(360deg); } }
                                                </style>
                                            </td>
                                            <td class="td-tgl_sp2d"> <?php echo $data['tgl_sp2d']; ?></td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <?php 
                                if(empty($records)){
                                ?>
                                <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                    <i class="fa fa-ban"></i> No record found
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
                        <div  class="">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-12 comp-grid">
                                        <div class=""><div><br></div>
                                        </div>
                                        <a  class="btn btn-primary" href="<?php print_link("matrik_honor/list_tu") ?>">
                                            <i class="fa fa-arrow-left "></i>                               
                                            Kembali 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
