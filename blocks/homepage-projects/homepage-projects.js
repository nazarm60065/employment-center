import {Swiper} from 'swiper'
import {Navigation} from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.homepage-projects-slider')

  if (slider) {
    new Swiper(slider, {
      modules: [Navigation],
      slidesPerView: 'auto',
      spaceBetween: 16,
      watchOverflow: true,
      watchSlidesProgress: true,
      navigation: {
        prevEl: '.homepage-projects__arrow_prev',
        nextEl: '.homepage-projects__arrow_next',
        disabledClass: 'slider__arrow_disabled',
        lockClass: 'slider__arrow_lock',
      },
      breakpoints: {
        768: {
          spaceBetween: 24,
        }
      }
    })
  }
}
