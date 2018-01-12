<!DOCTYPE html>
<html>
<head>
  <title>V-Methods</title>
  <script src="vue2.5.13.js"></script>
</head>
<body>

<h1>V Methods - EVENT LISTENERS</h1>
  <div id="app">
    
    <ul>
        <li v-for="name in names" v-text="name"></li>
    </ul>

    <h3>on click</h3>
  <input type="text" v-model="newname">
 

    <button v-on:click="addname">ADD</button> OR <button @click="addname">ADD</button>

   <h3>on key up</h3>
    <input type="text"  v-model="newnames" v-on:keyup="addnames">
    OR <input type="text" id="input" v-model="newnames" @keyup="addnames">
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        newname : '',
        newnames : '',
        names: ["abc","xyz","test"],
      },
      methods: {
        addname: function () {
        
         this.names.push(this.newname);
         this.newname='';
        },
         addnames: function () {
        
        this.names.push(this.newnames);
        this.newnames='';
       },

      },
    })

  </script>



  </body>
  </html>