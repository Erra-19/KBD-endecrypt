<x-layout title='tokoonline'>
    <x-navbar brand='{{ $brand }}'></x-navbar>    
    <p>
        Selamat Datang, <b>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</b> pada aplikasi Toko Online dengan hak akses yang anda
        miliki sebagai <b>{{ Auth::check() ? Auth::user()->role : 'N/A' }}</b> ini adalah halaman utama dari aplikasi ini.
    </p>
</x-layout>