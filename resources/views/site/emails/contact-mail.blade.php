@component('mail::message')
Name : {{ $contact_info_detail['name'] }}
Email : {{ $contact_info_detail['email'] }}
Subject : {{ $contact_info_detail['subject'] }}

Message : {{ $contact_info_detail['message'] }}
Address : {{ $contact_info_detail['address'] }}

@component('mail::button', ['url' => ''])
Click Here Go To The Link...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
