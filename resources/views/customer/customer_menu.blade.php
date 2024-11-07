<x-layout title="Menu">
    <x-slot name='excss'>
        <link rel="stylesheet" href="{{ asset('css/menu_customer.css') }}">
    </x-slot>
    <div class="header">
        <div class="brand">
            <img src="" alt="BRAND">
        </div>
        <div class="tagline">Nongkrong Puas Harga Pas</div>
    </div>
    <div class="menu-container">
        <button class="cup">
            <a href="{{ route('menu.minuman', ['id' => $table_id]) }}">
                <img src="{{ asset('img/very-hot-drink-with-shine.png') }}" alt="BEVERAGES">
            </a>
        </button>
        <div class="dropdown">{{ $customer_name }}
            <div class="dropdown-content">
                <a href="">Pesanan</a>
                <a href="{{ route('logout') }}" style="color: red">Logout</a>
            </div>
        </div>
        <button class="food">
            <a href="{{ route('menu.makanan', ['id' => $table_id]) }}">
                <img src="{{ asset('img/burger.png') }}" alt="FOODS">
            </a>
        </button>
    </div>
    <div class="menu-item-container">
        <div class="snd-menu-container">
            <button class="cart-button">
                <a href="">
                    <i class="icon-cart">
                        <img src="{{ asset('img/hotel-menu.png') }}" alt="menu">
                    </i>
                </a>
            </button>
        </div>
        <div class="menu-grid">
            @foreach ($menu as $item)
            <div class="menu-item">
                <img src="{{ asset('img/4b268a58-4b52-4fbc-aa38-45d07d4e05e5.png') }}" alt="Item Image">
                <div class="name">{{ $item->menu_name }}</div>
                <div class="price-container">
                    <div class="price">
                        Rp. {{ number_format($item->menu_price / 1, 0, ',', '.') }}
                    </div>
                    <button data-id="{{ $item->id }}">+</button>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="overlay" style="display: none;">
            <button class="close-button">
                <hr>
            </button>
            <div class="overlay-content">
                <div class="selected-item" data-base-price="{{ $item->menu_price }}">
                    <img id="overlay-image" src="{{ asset('img/4b268a58-4b52-4fbc-aa38-45d07d4e05e5.png') }}" alt="Selected Item Image">
                    <div id="overlay-name" class="name">{{ $item->menu_name }}</div>
                    <hr><hr>
                    <div id="overlay-price" class="price">Rp. {{ number_format($item->menu_price, 0, ',', '.') }}</div>
                    <hr>
                    <div class="counter-container">
                        <button class="counter-button" onclick="decrement()">-</button>
                        <div class="counter-display" id="counter">1</div>
                        <button class="counter-button" onclick="increment()">+</button>
                    </div>
                    <div class="add-ons" id="add-ons-list"></div>
                    <!-- add-on list displayed through javascript-->
                    <!-- Confirm Button -->
                    <button class="confirm-button">Konfirmasi</button>
                </div>
                </div>
            </div>
        </div>
        
    </div>
    
</x-layout>
