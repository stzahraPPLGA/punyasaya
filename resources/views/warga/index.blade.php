<a href="/warga/create">Add Warga</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIK</th>
        <th>NO.KK</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
    </tr>
    @foreach($warga as $w)
    <tr>
        <th>{{ $w->id}}</th>
        <th>{{ $w->nama}}</th>
        <th>{{ $w->nik}}</th>
        <th>{{ $w->no_kk}}</th>
        <th>{{ $w->jenis_kelamin}}</th>
        <th>{{ $w->alamat}}</th>
    </tr>
    @endforeach
</table>