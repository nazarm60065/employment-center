import { gsap } from "gsap"

export default () => {
  const wrapper = document.querySelector('.vacancies-form-wrapper'),
    container = document.querySelector('.vacancies-form-inner'),
    hintList = document.querySelectorAll('.vacancies-form-image')

  let mouseHandlerActive = false

  if (hintList.length) {
    wrapper.addEventListener('mouseenter', mouseEnterHandler)
    wrapper.addEventListener('mouseleave', mouseLeaveHandler)
    window.addEventListener('mousemove', mouseMoveHandler)
  }

  function hideHint(hint) {
    const textContainer = hint.querySelector('.homepage-support-hint-text-container')

    hint.classList.remove('homepage-support-hint_active')

    if (textContainer) textContainer.style.height = ''
  }

  function showHint(hint) {
    const textContainer = hint.querySelector('.homepage-support-hint-text-container'),
      text = hint.querySelector('.homepage-support-hint__text')

    hint.classList.add('homepage-support-hint_active')

    if (text && textContainer) {
      textContainer.style.height = text.scrollHeight + 'px'
    }
  }

  function mouseEnterHandler() {
    mouseHandlerActive = window.innerWidth >= 1280
  }

  function mouseLeaveHandler() {
    mouseHandlerActive = false
  }

  function mouseMoveHandler(event) {
    if (mouseHandlerActive) {
      const wrapperOffset = container.getBoundingClientRect()

      hintList.forEach((hint, index) => {
        const position = hint.dataset['shift'];

        parallaxIt(event, hint, position, wrapperOffset)
      });
    }
  }

  function parallaxIt(e, target, movement, wrapperOffset) {
    let relX = e.pageX - wrapperOffset.left,
      relY = e.pageY - wrapperOffset.top,
      x = (relX - wrapperOffset.width / 2) / wrapperOffset.width * movement,
      y = (relY - wrapperOffset.height / 2) / wrapperOffset.height / 2 * movement

    gsap.to(target, {
      x: x,
      y: y,
      duration: 1
    });
  }
}
