import {Swiper} from "swiper";

export default () => {
  const sections = document.querySelector('.news-sections')

  let sectionsObj

  if (sections) {
    sectionsObj = new Swiper(sections, {
      spaceBetween: 8,
      slidesPerView: 'auto',
      slideToClickedSlide: true,
      breakpoints: {
        1280: {
          slideToClickedSlide: false,
        },
      }
    })

    setTimeout(() => {
      sectionsObj.update()
    }, 500)
  }
}
