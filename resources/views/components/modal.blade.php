@props(['trigger'])

<div
    class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60"
    x-show="{{ $trigger }}"
    x-on:click.self="{{ $trigger }} = false"
    x-on:keydown.escape.window=" {{ $trigger }} = false"
>
    <div {{$attributes->merge(['class' => 'p-8 m-auto overflow-y-auto rounded-lg shadow h-4/5 bg-alabaster-300']) }}>

        {{$slot}}

    </div>
</div>
