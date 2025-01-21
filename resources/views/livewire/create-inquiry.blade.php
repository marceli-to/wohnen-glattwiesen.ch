<form wire:submit="save">
  @if (session()->has('status'))
    <div x-data="{ open: true }" x-show="open">
      <div class="bg-fern rounded-sm text-white font-bold py-15 pl-15 pr-30 fixed top-10 left-10 inline-block w-auto z-[101]">
        <div class="relative">
          <a href="javascript:;" x-on:click="open = false">
            Vielen Dank, wir haben Ihre Anfrage erhalten.
            <x-icons.cross class="!w-15 !h-15 absolute -top-5 -right-20" />
          </a>
        </div>
      </div>
    </div>
  @endif
  <h3 class="mb-5 md:mb-10 text-white">Ich interessiere mich für (Bitte auswählen):</h3>
  <x-layout.grid class="sm:gap-y-15 lg:gap-x-25 lg:gap-y-20">
    <x-honeypot />
    <x-layout.span class="relative !col-span-12 !mb-20 md:!mb-10">
      @error('interest')
        <x-form.error 
          message="Wählen Sie mindestens 1 Option"
          class="relative right-auto left-0 h-24 mb-5 top-2"
          />
      @enderror
      <div class="flex flex-col md:flex-row gap-y-7 md:gap-y-0 md:gap-x-40">
        <div>
          <div class="mb-4">
            <x-form.checkbox name="interest" value="1.5-Zimmer" isWire="true" class="-mt-4" id="interest-15" />
            <x-form.checkbox-label for="interest-15">1.5-Zimmer</x-form.checkbox-label>
          </div>
          <div class="mb-4">
            <x-form.checkbox name="interest" value="2.5-Zimmer" isWire="true" class="-mt-4" id="interest-25" />
            <x-form.checkbox-label for="interest-25">2.5-Zimmer</x-form.checkbox-label>
          </div>
          <div>
            <x-form.checkbox name="interest" value="3.5-Zimmer" isWire="true" class="-mt-4" id="interest-35" />
            <x-form.checkbox-label for="interest-35">3.5-Zimmer</x-form.checkbox-label>
          </div>
        </div>
        <div>
          <div class="mb-4">
            <x-form.checkbox name="interest" value="5-Zimmer" isWire="true" class="-mt-4" id="interest-5" />
            <x-form.checkbox-label for="interest-5">5-Zimmer</x-form.checkbox-label>
          </div>
          <div class="mb-4">
            <x-form.checkbox name="interest" value="7.5-Zimmer" isWire="true" class="-mt-4" id="interest-75" />
            <x-form.checkbox-label for="interest-75">7.5-Zimmer</x-form.checkbox-label>
          </div>
          <div>
            <x-form.checkbox name="interest" value="Loft" isWire="true" class="-mt-4" id="loft" />
            <x-form.checkbox-label for="loft">Loft</x-form.checkbox-label>
          </div>
        </div>
        <div class="flex justify-end">
          <div>
            <x-form.checkbox name="interest" value="Gewerbeflächen" isWire="true" class="-mt-4" id="surfaces-commerciales" />
            <x-form.checkbox-label for="surfaces-commerciales">Gewerbeflächen</x-form.checkbox-label>
          </div>
        </div>
      </div>
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="firstname" placeholder="Vorname*" isWire="true" />
      @error('firstname')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="name" placeholder="Nachname*" isWire="true" />
      @error('name')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="street" placeholder="Straße/Nummer*" isWire="true" />
      @error('street')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="location" placeholder="PLZ/Ort*" isWire="true" />
      @error('location')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="email" type="email" placeholder="E-Mail*" isWire="true" />
      @error('email')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="phone" placeholder="Telefon" isWire="true" />
      @error('phone')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:!col-span-12">
      @error('privacy')
        <x-form.error 
          message="Die Datenschutzerklärung muss akzeptiert werden"
          class="relative right-auto left-0 mb-6"
          />
      @enderror
      <div class="flex items-start">
        <x-form.checkbox name="privacy" id="privacy" isWire="true" class="mt-2 lg:mt-3" />
        <x-form.checkbox-label for="privacy">
          Ich habe die <a href="{{ route('page.privacy') }}" title="Datenschutzerklärung" target="_blank" class="hover:underline underline-offset-2 decoration-1">Datenschutzerklärung</a> gelesen und akzeptiere sie
        </x-form.checkbox-label>
      </div>
    </x-layout.span>
    <x-layout.span class="sm:col-span-12 mt-5">
      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12 text-olive" />
        </div>
        Senden
      </x-form.button>
    </x-layout.span>
  </x-layout.grid>
</form>
