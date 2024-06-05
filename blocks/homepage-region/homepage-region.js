import {Swiper} from "swiper"
import {Navigation, EffectFade, Controller} from 'swiper/modules'

export default () => {
  const gallery = document.querySelector('.homepage-region-gallery'),
    slider = document.querySelector('.homepage-region-slider')

  let gallerySwiperObj, sliderSwiperObj

  if (gallery) {
    gallerySwiperObj = new Swiper(gallery, {
      modules: [EffectFade, Controller],
      allowTouchMove: false,
      effect: 'fade',
      loop: true,
      fadeEffect: {
        crossFade: false,
      }
    })
  }

  if (slider) {
    sliderSwiperObj = new Swiper(slider, {
      modules: [Navigation, Controller],
      autoHeight: true,
      loop: true,
      navigation: {
        prevEl: '.homepage-region-slider__arrow_prev',
        nextEl: '.homepage-region-slider__arrow_next',
        disabledClass: 'slider__arrow_disabled',
        lockClass: 'slider__arrow_lock',
      },
      controller: {
        control: gallerySwiperObj
      },
      breakpoints: {
        768: {
          spaceBetween: 50,
        }
      }
    })

    gallerySwiperObj.controller.control = sliderSwiperObj
  }
}
