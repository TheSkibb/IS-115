<!Doctype>
<html>
<head>
<title>modul 1 oppgave 2</title>
</head>
<body>

<h1>oppgave 2</h1>
<div>
    <ul>
    <li> under er kallet tip phpinfo()</li>
    <li> display_errors er satt til off på både locale og master value </li>
    <li> document root er satt til /opt/lampp/htdocs </li>

    <li> 
        fra <a href="https://www.php.net/manual/en/function.phpinfo.php">dokumentasjonen til php</a> kan vi se at phpinfo() er en funksjon som man kan bruke til å skjekke konfigurasjonen til php og informasjon om på systemet man er på. Phpinfo() kan også brukes som et debuggingsverktøy ettersom at den lister opp data man ofte kan være interresert i når man debugger</li>
    </ul>
</div>

<?php
phpinfo();
?>

</body>
</html>
