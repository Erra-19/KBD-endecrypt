<x-layout title="Tugas">
    <x-navbar brand="Form"></x-navbar>
    <h3>{{ $judul }}</h3>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <label>Nama</label><br> 
        <input type="text" name="nama" id="" placeholder="Masukkan Nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
        @enderror
        <p></p>
        <label>HP</label><br>
        <input type="text" name="no_telp" id="" placeholder="Masukkan No Whatsapp" class="form-control @error('no_telp') is-invalid @enderror">
        @error('no_telp')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
        @enderror
        <p></p>
        <button type="submit">Simpan</button>
        <a href="{{ route('anggota.index') }}">
            <button type="button">Batal</button>
        </a>
    </form>
</x-layout>