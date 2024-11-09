
<button class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400 {{ $active ? 'text-blue-600 border-blue-500 dark:text-blue-300 dark:border-blue-400' : '' }}">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path d="{{ $icon }}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
    </svg>
    <span class="mx-1 text-sm sm:text-base">
        {{ $label }}
    </span>
</button>
