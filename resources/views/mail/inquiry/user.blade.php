<x-mail::message>
  <div class="text-base pb-base">
    <p>Vielen Dank für Ihre Anfrage. Wir werden diese bearbeiten und melden uns baldmöglichst bei Ihnen.</p>
    <p>Sie haben folgende Daten an uns übermittelt:</p>
  </div>
  <br>
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
