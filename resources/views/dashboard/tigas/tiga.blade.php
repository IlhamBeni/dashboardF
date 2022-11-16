@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Server Service</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/tiga/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> </a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th scope="col">ID Server Service</th>
              <th scope="col">Deskripsi Server</th>
              <th scope="col">IP Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $p)
            <tr>
              <td>{{ $loop -> iteration }}</td>
              <td>{{ $p -> id_server_service }}</td>
              <td>{{ $p -> deskripsi_server }}</td>
              <td>{{ $p -> ip_address }}</td>
              <td>
              <form action="/dashboard/tiga/{{ $p->id_server_service }}/edit" method="get" class="d-inline">
                  <button class="badge bg-warning border-0"><span data-feather="edit"></span></button>
              </form>
                <form action="/dashboard/tiga/{{ $p->id_server_service }}" method="post" class="d-inline">
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