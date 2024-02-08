<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())  }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body body x-cloak x-data="{darkMode:  false}" :class="{'dark':  darkMode  === true}" class="antialiased "class="container mx-auto mt-10 mb-10 max-w-3xl ">
 


  @yield('content')
</body>