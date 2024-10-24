@extends('layouts.main')

@section('content')
<h4>Fakultas</h4>
<form action="{{ route('fakultas.update', $fakultas['id']) }}" method="post">
    @csrf
    @method('PUT')
    Nama 
    @error('nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="nama" id="" class="form-control mb-2" value="{{ $fakultas['nama'] }}">
    
    Dekan 
    @error('dekan')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="dekan" id="" class="form-control mb-2" value="{{ $fakultas['dekan'] }}">
    
    Singkatan
    @error('singkatan')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="singkatan" id="" class="form-control mb-2" value="{{ $fakultas['singkatan'] }}">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection