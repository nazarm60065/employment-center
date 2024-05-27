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
  const scrollbarWidth = window.innerWidth - document.body.clientWidth
  document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)

  document.addEventListener('click', docClickHandler)

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
}