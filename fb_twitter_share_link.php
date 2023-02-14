<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content=" @yield('metaDescription')">
<title>{{ config('app.name') }} - @yield('title')</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!-- google recaptcha -->  
<script src="https://www.google.com/recaptcha/api.js" async defer></script> 


<!-- Facebook sharing -->
<meta property="og:title" content="{{ config('app.name') }} - @yield('title')">
<meta property="og:description" content="@yield('metaDescription')">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:locale" content="en-EN">
<meta property="og:image" content="{{url('/')}}/images/share/share-image.jpg?{{ uniqid() }}">
<meta property="og:type" content="website">


<!-- Twitter sharing -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ '@' . config('constants.twitter.account') }}">
<meta name="twitter:creator" content="{{ '@' . config('constants.twitter.account') }}">
<meta name="twitter:title" content="{{ config('app.name') }} - @yield('title')">
<meta name="twitter:description" content="@yield('metaDescription')">
<meta name="twitter:url" content="{{url()->current()}}">
<meta name="twitter:domain" content="{{ url('/') }}">
<meta name="twitter:image" content="{{url('/')}}/images/share/share-image.jpg?{{ uniqid() }}">