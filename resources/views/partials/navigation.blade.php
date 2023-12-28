
 <div class="flex justify-between items-center w-11/12 md:w-4/5  mx-auto">
   <h3 class="font-light italic"><a href ="/">Marshall</a> </h3>
   
  
     <ul class="md:flex md:flex-row md:relative md:right-0 flex-col gap-x-3 md:gap-x-4 absolute w-2/5 md:w-fit top-[88%] right-1.5 hidden md:items-center p-2 md:p-0 md:bg-transparent ease-in duration-500  " id="menu">
   
  @if(Auth::check())
  <!--   <span>
       {{auth()->user()->name}}
     </span>
     -->
     @if(Auth::user()->is_employer === 1)
    <li class="p-2 md:bg-transparent  mb-0 md:p-0 font-bold md:font-medium"><a href="{{ route('job.create') }}" >Post Jobs</a></li>
      <li class=" md:bg-transparent p-2 mb-1 md:p-0 md:mb-0 font-bold md:font-medium"><a href="/dashboard">Dashboard</a></li>
   @endif
     
 @if(Auth::user()->avatar)
    <li class="w-10 bg-transparent h-10 relative ">
        <img src="{{asset('/storage/'. Auth::user()->avatar)}}" alt="avatar" class=" overflow-hidden  rounded-full ">
    </li>
@endif
<li class="font-bold md:font-medium md:bg-transparent">
  <form action="{{ route('logout') }}" method="POST">
  @csrf
    <button class="p-2 md:p-0 mb-0" type="submit">Logout</button>
</form>
</li>

   @else
 <li class="font-bold md:font-medium md:bg-transparent p-2  md:p-0 :mb-0"><a href="{{ route('signin') }}" class="w-full">Login</a></li>
 <li class="font-bold md:font-medium md:bg-transparent p-2  md:p-0 mb-0"><a href="{{ route('signup.create') }}">Register</a></li>

   @endif
     </ul>
   
   <div id="btns" class="md:hidden text-3xl">
 <span id="open-btn"><i class="fa-solid fa-bars"></i></span>
 <span id="close-btn"><i class="fa-solid fa-xmark "></i></span>

   </div>
 </div>
