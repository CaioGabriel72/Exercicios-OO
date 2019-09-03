 <script>
        // pegar o funcionamento GitHub
        function liberar_limite(valor){
            if(valor=="ce"){
                document.getElementById("limite").style.display="block";
            }
            else{
                document.getElementById("limite").style.display="none";
            }
        }
    </script>
        <form name="conta" method="post">
            <input type="text" name="nome" placeholder="Nome..."/><br/>
            <input type="text" name="cpf" placeholder="CPF..."/><br/>
            <input type="email" name="email" placeholder="Email..."/><br/>
            <select name="tipo" onchange="liberar_limite(this.value)">
                <option value="">selecione</option>
                <option value="cc">Conta Corrente</option>
                <option value="ce">Conta Especial</option>
            </select><br/>
            <div id="limite" style="display:none">
            <input type="number" name="limite" placeholder="Digite o valor de limite especial..."/>
            </div>
            <input type="submit" value="Enviar"/>
        </form>
</html>