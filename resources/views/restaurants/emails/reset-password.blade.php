@component('mail::message')
# @lang('Hello!')

<p>You are receiving this email because we received a password reset request for your account.</p>

@component('mail::button', ['url' => $url])
    Reset Password
@endcomponent

<p>This password reset link will expire in 60 minutes.</p>
<p>If you did not request a password reset, no further action is required.</p>

@lang('Regards'),<br>
{{ config('app.name') }}
@endcomponent
