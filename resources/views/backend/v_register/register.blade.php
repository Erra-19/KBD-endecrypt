<x-layout title='tokoonline'>
    <x-navbar brand='{{ $brand }}'></x-navbar>    
    <x-error></x-error>
    <form action="{{ route('backend.Register') }}" method="post">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full Name" name="name">
                    <label for="name">Full Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone Number" name="phone">
                    <label for="phone">Phone Number</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="Your Role" name="role">
                    <label for="role">Your Role</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" name="email">
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    <span class="password-toggle">
                        <i class="fas fa-eye" id="toggle-password"></i>
                    </span>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
            </div>
        </div>
    </form>
</x-layout>