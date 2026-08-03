<x-guest-layout>

<h3 class="text-center mb-4">Register</h3>

<form method="POST" action="{{ route('register') }}">
@csrf

<div class="mb-3">
<label>Name</label>

<input
type="text"
name="name"
class="form-control"
value="{{ old('name') }}"
required>

@error('name')
<small class="text-danger">{{ $message }}</small>
@enderror

</div>

<div class="mb-3">
<label>Email</label>

<input
type="email"
name="email"
class="form-control"
value="{{ old('email') }}"
required>

@error('email')
<small class="text-danger">{{ $message }}</small>
@enderror

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

@error('password')
<small class="text-danger">{{ $message }}</small>
@enderror

</div>

<div class="mb-3">

<label>Confirm Password</label>

<input
type="password"
name="password_confirmation"
class="form-control"
required>

</div>

<button class="btn btn-success">
Register
</button>

<div class="text-center mt-3">

<a href="{{ route('login') }}">
Already Registered? Login
</a>

</div>

</form>

</x-guest-layout>