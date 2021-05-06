<div class="container-fluid">
    <div class="alert alert-success">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!</h4>
        <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi Akademik,
            Anda login sebagai <strong><?php echo $level; ?></strong></p>
        <hr>
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Control Panel
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="model-title" id="exampleModalLabel"> <i class="fas fa-cogs"></i> Control Panel
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">MAHASISWA</p>
                            </a>
                            <i class="fas fa-user-graduate fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Tahun Akademik</p>
                            </a>
                            <i class="fas fa-calendar-alt fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KRS</p>
                            </a>
                            <i class="fas fa-edit fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KHS</p>
                            </a>
                            <i class="fas fa-file-alt fa-3x"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">INPUT NILAI</p>
                            </a>
                            <i class="fas fa-sort-numeric-down fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">CETAK TRANSKIP</p>
                            </a>
                            <i class="fas fa-print fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KATEGORI</p>
                            </a>
                            <i class="fas fa-list-ul fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">INFO KAMPUS</p>
                            </a>
                            <i class="fas fa-bullhorn fa-3x"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">IDENTITAS</p>
                            </a>
                            <i class="fas fa-id-card-alt fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">TENTANG KAMPUS</p>
                            </a>
                            <i class="fas fa-info-circle fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">FASILITAS</p>
                            </a>
                            <i class="fas fa-laptop fa-3x"></i>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">GALLERY</p>
                            </a>
                            <i class="fas fa-images fa-3x"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>