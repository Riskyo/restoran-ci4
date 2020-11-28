<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $eror = session()->getFlashdata('info');
        echo '</div>';
    }
    ?>
</div>

<div class="col">
    <h3>Insert Data</h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/kategori/insert') ?>" method="POST">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" required class="form-control">
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" required class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN">
        </div>
</div>

</form>

<?= $this->endSection() ?>