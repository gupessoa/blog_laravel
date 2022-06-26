@component('mail::message')
# Mensagem do Visitante

Um visitante deixou uma mensagem:
<br>
{{ $nome }}
{{ $email }}
{{ $tel }}
{{ $assunto }}
<br>
{{ $msg }}


@component('mail::button', ['url' => ''])
Visualizar Mensagem
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
