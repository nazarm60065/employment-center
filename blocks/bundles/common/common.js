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
}