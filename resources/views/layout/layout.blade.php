<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())  }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

 
<script>
  
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
</head>



<body>
<x-navbar />
<main>

</main>

<x-contect />
  <x-footer />

</body>