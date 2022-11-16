@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Ref Produk</h1>
</div>
<a href="/dashboard/dua/" class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-15">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/dua" class="mb-5">
                            @csrf
                          <div class="mb-3">
                                <label for="id_ref_produk" class="form-label">ID Ref Produk</label>
                                <input type="number" class="form-control @error('id_ref_produk') is-invalid @enderror" id="id_ref_produk" name="id_ref_produk" required autofocus value="{{ old('id_ref_produk') }}">  
                            @error('id_ref_produk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_ref_produk" class="form-label">Deskripsi Ref Produk</label>
                                <input type="text" class="form-control @error('deskripsi_ref_produk') is-invalid @enderror" id="deskripsi_ref_produk" name="deskripsi_ref_produk" required value="{{ old('deskripsi_ref_produk') }}">
                            @error('deskripsi_ref_produk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                            </div>
                          <button type="submit" class="btn btn-outline-primary">Create Produk</button>
                        </form>
                    </div>
          
                </div>
            </div>
        </div>
    </div>
</div>

@endsection