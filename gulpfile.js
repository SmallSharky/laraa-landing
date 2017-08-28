const gulp = require('gulp');
const shell = require('gulp-shell');
const elixir = require('laravel-elixir');


elixir(function (mix) {

    mix.sass('app.scss');
    mix.sass('materialize.scss');
    mix.scripts([
        '../../../node_modules/materialize-css/js/initial.js',
        '../../../node_modules/materialize-css/js/jquery.easing.1.4.js',

        '../../../node_modules/materialize-css/js/animation.js',
        '../../../node_modules/materialize-css/js/global.js',
        '../../../node_modules/materialize-css/js/dropdown.js',
        '../../../node_modules/materialize-css/js/buttons.js',
        '../../../node_modules/materialize-css/js/cards.js',
        '../../../node_modules/materialize-css/js/carousel.js',
        '../../../node_modules/materialize-css/js/character_counter.js',
        '../../../node_modules/materialize-css/js/chips.js',
        '../../../node_modules/materialize-css/js/collapsible.js',
        '../../../node_modules/materialize-css/js/forms.js',
        '../../../node_modules/materialize-css/js/hammer.min.js',
        '../../../node_modules/materialize-css/js/jquery.hammer.js',
        '../../../node_modules/materialize-css/js/materialbox.js',
        '../../../node_modules/materialize-css/js/modal.js',
        '../../../node_modules/materialize-css/js/parallax.js',
        '../../../node_modules/materialize-css/js/pushpin.js',
        '../../../node_modules/materialize-css/js/scrollFire.js',
        '../../../node_modules/materialize-css/js/scrollspy.js',
        '../../../node_modules/materialize-css/js/sideNav.js',
        '../../../node_modules/materialize-css/js/slider.js',
        '../../../node_modules/materialize-css/js/tabs.js',
        '../../../node_modules/materialize-css/js/tapTarget.js',
        '../../../node_modules/materialize-css/js/toasts.js',
        '../../../node_modules/materialize-css/js/tooltip.js',
        '../../../node_modules/materialize-css/js/transitions.js',
        '../../../node_modules/materialize-css/js/velocity.min.js',
        '../../../node_modules/materialize-css/js/waves.js',
        '../../../node_modules/materialize-css/js/date_picker/picker.js',
        '../../../node_modules/materialize-css/js/date_picker/picker.date.js',
        '../../../node_modules/materialize-css/js/date_picker/picker.time.js',
    ], 'public/js/materialize.js');
    mix.scripts([
        '../../../node_modules/jquery/dist/core.js',
        '../../../node_modules/jquery/dist/jquery.js',
    ], 'public/js/jquery.js');
    //mix.copyDirectory('node_modules/materialize-css/dist/fonts', 'public/fonts');


})
;

