<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';

        $eror = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key . "=>" . $value;
            echo '</br>';
        }

        echo '</div>';
    }
    ?>
</div>

<div class="col">
    <h3>Update Data</h3>
</div>

<div class="col-8">
    <form action="<?= base_url() ?>/admin/kategori/update" method="POST">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
        </div>


        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">
        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN">
        </div>
</div>

<?= $this->endSection() ?>