@extends('master')
@section('isi')
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Pemain</th>
      <th scope="col">No Punggung</th>
      <th scope="col">Posisi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_pemain as $pemain)
    <tr>
      <td>{{ $pemain->id }}</td>
      <td>{{ $pemain->nama_pemain }}</td>
      <td>{{ $pemain->no_punggung }}</td>
      <td>{{ $pemain->posisi }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
