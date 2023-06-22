<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/svg+xml" href="{{ asset('assets/img/logo/favicon.png') }}" />

<title>{{ @$title ? $title . ' - ' : '' }}{{ config('app.name', 'Laravel') }}</title>
