@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Position</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Position</li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Position</h4>
            <a name="" id="" class="btn btn-warning mb-3" href="{{ route('admin.position.index') }}" role="button">
                Kembali
            </a>
            <form action="{{ $url }}" method="post">
                @csrf
                @if(@$position)
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="">Nama Posisi</label>
                    <input type="text" class="form-control" name="name" id="" required aria-describedby="helpId" placeholder="Posisi" value="{{ $position->name ?? '' }}">
                    {{-- if error validate --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                    <label for="">Divisi</label>
                    <input type="text" class="form-control" name="division" id="" required aria-describedby="helpId" placeholder="Divisi" value="{{ $position->division ?? '' }}">
                </div>
                <div class="form-group mt-3">
                  <label for="">Deskripsi Posisi</label>
                  <textarea class="form-control" name="description" id="" rows="3">{{ $position->description ?? '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
            
        </div>
    </div>
</section>
@endsection