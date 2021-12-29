@props(['trigger'])

<div  class="relative lg:inline-flex bg-gray-100 rounded-xl">
    <div  x-data="{show:false}">
        <!--button-->
        <button 
        @click="show = !show" @click.away="show = false"
        class="flex-1 w-full appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold text-left inline-flex"
        >
            {{$trigger}}
        </button>
        <div x-show="show" class="absolute bg-gray-100 overflow-auto max-h-52 rounded-xl w-full">
            <!--SLOT-->
            {{$slot}}
        </div>
    </div>
</div>