@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'text-bgray-800 text-base border border-bgray-300 focus:border-ut-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base']) }}>
