<!DOCTYPE html>
<html>
<head>
    <title>Générateur de Signature E-mail</title>
</head>
<body>
    <h1>Générateur de Signature E-mail</h1>
    
    <form action="generer_signature.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="tel">Numéro de téléphone :</label>
        <input type="text" id="tel" name="tel" required><br><br>
        
        <label for="poste">Poste occupé :</label>
        <input type="text" id="poste" name="poste" required><br><br>
        
        <input type="submit" value="Générer Signature">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $poste = $_POST["poste"];
    
    // Modèle de signature
    $signature = "
    <p style='font-style: italic; font-family: sans-serif; font-size: 13px'>Cordialement / Best regards</p>
    <table width='100%'>
        <tr>
            
            <td style='font-family: sans-serif; font-size: 15px;'>

                <b>$prenom $nom</b><br>
                <br>
                <img src=' https://www.elgmetals.com/site/assets/files/2638/ferinox_logo_blue.png' alt='Logo' width='200'> <br>
                <br>
                Ferinox S.A.S.U.<br>
                <br>
                $prenom $nom<br>
                $poste<br>
                Zone Industrielle Portuaire CNR<br>
                69560 Saint-Romain-en-Gal, France<br>
                <br>
                Phone: +33 (0)$tel<br>
                E-Mail: <a href='mailto:$prenom.$nom@ferinox.fr' style='font-family: sans-serif; font-size: 15px;'>$prenom.$nom@ferinox.fr</a><br>
                Web: <a href='http://www.elg.de' style='font-family: sans-serif; font-size: 15px;'>www.elg.de</a><br>
                <img src=' https://www.elgmetals.com/site/assets/files/2636/ferinox_iso.png' alt='Logo' width='80'> 
                <img src=' https://www.elgmetals.com/site/assets/files/2635/ferinox_tree.png' alt='Logo' width='30'> 

            </td>
        </tr>
    </table>
    <p style='font-size: 10px; font-family: sans-serif;'>Please, consider the environment before printing this <br>
    Our General Terms and Conditions of Purchase (IT/EN) and Sale (IT/EN) are available on our website</p>
    ";
    
    // Afficher la signature générée
    echo $signature;
}
?>


