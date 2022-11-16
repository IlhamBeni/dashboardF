@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
</div>
<a href="/dashboard/empat/" class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/empat" class="mb-5">
                            @csrf
                          <div class="mb-3">
                                <label for="id_template_ibslite" class="form-label">ID Template IBSLITE</label>
                                <input type="number" class="form-control @error('id_template_ibslite') is-invalid @enderror" id="id_template_ibslite" name="id_template_ibslite" required autofocus value="{{ old('id_template_ibslite') }}">  
                            @error('id_template_ibslite')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_template_ibslite" class="form-label">Deskripsi Server</label>
                                <input type="text" class="form-control @error('deskripsi_template_ibslite') is-invalid @enderror" id="deskripsi_template_ibslite" name="deskripsi_template_ibslite" required value="{{ old('deskripsi_template_ibslite') }}">
                            @error('deskripsi_template_ibslite')
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