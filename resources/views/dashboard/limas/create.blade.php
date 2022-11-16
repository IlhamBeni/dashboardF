@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Ref Produk</h1>
</div>
<a href="/dashboard/lima/" class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/lima" class="mb-5">
                            @csrf
                          <div class="mb-3">
                                <label for="id_sc" class="form-label">ID Sister Company</label>
                                <input type="number" class="form-control @error('id_sc') is-invalid @enderror" id="id_sc" name="id_sc" required autofocus value="{{ old('id_sc') }}">  
                            @error('id_sc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_sc" class="form-label">Deskripsi Sister Company</label>
                                <input type="text" class="form-control @error('deskripsi_sc') is-invalid @enderror" id="deskripsi_sc" name="deskripsi_sc" required value="{{ old('deskripsi_sc') }}">
                            @error('deskripsi_sc')
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