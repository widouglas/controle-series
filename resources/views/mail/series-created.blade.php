@component('mail::message')

# {{ $nomeSerie }} criada

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episódios

Acessa aqui:
@component('mail::button', ['url' => route('seasons.index', $idSerie)])
Ver série
@endcomponent
@endcomponent