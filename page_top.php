<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta name="google-site-verification" content="CptJiPtD09F8WxVWANPiS0X_3_DbThCJWycJUnglZ58"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="target-densitydpi=device-dpi,initial-scale=1.0,width=device-width"/>
<!--    <meta name="viewport" content="target-densitydpi=device-dpi">-->
    <title>Welcome To National Bank Limited</title>
    <link rel="stylesheet" href="res_menu.css" type="text/css"/>
    <link rel="stylesheet" href="style-new-900px_2_new.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="responsive.css" type="text/css" media="screen"/>
    <!--[if IE 6]>
    <link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen"/><![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen"/><![endif]-->
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="responsive.js"></script>
    <link rel="stylesheet" href="table_responsive.css" type="text/css"/>

    <!-- Nivo Slider Start 1st part -->

    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="scripts_nivo/nivo-slider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="scripts_nivo/style_nevo.css" type="text/css" media="screen"/>

    <!-- Nivo Slider End 1st part -->


    <style type="text/css">
        <!--
        a:link {
            color: #006600;
            text-decoration: none;
        }

        a:visited {
            color: #006600;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #006600;
        }

        a:active {
            text-decoration: none;
            color: #006600;
        }

        .style7 {
            color: #000000
        }

        table.gridtable {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }

        table.gridtable th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
        }

        table.gridtable td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
        }

        -->
    </style>


    <!-- Start of Image scroll 1st part-->

    <link rel='stylesheet' id='camera-css' href='css/camera.css' type='text/css' media='all'>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        a {
            color: #09f;
        }

        a:hover {
            text-decoration: none;
        }

        #back_to_camera {
            clear: both;
            display: block;
            height: 80px;
            line-height: 10px;
            padding: 10px;
        }

        .fluid_container {
            margin: 0 auto;
            max-width: 700px;
            width: 98%;
        }
    </style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->

    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/camera.js'></script>

    <script>
        jQuery(function () {

            jQuery('#camera_wrap_3').camera({
                height: '380px',
                pagination: false,
                thumbnails: false,
                imagePath: 'images/'
            });

        });
    </script>

    <!-- End of Image Scroll 1st part-->


    <style type="text/css">
        <!--
        a:link {
            color: #000000;
            text-decoration: none;
        }

        a:visited {
            color: #333333;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }

        .style6 {
            color: #C5530D;
            font-weight: bold;
        }

        .style7 {
            color: #000000
        }

        -->
    </style>


    <!-- Start of news scroll-->


    <style type="text/css">

        /*Example CSS for the two demo scrollers*/

        #pscroller1 {
            width: 100%;
            height: 150px;
            border: 0px solid black;
            padding: 0px;
            color: #060;

            text-decoration: none;
        }

        #pscroller2 {
            width: 100% !important;
            height: 70px;
            border: 0px solid black;
            padding: 0px;
        }

        #pscroller3 {
            width: 100% !important;
            height: 70px;
            border: 0px solid black;
            padding: 0px;
        }

        #pscroller2 a {
            text-decoration: none;
        }

        .someclass {
        / / class to apply to your scroller(s) if desired
        }

        .style10 {
            font-size: 12px
        }
    </style>

    <script type="text/javascript">

        /*Example message arrays for the two demo scrollers*/



        <?php
        include('admin_reqonce/db_con.php');
        $data_testimonial="select * from news_and_events order by news_id desc limit 3";
        $qry_testimonial=mysql_query($data_testimonial);

        $int=0;
        ?>

        var pausecontent = new Array()

        <?php
        while($show=mysql_fetch_array($qry_testimonial)){
        ?>

        pausecontent[<?php echo $int;?>] = '<strong><?php echo $show['news_title'];?></strong><br/><br/><p align="justify"> <?php echo $show['news_detail'];?><br/><br/> <div align="right"><a href="<?php echo $show['url'];?>" target="_blank"><< Read More >></a></div></p>'

        <?php
        $int++;
        }
        ?>


        var pausecontent2 = new Array()
        pausecontent2[0] = '<img src="images/products/moneygram.png" />'
        pausecontent2[1] = '<img src="images/products/western union.png" />'
        pausecontent2[2] = '<img src="images/products/master.gif" />'
        pausecontent2[3] = '<img src="images/products/visa.gif" />'

        var pausecontent3 = new Array()
        pausecontent3[0] = '<img src="images/products/merchant_infolady.png" />'
        pausecontent3[1] = '<img src="images/products/quickpay.jpg" />'
        pausecontent3[2] = '<img src="images/products/pcard.jpg" />'
        pausecontent3[3] = '<img src="images/products/swift.gif" />'

    </script>

    <script type="text/javascript">

        /***********************************************
         * Pausing up-down scroller- © Dynamic Drive (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit http://www.dynamicdrive.com/ for this script and 100s more.
         ***********************************************/

        function pausescroller(content, divId, divClass, delay) {
            this.content = content //message array content
            this.tickerid = divId //ID of ticker div to display information
            this.delay = delay //Delay between msg change, in miliseconds.
            this.mouseoverBol = 0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
            this.hiddendivpointer = 1 //index of message array for hidden div
            document.write('<div id="' + divId + '" class="' + divClass + '" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="' + divId + '1">' + content[0] + '</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="' + divId + '2">' + content[1] + '</div></div>')
            var scrollerinstance = this
            if (window.addEventListener) //run onload in DOM2 browsers
                window.addEventListener("load", function () {
                    scrollerinstance.initialize()
                }, false)
            else if (window.attachEvent) //run onload in IE5.5+
                window.attachEvent("onload", function () {
                    scrollerinstance.initialize()
                })
            else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
                setTimeout(function () {
                    scrollerinstance.initialize()
                }, 500)
        }

        // -------------------------------------------------------------------
        // initialize()- Initialize scroller method.
        // -Get div objects, set initial positions, start up down animation
        // -------------------------------------------------------------------

        pausescroller.prototype.initialize = function () {
            this.tickerdiv = document.getElementById(this.tickerid)
            this.visiblediv = document.getElementById(this.tickerid + "1")
            this.hiddendiv = document.getElementById(this.tickerid + "2")
            this.visibledivtop = parseInt(pausescroller.getCSSpadding(this.tickerdiv))
//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)
            //this.visiblediv.style.width = this.hiddendiv.style.width = this.tickerdiv.offsetWidth - (this.visibledivtop * 2) + "px"
            this.getinline(this.visiblediv, this.hiddendiv)
            this.hiddendiv.style.visibility = "visible"
            var scrollerinstance = this
            document.getElementById(this.tickerid).onmouseover = function () {
                scrollerinstance.mouseoverBol = 1
            }
            document.getElementById(this.tickerid).onmouseout = function () {
                scrollerinstance.mouseoverBol = 0
            }
            if (window.attachEvent) //Clean up loose references in IE
                window.attachEvent("onunload", function () {
                    scrollerinstance.tickerdiv.onmouseover = scrollerinstance.tickerdiv.onmouseout = null
                })
            setTimeout(function () {
                scrollerinstance.animateup()
            }, this.delay)
        }


        // -------------------------------------------------------------------
        // animateup()- Move the two inner divs of the scroller up and in sync
        // -------------------------------------------------------------------

        pausescroller.prototype.animateup = function () {
            var scrollerinstance = this
            if (parseInt(this.hiddendiv.style.top) > (this.visibledivtop + 5)) {
                this.visiblediv.style.top = parseInt(this.visiblediv.style.top) - 5 + "px"
                this.hiddendiv.style.top = parseInt(this.hiddendiv.style.top) - 5 + "px"
                setTimeout(function () {
                    scrollerinstance.animateup()
                }, 50)
            }
            else {
                this.getinline(this.hiddendiv, this.visiblediv)
                this.swapdivs()
                setTimeout(function () {
                    scrollerinstance.setmessage()
                }, this.delay)
            }
        }

        // -------------------------------------------------------------------
        // swapdivs()- Swap between which is the visible and which is the hidden div
        // -------------------------------------------------------------------

        pausescroller.prototype.swapdivs = function () {
            var tempcontainer = this.visiblediv
            this.visiblediv = this.hiddendiv
            this.hiddendiv = tempcontainer
        }

        pausescroller.prototype.getinline = function (div1, div2) {
            div1.style.top = this.visibledivtop + "px"
            div2.style.top = Math.max(div1.parentNode.offsetHeight, div1.offsetHeight) + "px"
        }

        // -------------------------------------------------------------------
        // setmessage()- Populate the hidden div with the next message before it's visible
        // -------------------------------------------------------------------

        pausescroller.prototype.setmessage = function () {
            var scrollerinstance = this
            if (this.mouseoverBol == 1) //if mouse is currently over scoller, do nothing (pause it)
                setTimeout(function () {
                    scrollerinstance.setmessage()
                }, 100)
            else {
                var i = this.hiddendivpointer
                var ceiling = this.content.length
                this.hiddendivpointer = (i + 1 > ceiling - 1) ? 0 : i + 1
                this.hiddendiv.innerHTML = this.content[this.hiddendivpointer]
                this.animateup()
            }
        }

        pausescroller.getCSSpadding = function (tickerobj) { //get CSS padding value, if any
            if (tickerobj.currentStyle)
                return tickerobj.currentStyle["paddingTop"]
            else if (window.getComputedStyle) //if DOM2
                return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
            else
                return 0
        }

    </script>

    <!-- End of news scroll-->


    <script type="text/JavaScript">
        <!--
        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }

        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0, x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }
        //-->
    </script>

    <link href="css/cbdb-search-form.css" type="text/css" rel="stylesheet" media="screen"/>


    <style type="text/css">
        <!--
        .style11 {
            font-size: 14px;
            font-weight: bold;
            color: #FFFFFF;
        }

        .style12 {
            color: #006600;
            font-weight: normal;
        }

        .style14 {
            color: #006600
        }

        -->
    </style>
</head>


<body>


<div id="art-main">
    <div class="art-sheet" style="border:#FF0000 0px solid;">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div style="width: 100%;" class="ind"></div>
            <div class="art-header">
                <div class="art-header-logo">
                    <img src="images/header_white.png" alt="nbl logo" class="nbl-logo"/>
                </div>
                <div class="art-header-media">
                    <ul class="art-header-media-item">
                        <li>
                            <a href="http://mail.nblbd.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('webmail','','img/email2.png',1)">
                                <img src="img/email1.png" name="webmail" width="35" height="35" border="0" id="webmail" title="Web Mail"/>
                            </a>
                        </li>
                        <li>
                            <a href="career2015.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('career','','img/career3.png',1)">
                                <img src="img/career1.png" name="career" width="32" height="33" border="0" id="career" title="Career"/>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','img/phone2.png',1)">
                                <img src="img/phone1.png" name="contact" width="32" height="32" border="0" id="contact" title="Contact Us"/>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <form id="search-form" method="get" action="http://www.google.com/search" target="_blank">
                            <input type="text"/>
                            <input type="submit" value="GO"/>
                            <div style="display:none">
                                <input type="checkbox" name="sitesearch" value="nblbd.com" checked/>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="art-logo">
                    <h1 id="name-text" class="art-logo-name"><a href="http://www.nblbd.com"></a></h1>
                    <h2 id="slogan-text" class="art-logo-text"></h2>
                </div>
                <div class="media-icon-hidden">
                    + Contact
                </div>
            </div>

            <div class="art-nav">
                <ul class="art-menu">
                    <li><a href="index.php"><span class="l"></span><span class="r"></span><span
                                class="t">Home</span></a></li>
                    <li><a href="aboutus.php"><span class="l"></span><span class="r"></span><span
                                class="t">About Us</span></a>
                        <ul>

                            <li><a href="history_heritage.php">History & Heritage</a></li>
                            <li><a href="mission_vision.php">Mission & Vision</a></li>
                            <li><a href="sponsor_directors.php">Sponsor Directors</a></li>
                            <li><a href="board_directors_v1.php">Board of Directors</a></li>
                            <li><a href="#">Chairman's Message</a></li>
                            <li><a href="executive_committe_v1.php">Executive Committee</a></li>
                            <li><a href="audit_committe_v1.php">Audit Committee</a></li>
                            <li><a href="risk_committee.php">Risk Management Committee</a></li>
                            <li><a href="management_committe_v1.php">Management Committee</a></li>
                            <li><a href="asset_liability_committe_v1.php">Asset Liability Committee</a></li>
                            <li><a href="photo_gallary.php">Photo Gallery</a></li>

                        </ul>

                    </li>

                    <li>
                        <a href="#" class='colleps-slide-menu'><span class="l"></span><span class="r"></span><span class="t">Products & Services</span></a>
                        <ul>
                            <li><a href="#" class='colleps-slide-menu'>Deposit Products</a>
                                <ul>
                                    <li><a href="ps_saving_deposit.php">Savings Deposit</a></li>
                                    <li><a href="ps_current_deposit.php">Current Deposit</a></li>
                                    <li><a href="#" class='colleps-slide-menu'>Term Deposit</a>
                                        <ul>
                                            <li><a href="ps_snd.php">Special Notice Deposit</a></li>
                                            <li><a href="ps_fdr.php">Fixed Deposit</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class='colleps-slide-menu'>Foreign Currency Deposit</a>
                                        <ul>
                                            <li><a href="ps_fc_rfcd.php">RFC Deposit</a></li>
                                            <li><a href="ps_fc_nfcd.php">NFC Deposit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ps_mss.php">Monthly Savings Scheme</a></li>
                                    <li><a href="ps_mis.php">Monthly Income Scheme</a></li>
                                    <li><a href="ps_dbs.php">Double Benefit Scheme</a></li>
                                    <li><a href="ps_millionair.php">Millionaire Income Scheme</a></li>
                                </ul>
                            </li>

                            <li><a href="#" class='colleps-slide-menu'>Credit Products</a>
                                <ul>
                                    <li><a href="ps_overdraft.php">Overdraft</a></li>
                                    <li><a href="ps_lease_financing.php">Lease Financing</a></li>
                                    <li><a href="ps_house_building.php">House Building</a></li>
                                    <li><a href="ps_sme.php">Small Medium Enterprise</a></li>
                                    <li><a href="ps_ccs.php">Consumer Credit Scheme</a></li>
                                    <li><a href="ps_trade_finance.php">Trade Finance</a></li>

                                </ul>
                            </li>

                            <li><a href="#" class='colleps-slide-menu'>Cards</a>
                                <ul>
                                    <li><a href="credit_card.php">Credit Card</a></li>
                                    <li><a href="power_card.php">Power Card</a></li>
                                </ul>
                            </li>

                            <li><a href="shedule_of_charges.php">Schedule of Charges</a></li>

                            <li><a href="downloads.php">Download Forms</a></li>


                        </ul>
                    </li>


                    <li><a href="fs_financial_performance.php"><span class="l"></span><span class="r"></span><span
                                class="t">Financial Status</span></a>

                        <ul>
                            <li><a href="fs_annual_report.php">Annual Report</a></li>
                            <li><a href="fs_financial_performance.php">Financial Performance</a></li>
                            <li><a href="#" class='colleps-slide-menu'>Interest Rates</a>
                                <ul>
                                    <li><a href="deposit_int_rate.php">Deposit Rate</a></li>
                                    <li><a href="loan_int_rate.php">Lending Rate</a></li>
                                </ul>
                            </li>
                            <li><a href="fs_transaction_charges.php">Transaction Charges</a></li>
                            <li><a href="fs_credit_report.php">Credit Report</a></li>
                        </ul>

                    </li>


                    <li>
                        <a href="#" class='colleps-slide-menu'><span class="l"></span><span class="r"></span><span
                                class="t">Service Location</span></a>
                        <ul>
                            <li><a href="#" class='colleps-slide-menu'>Branch Location</a>
                                <ul>
                                    <li><a href="branch_location.php?division=Dhaka">Dhaka</a></li>
                                    <li><a href="branch_location.php?division=Chittagong">Chittagong</a></li>
                                    <li><a href="branch_location.php?division=Rajshahi">Rajshahi</a></li>
                                    <li><a href="branch_location.php?division=Rangpur">Rangpur</a></li>
                                    <li><a href="branch_location.php?division=Sylhet">Sylhet</a></li>
                                    <li><a href="branch_location.php?division=Khulna">Khulna</a></li>
                                    <li><a href="branch_location.php?division=Barisal">Barisal</a></li>
                                    <li><a href="branch_location_all.php">All Branch</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="sl_sme_branch.php">SME / Agri Branch</a></li>-->
                            <li><a href="sl_ad_branch.php">Authorize Dealer Branches</a></li>
                            <li><a href="sl_atm.php">ATM Location</a></li>
                            <li><a href="sl_e-gp.php">e-GP Service Branch</a></li>

                        </ul>
                    </li>

                    <li><a href="oo_contact.php"><span class="l"></span><span class="r"></span><span class="t">Overseas operation</span></a>
                        <ul>
                            <li><a href="oo_contact.php">Contact Address</a></li>
                            <li><a href="oo_correspondent_banking.php">Correspondent Banking</a></li>
                            <li><a href="#" class='colleps-slide-menu'>Foreign Remittance</a>
                                <ul>
                                    <li><a href="oo_fr_subsidiary_companies.php">Subsidiary Companies</a></li>
                                    <li><a href="oo_fr_western_union.php">Western Union</a></li>
                                    <li><a href="oo_fr_moneygram.php">Money Gram</a></li>
                                    <li><a href="oo_fr_others.php">Other Ex. Comp. & Banks</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li><a href="csr_employment.php"><span class="l"></span><span class="r"></span><span
                                class="t">CSR</span></a>
                        <ul>
                            <li><a href="csr_employment.php">Employment</a></li>
                            <li><a href="csr_education.php">Education</a></li>
                            <li><a href="csr_sports.php">Sports & Cul. Activities</a></li>
                            <li><a href="csr_disaster_relief.php">Disaster Relief</a></li>
                            <li><a href="csr_other.php">Other</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

<!-- Responsive Menu -->

            <div class="res-nav">
                <div class="main-nav-hidden">
                    <img src="images/collep.png" alt="menu icon"/>
                </div>
                <ul class="res-menu">
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        <a  href="javascript:void(0);" class='colleps-slide-menu'><span class="l"> About Us </a>
                        <ul>
                            <li><a href="aboutus.php"> About History </a></li>
                            <li><a href="history_heritage.php">History & Heritage</a></li>
                            <li><a href="mission_vision.php">Mission & Vision</a></li>
                            <li><a href="sponsor_directors.php">Sponsor Directors</a></li>
                            <li><a href="board_directors_v1.php">Board of Directors</a></li>
                            <li><a href="#">Chairman's Message</a></li>
                            <li><a href="executive_committe_v1.php">Executive Committee</a></li>
                            <li><a href="audit_committe_v1.php">Audit Committee</a></li>
                            <li><a href="risk_committee.php">Risk Management Committee</a></li>
                            <li><a href="management_committe_v1.php">Management Committee</a></li>
                            <li><a href="asset_liability_committe_v1.php">Asset Liability Committee</a></li>
                            <li><a href="photo_gallary.php">Photo Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class='colleps-slide-menu'> Products & Services </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class='colleps-slide-menu'> Deposit Products </a>
                                <ul>
                                    <li><a href="ps_saving_deposit.php">Savings Deposit</a></li>
                                    <li><a href="ps_current_deposit.php">Current Deposit</a></li>
                                    <li><a href="javascript:void(0);" class='colleps-slide-menu'>Term Deposit</a>
                                        <ul>
                                            <li><a href="ps_snd.php">Special Notice Deposit</a></li>
                                            <li><a href="ps_fdr.php">Fixed Deposit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);" class='colleps-slide-menu'>Foreign Currency Deposit</a>
                                        <ul>
                                            <li><a href="ps_fc_rfcd.php">RFC Deposit</a></li>
                                            <li><a href="ps_fc_nfcd.php">NFC Deposit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ps_mss.php">Monthly Savings Scheme</a></li>
                                    <li><a href="ps_mis.php">Monthly Income Scheme</a></li>
                                    <li><a href="ps_dbs.php">Double Benefit Scheme</a></li>
                                    <li><a href="ps_millionair.php">Millionaire Income Scheme</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);" class='colleps-slide-menu'>Credit Products</a>
                                <ul>
                                    <li><a href="ps_overdraft.php">Overdraft</a></li>
                                    <li><a href="ps_lease_financing.php">Lease Financing</a></li>
                                    <li><a href="ps_house_building.php">House Building</a></li>
                                    <li><a href="ps_sme.php">Small Medium Enterprise</a></li>
                                    <li><a href="ps_ccs.php">Consumer Credit Scheme</a></li>
                                    <li><a href="ps_trade_finance.php">Trade Finance</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class='colleps-slide-menu'>Cards</a>
                                <ul>
                                    <li><a href="credit_card.php">Credit Card</a></li>
                                    <li><a href="power_card.php">Power Card</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="shedule_of_charges.php">Schedule of Charges</a>
                            </li>
                            <li>
                                <a href="downloads.php">Download Forms</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="fs_financial_performance.php"> Financial Status </a>
                        <ul>
                            <li><a href="fs_annual_report.php">Annual Report</a></li>
                            <li><a href="fs_financial_performance.php">Financial Performance</a></li>
                            <li><a href="javascript:void(0);" class='colleps-slide-menu'>Interest Rates</a>
                                <ul>
                                    <li><a href="deposit_int_rate.php">Deposit Rate</a></li>
                                    <li><a href="loan_int_rate.php">Lending Rate</a></li>
                                </ul>
                            </li>
                            <li><a href="fs_transaction_charges.php">Transaction Charges</a></li>
                            <li><a href="fs_credit_report.php">Credit Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class='colleps-slide-menu'> Service Location </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class='colleps-slide-menu'>Branch Location</a>
                                <ul>
                                    <li><a href="branch_location.php?division=Dhaka">Dhaka</a></li>
                                    <li><a href="branch_location.php?division=Chittagong">Chittagong</a></li>
                                    <li><a href="branch_location.php?division=Rajshahi">Rajshahi</a></li>
                                    <li><a href="branch_location.php?division=Rangpur">Rangpur</a></li>
                                    <li><a href="branch_location.php?division=Sylhet">Sylhet</a></li>
                                    <li><a href="branch_location.php?division=Khulna">Khulna</a></li>
                                    <li><a href="branch_location.php?division=Barisal">Barisal</a></li>
                                    <li><a href="branch_location_all.php">All Branch</a></li>
                                </ul>
                            </li>
                            <li><a href="sl_ad_branch.php">Authorize Dealer Branches</a></li>
                            <li><a href="sl_atm.php">ATM Location</a></li>
                            <li><a href="sl_e-gp.php">e-GP Service Branch</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class='colleps-slide-menu'> Overseas operation </a>
                        <ul>
                            <li><a href="oo_contact.php">Contact Address</a></li>
                            <li><a href="oo_correspondent_banking.php">Correspondent Banking</a></li>
                            <li>
                                <a href="javascript:void(0);" class='colleps-slide-menu'>Foreign Remittance</a>
                                <ul>
                                    <li><a href="oo_fr_subsidiary_companies.php">Subsidiary Companies</a></li>
                                    <li><a href="oo_fr_western_union.php">Western Union</a></li>
                                    <li><a href="oo_fr_moneygram.php">Money Gram</a></li>
                                    <li><a href="oo_fr_others.php">Other Ex. Comp. & Banks</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class='colleps-slide-menu'> CSR </a>
                        <ul>
                            <li> <a href="csr_employment.php"> CSR </a> </li>
                            <li><a href="csr_employment.php">Employment</a></li>
                            <li><a href="csr_education.php">Education</a></li>
                            <li><a href="csr_sports.php">Sports & Cul. Activities</a></li>
                            <li><a href="csr_disaster_relief.php">Disaster Relief</a></li>
                            <li><a href="csr_other.php">Other</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
