@extends('layouts.main')

@section('content')
<h4>Program Studi</h4>
<form action="{{ route('prodi.update', $prodi['id']) }}" method="post">
    @csrf
    @method('PUT')
    Nama 
    @error('nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="nama" id="" class="form-control mb-2" value="{{ $prodi['nama'] }}">
    
    Kaprodi 
    @error('dekan')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="kaprodi" id="" class="form-control mb-2" value="{{ $prodi['kaprodi'] }}">
    
    Singkatan
    @error('singkatan')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="singkatan" id="" class="form-control mb-2" value="{{ $prodi['singkatan'] }}">

    Fakultas 
    @error('fakultas_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <select name="fakultas_id" class="form-control">
        @foreach ($fakultas as $item)
            <option value="{{ $item['id'] }}" {{ $item['id'] == $prodi['fakultas_id'] ? "selected" : null }}> {{ $item['nama'] }} </option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection