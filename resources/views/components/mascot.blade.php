<!-- type = true nel post
     type = false nell'index-->
<div class="flex items-center <?= $type ? "lg:justify-center mt-4" : ""?> text-sm ">
    <img src="/images/lary-avatar.svg" alt="Lary avatar">
    <div class="ml-3 <?= $type ? " text-left" : ""?> ">
        <h5 class="font-bold">Lary Laracore</h5>
        <h6>Mascot at Laracasts</h6>
    </div>
</div>
