@extends('layouts.app')

@section('title', 'Tambah kategori')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Tambah kategori</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('kategori/tambah') }} method="post" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama kategori</label>
                                <input type="text" class="form-control" name="nama_kategori">
                            </div>

                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('kategori') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
