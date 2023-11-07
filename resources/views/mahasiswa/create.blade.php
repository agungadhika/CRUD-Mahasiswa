@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="container mt-4">
        <div class="text-right mb-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
</div>
@endsection
