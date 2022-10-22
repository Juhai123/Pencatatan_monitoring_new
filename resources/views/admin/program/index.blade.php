@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Program</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Program</h4>
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.program.create') }}"
                    role="button">
                    Tambah Program
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programs as $program)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $program->name }}</td>
                                <td>{{ $program->getStartDate }} - {{ $program->getEndDate }}</td>
                                <td>
                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.program.edit', $program->id) }}" role="button">Edit</a>

                                    <form onsubmit="return confirm('Delete this Program permanently?')" class="d-inline"
                                        action="{{ route('admin.program.destroy', [$program->id]) }}" method="POST">

                                        @csrf

                                        <input type="hidden" name="_method" value="DELETE">

                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection