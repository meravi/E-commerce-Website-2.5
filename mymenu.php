
<style>
.mini-header{
	background-color: #000;
	min-height: 30px;
}
.left-header span{
	color: #fff;
	font-size: 16px;
	border-left: 1px solid #F0BE07;
	height: 15px;
	padding-left: 10px;
	padding-right: 10px;
	margin-top: 5px;
}
.left-header a{
	color: #fff;
}
.left-header a:hover{
	color: #F0BE07;
	text-decoration: none;
}
.right-header span{
	color: #fff;
	font-size: 16px;
	float: right;
	margin-top: 5px;
}
.right-header a{
	color: #fff;
}
.right-header a:hover{
	color: #F0BE07;
	text-decoration: none;
}
i.fa.fa-shopping-cart{
	font-size: 25px;
	margin-top: 50px;
	padding:7px;
	box-sizing: border-box;
	border:1px solid #00ccff;
	background-color:  #00ccff;
	color: #fff;
	border-radius: 50%;
	height: 45px;
	width: 45px;
}
p.count{
	color: #fff;
	padding-left:14px;
	height: 20px;
	width:40px;
	box-sizing: border-box;
	border:1px solid #d21e79;
	background-color:  #d21e79;
	border-radius:10px;
	margin-top: -50px;
	position: absolute;
	margin-left: 30px;
}
div.container-fluid{
padding-left: 0px;
	padding-right: 0px;

}
nav.navbar{
	border-radius: 0px;
}
nav{background-color: #d21e79;
	margin-top: 10px;

}
nav li a{
	color: #fff;
	font-size: 17px;
}

.nav.navbar-nav li a:hover{
	color: #000;
	background-color: transparent;
}	


.dropdown-menu li:hover {background-color: #e2368c;}
.dropdown:hover .dropdown-menu {
    display: block;
}
.navbar-toggle {
    position: relative;
    float: right;
    padding: 2px 7px;
    margin-top: 10px;
    margin-right: 15px;
    margin-bottom: 5px;
    background-image: none;
    border: 2px solid white;
    border-radius: 4px;
}
.fa.fa-bars span{
display: none;
border-bottom: 1px solid grey;}


@media (max-width: 767px){
.navbar-nav .open .dropdown-menu>li>a {	color: #fff;}

.fa.fa-bars span {
    display: block;
/* border-bottom: 1px solid grey;*/
}

}
</style>
	<div class="container-fluid">
		<div class="mini-header">
			<div class="row-content">
				<div class="col-md-6">
					<div class="left-header">
						<span class="fa fa-phone" style="border:none;"> Call us:989732473</span>
						<span class="fa fa-envelope"> <a href="#">sastoshowroom@gmail.com</a></span>
					</div>
				</div>
				<div class="col-md-6">
				
				</div>
			</div>
		</div>
		<!-- HEADER -->
		<div class="header">
			<div class="row-content">
				<div class="col-md-3">
					<img src="logo.jpg" style="height: 110px; margin-top: 10px; margin-left: 15px;">
				</div>
				<div class="col-md-7">
       <!-- Search Field -->
            <div class="row">
                <div class="form-group">
                    <div class="input-group" style="margin-top: 50px;">
                        <input class="form-control" type="text" name="search" placeholder="Search Product" required style="padding: 18px;" />
                        <span class="input-group-btn">
                            <button class="btn" type="submit" style="padding: 8px; background-color:#D21E79; color: #fff;" >
                            	<span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left: 10px;">
                            	<span style="margin-right:10px;">Search</span>
                            </button>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
				</div>
		<!--  -->
				<div class="col-md-1">
				</div>
				<div class="col-md-1">
	
				</div>	
			</div>
		</div>
	</div>
		<!-- menu -->
		<div class="container-fluid">
		<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="fa fa-bars" style="color: white;"></span>                     
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li class="active"><a href="index.php">Home</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product <span class="fa fa-angle-double-down" style="font-size: 12px;"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Product 1</a></li>
            <li><a href="#">Product 2</a></li>
            <li><a href="#">Product 3</a></li>
          </ul>
        </li>
        <li><a href="#">Our delivery</a></li>
        <li><a href="#">Feature</a></li>
      
      <!-- <ul class="nav navbar-nav navbar-right"> -->
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>