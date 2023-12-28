<!DOCTYPE html>
<html class="box-border font-Poppins" >
@include('partials.header')

<body class="bg-paleYellow">
  
<!-- NAVBAR -->
<nav class="w-full grid place-items-center h-16 fixed z-10 top-0  md:bg-transparent  box">
 @include('partials.navigation')
</nav>


 
 <!---  SEARCH FOR JOBS --->

  
  <main class="w-full mt-20 ">
     @yield('content')
    </main>
    
    <footer class="mt-20 w-full bg-black">
           @include('partials.footer')
      </footer>
   </body>
   </html>