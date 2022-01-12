<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Reach Login</title>
      <link rel="stylesheet" href="css/admin_login.css">
      <style>
         @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,900&family=Tajawal:wght@500;900&display=swap");
      </style>
   </head>
   <body>
   <form action ="/login" method ="POST" enctype = "multipart/form-data">
            @csrf
      <div class="box_holder">
         <div class="box_middl_holder">
            <div class="box_middle_form">

            <div class="login_inputs">
            <h2>Login to Reach</h2>

            <h4>Admin Page</h4>

               <a href="#"><img src="reachimages/logoreach.svg" alt="" /></a>
          

                  <div class="second_box_holder">
        <input type="text" name="username"  placeholder="User Name.." required>
            <input type="password" name="password" placeholder="Password.." required>
               <div class="logo_reach">
               <button >Submit</button>      
                       </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
</form>
   </body>
</html>