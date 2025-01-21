@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-rosewood rounded-sm font-bold flex text-white text-lg uppercase py-10 px-20 tracking-wider leading-none hover:bg-fernwood hover:text-white transition-colors']) }}>
  {{ $slot}}
</button>