<div class="container-fluid">
    <div class="alert alert-success">
        <i class="fas fa-university"></i> Form Input Mata Kuliah
    </div>

    <form action="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>">
        <div class="form-group">
            <label for="">Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control">
            <?php echo form_error('kode_matakuliah', '<div class="text-danger small ml-3">') ?>
        </div>
        <div class="form-group">
            <label for="">Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control">
            <?php echo form_error('nama_matakuliah', '<div class="text-danger small ml-3">') ?>
        </div>
        <div class="form-group">
            <label for="">SKS</label>
            <select name="sks" class="form-control" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Semester</label>
            <select name="semester" class="form-control" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Program Sturdi</label>
            <select name="nama_prodi" id="" class="form-control">
                <option value="">--Pilih Program Studi--</option>
                <?php foreach ($prodi as $prd) : ?>
                    <option value="<?php echo $prd->nama_prodi ?>">
                        <?php echo $prd->nama_prodi ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-5"> Simpan</button>

    </form>