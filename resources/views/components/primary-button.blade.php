<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-xl text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-nonelfocus:ring-2 focuslring-indigo-500 focls:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
