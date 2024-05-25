import {Expander} from 'expander/Expander'

export default () => {
  const expander = document.querySelector('.homepage-career-expander')

  let expanderObj, resizeTimer

  if (expander) {
    checkExpander()

    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer)

      resizeTimer = setTimeout(checkExpander, 250)
    })
  }

  function checkExpander() {
    if (window.innerWidth >= 768 && expanderObj) {
      expanderObj.destroy()
      expanderObj = null
    }

    if (window.innerWidth < 768 && !expanderObj) {
      init()
    }
  }

  function init() {
    expanderObj = new Expander({
      selectors: {
        expander: expander, // блок-контейнер
        toggle: '.homepage-career-expander__toggle', // переключатель состояний
        toggleText: '.homepage-career-expander__toggle-text', // блок с текстом переключателя, опционально, на случай, если в переключателе есть иконка
        hidden: '.homepage-career-expander-hidden', // блок с контентом, который сворачивается
        element: '.homepage-career-card',
      },
      classes: {
        opened: 'homepage-career-expander_expand', // модификатор развернутого состояния
        unset: 'homepage-career-expander_unset' // модификатор состояния, при котором плагин неактивен для данного разрешения экрана
      },
      text: {
        expanded: 'Свернуть', // текст переключателя в развернутом положении
        collapsed: 'Смотреть все сферы', // текст переключателя в свернутом положении
      },
      countElements: 8,
    })
  }
}
