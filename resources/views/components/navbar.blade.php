<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())  }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="w-full	text-gray-700 bg-slate-300	dark:text-white	dark:bg-sky-900" >
	<div	x-data="{	open:	false	}"	 class="flex flex-col  px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 py-1">
		<div class="p-4	flex	flex-rowitems-center	justify-between">
			<x-theme-toggle	/>
			<button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
				<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
					<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</button>
		</div>
<nav	:class="{'flex':	open, 'hidden':	!open}"	class="flex-col flex-grow	pb-4	md:pb-0	hidden	md:flex	md:justify-end md:flex-row">
	<a	class="px-4 py-2	mt-2	text-sm	font-semibold	text-gray-900	bg-slate-400 rounded-lg dark:bg-slate-500 dark:hover:bg-slate-600 dark:focus:bg-slate-600 dark:text-white md:ml-4 hover:bg-slate-500 hover:text-gray-700 active:bg-slate-600	focus:outline-none	focus:shadow-outline"	href="/">Home</a>
	<a	class="px-4 py-2	mt-2	text-sm	font-semibold	text-gray-900	bg-slate-400 rounded-lg dark:bg-slate-500 dark:hover:bg-slate-600 dark:focus:bg-slate-600 dark:text-white md:ml-4 hover:bg-slate-500 hover:text-gray-700	active:bg-slate-600	focus:outline-none	focus:shadow-outline"	href="/aboutme">About me</a>
	<a	class="px-4 py-2	mt-2	text-sm	font-semibold	text-gray-900	bg-slate-400 rounded-lg dark:bg-slate-500 dark:hover:bg-slate-600 dark:focus:bg-slate-600 dark:text-white md:ml-4 hover:bg-slate-500 hover:text-gray-700	active:bg-slate-600	focus:outline-none	focus:shadow-outline"	href="/portfolio">Portfolio</a>
	<a	class="px-4 py-2	mt-2	text-sm	font-semibold	text-gray-900	bg-slate-400 rounded-lg dark:bg-slate-500 dark:hover:bg-slate-600 dark:focus:bg-slate-600 dark:text-white md:ml-4 hover:bg-slate-500 hover:text-gray-700	focus:outline-none	focus:shadow-outline"	href="/contact">Contact</a>	
				</div>		
		</div>
	</nav>
</div>
</body>