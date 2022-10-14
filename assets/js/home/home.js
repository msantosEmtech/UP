const counterUp = window.counterUp.default

    const callback = entries => {
        entries.forEach(entry => {
            const el = entry.target
            if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                counterUp(el, {
                    duration: 2000,
                    delay: 16,
                })
                el.classList.add('is-visible')
            }
        })
    }
    const IO = new IntersectionObserver(callback, {
        threshold: 1
    })
    const el = document.querySelector('#counter')
    IO.observe(el)

    const el2 = document.querySelector('#counter2')
    IO.observe(el2)

    const el3 = document.querySelector('#counter3')
    IO.observe(el3)

    var x = 0,
        container = $('.containerVertical'),
        items = container.find('li'),
        containerHeight = 0,
        numberVisible = 4,
        intervalSec = 5000;

    if (!container.find('li:first').hasClass("first")) {
        container.find('li:first').addClass("first");
    }

    items.each(function() {
        if (x < numberVisible) {
            containerHeight = containerHeight + $(this).outerHeight();
            x++;
        }
    });

    container.css({
        height: containerHeight,
        overflow: "hidden"
    });

    function vertCycle() {
        var firstItem = container.find('li.first').html();

        container.append('<li>' + firstItem + '</li>');
        firstItem = '';
        container.find('li.first').animate({
            marginTop: "-50px"
        }, 600, function() {
            $(this).remove();
            container.find('li:first').addClass("first");
        });
    }

    if (intervalSec < 700) {
        intervalSec = 700;
    }

    var init = setInterval("vertCycle()", intervalSec);

    container.hover(function() {
        clearInterval(init);
    }, function() {
        init = setInterval("vertCycle()", intervalSec);
    });

    // var cards = $('#card-slider .slider-item').toArray();

    // startAnim(cards);

    // function startAnim(array) {
    //     if (array.length >= 4) {
    //         TweenMax.fromTo(array[0], 0.5, {
    //             x: 0,
    //             y: 0,
    //             opacity: 0.75,
    //             backgroundColor: "unset"
    //         }, {
    //             x: 0,
    //             y: -120,
    //             opacity: 0,
    //             zIndex: 0,
    //             delay: 0.03,
    //             ease: Cubic.easeInOut,
    //             onComplete: sortArray(array),
    //             backgroundColor: "unset"
    //         });

    //         TweenMax.fromTo(array[1], 0.5, {
    //             x: 79,
    //             y: 125,
    //             opacity: 1,
    //             zIndex: 1,
    //             backgroundColor: "unset"
    //         }, {
    //             x: 0,
    //             y: 0,
    //             opacity: 0.75,
    //             zIndex: 0,
    //             boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
    //             ease: Cubic.easeInOut,
    //             backgroundColor: "unset"
    //         });

    //         TweenMax.to(array[2], 0.5, {
    //             bezier: [{
    //                 x: 0,
    //                 y: 250
    //             }, {
    //                 x: 65,
    //                 y: 200
    //             }, {
    //                 x: 79,
    //                 y: 125
    //             }],
    //             boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
    //             zIndex: 1,
    //             opacity: 1,
    //             ease: Cubic.easeInOut,
    //             backgroundColor: "#25C7D9",
    //             color: "#ffffff"
    //         });

    //         TweenMax.fromTo(array[3], 0.5, {
    //             x: 0,
    //             y: 400,
    //             opacity: 0,
    //             zIndex: 0
    //         }, {
    //             x: 0,
    //             y: 250,
    //             opacity: 0.75,
    //             zIndex: 0,
    //             ease: Cubic.easeInOut
    //         }, );
    //     } else {
    //         $('#card-slider').append('<p>Sorry, carousel should contain more than 3 slides</p>')
    //     }
    // }

    // function sortArray(array) {
    //     clearTimeout(delay);
    //     var delay = setTimeout(function() {
    //         var firstElem = array.shift();
    //         array.push(firstElem);
    //         return startAnim(array);
    //     }, 3000)
    // }