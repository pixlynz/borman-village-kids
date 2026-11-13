/* Borman Village Kids — shared interactions */
(function () {
  'use strict';

  /* ----- Mobile nav ----- */
  var toggle = document.querySelector('.nav-toggle');
  var menu = document.querySelector('.nav-menu');
  var backdrop = document.querySelector('.nav-backdrop');

  function closeNav() {
    if (!menu) return;
    menu.classList.remove('open');
    toggle.classList.remove('open');
    if (backdrop) backdrop.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }
  function openNav() {
    menu.classList.add('open');
    toggle.classList.add('open');
    if (backdrop) backdrop.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      menu.classList.contains('open') ? closeNav() : openNav();
    });
    if (backdrop) backdrop.addEventListener('click', closeNav);
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', closeNav);
    });
    window.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeNav(); });
  }

  /* ----- Transparent header -> solid on scroll ----- */
  var header = document.querySelector('.site-header.transparent');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ----- Scroll reveal ----- */
  var reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  /* ----- Mobile gallery: swipe carousel (one photo at a time), looping, with dots ----- */
  var mosaic = document.querySelector('.mosaic');
  if (mosaic) {
    var galleryMq = window.matchMedia('(max-width: 720px)');
    var START_INDEX = 3; // 4th photo
    var dotsEl = null, scrollRaf = null, settleTimer = null, realFigs = [], total = 0;

    function jumpTo(realIndex, smooth) {
      mosaic.scrollTo({ left: (realIndex + 1) * mosaic.clientWidth, behavior: smooth ? 'smooth' : 'auto' });
    }
    function currentExtendedIndex() {
      return Math.round(mosaic.scrollLeft / mosaic.clientWidth);
    }
    function updateDots(realIndex) {
      if (!dotsEl) return;
      var btns = dotsEl.children;
      for (var i = 0; i < btns.length; i++) {
        btns[i].classList.toggle('active', i === realIndex);
      }
    }
    function onGalleryScroll() {
      if (scrollRaf) cancelAnimationFrame(scrollRaf);
      scrollRaf = requestAnimationFrame(function () {
        var ext = currentExtendedIndex();
        var real = ((ext - 1) % total + total) % total;
        updateDots(real);
      });
      clearTimeout(settleTimer);
      settleTimer = setTimeout(function () {
        var ext = currentExtendedIndex();
        if (ext === 0) { jumpTo(total - 1, false); updateDots(total - 1); }
        else if (ext === total + 1) { jumpTo(0, false); updateDots(0); }
      }, 120);
    }
    function enableCarousel() {
      if (mosaic.classList.contains('carousel')) return;
      mosaic.classList.add('carousel', 'in');
      realFigs = Array.prototype.slice.call(mosaic.querySelectorAll('figure'));
      total = realFigs.length;

      // Clone last -> front, first -> end, so swiping past an edge lands on a clone
      var firstClone = realFigs[0].cloneNode(true);
      var lastClone = realFigs[total - 1].cloneNode(true);
      firstClone.setAttribute('aria-hidden', 'true');
      lastClone.setAttribute('aria-hidden', 'true');
      mosaic.insertBefore(lastClone, realFigs[0]);
      mosaic.appendChild(firstClone);

      dotsEl = document.createElement('div');
      dotsEl.className = 'gallery-dots';
      realFigs.forEach(function (f, i) {
        var b = document.createElement('button');
        b.type = 'button';
        b.setAttribute('aria-label', 'Go to photo ' + (i + 1));
        b.addEventListener('click', function () { jumpTo(i, true); });
        dotsEl.appendChild(b);
      });
      mosaic.parentNode.insertBefore(dotsEl, mosaic.nextSibling);
      mosaic.addEventListener('scroll', onGalleryScroll, { passive: true });

      jumpTo(START_INDEX, false);
      updateDots(START_INDEX);
    }
    function disableCarousel() {
      if (!mosaic.classList.contains('carousel')) return;
      mosaic.classList.remove('carousel');
      mosaic.removeEventListener('scroll', onGalleryScroll);
      mosaic.querySelectorAll('figure[aria-hidden="true"]').forEach(function (c) { c.remove(); });
      if (dotsEl) { dotsEl.remove(); dotsEl = null; }
      mosaic.scrollLeft = 0;
    }
    function setupGallery() {
      if (galleryMq.matches) enableCarousel(); else disableCarousel();
    }
    setupGallery();
    var galleryTimer;
    window.addEventListener('resize', function () {
      clearTimeout(galleryTimer);
      galleryTimer = setTimeout(setupGallery, 200);
    });
  }

  /* ----- Expandable cards: collapsed on mobile, open on desktop ----- */
  var expanders = document.querySelectorAll('.expander');
  if (expanders.length) {
    var expMq = window.matchMedia('(max-width: 720px)');
    var syncExpanders = function () {
      var collapse = expMq.matches;
      expanders.forEach(function (d) { d.open = !collapse; });
    };
    syncExpanders();
    (expMq.addEventListener ? expMq.addEventListener('change', syncExpanders)
                            : expMq.addListener(syncExpanders));
  }

  /* ----- Footer year ----- */
  var y = document.querySelector('[data-year]');
  if (y) y.textContent = new Date().getFullYear();
})();
