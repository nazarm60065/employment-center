import {Swiper} from 'swiper'

export default () => {
  const tabSlider = document.querySelector('.homepage-features-tabs'),
    slider = document.querySelector('.homepage-features-slider')

  let swiperObj, tabSwiperObj

  if (tabSlider && slider) {
    const tabSlidesList = tabSlider.querySelectorAll('.homepage-features-tab')

    if (tabSlidesList.length) {
      tabSlidesList.forEach(tabSlide => {
        tabSlide.addEventListener('click', tabClickHandler)
      })
    }

    tabSwiperObj = new Swiper(tabSlider, {
      spaceBetween: 8,
      slidesPerView: 'auto',
      slideToClickedSlide: true,
      breakpoints: {
        1280: {
          slidesPerView: "auto",
          centeredSlides: true,
          centeredSlidesBounds: true,
          centerInsufficientSlides: true,
          slideToClickedSlide: false,
        },
      }
    })

    swiperObj = new Swiper(slider, {
      spaceBetween: 20,
      breakpoints: {
        768: {
          slidesPerView: "auto",
        },
        1280: {
          slidesPerView: 'auto',
          spaceBetween: 24,
        },
      }
    })

    setTimeout(() => {
      tabSwiperObj.update()
    }, 500)
  }

  function tabClickHandler(event) {
    const tab = event.target.closest('.homepage-features-tab')

    if (tab) {
      const slide = slider.querySelector('.homepage-features-slide[data-tab="' + tab.dataset['tab'] + '"]'),
        activeTabList = tabSlider.querySelectorAll('.homepage-features-tab_active')

      activeTabList.forEach(activeTab => {
        activeTab.classList.remove('homepage-features-tab_active')
      })
      tab.classList.add('homepage-features-tab_active')

      if (slide && swiperObj) {
        swiperObj.slideTo((slide.dataset['index'] - 1))
      }
    }
  }
}
