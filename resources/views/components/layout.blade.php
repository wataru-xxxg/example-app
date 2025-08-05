<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.jp') }}" async defer></script>
    <title>{{ $title ?? 'つぶやきアプリ'}}</title>
</head>

<body class="bg-gray-50">
    {{ $slot }}
</body>

</html>