<?php 

require_once("functions/product.php");
$producthot = newest_products();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/style.php");?>
</head>
<style>
    footer{
    margin-top: 300px;
}

footer .tren{
    background-color: rgb(44, 159, 28);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 12vh;
}

footer .tren>div{
    display: flex;
    margin: 0 20px;
    font-size: 20px;
    font-weight: 600;
}

footer .tren>div>p{
    margin: 0 10px ;
    padding-top: 9px;
    
}
footer .tren>div>i{
   font-size: 30px;
    
}


footer .duoi{
    background-color:rgb(0, 12, 35) ;
  
    
    padding-top: 100px;
}
footer .duoi .duoi_tren{
    display: flex;
    max-width: 1500px;
    margin: auto;
  
    
}
footer .duoi .duoi_tren .trai {
    padding-right: 40px;
    
  
    
}
footer .duoi .duoi_tren .trai img{
    width:190px;
    margin-bottom: 10px;
  
    
}

footer .duoi .duoi_tren .trai p{
    
  color: rgb(113, 126, 142);
    
}
footer .duoi .duoi_tren .trai{
    width: 400px;
  
    
}

footer .duoi .duoi_tren .trai .icon_duoi>i{
    font-size: 25px;
    margin-right: 30px;
    color: rgb(35, 129, 29);
    
  
    
}


footer .duoi .duoi_tren .giua{
    display: flex;
    
  
    
}
footer .duoi .duoi_tren .giua>div{

    margin-right: 30px;
    
}


footer .duoi .duoi_tren .giua>div p{
color: rgb(109, 111, 119);

}
footer .duoi .duoi_tren .giua>div p:hover{
color: rgb(255, 255, 255);
}

footer .duoi .duoi_tren .giua>div #giua_tieude{
    color: #fff;
    font-size: 17px;
    font-weight: bold;
}

footer .duoi .duoi_tren .giua>div #giua_tieude:hover{
color: green;
transition: 0.2s;

}


footer .duoi .duoi_tren .phai{
    border-left: 2px solid rgb(44, 54, 72) ;
    margin-left: 10px;
    padding-left: 50px;
}

footer .duoi .duoi_tren .phai>div{
    display: flex;

}

footer .duoi .duoi_tren .phai>div .phai_icon{
    display: flex;
    justify-content: center;
    align-items: center;
  
    font-size: 30px;
    margin-right: 10px;
}
footer .duoi .duoi_tren .phai>div .phai_icon>i{
    color: green;
}

footer .duoi .duoi_tren .phai>div .trai_icon>p{
    padding: 0;
    margin-bottom: 5px;

}


</style>
<body>
    <header>
    <?php include_once("html/nav.php");?>
    </header>

    <main>
        <section class="mot">
            <div class="trai" >
                <p id="tieude" >Low Prices Guarantee</p>
                <p><h1><b>All Vehicles</b></h1></p>
                <p>We have a wealth of all vehicles models foryou to choose from.</p>
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
            <div class="phai" >
                <p id="tieude" >Quality at Minimum Expense</p>
                <p><h1><b>Used Car</b></h1></p>
                <p>We have a wealth of used car models for you to choose from.</p>
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
            
          




        </section>
        <section class="produc" >
            <div class="tren" >
                <div class="trai" >
                    <p id="tieude">Top Vehecles</p>
                    <h1><b>Featured Vehicles Suggested</b></h1>
                </div>
                <div class="phai" >
                    <button >All Vehicles</button>
                </div>
            </div>
            <div class="duoi row mt-1 ">
              
                  
                
                        <?php foreach($producthot as $item): ?>
                            <div class="col-md-3 " >
                            
                                <div data-aos="zoom-in-up" class="card cardxe mb-3">
                                    <a class ="cacxe"  href="/detail.php?id=<?php echo $item["newcar_id"]; ?>">
                                        <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top anhxe" alt="<?php echo $item["car_name"]; ?>">
                                    </a>
                                    <div  class="card-body thexe">
                                        <i class="bi bi-tags" style="color:gray; margin-right:16px;">Chery</i>
                                        <i class="bi bi-car-front" style="color:gray">SUV</i>
                                        <h6 class="card-title" style="margin:10px"><?php echo $item["car_name"]; ?></h6>
                                        <a href="/detail.php?id=<?php echo $item["newcar_id"]; ?>" class="btn btn custom-gray">View More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                

                
            </div>
        </section>
        <div data-aos="fade-up"  class="hai">
            <p><h1><b>We Offer Customers a Wide Range of <br>Electric Vehicle and Used Car</b></h1></p>
            <p>From the moment you step foot inside our 15,000 square-foot warehouse you will recognize and appreciate that <br>difference as you are treated to the most pleasant car-buying experience you can imagine.</p>
            <div class="hang" data-aos="fade-up">
                <ul>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/9EE790-1.png"/>
                    </li>
                    <li>
                        <img src="/img/A4E497.png"/>
                    </li>
                    <li>
                        <img src="/img/Avatr.png"/>
                    </li>
                    <li>
                        <img src="/img/Geely-Geometry.png"/>
                    </li>
                    <li>
                        <img src="/img/nhat.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                    <li>
                        <img src="/img/97E78C-1.png"/>
                    </li>
                </ul>
            </div>
        </div>
        <section class="ba">
            <div data-aos="fade-up-right" class="trai">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/EC9OPdIHDsU?si=zkmym_w5rvfPAa5D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                <iframe  src="https://www.youtube.com/embed/ln5h44icVZE?si=M41QVmp6jbpvc379" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div  data-aos="fade-up-left" class="trai">
                <div  class="phai">
                <p id="tieude">Who we Are</p>
                <p><h1><b>Automotive Sales<br> Company from China</b></h1></p>
                <p>Henan Borderless International Trade Co., Ltd. established in 2015. Our <br> committed to providing high-quality and professional services to our customers,<br> and creating a comprehensive automotive sales ecosystem.</p>
                <button class="nutxanh" ><b>Learn More</b></button>
            </div>
        </section>
        <section class="bon">
            <div data-aos="flip-left" class="trai">
                <img src="/img/home-about1.jpg"/>
                <p><h2><b>Logistics</b></h2></p>
                <p class="ghichu" >Our car sales company places great emphasis on logistics and delivery services, providing customers with high-quality delivery experiences. Our logistics system has a sophisticated supply chain management and real-time monitoring mechanism in place to ensure the rapid and accurate completion of delivery tasks.</p>
                <p> <b ><a id="link" href="">READ MORE</a><span id="link" class="muiten">></span></b></p>
            </div>
            <div data-aos="flip-left" class="phai">
                <p><h2><b>Logistics</b></h2></p>
                <p class="ghichu">Our car sales company places great emphasis on logistics and delivery services, providing customers with high-quality delivery experiences. Our logistics system has a sophisticated supply chain management and real-time monitoring mechanism in place to ensure the rapid and accurate completion of delivery tasks.</p>
                <p><b id="link"><a id="link" href="">READ MORE</a><span id="link"  class="muiten">></span></b></p>
                <img src="/img/home-about2.jpg"/>
            

            </div>
            
        </section>
        <section class="nam">
            <img src="/img/img-car.png" />
            <div class="giua" >
                <div class="cac goc" >
                    <p id="tieude">Our Services</p>
                    <p ><h1 ><b id="tieude1">We Provide Best Services</b></h1></p>
                    <div class="hr"></div>
                    <p>we provide customers with more professional, reliable, and comfortable services during the car-buying process</p>


                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-person-rolodex"></i>
                    <p><h3><b>Customized Services</b></h3></p>
                    <p>We prioritize our customers' needs and provide personalized customized services.</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>

                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-people-fill"></i>
                    <p><h3><b>Consultation Service</b></h3></p>
                    <p>Our sales team is composed of professionals with many years of industry experience an…</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>
                <div data-aos="zoom-in-down" class="Namcon">
                    <i class="bi bi-car-front"></i>
                    <p><h3><b>After-sales Service</b></h3></p>
                    <p>After customers purchase a vehicle from us, we actively follow up with them …</p>
                    <p> <b ><a id="link" href="">READ MORE ></a></b></p>
                </div>



            </div>
        </section>
    </main>
    



    <footer>
        <div class="tren">
            <div>
                <i class="bi bi-gem"></i>
                <p>Fast Delivery</p>
            </div>
            <div>
                <i class="bi bi-bookmarks"></i>
                <p>Diverse Product Range</p>
            </div>
            <div>
                <i class="bi bi-coin"></i>
                <p>Competitive Pricing</p>
            </div>
            <div>
                <i class="bi bi-star"></i>
                <p>Quality Assurance</p>
            </div>
            <div>
                <i class="bi bi-award"></i>
                <p>Integrity-based Operation</p>
            </div>
        </div>
        <div class="duoi">
            <div class="duoi_tren">
                <div class="trai" >
                    <img src="/img/logo-w (1).png"/>
                    <p>Our committed to providing high-quality and professional services to our customers, and creating a comprehensive automotive sales ecosystem.</p>
                    <div class="icon_duoi" >
                       
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-whatsapp"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                </div>
                <div class="giua" >
                    <div>
                        <p id="giua_tieude">All Vehicles</p>
                        <p id="giua_tieude">Used Car</p>
                        <p id="giua_tieude">Trucks</p>
                    </div>
                    <div>
                        <p id="giua_tieude">About Us</p>
                        <p>Brand Story</p>
                        <p>Logistics</p>
                        <p>Export Qualification</p>
                        
                    </div>
                    <div>
                        <p id="giua_tieude">Links</p>
                        <p>Brand Story</p>
                        <p>Logistics</p>
                        <p>Export Qualification</p>
                        
                    </div>
                    <div>
                        <p id="giua_tieude">Service Policy</p>
                        <p>Privacy Policy</p>
                        <p>Terms of Service</p>
                        <p>Return & Exchange</p>
                        <p>Shipping & Tracking</p>
                        
                    </div>
                </div>
                <div class="phai" >
                    <div>
                        <div class="phai_icon" >
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="trai_icon" >
                            <p>Phone / Whatsapp / Wechat</p>
                            <p id="giua_tieude">+8619037179250</p>
                        </div>
                    </div>
                    <div>
                        <div class="phai_icon" >
                            <i class="bi bi-envelope-at"></i>
                        </div>
                        <div class="trai_icon" >
                            <p>Send Email</p>
                            <p id="giua_tieude">info@borderlesscar.com</p>
                        </div>
                    </div>
                    <div>
                        <div class="phai_icon" >
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="trai_icon" >
                            <p>Tel</p>
                            <p id="giua_tieude">+86-19037179250</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="duoi"></div>
        </div>



   </footer>

    <script>
        AOS.init();
    </script>
    <script src="/js/index.js"></script>
</body>
</html>