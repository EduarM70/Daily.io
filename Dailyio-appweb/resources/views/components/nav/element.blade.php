@php
    $clases =
        ($active ?? true)
            ? 'inline-flex items-center justify-center p-4 text-violet-600 border-b-2 border-violet-600 rounded-t-lg active dark:text-violet-500 dark:border-violet-500 group'
            : 'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group';
@endphp

<li class="me-2">
    <a href="{{ route($route) }}"
        class="{{ $clases }}">
        {{ $slot }}
        {{ $name }}
    </a>
</li>
