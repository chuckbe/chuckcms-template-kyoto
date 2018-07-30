@if(isset($menus))
<div class="global-menu__wrap kyoto_menu_wrap">
    @foreach($menus as $m)
        @if($m->depth == 0)
            <a class="global-menu__item" href="{{ $m->link }}">{{ $m->label }}</a>
        @endif
    @endforeach
</div>
@endif                