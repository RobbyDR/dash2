<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<!-- <div class="table-responsive">
    <table class="table table-sm text-white" id="tabelspmkalibrasi">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Laboratorium</th>
                <th scope="col">Nama</th>
                <th scope="col">SPM</th>
                <th scope="col">Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getspmkalibrasi as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['lab'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['spm'] ?> hari</td>
                    <td><?= $row['lokasi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->

<script>
    // new DataTable('#tabelspmkalibrasi');
    $(document).ready(function() {
        $('#tabelspmkalibrasi').DataTable();
    });

    feather.replace();
</script>