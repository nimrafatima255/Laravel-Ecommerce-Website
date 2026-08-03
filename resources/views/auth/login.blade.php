<x-guest-layout>

<h3 class="text-center mb-4">Login</h3>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <label>Email</label>

        <input type="email"
               name="email"
               class="form-control"
               value="{{ old('email') }}"
               required
               autofocus>

        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label>Password</label>

        <input type="password"
               name="password"
               class="form-control"
               required>

        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3 form-check">

        <input type="checkbox"
               name="remember"
               class="form-check-input"
               id="remember">

        <label class="form-check-label" for="remember">
            Remember Me
        </label>

    </div>

    <button class="btn btn-success">
        Login
    </button>

    <div class="text-center mt-3">

        <a href="{{ route('register') }}">
            Don't have an account? Register
        </a>

    </div>

</form>

</x-guest-layout>