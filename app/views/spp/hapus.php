<?php include "../app/views/templates/header.php"; ?>

<div class="container mt-5">
    <h3 class="fw-bold">Konfirmasi Hapus Data SPP</h3>
    <p>Apakah Anda yakin ingin menghapus data berikut?</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= $spp['id_spp'] ?></td>
        </tr>
        <tr>
            <th>Tahun</th>
            <td><?= $spp['tahun'] ?></td>
        </tr>
        <tr>
            <th>Nominal</th>
            <td><?= $spp['nominal'] ?></td>
        </tr>
    </table>

    <form action="<?= urlTo('spp/delete/' . $spp['id_spp']) ?>" method="POST">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="<?= urlTo('spp') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php include "../app/views/templates/footer.php"; ?>
