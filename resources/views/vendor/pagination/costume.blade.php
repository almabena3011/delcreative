@if ($paginator->hasPages())
    <ul>
        <center>
            <li>
                @if ($paginator->onFirstPage())
                    <button class="btn btn-outline-success btn-sm disabled" type="button">
                        prev
                    </button>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <button class="btn btn-outline-success btn-sm" type="button">
                            prev
                        </button>
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <button class="disabled"><span>{{ $element }}</span></button>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <button class="btn btn-outline-success btn-sm" type="button"> {{ $page }}
                                </button>
                            @else
                                <a href="{{ $url }}">
                                    <button class="btn btn-sm">
                                        {{ $page }}
                                    </button>
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="prev">
                        <button class="btn btn-outline-success btn-sm" type="button">
                            next
                        </button>
                    </a>
                @else
                    <button class="btn btn-outline-success disabled"><span>next</span></button>
                @endif
            </li>
        </center>
    </ul>
@endif
