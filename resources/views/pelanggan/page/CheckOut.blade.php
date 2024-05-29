@extends('pelanggan.layout.index')

@section('content')

<div class="row mt-3">
 <div class="col-sm-8">
  <div class="card">
   <div class="card-body">
    <h4> Masukkan Detail Penerima</h4>

    <div class="row">
     <label for="NamaPenerima" class="col-form-label col-sm-3">Nama Penerima</label>
     <div class="col-sm-9"></div>
     <input type="text" class="form-control col-sm-9" name="NamaPenerima" id="NamaPenerima" placeholder="Nama Penerima" autocomplete="off" autofocus>
    </div>
    <div class="row">
     <label for="AlamatPenerima" class="col-form-label col-sm-3">Alamat Penerima</label>
     <div class="col-sm-9"></div>
     <input type="text" class="form-control col-sm-9" name="ALamatPenerima" id="AlamatPenerima" placeholder=Alamat Penerima" autocomplete="off">
    </div>
    <div class="row">
     <label for="NmrTelp" class="col-form-label col-sm-3">Nomor Telepon</label>
     <div class="col-sm-9"></div>
     <input type="number" class="form-control col-sm-9" name="NmrTelp" id="NmrTelp" placeholder="Nomor Telepon" autocomplete="off">
    </div>
    <div class="row">
     <label for="Email" class="col-form-label col-sm-3">Alamat Email</label>
     <div class="col-sm-9"></div>
     <input type="text" class="form-control col-sm-9" name="Email" id="Email" placeholder="Masukkan Email" autocomplete="off">
    </div>
    <div class="row">
     <label for="kurirEkspedisi" class="col-form-label col-sm-3">Pilih Kurir Ekspedisi</label>
     <div class="col-sm-9"></div>
     <select name="kurirEkspedisi" class="form-control" id="kurirEkspedisi">
      <option value="">--- Pilih Ekspedisi ---</option>
      <option value="">JNT</option>
      <option value="">JNE</option>
      <option value="">Si Cepat</option>
      <option value="">Lion Parcel</option>
      <option value="">Ninja-Ku</option>
     </select>
    </div>
   </div>
  </div>
 </div>
 <div class="col-sm-4">
  <div class="card">
   <div class="card-header text-center p-1">
    <h3>Detail Pembayaran</h3>
   </div>
   <div class="card-body">
    <div class="row my-2">
     <label for="Total" class="col-form-label col-sm-5">Total</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="Total" name="Total" value="550000" disabled>
     </div>
    </div>
    <div class="row my-2">
     <label for="Discount" class="col-form-label col-sm-5">Discount</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="Discount" name="Discount" value="0" disabled>
     </div>
    </div>
    <div class="row my-2">
     <label for="PPn" class="col-form-label col-sm-5">PPn</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="PPn" name="PPn" value="11000" disabled>
     </div>
    </div>
    <div class="row my-2">
     <label for="Ongkir" class="col-form-label col-sm-5">Ongkir</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="Ongkir" name="Ongkir" value="11000" disabled>
     </div>
    </div>
    <hr>
    <div class="row my-2">
     <label for="TotalPembayaran" class="col-form-label col-sm-5">Total Pembayaran</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="TotalPembayaran" name="TotalPembayaran" value="561000" disabled>
     </div>
    </div>
    <div class="row my-2">
     <label for="UangDiterima" class="col-form-label col-sm-5">Uang Diterima</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="UangDiterima" name="UangDiterima">
     </div>
    </div>
    <div class="row my-2">
     <label for="Kembalian" class="col-form-label col-sm-5">Uang Kembalian</label>
     <div class="col-sm-7">
      <input type="number" class="form-control" id="Kembalian" name="Kembalian" value="" disabled>
     </div>
    </div>
    <button class="btn btn-primary w-100 mt-2">
     <i class="fas fa-print"></i> Cetak Struk Pembelian
    </button>
   </div>
  </div>
 </div>
</div>

<script>

</script>

@endsection