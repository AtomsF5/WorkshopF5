formularo de edicion

<form action="{{ url('/dashboard/'.$workshop->id) }}" method="POST">
    @csrf
    @method('PATCH')
    @include('dashboard.form')
</form>
