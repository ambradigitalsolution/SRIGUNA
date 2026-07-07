/**
 * Sriguna Computindo - Main JavaScript
 *
 * Handles: Navbar scroll, mobile menu, testimonial carousel,
 * scroll reveal animations, and smooth scrolling.
 *
 * @package Sriguna
 * @version 1.0.0
 */

(function () {
  'use strict';

  // ============================================
  // DOM Ready
  // ============================================
  document.addEventListener('DOMContentLoaded', function () {
    initNavbar();
    initMobileMenu();
    initSmoothScroll();
    initScrollReveal();
    initTestimonialSlider();
    initStatsCounter();
  });

  // ============================================
  // NAVBAR: Sticky + Scroll Effect
  // ============================================
  function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    let lastScroll = 0;
    let ticking = false;

    function updateNavbar() {
      const scrollY = window.scrollY;

      if (scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }

      // Update active nav link based on scroll position
      updateActiveNavLink(scrollY);

      lastScroll = scrollY;
      ticking = false;
    }

    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(updateNavbar);
        ticking = true;
      }
    }, { passive: true });
  }

  // ============================================
  // ACTIVE NAV LINK
  // ============================================
  function updateActiveNavLink(scrollY) {
    const sections = document.querySelectorAll('section[id]');
    if (sections.length === 0) return;
    
    const navLinks = document.querySelectorAll('.nav-menu a, .mobile-menu a:not(.btn)');
    const offset = 150;

    let currentSection = '';

    sections.forEach(function (section) {
      const sectionTop = section.offsetTop - offset;
      const sectionHeight = section.offsetHeight;

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        currentSection = section.getAttribute('id');
      }
    });

    navLinks.forEach(function (link) {
      link.classList.remove('active');
      const href = link.getAttribute('href');
      if (href && href.includes('#' + currentSection)) {
        link.classList.add('active');
      }
    });
  }

  // ============================================
  // MOBILE MENU
  // ============================================
  function initMobileMenu() {
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-menu-overlay');

    if (!toggle || !menu) return;

    function openMenu() {
      toggle.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      menu.classList.add('active');
      if (overlay) overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      toggle.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      menu.classList.remove('active');
      if (overlay) overlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
      if (menu.classList.contains('active')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    if (overlay) {
      overlay.addEventListener('click', closeMenu);
    }

    // Close on menu link click
    const menuLinks = menu.querySelectorAll('a:not(.btn)');
    menuLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        closeMenu();
      });
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menu.classList.contains('active')) {
        closeMenu();
      }
    });
  }

  // ============================================
  // SMOOTH SCROLL
  // ============================================
  function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(function (link) {
      link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#' || href === '') return;

        const target = document.querySelector(href);
        if (!target) return;

        e.preventDefault();

        const navbarHeight = document.getElementById('navbar')
          ? document.getElementById('navbar').offsetHeight
          : 0;

        const targetPosition = target.getBoundingClientRect().top + window.scrollY - navbarHeight - 20;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth',
        });
      });
    });
  }

  // ============================================
  // SCROLL REVEAL ANIMATIONS
  // ============================================
  function initScrollReveal() {
    const elements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    if (elements.length === 0) return;

    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -80px 0px',
      threshold: 0.1,
    };

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    elements.forEach(function (el) {
      observer.observe(el);
    });
  }

  // ============================================
  // TESTIMONIAL SLIDER
  // ============================================
  function initTestimonialSlider() {
    const slider = document.getElementById('testimonial-slider');
    const track = document.getElementById('testimonial-track');
    const dotsContainer = document.getElementById('testimonial-dots');

    if (!slider || !track || !dotsContainer) return;

    const cards = track.querySelectorAll('.testimonial-card');
    if (cards.length === 0) return;

    let currentIndex = 0;
    let slidesPerView = getSlidesPerView();
    let totalDots = Math.ceil(cards.length / slidesPerView);
    let autoplayInterval;
    let isHovering = false;

    function getSlidesPerView() {
      const width = window.innerWidth;
      if (width >= 1024) return 3;
      if (width >= 768) return 2;
      return 1;
    }

    function buildDots() {
      dotsContainer.innerHTML = '';
      totalDots = Math.ceil(cards.length / slidesPerView);

      for (let i = 0; i < totalDots; i++) {
        const dot = document.createElement('button');
        dot.className = 'testimonial-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-label', 'Testimonial group ' + (i + 1));
        dot.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
        dot.addEventListener('click', function () {
          goToSlide(i);
        });
        dotsContainer.appendChild(dot);
      }
    }

    function goToSlide(index) {
      if (index < 0) index = totalDots - 1;
      if (index >= totalDots) index = 0;

      currentIndex = index;
      const percentage = (100 / slidesPerView) * slidesPerView * index;
      track.style.transform = 'translateX(-' + percentage + '%)';

      // Update dots
      const dots = dotsContainer.querySelectorAll('.testimonial-dot');
      dots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === index);
        dot.setAttribute('aria-selected', i === index ? 'true' : 'false');
      });
    }

    function nextSlide() {
      goToSlide(currentIndex + 1);
    }

    function startAutoplay() {
      stopAutoplay();
      autoplayInterval = setInterval(function () {
        if (!isHovering) {
          nextSlide();
        }
      }, 5000);
    }

    function stopAutoplay() {
      if (autoplayInterval) {
        clearInterval(autoplayInterval);
      }
    }

    // Hover pause
    slider.addEventListener('mouseenter', function () {
      isHovering = true;
    });

    slider.addEventListener('mouseleave', function () {
      isHovering = false;
    });

    // Touch/Swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', function (e) {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    slider.addEventListener('touchend', function (e) {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });

    function handleSwipe() {
      const diff = touchStartX - touchEndX;
      const threshold = 50;

      if (diff > threshold) {
        goToSlide(currentIndex + 1);
      } else if (diff < -threshold) {
        goToSlide(currentIndex - 1);
      }
    }

    // Resize handler
    let resizeTimeout;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(function () {
        const newSlidesPerView = getSlidesPerView();
        if (newSlidesPerView !== slidesPerView) {
          slidesPerView = newSlidesPerView;
          currentIndex = 0;
          buildDots();
          goToSlide(0);
        }
      }, 200);
    });

    // Initialize
    buildDots();
    goToSlide(0);
    startAutoplay();
  }

  // ============================================
  // STATS COUNTER ANIMATION
  // ============================================
  function initStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number[data-count]');
    if (statNumbers.length === 0) return;

    const observerOptions = {
      root: null,
      threshold: 0.5,
    };

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    statNumbers.forEach(function (el) {
      observer.observe(el);
    });
  }

  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'), 10);
    if (isNaN(target)) return;

    const duration = 2000;
    const start = 0;
    const startTime = performance.now();
    const suffix = element.textContent.replace(/[\d,]/g, '');

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      // Ease out cubic
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = Math.floor(eased * target);

      element.textContent = current.toLocaleString('id-ID') + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }
})();
