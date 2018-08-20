<li class="{{ (basename(request()->path()) == $routePath) ? 'active' : '' }}">
    <a href="{{ route($routePath) }}">
        <i class="fas {{ $iconClass }}"></i>
        <p>{{ $tag }}</p>
    </a>
</li>
