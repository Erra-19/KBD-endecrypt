<x-layout title="Login Page">
    <x-slot name='excss'>
        <link rel="stylesheet" href="{{ asset('css/login_customer.css') }}">
    </x-slot>
    
    <div class="header">
        <div class="brand">
            <img src="{{ asset('img/Screenshot 2024-10-29 101526.png') }}" alt="BRAND">
        </div>
        <div class="tagline">Nongkrong Puas Harga Pas</div>
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="login-container">
        <h2>Untuk Keamanan<br>Silahkan Log in dibawah</h2>
        <form action="{{ route('confirm-login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="customer_name">Nama Customer</label>
                <input type="text" id="customer_name" name="customer_name" placeholder="Silahkan Masukan Nama Anda" required>
            </div>
            <div class="input-group">
                <label for="table_number">Nomor Meja</label>
                <input type="text" id="table_number" name="table_number" value="{{ $table_number }}" readonly>
            </div>
            <div class="input-group">
                <label for="table_code">Kode Meja</label>
                <input type="text" id="table_code" name="table_code" value="{{ $table_code }}" readonly>
            </div>
            <button type="submit" class="button">Konfirmasi</button>
        </form>
    </div>
</x-layout>