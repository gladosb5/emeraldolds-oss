(function () {
  'use strict';

  var SKIP_IDS = {
    img: true,
  };

  function hasDataLazyFalse(element) {
    var parent = element.parentElement;
    while (parent) {
      var value = parent.getAttribute('data-lazy');
      if (value && value.toLowerCase() === 'false') {
        return true;
      }
      parent = parent.parentElement;
    }
    return false;
  }

  function shouldSkip(element) {
    if (!element) {
      return true;
    }

    if (SKIP_IDS[element.id]) {
      return true;
    }

    var ownDirective = element.getAttribute('data-lazy');
    if (ownDirective && ownDirective.toLowerCase() === 'false') {
      return true;
    }

    if (element.classList && (element.classList.contains('no-lazy') || element.classList.contains('lazy-ignore'))) {
      return true;
    }

    return hasDataLazyFalse(element);
  }

  function applyLazyAttributes(element) {
    if (!element.hasAttribute('loading')) {
      element.setAttribute('loading', 'lazy');
    }

    if (element.tagName === 'IMG' && !element.hasAttribute('decoding')) {
      element.setAttribute('decoding', 'async');
    }
  }

  function initLazyLoading() {
    var targets = document.querySelectorAll('img, iframe');
    Array.prototype.forEach.call(targets, function (element) {
      if (shouldSkip(element)) {
        return;
      }

      applyLazyAttributes(element);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLazyLoading, { once: true });
  } else {
    initLazyLoading();
  }
})();
