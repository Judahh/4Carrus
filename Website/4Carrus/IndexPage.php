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
        <link href="View/CascadingStyleSheets/Header/Menu/MenuOptions.css" rel="stylesheet" media="all">

    </head>

    <header>
        <nav>
            <div id="DivIdentificationBoxMenuSearchHolder">
                <div id="DivIdentificationGlass"></div>
            </div>
            <div id="DivIdentificationMenuSearch">
                <ul>
                    <li><div id="DivIdentificationNeon"><div id="DivIdentificationIcon">'</div></div>
                        <div id="DivIndentificationSubMenuSearchHolder">
                            <div id="DivIdentificationGlass"></div>
                        </div>
                        <div id="DivIndentificationSubMenuSearch">
                            <ul>
                                <li><div id="DivIdentificationNeon">Preferências</div></li>
                                <li><div id="DivIdentificationNeon">Cores</div></li>
                                <li><div id="DivIdentificationNeon">Idioma</div></li>
                                <li><div id="DivIdentificationNeon">Região</div></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="DivIdentificationBoxMenuOptionsHolder">
                <div id="DivIdentificationGlass"></div>
            </div>
            <div id="DivIdentificationMenuOptions">
                <ul>
                    <li><div id="DivIdentificationNeon"><div id="DivIdentificationIcon">›</div></div>
                        <div id="DivIndentificationSubMenuNotificationsHolder">
                            <div id="DivIdentificationGlass"></div>
                        </div>
                        <div id="DivIndentificationSubMenuNotifications">
                            <ul>
                                <li><div id="DivIdentificationNeon">Preferências</div></li>
                                <li><div id="DivIdentificationNeon">Cores</div></li>
                                <li><div id="DivIdentificationNeon">Idioma</div></li>
                                <li><div id="DivIdentificationNeon">Região</div></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationNeon"><div id="DivIdentificationIcon">¥</div></div>
                        <div id="DivIndentificationSubMenuSettingsHolder">
                            <div id="DivIdentificationGlass"></div>
                        </div>
                        <div id="DivIndentificationSubMenuSettings">
                            <ul>
                                <li><div id="DivIdentificationNeon">Preferências</div></li>
                                <li><div id="DivIdentificationNeon">Cores</div></li>
                                <li><div id="DivIdentificationNeon">Idioma</div></li>
                                <li><div id="DivIdentificationNeon">Região</div></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationNeon">
                            <div id="DivIdentificationIcon">U</div>
                        </div>
                        <div id="DivIndentificationSubMenuApplicationsHolder">
                            <div id="DivIdentificationGlass"></div>
                        </div>
                        <div id="DivIndentificationSubMenuApplications">
                            <ul>
                                <li><div id="DivIdentificationNeon">Gas Station</div></li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationNeon">
                            <div id="DivIdentificationIcon">t</div>
                        </div>
                        <div id="DivIndentificationSubMenuUserHolder">
                            <div id="DivIdentificationGlass"></div>
                        </div>
                        <div id="DivIndentificationSubMenuUser">
                            <ul>
                                <li><div id="DivIdentificationNeon">Minha Conta</div></li>
                                <li><div id="DivIdentificationNeon">Meu Carrinho</div></li>
                                <li><div id="DivIdentificationNeon">Minha Agenda</div></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="DivIdentificationBodyHolder">

    </div>
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
        <div id="DivIdentificationBoxMenuInformationHolder">
            <div id="DivIdentificationGlass"></div>
        </div>
        <div id="DivIndentificationInformation">
            <ul>
                <li><div id="DivIdentificationNeon">
                        <div id="DivIdentificationIcon">‚</div>
                    </div>
                    <div id="DivIndentificationSubMenuInformationHolder">
                        <div id="DivIdentificationGlass"></div>
                    </div>
                    <div id="DivIndentificationSubMenuInformation">
                        <ul>
                            <li><div id="DivIdentificationNeon">Contato</div></li>
                            <li><div id="DivIdentificationNeon">Sobre o Site</div></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
</html>