@extends('app')
@section('seo_title', 'Siedlungsgarten inmitten vom «Schwamendinger Grün»')
@section('seo_description', 'Ab anfangs 2027 bieten wir an der Glattwiesen-/Grosswiesenstrasse in Zürich-Schwamendingen moderne Neubauwohnungen an. Die Vielfalt der 255 Wohnungen reicht von gemütlichen Studios bis hin zu grosszügigen Familienwohnungen – ideal für jede Lebensphase.')
@section('content')

<x-layout.section class="bg-white !p-0">
  <x-media.image 
    :image="'wohnen-glattwiesen'" 
    :alt="'Visualisierung Wohnen Glattwiesen'" />
</x-layout.section>

<x-layout.section class="bg-white">
  <x-layout.inner>
    <div class="max-w-3xl">
      <h1>Siedlungsgarten inmitten vom «Schwamendinger Grün»</h1>
      <h2>Erstvermietung</h2>
      <p>Ab anfangs 2027 bieten wir an der Glattwiesen-/Grosswiesenstrasse in Zürich-Schwamendingen moderne Neubauwohnungen an. Die Vielfalt der 255 Wohnungen reicht von gemütlichen Studios bis hin zu grosszügigen Familienwohnungen – ideal für jede Lebensphase.</p>
      <h2>Sind Sie interessiert?</h2>
      <p>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet. Füllen Sie dazu bitte unser Kontaktformular aus und wir halten Sie auf dem Laufenden.</p>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-sage text-white">
  <x-layout.inner>
    <h2 class="text-xl lg:text-2xl text-white mb-15 lg:mb-25">Kontaktformular</h2>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>

@endsection