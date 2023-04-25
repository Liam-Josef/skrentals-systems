(function($) {
    "use strict"; // Start of use strict

    // Close Admin Sidebar on Mobile
    jQuery(document).ready(function($) {
        var alterClass = function() {
            var ww = document.body.clientWidth;
            if (ww < 750) {
                $('#accordionSidebar').addClass('toggled');
            } else if (ww >= 751) {
                $('#accordionSidebar').removeClass('toggled');
            };
        };
        $(window).resize(function(){
            alterClass();
        });
        //Fire it when the page first loads:
        alterClass();



        const canvas = document.querySelector('canvas');
        const form = document.querySelector('.signature-pad-form');
        const clearButton = document.querySelector('.clear-button')

        const ctx = canvas.getContext('2d');

        let writingMode = true;


        canvas.addEventListener('pointerdown', handlePointerDown, {passive: true});
        canvas.addEventListener('pointerup', handlePointerUp, {passive: true});
        canvas.addEventListener('pointermove', handlePointerMove, {passive: true});

        const handlePointerDown = (event) => {
            writingMode = true;
            ctx.beginPath();
            const [positionX, positionY] = getCursorPosition(event);
            ctx.moveTo(positionX, positionY);
        }

        const handlePointerUp = () => {
            writingMode = false;
        }

        const handlePointerMove = (event) => {
            if (!writingMode) return
            const [positionX, positionY] = getCursorPosition(event);
            ctx.lineTo(positionX, positionY);
            ctx.stroke();
        }

        const getCursorPosition = (event) => {
            positionX = event.clientX - event.target.getBoundingClientRect().x;
            positionY = event.clientY - event.target.getBoundingClientRect().y;
            return [positionX, positionY];
        }

        ctx.lineWidth = 3;
        ctx.lineJoin = ctx.lineCap = 'round';





    });



})(jQuery); // End of use strict
