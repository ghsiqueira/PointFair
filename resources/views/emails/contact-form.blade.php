@component('mail::message')
# Nova mensagem de contato

Você recebeu uma nova mensagem de contato:

**Nome:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Mensagem:**
{{ $data['message'] }}

Obrigado!

@endcomponent