<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<div class="table-responsive">
    <table class="table table-sm text-white" id="tabelruanglingkuppengujian">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Bidang</th>
                <th scope="col">Bahan</th>
                <th scope="col">Jenis</th>
                <th scope="col">Metode</th>
                <th scope="col">Ket</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getlingkuppengujian as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['bidang'] ?></td>
                    <td><?= $row['bahan'] ?></td>
                    <td><?= $row['jenis'] ?></td>
                    <td><?= $row['metode'] ?></td>
                    <td><?= $row['ket'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    // new DataTable('#tabelruanglingkuppengujian');
    $(document).ready(function() {
        $('#tabelruanglingkuppengujian').DataTable();
    });

    feather.replace();
</script>