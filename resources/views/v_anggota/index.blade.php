<x-layout title="Tugas">
    <x-navbar brand="Form"></x-navbar>
    <h3>{{ $judul }}</h3>
    <a href="{{ route('anggota.create') }}">
        <button type="button">Tambah</button>
    </a>
    <table border="1" width='60%'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
        @foreach ($index as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->no_telp }}</td>
            <td>
                <a href="{{ route('anggota.edit', $row->id) }}" style="display: inline-block">
                    <button type="button">ubah</button>
                </a>
                <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</x-layout>