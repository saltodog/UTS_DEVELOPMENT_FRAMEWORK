@extends('layouts.app')

@section('title', 'Tambah buku')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Tambah buku</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('buku/tambah') }} method="post" autocomplete="off">
                            @csrf
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Judul buku</label>
                                <input type="text" class="form-control" name="judul_buku">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Pengarang</label>
                                <input type="text" class="form-control" name="nama_pengarang">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Penerbit</label>
                                <input type="text" class="form-control" name="nama_penerbit">
                            </div>
                            <div class="form-group my-3">
                                <label class="form-label" for="id_kategori">Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-select">
                                    <option value="0">Tidakada</option>
                                    @foreach ($kategoris as $kategori)
                                      <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                    @endforeach
                                </select>
                                {{-- @error('id_kategori')
                                    <span></span>
                                @enderror --}}
                            </div>


                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('buku') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
