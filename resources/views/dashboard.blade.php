@extends('template.main')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 m-t-15">
            <div class="bg-dark p-10 text-white text-center">
               <i class="fa fa-cart-plus font-16"></i>
               <h5 class="m-t-5">{{$count}}</h5>
               <small class="font-light">Total Customer</small>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="mt-3 ml-2 mb-3">
        <a href="{{ route('customer.create') }}">
            <button class="btn btn-success">Register</button>
        </a>
    </div> 
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Data Customer</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Kota</th>
                      <th scope="col">Email</th>
                      <th scope="col">No HP</th>
                      <th scope="col">Perusahaan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                @foreach ($data as $item)
                    <tr>
                      <th scope="row">{{$no}}</th>
                      <td>{{$item->nama_customer}}</td>
                      <td>{{$item->alamat}}</td>
                      <td>{{$item->kota}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->no_hp}}</td>
                      <td>{{$item->perusahaan}}</td>
                      <td>
                        <a href="">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{ route('customer.destroy', $item->id) }}">
                            <button class="btn btn-danger">Hapus</button>
                        </a>
                      </td>
                    </tr>
                    @php
                         $no++;
                    @endphp
                @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>


@endsection