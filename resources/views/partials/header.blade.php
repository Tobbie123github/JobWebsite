
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,200&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
 <script>
    tailwind.config = {
      theme: {
  screens: {
      'sm': '600px',
      'md': '768px',
      'lg': '1400px',
    },
    colors: {
      'paleYellow': '#f2dca3',
      'white': '#e4edf1',
      'transparent':'fffff',
      'black':'#000000',
      'red': '#ff0000',
      'green': '#006400',
      'lightgreen': '	#00FF00',
      'deepgreen': '#006400',
      'nav': '#ffffff64'
    },
    fontFamily: {
      Poppins: ['Poppins', 'sans-serif'],
      Roboto: [ 'Roboto', 'sans-serif'],
    },

  },
      }
    
    </script>

<style>
*{
  outline:0;
}

  #close-btn{
  display:none;
}



body.window{
  background-color: #e4edf1;
}

.gradient{
  background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.73)),
     url('/images/pexels-pixabay-38293.jpg')
}
.box{
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}
.box1{
text-shadow: 2px 0px 10px rgba(128, 128, 128, 0.98);
}
@media screen and (max-width:600px){
 nav{
  background-color: #ffffff64;
}
nav ul li{
  background-color: #ffffff64;
}

  ul{
    perspective: 350px;
  }
  ul li{
 animation: animate 0.4s ease forwards;
transform-origin: top;
transform: rotateX(90deg);
border:1px solid black;
  }
  ul li:nth-child(2){
animation-delay: 0.2s;

}

ul li:nth-child(3){
animation-delay: 0.4s;

}

ul li:nth-child(4){
animation-delay: 0.6s;

}



@keyframes animate {
  to{
    transform: rotate(0);
  }
}
  
}
</style>
    <!-------FONTAWESOME CDN----------->
  <!-- HTML -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/835efb29a1.css" crossorigin="anonymous">
  <!-- Custom Styles -->
<script src="https://kit.fontawesome.com/835efb29a1.js" crossorigin="anonymous"></script>

  <!-- Custom Styles -->
<link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">

</head>
