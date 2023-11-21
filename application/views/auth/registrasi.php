<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                    <div class=" form-group">
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Alamat Email">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="password" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                               
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="password" value="<?= set_value('password'); ?>" class="form-control form-control-user" id="password" placeholder="Ulangi Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Daftar Akun
                                            </button>
                                        </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth'); ?>">Sudah Punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>