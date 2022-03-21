<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Asal SMP</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($results as $data) {
    ?>
    <tr>
        <th scope="row"><?= $data['no_daftar'] ?></th>
        <td><?= $data['nama_lengkap'] ?></td>
        <td><?= $data['alamat_lengkap'] ?></td>
        <td><?= (int)$data['jk'] ? 'Laki-Laki' : 'Perempuan' ?></td>
        <td><?= $data['agama'] ?></td>
        <td><?= $data['asal_smp'] ?></td>
        <td><?= $data['jurusan'] ?></td>
        <td class="d-flex justify-content-around">
            <a href="?page=edit&id=<?= $data['no_daftar'] ?>" class="btn btn-secondary">Edit</a>
            <form method="post">
                <input type="hidden" name="student-id" value="<?= $data['no_daftar'] ?>">
                <button class="btn btn-danger" type="submit" name="delete">Hapus</button>
            </form>
            <a href="?page=print&id=<?= $data['no_daftar'] ?>" class="btn btn-success">Cetak</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>