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

        <li>
            <label for="InputTextIDGeneralRegister" id="LabelIdGeneralRegister">
                RG:
                <em>*</em>
            </label>
            <input type="text" id="InputTextIDGeneralRegister">
        </li>

        <li>
            <label for="InputTextIDOrgãoEmissor" id="LabelId">
                Orgão Emissor
                <em>*</em>
            </label>
            <input type="text" id="InputTextIDOrgãoEmissor">
        </li>

        <li>
            <label for="InputDateIdExpedição" id="LabelId">
                Data de Expedição
                <em>*</em>
            </label>
            <input type="date" id="InputDateIdExpedição" id="LabelId">
        </li>

        <li>
            <label for="InputDateIdBirth" id="LabelId">
                Data Nascimento:
                <em>*</em>
            </label>
            <input type="date" id="InputDateIdBirth">
        </li>

        <li>
            <label id="LabelId">Sexo:</label>
            <label for="InputRadioMan" id="LabelId>M</label><input type="radio" name="Sexo" id="InputRadioMan" value="1" />
            <label for="InputRadioWoman" id="LabelId>F</label><input type="radio" name="Sexo" id="InputRadioWoman" value="2" />
        </li>

        <li>
            <label for="SelectIDMaritalStatus" id="LabelId">Estado Civil:</label>
            <select id="SelectIDMaritalStatus">
                <option selected>Solteiro(a)</option>
                <option>Casado(a)</option>
                <option>Divorciado(a)</option>
                <option>Viuvo(a)</option>
            </select>
        </li>

        <li>
            <label for="SelectIDPasture" id="LabelId">Logradouro</label>
            <select id="SelectIDPasture">
                <option selected>Rua</option>
                <option>Avenida</option>
                <option>Condominio</option>
            </select>
            <input type="text"  size="60" placeholder="ex: 537"/>
        </li>

        <li>
            <label for="InputTextIdentificationNumber" id="LabelId">Número:</label>
            <input type="text" id="InputTextIdentificationNumber" size="6"/>
        </li>

        <li>
            <label for="InputTextIDNeighborhood" id="LabelId">Bairro:</label>
            <input type="text" id="InputTextIDNeighborhood" size="40">
        </li>

        <li>
            <label for="InputTextIdentificationPostalCode" id="LabelId">CEP:</label>
            <input type="text" id="InputTextIdentificationPostalCode" size="9" placeholder="ex: 99999-999">
        </li>

        <li>
            <label for="InputTextIdComplement" id="LabelIdComplement">Complemento:</label>
            <input type="text" id="InputTextIdComplement" size="40" placeholder="ex: 2ª etapa">
        </li>

        <li>
            <label for="InputTextIdCity" id="LabelIdCity">Municipio:</label>
            <input type="text" id="InputTextIdCity" size="50" placeholder="ex: Fortaleza">
        </li>

        <li>
            <label for="SelectIdState" id="LabelIdState">Estado:</label>
            <select id="SelectIdState">
                <option selected>CE</option>
                <option>RJ</option>
                <option>SP</option>
            </select>
        </li>
    </ol>

            <label for="SelectIDCountry" id="LabelId">País:</label>
            <select id="SelectIDCountry">
                <option selected>United States of America</option>
                <option>Brasil</option>
                <option>China</option>
                <option>Suécia</option>
                <option>Africa do Sul</option>
            </select>
        </tr>

        <tr>
            <td><label for="InputTextPhone" id="LabelId">Teleone Fixo:</label></td>
            <td><Input type="tel" id="InputTextPhone"></td>
        </tr>

        <tr>
            <td><label for="InputTextCommercialPhone" id="LabelId">Telefone Comercial:</label></td>
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
            <td><label for="InputTextCellPhone" id="LabelId">Teleone Celular:</label>

                <select id="SelectIdCarrierCellFone">
                    <option selected>OI</option>
                    <option>TIM</option>
                    <option>Claro</option>
                    <option>Vivo</option>
                </select>
                <input type="tel" id="InputTextCellPhone">



            <label for="InputIdEmail" id="LabelId">E-Mail:</label>
            <input type="email" id="InputIdEmail">


</form>
</body>