@component('mail::message')
# Register Camp: {{ $checkout->Camp->title }}

Hi, {{ $checkout->User->name }}
<br>
Thank you for register on {{ $checkout->Camp->title }}, please see payment instruction by click the button below.

@component('mail::button', ['url' => route("user.checkout.invoice", $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent