/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: "#app",
    data: {
        open: false,
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    },

});

/* Progress bar */
//Source: https://alligator.io/js/progress-bar-javascript-css-variables/

var h = document.documentElement,
    b = document.body,
    st = 'scrollTop',
    sh = 'scrollHeight',
    progress = document.querySelector('#progress'),
    scroll;
var scrollpos = window.scrollY;
var header = document.getElementById("header");

document.addEventListener('scroll', function () {

    /*Refresh scroll % width*/
    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
    progress.style.setProperty('--scroll', scroll + '%');

    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 100) {
        header.classList.remove("hidden");
        header.classList.remove("fadeOutUp");
        header.classList.add("slideInDown");
    } else {
        header.classList.remove("slideInDown");
        header.classList.add("fadeOutUp");
    }

});