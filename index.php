<?php
include "page_top.php";
?>

<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
            <div class="art-post">
                <div class="art-post-body">
                    <div class="art-post-inner art-article" align="center">
                        <!-- Nivo Slider Start 2nd part -->
                        <div id="wrapper">
                            <div class="slider-wrapper theme-default">
                                <div class="ribbon"></div>
                                <div id="slider" class="nivoSlider">
                                    <img src="img_980px/new/01.png"/>
                                    <img src="img_980px/new/06.png"/>
                                    <img src="img_980px/new/09.png"/>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript" src="scripts_nivo/jquery-1.7.1.min.js"></script>
                        <script type="text/javascript" src="scripts_nivo/jquery.nivo.slider.pack.js"></script>

                        <script type="text/javascript">
                            $(window).load(function () {
                                $('#slider').nivoSlider({
                                    effect: 'random',
                                    animSpeed: 500,
                                    pauseTime: 5000
                                });
                            });
                        </script>
                    </div>
                    <!-- Nivo Slider End 2nd part -->
                    <div class="cleared"></div>
                    <div class="home-info">
                        <div class='home-info-item home-info-deposit'>
                            <ul>
                                <li> <a href="ps_saving_deposit.php">Savings Deposit</a> </li>
                                <li> <a href="ps_current_deposit.php">Current Deposit</a> </li>
                                <li> <a href="ps_fdr.php">Term Deposit</a> </li>
                                <li> <a href="ps_fc_rfcd.php">Foreign Currency Deposit</a> </li>
                                <li> <a href="ps_mss.php">Monthly Savings Scheme</a> </li>
                            </ul>
                        </div>
                        <div class='home-info-item home-info-credit'>
                            <ul>
                                <li> <a href="ps_saving_deposit.php">Savings Deposit</a> </li>
                                <li> <a href="ps_current_deposit.php">Current Deposit</a> </li>
                                <li> <a href="ps_fdr.php">Term Deposit</a> </li>
                                <li> <a href="ps_fc_rfcd.php">Foreign Currency Deposit</a> </li>
                                <li> <a href="ps_mss.php">Monthly Savings Scheme</a> </li>
                            </ul>
                        </div>
                        <div class='home-info-item home-info-card'>
                            <ul>
                                <li> <a href="ps_saving_deposit.php">Savings Deposit</a> </li>
                                <li> <a href="ps_current_deposit.php">Current Deposit</a> </li>
                                <li> <a href="ps_fdr.php">Term Deposit</a> </li>
                                <li> <a href="ps_fc_rfcd.php">Foreign Currency Deposit</a> </li>
                                <li> <a href="ps_mss.php">Monthly Savings Scheme</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cleared"></div>
                </div>
            </div>
            <?php
            include "page_bottom.php";
            ?>