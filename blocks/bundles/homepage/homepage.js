import './templates'

import homepageFeatures from "../../homepage-features/homepage-features"
import homepageCareer from "../../homepage-career/homepage-career"
import homepageSupport from "../../homepage-support/homepage-support"
import homepageRegion from "../../homepage-region/homepage-region"
import homepageNews from "../../homepage-news/homepage-news"
import homepageProjects from "../../homepage-projects/homepage-projects"
import {HomepageTop} from '../../homepage-top/homepage-top'

import 'swiper/css'
import 'swiper/css/effect-fade'
import './homepage.sass'


document.addEventListener('DOMContentLoaded', () => {
  new HomepageTop()
  homepageFeatures()
  homepageCareer()
  homepageSupport()
  homepageRegion()
  homepageNews()
  homepageProjects()
})