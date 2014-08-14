<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="../../../../../CascadingStyleSheets/Common/Common/Common/Window/User/BasicSingUp.css" rel="stylesheet">
</head>
<div id="DivIdScopo">
    <div id="DivInformation">
        <h1>Logo 4Carrus</h1>
        <h5>Cadastre-se em uma conta pessoal ou uma <a href="#">conta comercial</a></h5>
        <p id="Hint-Text">* Dados obrigatórios</p>
    </div>

    <div id="DivIdBasicSingUp">
        <form>
            <ol>
                <li id="LiIdFirstName">
                    <label for="InputIdTextFirstName">
                        Nome:
                        <em>*</em>
                    </label>
                    <input type="text" id="InputIdTextFirstName" size="25">
                </li>

                <li id="LiIdSecondName">
                    <label for="InputIdTextSecondName">
                        Sobrenome:
                        <em>*</em>
                    </label>
                    <input type="text" id="InputIdTextSecondName" size="25">
                </li>

                <li id="LiIdEmail">
                    <label for="InputIdTextEmail">
                        E-mail:
                        <em>*</em>
                    </label>
                    <input type="text" id="InputIdTextEmail" size="25">
                </li>

                <li id="LiIdRepeatEmail">
                    <label for="InputIdTextRepeatEmail">
                        Repetir e-mail:
                        <em>*</em>
                    </label>
                    <input type="text" id="InputIdTextRepeatEmail" size="25">
                </li>

                <li ng-repeat="phone in phones" id="LiIdPhone">
                    <label for="InputTextPhone">
                        Telefone:
                        <em>*</em>
                    </label>

                    <select id="SelectedIdPhone">
                        <option selected>Fixo</option>
                        <option>Celular</option>
                        <option>Comercial</option>
                        <option>Fax</option>
                    </select>
                    <input type="text" id="InputTextPhone" size="15">
                    <input type="button" id="InputButtonPhone" ng-submit="addTodo() value="Add">
                </li>

                <li id="LiIdPassword">
                    <label for="InputIdPassword">
                        Definir senha:
                        <em>*</em>
                    </label>
                    <input type="password" id="InputIdPassword" size="25">
                    <span>Senha deve conter de 6 a 20 caracteres</span>
                </li>
            </ol>

            <ul>
                <li>Li e aceito o <a href="#">Contrato do Usuário</a> e a <a href="#">Política de Privacidade.</a></li>
                <li>Concordo em receber comunicações do 4Carrus e posso mudar minhas preferências de notificação em Meu 4Carrus.</li>
            </ul>

            <input type="button" value="Enviar" id="InputIdButtonEnviar">
        </form>
    </div>
</div>


</html>