<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<!-- <div class="table-responsive">
    <table class="table table-sm text-white" id="tabeltarifpengujian">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Satuan</th>
                <th scope="col">Tarif</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gettarifpengujian as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td class="text-wrap"><?= $row['jenis'] ?>: <?= $row['jenis1'] ?></td>
                    <td class="text-wrap"><?= $row['jenis1'] ?>; <?= $row['jenis2'] ?>; <?= $row['jenis3'] ?></td>
                    <td><?= $row['satuan'] ?></td>
                    <td>Rp . <?= $row['tarif'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->

<script>
    // new DataTable('#tabeltarifpengujian');
    $(document).ready(function() {
        $('#tabeltarifpengujian').DataTable();
    });

    feather.replace();
</script>