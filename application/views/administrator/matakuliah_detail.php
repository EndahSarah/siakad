<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Mata Kuliah
    </div>
    <table class="table table-hover table-striped table-bordered">
        <?php foreach ($detail as $dt) : ?>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th><?php echo $dt->kode_matakuliah; ?></th>
            </tr>
            <tr>
                <th>Nama Mata Kuliah</th>
                <th><?php echo $dt->nama_matakuliah; ?></th>
            </tr>
            <tr>
                <th>SKS</th>
                <th><?php echo $dt->sks; ?></th>
            </tr>
            <tr>
                <th>Semester</th>
                <th><?php echo $dt->semester; ?></th>
            </tr>
            <tr>
                <th>Program Studi</th>
                <th><?php echo $dt->nama_prodi; ?></th>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php echo anchor('administrator/matakuliah', '<div class="btn btn-sm btn-primary">Back</div>') ?>
</div>