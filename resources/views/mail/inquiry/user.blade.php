<x-mail::message>
  <div class="text-base pb-base">
    Sehr geehrte Damen und Herren<br><br>
    Vielen Dank für Ihr Interesse an unserem Projekt. Wir werden uns freuen, Sie zu kontaktieren, sobald der offizielle Vertrieb beginnt.<br><br>
  </div>
  <br>
  <div class="text-base pb-base">
    <strong>Ihre Angaben</strong>
  </div>
  <div class="text-base pb-base">
    <strong>Vorname</strong><br>
    {{ $data->firstname }}
  </div>
  <div class="text-base pb-base">
    <strong>Nachname</strong><br>
    {{ $data->name }}
  </div>
  <div class="text-base pb-base">
    <strong>Strasse/Nr.</strong><br>
    {{ $data->street }}
  </div>
  <div class="text-base pb-base">
    <strong>PLZ/Ort</strong><br>
    {{ $data->location }}
  </div>
  <div class="text-base pb-base">
    <strong>E-Mail</strong><br>
    {{ $data->email }}
  </div>
  <div class="text-base pb-base">
    <strong>Telefon</strong><br>
    {{ $data->phone }}
  </div>
  <div class="text-base pb-base">
    <strong>Interesse an</strong><br>
    {{ $data->interest }}
  </div>
</x-mail::message>
