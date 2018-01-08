<!DOCTYPE html>
<html>
<head>
  <title>Data Binding</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>DATA BINDING</h1>
  <div id="app">
    Hi  {{ message }}
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