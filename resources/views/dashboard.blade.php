<x-layout>
  @section('content')





<div class="w-11/12 mx-auto md:w-4/5 ">
@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show = "show"x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"  class="w-full bg-lightgreen text-deepgreen py-3 mb-5 pl-2 rounded">
                
         <p>{{ session('message') }}</p> 
            </div>
 @endif
<div class="relative mt-4 w-full overflow-x-auto shadow-lg sm:rounded-lg">
    <table class="bg-paleYellow w-full mx-auto text-sm text-left">
               
        <thead class=" uppercase shadow-xl text-black">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Employer Name
                </th>
                <th scope="col" class="px-6 py-3">
                   Employer Email
                </th>
                <th scope="col" class="px-6 py-3">
                   Category
                </th>
                <th scope="col" class="px-6 py-3">
                   Industry
                </th>
                <th scope="col" class="px-6 py-3">
                   Location
                </th>
                <th scope="col" class="px-6 py-3">
                   Qualifications 
                </th>
                <th scope="col" class="px-6 py-3">
                   Type
                </th>
            </tr>
        </thead>
@forelse ($jobs as $job)
        <tbody>
     
            <tr class=" border-b ">

                <td class="px-6 py-4 text-center">
                    {{ $job->title }}
                </td>
                <td class="px-6 py-4">
                    {{ $job->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $job->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $job->category }}
                </td>
                <td class="px-6 py-4">
                    {{ $job->industry}}
                </td>
                <td class="px-6 py-4">
                    {{ $job->location }}
                </td>
                <td class="px-6 py-4">
                    {{ $job->qualifications }}
                </td>
                <td class="px-6 py-4">
                    {{ $job->type}}
                </td>
                <td class="px-6 py-4">
                    <a href="/edit/{{$job->id}}" class="bg-green p-2 rounded text-white">Edit</a>
                </td>
                  <td class="px-6 py-4 ">
                 <form action="/delete/{{$job->id}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="bg-red p-2 rounded text-white">
                     Delete
                   </button>
                 </form>
                </td>
            </tr>

        </tbody>
        
        @empty
        <p class="w-full text-center mb-6">NO JOB POSTS</p>
        @endforelse
    </table>
    </div>
</div>


@endsection
</x-layout>


