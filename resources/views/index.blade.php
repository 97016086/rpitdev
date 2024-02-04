<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css'])
</head>
<body x-data="{darkMode:  false}" :class="{'dark':  darkMode  === true}" class="antialiased">
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
    <x-theme-toggle/>
  </div>

</body>

</html>