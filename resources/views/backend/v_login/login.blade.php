<x-layout title='tokoonline'>
    <x-navbar brand='{{ $brand }}'></x-navbar>    
    <x-error></x-error>
    <form action="{{ route('backend.Login') }}" method="post">
        @csrf
        <label>User</label><br>
        <input type="text" name="email" id="" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email Here">
            @error('email')
                <span class="invalid-feedback alert-danger" role="alert">
                    {{$message}}
                </span>
            @enderror
        <p></p>
        <label>Password</label><br>
        <input type="password" name="password" id="" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password Here">
                @error('password')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{$message}}
                    </span>
                @enderror
        <p></p>
        <button type="submit">Login</button>
    </form>
</x-layout>