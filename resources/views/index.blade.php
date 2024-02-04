<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{darkMode:  false}" :class="{'dark':  darkMode  === true}" class="antialiased">
 <nav class="bg-slate-200 shadow mb-10">
  <div class="max-w-3xl mx-auto py-3 px-6 md:px-0 md:flex md:justify-between">
    <x-theme-toggle/>
  </div>
</nav>

</body>

</html>