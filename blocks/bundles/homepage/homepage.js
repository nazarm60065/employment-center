import './templates'

import homepageFeatures from "../../homepage-features/homepage-features"
import homepageCareer from "../../homepage-career/homepage-career"

import 'swiper/css'
import './homepage.sass'


document.addEventListener('DOMContentLoaded', () => {
  homepageFeatures()
  homepageCareer()
})