<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{ asset('uploads/'.$theme->config['favicon']) }}" />
        
        {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-b8d18c10.css') }}" />
        <script src="{{ asset('build/assets/app-7af00053.js') }}"></script> --}}

        <title>{{ config('app.name') }}</title>

        <style>[x-cloak] { display: none !important; }</style>
        
        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        @stack('scripts')
    </head>

    <body class="antialiased">
   
   <style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
	.column1 {
		float: left;
		width: 20%;
		padding: 15px; 5px; 15px; 15px;
	}

.column {
  float: left;
  width: 60%;
  color: #075493!important;
  padding: 10px;
  height: 150px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
			<div class="row" style="background-image: ;">
  <div class="column1">
   <img src="/logo.png"  width="150" height="150" style="margin-left: 60px;">
  </div>
  <div class="column" style="text-align: center;">
      <font size="5"> क्षिरेश्‍वरनाथ नगरपालिका    </font>  
	  <p style="margin:0rem;">नगर कार्यपालिकाको कार्यालय महेन्द्रनगर </p>
	  <p>धनुषा, मधेश प्रदेश </p>
    
  </div>
  <div class="column1">
  <img src="/nepaliflag.gif"  width="100" height="100" style="margin-left: 60px;"> 
  </div>
        
        @include('components.navbar')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

        @livewire('notifications')
    </body>
</html>
