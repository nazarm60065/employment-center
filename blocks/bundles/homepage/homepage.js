import './templates'

import homepageFeatures from "../../homepage-features/homepage-features"
import homepageCareer from "../../homepage-career/homepage-career"
import homepageSupport from "../../homepage-support/homepage-support"

import 'swiper/css'
import './homepage.sass'


document.addEventListener('DOMContentLoaded', () => {
  homepageFeatures()
  homepageCareer()
  homepageSupport()
})