{{ auth()->user() }}
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Cerrar Sesión">
</form>