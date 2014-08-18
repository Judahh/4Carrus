<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link href="../../../../../CascadingStyleSheets/Common/Common/Common/Window/User/BasicSingUp.css" rel="stylesheet">
</head>
<div id="DivIdScopo">
    <div id="DivInformation">
        <h1>Logo 4Carrus</h1>
        <h5>Cadastre-se em uma conta pessoal ou uma <a href="#">conta comercial</a></h5>
        <p id="Hint-Text"><em>*</em> Dados obrigatórios</p>
    </div>

<div id="DivIdSingUp">
    <form method="post" id="FormIdentificationUserSignUp" >
        <ol>
            <li id="LiIdNamePerson">
                <label for="InputTextIDNamePerson" id="LabelIdNamePerson">
                    Nome Completo:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIDNamePerson" size="45" maxlength="50" required="true">
            </li>

            <li id="LiIdUserCPF">
                <label for="inputTextIdentificationUserCPF" id="LabelIdUserCPF">
                    CPF:
                    <em>*</em>
                </label>
                <input type="text" id="inputTextIdentificationUserCPF" size="14">
            </li>

            <li id="LiIdGeneralRegister">
                <label for="InputTextIdGeneralRegister" id="LabelIdGeneralRegister">
                    RG:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdGeneralRegister">
            </li>

            <li id="LiIdIssuerOrgan">
                <label for="InputTextIdIssuerOrgan" id="LabelIdIssuerOrgan">
                    Orgão Emissor:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdIssuerOrgan">
            </li>

            <li id="LiIdDateExpedition">
                <label for="InputDateIdExpedition" id="LabelIdDateExpedition">
                    Data de Expedição:
                    <em>*</em>
                </label>
                <input type="date" id="InputDateIdExpedition">
            </li>

            <li id="LiIdDateIdBirth">
                <label for="InputDateIdBirth" id="LabelIdDateIdBirth">
                    Data Nascimento:
                    <em>*</em>
                </label>
                <input type="date" id="InputDateIdBirth">
            </li>

            <li id="LiIdGender">
                <label id="LabelIdGender">
                    Sexo:
                    <em>*</em>
                </label>
                <label for="InputRadioGenderMan" id="LabelIdGenderMan">
                    M
                </label>
                <input type="radio" name="Sexo" id="InputRadioGenderMan" value="1" />
                <label for="InputRadioGenderWoman" id="LabelIdGenderMan">
                    F
                </label><input type="radio" name="Sexo" id="InputRadioGenderWoman" value="2" />
            </li>

            <li id="LiIdMaritalStatus">
                <label for="SelectIdMaritalStatus" id="LabelIdMaritalStatus">
                    Estado Civil:
                    <em>*</em>
                </label>
                <select id="SelectIdMaritalStatus">
                    <option selected>Solteiro(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viuvo(a)</option>
                </select>
            </li>

            <li id="LiIdPasture">
                <label for="InputIdPasture" id="LabelIdPasture">
                    Logradouro:
                    <em>*</em>
                </label>
                <select id="SelectIdPasture">
                    <option selected>Rua</option>
                    <option>Avenida</option>
                    <option>Condominio</option>
                </select>
                <input type="text"  size="60" id="InputIdPasture" placeholder="ex: 537"/>
            </li>

            <li id="LiIdNumber">
                <label for="InputTextIdNumber" id="LabelIdNumber">
                    Número:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdNumber" size="6"/>
            </li>

            <li id="LiIdNeighborhood">
                <label for="InputTextIdNeighborhood" id="LabelIdNeighborhood">
                    Bairro:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdNeighborhood" size="40">
            </li>

            <li id="LiIdPostalCode">
                <label for="InputTextIdPostalCode" id="LabelIdPostalCode">
                    CEP:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdPostalCode" size="9" placeholder="ex: 99999-999">
            </li id="LiId">

            <li>
                <label for="InputTextIdComplement" id="LabelIdComplement">
                    Complemento:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdComplement" size="40" placeholder="ex: 2ª etapa">
            </li>

            <li id="LiId">
                <label for="InputTextIdCity" id="LabelIdCity">
                    Municipio:
                    <em>*</em>
                </label>
                <input type="text" id="InputTextIdCity" size="50" placeholder="ex: Fortaleza">
            </li>

            <li id="LiId">
                <label for="SelectIdState" id="LabelIdState">
                    Estado:
                    <em>*</em>
                </label>
                <select id="SelectIdState">
                    <option selected>CE</option>
                    <option>RJ</option>
                    <option>SP</option>
                </select>
            </li>

            <li id="LiIdCountry">
                <label for="SelectIdCountry" id="LabelIdCountry">
                    País:
                    <em>*</em>
                </label>
                <select id="SelectIdCountry">
                    <option selected>United States of America</option>
                    <option>Brasil</option>
                    <option>China</option>
                    <option>Suécia</option>
                    <option>Africa do Sul</option>
                </select>

            <li ng-repeat="phone in phones" id="LiIdPhone">
                <label for="InputTextPhone" id="LabelIdPhone">
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

            <li id="LiIdEmail">
                <label for="InputIdEmail" id="LabelIdEmail">
                    E-Mail:
                    <em>*</em>
                </label>
                <input type="email" id="InputIdEmail">
            </li>
        </ol>
    </form>
</div>
