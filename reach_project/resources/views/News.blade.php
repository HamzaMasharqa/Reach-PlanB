<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/admin.css">
      <script src="https://kit.fontawesome.com/699079d472.js" crossorigin="anonymous"></script>
      <style>
         @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,900&family=Tajawal:wght@500;900&display=swap");
      </style>
      <title>Admin Page</title>
   </head>
   <body>
   <form action ="/addpost" method ="POST" enctype = "multipart/form-data">
            @csrf
                     <div class="content">
         <div class="navbar">
         <div class="head-nav">
            <ul>
               <li><a href="">Dashboard</a>  </li>
               <li>  <a href="">Pages</a></li>
               <li> <a href="">Catigories</a></li>
               <li> <a href="">Links</a></li>
               <li> <a href="News">News</a></li>
               <li><a href="Resources">Resources</a></li>
               <li><a href="">Staff</a></li>
               <li> <a href="">Partners</a></li>
               <li> <a href="">Sliders</a></li>
               <li><a href="">Careers</a></li>
               <li><a href="">Messages</a></li>
            </ul>
         </div>
         <div class="logo-reach">
            <img src="reachimages/logoreach.svg" alt="">
         </div>
         <div class="tbl-main">
            <table class="content-table">
               <thead>
                  <tr class = "new-post">
                     <th>                  <button> Add News</button>
                     </th>
                  </tr>
                  <tr>
                     <th>News ID</th>
                     <th>News Title</th>
                     <th>News Body</th>
                     <th>News Picture</th>
                     <th>Operations</th>
                  </tr>
               </thead>
               @foreach($News as $new)
               <tbody>
                  <tr>
                     <td>{{$new->id}}</td>
                     <td>{{$new->news_title}}</td>
                     <td>{{$new->news_body}}</td>
                     <td>{{$new->news_picture}}</td>
                     <td>
                        <a href="/postView/{{$new->news_id}}"><i class="fas fa-eye"></i></a>
                        <a href="/editnews/{{$new->id}}"><i class="fas fa-edit"></i></a>
                        <a href="/delete/{{$new->id}}"><i class="far fa-trash-alt"></i></a>
                     </td>
                  </tr>
               </tbody>


               @endforeach

            </table>

         </div>
         <div class="pagination">
{{ $News->links('vendor.pagination.custom') }}

</div>
      <div class="nav-bottom">

      <div>
         </form>
   </body>
</html>
