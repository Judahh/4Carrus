<div id="DivIdBodyHolder">
    <div id="DivIdDealership">
        <img  id="ImgIdDealership" src="View/Carros/dealership6.jpg"/>
    </div>
    <video id="DivIdVideo">
        <source src="View/Carros/video.mp4" type="video/mp4">
    </video>
    <div id="DivIdLogo">
        <img  id="ImgIdLogo" src="View/Carros/4Carrus.jpg"/>
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
                        <div id="DivIdText">X</div>
                    </div>
                </div>
            </div>

            <div id="DivIdPopUpBody">
                <div id="DivIdNeon">
                    <div id="DivIdText">
                        <?php
                            for($index=0; $index<1; $index++){
                        ?>
                                TEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXT
                        <?php
                            }
                        ?>
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
