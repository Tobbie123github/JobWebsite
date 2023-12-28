<!DOCTYPE html>
<html class="box-border ">
@include('partials.header')
<body class="bg-paleYellow w-full h-screen grid place-items-center">
  <div>
     <h1 class="w-full box1 text-paleYellow text-center text-2xl mb-5 font-Roboto font-semibold">
  SIGN IN
</h1> 
  
  
  <form action="{{ route('signin.login')}}" class="w-full" method="POST">
  @csrf
     <x-signCard>
     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="name" class="font-light">
                Name
               </label>
      </div>
               <div class="md:w-2/3">
                 <input type="text" id="name" name="loginname" value="{{old('loginname')}}" class="appearance-none border-none rounded w-full py-2 px-4 box bg-paleYellow  ">
     @error('loginname')
    <p class="text-red text-xs mt-1 " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show">{{ $message }}</p>
    @enderror
   @if (session()->has('error'))
    <p class='text-xs text-red mt-1' x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show">{{ session('error') }}</p>
    @endif
       </div>
     </div>


      
      
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
         <label for="password"class="font-light">
        Password
      </label> 
      </div>

      <div class="md:w-2/3">
     <input type="password" id="password" name="loginpassword" class="appearance-none border-none rounded w-full py-2 px-4  box bg-paleYellow">
     @error('loginpassword')
    <p class="text-red text-xs mt-1 " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show">{{ $message }}</p>
    @enderror
    @if (session()->has('error'))
    <p class='text-xs text-red mt-1' x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show">{{ session('error') }}</p>
    @endif
      </div>

      </div>
      
      
      
      
<div class="md:flex md:items-center">
  <div class="md:w-2/3">
    <button class="shadow focus:outline-none py-2 px-2 box rounded">
      Submit
    </button>
  </div>
</div>
      
   </x-signCard>
 
</form>
</div>
</body>
</html>