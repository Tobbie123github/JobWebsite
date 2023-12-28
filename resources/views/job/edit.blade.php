<!DOCTYPE html>
<html>
@include('partials.header')
<body class="bg-paleYellow w-full h-screen grid place-items-center">



<div>
     <h1 class="w-full box1 text-paleYellow text-center text-2xl my-5 font-Roboto font-semibold">
  EDIT JOB POST
</h1> 
  
  
<form action="/edit/{{$job->id}}" class="w-full" enctype="multipart/form-data" method="POST">
 
@csrf
@method('PUT')

    <x-signCard>
     
     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="title" class="font-light">
                Job Title
               </label>
      </div>
               <div class="md:w-2/3">
                 <input type="text" id="title" name="title" class="appearance-none border-none rounded w-full py-2 px-4 box bg-paleYellow focus:outline-none " value="{{$job->title}}">
            @error('title')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
    @enderror
               </div>
             
     </div>


    <div class="w-full md:flex md:items-center  md:gap-8 mb-6 ">
      <label class="md:w-1/3 block font-light tracking-wide mb-2" for="category">
      Job Category
      </label>
      <div class="relative">
        
      <select class="block appearance-none w-full  box bg-paleYellow py-3 px-4 pr-8 rounded leading-tight " id="category" name="category">
        <option value="">
          Select category
        </option>
          <option value="Accounting & Audit Jobs">Accounting & Audit Jobs</option>
          <option value="Admin & HR Jobs">Admin & HR Jobs</option>
          <option value="Arts & Media Job">Arts & Media Job</option>
          <option value="Banking & Finance Jobs">Banking & Finance Jobs</option>
          <option value="Customer Service Jobs">Customer Service Jobs</option>
          <option value="Education & Research Job">Education & Research Job</optionvalue="Engineering Jobs">Engineering         
          <option value="Entry Level Jobs">Entry Level Jobs</option>
          <option value="FMCG Jobs">FMCG Jobs</option>
          <option  value="Freelance & Consulting Jobs">Freelance & Consulting Jobs</option>
          <option  value="Government Jobs">Government Jobs</option>
          <option  value="Healthcare Jobs">Healthcare Jobs</option>
          <option value="Hotel Jobs">Hotel Jobs</option>
          <option value="Oil & Gas Jobs">Oil & Gas Jobs</option>
          <option value="Security Jobs">Security Jobs</option>
          <option  value="Telecom Jobs">Telecom Jobs</option>
          <option  value="Work From Home Jobs">Work From Home Jobs</option>
          <option  value="Management Jobs">Management Jobs</option>
          <option  value="Tech">Tech</option>
          <option name="category"value="IT Jobs">IT Jobs</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>




  <div class="w-full md:flex md:items-center  md:gap-4 mb-6 ">
    <label class="md:w-1/3 block font-light tracking-wide mb-2" for="industry">
      Industry 
    </label>
    <div class="relative">
      <select class="block  appearance-none w-full box bg-paleYellow   py-3 px-4 pr-8 rounded " id="industry" name="industry">
        <option value="">
          Select Industry
        </option>
        <option value="Agriculture">Agriculture</option>
        <option  value="Banking">Banking</option>
        <option  value="Education">Education</option>
        <option  value="Entertainment">Entertainment</option>
        <option value="FMCG">FMCG</option>
        <option  value="Food">Food</option>
        <option  value="Government">Government</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Insurance">Insurance</option>
        <option value="Oil & Gas">Oil & Gas
           </option>
        <option value="Real Estate">Real Estate</option>
        <option value="Transport">Transport</option>
        <option value="Building & Construction">Building & Construction</option>
        <option value="Tech">Tech</option>
        <option  value="Software Engineering">Software Engineering</option>
        <option  value="Networking">Networking</option>
        <option  value="Marketing">Marketing</option>
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </div>
    </div>
  </div>

  <div class="w-full md:flex  md:gap-4 mb-6 ">
    <label class="block md:w-1/3 font-light tracking-wide mb-2" for="qualifications">
     Job Qualifications 
    </label>
    <div class="relative">
      <select class="block appearance-none w-full box bg-paleYellow  py-3 px-4 pr-8 rounded " id="qualifications" name="qualifications">
        <option value="">
          Select Job Qualifications
        </option>
        <option value="Master">Master</option>
        <option value="PHD">PHD</option>
        <option value="Bachelor's Degree">Bachelor's Degree</option>
        <option value="Diploma degree">Diploma degree</option>
        <option value="Grade 12">Grade 12</option>
        <option value="SSCE">SSCE</option>
        <option value="High School">High School</option>
        <option value="OND">OND</option>
        <option value="Doctorate Degree">Doctorate Degree</option>
        <option value="HND/Bachelor's degree">HND/Bachelor's degree</option>
        <option value="High school certificate">High school certificate</option>
        <option value="MBBS">MBBS</option>
        <option value="KCSE">KCSE</option>
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </div>
    </div>
  </div>


  <div class="w-full md:flex md:items-center md:gap-4 mb-6 ">
    <label class="block md:w-1/3  font-light  tracking-wide mb-2" for="type">
     Job Type
    </label>
    <div class="relative">
      <select class="block appearance-none w-full  box bg-paleYellow   py-3 px-4 pr-8 rounded " id="type" name="type">
       <option value=""> 
       Select Job type
       </option>
        <option value="Freelance">Freelance</option>
        <option value="Full time">Full time</option>
        <option value="Contract">Contract</option>
        <option value="Internship">Internship</option>
        <option value="Temporary">Temporary</option>
        <option value="Part time">Part time</option>
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </div>
    </div>
  </div>




     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="email" class="font-light">
               Contact Email
               </label>
      </div>
       <div class="md:w-2/3">
      <input type="text" id="email" name="email" class="appearance-none border-none box bg-paleYellow     rounded w-full py-2 px-4 focus:outline-none "value="{{$job->email}}">
       @error('email')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
    @enderror
          </div>
     
     </div>


   <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="location" class="font-light">
               Location
               </label>
      </div>
       <div class="md:w-2/3">
      <input type="text" id="location" name="location" class="appearance-none border-none box bg-paleYellow rounded w-full py-2 px-4 focus:outline-none "value="{{$job->location}}">
           @error('location')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
    @enderror
          </div>

     </div>



     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          <label for="name" class="font-light">
                Employer Name
               </label>
      </div>
               <div class="md:w-2/3">
                 <input type="text" id="name" name="name" class="appearance-none border-none box bg-paleYellow rounded w-full py-2 px-4 
                 focus:outline-none " value="{{$job->name}}">
       @error('name')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
    @enderror
               </div>

     </div>


    
   
     
      <div class="md:flex md:items-center mb-6">
        <h6 class="font-light">Add Attachment(optional)</h6>
    <input type="file" name="attachment" class="bg-paleYellow text-black w-10/12 box text-black rounded">

      </div>
  


  <div class="flex flex-col mb-6">
    <label for="description" class="mb-3 font-light">
      Description 
    </label> 
   <textarea class='p-5 box bg-paleYellow rounded w-full' name="description" cols="25" rows="10"id="description" >{{$job->description}}</textarea>
  @error('description')
    <p class="text-red text-xs mt-1 ">{{ $message }}</p>
    @enderror
   </div>
      
      
<div class="md:flex md:items-center">
  <div class="md:w-2/3">
    <button type="submit" class=" box bg-paleYellow py-2 px-2 rounded">
      Submit
    </button>
  </div>
   </div>
      
 </x-signCard>


</form>
</div>
</body>
</html>