<!DOCTYPE html>
<html>
<head>
  <title>My first Vue app</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>Data Binding</h1>
  <div id="app">
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