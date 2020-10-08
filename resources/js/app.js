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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    // el: '#app',
});

// window.$ = require('jqeury');




function addBestOfListener() {
  var target = $('#best_of');
  target.change(bestOfToggle);
}

function bestOfToggle() {
  var me = $(this);
  var isChecked = me.is(':checked');
  // console.log('best of: ' + isChecked);
  getData(isChecked);
}

function getData(bestOf) {

  var url = "/api/posts/all";

  if (bestOf) {
    url = '/api/posts/best-of'; // questo url sovrascrive url precedente in caso in cui e true. quindi l'ordine è importante
  }


  $.ajax({
    url: url,
    method: 'GET',
    success: function(posts) {

      var target = $('#posts');
      target.html('');

      for (var i = 0; i < posts.length; i++) {
        var post = posts[i];
        var html = '<li>' + post['title'] + ': '
        + post['like'] + '</li>';
        target.append(html);
      }

    },
    error: function(err) {
      console.log('err', err);
    }
  });
}

function init(){
  addBestOfListener();
  getData(false);

}

$(document).ready(init);
