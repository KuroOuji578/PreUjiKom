@extends('template.main')
@section('content')
<div class="card">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Tambah Data Customer</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Customer</label>
                <div class="col-sm-9">
                    <input name="nama_customer" type="text" value="" class="form-control {{ $errors->first('nama_customer') ? "is-invalid":""}}" placeholder="Masukan Nama Customer">
                    @error('nama_customer')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input name="alamat" type="text" value="" class="form-control {{ $errors->first('alamat') ? "is-invalid":""}}" placeholder="Masukan Alamat">
                    @error('alamat')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Kota</label>
                <div class="col-sm-9">
                    <input name="kota" type="text" value="" class="form-control {{ $errors->first('kota') ? "is-invalid":""}}" placeholder="Masukan Kota">
                    @error('kota')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="text" value="" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" placeholder="Masukan Email">
                    @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">No.HP</label>
                <div class="col-sm-9">
                    <input name="no_hp" type="text" value="" class="form-control {{ $errors->first('no_hp') ? "is-invalid":""}}" placeholder="Masukan no.HP">
                    @error('no_hp')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Perusahaan</label>
                <div class="col-sm-9">
                    <input name="perusahaan" type="text" value="" class="form-control {{ $errors->first('perusahaan') ? "is-invalid":""}}" placeholder="Masukan Perusahaan">
                    @error('perusahaan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            
        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection