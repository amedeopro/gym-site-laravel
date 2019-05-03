
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

$(document).ready(function(){

  $('.bk-nuoto-bimbi').mouseenter(function(){
    $(this).children('#testo-bambini').css("display","inline-block");
    $(this).children('#testo-bambini').addClass("fadeIn animated");
    $(this).parent().css({
      'background':"linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('/img/nuoto-bambini.jpg')",
      'background-size':'cover',
      'background-position':'center',
      'background-repeat':'no-repeat'

    });

  });

  $('.bk-nuoto-bimbi').mouseleave(function(){
    $(this).children('#testo-bambini').css("display","none");
    $(this).parent().css({
      'background':"linear-gradient(0deg,rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('/img/nuoto-bambini.jpg')",
      'background-size':'cover',
      'background-position':'center',
      'background-repeat':'no-repeat'

    });
  });

  $('.bk-nuoto-baby').mouseenter(function(){
    $(this).children('#testo-baby').css("display","inline-block");
    $(this).children('#testo-baby').addClass("fadeIn animated");
    $(this).parent().css({
      'background':"linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('/img/baby-piscina.jpg')",
      'background-size':'cover',
      'background-position':'center',
      'background-repeat':'no-repeat'

    });

  });

  $('.bk-nuoto-baby').mouseleave(function(){
    $(this).children('#testo-baby').css("display","none");
    $(this).parent().css({
      'background':"linear-gradient(0deg,rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('/img/baby-piscina.jpg')",
      'background-size':'cover',
      'background-position':'center',
      'background-repeat':'no-repeat'

    });
  });
});
