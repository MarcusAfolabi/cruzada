<x-mail::message>
# Hello Admin

Successful donation was done on the wep app. The detail of a new donation are below

Name: {{ $transaction['customer_name'] }},

Phone: {{ $transaction['customer_phone'] }},

Email: {{ $transaction['customer_email'] }},

Amount: {{ $transaction['amount'] }} {{ $transaction['currency'] }},

Ref: {{ $transaction['tx_ref'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>