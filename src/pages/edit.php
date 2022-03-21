
<div class="container w-50 mt-5">
    <div class="card border-primary mb-3" style="max-width: 100rem;">
        <div class="card-header">Registrasi PPDB</div>
        <div class="card-body">
        <form method="POST">
            <input type="hidden" name="student-id" value="<?= $data['no_daftar'] ?>">
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Nama Lengkap</label>
                <input type="text" max="255" value="<?= $data['nama_lengkap'] ?>" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Nama">
            </fieldset>
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Alamat Lengkap</label>
                <input type="text" max="255" value="<?= $data['alamat_lengkap'] ?>"  class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Alamat">
            </fieldset>
            <fieldset class="form-group">
                <label for="exampleInputPassword1">Asal Sekolah</label>
                <input type="text" max="255" value="<?= $data['asal_smp'] ?>" class="form-control" name="asal_sekolah" id="exampleInputPassword1" placeholder="Alamat">
            </fieldset>
            <fieldset class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" <?= (int)$data['jk'] ? 'checked' : '' ?> class="form-check-input" name="jk" id="optionsRadios1" value="1" checked="">
                    Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" <?= (int)$data['jk'] ? '' : 'checked' ?> class="form-check-input" name="jk" id="optionsRadios2" value="0">
                    Perempuan
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <label for="exampleSelect1" class="form-label">Agama</label>
                <select class="form-select form-control" value="<?= $data['agama'] ?>" name="agama" id="exampleSelect1">
                    <option value="<?= $data['agama'] ?>" selected hidden><?= $data['agama'] ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label for="exampleSelect1" class="form-label">Jurusan</label>
                <select class="form-select form-control" value="<?= $data['jurusan'] ?>" name="jurusan" id="exampleSelect1">
                    <option value="<?= $data['jurusan'] ?>" selected hidden><?= $data['jurusan'] ?></option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </fieldset>
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>