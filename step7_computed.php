<!DOCTYPE html>
<html>
<head>
  <title>Computed</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
 
</head>
<body>

<h1>Computed</h1>
  <div id="app">
     <p>Original message: "{{ message }}"</p>
     <p>Computed reversed message: "{{ reversedMessage }}"</p>
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello'
      },
      computed: {
            // a computed getter
            reversedMessage: function () 
            {
             // `this` points to the vm instance
            return this.message.split('').reverse().join('')
             }
         }
    })

  </script>



  </body>
  </html>