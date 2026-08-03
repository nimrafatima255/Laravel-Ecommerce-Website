<nav class="navbar navbar-expand-lg navbar-dark bg-dark position-relative"
style="z-index: 1050;">

<div class="container">


<a class="navbar-brand fw-bold" href="{{ url('/') }}">
    E-Shop
</a>



<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu"
aria-controls="navbarMenu"
aria-expanded="false">

<span class="navbar-toggler-icon"></span>

</button>




<div class="collapse navbar-collapse" id="navbarMenu">


<ul class="navbar-nav ms-auto">



<li class="nav-item">

<a class="nav-link"
href="{{ url('/') }}">

Home

</a>

</li>




<li class="nav-item">

<a class="nav-link"
href="{{ route('products.index') }}">

Products

</a>

</li>




@if(auth()->check())



<li class="nav-item">

<a class="nav-link"
href="{{ route('cart.index') }}">

<i class="bi bi-cart"></i>
Cart

</a>

</li>





@if(auth()->user()->role == 'admin')


<li class="nav-item">

<a class="nav-link text-warning"
href="{{ route('admin.dashboard') }}">

<i class="bi bi-speedometer"></i>
Admin Panel

</a>

</li>


@endif





<li class="nav-item dropdown">


<a class="nav-link dropdown-toggle"
href="#"
role="button"
data-bs-toggle="dropdown">

{{ auth()->user()->name }}

</a>




<ul class="dropdown-menu dropdown-menu-end">


<li>

<form method="POST"
action="{{ route('logout') }}">

@csrf


<button type="submit"
class="dropdown-item">

Logout

</button>


</form>


</li>


</ul>


</li>





@else



<li class="nav-item">

<a class="nav-link"
href="{{ route('login') }}">

Login

</a>

</li>




<li class="nav-item">

<a class="nav-link"
href="{{ route('register') }}">

Register

</a>

</li>



@endif



</ul>


</div>


</div>


</nav>