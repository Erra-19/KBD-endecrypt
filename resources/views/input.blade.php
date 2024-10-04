<x-layout title="Tugas">
    <x-navbar brand="Form"></x-navbar>
    <form action="{{ route('input') }}" method="post">
        @csrf
        <div class="row g-3">            
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" placeholder="NIM" name="NIM">
                    <label for="NIM">NIM</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
                    <label for="nama_lengkap">Nama Lengkap</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Kelas" name="kelas">
                    <label for="kelas">Kelas</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('nomor_telpon') is-invalid @enderror" id="nomor_telpon" placeholder="Nomor Telpon" name="nomor_telpon">
                    <label for="nomor_telpon">Nomor Telpon</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
            </div>
        </div>
    </form>
</x-layout>