<x-layout>

   @section('content')
<!---- JOBS ------->
<header class="w-full h-auto mt-24">
   @include('partials.hero')
 </header>
<form action="/" class="w-full mb-2 mt-2 ">
     @include('partials.search')
  </form>
  
  <div class=" md:w-4/5 w-11/12 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-col-3 gap-4 mt-5">
        <!--first card -->
    @foreach ($jobs as $job)
    <div class="px-6 border-l-4 border-black-400 py-6 flex flex-col gap-4 max-w-sm rounded overflow-hidden shadow-lg  w-auto ">
    
 <h2 class="text-xl font-bold"><a href="{{ route('job.show', $job->id) }}">{{ $job->title }}</a></h2>
   <!-- <h4 class="font-light"><a href="{{ route('job.show', $job->id) }}">{{ $job->name }}</a></h4> -->
    
    <div class="flex gap-4 items-center">
      <div class="flex">
         <span class="mr-1 text-green"><i class="fa-solid fa-location-dot"></i></span>
         <h4 class="font-light"><a href="{{ route('job.show', $job->id) }} ">{{ $job->location }}</a></h4>
   </div>

   <div class="flex" >
         <span class="mr-1 text-green"><i class="fa-solid fa-laptop-file"></i></span>
         <h4 class="font-light">{{ $job->category }}</h4>
   </div>
    </div>
   
   
   <div class="flex">
     <small class="font-light ">Job type : </small>
     <small>{{ $job->type }}</small>
   </div>
   <div class="flex">
     <small class="font-light">Posted :</small>
      <small>{{ $job->updated_at->diffForHumans() }}</small>
   </div>
    </div>
        @endforeach
    </div>
    
   <div class="mt-5 md:w-4/5 w-11/12 mx-auto ">
          {{$jobs->links()}}
   </div>
@endsection
</x-layout>



  