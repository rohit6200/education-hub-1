<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="Home1.css" rel="stylesheet" type="text/css" />
  <link href="scroll.php" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#pre").mouseenter(function(){
    alert("Our moto is to help the students");
  });
});
</script>
</head>

<body>

 <?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login-style.css">
    <title>Login By Student</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="#" method="POST">
        <div class="form">
        <input type="text" name="username" required class="textfiled" placeholder="UserName" required>
        <input type="password" name="password" required class="textfiled" placeholder="Password" required>
        
        <div class="forgetpass"><a href="#" class="link"
        onclick="message()"
        >Forget Password ?</a></div>
        <input type="submit" name="login" value="Login" class="btn">
        <div class="signup">New Member ?<a href="StRegister.php" class="link">Signup Student</a>
        <br>
        <a href="Tregister.php" class="link">Signup Teacher</a>
        </div>
    </div>
    </div>
    </form>
    <script>
        function message()
        {
            alert("Password Ko Yadh Rakho");
        }


    </script>
</body>

</html>
 <?php

include("connection.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM form WHERE email ='$username' && password ='$pwd' ";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;
    if($total == 1)
    {
        $_SESSION['user_name'] = $username;
        header('location:display.php');
    }
    else
    {
        echo "Login Failed";
    }
}
?> 
<!--navigation-->
<div class="logo">
  <img src="logo.png" alt="log" width="170px"  border-radius="50%">
</div>
  <div class="sticky">
    <nav>
      <br>
      <div class="menu-bar" >
        <ul>
          <li class="active"><a href="#"><i class="fa fa-home"></i><b>Home</b></a></li>
          <li><a href="#"><i class="fa fa-user"></i>ABOUT</a>
            <div class="sub-menu-1" >
              <ul>
                <li class="hover-me"><a href="#"></a>
                  </p>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-clone"></i>COURSE</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class I</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class II</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class III</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class IV</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class V</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VI</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VII</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VIII</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class IX</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class X</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XI</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XII</a></li>
              </ul>
            </div>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"></a></li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-calendar"></i>EVENTS</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Latest Update</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Visits</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Activities Day</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Student Location</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Teacher Location</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Wesite Policy</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-calendar"></i>SUJECT</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Mathematices</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Physics</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Social Science</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Hindi</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>English</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>General Awareness</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Environmental Science</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-users"></i>JOIN Us</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="Home1.php"><i class="fa fa-angle-right"></i>Student</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="StRegister.php">Student Register</a>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Teacher</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="Tregister.php">Teacher Register</a>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-sign-in"></i>LOG IN</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Teacher</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="login.php" target="_blank"> Log in </a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Studnet</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="login.php" target="_blank"> Log in</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-sign-in"></i>SYLLABUS</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class I</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="aerd1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="maths1.pdf" target="_blank">Maths</a></li>
                      <li><a href="hindi1.pdf" target="_blank">Hindi</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class II</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="hindi1.pdf" target="_blank">Hindi</a></li>
                      <li><a href="aerd1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="maths1.png" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class III</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="hindi 3 4.pdf" target="_blank">Hindi</a></li>
                      <li><a href="eng3.pdf" target="_blank">English</a></li>
                      <li><a href="Envi3.pdf" target="_blank">Environmental</a></li>
                      <li><a href="maths3.pdf" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class IV</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="hindi 3 4.pdf" target="_blank">Hindi</a></li>
                      <li><a href="eng3.pdf" target="_blank">English</a></li>
                      <li><a href="Envi3.pdf" target="_blank">Environmental</a></li>
                      <li><a href="maths4.pdf" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class V</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="hindi5.pdf" target="_blank">Hindi</a></li>
                      <li><a href="en5.pdf" target="_blank">English</a></li>
                      <li><a href="env5.pdf" target="_blank">Environmental</a></li>
                      <li><a href="mh5.pdf" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VI</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="fehlps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="fhsk1pr_merged.pdf" target="_blank">English</a></li>
                      <li><a href="fess2ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="fesc1ps_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="femh1an_merged.pdf" target="_blank">Mathes</a></li>
                      <li><a href="fhsk1pr_merged.pdf" target="_blank">Sanskrit</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VII</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="gehc1ps_merged.pdf" target="_blank">Hindi -A</a></li>
                      <li><a href="gemh1an_merged.pdf" target="_blank">Englsih -A</a></li>
                      <li><a href="gess3ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="gesc1ps_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="gemh1an_merged.pdf" target="_blank">Mathes</a></li>
                      <li><a href="ghvs1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class VIII</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="hhvs1ps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="hemh1an_merged.pdf" target="_blank">English</a></li>
                      <li><a href="h4ss4ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="hemh1an_merged.pdf" target="_blank">Maths</a></li>
                      <li><a href="hesc1in_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="hhsk1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class IX</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="ihks1ps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="iebe1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="iess4ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="iemh1a1_merged.pdf" target="_blank">Maths</a></li>
                      <li><a href="iesc1an_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="ihsh1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                      <li><a href="iict1ps_merged.pdf" target="_blank">IACT</a></li>
                      <li><a href="iehp1ps_merged.pdf" target="_blank">HPD</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class X</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="jhsk1ps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="jeff1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="jess1a1_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="jemh1a1_merged.pdf" target="_blank">Maths</a></li>
                      <li><a href="jesc1an_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="jhsk1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                      <li><a href="jehp1ps_merged.pdf" target="_blank">HPD</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XI SCIENCE</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="login_faculty.html" target="_blank">Physics</a></li>
                      <li><a href="login_faculty.html" target="_blank">Chemistry</a></li>
                      <li><a href="login_faculty.html" target="_blank">Biology</a></li>
                      <li><a href="login_faculty.html" target="_blank">Sanksrit</a></li>
                      <li><a href="login_faculty.html" target="_blank">Computer Science</a></li>
                      <li><a href="login_faculty.html" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XI ECHONOMIC</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="ihks1ps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="iebe1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="iess4ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="iemh1a1_merged.pdf" target="_blank">Maths</a></li>
                      <li><a href="iesc1an_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="ihsh1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                      <li><a href="iict1ps_merged.pdf" target="_blank">IACT</a></li>
                      <li><a href="iehp1ps_merged.pdf" target="_blank">HPD</a></li>
                    </ul>
                  </div>
                </li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XII SCIENCE</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="login_faculty.html" target="_blank">Physics</a></li>
                      <li><a href="login_faculty.html" target="_blank">Chemistry</a></li>
                      <li><a href="login_faculty.html" target="_blank">Biology</a></li>
                      <li><a href="login_faculty.html" target="_blank">Sanksrit</a></li>
                      <li><a href="login_faculty.html" target="_blank">Computer Science</a></li>
                      <li><a href="login_faculty.html" target="_blank">Maths</a></li>
                    </ul>
                  </div>
                </li>
                  <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Class XII ECHONOMI</a>
                  <div class="sub-menu-2">
                    <ul>
                      <li><a href="ihks1ps_merged.pdf" target="_blank">Hindi</a></li>
                      <li><a href="iebe1ps_merged.pdf" target="_blank">English</a></li>
                      <li><a href="iess4ps_merged.pdf" target="_blank">Social Science</a></li>
                      <li><a href="iemh1a1_merged.pdf" target="_blank">Maths</a></li>
                      <li><a href="iesc1an_merged.pdf" target="_blank">Science</a></li>
                      <li><a href="ihsh1ps_merged.pdf" target="_blank">Sanskrit</a></li>
                      <li><a href="iict1ps_merged.pdf" target="_blank">IACT</a></li>
                      <li><a href="iehp1ps_merged.pdf" target="_blank">HPD</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-phone"></i>CONTACT</a>
            <div class="sub-menu-1">
              <ul>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>Complaint</a></li>
                <li class="hover-me"><a href="#"><i class="fa fa-angle-right"></i>How to find us</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <article>
    <pre id="pre" class="Tho">
      DONT'T CALL
              IT 
              A DREAM
            CALL IT A 
                PLAN    
             
            

    </pre>
  </article>
  <article>
    <pre class="Quit1">
      FAIL 
          YOUR
       WAY 
          TO      
          SUCCESS
              
              
    </pre>
  </article>
  <article>
    <pre class="Quit2">
      YOU CAN
            WIN
     IF YOU   
            WIN
              
              

    </pre>
  </article>
  <article>
    <pre class="Quit3">
      A BEAUTIFUL DAY
            BEGINS
         WITH A
            BEAUTIFUL MINDSET

                
    </pre>
  </article>
    <!-- 
      STUDENT AND TECAHER PITCHER
     -->
     <div class="card">
      <div class="card1">
        <h2>Teacher and Student Pic</h2>
        <div class="image">
          <img src="student2.png" alt="panting" width="360px" height="300px">
          <img src="st.png" alt="panting" width="360px" height="300px">
          <img src="st and te.png" alt="panting" width="360px" height="300px">
          <img src="p2.png" alt="panting" width="360px" height="300px">
</div>
</div>
</div>
    <!--END OF SECTION-->
    <!-- VIDEOES DEMO TEACHER FOR STUDENT -->

    <div class="Video1">
      <div class="Video2">
        <h2>Teacher Videos</h2>
        <div class="Video">
          <div>
          <iframe width="360" height="300" src="https://www.youtube-nocookie.com/embed/_9mTJ84uL1Q" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>

           <iframe width="360" height="300" src="https://www.youtube.com/embed/ER9SspLe4Hg" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>

            <iframe width="360" height="300" src="https://www.youtube.com/embed/IkAKzmSHufw" 
          title="YouTube video player" frameborder="0"
           allow="accelerometer; autoplay; clipboard-write; 
           encrypted-media; gyroscope; picture-in-picture" 
           allowfullscreen></iframe>

            <iframe width="360" height="300" src="https://www.youtube.com/embed/XnVlJds05rw"
               title="YouTube video player" frameborder="0" 
               allow="accelerometer; autoplay; clipboard-write; 
               encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                <iframe width="360" height="300" src="https://www.youtube-nocookie.com/embed/4uQAokzfm-Q"
                   title="YouTube video player" frameborder="0" 
                   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                   allowfullscreen></iframe>


                   <iframe width="360" height="300" src="https://www.youtube-nocookie.com/embed/lZbl7Q21t4s"
                     title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                      allowfullscreen></iframe>

                    <iframe width="360" height="300" src="https://www.youtube-nocookie.com/embed/-0IxWrSBsco" 
                      title="YouTube video player" frameborder="0"
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                       allowfullscreen></iframe>
                    
                      <iframe width="360" height="300" src="https://www.youtube-nocookie.com/embed/mkVg1-6iCZM" 
                        title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                         allowfullscreen></iframe>
      <div>
     </div>
     
    <!-- VIDEOES DEMO TEACHER FOR STUDENT -->

    <!-- ABOUT THE WESITE -->
    <div class="Movi1">
      <div class="Movi">
        <h2>Fresh Morning</h2>
        <div class="Movi2">
          <img src="mo2.png" alt="Motivansional" width="360px" height="300px">
          <img src="mov3.png" alt="Motivansional" width="360px" height="300px">
          <img src="mov4.png" alt="Motivansional" width="360px" height="300px">
          <img src="mov5.png" alt="Motivansional" width="360px" height="300px">
        <div>
      <div>
     </div>

        <!-- FOOOTER PART -->
    
        <!-- ABOUT WESITE -->
    <script src="script.js"></script>
</body>
</html>





