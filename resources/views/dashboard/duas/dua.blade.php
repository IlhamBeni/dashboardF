@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ref Produk</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif


    <div class="table-responsive col-lg-10">
        <a href="/dashboard/dua/create" class="btn btn-primary mb-3"><span data-feather="plus"></span></a>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th scope="col">ID Ref Produk</th>
                <th scope="col">Deskripsi Ref Produk</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $p)
              <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $p -> id_ref_produk }}</td>
                <td>{{ $p -> deskripsi_ref_produk }}</td>
                <td>
                <form action="/dashboard/dua/{{ $p->id_ref_produk }}/edit" method="get" class="d-inline">
                    <button class="badge bg-warning border-0"><span data-feather="edit"></span></button>
                </form>
                  <form action="/dashboard/dua/{{ $p->id_ref_produk }}" method="post" class="d-inline">
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
    </div>
    @endsection