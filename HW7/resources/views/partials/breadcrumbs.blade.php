<div class="container" class="mt-10">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach($links as $link)
                @if($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ $link['name'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $link['link'] }}">{{ $link['name'] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
