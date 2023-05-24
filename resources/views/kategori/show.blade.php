@extends('layouts.app')

@section('title', 'kategori')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">List kategori</h6>
                                <a href={{ url('kategori/tambah') }} class="btn btn-success me-3">Tambah kategori</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama kategori</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kategoris as $key => $kategori)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>
                                                {{ $kategori->nama_kategori }}
                                            </td>
                                            <td class="align-middle">
                                                <a href={{ url('kategori/edit/' . $kategori->id) }}
                                                    class="ms-2 btn btn-primary btn-sm font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit kategori;">
                                                    Edit
                                                </a>
                                                <a href={{ url('kategori/delete/' . $kategori->id) }}
                                                    class="ms-2 btn btn-danger btn-sm font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit kategori">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
