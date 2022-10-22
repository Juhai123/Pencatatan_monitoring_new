@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Mentor</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Mentor</li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Mentor</h4>
            <a name="" id="" class="btn btn-warning mb-3" href="{{ route('admin.mentor.index') }}" role="button">
                Kembali
            </a>
            <form action="{{ route('admin.mentor.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(@$mentor)
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="">User</label>
                    <select class="form-select"name="user_id" id="" >
                    <option disabled value="">Pilih User</option>
                    @foreach ($users as $user)
                    <option value=" {{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Position</label>
                    <select class="form-select"name="position_id" id="" >
                    <option disabled value="">Pilih Position</option>
                    @foreach ($positions as $position)
                    <option value=" {{ $position->id }}">{{ $position->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Program</label>
                    <select class="form-select"name="program_id" id="" >
                    <option disabled value="">Pilih Program</option>
                    @foreach ($programs as $program)
                    <option value=" {{ $program->id }}">{{ $program->name }}</option>
                    @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
            
        </div>
    </div>
</section>
@endsection