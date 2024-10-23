<x-layout title="Tugas">
    <x-navbar brand="Form"></x-navbar>
    <h3>{{ $judul }}</h3>
    <form action="{{ route('anggota.update', $edit ->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Nama</label><br>
        <input type="text" name="nama" id="" value="{{ old('nama', $edit->nama) }}" placeholder="Masukkan Nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
        @enderror
        <p></p>
        <label>HP</label><br>
        <input type="text" name="no_telp" id="" value="{{ old('no_telp', $edit->no_telp) }}" placeholder="Masukan Nomor Telpon">
        <p></p>
        <button type="submit">Perbaharui</button>
        <a href="{{ route('anggota.index') }}">
            <button type="button">Batal</button>
        </a>
    </form>
</x-layout>