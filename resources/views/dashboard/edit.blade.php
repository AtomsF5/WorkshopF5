@include('layout.header')

    <form  class="mx-auto w-4/6" action="{{ url('/dashboard/'.$workshop->id) }}" method="post">
        @csrf
        @method('put')
        @include('components.form-edit')
    </form>

@include('layout.footer')
