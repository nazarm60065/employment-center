import loadingAttributePolyfill from 'loading-attribute-polyfill/dist/loading-attribute-polyfill.module'

import {Header} from "../../header/header"

import './common.sass'
import './templates'

window.loadingAttributePolyfill = loadingAttributePolyfill

document.addEventListener('DOMContentLoaded', () => {
  setTimeout(setCssVariables)

  new Header()
})

function setCssVariables() {
  const scrollbarWidth = window.innerWidth - document.body.clientWidth,
    header = document.querySelector('.header')

  let windowScrolled= window.scrollY

  document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)

  windowScrollHandler()
  document.addEventListener('click', docClickHandler)
  window.addEventListener('scroll', windowScrollHandler, {passive: true})

  function docClickHandler(event) {
    const anchor = event.target.closest('.anchor')

    if (anchor && anchor.dataset['src']) {
      const block = document.querySelector(anchor.dataset['src'])

      event.preventDefault()

      if (block) block.scrollIntoView({
        behavior: "smooth",
        block: 'start',
      })
    }
  }

  function windowScrollHandler(event) {
    if (window.scrollY > 0) {
      header.classList.add('header_fixed')
    } else {
      header.classList.remove('header_fixed')
    }

    if (windowScrolled - window.scrollY > 0) {
      header.classList.add('header_scroll-up')
    } else {
      header.classList.remove('header_scroll-up')
    }

    windowScrolled= window.scrollY
  }
}