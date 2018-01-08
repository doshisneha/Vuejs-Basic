<!DOCTYPE html>
<html>
<head>
  <title>V - If & V-For</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>V - If & V For - LISTS</h1>


  <div id="app">

  <span v-if="seen">Now you see me</span>

    <ul>
        <li v-for="name in names">{{ name }}</li>
    </ul>


    OR
    
    <ul>
        <li v-for="text in todo" v-text="text"></li>
    </ul>

    OR

    <ul v-for="text in todo">
        <li  v-text="text"></li>
    </ul>

  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        names: ["abc","xyz","test"],
        todo: ["abc","xyz","test"],
        seen: true
      }
    })

  </script>



  </body>
  </html>