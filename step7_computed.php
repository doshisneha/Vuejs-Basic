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

    <h4>All Task</h4>
     <ul >
       <li v-for="task in tasks" v-text="task.description"></li>
     </ul>



     <h4>Computed  Task</h4>
     <ul >
       <li v-for="task in tasks" v-if="task.computed" v-text="task.description"></li>
     </ul>
     OR

     <ul >
       <li v-for="task in completetasks"  v-text="task.description"></li>
     </ul>

     <h4>Incomplete Task</h4>

     <ul >
       <li v-for="task in incompletetasks"  v-text="task.description"></li>
     </ul>


  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello',
        tasks:[
          {description:'Hello World',computed:true,},
          {description:'How R U',computed:false,},
          {description:'Fine Thank U',computed:false,},
          {description:'And U?',computed:true,},

        ]
      },
      computed: {
            // a computed getter
            reversedMessage: function () 
            {
             // `this` points to the vm instance
             return this.message.split('').reverse().join('');
            },

             
           incompletetasks() 
             {
               return this.tasks.filter(task => ! task.computed);
             } ,

             completetasks() 
             {
               return this.tasks.filter(task => task.computed);
             }

         }
    })

  </script>



  </body>
  </html>