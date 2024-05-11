<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | {{ config('app.name') }}</title>

    <link href="/css/layout.css" rel="stylesheet">

</head>

<body>

    @include('partials.nav')

        @yield('content')

</body>

</html>
