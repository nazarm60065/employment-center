export class HomepageTop {
  constructor(params) {
    this.params = {
      ...{
        selectors: {
          wrapper: '.homepage-top',
          btnContainer: '.homepage-top-button-container',
          title: '.homepage-top__title',
        },
        classes: {}
      },
      ...params
    }

    this.init()
  }

  init() {
    this.selectors = this.params.selectors
    this.classes = this.params.classes
    this.wrapper = document.querySelector(this.selectors.wrapper)

    if (this.wrapper) {
      this.btnContainer = this.wrapper.querySelector(this.selectors.btnContainer)
      this.title = this.wrapper.querySelector(this.selectors.title)

      if (this.btnContainer && this.title) {
        this.attachEvents();
      }
    }
  }

  attachEvents() {
    window.addEventListener('scroll', this.scrollHandler.bind(this), {passive: true})
  }

  scrollHandler() {
    if (window.innerWidth >= 768) {
      const viewportOffsetTop = window.scrollY,
        viewportOffsetCenter = window.scrollY + window.innerHeight / 2,
        wrapperViewportOffset = this.wrapper.getBoundingClientRect(),
        wrapperViewportOffsetTop = viewportOffsetTop + wrapperViewportOffset.top,
        wrapperViewportOffsetBottom = wrapperViewportOffsetTop + wrapperViewportOffset.height

      if ((viewportOffsetTop >= wrapperViewportOffsetTop) && (viewportOffsetCenter <= wrapperViewportOffsetBottom)) {
        const progress = Math.floor((viewportOffsetTop - wrapperViewportOffsetTop) / (wrapperViewportOffset.height / 2)  * 100) / 100

        this.calculateProgress(progress, wrapperViewportOffset.height)
      } else {
        if (viewportOffsetTop > wrapperViewportOffsetTop) {
          this.calculateProgress(1)
        } else {
          this.calculateProgress(0)
        }
      }
    } else {
      this.title.style.transform = ``
      this.btnContainer.style.transform = ``
    }
  }

  calculateProgress(y, wrapperHeight) {
    let titleY = y * wrapperHeight / 8,
      btnContainerY = y * wrapperHeight / 6

    this.title.style.transform = `translate3d(0,${titleY}px,0)`
    this.btnContainer.style.transform = `translate3d(0,${btnContainerY}px,0)`
  }
}