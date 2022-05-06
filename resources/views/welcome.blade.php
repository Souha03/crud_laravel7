<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>NutriHealth</title>
</head>
<body>


  
    
    <div class="main">
        <header class="header">
        <ul class="menu" >
          <li class="menu__item"><a href="#" class="menu__link">Overview</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Features</a></li>
          <li class="menu__item"><a href="#"class="menu__link">About</a></li>
          <li class="menu__item"><a href="#"class="menu__link">Contact</a></li>
        </ul>
    
         
        
           
        

          <button  class="btn" {{ route ('login')}}>
           
                <a href="{{ route('login') }}">Sign in</a>
                    
          </button>
          
          
        
      </header >
    
       
        <section class="first-section">
          <div class="info">
            <h1 class="heading-1">To Be In A Good <span>Health !</span></h1>
            <p class="paragraph">You want to make an appointment ? </p>
            {{-- <a class="btn btn--start">

              <button type="button" class="btn btn-warning">
                @if (Route::has('register'))
                <a href="{{ route('register') }}"> Get started</a>
            @endif
                
               </button> </a> --}}
          </div>
          <div class="visuals">
            <div    class="image-container1">
              <img src="../assets/Vector.png" alt="">
            </div>
            <div  class="image-container">
              <img src="../assets/Diet-PNG-Image-File 1.png" alt="">
            </div>
          </div>
        </section>
      
      
       <section class="second-section">

        <div class="section_2">

          <div class="box">
            <h1 class="heading" > <span>Why NutriHealth ?</span></h1>
          </div>
      
          {{-- <div class="info__cercle">
            <img src="../assets/Ellipse 3.png" alt=""> 
          </div> --}}
      
      
         <div class="info-1">
      
          <div class="vector_rectangle">
            <div class="info-2">
              <div class="info-1__visual">
                 <img src="../assets/Vector-2.png" alt=""> 
              </div>
        
             <div class="info-1__text">
                 <img src="../assets/Ellipse 1.png" alt="">
             </div>
            </div>
    
        
            <div class="info-rectangle">
              <div class="info-1__rectangle">
                <img src="../assets/Rectangle 1.png" alt=""> 
              </div>
        
              <div class="info-2__rectangle">
                 <img src="../assets/Rectangle 2.png" alt="">
              </div>
        
              <div class="info-3__rectangle">
                <img src="../assets/Rectangle 3.png" alt="">
              </div>
      
            </div>
         </div>

        </div>
          
          
          
         <div class="info-1_img">
          <div class="info-1__visual1">
            <img src="../assets/—Pngtree—medical doctor medicine drug hospital_5352024 1.png" alt="">
            <h2 class="heading-1">Simplicity</h2>
            <p class="paragraph">Quick access to your doctor</p>
          </div>
      
          <div class="info-1__visual2">
            <img src="../assets/—Pngtree—calendar time monthly calendar chart_5324170 1.png" alt="">
            <h2 class="heading-2">Flexibility</h2>
            <p class="paragraph">Make an appointment online at any time</p>
          </div>
      
          <div class="info-1__visual3">
            <img src="../assets/Notification-bell-icon-new-message-bell-Premium-vector-PNG 1.png" alt="">
            <h2 class="heading-3">Tracking</h2>
            <p class="paragraph">Receive personalized sms/email reminders</p>
          </div>
        </div>
        </section>
      </div>

      <section class="third section">
        
        <div class="info_third_1">
          <img src="../assets/—Pngtree—mobile phone model 2 5d_3919693 1.png" alt="">
          <h2 class="heading-4">Digital</h2>
          <h3 class="heading-4">Say goodbye to paper !</h3>
          <p class="paragraph">"I want to digitize records and move to an electronic patient record."</p>
        </div>
    


      </section>
</body>
</html>