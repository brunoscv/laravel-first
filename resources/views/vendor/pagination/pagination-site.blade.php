@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link">
                    <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Anterior
                </span>
            </li>
        @else
            <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Anterior
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    Próxima <i class="fa fa-arrow-right ml-2"></i>
                </a>
            </li>
        @else
            <li class="page-item">
                <span class="page-link" aria-hidden="true" aria-disabled="true" aria-label="@lang('pagination.next')">
                    Próxima <i class="fa fa-arrow-right ml-2"></i>
                </span>
            </li>
        @endif
    </ul>
@endif
