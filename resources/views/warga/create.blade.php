<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="NAMA"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_kk" placeholder=""><br>
    <select name="jenis_kelamin"><br>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="8"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>