<!DOCTYPE html>
<html>
<head>
  <title>Class Binding</title>
  <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
  <style>
    .color-red
    {
        color:red;
    }

   .is-loading
   {
       background:red;
       
   }

  </style>
</head>
<body>

<h1>Class Binding</h1>
  <div id="app">
    <h1 :class="classname">Hello World</h1>
    
    <BR>

    <button :class="{'is-loading':isLoading}" @click="toggleclass">Click Me</button>
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
       classname:'color-red',
        isLoading:false,
       
      },
      methods:
      {
          toggleclass()
          {
              this.isLoading = 'true';
          }
      }
    
    })

  </script>



  </body>
  </html>