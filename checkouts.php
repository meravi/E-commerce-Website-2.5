<style>
html,body,.wrapper{
    background: #f7f7f7;
 

}
.steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
}
.step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
}
.step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
}
.step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
}
.step_complete {
    background: #357ebd
}
.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
}
.step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
}
.step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
}
.step.check_step {
    margin-left: 5px;
}
.ch_pp {
    text-decoration: underline;
}
.ch_pp.sip {
    margin-left: 10px;
}
.check-bc,
.check-bc:hover {
    color: #222;
}
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}

.btn-xs{
    line-height: 28px;
}

/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-help{
  font-size: 12px;
}

.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}

/* images*/
ol, ul {
  list-style: none;
}
.hand {
  cursor: pointer;
  cursor: pointer;
}
.cards{
    padding-left:0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .mastercard {
  background-position: -51px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .amex {
  background-position: -102px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards li:last-child {
  margin-right: 0;
}
/* images end */



/*
 * BOOTSTRAP
 */
.container{
    border: none;
}
.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}

.panel-info {
    border-color: #999;
}

.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color: #eee;
    border-color: #999;
}
.panel-info > .panel-heading {
    background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}

hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}

.btn-link {
    color: #888;
}

hr{
    margin-bottom: 10px;
    margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}

@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}

@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}

.form-control {
    border-radius: 1px;
}

@media only screen and (max-width: 486px){
    .col-xss-12{
        width:100%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }
    
}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
</style>
<div class="container wrapper">
            <div class="row cart-head">
                <div class="container-fluid">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                        <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                        <span class="step_thankyou check-bc step_complete">Thank you</span>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            My Order <div class="pull-right"><small><a class="afix-1" href="index.php?Products=cart">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
                            <?php   $sid = session_id();
                                $SuccessCartDis = $NepdevJDLight->NepdevDisCarts($sid);
                $sn=1;
            
                while($SuccessCartFetch = $SuccessCartDis->fetch_assoc())
                {  
                    $cid = $SuccessCartFetch['pid'];
                    $SuccessCartDetail = $NepdevJDLight->NepdevDisCartsById($cid);
                    while($SuccessCartDetailFetch =$SuccessCartDetail->fetch_assoc())
                    {
                            ?>
                          <?php echo $sn; ?>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="meadmin/pro_img/<?php echo $SuccessCartDetailFetch['ProImage']; ?>" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12"></div>
                                    <div class="col-xs-12"><small>Quantity:<span><?php echo $SuccessCartFetch['p_qty']; ?>* Rs<?php echo $SuccessCartFetch['Price']; ?></span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>Rs</span><?php echo $SuccessCartFetch['TotalPrice']; ?></h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
               <?php } $sn++; }  ?>
                      
                          
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span></span><span> <?php $TotalPaisa = $NepdevJDLight->NepdevTotalPrices($sid);
                   $TotalPaisaFetch = $TotalPaisa->fetch_assoc();
                   $sum = $TotalPaisaFetch['total_paisa']; echo "Rs ".$sum;
                    ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Shipping Address</h4>
                                </div>
                            </div>
                            <?php
                            
                            if(isset($_POST['ordernow']))
                            {
                             
                                $fullname = $_POST['fullname'];
                                $address = $_POST['address'];
                                $phone = $_POST['phone'];
                                $email = $_POST['email'];
                                $sesid = $_POST['sesid'];
                                 if($fullname=="" AND $address=="" AND $email=="" AND $phone=="")
                                 {
                                     echo "Dont leave any field ";
                                 }
                                elseif($fullname=="")
                                {
                                    echo "<script>alert('Enter Your FirstName');</script>";
                                }
                                elseif($address=="")
                                {
                                    echo "<script>alert('Enter Your Shipping Address');</script>";
                                }
                                elseif($email=="")
                                {
                                    echo "<script>alert('Enter Your Email');</script>";
                                }
                                elseif($phone=="")
                                {
                                    echo "<script>alert('Enter Your Phone Number ');</script>";
                                }
                                else
                                {
                                 $OrderNowSuccess = $NepdevJDLight->NepdevOrderNow($fullname,$address,$email,$phone,$sesid);
                                    if($OrderNowSuccess==true)
                                    { 
                                        
                                        $sesid = session_id();
                                        $delcarts = $NepdevJDLight->NepdevDelCarts($sesid);
                                        echo "<script>alert('Success Order Your Product'); window.location='index.php';</script>";
                                    }
                                    else
                                    {
                                        echo "<script>alert('Cant Order');</script>";
                                    }
                                }
                            }
                            ?>
                            <form method="post">
                     <input type="hidden" name="proid" value="<?php $SuccessCartDis = $NepdevJDLight->NepdevDisCarts($sid);
                            $cid =array();
                                  while($SuccessCartFetch = $SuccessCartDis->fetch_array())
                { 
                                      $cid[] = $SuccessCartFetch['pid'];

                                  }
                             
//                                 print_r(explode('and',$cid));
                                ?>"> 

            <div class="form-group">
                <input type="hidden" name="total" value="<?php echo $sum; ?>">
                <input type="hidden" name="sesid" value="<?php echo session_id();  ?>">
                                <div class="col-md-12"><strong>Full Name:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="fullname" class="form-control" value="<?php if(isset($_POST['ordernow'])){ echo $fullname; } ?>" />
                                     
                                </div>
                            </div>
                            
                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="<?php if(isset($_POST['ordernow'])){ echo $address; } ?>" />
                                </div>
                            </div>
      
              
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone" class="form-control" value="<?php if(isset($_POST['ordernow'])){ echo $phone; } ?>" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Address:</strong></div>
                                <div class="col-md-12"><input type="email" name="email" class="form-control" value="<?php if(isset($_POST['ordernow'])){ echo $email; } ?>" /></div>
                            </div>
                                 <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-submit-fix" value="Place Order" name="ordernow">
                                </div>
                            </div>
                                   </form>
                        </div>
                         
                    </div>
                    <!--SHIPPING METHOD END-->
           
                  </div>
                </form>
          
            <div class="row cart-footer">
        
            </div>
    </div>