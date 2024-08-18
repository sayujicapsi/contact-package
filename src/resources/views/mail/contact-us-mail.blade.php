@component('mail::message')
# Introduction

The body of your messagedsfdf . {{ $name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
