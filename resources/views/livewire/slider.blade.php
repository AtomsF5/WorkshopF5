<div x-data="individuals">
    <div class="relative flex flex-no-wrap overflow-auto transition-all snap" x-ref="slider"
        x-on:scroll.debounce="active = Math.round($event.target.scrollLeft / ($event.target.scrollWidth / items.length))">
        <template x-for="(item,index) in items" :key="index">
            <div class="flex items-center justify-center flex-shrink-0 w-full h-32 text-white bg-black">
                <span x-text="item"></span>
            </div>
        </template>
    </div>
    <div class="flex items-center justify-center flex-1 p-4 bg-black bg-opacity-75">
        <button
            class="mx-4 text-white rounded-full outline-none focus:outline-none"
            x-on:click="$refs.slider.scrollLeft = $refs.slider.scrollLeft - ($refs.slider.scrollWidth / items.length)">
            <
        </button>
        <template x-for="(item,index) in items" :key="index">
            <span
                class="block w-3 h-3 mx-1 bg-white bg-opacity-25 rounded-full shadow"
                x-bind:class="{'bg-opacity-100': active === index }"
            >

            </span>
        </template>
        <button
            class="mx-4 text-white rounded-full outline-none focus:outline-none"
            x-on:click="$refs.slider.scrollLeft = $refs.slider.scrollLeft + ($refs.slider.scrollWidth / items.length)">
            >
        </button>
    </div>
</div>
