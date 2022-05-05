<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <form action="controller/controllerPessoa.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="lblNome">Nome:</label>
                    </td>

                    <td>
                        <input type="text" name="txtNome" id="txtNome">
                    </td>

                    <td>
                        <label for="txtEnd">Endereço:</label>
                    </td>

                    <td>
                        <input type="text" name="txtEnd" id="txtEnd">
                    </td> 

                </tr>
                <tr>
                    <td colspan="2">
                        <button>Cadastrar</button>
                    </td> 
                </tr>
            </table>
        </form>
    </body>
</html>