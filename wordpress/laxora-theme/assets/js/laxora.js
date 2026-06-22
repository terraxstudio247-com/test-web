/**
 * Laxora theme JS — sticky header state, mobile nav, fleet category filter.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    /* ----- Sticky header scroll state ----- */
    var header = document.querySelector('[data-laxora-nav]');
    if (header) {
      var onScroll = function () {
        if (window.scrollY > 24) {
          header.classList.add('is-scrolled');
        } else {
          header.classList.remove('is-scrolled');
        }
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }

    /* ----- Mobile nav toggle ----- */
    var navToggle = document.querySelector('[data-laxora-nav-toggle]');
    var mobileMenu = document.getElementById('laxora-mobile-menu');
    if (navToggle && mobileMenu) {
      navToggle.addEventListener('click', function () {
        var isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
        navToggle.setAttribute('aria-expanded', String(!isExpanded));
        if (isExpanded) {
          mobileMenu.setAttribute('hidden', '');
        } else {
          mobileMenu.removeAttribute('hidden');
        }
      });

      // Close on internal anchor click.
      mobileMenu.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', function () {
          navToggle.setAttribute('aria-expanded', 'false');
          mobileMenu.setAttribute('hidden', '');
        });
      });
    }

    /* ----- Fleet category filter ----- */
    var filterBar = document.querySelector('[data-laxora-filters]');
    var grid      = document.querySelector('[data-laxora-grid]');
    if (filterBar && grid) {
      filterBar.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-filter]');
        if (!btn) return;
        var filter = btn.getAttribute('data-filter');

        filterBar.querySelectorAll('[data-filter]').forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-pressed', 'true');

        grid.querySelectorAll('.laxora-card').forEach(function (card) {
          var cat = card.getAttribute('data-category');
          if (filter === 'all' || cat === filter) {
            card.classList.remove('is-hidden');
          } else {
            card.classList.add('is-hidden');
          }
        });
      });
    }
  });
})();
