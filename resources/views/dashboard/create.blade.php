formulario de creacion taller
<form action="{{ url('/dashboard') }}" method="post">
    @csrf
    @include('dashboard.form')
</form>
