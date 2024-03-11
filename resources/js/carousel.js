class Carousel
{
  id;
  secondsPerSlide;
  carouselSlide;
  carouselLength;
  prevBtn;
  nextBtn;
  counter;
  automation;
  positions;
  slidesPerView;
  isBlurPast;

  constructor(id, secondsPerSlide, slidesPerView)
  {
    this.id = id;
    this.secondsPerSlide = secondsPerSlide;
    this.slidesPerView = slidesPerView;
    this.isBlurPast = false;

    this.carouselSlide = document.querySelector('#carousel-slide-'+this.id);
    if(!this.carouselSlide) return;

    this.carouselLength = (this.carouselSlide.children.length - 1);
    this.prevBtn = document.getElementById('prevBtn-'+this.id);
    this.nextBtn = document.getElementById('nextBtn-'+this.id);
    this.counter = 0;

    this.adjustPositions();

    this.carouselSlide.style.transform = 'translateX('+this.positions[0]+')';

    this.adjustSize();
    window.addEventListener('resize', this.adjustSize.bind(this));
  }

  adjustPositions()
  {
    if(this.slidesPerView == 1)
    {
      this.positions = [];
      for(let i = 0; i <= this.carouselLength; i++)
        this.positions.push((i*-100)+'%');
    }
    else if(this.slidesPerView == 3)
    {
      this.positions = [];
      let computedCarousel = window.getComputedStyle(this.carouselSlide);
      let contentWidth = parseFloat(computedCarousel.width) - (parseFloat(computedCarousel.paddingLeft) + parseFloat(computedCarousel.paddingRight) );
      let currentValue = (contentWidth/3);
      for(let i = 0; i <= this.carouselLength; i++)
      {
        this.positions.push(currentValue+'px');
        currentValue -= (contentWidth/3);
      }
    }
  }

  adjustSize()
  {
    const pageWidth = document.documentElement.clientWidth;
    this.carouselSlide.style.width = pageWidth+'px';
    this.adjustPositions();
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + ')';
  }

  blurDiv(id)
  {
    if(!this.isBlurPast) return;
    let allDivs = document.querySelectorAll('.reviews-item');
    allDivs.forEach(element => {
      element.classList.add('blur-sm');
    });
    const div = document.getElementById(id+'-'+this.id);
    div.classList.remove('blur-sm');
  }

  slideNext()
  {
    // If the counter is greater than or equal to the length of the carousel, it means it is in the last slide
    if (this.counter >= this.carouselLength)
    {
      this.counter = 0;
      this.blurDiv(this.counter);
      this.carouselSlide.style.transform = 'translateX('+this.positions[0]+')';
      this.paintIndicator(this.counter);
      return;
    }

    this.counter++;
    this.blurDiv(this.counter);
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + ')';
    this.paintIndicator(this.counter);
  }

  slidePrev()
  {
    // If the counter is less than or equal to 0, it means it is in the first slide
    if (this.counter <= 0)
    {
      this.counter = this.carouselLength;
      this.blurDiv(this.counter);
      this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + ')';
      this.paintIndicator(this.counter);
      return;
    }

    this.counter--;
    this.blurDiv(this.counter);
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + ')';
    this.paintIndicator(this.counter);
  }

  clickedNext()
  {
    clearInterval(this.automation);
    this.slideNext();
  }

  clickedPrev()
  {
    clearInterval(this.automation);
    this.slidePrev();
  }

  slideIndicator(indicator)
  {
    clearInterval(this.automation);
    var index = indicator.target.id.split('-')[1];
    this.counter = index;
    this.blurDiv(this.counter);
    this.paintIndicator(index);
    this.carouselSlide.style.transform = 'translateX(' + this.positions[this.counter] + ')';
  }

  paintIndicator(index)
  {
    let defaultColor = document.getElementById('carousel-default-indicator-color-'+this.id).value;
    let selectedColor = document.getElementById('carousel-selected-indicator-color-'+this.id).value;

    for(var i = 0; i <= this.carouselLength; i++){
      var indicatorClear = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicatorClear.classList.add(defaultColor);
      indicatorClear.classList.remove(selectedColor);
    }
    
    var indicator = document.getElementById('carousel-'+index+'-indicator-'+this.id);
    indicator.classList.add(selectedColor);
    indicator.classList.remove(defaultColor);
  }

  /* PUBLIC FUNCTIONS FOR NEEDED FUNCTIONS */

  addSlideAutomatic()
  {
    if(!this.carouselSlide) return;
    this.automation = setInterval(this.slideNext.bind(this), this.secondsPerSlide);
  }

  addArrows()
  {
    if(!this.carouselSlide) return;
    const carouselButtonsDiv = document.getElementById('carousel-buttons-div-'+this.id);
    carouselButtonsDiv.style.display = 'flex';

    this.nextBtn.addEventListener('click', this.clickedNext.bind(this));
    this.prevBtn.addEventListener('click', this.clickedPrev.bind(this));
  }

  addIndicators()
  {
    if(!this.carouselSlide) return;
    const carouselIndicatorsDiv = document.getElementById('carousel-indicators-div-'+this.id);
    carouselIndicatorsDiv.style.display = 'flex';

    this.paintIndicator(0);

    for(var i = 0; i <= this.carouselLength; i++){
      var indicator = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicator.addEventListener('click', this.slideIndicator.bind(this));
    }
  }

  blurPast()
  {
    this.isBlurPast = true;
  }
}

const banner = new Carousel('banner', 6000, 1);
banner.addSlideAutomatic();
banner.addIndicators();

const bannerMobile = new Carousel('banner-mobile', 6000, 1);
bannerMobile.addSlideAutomatic();
bannerMobile.addIndicators();

const reviews = new Carousel('reviews', 10000, 3);
reviews.addSlideAutomatic();
reviews.addIndicators();
reviews.blurPast();
