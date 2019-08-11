window._ = require('lodash');
window.moment = require('moment');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

    // Chart.js
    require('chart.js');

    // Sparkline
    require('sparkline');

    // Tablesorter
    require('tablesorter');

    // jQuery vector map
    require('vector-map');

    // Selectize
    require('selectize');

    // bootstrap-datepicker
    require('bootstrap-datepicker');

    // eonasdan-bootstrap-datetimepicker
    require('eonasdan-bootstrap-datetimepicker');

    // select2
    require('select2');

    // circle-progress
    require('circle-progress');


    // <!----- Here your modules add ----->


    // app.js
    require('./app');

} catch (e) {

}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/** Core JS
 *
 */
let hexToRgba = function(hex, opacity) {
    let result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    let rgb = result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;

    return 'rgba(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ', ' + opacity + ')';
};


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });


$(document).ready(function() {
    /** Constant div card */
    const DIV_CARD = 'div.card';

    /** Initialize tooltips */
    $('[data-toggle="tooltip"]').tooltip();

    /** Initialize popovers */
    $('[data-toggle="popover"]').popover({
        html: true
    });

    /** Function for remove card */
    $('[data-toggle="card-remove"]').on('click', function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.remove();

        e.preventDefault();
        return false;
    });

    /** Function for collapse card */
    $('[data-toggle="card-collapse"]').on('click', function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass('card-collapsed');

        e.preventDefault();
        return false;
    });

    /** Function for fullscreen card */
    $('[data-toggle="card-fullscreen"]').on('click', function(e) {
        let $card = $(this).closest(DIV_CARD);

        $card.toggleClass('card-fullscreen').removeClass('card-collapsed');

        e.preventDefault();
        return false;
    });

    /**  */
    if ($('[data-sparkline]').length) {
        let generateSparkline = function($elem, data, params) {
            $elem.sparkline(data, {
                type: $elem.attr('data-sparkline-type'),
                height: '100%',
                barColor: params.color,
                lineColor: params.color,
                fillColor: 'transparent',
                spotColor: params.color,
                spotRadius: 0,
                lineWidth: 2,
                highlightColor: hexToRgba(params.color, .6),
                highlightLineColor: '#666',
                defaultPixelsPerValue: 5
            });
        };

        // require(['sparkline'], function() {
        //     $('[data-sparkline]').each(function() {
        //         let $chart = $(this);
        //
        //         generateSparkline($chart, JSON.parse($chart.attr('data-sparkline')), {
        //             color: $chart.attr('data-sparkline-color')
        //         });
        //     });
        // });
    }

    /**  */
    if ($('.chart-circle').length) {
        // require(['circle-progress'], function() {
        //     $('.chart-circle').each(function() {
        //         let $this = $(this);
        //
        //         $this.circleProgress({
        //             fill: {
        //                 color: tabler.colors[$this.attr('data-color')] || tabler.colors.blue
        //             },
        //             size: $this.height(),
        //             startAngle: -Math.PI / 4 * 2,
        //             emptyFill: '#F4F4F4',
        //             lineCap: 'round'
        //         });
        //     });
        // });
    }

    /**
     *  User defined
     */

    $('.js-datepicker').datepicker({
        todayHighlight: true,
        autoclose: true
    });
    $('.js-datetimepicker').datetimepicker({
        sideBySide: true,
        format: 'YYYY-MM-DD HH:mm:ss',
    });
    $('.js-select2').select2({
        allowClear: true,
        dropdownAutoWidth: true,
        theme: 'bootstrap'
    });
});


