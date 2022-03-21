
<div class="container w-100 mt-5">
    <div class="card border-primary mb-3" style="max-width: 100rem;">
        <div class="card-header">Info Pendaftaran</div>
        <div class="card-body">
        <form method="POST">
            <input type="hidden" name="student-id" value="<?= $data['no_daftar'] ?>">
            <fieldset class="form-group">
                <h5>Nama Lengkap</h5>
                <p><?= $data['nama_lengkap'] ?></p>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Alamat Lengkap</h5>
                <p><?= $data['alamat_lengkap'] ?></p>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Asal Sekolah</h5>
                <p><?= $data['asal_smp'] ?></p>
            
            </fieldset>
            <fieldset class="form-group">
                <h5>Jenis Kelamin</h5>
                <p><?= (int)$data['jk'] ? 'Laki-Laki' : 'Perempuan' ?></p>
                
            </fieldset>
            <fieldset class="form-group">
                <h5>Agama</h5>
                <p><?= $data['agama'] ?></p>
                
            </fieldset>
            <fieldset class="form-group">
                <h5>Jurusan</h5>
                <p><?= $data['jurusan'] ?></p>
            </fieldset>
        </form>
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>