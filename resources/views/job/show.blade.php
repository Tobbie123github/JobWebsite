<!DOCTYPE html>
<html class="font-Poppins">
@include('partials.header')

<body class="bg-paleYellow ">


<!-- NAVBAR -->
<nav class="w-full grid place-items-center h-16 fixed z-10 top-0">
  @include('partials.navigation')
</nav>



<header class="w-full h-auto mt-16">
  <div class="w-full h-[30rem] bg-center bg-cover bg-no-repeat gradient flex">
    <div class="flex relative flex-col md:w-3/4 w-11/12  mx-auto item-start justify-center">
   <h2 class="text-white text-3xl font-bold mb-10">{{ $job->title }}</h2>
    
    <div class="flex md:flex-row gap-x-7 text-white">
      <div class="flex">
        <span class='mr-1'><i class="fa-solid fa-location-dot"></i></span><p class="font-light">{{ $job->location}}</p>
      </div>
       <div class="flex">
        <span class="mr-1 font-bold"><i class="fa-solid fa-square-plus"></i></span><p class="font-light">{{ $job->type }}</p>
      </div>
      <div class="flex">
        <span class="mr-1"><i class="fa-solid fa-clock"></i></span><p class="font-light">{{ $job->updated_at->diffForHumans() }} </p>
      </div>
    </div>
    </div>

  </div>
</header>


<section class="w-full mt-6">
   <div class="md:w-3/4 w-11/12 rounded overflow-hidden shadow-lg  mx-auto">
     <div class="flex flex-col p-5">
      <h3 class="mb-10 text-2xl font-medium">
              Job Information
        </h3> 
        
        <div class="grid grid-cols-2 gap-2">
                  <div class="flex items-start gap-2">
                    <span class="text-green"><i class="fa-solid fa-check"></i></span>
                    <div class="flex flex-col">
                      <h3 class="font-bold">Category</h3>
                      <small>{{ $job->category }}</small>
                    </div>
                  </div>
          
          
         <div class="flex items-start gap-2">
                              <span class="text-green font-bold"><i class="fa-solid fa-check"></i></span>
                              <div class="flex flex-col">
                                <h3 class="font-bold">Industry</h3>
                                <small class="font-light">{{ $job->industry}}</small>
                              </div>
                            </div>
          
          
          
                            <div class="flex items-start gap-2">
                              <span class="text-green"><i class="fa-solid fa-check"></i></span>
                              <div class="flex flex-col">
                                <h3 class="font-bold">Qualifications</h3>
                                <small>{{ $job->qualifications}}</small>
                              </div>
                            </div>
                            
                        <div class="flex items-start gap-2">
                              <span class="text-green"><i class="fa-solid fa-check"></i></span>
                              <div class="flex flex-col">
                                <h3 class="font-bold">Posted By</h3>
                                <small>{{ $job->name}}</small>
                              </div>
                            </div>               
                            
        </div>
     </div>
   </div>
</section>




<section class="w-full mt-6">
     <div class="md:w-3/4 w-11/12 rounded overflow-hidden shadow-lg  mx-auto flex flex-col gap-6 p-5">
       
       <h3 class="font-bold">Job Description</h3>
       <p class="italic "> {{ $job->description}}
       </p>
       </div>
</section>


    <div class="w-9/12 ml-auto mr-auto mt-16 grid place-items-center overflow-hidden">
       @if($job->attachment)
        <img src="{{asset('/storage/'. $job->attachment)}}" alt="attachment" class="w-80">
   
@else
<p class="">No Attachment </p>
@endif
</div >

<!--
   @if(Auth::user()->is_employer === 0)
<div class="md:w-3/4 w-11/12 mx-auto mt-16">
  <p class="w-20 rounded p-3 text-black bg-paleYellow drop-shadow-xl font-light italic"><a href="">Apply</a></p>
</div>
@endif
-->

    <footer class="mt-20 w-full bg-black">
           @include('partials.footer')
    </footer>


</body>

</html>