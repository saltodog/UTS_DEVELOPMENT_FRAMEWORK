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
                                <h6 class="text-white text-capitalize ps-3">Edit User</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <form action={{ url('user/edit/' . $user->id) }} method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <div class="input-group input-group-outline my-3 {{ $user->nama ? 'is-filled' : '' }}">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                            </div>
                            <div class="input-group input-group-outline my-3 {{ $user->email ? 'is-filled' : '' }}">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="input-group input-group-outline my-3 {{ $user->no_hp ? 'is-filled' : '' }}">
                                <label class="form-label">No HP</label>
                                <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp }}">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <select type="text" class="form-control" name="role">
                                    <option value="">Pilih Role</option>
                                    <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Administrator</option>
                                    <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Petugas</option>
                                </select>
                            </div>
                            <button class="btn btn-success">Simpan</button>
                            <a href={{ url('user') }} class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
