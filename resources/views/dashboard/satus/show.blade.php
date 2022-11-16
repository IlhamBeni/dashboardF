@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View APP Lembaga</h1>
</div>

<form action="/dashboard/satu/" method="get" class="d-inline">
    <button class="btn btn-primary mb-3"><span data-feather="arrow-left"></span>Back</button>
    @foreach ($posts as $p)
    <div class="card card-primary card-outline mb-3">
      <div class="card-header">Detail <b>{{ $p -> nama_lembaga }}</b></div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-body table-responsive p-0 col-lg-10">
              <table class="table table-sm table-hover m-0">
                <tbody>
                  <tr>
                    <td class="text-muted" >ID App Lembaga</td>
                    <td>{{ $p -> id_app_lembaga }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Ref Produk</td>
                    <td>{{ $p -> post -> deskripsi_ref_produk }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Sub Domain</td>
                    <td>{{ $p -> sub_domain }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Nama Database</td>
                    <td>{{ $p -> nama_database }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >User Database</td>
                    <td>{{ $p -> user_database }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Server Service</td>
                    <td>{{ $p -> tiga -> deskripsi_server }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Kode LKM</td>
                    <td>{{ $p -> kode_lkm }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Type koperasi</td>
                    <td>{{ $p -> type_koperasi }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Template IBSLITE</td>
                    <td>{{ $p -> empat -> deskripsi_template_ibslite }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Port</td>
                    <td>{{ $p -> port }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Tanggal Set Up</td>
                    <td>{{ $p -> tgl_setup }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status service gwlite</td>
                    <td>{{ $p -> status_service_gwlite }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status service gwlkm</td>
                    <td>{{ $p -> status_service_gwlkm }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status service ereg</td>
                    <td>{{ $p -> status_service_ereg }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status service marketplace</td>
                    <td>{{ $p -> status_service_marketplace}}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status va</td>
                    <td>{{ $p -> status_va }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status kartu santri</td>
                    <td>{{ $p -> status_kartu_santri }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status mikropay</td>
                    <td>{{ $p -> status_mikropay }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status qris</td>
                    <td>{{ $p -> status_qris }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >kabupaten</td>
                    <td>{{ $p -> kabupaten }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >provinsi</td>
                    <td>{{ $p -> provinsi }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Data Migrasi</td>
                    <td>{{ $p -> data_migrasi }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >status pks</td>
                    <td>{{ $p -> status_pks }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >kode ikm</td>
                    <td>{{ $p -> kode_ikm }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >kode bon va</td>
                    <td>{{ $p -> kode_bon_va }}</td>
                  </tr>
                  <tr>
                    <td class="text-muted" >Client</td>
                    <td>{{ $p -> lima -> deskripsi_sc }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection