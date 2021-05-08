<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Edit Mata Kuliah
    </div>

    <?php foreach ($matakuliah as $mk) : ?>
        <form method="post" action="<?php echo base_url('administrator/matakuliah/update_aksi') ?>">
            <div class="form-group">
                <label for="">Nama Mata Kuliah</label>
                <input type="hidden" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah; ?>">
                <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah; ?>">
            </div>
            <div class="form-group">
                <label for="">SKS</label>
                <select name="sks" id="" class="form-control"></select>
                <option value=""><?php echo $mk->sks ?></option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4
                <option>
                <option value="">5</option>
                <option value="">6</option>
            </div>
            <div class="form-group">
                <label for="">SKS</label>
                <select name="semester" id="" class="form-control"></select>
                <option value=""><?php echo $mk->semester ?></option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
            </div>
            <div class="form-group">
                <label for="">Program Studi</label>
                <select name="nama_prodi" id="" class="form-control"></select>
                <option value=""><?php echo $mk->semester ?></option>
                <?php foreach ($prodi as $prd) : ?>
                    <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
                <?php endforeach; ?>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>

    <?php endforeach; ?>

</div>