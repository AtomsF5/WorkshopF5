
<x-guest-layout>

        <form  class="w-4/6 mx-auto" action="{{ url('/dashboard/'.$workshop->id) }}" method="post">
            @csrf
            @method('put')
            @include('components.form-edit')
        </form>

</x-guest-layout>


