<x-mail::message>
# Hello Admin

Incoming donation. The detail of a new donation form filled on the website are below

Name: {{ $donation['name'] }},

Phone: {{ $donation['phone'] }},

Email: {{ $donation['email'] }},

Country: {{ $donation['country'] }},

Amount: {{ $donation['amount'] ?? 'NA' }}




Thanks,<br>
{{ config('app.name') }}
</x-mail::message>