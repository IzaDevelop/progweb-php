    </main>
    <footer>
        <p>Site desenvolvido como exemplo</p>
    </footer>
<?php
    // $fuso = new DateTimeZone("America/Sao_Paulo");
    // $dataHora = new DateTime('now', $fuso);
    date_default_timezone_set("America/Sao_Paulo");
    $dataHora = date("d/m/Y H:i");
?>
    <p><?=$dataHora/* ->format("d/m/Y H:i") */?></p>
</body>
</html>