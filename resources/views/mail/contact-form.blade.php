<x-mail::message>
# Hello Admin

Below is the detail of a new contact form filled on the website

Name: {{ $contact['name'] }},

Email: {{ $contact['email'] }},

Phone: {{ $contact['phone'] }},

Country: {{ $contact['country'] }},

Message: {{ $contact['message'] ?? 'NA' }}




Thanks,<br>
{{ config('app.name') }}
</x-mail::message>