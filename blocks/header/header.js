export class Header {
  constructor(params) {
    this.params = {
      ...{
        selectors: {
          headerModal: '.header-modal',
          page: '.page',
          toggle: '.header-toggle__button',
          overlay: '.header-modal-overlay',
          menuItem: '.header-modal-menu-item__link',
        },
        classes: {
          headerModalReady: 'header-modal_ready',
          pageMenuOpened: 'page_menu-opened'
        }
      },
      ...params
    }

    this.init()
  }

  init() {
    this.selectors = this.params.selectors
    this.classes = this.params.classes
    this.headerModal = document.querySelector(this.selectors.headerModal)

    if (this.headerModal) {
      this.headerModal.classList.add(this.classes.headerModalReady)
      this.page = document.querySelector(this.selectors.page)

      this.attachEvents();
    }
  }

  attachEvents() {
    document.addEventListener('click', this.docClickHandler.bind(this))
  }

  docClickHandler(event) {
    const toggle = event.target.closest(this.selectors.toggle)

    if (toggle) {
      if (this.page.classList.contains(this.classes.pageMenuOpened)) {
        this.closeMenu()
      } else {
        this.openMenu()
      }

      return true
    }

    const overlay = event.target.closest(this.selectors.overlay)

    if (overlay) {
      this.closeMenu()

      return true
    }

    const menuItem = event.target.closest(this.selectors.menuItem)

    if (menuItem) {
      this.closeMenu()

      return true
    }
  }

  closeMenu() {
    this.page.classList.remove(this.classes.pageMenuOpened)
  }

  openMenu() {
    this.page.classList.add(this.classes.pageMenuOpened)
  }
}