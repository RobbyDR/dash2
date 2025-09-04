<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<div class="table-responsive">
    <table class="table table-sm text-white" id="tabelklienlspro">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NamaPerusahaan</th>
                <th scope="col">Importir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getklienlspro as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['perusahaan'] ?></td>
                    <td><?= $row['importir'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabelklienlspro').DataTable();
    });

    feather.replace();
</script>