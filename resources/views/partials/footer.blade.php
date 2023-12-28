
    <div class="grid gap-3 md:grid-cols-2 grid-cols-1 w-full bg-black place-items-center h-1/2
    ">
      <div class="pt-12">
    <div class="flex flex-col text-center text-white items-center justify-center gap-10 md:gap-6">
      <h4>
        MARSHALL
      </h4>
      
      <div class="flex text-xl text-center">
        <span><a href="https://www.facebook.com/immaa.ajayi" target="_blank">
  <i class="fa-brands fa-facebook mr-3"></i></a>
   
   <a href="https://www.instagram.com/toby_ay201/" ><i class="fa-brands fa-instagram mr-3"target="_blank"></a></i>
   <a href="https://www.linkedin.com/in/abegunde-emmanuel-573687185"> <i class="fa-brands fa-linkedin mr-3"target="_blank"></a></i>
   <a href="https://twitter.com/toby_ay201?s=21&t=zv7pt-bY9v_4OZrnXnshaw"> <i class="fa-brands fa-twitter mr-3"target="_blank"></a></i>
   <a href="https://api.whatsapp.com/send?phone=2347081933630"> <i class="fa-brands fa-whatsapp mr-3"></a></i>
    
  </span>
</div>
   </div>

    </div>
    

    <div class="md:pt-10 md:flex-row    flex flex-col gap-5 pb-10 text-center text-white" >
    @if(Auth::check()) 
    @if(Auth::user()->is_employer === 1) 
  <h5><a href="{{ route('job.create') }}"> Job Post
    </a></h5>
    @endif
    
    @else
      <h4>
      <a href="{{ route('signin') }}" class="">Login</a>
      </h4>
      <h4>
      <a href="{{ route('signup.create') }}" class="">Register</a>
      </h4>
    
    @endif
      </div>
    
  </div>
    <div class= "border-t-4 border-white-100 justify-center flex w-full gap-2 py-6 text-white w-11/12 md:w-4/5  mx-auto">
      <p>
        Marshall Fan • All right reserved
      </p>
    </div>



<script>
  window.addEventListener('scroll' , ()=>{
  document.querySelector('body').classList.toggle('window' , window.scrollY > 6)
})



const menu = document.querySelector('#menu')
const closeBtn = document.querySelector('#close-btn')
const openBtn = document.querySelector('#open-btn')
 const mediaQuery = window.matchMedia('(max-width: 500px)')
// Check if the media query is true
if (mediaQuery.matches) {
const lists = document.querySelectorAll('li');
lists.forEach((list) =>{
  list.addEventListener('click', ()=>{
  menu.style.display ='none'
  openBtn.style.display='inline-block'
  closeBtn.style.display='none'
  })
})

}

openBtn.addEventListener('click' ,()=>{
  menu.style.display ='flex'
  openBtn.style.display='none'
  closeBtn.style.display='inline-block'
} )

closeBtn.addEventListener('click' , ()=>{
    menu.style.display ='none'
  openBtn.style.display='inline-block'
  closeBtn.style.display='none'

})

</script>

</body>

</html>