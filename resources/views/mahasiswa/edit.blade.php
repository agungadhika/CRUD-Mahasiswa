@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <div class="container mt-4">
        <div class="text-right mb-2">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</div>
    </form>
</div>
@endsection
