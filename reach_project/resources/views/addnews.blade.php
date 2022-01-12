<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/admin.css" href="{{ asset('/css/admin.css') }}">
      <title>Admin Page</title>
   </head>
   <body>
      <form action="/addnews" method ="POST" enctype = "multipart/form-data">
      @csrf

         <section>
            <div class="content">
               <div class="navbar">
                  <div class="head-nav">
                     <div class="head-logo">
                        <img src="reachimages/logoreach.svg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="section">
         <div class="inputs-news">
            <div class="text-title-news">
               <h4>Title: </h4>
               <input type="text" name = "title" required>
            </div>
            <div class="text-body-news">
               <h4>Body: </h4>
               <input type="text" name = "body" required>
            </div>
            <div class="file-news">
               <input type="file"
                  id="avatar" name="file"
                  accept="image/png, image/jpeg" required>
            </div>
         </div>
         </div>
        
         <div class="button-add">
            <button>
            Add Post
            </button>
         </div>
      </form>
      <div class="main">
      <div class="nav-bottom">
      <div></div>
   </body>
</html>