

<a {{ $attributes->merge(['class' => 'flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple']) }}
        href="">
        {{-- https://github.com/estevanmaito/windmill-dashboard --}}
        <div class="flex items-center">
            {{$icon}}
            {{$subtitle}}
        </div>
        {{ $slot }}

    </a>
