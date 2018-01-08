<!DOCTYPE html>
<html>
<head>
  <title>V For</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>V For</h1>
  <div id="app">
    <ul>
        <li v-for="name in names">{{ name }}</li>
    </ul>


    OR
    
    <ul>
        <li v-for="name in names" v-text="name"></li>
    </ul>

  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        names: ["abc","xyz","test"]
      }
    })

  </script>



  </body>
  </html>