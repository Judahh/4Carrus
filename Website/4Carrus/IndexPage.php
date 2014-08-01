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
                                <li>Preferências</a></li>
                                <li>Cores</a></li>
                                <li>Idioma</li>
                                <li>Região</li>
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
                                <li>Preferências</li>
                                <li>Cores</li>
                                <li>Idioma</li>
                                <li>Região</li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">¥</div>
                        <div id="DivIndentificationSubMenuSettingsHolder"></div>
                        <div id="DivIndentificationSubMenuSettings">
                            <ul>
                                <li>Preferências</li>
                                <li>Cores</li>
                                <li>Idioma</li>
                                <li>Região</li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">U</div>
                        <div id="DivIndentificationSubMenuApplicationsHolder"></div>
                        <div id="DivIndentificationSubMenuApplications">
                            <ul>
                                <li>Gas Station</li>
                            </ul>
                        </div>
                    </li>
                    <li><div id="DivIdentificationIcon">t</div>
                        <div id="DivIndentificationSubMenuUserHolder"></div>
                        <div id="DivIndentificationSubMenuUser">
                            <ul>
                                <li>Minha Conta</li>
                                <li>Meu Carrinho</li>
                                <li>Minha Agenda</li>
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
                <div id="DivIndentificationTableRowHolder"></div>
                <div id="DivIndentificationTableRow">
                    <tr>
                        <td><img src="View/Carros/tupla2.png"></td>
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
                <li><div id="DivIdentificationIcon">i</div>
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