import {Swiper} from 'swiper'
import {Navigation} from "swiper/modules"

export default () => {
  const sliderList = document.querySelectorAll('.article-slider')

  if (sliderList.length) {
    sliderList.forEach(slider => {
      const prevEl = slider.querySelector('.article-slider__arrow_prev'),
        nextEl = slider.querySelector('.article-slider__arrow_next')

      new Swiper(slider, {
        modules: [Navigation],
        spaceBetween: 16,
        navigation: {
          prevEl,
          nextEl,
          disabledClass: 'slider__arrow_disabled',
          lockClass: 'slider__arrow_lock',
        }
      })
    })
  }
}
