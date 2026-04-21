<?php
$records       = $this->view->records ?? [];
$bulan         = $this->view->bulan ?? date('m');
$tahun         = $this->view->tahun ?? date('Y');
$jumlah_hari   = $this->view->jumlah_hari ?? 0;

$nama_bulan = [1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'Mei',6=>'Jun',
               7=>'Jul',8=>'Agu',9=>'Sep',10=>'Okt',11=>'Nov',12=>'Des'];

$today = date('Y-m-d');
?>

<div class="card">
    <div class="card-header">
        <h4>Jadwal Translok</h4>
        <form method="get" class="row g-2">
            <div class="col-md-3">
                <select name="bulan" class="form-control">
                    <?php for($b=1;$b<=12;$b++): ?>
                        <option value="<?= $b ?>" <?= ($bulan==$b?'selected':'') ?>><?= $nama_bulan[$b] ?></option>
                    <?php endfor ?>
                </select>
            </div>
            <div class="col-md-3">
                <select name="tahun" class="form-control">
                    <?php for($t=date('Y')-3;$t<=date('Y')+1;$t++): ?>
                        <option value="<?= $t ?>" <?= ($tahun==$t?'selected':'') ?>><?= $t ?></option>
                    <?php endfor ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Tampilkan</button>
            </div>
        </form>
    </div>

    <div class="card-body table-responsive" style="overflow-x:auto;">
        <table class="table table-bordered table-sm text-center align-middle">
            <thead>
                <tr>
                    <th>Nama Petugas</th>
                    <?php for($i=1;$i<=$jumlah_hari;$i++): ?>
                        <?php $tgl_col = "$tahun-".str_pad($bulan,2,'0',STR_PAD_LEFT)."-".str_pad($i,2,'0',STR_PAD_LEFT); ?>
                        <th class="<?= ($tgl_col==$today?'table-primary':'') ?>"><?= $i ?></th>
                    <?php endfor ?>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($records)): ?>
                <?php foreach($records as $row): ?>
                    <tr>
                        <td class="fw-bold text-start"><?= $row['nama_user'] ?></td>
                        <?php for($i=1;$i<=$jumlah_hari;$i++): ?>
                            <?php $col = str_pad($i,2,'0',STR_PAD_LEFT); ?>
                            <td class="<?= ($today=="$tahun-".str_pad($bulan,2,'0',STR_PAD_LEFT)."-".str_pad($i,2,'0',STR_PAD_LEFT)?'table-primary':'') ?>">
                                <?= $row[$col] ?? '' ?>
                            </td>
                        <?php endfor ?>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="<?= $jumlah_hari+1 ?>" class="text-center">Tidak ada data</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
