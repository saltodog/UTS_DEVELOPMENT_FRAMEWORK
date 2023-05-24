@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Edit kategori</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('kategori/edit/' . $kategori->id) }} method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <div
                                class="input-group input-group-outline my-3 {{ $kategori->nama_kategori ? 'is-filled' : '' }}">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama_kategori"
                                    value="{{ $kategori->nama_kategori }}">
                            </div>

                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('kategori') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
