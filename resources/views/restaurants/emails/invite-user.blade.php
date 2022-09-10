@component('mail::message')
# Hi,

You have been invited to challenge ({{ $challenge_name }}) of {{ $company_name }} Company, to access the update
please click on the link below.

@component('mail::button', ['url' => $url])
    Enter Challenge
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
