<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-transparent
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest  focus:outline-none focus:ring-2
    focus:ring-gray-700 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
