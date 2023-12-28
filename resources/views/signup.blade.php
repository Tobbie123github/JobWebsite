<!DOCTYPE html>
<html class="box-border ">
@include('partials.header')
<body class="bg-paleYellow w-full h-screen grid place-items-center">
  <div>
     <h1 class="w-full box1 text-paleYellow text-center text-2xl mb-5 font-Roboto font-semibold">
  SIGN UP
</h1> 
  
  
  <form action="{{ route('signup.store') }}" method="POST" class="w-full" enctype="multipart/form-data">
@csrf
     <x-signCard>
          <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
      <label for="name" class="font-light ">
                Name
               </label>
      </div>
               <div class="md:w-2/3">
                 <input type="text" id="name" name="name" value="{{old('name')}}" class="appearance-none border-none rounded w-full py-2 px-4 box bg-paleYellow focus:outline-none ">
             @error('name')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
@enderror
               </div>

     </div>



     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="email" class="font-light">
                Email Address
               </label>
      </div>
       <div class="md:w-2/3">
      <input type="text" id="email" value="{{old('email')}}" name="email" class="appearance-none border-none rounded w-full py-2 px-4 box bg-paleYellow focus:outline-none ">
       @error('email')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
@enderror   
          </div>

     </div>



      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
         <label for="password" class="font-light">
        Password
      </label> 
      </div>

      <div class="md:w-2/3">
     <input type="password" id="password" name="password" class="appearance-none border-none rounded w-full py-2 px-4 focus:outline-none box bg-paleYellow bg-orange">
       @error('password')
    <div class="text-red text-xs mt-1 ">{{ $message }}</div>
@enderror
      </div>
          
      </div>
      
      
      <div class="md:flex md:items-center mb-2">
       <div class="md:w-10/12">
      <input type="file" name="avatar" class="bg-orange font-light text-black box rounded w-full">
   @error('avatar')
    <p class="text-red text-xs">{{ $message }}</p>
@enderror
      </div>

       </div>


<select name="is_employer" class="w-1/2 bg-paleYellow box mt-4 p-2 rounded font-light">
  <option value="0">Employee</option>
    <option value="1">Employer/Job Poster</option>
</select>
      
<div class="md:flex md:items-center mt-8">
  <div class="md:w-2/3">
    <button type="submit" class="box focus:outline-none py-2 px-2 rounded">
      Submit
    </button>
  </div>
</div>
      
      
   </x-signCard>
 
</form>
</div>
</body>
</html>