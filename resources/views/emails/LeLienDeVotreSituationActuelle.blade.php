<x-mail::message>
@foreach ($id as $row)
# <span style="color:#000090">Cher {{$row->nom}} {{$row->prenom}}</span>

<h4>
Tel: <span style="color:#000090">{{$row->telephone}}<br>
Email: {{$row->email}}</span>
</h4>

<span style="color:#000090">Suite à votre demande du crédit {{$row->typecredits}}, nous vous transmettons
le lien suivant de la part de notre service client, y compris
votre situation actuelle.</span>
<p>{{$url}}</p>


<x-mail::button :url="'https://cc-coteaux.be/'">
Site web
</x-mail::button>

Cordialement,
<br>
@endforeach
{{ config('app.name') }}
</x-mail::message>