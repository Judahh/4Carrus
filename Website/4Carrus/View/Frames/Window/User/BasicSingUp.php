<form>
    <ol>
        <li>
            <label for="InputIdTextFirstName">
                Nome:
                <em>*</em>
            </label>
            <input type="text" id="InputIdTextFirstName" size="25">
        </li>

        <li>
            <label for="InputIdTextSecondName">
                Sobrenome:
                <em>*</em>
            </label>
            <input type="text" id="InputIdTextSecondName" size="25">
        </li>

        <li>
            <label for="InputIdTextEmail">
                E-mail:
                <em>*</em>
            </label>
            <input type="text" id="InputIdTextEmail" size="25">
        </li>

        <li>
            <label for="InputIdTextEmail">
                E-mail:
                <em>*</em>
            </label>
            <input type="text" id="InputIdTextEmail" size="25">
        </li>

        <li>
            <label for="InputIdTextRepeatEmail">
                Repetir e-mail:
                <em>*</em>
            </label>
            <input type="text" id="InputIdTextRepeatEmail" size="25">
        </li>

        <li ng-repeat="phone in phones">
            <label for="InputTextPhone">
                Telefone:
                <em>*</em>
            </label>

            <select id="SelectedIdPhone">
                <option selected>Fixo</option>
                <option>Celular</option>
                <option>Comercial</option>
            </select>
            <input type="text" id="InputTextPhone" size="15">
            <input type="button" id="InputButtonPhone" ng-submit="addTodo() value="Add">
        </li>

        <li>
            <label for="InputIdTextRepeatEmail">
                Definir senha:
                <em>*</em>
            </label>
            <input type="password" id="InputIdPasswordRepeatEmail" size="25">
        </li>
    </ol>
</form>