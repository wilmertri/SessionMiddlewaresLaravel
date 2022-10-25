<h1>Home Page</h1>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Cerrar Sesión">
</form>