<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <title>4Carrus</title>
        <meta content="text/html" charset="UTF-8"/>
        <link href="View/CascadingStyleSheets/Header/Header.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Footer/Footer.css" rel="stylesheet" media="all">
        <link href="View/CascadingStyleSheets/Body/Main.css" rel="stylesheet" media="all">
    </head>

    <header>
        <nav>
            <div id="DivIdentificationBoxMenuSearchHolder"></div>
            <div id="DivIdentificationMenuSearch">
                <ul>
                    <li><div id="DivIdentificationIcon">'</div>
                        <ul>
                            <li>Preferências</a></li>
                            <li>Cores</a></li>
                            <li>Idioma</li>
                            <li>Região</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="DivIdentificationBoxMenuOptionsHolder"></div>
            <div id="DivIdentificationMenuOptions">
                <ul>
                    <li><div id="DivIdentificationIcon">›</div></li>
                    <li><div id="DivIdentificationIcon">¥</div>
                        <ul>
                            <li>Preferências</li>
                            <li>Cores</li>
                            <li>Idioma</li>
                            <li>Região</li>
                        </ul>
                    </li>
                    <li><div id="DivIdentificationIcon">U</div>
                        <ul>
                            <li>Gas Station</li>
                        </ul>
                    </li>
                    <li><div id="DivIdentificationIcon">t</div>
                        <ul>
                            <li>Minha Conta</li>
                            <li>Meu Carrinho</li>
                            <li>Minha Agenda</li>
                        </ul>
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
                    for($index=0; $index<100; $index++){
                ?>

                <tr>
                    <td rowspan="1"><img src="View/Carros/tupla.png"></td>
                </tr>


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
                <li><div id="DivIdentificationIcon">'</div>
                    <ul>
                        <li>Contato</li>
                        <li>Sobre o Site</li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
</html>