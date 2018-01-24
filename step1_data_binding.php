<!DOCTYPE html>
<html>
<head>
  <title>Data Binding</title>
  <script src="vue2.5.13.js"></script>
</head>
<body>

<h1>DATA BINDING </h1>
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