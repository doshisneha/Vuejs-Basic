<!DOCTYPE html>
<html>
<head>
  <title>V-Model</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>V Model</h1>
  <div id="app">
    <input type="text" v-model="message">
      <span>Value of input is {{ message }}</span>
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