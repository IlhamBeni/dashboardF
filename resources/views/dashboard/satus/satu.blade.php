@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">App Lembaga</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/satu/create" class="btn btn-primary mb-3"><span data-feather="plus"></span></a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Lembaga</th>
              <th scope="col">PIC</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Handphone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $p)
            <tr>
              <td>{{ $loop -> iteration }}</td>
              <td>{{ $p -> nama_lembaga }}</td>
              <td>{{ $p -> nama_pic }}</td>
              <td>{{ $p -> alamat }}</td>
              <td>{{ $p -> no_hp_pic }}</td>
              <td>
              <form action="/dashboard/satu/{{ $p -> id_app_lembaga}}" method="get" class="d-inline">
                  <button class="badge bg-info border-0"><span data-feather="eye"></span></button>
              </form>
              <form action="/dashboard/satu/{{ $p->id_app_lembaga }}/edit" method="get" class="d-inline">
                  <button class="badge bg-warning border-0"><span data-feather="edit"></span></button>
              </form>
                <form action="/dashboard/satu/{{ $p -> id_app_lembaga }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Mau Menghapus Data?')"><span data-feather="trash-2"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection