@extends('layouts.main')
@php $title = 'title.home'; @endphp
@section('main')

  <div id="system" class="xl:pt-4 pb-4 bg-no-repeat bg-cover bg-bottom flex flex-col" style="background-image: url('/img/main/1.jpg')">

    <article class="2xl:px-64 p-4">
      <anyrent-iframe data-locale="{{$language}}"></anyrent-iframe>
      <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
    </article>

    <span id="home-page"></span>
    
    <!-- Reviews Computer -->
    <div class="relative z-10 w-full overflow-x-hidden xl:block hidden">
    
      <!-- Carousel Slide -->
      <div id="carousel-slide-reviews" class="grid transition-transform duration-500 w-full px-4 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) calc(100%/3) @endfor">
        
        @for ($i = 1; $i <= count($reviews); $i++)
        
          <!-- Carousel Item -->
          <div class="reviews-item w-full p-4 cursor-pointer" id="{{$i-1}}-reviews">
    
            <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-lg shadow-2xl bg-white">
  
              <div class="flex w-full gap-8 items-start">
                
                <img src="{{$reviews[$i]['photo']}}" alt="Valentina Vucicic" class="h-20 w-20">
                
                <div class="flex flex-col gap-2">
  
                  <h2 class="font-bold">{{$reviews[$i]['name']}}</h2>
          
                  <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>              
  
                </div>
  
              </div>
  
              <p class="font-semibold text-start w-full">{{$reviews[$i]['comment'][$language]}}</p>
    
            </div>
    
          </div>
        
        @endfor
    
      </div>
    
      <!-- Carousel Indicator -->
      <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 md:z-auto z-40" id="carousel-indicators-div-reviews">
      
        <input type="hidden" id="carousel-selected-indicator-color-reviews" value="bg-white">
    
        @for ($i = 0; $i <= count($reviews)-1; $i++)
        
          <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews"></div>
    
        @endfor
    
      </div>
        
    </div>
    
    <!-- Reviews Mobile/Tablet -->
    <div class="relative z-10 w-full overflow-x-hidden xl:hidden">
    
      <!-- Carousel Slide -->
      <div id="carousel-slide-reviews-mobile" class="grid transition-transform duration-500 w-full xl:py-8 pb-8" style="grid-template-columns: @for($i = 1; $i <= count($reviews); $i++) 100% @endfor">
      
        @for ($i = 1; $i <= count($reviews); $i++)
            
          <!-- Carousel Item -->
          <div class="reviews-mobile-item w-full p-4" id="{{$i-1}}-reviews-mobile">
    
            <div class="flex flex-col justify-start items-center h-full p-6 gap-4 rounded-md shadow-2xl bg-white">
    
              <img src="{{$reviews[$i]['photo']}}" alt="Valentina Vucicic" class="h-20 w-20">
      
              <h2 class="font-bold">{{$reviews[$i]['name']}}</h2>
      
              <h3 class="[&>i]:text-yellow-400 text-base"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      
              <p>{{$reviews[$i]['comment'][$language]}}</p>
    
            </div>
    
          </div>
          
        @endfor
    
      </div>
    
      <!-- Carousel Indicator -->
      <div class="absolute bottom-0 w-full xl:hidden flex justify-between items-center gap-2 px-4 z-40" id="carousel-indicators-div-reviews-mobile">
      
        <input type="hidden" id="carousel-selected-indicator-color-reviews-mobile" value="bg-white">

        <!-- Previous Button -->
        <button class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="prevBtn-reviews-mobile">
          <i class="fas fa-arrow-left text-lg"></i>
        </button>

        <div class="flex gap-2 items-center">

          @for ($i = 0; $i <= count($reviews)-1; $i++)
          
            <div class="w-4 h-4 rounded-full cursor-pointer border-2 border-white" id="carousel-{{$i}}-indicator-reviews-mobile"></div>
      
          @endfor

        </div>
    
        <!-- Next Button -->
        <button class="cursor-pointer w-8 h-8 bg-white text-black rounded-full flex items-center justify-center" id="nextBtn-reviews-mobile">
          <i class="fas fa-arrow-right text-lg"></i>
        </button>
    
      </div>
        
    </div> 

  </div>

  <!-- Why choose achieve -->
  <article class="w-full py-8 grid xl:grid-cols-3 gap-4 bg-flagRed/20 2xl:px-64">
    
    <!-- Budget Friendly -->
    <h2 class="xl:col-span-3 text-center w-full text-4xl font-semibold">@lang('home.why.choose.arac.title.1')</h2>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-handshake text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.1')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <x-font-awesome.no-credit-card/>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.2')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fa-solid fa-person-circle-plus text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.3')</h3>
    </div>

    <!-- Secure -->
    <h2 class="xl:col-span-3 text-center w-full text-4xl font-semibold pt-8">@lang('home.why.choose.arac.title.2')</h2>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <x-font-awesome.hand-holding-car/>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.4')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-file-shield text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.5')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-map-marked-alt text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.6')</h3>
    </div>

    <!-- Full Satisfaction -->
    <h2 class="xl:col-span-3 text-center w-full text-4xl font-semibold pt-8">@lang('home.why.choose.arac.title.3')</h2>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-smile text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.7')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-check-double text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.8')</h3>
    </div>

    <div class="w-full flex justify-start items-center bg-white px-4 py-2 shadow-2xl rounded-md gap-4">
      <i class="fas fa-paper-plane text-3xl"></i>
      <h3 class="font-semibold text-base">@lang('home.why.choose.arac.item.9')</h3>
    </div>

  </article>

  <!-- Poem -->
  <div class="w-full xl:px-64 px-4 flex flex-col gap-4 py-4">

    <!-- Text -->
    <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('home.poem.title')</h2>

    <!-- Poem -->
    <div class="bg-flagRed/20 rounded px-4 py-12 flex flex-col justify-between gap-4 w-full xl:col-span-2">

      <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>

      @if($language != 'pt')
        <h3 class="text-center py-0 xl:text-2xl text-xl">@lang('home.poem.poem')</h3>
      @endif

      <h4 class="py-0 text-sm text-end w-full">@lang('home.poem.author')</h4>
      
      <!-- Paragraph -->
      <p class="xl:text-start text-justify">@lang('home.poem.paragraph')</p>

    </div>

  </div>

  <!-- Pleasant Experience -->
  <div class="py-8 flex flex-col gap-8 bg-flagRed/20">

    <!-- Cards -->
    <div class="grid lg:grid-cols-2 w-full xl:px-64 px-4 gap-4">

      <h2 class="lg:col-span-2 py-4 text-center font-bold text-4xl">@lang('home.pleasant.experience.title')</h2>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/pages/home/2.png')}}" alt="@lang('home.pleasant.experience.card.1.image')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.experience.card.1.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.experience.card.1.paragraph')
          </p>
          @for($i = 1; $i <= 5; $i++)
            <p class="py-1 flex gap-2">
              <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
              @lang('home.pleasant.experience.card.1.item.'.$i)
            </p>
          @endfor
        </div>
      </div>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/pages/home/3.png')}}" alt="@lang('home.pleasant.experience.card.2.image')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home.pleasant.experience.card.2.title')</h3>
          <p class="mt-2 text-justify">
            @lang('home.pleasant.experience.card.2.paragraph')
          </p>
        </div>
      </div>

    </div>

  </div>

  <!-- Explore Madeira -->
  <div class="py-8 flex flex-col gap-8 xl:px-64 px-4">
  
    <!-- Content -->
    <div class="w-full flex flex-col items-center gap-8">

      <!-- Text -->            
      <div class="flex flex-col items-center justify-center gap-4 xl:w-1/2">

        <h3 class="text-center py-0">@lang('home.explore.subtitle')</h3>
        <h2 class="text-center py-0 font-bold">@lang('home.explore.title')</h2>
        <p class="text-center">@lang('home.explore.paragraph')</p>

      </div>

      <!-- Items -->
      <div class="grid lg:grid-cols-3 gap-4 w-full">
        @php $icons = ['fa-car-rear', 'fa-lock', 'fa-headset'] @endphp
        @for ($i = 1; $i <= 3; $i++)
          <div class="md:grid md:grid-rows-3 flex flex-col gap-4 md:gap-0 items-center justify-items-center rounded-lg shadow-lg md:p-8 p-4">
            <i class="fa-solid {{$icons[$i-1]}} text-5xl py-4"></i>
            <h2 class="text-center">@lang('home.explore.card.'.$i.'.title')</h2>
            <p>@lang('home.explore.card.'.$i.'.paragraph')</p>
          </div>
        @endfor
      </div>

    </div>

  </div>

@endsection
