<x-mail::message>
# Hello Admin

Incoming Partnership donation. The detail of a new partnership donation form filled on the website are below

Name: {{ $partner['name'] }},

Phone: {{ $partner['phone'] }},

Email: {{ $partner['email'] }},

Country: {{ $partner['country'] }},

Giving type: {{ $partner['country'] }},

Amount: {{ $partner['amount'] ?? 'NA' }}

In Every: {{ $partner['frequency'] ?? 'NA' }}




Thanks,<br>
{{ config('app.name') }}
</x-mail::message>