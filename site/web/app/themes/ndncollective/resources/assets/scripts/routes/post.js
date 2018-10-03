export default {
  init() {
    let h = document.documentElement,
      b = document.getElementsByClassName('post-content'),
      st = 'scrollTop',
      sh = 'scrollHeight',
      progress = document.querySelector('.reading-progress'),
      scroll;

    document.addEventListener('scroll', function () {
      scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
      progress.style.setProperty('--scroll', scroll + '%');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
