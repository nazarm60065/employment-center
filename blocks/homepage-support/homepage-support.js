export default () => {
  const hint = document.querySelector('.homepage-support-hint')

  if (hint) {
    document.addEventListener('click', docClickHandler)
  }


  function docClickHandler(event) {
    if (window.innerWidth >= 1280) {
      const hint = event.target.closest('.homepage-support-hint')

      if (hint) {
        if (hint.classList.contains('homepage-support-hint_active')) {
          hideHint(hint)
        } else {
          showHint(hint)
        }
      } else {
        const hintActive = document.querySelectorAll('.homepage-support-hint_active')

        if (hintActive.length) {
          hintActive.forEach(hint => {
            hideHint(hint)
          })
        }
      }
    }
  }

  function hideHint(hint) {
    const textContainer = hint.querySelector('.homepage-support-hint-text-container')

    hint.classList.remove('homepage-support-hint_active')

    if (textContainer) textContainer.style.height = ''
  }

  function showHint(hint) {
    const textContainer = hint.querySelector('.homepage-support-hint-text-container'),
      text = hint.querySelector('.homepage-support-hint__text')

    hint.classList.add('homepage-support-hint_active')

    if (text && textContainer) {
      textContainer.style.height = text.scrollHeight + 'px'
    }
  }
}
