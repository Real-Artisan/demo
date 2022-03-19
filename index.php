<?php
 session_start();
 include("database.php");
 include("engine.php");
 $user_data = register($db);

 $_SESSION;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link style="border-radius: 50%;" rel="icon" type="image/x-icon" href="favicon.ico">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Scrapbook</title>
</head>
<body>
    <div class="navigation">
        <div class="toggler">
            <svg onclick="toggleNavBar()" width="44" height="44" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
        </div>
        <div class="logo">
            <div class="nav- name">scrapbook</div>
            <div class="logo-icon">
                <img class="logo-img" src="/favicon.ico" alt="">
            </div>
        </div>
        <div class="right-hand d-flex">
            <div class="account">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/></svg>
            </div>
            <div class="cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-10.563-5l-2.937-7h16.812l-1.977 7h-11.898zm11.233-5h-11.162l1.259 3h9.056l.847-3zm5.635-5l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>
            </div>
        </div>
    </div>
    
    <div class="search textbox d-flex ">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>
            <input type="search"
            placeholder="search products, brands and categories" name="search" id="">
        
    </div>
    <div class="shipment">Free Delivery in Lagos & Abuja</div>
    <div class="ad">
        <img src="/assests/img/MFL_TechWeek_Cat_GIF.gif" alt="" class="add-image">
        <img src="/assests/img/572x250.png" alt="">
        <img src="/assests/img/laptop-stand_572x250.jpg" alt="">
        <img src="/assests/img/TW_FlashSales_MFL.jpg" alt="">
    </div>
    <div class="tiles">
        <div class="first-line">
            <div class="tile carb">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M5 11v1h8v-7h-10v-1c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-1c-.552 0-1-.448-1-1v-6h-2v-2h7v2h-3zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-3-2.8h-10v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-16-3h8v2h-8v-2z"/></svg>
                <span>Free <br> delivery</span>
            </div>
            <div class="tile red">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 0l-3 9h9l-1.866 2h-14.4l10.266-11zm2.267 13h-14.4l-1.867 2h9l-3 9 10.267-11z"/></svg>
                <span>Flash <br> Sale</span>
            </div>
            <div class="tile navy">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2 22v-13h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v3h2v-5h-5v-3c0-2.209-1.791-4-4-4s-4 1.791-4 4v3h-5v17h16.69l-1.999-2h-12.691zm4-18c0-1.654 1.346-3 3-3s3 1.346 3 3v3h-6v-3zm13.899 15.899c.168.145.072.381-.132.618-.156.183-.305.283-.434.283l-.156-.06c-.157-.136-.089-.383.123-.625.144-.166.302-.276.44-.276l.159.06zm-1.421-5.899h-4.478v4.48l5.518 5.52 4.482-4.48-5.522-5.52zm-.447 3.364c.21-.245.479-.379.745-.379.188 0 .374.067.538.208.403.346.376.835.033 1.234-.234.272-.502.39-.752.39-.198 0-.385-.074-.534-.202-.354-.307-.407-.813-.03-1.251zm-2.031-.614c-.413 0-.75-.335-.75-.75s.338-.75.75-.75.75.335.75.75-.337.75-.75.75zm1.25 2.866l3.417-1.262.295.252-3.42 1.259-.292-.249zm2.944 1.225c-.233.272-.5.39-.75.39-.197 0-.384-.074-.533-.202-.353-.302-.405-.809-.032-1.25.21-.245.479-.379.745-.379.188 0 .374.066.539.208.402.345.377.834.031 1.233zm-1.864-2.516c-.158-.136-.09-.383.119-.627.144-.166.304-.275.442-.275l.157.059c.168.145.075.384-.128.621-.156.182-.307.283-.436.283l-.154-.061z"/></svg>
                <span>Official stores
                </span>
            </div>
            <div class="tile jumia">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.834 9.686l-4.166.575 3.032 2.914-.74 4.139 3.708-1.982 3.708 1.983-.74-4.139 3.032-2.915-4.166-.575-1.834-3.784-1.834 3.784z"/></svg>
                <span>Scrapbook services</span>
            </div>
        </div>
        <div class="second-line">
            <div class="tile">
                <img src="/assests/img/techweek_260x144.png" alt="">
            </div>
            <div class="tile">
                <img src="/assests/img/allcategories_260x144.png" alt="">
            </div>
            <div class="tile">
                <img src="/assests/img/phones_260x144.png" alt="">
            </div>
            <div class="tile">
                <img src="/assests/img/techweek_260x144.png" alt="">
            </div>
        </div>
    </div>
    <div class="flash-sale">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 0l-3 9h9l-1.866 2h-14.4l10.266-11zm2.267 13h-14.4l-1.867 2h9l-3 9 10.267-11z"/></svg>
        <div class="flash-text">
            <div class="up">
                Flash Sale | Free Delivery
            </div>
            <div class="down">
                TIME LEFT: timer
            </div>
        </div>
        <div class="right-end">See All</div>
    </div>
    <div class="fast-stuff">
        <div class="sample-item first-sample">
            <img src="/assests/img/1.jpg" alt="" class="item-img">
            <div class="item-name">Fun Snax Corn Flakes 500G</div>
            <div class="item-price">₦ 695</div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/2.jpg" alt="" class="item-img">
            <div class="item-name">VEJARO T01 Men's Fashion Short Sleeve</div>
            <div class="item-price">₦ 2,127 - ₦2,182</div>
            <div class="old-price">
                <strike>₦6,500</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/3.jpg" alt="" class="item-img">
            <div class="item-name">Loyd Pyramid Tea</div>
            <div class="item-price">₦ 651</div>
            <div class="old-price">
                <strike>₦900</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/4.jpg" alt="" class="item-img">
            <div class="item-name">GATWIGA Sport Belt Pouch</div>
            <div class="item-price">₦ 1,519</div>
            <div class="old-price">
                <strike>₦8,999</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/5.jpg" alt="" class="item-img">
            <div class="item-name">Luxury Rose Wristwatch</div>
            <div class="item-price">₦ 4,387</div>
            <div class="old-price">
                <strike>₦15,500</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/6.jpg" alt="" class="item-img">
            <div class="item-name">Morning Fresh Zesty Lemon</div>
            <div class="item-price">₦ 423</div>
            <div class="old-price">
                <strike>₦ 500</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/7.jpg" alt="" class="item-img">
            <div class="item-name">VEJARO T01 Men's Fashion Short Sleeve</div>
            <div class="item-price">₦ 2,127 - ₦2,182</div>
            <div class="old-price">
                <strike>₦6,500</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/8.jpg" alt="" class="item-img">
            <div class="item-name">Air wick DrummerGel Fresh Air</div>
            <div class="item-price">₦ 1,400</div>
            <div class="old-price">
                <strike>₦1,701</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/9.jpg" alt="" class="item-img">
            <div class="item-name">VEJARO P08 Ladies Seamless Soft Underwear </div>
            <div class="item-price">₦ 3,120 - ₦ 3,200</div>
            <div class="old-price">
                <strike>₦10,00</strike>
            </div>
        </div>
        <div class="sample-item">
            <img src="/assests/img/10.jpg" alt="" class="item-img">
            <div class="item-name">Boulos Rose Belle 2*1 Tissue</div>
            <div class="item-price">₦ 300</div>
            <div class="old-price">
                <strike>₦399</strike>
            </div>
        </div>
    </div>
    <div class="dont-miss">
        <div class="miss-head">Don't Miss OUt On These!!!</div>
        <div class="set-a d-flex">
            <img src="/assests/img/MT_TechWeek_Cat_GIF.gif" alt="">
            <img src="/assests/img/TW_FlashSales_MFL.jpg" alt="">
        </div>
        <div class="set-b d-flex">
            <img src="/assests/img/omo-blue3_375x300.jpg" alt="">
            <img src="/assests/img/knorr_375x300.jpg" alt="">
        </div>
    </div>
    <div class="top-free" style="display: grid;">
        <div class="ribbon">Unilever Official Store</div>
        <div class="set-a d-flex">
            <img src="/assests/img/closeup.jpg" alt="">
            <img src="/assests/img/knoorchris.jpg" alt="">
        </div>
        <div class="set-b d-flex">
            <img src="/assests/img/sunligh.jpg" alt="">
            <img src="/assests/img/upplus.jpg" alt="">
        </div>

    </div>
    <div class="coollections">
        <div class="coll-head">Shop From Our Collections Now!</div>
        <div class="tiles-two ">
            <div class="first-line ">
                <div class="obj-cont">
                    <img src="/assests/img/accessories-warehouse_260x144v2.png" alt="">
                    <div class="obj-title">Free Delivery</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/perfect-for-dinner_260x144.png" alt="">
                    <div class="obj-title">The Budget Store</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/appliances-you-need_260x144.png" alt="">
                    <div class="obj-title">Home Makeover</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/iphones_260x144.png" alt="">
                    <div class="obj-title">Let's Get Talking</div>
                </div>

            </div>
        </div>
        <div class="tiles-two ">
            <div class="first-line ">
                <div class="obj-cont">
                    <img src="/assests/img/style-mode_260x144.png" alt="">
                    <div class="obj-title">Super Deals</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/groceries_260x144.png" alt="">
                    <div class="obj-title">Grocery Superstore</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/free-delivery_260x144v2.png" alt="">
                    <div class="obj-title">Warehouse</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/top-brands_260x144.png" alt="">
                    <div class="obj-title">Top Brands</div>
                </div>

            </div>
        </div>
        <div class="more-collections coll-head">More collections</div>
        <div class="tiles-two ">
            <div class="first-line ">
                <div class="obj-cont">
                    <img src="/assests/img/the-apples_260x144.png" alt="">
                    <div class="obj-title">iPhones, iOS Devices</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/electronics_260x144.png" alt="">
                    <div class="obj-title">Electronic Deals</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/sneakers_260x144.png" alt="">
                    <div class="obj-title">Sneakers</div>
                </div>
                <div class="obj-cont">
                    <img src="/assests/img/home-appliances_260x144.png" alt="">
                    <div class="obj-title">Half Price</div>
                </div>

            </div>
        </div>


    </div>
    <div class="tech-week">
        <div class="coll-head light-ribbon">
            Save The Date: Tech Week Starts March 21
        </div>
        <img src="/assests/img/NG_TW_JUMIA_GAMES.gif" alt="">
        <img src="/assests/img/1152x252.jpg" alt="">

    </div>
    <div class="brand-days coll-head light-ribbon">Tech Week Brand Days</div>
    <div class="tiles-two ">
        <div class="first-line ">
            <div class="obj-cont">
                <img src="/assests/img/oraimo_260x144.png" alt="">
                <div class="obj-title">March 22</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/xiaomi_260x144v2.png" alt="">
                <div class="obj-title">March 23</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/umidigi_260x144v2.png" alt="">
                <div class="obj-title">March 24</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/qcy_260x144.png" alt="">
                <div class="obj-title">March 25</div>
            </div>

        </div>
    </div>
    <div class="tiles-two ">
        <div class="first-line ">
            <div class="obj-cont">
                <img src="/assests/img/edifier_260x144.png" alt="">
                <div class="obj-title">March 29</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/fitbit_260x144.png" alt="">
                <div class="obj-title">March 30</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/samsung_260x144.png" alt="">
                <div class="obj-title">March 31</div>
            </div>
            <div class="obj-cont">
                <img src="/assests/img/tcl_260x144.png" alt="">
                <div class="obj-title">All Days</div>
            </div>

        </div>
    </div>
<footer>
    <div class="desc-foot" id="desc-foot">
        <h1>Scrapbook: Online Shopping in Nigeria - No. 1 Shopping Destination</h1>
        <p>Scrapbook is your number one online shopping site in Nigeria. We are an online store where you can purchase all your electronics, as well as books, home appliances, kiddies items, fashion items for men, women, and children; cool gadgets, computers, groceries, automobile parts, and more on the go. What more? You can have them delivered directly to you. Shop online with great ease as you pay with ScrapbookPay which guarantees you the safest online shopping payment method, allowing you to make stress free payments. Whatever it is you wish to buy, Scrapbook offers you all and lots more at prices which you can trust. Scrapbook has payment options for everyone irrespective of taste, class, and preferences. Here, you also have the option to make your payment on delivery for extra convenience. Shopping online in Nigeria is easy and convenient with Scrapbook. We provide you with a wide range of products you can trust. Take part in the deals of the day and discover the best prices on a wide range of products.</p>
        <p>
            Official Stores  is here! You can now shop several genuine & 100% Authentic products from Top Brands: Samsung, Apple, Microsoft , Michelin Tyres , Scanfrost HP , P&G Intel , Xiaomi and more shipped to you directly from official distributors with full warranty and returns available up to 15 days.
        </p>
        <h2>
            Buy Mobile Phones, Fashion, Electronics, Appliances & more on Scrapbook
        </h2>
        <p>
            Be in the loop this year with new products and offers from Scrapbook. Brand your home with various electronics and home and office appliances from Binatone, Panasonic, Samsung, Toshiba, Sony, and LG. Get top phone brands all the latest gadgets and devices for school projects from brands like HP, IMose, Lenovo, Samsung, and Apple with no hassles as you enjoy fast delivery service even to your institution. Scrapbook Nigeria also offers the latest innovative mobile phones such as Tecno Spark 4, Samsung A51 , Samsung S20, Samsung S20 Plus, Samsung S20 Ultra Gionee M11, Tecno Camon 12, Tecno Camon 12 Pro , Samsung A30, Infinix Hot 8, Nokia 7.2 , Xiaomi Note 10 Pro, iPhone 11, iPhone 11 Pro Max, Huawei Y9s, Samsung S9, as well as the latest Samsung S10 series , Samsung Note 10 & 10+, Samsung Note 10 Lite, Samsung A71, Samsung S20 Phones, Samsung S20, Tecno Camon 15, Samsung S20 Plus, Samsung S20 Ultra  and more. Also take advantage of computing products available to own laptops like the Dell Inspiron, printers and other storage devices such as hard drives at affordable prices. Get Professional Services online like insurance services, medical services, IT Training, educational services and so much more.
        </p>
        <p>
            Scrapbook Nigeria offers deals and discounts and never ceases to form campaigns all year around, all for the satisfaction and joy of our customers. Our newsletter subscribers and Facebook fans get to know all of our offers before anyone else such as Mobile & Tech Week, Ramadan, and Scrapbook Anniversary.
        </p>
    </div>
    <div class="show-more" onclick="moreOrLess()" id="show-more">Show More</div>
    <div class="show-less" onclick="moreOrLess()" id="show-less">Show Less</div>
    <div class="bg-dark last-foot">
        <div class="back-up">
           <div class="scroller">
            Back To Top
           </div>
           <div class="foot-links">
               <div class="one-line d-flex">
                <div>HELP CENTER</div>
                <div>CONTACT US</div>
                <div>TERMS & CONDITIONS</div>
                <div>BECOME A SELLER</div>
               </div>
               <div class="one-line d-flex">
                <div>REPORT A PRODUCT</div>
                <div>SHIP YOUR PACKAGE ANYWHERE IN NIGERIA</div>
                <div>BLACK FRIDAY</div>
               </div>


           </div>
        </div>

    </div>
</footer>


    <script src="/script.js"></script>
</body>
</html>