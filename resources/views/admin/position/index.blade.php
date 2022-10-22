@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Position</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Position</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Position</h4>
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.position.create') }}"
                    role="button">
                    Tambah Position
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positions as $position)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $position->name }}</td>
                                <td>{{ $position->division }}</td>
                                <td>
                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.position.edit', $position->id) }}" role="button">Edit</a>

                                    <form onsubmit="return confirm('Delete this Program permanently?')" class="d-inline"
                                        action="{{ route('admin.position.destroy', [$position->id]) }}" method="POST">

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