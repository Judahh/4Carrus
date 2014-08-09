<table id="TableIdBusinessSingUp">
    <tr>
        <td><label for="InputIdFantasyName">Nome Fantasia:</label></td>
        <td><input type="text" id="InputIdFantasyName" size="50"></td>
    </tr>

    <tr>
        <td><label for="InputIdCorporateName">Razão Social:</label></td>
        <td><input type="text" id="InputIdCorporateName" size="30"></td>
    </tr>

    <tr>
        <td><label for="InputIdCompanyIdentification">CNPJ:</label></td>
        <td><input type="text" id="InputIdCompanyIdentification" size="30"></td>
    </tr>

    <tr>
        <td><label for="SelectIDPasture">Logradouro</label></td>
        <td>
            <select id="SelectIDPasture">
                <option selected>Rua</option>
                <option>Avenida</option>
                <option>Condominio</option>
            </select>
            <input type="text"  size="60" placeholder="ex: 537"/>
        </td>
    </tr>

    <tr>
        <td><label for="InputTextIdentificationNumber">Número:</label></td>
        <td><input type="text" id="InputTextIdentificationNumber" size="6"/></td>
    </tr>

    <tr>
        <td><label for="InputTextIDNeighborhood">Bairro:</label></td>
        <td><input type="text" id="InputTextIDNeighborhood" size="40"></td>
    </tr>

    <tr>
        <td><label for="InputTextIdentificationPostalCode">CEP:</label></td>
        <td><input type="text" id="InputTextIdentificationPostalCode" size="9" placeholder="ex: 99999-999"></td>
    </tr>

    <tr>
        <td><label for="InputTextIDComplement">Complemento:</label></td>
        <td><input type="text" size="40" id="InputTextIDComplement" placeholder="ex: 2ª etapa"></td>
    </tr>

    <tr>
        <td><label for="InputTextIDCity">Municipio:</label></td>
        <td><input type="text" id="InputTextIDCity" size="50" placeholder="ex: Fortaleza"><br/></td>
    </tr>

    <tr>
        <td><label for="SelectIDState">Estado:</label></td>
        <td><select id="SelectIDState">
            <option selected>CE</option>
            <option>RJ</option>
            <option>SP</option>
        </select></td>
    </tr>

    <tr>
        <td><label for="SelectIDCountry">País:</label></td>
        <td><select id="SelectIDCountry">
            <option selected>United States of America</option>
            <option>Brasil</option>
            <option>China</option>
            <option>Suécia</option>
            <option>Africa do Sul</option>
        </select>
    </tr>

    <tr>
        <td><label for="InputTextResponsible">Responsavel:</label></td>
        <td>
            <input type="text" id="InputTextResponsible" size="50" list="DataListIdResponsible">
            <datalist id="DataListIdResponsible">
            <option>Judah</option>
            <option>Felipe</option>
            <option>Felipa</option>
            <option>Romulo</option>
            <option>Tarciso</option>
            <option>Karla</option>
            <option>Karine</option>
        </datalist> </td>
    </tr>

    <tr>
        <td><label for="InputTextCommercialPhone">Telefone Comercial:</label></td>
        <td><Input type="tel" id="InputTextCommercialPhone"></td>
    </tr>

    <tr>
        <td><label for="InputTextCellPhone">Teleone Celular:</label><br/></td>
        <td><Input type="tel" id="InputTextCellPhone"></td>
    </tr>

    <tr>
        <td><label for="InputIdEmail">E-Mail:</label></td>
        <td><input type="email" id="InputIdEmail"></td>
    </tr>
</table>