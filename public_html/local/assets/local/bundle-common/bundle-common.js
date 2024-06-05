(()=>{"use strict";var e,t={p:"/local/assets/"},a="loading"in HTMLImageElement.prototype,r="loading"in HTMLIFrameElement.prototype,s="onscroll"in window;function o(e){var t,a,r=[];"picture"===e.parentNode.tagName.toLowerCase()&&((a=(t=e.parentNode).querySelector("source[data-lazy-remove]"))&&t.removeChild(a),r=Array.prototype.slice.call(e.parentNode.querySelectorAll("source"))),r.push(e),r.forEach((function(e){e.hasAttribute("data-lazy-srcset")&&(e.setAttribute("srcset",e.getAttribute("data-lazy-srcset")),e.removeAttribute("data-lazy-srcset"))})),e.setAttribute("src",e.getAttribute("data-lazy-src")),e.removeAttribute("data-lazy-src")}function n(t){var o=document.createElement("div");for(o.innerHTML=function(t){var o=t.textContent||t.innerHTML,n="data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 "+((o.match(/width=['"](\d+)['"]/)||!1)[1]||1)+" "+((o.match(/height=['"](\d+)['"]/)||!1)[1]||1)+"%27%3E%3C/svg%3E";return(/<img/gim.test(o)&&!a||/<iframe/gim.test(o)&&!r)&&s&&(o=void 0===e?o.replace(/(?:\r\n|\r|\n|\t| )src=/g,' lazyload="1" src='):(o=o.replace("<source",'<source srcset="'+n+'" data-lazy-remove="true"></source>\n<source')).replace(/(?:\r\n|\r|\n|\t| )srcset=/g," data-lazy-srcset=").replace(/(?:\r\n|\r|\n|\t| )src=/g,' src="'+n+'" data-lazy-src=')),o}(t);o.firstChild;){var n=o.firstChild;if(s&&void 0!==e&&n.tagName&&(("img"===n.tagName.toLowerCase()||"picture"===n.tagName.toLowerCase())&&!a||"iframe"===n.tagName.toLowerCase()&&!r)){var i="picture"===n.tagName.toLowerCase()?o.querySelector("img"):n;e.observe(i)}t.parentNode.insertBefore(n,t)}t.parentNode.removeChild(t)}window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=Array.prototype.forEach),"IntersectionObserver"in window&&(e=new IntersectionObserver((function(e,t){e.forEach((function(e){if(0!==e.intersectionRatio){var a=e.target;t.unobserve(a),o(a)}}))}),{rootMargin:"0px 0px 256px 0px",threshold:.01}));var i=function(){document.querySelectorAll("noscript.loading-lazy").forEach((function(e){return n(e)})),void 0!==window.matchMedia&&window.matchMedia("print").addListener((function(e){e.matches&&document.querySelectorAll('img[loading="lazy"][data-lazy-src],iframe[loading="lazy"][data-lazy-src]').forEach((function(e){o(e)}))}))};/comp|inter/.test(document.readyState)?i():"addEventListener"in document?document.addEventListener("DOMContentLoaded",(function(){i()})):document.attachEvent("onreadystatechange",(function(){"complete"===document.readyState&&i()}));var c={prepareElement:n};class d{constructor(e){this.params={selectors:{headerModal:".header-modal",page:".page",toggle:".header-toggle__button",overlay:".header-modal-overlay"},classes:{headerModalReady:"header-modal_ready",pageMenuOpened:"page_menu-opened"},...e},this.init()}init(){this.selectors=this.params.selectors,this.classes=this.params.classes,this.headerModal=document.querySelector(this.selectors.headerModal),this.headerModal&&(this.headerModal.classList.add(this.classes.headerModalReady),this.page=document.querySelector(this.selectors.page),this.attachEvents())}attachEvents(){document.addEventListener("click",this.docClickHandler.bind(this))}docClickHandler(e){e.target.closest(this.selectors.toggle)&&(this.page.classList.contains(this.classes.pageMenuOpened)?this.closeMenu():this.openMenu());e.target.closest(this.selectors.overlay)&&this.closeMenu()}closeMenu(){this.page.classList.remove(this.classes.pageMenuOpened)}openMenu(){this.page.classList.add(this.classes.pageMenuOpened)}}t.p,t.p,t.p,t.p,t.p,t.p,t.p,t.p,t.p;function l(){const e=window.innerWidth-document.body.clientWidth,t=document.querySelector(".header");let a=window.scrollY;function r(e){window.scrollY>0?t.classList.add("header_fixed"):t.classList.remove("header_fixed"),a-window.scrollY>0?t.classList.add("header_scroll-up"):t.classList.remove("header_scroll-up"),a=window.scrollY}document.body.style.setProperty("--scrollbar-width",`${e}px`),r(),document.addEventListener("click",(function(e){const t=e.target.closest(".anchor");if(t&&t.dataset.src){const a=document.querySelector(t.dataset.src);e.preventDefault(),a&&a.scrollIntoView({behavior:"smooth",block:"start"})}})),window.addEventListener("scroll",r,{passive:!0})}window.loadingAttributePolyfill=c,document.addEventListener("DOMContentLoaded",(()=>{setTimeout(l),new d}))})();