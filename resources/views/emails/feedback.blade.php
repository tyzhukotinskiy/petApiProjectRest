@component('mail::message')
# Introduction

Task "{{ $task }}" completed by {{ $user }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
