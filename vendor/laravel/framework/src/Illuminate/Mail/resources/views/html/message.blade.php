@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

<h1 style="text-align: center">Welcome to Asian Food Museum!</h1>
<p>Thank you for registering  in Asian Food Museum!</p>
<p>Please click the button below to verify your account.</p>
{{-- Body --}}
{{ $slot }}
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
Feel free to adjust the design elements and text to better fit your website's branding and style.
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
