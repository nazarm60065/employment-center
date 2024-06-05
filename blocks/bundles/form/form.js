import './templates'
import { fbInitAll } from '../../custom-fancybox/custom-fancybox'
import Inputmask from "inputmask"

import './form.sass'

document.addEventListener('DOMContentLoaded', () => {
  let phoneControlList = document.querySelectorAll('.form__control_tel')

  if (phoneControlList.length) {
    new Inputmask({
      mask: '+7 (999) 999-99-99',
      showMaskOnHover: false,
    }).mask(phoneControlList)
  }

  // инициализация fancybox
  fbInitAll()
})