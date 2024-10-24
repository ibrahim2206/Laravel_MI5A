@extends('layouts.main')

@section('content')
<h4>Mahasiswa</h4>
<form action="{{ route('mahasiswa.store') }}" method="post">
    @csrf
    Nomor Pokok Mahasiswa
    @error('npm')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="npm" id="" class="form-control mb-2">

    Nama 
    @error('nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="nama" id="" class="form-control mb-2">
    
    Tempat Lahir 
    @error('tempat_lahir')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="tempat_lahir" id="" class="form-control mb-2">

    Tanggal Lahir 
    @error('tanggal_lahir')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="date" name="tanggal_lahir" id="" class="form-control mb-2">
    
    Alamat
    @error('alamat')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="alamat" id="" class="form-control mb-2">

    Email
    @error('email')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="email" id="" class="form-control mb-2">

    HP
    @error('hp')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="hp" id="" class="form-control mb-2">

    Program Studi 
    @error('prodi_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <select name="prodi_id" class="form-control">
        @foreach ($prodi as $item)
            <option value="{{ $item['id'] }}"> {{ $item['nama'] }} </option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>

@endsection