<!-- type = true nel post
     type = false nell'index-->
@props(['user'])
<div class="flex items-center lg:justify-center mt-4 text-sm ">
    <img src="/images/lary-avatar.svg" alt="Lary avatar">
    <div class="ml-3  text-left">
        By <a href="/?author={{$user->username}}">
        <h5 class="font-bold">{{$user->name}}</h5>
        </a>
        <h6>Mascot at Laracasts</h6>
    </div>
</div>
