@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Mentor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Mentor</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Mentor</h4>
                <a name="" id="" class="btn btn-primary mb-2" href="{{ route('admin.mentor.create') }}"
                    role="button">
                    Tambah Mentor
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Position</th>
                            <th>Program</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mentors as $mentor)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $mentor->user->name }}</td>
                                <td>{{ $mentor->position->name }}</td>
                                <td>{{ $mentor->program->name }}</td>
                                <td>
                                    <a name="" id="" class="btn btn-primary"
                                        href="{{ route('admin.mentor.edit', [$mentor->id]) }}" role="button">Edit</a>

                                    <form onsubmit="return confirm('Delete this Program permanently?')" class="d-inline"
                                        action="{{ route('admin.mentor.destroy', [$mentor->id]) }}" method="POST">

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