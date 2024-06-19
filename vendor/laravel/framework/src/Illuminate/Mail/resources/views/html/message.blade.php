@component('mail::layout')

<p style="text-align: center; font-size: 16px;"><strong>Welcome to New Style Life!</strong></p>
<br>
<p style="text-align: center; font-size: 15px;">Thank you for registering in New Style Life!</p>

<p style="text-align: center; font-size: 15px;">Please click the button below</p>
{{-- Body --}}
{{ $slot }}
<p style="text-align: right; font-size: 14px; color: #777; margin: 0;">New Style Life</p>
<p style="text-align: right; font-size: 14px; color: #777; margin: 0;">Email: info@new-style.life</p>
<p style="text-align: right; font-size: 14px; color: #777; margin: 0;">Phone: (+81) 03-3981-5090</p>
<p style="text-align: right; font-size: 14px; color: #777; margin: 0;"><a href="https://new-style.life/">https://new-style.life/</a></p>
<p style="text-align: right; font-size: 14px; color: #777; margin: 0;">〒171-0014<br>
    Room 502, Wada Building<br>
   4-27-5 Ikebukuro, Toshima-ku<br>
   Tokyo, Japan.
</p>
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent

@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
