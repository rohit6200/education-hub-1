<footer>
          <div class="main-content">
            <div class="left box">
              <h2>About Us</h2>
              <div class="content">
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint alias labore perferendis harum architecto odio error, 
                  cumque excepturi minima voluptatem corporis veniam deleniti perspiciatis molestiae quos at asperiores natus vel.
                  Animi aperiam, voluptas reprehenderit expedita nulla dolor sit cupiditate, ratione praesentium excepturi
                  odio! Qui porro perferendis enim numquam tempora asperiores odio dolorem aliquid natus sit, quo quis. Laborum, officia sunt?
                  quaerat tenetur reiciendis aperiam ab tempora nesciunt. Quia obcaecati, earum aliquam illo laboriosam corporis iusto.
                </p>
                <div class="social">
                  <a href="#"><span class="fa fa-facebook"></span></a>
                  <a href="#"><span class="fa fa-twitter"></span></a>
                  <a href="#"><span class="fa fa-instragram"></span></a>
                  <a href="#"><span class="fa fa-youtube"></span></a>
                  <a href="#"><span class="fa fa-whats"></span></a>
                </div>
              </div>
            </div>
            <div class="center box">
              <h3>Place</h3>
              <div class="content">
               <div class="phone">
                <span class="fa fa-phone-alt"></span>
                <span class="text">+91 -6200212814</span>
                </div>
              <div class="place">
                <span class="fa fa-map-marker-alt"></span>
                <span class="text">Marwadi University,Rajkot,Gujrat</span>
                </div>
                <div class="email">
                <span class="fa fa-envelope"></span>
                <span class="text">rohit.kuar17757@gmail.com</span>
                </div> 
              </div>
            </div>
            <div class="right box">
              <h3>Contact us<h3>
              <div class="content">
              <form action="#">
                <div class="email">
                  <div class="text">Email *</div>
                  <input type="email" required>
                </div>
                <div class="msg">
                <div class="text">Message</div>
                <textarea rows="2" cols="25" required></textarea>
                  <div class="text">
                  </div>
                  <div class="btn">
                  <button type="submit">Send</button>
                  </div>
                </div>
            </form>
              </div>
            </div>
          </div>
        </footer>

        <style>
*{
    color:white;
}            
footer{

position: fixed;
bottom: 0px;
width: 100%;
background-color: #111;

}
.main-content{
    display:flex;
}
.main-content .box{
    flex-basis:50%;
    padding:10px 20px;
}
.box h3{
    font-size:1.125rem;
    font-weight:600;
    text-transform:uppercase;
}
.box .content{
    margin:20px 0 0 0;
}
.left .content .social{
    margin:20px 0 0 0;
}
.left .content .social a{
    padding:0 2px;
}
.left .content .social a span{
    height:40px;
    width:40px;
    background:white;
    line-height:40px;
    text-align:center;
    font-size:18px;
    border-radius:5px;
    transition:0.3s;
}
.left .content .social a span:hover{
    background:red;
}


</style>