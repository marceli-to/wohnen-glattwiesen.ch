<figure>
  <picture>
    <source media="(min-width: 1200px)" srcset="/media/img/{{ $image }}.jpg">        
    <source media="(min-width: 768px)" srcset="/media/img/{{ $image }}-md.jpg">
    <source srcset="/media/img/{{ $image }}-sm.jpg">
    <img 
      src="/media/img/{{ $image }}-sm.jpg" 
      alt="{{ $alt }}" 
      title="{{ $alt }}" 
      height="1600" 
      width="1000"
      class="block w-full h-auto object-cover aspect-[16/9] lg:aspect-[16/7]">
  </picture>
</figure>