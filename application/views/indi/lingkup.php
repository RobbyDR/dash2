<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan2') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<!-- <div class="table-responsive">
    <table class="table table-sm text-white" id="tabelruanglingkupkalibrasi">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kelompok</th>
                <th scope="col">Jenis</th>
                <th scope="col">Rentang</th>
                <th scope="col">Ketidakpastian</th>
                <th scope="col">Metode</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getlingkupkalibrasi as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['kelompok'] ?></td>
                    <td><?= $row['jenis'] ?></td>
                    <td><?= $row['rentang'] ?></td>
                    <td><?= $row['ketidakpastian'] ?></td>
                    <td><?= $row['metode'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->

<script>
    // new DataTable('#tabelruanglingkupkalibrasi');
    // $(document).ready(function() {
    //     $('#tabelruanglingkupkalibrasi').DataTable();
    // });

    feather.replace();
</script>