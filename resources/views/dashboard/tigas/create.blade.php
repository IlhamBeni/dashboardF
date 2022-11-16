@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Ref Produk</h1>
</div>
<a href="/dashboard/tiga/" class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/tiga" class="mb-5">
                            @csrf
                          <div class="mb-3">
                                <label for="id_server_service" class="form-label">ID Server Service</label>
                                <input type="number" class="form-control @error('id_server_service') is-invalid @enderror" id="id_server_service" name="id_server_service" required autofocus value="{{ old('id_server_service') }}">  
                            @error('id_server_service')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_server" class="form-label">Deskripsi Server</label>
                                <input type="text" class="form-control @error('deskripsi_server') is-invalid @enderror" id="deskripsi_ref_produk" name="deskripsi_server" required value="{{ old('deskripsi_server') }}">
                            @error('deskripsi_server')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ip_address" class="form-label">IP Address</label>
                                <input type="text" class="form-control @error('ip_address') is-invalid @enderror" id="ip_address" name="ip_address" required value="{{ old('ip_address') }}">
                            @error('ip_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                            </div>
                          <button type="submit" class="btn btn-outline-primary">Create</button>
                        </form>
                    </div>
          
                </div>
            </div>
        </div>
    </div>
</div>

@endsection