@include('layout.header')

    <form class="mx-auto w-4/6" action="{{ url('/dashboard') }}" method="post">
        @csrf
        @include('components.form-create')
    </form>

@include('layout.footer')
