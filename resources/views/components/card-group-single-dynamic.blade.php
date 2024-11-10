<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    @foreach ($cardsingles as $cardsingle)
        <x-card-single-dynamic :bgColor="$cardsingle['bgColor']" :iconColor="$cardsingle['iconColor']" :title="$cardsingle['title']" :label="$cardsingle['label']">
            <x-slot name="icon">
                 {!! $cardsingle['icon'] !!}
            </x-slot>
        </x-card-single-dynamic>
    @endforeach
</div>
