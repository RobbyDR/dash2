<header class="mb-auto">
    <div>
        <h3 class="float-md-center mb-0"><?= $judul ?></h3>
    </div>
</header>

<main class="px-3">

<div class="table-responsive">
    <table class="table table-sm text-white" id="tabelspmkalibrasi">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Suhu</th>
                <th scope="col">Tekanan</th>
                <th scope="col">Ketinggian</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getdatasuhu as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['temp'] ?></td>
                    <td><?= $row['pressure'] ?></td>
                    <td><?= $row['altitude'] ?> hari</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</main>

<footer class="mt-auto text-white-50">
    <p class="text-white">© Copyright Balai Besar Standardisasi dan Pelayanan Jasa Industri Logam dan Mesin </p>
</footer>