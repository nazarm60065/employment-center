import {AdaptiveAccordion} from "../accordion/AdaptiveAccordion"

export default () => {
  const modal = document.querySelector('.vacancies-modal')

  if (modal) {
    const button = modal.querySelector('.vacancies-modal__button')

    button.addEventListener('click', () => {
      const form = document.querySelector('#vacancies-form')

      if (form) {
        setTimeout(() => {
          form.scrollIntoView({
            behavior: 'smooth',
            block: 'center',
          })
        }, 500)
      }
    })

    new AdaptiveAccordion({
      selectors: {
        accordion: '.vacancies-modal',
        item: '.vacancies-modal-col',
        trigger: '.vacancies-modal-col-top',
        hidden: '.vacancies-modal-col-hidden'
      },
      classes: {
        opened: 'vacancies-modal-col_opened',
      },
      defaultOpenIndexes: [0],
      breakpoint: 768,
    })
  }
}
