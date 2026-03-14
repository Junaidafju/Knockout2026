/**
 * KnockOut Main JavaScript
 */

jQuery(document).ready(function ($) {

    // Video background play/pause on visibility change
    const video = document.querySelector('video');

    if (video) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    video.play();
                } else {
                    video.pause();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(video);
    }

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function (e) {
        const href = $(this).attr('href');

        if (href !== '#') {
            e.preventDefault();

            const target = $(href);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        }
    });

    // Parallax effect for hero section
    $(window).on('scroll', function () {
        const scroll = $(this).scrollTop();

        $('.hero-section .video-background').css({
            transform: 'translateY(' + scroll * 0.5 + 'px)'
        });

        $('.hero-content').css({
            opacity: 1 - (scroll * 0.002)
        });
    });

    // Animate elements on scroll
    const animateOnScroll = function () {
        $('.feature-item, .service-card, .reason-card').each(function () {
            const elementTop = $(this).offset().top;
            const windowBottom = $(window).scrollTop() + $(window).height();

            if (windowBottom > elementTop + 100) {
                $(this).css({
                    opacity: '1',
                    transform: 'translateY(0)'
                });
            }
        });
    };

    // Set initial state for animated elements
    $('.feature-item, .service-card, .reason-card').css({
        opacity: '0',
        transform: 'translateY(30px)',
        transition: 'all 0.6s ease'
    });

    $(window).on('scroll', animateOnScroll);
    animateOnScroll(); // Run once on load

    // ===== Events Carousel =====
    (function initEventsCarousel() {
        var $track = $('.events-carousel-track');
        var $cards = $track.find('.event-card');
        var $prevBtn = $('.carousel-nav-prev');
        var $nextBtn = $('.carousel-nav-next');
        var currentIndex = 0;
        var gap = 20;

        if (!$track.length || !$cards.length) return;

        function getCardWidth() {
            return $cards.first().outerWidth(true);
        }

        function getVisibleCards() {
            var containerWidth = $('.events-carousel-container').width();
            var cardWidth = $cards.first().outerWidth(false) + gap;
            return Math.floor(containerWidth / cardWidth) || 1;
        }

        function getMaxIndex() {
            var visible = getVisibleCards();
            return Math.max(0, $cards.length - visible);
        }

        function updateCarousel() {
            var cardWidth = $cards.first().outerWidth(false) + gap;
            var offset = currentIndex * cardWidth;
            $track.css('transform', 'translateX(-' + offset + 'px)');

            // Update button states
            $prevBtn.prop('disabled', currentIndex <= 0);
            $nextBtn.prop('disabled', currentIndex >= getMaxIndex());
        }

        $nextBtn.on('click', function () {
            var maxIdx = getMaxIndex();
            if (currentIndex < maxIdx) {
                currentIndex++;
                updateCarousel();
            }
        });

        $prevBtn.on('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        // Recalculate on resize
        $(window).on('resize', function () {
            var maxIdx = getMaxIndex();
            if (currentIndex > maxIdx) {
                currentIndex = maxIdx;
            }
            updateCarousel();
        });

        // Initial state
        updateCarousel();
    })();

    // ===== Event Details Modal =====
    (function initEventModal() {
        var $overlay = $('#eventModal');
        if (!$overlay.length) return;

        // Open modal
        $(document).on('click', '.event-details-btn', function (e) {
            e.stopPropagation();
            var $card = $(this).closest('.event-card');

            // Extract data
            var imgSrc = $card.find('.instructor-photo').attr('src');
            var imgAlt = $card.find('.instructor-photo').attr('alt');
            var artist = $card.find('.instructor-name').text();
            var title = $card.find('.event-title').text();
            var desc = $card.find('.event-description').text();
            var date = $card.data('date') || 'TBA';
            var time = $card.data('time') || 'TBA';
            var venue = $card.data('venue') || 'Knockout';
            var price = $card.data('price') || 'TBA';

            // Populate modal
            $('#modalImage').attr('src', imgSrc).attr('alt', imgAlt);
            $('#modalArtist').text(artist);
            $('#modalTitle').text(title);
            $('#modalDescription').text(desc);
            $('#modalDate').text(date);
            $('#modalTime').text(time);
            $('#modalVenue').text(venue);
            $('#modalPrice').text(price);

            // Show modal
            $overlay.addClass('active');
            $('body').css('overflow', 'hidden');
        });

        // Close modal
        function closeModal() {
            $overlay.removeClass('active');
            $('body').css('overflow', '');
        }

        $overlay.on('click', '.event-modal-close', function (e) {
            e.stopPropagation();
            closeModal();
        });

        $overlay.on('click', function (e) {
            if ($(e.target).is($overlay)) {
                closeModal();
            }
        });

        $(document).on('keydown', function (e) {
            if (e.key === 'Escape' && $overlay.hasClass('active')) {
                closeModal();
            }
        });
    })();

    // ===== Footer Glare Effect =====
    const footer = document.querySelector('.site-footer');
    if (footer) {
        footer.addEventListener('mousemove', function (e) {
            const rect = footer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            footer.style.setProperty('--mouse-x', `${x}px`);
            footer.style.setProperty('--mouse-y', `${y}px`);
        });
    }
});