<form method="post" id="FormIdentificationUserSignUp" >
    <table id="TableIdUserSingUp">
        <tr>
            <td><label for="InputTextIDNamePerson">Nome Completo:</label></td>
            <td><input type="text" id="InputTextIDNamePerson" size="45" maxlength="50" required="true"></td>
        </tr>
        <tr>
            <td><label for="inputTextIdentificationUserCPF">CPF:</label></td>
            <td><input type="text" id="inputTextIdentificationUserCPF" size="14"></td>
        </tr>

        <tr>
            <td><label for="InputTextIDRegistroGeral">RG</label></td>
            <td><input type="text" id="InputTextIDRegistroGeral"></td>
        </tr>

        <tr>
            <td><label for="InputTextIDOrgãoEmissor">Orgão Emissor</label></td>
            <td><input type="text" id="InputTextIDOrgãoEmissor"></td>
        </tr>

        <tr>
            <td><label for="InputDateIDDataExpedição">Data de Expedição</label><br/></td>
            <td><input type="date" id="InputDateIDDataExpedição"></td>
        </tr>

        <tr>
            <td><label for="InputDateIDDateBirth">Data Nascimento:</label></td>
            <td><input type="date" id="InputDateIDDateBirth"></td>
        </tr>

        <tr>
            <td><label >Sexo:</label>
            <td>
            <label for="InputRadioMan">M</label><input type="radio" name="Sexo" id="InputRadioMan" value="1" />
            <label for="InputRadioWoman">F</label><input type="radio" name="Sexo" id="InputRadioWoman" value="2" />
        </td>
        </tr>

        <tr>
            <td><label for="SelectIDMaritalStatus">Estado Civil:</label></td>
            <td>
                <select id="SelectIDMaritalStatus">
                    <option selected>Solteiro(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viuvo(a)</option>
                </select>
            </td>
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
            <td><label for="InputTextPhone">Teleone Fixo:</label></td>
            <td><Input type="tel" id="InputTextPhone"></td>
        </tr>

        <tr>
            <td><label for="InputTextCommercialPhone">Telefone Comercial:</label></td>
            <td>
                <Input type="tel" id="InputTextCommercialPhone">
                <select id="SelectIdCarrierFixedPhone">
                    <option selected>OI</option>
                    <option>Oi</option>
                    <option>GVT</option>
                    <option>Vivo</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="InputTextCellPhone">Teleone Celular:</label><br/></td>
            <td>
                <select id="SelectIdCarrierCellFone">
                    <option selected>OI</option>
                    <option>TIM</option>
                    <option>Claro</option>
                    <option>Vivo</option>
                </select>
                <input type="tel" id="InputTextCellPhone">
            </td>
        </tr>

        <tr>
            <td><label for="InputIdEmail">E-Mail:</label></td>
            <td><input type="email" id="InputIdEmail"></td>
        </tr>

    </table>

</form>
</body>