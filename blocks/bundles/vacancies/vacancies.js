import './templates'

import vacanciesModal from "../../vacancies-modal/vacancies-modal"
import vacanciesForm from "../../vacancies-form/vacancies-form"

import './vacancies.sass'

document.addEventListener('DOMContentLoaded', () => {
  vacanciesForm()
  vacanciesModal()
})