<!DOCTYPE html>
<html>
<head>
  <title>V Model</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>Data Binding</h1>
  <div id="app">
    <input type="text" v-model="message">
    {{ message }}
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello Vue!'
      }
    })

  </script>



  </body>
  </html>