<!DOCTYPE html>
<html>
<head>
  <title>V-Bind</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
</head>
<body>

<h1>V Bind </h1>
  <div id="app">

   
   <button v-bind:title="title">Hover On It</button> OR <button :title="title">Hover On It</button>


  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
       title:'How R U?',
      },
    
    })

  </script>



  </body>
  </html>