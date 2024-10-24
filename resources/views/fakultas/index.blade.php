@extends('layouts.main')

@section('content')

<h4>Fakultas</h4>
<a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nama Fakultas</th>
            <th>Nama Dekan</th>
            <th>Singkatan</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fakultas as $row)
            <tr>
                <td>{{ $row['nama'] }}</td>
                <td>{{ $row['dekan'] }}</td>
                <td>{{ $row['singkatan'] }}</td>
                <td>
                    <a href="{{ route('fakultas.edit', $row['id'] )}}" class="btn btn-xs btn-warning">Ubah</a>
                    <form action="{{ route('fakultas.destroy', $row['id']) }}" method="post" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection