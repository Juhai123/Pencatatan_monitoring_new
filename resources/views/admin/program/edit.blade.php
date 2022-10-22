@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Program</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Program</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Program</h4>
            <a name="" id="" class="btn btn-warning mb-3" href="{{ route('admin.program.index') }}" role="button">
                Kembali
            </a>
            <form action="{{ route('admin.program.update',[$program->id] )}}" method="post">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <div class="form-group">
                    <label for="">Nama Program</label>
                    <input type="text" class="form-control" name="name" id="" required aria-describedby="helpId" placeholder="Nama Program" value="{{ $program->name ?? '' }}">
                    {{-- if error validate --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control" placeholder="Tanggal Mulai" required="" value="{{ $program->start_date ?? '' }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control" placeholder="Tanggal Selesai" required="" value="{{ $program->end_date ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                  <label for="">Deskripsi Program</label>
                  <textarea class="form-control" name="description" id="" rows="3">{{ $program->description ?? '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
            
        </div>
    </div>
</section>
@endsection