<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8 m-auto">
            <h2 class="my-5">Form Tambah</h2>
            <form action="/pages/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" id="pendidikan" name="pendidikan" autofocus value="<?= old('pendidikan'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pendidikan'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="waktu_pendidikan" class="col-sm-2 col-form-label">Waktu Pendidikan (bulan tahun - bulan tahun)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('waktu_pendidikan')) ? 'is-invalid' : ''; ?>" id="waktu_pendidikan" name="waktu_pendidikan" value="<?= old('waktu_pendidikan'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('waktu_pendidikan'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sertifikat" class="col-sm-2 col-form-label">Sertifikat 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sertifikat" name="sertifikat_1" value="<?= old('sertifikat_1'); ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sertifikat" class="col-sm-2 col-form-label">Sertifikat 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sertifikat" name="sertifikat_2" value="<?= old('sertifikat_2'); ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sertifikat" class="col-sm-2 col-form-label">Sertifikat 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sertifikat" name="sertifikat_3" value="<?= old('sertifikat_3'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>