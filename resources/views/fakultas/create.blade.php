@extends('layouts.main')

@section('content')
<h4>Fakultas</h4>
<form action="{{ route('fakultas.store') }}" method="post">
    @csrf
    Nama 
    @error('nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="nama" id="" class="form-control mb-2">
    
    Dekan 
    @error('dekan')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="dekan" id="" class="form-control mb-2">
    
    Singkatan
    @error('singkatan')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="singkatan" id="" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection