<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>{{ $title ?? ''}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/supereroi.js'])
    @livewireStyles

</head>
<body>

  <x-nav-bar />
    {{ $slot }}

   <x-footer/>
   @livewireScripts
</body>
</html>