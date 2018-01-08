<!DOCTYPE html>
<html>
<head>
  <title>Components</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
 
</head>
<body>

<h1>Components</h1>
  <div id="app">
    <todo-item
    v-for="item in groceryList"
    v-bind:todo="item"
    v-bind:key="item.id">
   </todo-item>
  </div>
  <script>
  Vue.component('todo-item', {
  props: ['todo'],
  template: '<li>{{ todo.text }}</li>'
 })

    var app = new Vue({
      el: '#app',
      data: {
        groceryList: [
          { id: 0, text: 'Vegetables' },
          { id: 1, text: 'Cheese' },
          { id: 2, text: 'Whatever else humans are supposed to eat' }
        ]
      },
     
    })

  </script>



  </body>
  </html>