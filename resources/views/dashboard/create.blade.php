formulario de creacion taller
<form action="{{ url('/dashboard')}}" method="POST">
    @csrf
    @include('dashboard.form')
</form>

