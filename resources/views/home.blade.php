@extends('layouts.main')
@section('main')

  <!-- Carousel Banner Computer -->
  @php $slides = 3; @endphp
  <div class="relative z-10 w-full overflow-x-hidden">

    <!-- Carousel Slide -->
    <div id="carousel-slide-banner" class="rounded xl:grid hidden transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
      
      <!-- Carousel Item 1 -->
      <div class="w-full flex items-center justify-start px-margin h-homeTitleXL bg-cover bg-bottom" style="background-image: url('/img/home/banner1.png')">

        <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
          <h1>@lang('home-banner-1-title')</h1>
          <p>@lang('home-banner-1-p.1')</p>
          <p>@lang('home-banner-1-p.2')</p>
          <p>@lang('home-banner-1-p.3')</p>
          <p>@lang('home-banner-1-p.4')</p>
        </div>
        
      </div>
      
      <!-- Carousel Item 2 -->
      <div class="w-full flex items-center justify-end px-margin h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner2.png')">

        <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
          <h1 class="text-end">@lang('home-banner-2-title')</h1>
          <p class="text-end">@lang('home-banner-2-p.1')</p>
          <p class="text-end">@lang('home-banner-2-p.2')</p>
        </div>

      </div>
      
      <!-- Carousel Item 3 -->
      <div class="w-full flex items-center justify-start pl-margin h-homeTitleXL bg-cover bg-center" style="background-image: url('/img/home/banner3.png')">

        <div class="bg-white/70 text-flagRed px-4 py-2 rounded-md font-semibold text-2xl">
          <h1>@lang('home-banner-3-title')</h1>
          <p>@lang('home-banner-3-p.1')</p>
          <p>@lang('home-banner-3-p.2')</p>
          <p>@lang('home-banner-3-p.3')</p>
        </div>

      </div>

    </div>

    <!-- Reviews Image -->
    <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">

      <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-2/5">

    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-banner">
    
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner"></div>

      @endfor

    </div>
      
  </div>

  <!-- Carousel Banner -->
  @php $slides = 3; @endphp
  <div class="relative z-10 w-full overflow-x-hidden">

    <!-- Carousel Slide -->
    <div id="carousel-slide-banner-mobile" class="rounded xl:hidden grid transition-transform duration-500 w-screen" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
      
      <!-- Carousel Item 1 -->
      <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-bottom" style="background-image: url('/img/home/banner1mobile.png')">

        <h1 class="text-flagRed px-2 py-1 rounded-md bg-white/85 font-medium text-2xl">@lang('home-banner-1-title')</h1>
        
        <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.1')</p>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.2')</p>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.3')</p>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/85 text-lg font-medium">@lang('home-banner-1-p.4')</p>
        
      </div>
      
      <!-- Carousel Item 2 -->
      <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-top" style="background-image: url('/img/home/banner2mobile.png')">

        <h1 class="px-2 py-1 rounded-md bg-white/50 text-flagRed font-medium text-2xl">@lang('home-banner-2-title')</h1>

        <p class="rounded-md px-2 py-1 bg-white/50 text-flagRed text-lg font-medium">@lang('home-banner-2-p.1')</p>

        <p class="rounded-md px-2 py-1 bg-white/50 text-flagRed text-lg font-medium">@lang('home-banner-2-p.2')</p>

      </div>
      
      <!-- Carousel Item 3 -->
      <div class="p-4 w-full flex flex-col items-start justify-start gap-1 h-homeTitle bg-cover bg-center" style="background-image: url('/img/home/banner3mobile.png')">

        <h1 class="text-flagRed px-2 py-1 rounded-md bg-white/75 font-medium text-2xl">@lang('home-banner-3-title')</h1>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.1')</p>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.2')</p>

        <p class="text-flagRed rounded-md px-2 py-1 bg-white/75 text-lg font-medium">@lang('home-banner-3-p.3')</p>

      </div>

    </div>

    <!-- Reviews Image -->
    <div class="absolute bottom-0 left-0 xl:px-margin px-4 py-4 w-full h-full grid xl:grid-cols-3 content-end">

      <img src="{{asset('/img/home/reviews.png')}}" alt="Google Reviews" class="bg-white/70 rounded-md py-1 px-2 w-1/3">

    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-banner-mobile">
    
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-banner-mobile"></div>

      @endfor

    </div>
      
  </div>


  <!-- Rent Now Cell Button -->
  <div class="w-full xl:px-margin p-4 flex justify-center items-center xl:hidden">
    <a title="@lang('home-button-booknow.Title')" href="#system" class="notActivateLoader text-center p-4 rounded-md text-white bg-flagRed w-full text-2xl">@lang('home-button-booknow')</a>
  </div>

  <!-- System -->
  @if($locale != 'translations')
    <div class="xl:px-margin px-4 xl:py-0 py-4" id="system">
      <anyrent-iframe data-locale="{{$locale=='local'?'pt':$locale}}"></anyrent-iframe>
      <script src="https://reservas.achieverentacar.com/themes/iframe/assets/vendor/anyrent-booking-engine.min.js"></script>
    </div>
  @endif

  <!-- Why choose achieve -->
  <div class="xl:px-margin px-4 py-8 flex flex-col gap-8">

    <!-- Separator -->
    <div class="flex items-center justify-center">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

    <h2 class="text-center">@lang('home-list-title')</h2>

    <p class="text-xl text-center">@lang('home-list-p')</p>

    <div class="grid xl:grid-cols-3 gap-4 grid-rows-9 xl:grid-rows-3">

      @for ($i = 1; $i <= 9; $i++)

        <div class="px-4 py-2 bg-flagRed text-white rounded flex justify-between items-center gap-4">

          <p>
            @lang('home-list-li.'.$i)
          </p>

          <div class="h-8 xl:w-auto w-8 fles items-center justify-end">

            @switch($i)

              @case(1)
                <i class="fas fa-handshake w-full h-full text-3xl"></i>
                @break
              @case(2)
                <x-font-awesome.hand-holding-car/>
                @break
              @case(3)
                <i class="fas fa-file-shield w-full h-full text-3xl"></i>
                @break
              @case(4)
                <x-font-awesome.no-credit-card/>
                @break
              @case(5)
                <i class="fa-solid fa-person-circle-plus w-full h-full text-3xl"></i>
                @break
              @case(6)
                <i class="fas fa-smile w-full h-full text-3xl"></i>
                @break
              @case(7)
                <i class="fas fa-check-double w-full h-full text-3xl"></i>
                @break
              @case(8)
                <i class="fas fa-map-marked-alt w-full h-full text-3xl"></i>
                @break
              @case(9)
                <i class="fas fa-paper-plane w-full h-full text-3xl"></i>
                @break
                    
            @endswitch

          </div>

        </div>

      @endfor

    </div>

  </div>

  <!-- Reviews -->
  @php $slides = 5; @endphp

  <!-- Separator -->
  <div class="flex items-center justify-center py-4">
    <div class="xl:w-1/3 w-full">
      <x-separator/>
    </div>
  </div>

  <!-- Carousel Section -->
  <div class="relative z-10 w-full overflow-x-hidden">

    <!-- Carousel Slide -->
    <div id="carousel-slide-reviews" class="rounded grid transition-transform duration-500 w-full" style="grid-template-columns: @for($i = 1; $i <= $slides; $i++) 100% @endfor">
      
      @for ($i = 1; $i <= 5; $i++)
          
        <!-- Carousel Item -->
        <div class="w-full bg-neutral-200 flex flex-col justify-between xl:px-margin px-4 rounded text-red-500 xl:py-4 xl:pb-4 pb-12">

          <p class="xl:py-4 py-2">@lang('home-reviews-'.$i.'-paragraph')</p>

          <div class="py-4 xl:flex items-center justify-start grid grid-cols-2 gap-2">

            <p>@lang('home-reviews-'.$i.'-author')</p>

            <div class="h-4 flex gap-1">
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
            </div>

          </div>

        </div>

      @endfor

    </div>

    <!-- Carousel Buttons -->
    <div class="absolute top-0 w-full h-full hidden justify-between xl:items-center items-end xl:z-auto z-50" id="carousel-buttons-div-reviews">
          
      <!-- Previous Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="prevBtn-reviews">
        <i class="fas fa-arrow-left p-4 xl:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>
      
      <!-- Next Button -->
      <button class="cursor-pointer w-32 flex items-center justify-center" id="nextBtn-reviews">
        <i class="fas fa-arrow-right p-4 xl:h-auto bg-flagRed h-16 w-16 text-4xl rounded-xl text-white"></i>
      </button>

    </div>

    <!-- Carousel Indicator -->
    <div class="absolute bottom-0 w-full hidden justify-center items-center gap-2 p-4 xl:z-auto z-40" id="carousel-indicators-div-reviews">
    
      @for ($i = 0; $i <= $slides-1; $i++)
      
        <div class="w-4 h-4 bg-white rounded-full cursor-pointer" id="carousel-{{$i}}-indicator-reviews"></div>

      @endfor

    </div>
      
  </div>


  <!-- 1 -->
  <div class="py-8 flex flex-col gap-8">

    <!-- Separator -->
    <div class="flex items-center justify-center xl:px-margin px-4">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>
  
    <!-- Content -->
    <div class="w-full xl:px-margin px-4 grid xl:grid-cols-5 grid-cols-1 gap-4">

      <!-- Text -->
      <div class="flex flex-col xl:items-start items-center justify-between gap-4 xl:order-1 order-2 xl:col-span-3">

        <!-- Title -->
        <h2 class="text-center xl:text-start py-0 xl:text-4xl text-2xl">@lang('home-1-Title')</h2>

        <!-- Poem -->
        <div class="bg-zinc-200 rounded p-4 flex flex-col gap-4 w-full">
          @if($locale != 'pt')
            <h3 class="text-start py-0 xl:text-2xl text-xl">“A Madeira é um jardim, no mundo não há igual;<br>Seu encanto não tem fim, é filha de Portugal.”</h3>
          @endif
          <h3 class="text-start py-0 xl:text-2xl text-xl">@lang('home-1-Poem')</h3>
          <h4 class="py-0 text-sm text-end w-full">@lang('home-1-Author')</h4>
        </div>

        <!-- Paragraph -->
        <p class="xl:text-start text-justify">@lang('home-1-Paragraph')</p>

      </div>

      <!-- Image -->
      <img src="{{asset('/img/home/1.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-lg xl:order-2 order-1 max-w-full h-auto w-full xl:col-span-2">

    </div>

  </div>

  <!-- 2 -->
  <div class="py-8 flex flex-col gap-8">
      
    <!-- Separator -->
    <div class="flex items-center justify-center xl:px-margin px-4">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>

    <!-- Cards -->
    <div class="grid xl:grid-cols-2 w-full xl:px-margin px-4 gap-4">

      <h2 class="xl:col-span-2 py-4 text-center font-bold text-4xl">@lang('home-2-Title')</h2>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/home/2.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home-2-Card.1-Title')</h3>
          <p class="mt-2 text-justify">
            @lang('home-2-Card.1-Paragraph')
          </p>
          @for($i = 1; $i <= 5; $i++)
            <p class="py-1 flex gap-2">
              <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#263e78" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
              @lang('home-2-Card.1-List.'.$i)
            </p>
          @endfor
        </div>
      </div>

      <div class="rounded-lg shadow-lg">
        <img src="{{asset('/img/home/3.png')}}" alt="@lang('Madeira.Island.Image.Alt')" class="rounded-t-lg w-full">
        <div class="p-4">
          <h3 class="text-2xl font-bold">@lang('home-2-Card.2-Title')</h3>
          <p class="mt-2 text-justify">
            @lang('home-2-Card.2-Paragraph')
          </p>
        </div>
      </div>

    </div>

  </div>

  <!-- 3 -->
  <div class="py-8 flex flex-col gap-8 xl:px-margin px-4">

    <!-- Separator -->
    <div class="flex items-center justify-center">
      <div class="xl:w-1/3 w-full">
        <x-separator/>
      </div>
    </div>
  
    <!-- Content -->
    <div class="w-full flex flex-col items-center gap-8">

      <!-- Text -->            
      <div class="flex flex-col items-center justify-center gap-4 xl:w-1/2">

        <h3 class="text-center py-0">@lang('home-3-Subtitle')</h3>
        <h2 class="text-center py-0 font-bold">@lang('home-3-Title')</h2>
        <p class="text-center">@lang('home-3-Paragraph')</p>

      </div>

      <!-- Items -->
      <div class="grid xl:grid-cols-3 gap-4 w-full">
        @for ($i = 1; $i <= 3; $i++)
          <div class="xl:grid xl:grid-rows-3 flex flex-col gap-4 xl:gap-0 items-center justify-items-center rounded-lg shadow-lg xl:p-8 p-4">
            <img src="{{asset('/img/home/3-items/'.$i.'.png')}}" alt="Item Image" class="rounded-lg h-12">
            <h2 class="text-center">@lang('home-3-Card.'.$i.'-Title')</h2>
            <p>@lang('home-3-Card.'.$i.'-Paragraph')</p>
          </div>
        @endfor
      </div>

    </div>

  </div>

@endsection
