
<div class="flex overflow-x-auto overflow-y-hidden border-b border-gray-200 whitespace-nowrap dark:border-gray-700">
    @foreach ($buttons as $button)
        <x-dynamic-button :icon="$button['icon']" :label="$button['label']" :active="$button['active'] ?? false" />
    @endforeach
</div>
