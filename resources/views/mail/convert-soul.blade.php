<x-mail::message>
# Hello Admin

Below is the detail of a new convert form filled on the website

Name: {{ $soul['name'] }},

Phone: {{ $soul['phone'] }},

Address: {{ $soul['address'] }},

Country: {{ $soul['country'] }},

Prayer: {{ $soul['prayer_request'] ?? 'NA' }}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
