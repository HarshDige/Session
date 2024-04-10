<?php
require_once "./conection.php";
if(isset($_SESSION['userdata']))
{
        header("Location:dashbord.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/both.css">
</head>
<body>
    <div class="container">
            <div class="login1">
            <h1 class="h1"> Login Form</h1>  
           
                    <form action="login-code.php" method="POST">

                            <label class="" style="padding-top:40px;  padding-left: 5px;   "><b>Username OR Email <span style="color:red">*</span></b></label> 
                            <div  class="input-group  login-input">
                                     
                                    <span class="input-group-text berror" id="uicon"><i class="bi bi-person-fill"></i></span>
                                    <input onkeyup="uservali()" type="text"  id="user1" name="user-email" placeholder="Username" value="" class="form-control back berror" aria-describedby="icon1">  
                                  
                            </div>
                            <label class="error" style=" padding-left: 6px;  ">Username OR Email Is Required!</label>  
                           

                            <br>
                            <label class="" style="padding-top:0;  padding-left: 5px;  "><b>Password<span style="color:red">*</span></b></label> 
                            <div  class="input-group  login-input ">
                                     
                                    <span class="input-group-text berror" id="picon"><i class="bi bi-bag-fill"></i></span>  <!-- <i class="bi bi-file-lock2-fill"></i></span> -->
                                    <input onkeyup="passvali()" type="password" id="pass" name="pass" placeholder="Password" value="" class="form-control back berror" aria-describedby="icone">  
                                     <span class="input-group-text berror" id="eicon" onclick="myfunction()"> <i style="display: none;"  class="bi bi-eye-fill" id="show"></i> <i  class="bi bi-eye-slash-fill"  id="hide"></i></span> 
                            </div>
                            <label class="error" style=" padding-left: 6px;  ">Password Is Required!</label>



                            <div class="" style="padding-top:40px ">
                                    <button type="button" onclick="loginValidation()" id="btn" class="btn btn-info" >Login</button>
                            </div>
                            
                            <input type="submit" id="loginbtn" name="loginbtn" style="display:none;">

                        
                        
                            <div style="padding-top:20px; padding-left:64px;">
                                 <label>Don't have an account?</label><a href="#" style="color: black;" onclick="rightslide()"><b>Sign Up</b></a>
                            </div>

                            <div class="input-group" style="margin-top: 20px;">
                                <hr width="150px">  <span style="margin-left:15px; margin-right:15px;"> OR </span> <hr width="150px">
                            </div>
                            <div>
                                
                                        <i class="fa-brands fa-google" id="g"></i>
                                        <i class="fa-brands fa-facebook" id="f"></i>
                                        <i class="fa-brands fa-linkedin" id="in"></i>
                            </div>  

                    </form>
            </div>
           

            
       
         <img src="signup-image.jpg" id="image" width="399px" height="595px">           
          

            <div class="login2" id="imgslide">


                
                   <div class="regi">
                   <h1 class="h12"> Sign Up</h1>  
                   <form action="insert.php"  method="POST">

                        <label class="" style="padding-top:40px; padding-left: 5px; "><b>Username<span style="color:red">*</span></b></label> 
                        <div  class="input-group  sign-input">
                                     
                                    <span class="input-group-text berror" id="suicon"><i class="bi bi-person-fill"></i></span>
                                    <input onkeyup="user2vali()" type="text"  id="suser" name="username" placeholder="Username" value="" class="form-control berror" aria-describedby="suicon">  
                                    
                                        
                        </div>
                        <label class="serror" style=" padding-left: 8px;  ">Username Is Required!</label>  
                        <br>

                        <label class="" style="padding-top:5px; padding-left: 5px; "><b>Email<span style="color:red">*</span></b></label> 
                        <div  class="input-group  sign-input">
                                     
                                    <span class="input-group-text berror" id="emailicon"><i class="bi bi-envelope-fill"></i></span>
                                    <input onkeyup="emailvali()" type="email"  id="email" name="email" placeholder="exaple@gmail.com" value="" class="form-control berror" aria-describedby="emailicon">  
                                    
                                        
                        </div>
                        <label class="serror" style=" padding-left: 8px;  ">This email is invalid. Make sure it's written like example@email.com</label>  
                        <br>

                        
                        <label class=" " style="padding-left: 5px; "><b>Password<span style="color:red">*</span></b></label> 
                        <div  class="input-group  sign-input ">
                                     
                                    <span class="input-group-text berror" id="spicon"><i class="bi bi-bag-fill"></i></span>  
                                    <input onkeyup="pass2vali()" type="password" id="spass" name="password" placeholder="Password" value="" class="form-control  berror" aria-describedby="spicon">  
                                     <span class="input-group-text berror" id="seicon" onclick="myfunction1()"> <i  style="display: none;" class="bi bi-eye-fill" id="show1"></i> <i  class="bi bi-eye-slash-fill"  id="hide1"></i></span> 
                        </div>
                        <label class="serror" style=" padding-left: 8px;  ">Password Is Required!</label>  
                        <br>

                        <div class="subret" style="padding-top:5px;  ">
                                    <button type="button" id="btn1" onclick="signupValidation()"  width="30px" class="btn btn-info button" >Submit</button>
                                    <button type="reset" id="btn2"   width="30px" class="btn btn-info button" >Reset</button>
                        </div>
                        <input type="submit" id="signbtn" name="signbtn" style="display:none;">

                   </form> 


                   <hr>

                   <div>
                        <label style="margin-left:50px;"> Already An Account?</label> <a href="javascript:void(0)" style="color: black;" onclick="leftslide()"><b>Login Here</b></a>
                   </div>
                   </div>

  
            </div>
            
            

        


    </div>
    



    <script>

        
        // -------------------------------------------------------------------------------------------------------------------------
        //FOr Image Slide 
        function rightslide()
        {
                document.getElementById("image").classList.add('rightslide');
                setTimeout(() => {
                        document.getElementById("image").style="right:768px";
                         document.getElementById("image").classList.remove('rightslide');
                }, 1000);
        }

        function leftslide()
        {
                document.getElementById("image").classList.add('leftslide');
                setTimeout(() => {
                        document.getElementById("image").style="right:370px";
                        document.getElementById("image").classList.remove('leftslide'); 
                }, 1000);

        }
        
        // -------------------------------------------------------------------------------------------------------------------------
        // For login Validation

        function loginValidation()
        {
                uservali();
                passvali();

                if(uservali() && passvali()){
                        document.getElementById("loginbtn").click();
                }

        }

        function uservali()
        {
                var uname =document.getElementById("user1").value;
                var lerror =document.getElementsByClassName("error");
                var bred =document.getElementsByClassName("berror");


                if(uname == "")
                {
                        lerror[0].style = "display:block";
                        bred[0].style = "border-color:red";     
                        bred[1].style = "border-color:red";     

                        return false;
                }
                else
                {
                        lerror[0].style = "display:none" ;
                        bred[0].style = "border-color:black";
                        bred[1].style = "border-color:black";

                        return true;
                }
        }


        function passvali()
        {
                var uname =document.getElementById("pass").value;
                var lerror =document.getElementsByClassName("error"); 
                var bred =document.getElementsByClassName("berror");


                if(uname == "")
                {
                        lerror[1].style = "display:block";
                        bred[2].style = "border-color:red";
                        bred[3].style = "border-color:red";
                        bred[4].style = "border-color:red";

                        return false;
                }
                else
                {
                        lerror[1].style = "display:none" ;
                        bred[2].style = "border-color:black";
                        bred[3].style = "border-color:black";
                        bred[4].style = "border-color:black";

                        return true;
                }
        }

        
        // -------------------------------------------------------------------------------------------------------------------------
        //  Validation For sign Up


        function signupValidation()
        {

                user2vali();
                emailvali();
                pass2vali();

                if(user2vali() && emailvali() && pass2vali()){
                        document.getElementById("signbtn").click();
                }
        }

        function user2vali()
        {
                var uname =document.getElementById("suser").value;
                var lerror = document.getElementsByClassName("serror");
                var bred = document.getElementsByClassName("berror");


                if(uname == "")
                {
                        lerror[0].style = "display: block";
                        bred[5].style = "border-color: red";
                        bred[6].style = "border-color: red";

                        return false;
                }
                else
                {
                        lerror[0].style = "display: none";
                        bred[5].style = "border-color: black";
                        bred[6].style = "border-color: black";

                        return true;
                }
        }

        function emailvali()
        {
                var mail =document.getElementById("email").value;
                var lerror = document.getElementsByClassName("serror");
                var bred = document.getElementsByClassName("berror");


                if(mail == "")
                {
                        lerror[1].style = "display: block";
                        bred[7].style = "border-color: red";
                        bred[8].style = "border-color: red";

                        return false;
                }
                else
                {
                        lerror[1].style = "display: none";
                        bred[7].style = "border-color: black";
                        bred[8].style = "border-color: black";

                        return true;
                }
        }

        function pass2vali()
        {
                var pas =document.getElementById("spass").value;
                var lerror = document.getElementsByClassName("serror");
                var bred = document.getElementsByClassName("berror");


                if(pas == "")
                {
                        lerror[2].style = "display: block";
                        bred[9].style = "border-color: red";
                        bred[10].style = "border-color: red";
                        bred[11].style = "border-color: red";

                        return false;
                }
                else
                {
                        lerror[2].style = "display: none";
                        bred[9].style = "border-color: black";
                        bred[10].style = "border-color: black";
                        bred[11].style = "border-color: black";

                        return true;
                }
        }

        
        // -------------------------------------------------------------------------------------------------------------------------
        // For Password show And hide
       function myfunction()
       {
           var pas = document.getElementById("pass") ;
           var s = document.getElementById("show");
           var h = document.getElementById("hide");

           if(pas.type == "password")
           {
                pas.type ="text";
                h.style="display:none";
                s.style="display:block";
           }
           else
           { 
    
                 pas.type ="password";
                s.style="display:none";
                h.style="display:block";
           } 
        }


        function myfunction1()
       {
           var pas = document.getElementById("spass") ;
           var s = document.getElementById("show1");
           var h = document.getElementById("hide1");

           if(pas.type == "password")
           {
                pas.type ="text";
                h.style="display:none";
                s.style="display:block";
           }
           else
           { 
    
                 pas.type ="password";
                s.style="display:none";
                h.style="display:block";
           } 
        }
    </script>
</body>
</html>