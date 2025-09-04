<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<div class="table-responsive">
    <table class="table table-sm text-white" id="tabelruanglingkuplspro">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Skema</th>
                <th scope="col">Kategori</th>
                <th scope="col">Sub Kategori</th>
                <th scope="col">Jenis Produk/ Proses/ Jasa</th>
                <th scope="col">Nomor Acuan Standar</th>
                <th scope="col">Judul Acuan Standar</th>
                <th scope="col">Skema Sertifikasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getlingkuplspro as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['skema'] ?></td>
                    <td><?= $row['kategori'] ?></td>
                    <td><?= $row['subkategori'] ?></td>
                    <td><?= $row['jenis'] ?></td>
                    <td><?= $row['noacuan'] ?></td>
                    <td><?= $row['judulacuan'] ?></td>
                    <td><?= $row['skemasertifikasi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    // new DataTable('#tabelruanglingkuplspro');
    $(document).ready(function() {
        $('#tabelruanglingkuplspro').DataTable();
    });

    feather.replace();
</script>