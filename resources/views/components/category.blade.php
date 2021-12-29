
@props(['category'])
<?php 
    $n = strlen($category->name);
    if( ($n % 2) == 1){
        $color = 'red';
    }else{
        $color = 'blue';
    };
?>
<a href="/categories/{{$category->slug}}" class="px-4 py-1 border border-{{$color}}-300 rounded-full text-{{$color}}-300 text-xs uppercase font-semibold" style="font-size: 15px">{{$category->name}}</a>

