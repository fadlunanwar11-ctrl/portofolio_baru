@props([
    'title' => '',
    'subtitle' => '',
    'bgImage' => 'img/default.jpg'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-dark">

    <x-header
        :title="$title"
        :subtitle="$subtitle"
        :bgImage="$bgImage"
    />

    <main>
        {{ $slot }}
    </main>

</body>
</html>