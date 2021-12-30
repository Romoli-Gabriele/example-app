<x-dropdown>
    <x-slot name="trigger">
            {{isset($currentCategory)? ucwords($currentCategory->name) : 'Categories'}}
            <x-down-arrow></x-down-arrow>
    </x-slot>
    <x-dropdown-item 
        :active="!isset($currentCategory)" 
        href="/?{{ http_build_query(request()->except('category','page'))}}">All</x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item 
    :active="isset($currentCategory)&&$category->is($currentCategory)" 
    href="/?category={{$category->slug}}&{{ http_build_query(request()->except('category','page'))}}">
        {{$category->name}}
    </x-dropdown-item>
    @endforeach
</x-dropdown>