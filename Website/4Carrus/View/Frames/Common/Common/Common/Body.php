<div id="DivIdBodyHolder">
    <div id="DivIdDealership">
        <img  id="ImgIdDealership" src="View/Images/Dealerships/dealership6.jpg"/>
    </div>
    <video id="DivIdVideo">
        <source src="View/Videos/Intros/intro0.mp4" type="video/mp4">
    </video>
    <div id="DivIdLogo">
        <img  id="ImgIdLogo" src="View/Images/Logos/logo0.jpg"/>
    </div>
</div>

<body>
    <?php
        include 'Body/Search/Common.php';
    ?>
</body>

<div id="DivIdPopUpBox">
    <div id="DivIdGlass">
        <div id="DivIdPopUp">
            <div id="DivIdPopUpHeader">
                <div id="DivIdPopUpClose">
                    <div id="DivIdNeon" onclick="popUpClose('DivIdPopUpBox')">
                        <div id="DivIdRedCircle"></div>
                    </div>
                </div>
            </div>

            <div id="DivIdPopUpBody">
                <div id="DivIdPopUpBodyWrap">
                    <div id="DivIdNeon">
                        <div id="DivIdText">
                            <?php
                                for($index=0; $index<10; $index++){
                            ?>
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT

                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT
                                    TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="DivIdPopUpFooter">
                <div id="DivIdPopUpOK">
                    <div id="DivIdNeon" onclick="popUpClose('DivIdPopUpBox')">
                        <div id="DivIdText">OK</div>
                    </div>
                </div>
                <div id="DivIdPopUpCancel">
                    <div id="DivIdNeon" onclick="popUpClose('DivIdPopUpBox')">
                        <div id="DivIdText">Cancel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
