@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create APP Lembaga</h1>
</div>
<a href="/dashboard/satu/" class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</a>
<div class="card-header"><b>-</b></div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-15">
                <div class="card-body table-responsive p-0 col-lg-10">
                    <div class="col-lg-8">
                        <form method="post" action="/dashboard/satu" class="mb-5">
                            @csrf
                            <div class="col-lg-20">
                        <table class="table table-sm table-hover m-0">
                            <tbody>
                                    <div class="mb-3">
                                    <tr>
                                        <td class="text-muted" >ID App Lembaga</td>
                                        <td>
                                        <input type="number" class="form-control @error('id_app_lembaga') is-invalid @enderror" id="id_app_lembaga" name="id_app_lembaga" required autofocus value="{{ old('id_app_lembaga') }}">  
                                            @error('id_app_lembaga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted" >Nama Lembaga</td>
                                        <td>
                                <input type="text" class="form-control @error('nama_lembaga') is-invalid @enderror" id="nama_lembaga" name="nama_lembaga" required autofocus value="{{ old('nama_lembaga') }}">  
                            @error('nama_lembaga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-muted" >PIC</td>
                                        <td>
                                        <input type="text" class="form-control @error('nama_pic') is-invalid @enderror" id="nama_pic" name="nama_pic" required autofocus value="{{ old('nama_pic') }}">
                            @error('nama_pic')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Alamat</td>
                                        <td>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Kabupaten</td>
                                        <td>
                                        <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" name="kabupaten" required autofocus value="{{ old('kabupaten') }}">
                            @error('kabupaten')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Provinsi</td>
                                        <td>
                                        <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" required autofocus value="{{ old('provinsi') }}">
                            @error('provinsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >No HandPhone</td>
                                        <td>
                                        <input type="numbers" class="form-control @error('no_hp_pic') is-invalid @enderror" id="no_hp_pic" name="no_hp_pic" required autofocus value="{{ old('no_hp_pic') }}">
                            @error('no_hp_pic')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Ref Produk</td>
                                        <td>
                                        <select name="ref_produk" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($posts as $p)
                                @if(old('ref_produk') == $p -> id_ref_produk)
                                <option value="{{ $p -> id_ref_produk }}" selected>
                                    {{ $p -> deskripsi_ref_produk }}
                                </option>
                                @else
                                <option value="{{ $p -> id_ref_produk }}">
                                    {{ $p -> deskripsi_ref_produk }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Server Service</td>
                                        <td>
                                        <select name="server_service" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($tiga as $p)
                                @if(old('server_service') == $p -> id_server_service)
                                <option value="{{ $p -> id_server_service }}" selected>
                                    {{ $p -> deskripsi_server }}
                                </option>
                                @else
                                <option value="{{ $p -> id_server_service }}">
                                    {{ $p -> deskripsi_server }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Template IBSLITE</td>
                                        <td>
                                        <select name="template_ibslite" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($empat as $p)
                                @if(old('template_ibslite') == $p -> id_template_ibslite)
                                <option value="{{ $p -> id_template_ibslite }}" selected>
                                    {{ $p -> deskripsi_template_ibslite }}
                                </option>
                                @else
                                <option value="{{ $p -> id_template_ibslite }}">
                                    {{ $p -> deskripsi_template_ibslite }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Client</td>
                                        <td>
                                        <select name="client" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($lima as $p)
                                @if(old('client') == $p -> id_sc)
                                <option value="{{ $p -> id_sc }}" selected>
                                    {{ $p -> deskripsi_sc }}
                                </option>
                                @else
                                <option value="{{ $p -> id_sc }}">
                                    {{ $p -> deskripsi_sc }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Sub Domain</td>
                                        <td>
                                        <input type="text" class="form-control @error('sub_domain') is-invalid @enderror" id="sub_domain" name="sub_domain" required autofocus value="{{ old('sub_domain') }}">
                            @error('sub_domain')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Nama Database</td>
                                        <td>
                                        <input type="text" class="form-control @error('nama_database') is-invalid @enderror" id="nama_database" name="nama_database" required autofocus value="{{ old('nama_database') }}">
                            @error('nama_database')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >User Database</td>
                                        <td>
                                        <input type="text" class="form-control @error('user_database') is-invalid @enderror" id="user_database" name="user_database" required autofocus value="{{ old('user_database') }}">
                            @error('user_database')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Kode LKM</td>
                                        <td>
                                        <input type="text" class="form-control @error('kode_lkm') is-invalid @enderror" id="kode_lkm" name="kode_lkm" required autofocus value="{{ old('kode_lkm') }}">
                            @error('kode_lkm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Type Koperasi</td>
                                        <td>
                                        <input type="text" class="form-control @error('type_koperasi') is-invalid @enderror" id="type_koperasi" name="type_koperasi" required autofocus value="{{ old('type_koperasi') }}">
                            @error('type_koperasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Port</td>
                                        <td>
                                        <input type="text" class="form-control @error('port') is-invalid @enderror" id="port" name="port" required autofocus value="{{ old('port') }}">
                            @error('port')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Tanggal Setup</td>
                                        <td>
                                        <input type="date" class="form-control @error('tgl_setup') is-invalid @enderror" id="tgl_setup" name="tgl_setup" required autofocus value="{{ old('tgl_setup') }}">
                            @error('tgl_setup')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Service Gwlite</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_service_gwlite') is-invalid @enderror" id="status_service_gwlite" name="status_service_gwlite" required autofocus value="{{ old('status_service_gwlite') }}">
                            @error('status_service_gwlite')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Service Gwlkm</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_service_gwlkm') is-invalid @enderror" id="status_service_gwlkm" name="status_service_gwlkm" required autofocus value="{{ old('status_service_gwlkm') }}">
                            @error('status_service_gwlkm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Service Ereg</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_service_ereg') is-invalid @enderror" id="status_service_ereg" name="status_service_ereg" required autofocus value="{{ old('status_service_ereg') }}">
                            @error('status_service_ereg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Service Marketplace</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_service_marketplace') is-invalid @enderror" id="status_service_marketplace" name="status_service_marketplace" required autofocus value="{{ old('status_service_marketplace') }}">
                            @error('status_service_marketplace')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status VA</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_va') is-invalid @enderror" id="status_va" name="status_va" required autofocus value="{{ old('status_va') }}">
                            @error('status_va')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Kartu Santri</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_kartu_santri') is-invalid @enderror" id="status_kartu_santri" name="status_kartu_santri" required autofocus value="{{ old('status_kartu_santri') }}">
                            @error('status_kartu_santri')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Mikropay</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_mikropay') is-invalid @enderror" id="status_mikropay" name="status_mikropay" required autofocus value="{{ old('status_mikropay') }}">
                            @error('status_mikropay')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status Qris</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_qris') is-invalid @enderror" id="status_qris" name="status_qris" required autofocus value="{{ old('status_qris') }}">
                            @error('status_qris')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Data Migrasi</td>
                                        <td>
                                        <input type="text" class="form-control @error('data_migrasi') is-invalid @enderror" id="data_migrasi" name="data_migrasi" required autofocus value="{{ old('data_migrasi') }}">
                            @error('data_migrasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Status PKS</td>
                                        <td>
                                        <input type="text" class="form-control @error('status_pks') is-invalid @enderror" id="status_pks" name="status_pks" required autofocus value="{{ old('status_pks') }}">
                            @error('status_pks')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Kode ikm</td>
                                        <td>
                                        <input type="text" class="form-control @error('kode_ikm') is-invalid @enderror" id="kode_ikm" name="kode_ikm" required autofocus value="{{ old('kode_ikm') }}">
                            @error('kode_ikm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted" >Kode Bon VA</td>
                                        <td>
                                        <input type="text" class="form-control @error('kode_bon_va') is-invalid @enderror" id="kode_bon_va" name="kode_bon_va" required autofocus value="{{ old('kode_bon_va') }}">
                            @error('kode_bon_va')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                             @enderror
                                        </td>
                                    </tr>
                                    </div>
                                    </tbody>
                        </table>
                            </div>
                          <button type="submit" class="btn btn-outline-primary">Create Lembaga</button>
                        </form>
                    </div>
          
                </div>
            </div>
        </div>
    </div>
</div>

@endsection