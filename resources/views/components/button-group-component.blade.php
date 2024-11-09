<div class="flex justify-center items-center gap-3 flex-wrap">
    @foreach ($buttons as $button)
        <x-button-component
            :color="$button['color']"
            :outline="$button['outline']"
            :rounded="$button['rounded']"
            :label="$button['label']"
        />
    @endforeach
</div>
