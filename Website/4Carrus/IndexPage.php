<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <title>4Carrus</title>
        <meta content="text/html" charset="UTF-8"/>
        <link href="View/CascadingStyleSheets/Header/Common.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Footer/Common.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Body/Main.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Common/Common.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Header/Menu/MenuOptionsHolder.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Header/Menu/MenuSearchHolder.css" rel="stylesheet" media="all">

    </head>

    <header>
        <nav>
            <div id="DivIdentificationBoxMenuSearchHolder"></div>
            <div id="DivIdentificationMenuSearch">
                <ul>
                    <li><div id="DivIdentificationIcon">'</div>
                        <div id="DivIndentificationSubMenuSearchHolder"></div>
                        <div id="DivIndentificationSubMenuSearch">
                            <ul>
                                <li><a href="#">Preferências</a></li>
                                <li><a href="#">Cores</a></li>
                                <li><a href="#">Idioma</a></li>
                                <li><a href="#">Região</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="DivIdentificationBoxMenuOptionsHolder"></div>
            <div id="DivIdentificationMenuOptions">
                <ul>
                    <li><div id="DivIdentificationIcon">›</div>
                        <div id="DivIndentificationSubMenuNotificationsHolder"></div>
                        <div id="DivIndentificationSubMenuNotifications">
                            <ul>
                                <li><a href="#">Preferências</a></li>
                                <li><a href="#">Cores</a></li>
                                <li><a href="#">Idioma</a></li>
                                <li><a href="#">Região</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">¥</div>
                        <div id="DivIndentificationSubMenuSettingsHolder"></div>
                        <div id="DivIndentificationSubMenuSettings">
                            <ul>
                                <li><a href="#">Preferências</a></li>
                                <li><a href="#">Cores</a></li>
                                <li><a href="#">Idioma</a></li>
                                <li><a href="#">Região</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">U</div>
                        <div id="DivIndentificationSubMenuApplicationsHolder"></div>
                        <div id="DivIndentificationSubMenuApplications">
                            <ul>
                                <li><a href="#">Gas Station</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">t</div>
                        <div id="DivIndentificationSubMenuUserHolder"></div>
                        <div id="DivIndentificationSubMenuUser">
                            <ul>
                                <li><a href="#">Minha Conta</a></li>
                                <li><a href="#">Meu Carrinho</a></li>
                                <li><a href="#">Minha Agenda</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="DivIdentificationBodyHolder"></div>
    <body>
        <main>
            <table>
                <?php
                    for($index=0; $index<10; $index++){
                ?>
                <div id="DivIdentificationTableRowHolder"></div>
                <div id="DivIdentificationTableRow">
                    <tr>
                        <td id="TdIdentificationColummLeft">
			    <img  id="ImgIdentificationCar" src="View/Carros/bugatti-veyron-grand-2_800x0w.jpg">
			    <div id="DivIdentificationLogoCar">logo</div>
			</td>
			
                        <td id="TdIdentificationColummRight">Informações</td>
                    </tr>
                </div>
                <?php
                    }
                ?>
            </table>
        </main>
    </body>

    <footer>
        <div id="DivIdentificationBoxMenuInformationHolder"></div>
        <div id="DivIndentificationInformation">
            <ul>
                <li><div id="DivIdentificationIcon">‚</div>
                    <div id="DivIndentificationSubMenuInformationHolder"></div>
                    <div id="DivIndentificationSubMenuInformation">
                        <ul>
                            <li>Contato</li>
                            <li>Sobre o Site</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
</html>