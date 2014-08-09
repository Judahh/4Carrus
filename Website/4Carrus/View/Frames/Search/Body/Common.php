<div id="DivIdBodyHolder">
    <div id="DivIdDealership">
        <img  id="ImgIdDealership" src="View/Carros/mercedessalzufer1.jpg"/>
    </div>
    <video id="VideoId">
        <source src="View/Carros/Top Gear Music Video - The Most Beautiful Cars.mp4" type="video/mp4">
    </video>
    <div id="DivIdLogo">
        <img  id="ImgIdLogo" src="View/Carros/4Carrus.jpg"/>
    </div>
</div>

<main>
    <div id="DivIdTable">
        <?php
        for($index=0; $index<10; $index++){
            ?>

            <div id="DivIdTableRow">
                <div id="DivIdTableRowWrap">
                    <div id="DivIdColummLeft">
                        <img  id="ImgIdCar" src="View/Carros/bugatti-veyron-grand-2_800x0w.jpg"/>
                        <div id="DivIdLogoCar">
                            <div id="DivIdNeon">
                                <div id="DivIdText">logo</div>
                            </div>
                        </div>
                    </div>

                    <div id="DivIdColummRight">
                        <div id="DivIdNeon">
                            <div id="DivIdText">Informações</div>
                        </div>
                    </div>
                </div>
                <div id="DivIdTableRowHolder">
                    <div id="DivIdGlass"></div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</main>
