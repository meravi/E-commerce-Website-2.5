<style>

.col-md-2 p{
  font-size: 35px;
  font-family: ZWISDOM;
  text-align: left;
  color:#FF284C;
 margin-top: 15px;
 line-height: 35px;
}


img{
  height: 80px;
 margin-left: 50px;
  margin-top: 20px;
}
form{
  margin-left: 32%;
  margin-bottom: 20px;

}

input.search{
  width: 60%;
  background-color: white;
  height: 40px;
  border-radius: 2px;
  padding-left: 10px;


}
i.fa.fa-search{
  font-size: 18px;
  box-sizing: border-box;
  border:1px solid #FF284C;
  padding: 9px 14px;
  background-color: #ED645C;
  /*position: absolute;
  right:  380px;*/
  color: #fff;
}

i.fa.fa-shopping-cart{
  font-size: 20px;
  box-sizing: border-box;
  border:1px solid  #eb5047;
  padding: 7px 16px;
  margin-left: 90px;
  background-color:  #eb5047;
  border-radius: 3px;
  color: #fff;

}


header{
  padding-bottom: 80px;
}
.right{
  text-align: right;
}
.right span{
  font-size: 17px;
  border-right: 1px solid #00A0DC;
  height: 20px;
  padding-left: 10px;
  padding-right: 10px;
  color: #00A0DC;
}
.topnav {
  overflow: hidden;
  background-color: #ED645C;
  /*to make the navbar fixed*/
  position: sticky; 
  bottom: 15vh;
  top: 0;

}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 50px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
  min-width: 25%;

}

.topnav a:hover {
  background-color: #f7bdba;
  color: black;
  font-weight: bold;
}

.active {
  background-color: #ED645C;
  color: white;
}

.topnav .icon {
  display: none;
}


@media screen and (max-width:990px) {
  .topnav a {display: none;
}
  .topnav a.icon {
    float: right;
    display: block;
  }
  div.right span{
display: none;
  }
.fa.fa-shopping-cart{
  display: none;
}
div.col-md-1 img{
  position: absolute;
  top:-35vh;
  margin-left: 93vw;
  height: 40px;
}
input.search{
  margin-left:-20%;
  width: 70%;
  position:absolute;
top:40vh;
}
i.fa.fa-search{
  position: absolute;
  top: 40vh;
  left: 83%;
}
}

@media screen and (max-width:990px) {
  .topnav.responsive {position:relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
    margin-top: 0px;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
/*.sticky {
  position: fixed;
  top: 0;
  width: 100%
}*/

</style>


  <header>
    <div class="row-content">
      <div class="col-md-2">
        <p>Sasto</p>
        <p>Showroom</p>
      </div>
      <div class="col-md-1">
        <img src="shopping-cart.png">
      </div>
      <div class="col-md-9">
        <div class="right">
        <span class="fa fa-home"> Tinkune, Kathmandu</span>
        <span class="fa fa-phone"> Phone No:74674367</span>
        <span class="fa fa-envelope"> dhsha@gmail.com</span>
  
      </div>
      </div>
    </div>
    
  </header>
<form>
  <input type="text" name="serach"  class="search" placeholder="Search">
<a href="#"><span class="submit"><i class="fa fa-search"></i></span></a>
<i class="fa fa-shopping-cart"> Cart </i>
</form>
<div class="topnav" id="myTopnav">
 <ul> <a href="#" class="active">Home</a>
        
  <a href="#">News</a>
  <a href="#">Contact</a>
  <a href="#">About</a>
  <a href="#" style="font-size:15px;" class="icon" onclick="myFunct()">&#9776;</a>
</ul>
</div>


<script>

function myFunct() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}



</script>