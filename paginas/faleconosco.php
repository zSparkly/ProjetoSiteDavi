<main>
    <h2>Fale com o Davi</h2>
    <form action="enviar_mensagem.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Recado:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</main>
