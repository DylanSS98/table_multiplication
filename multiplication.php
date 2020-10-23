<?php
//if isset regarde si il y  a un get dans l'url si oui il fais le calcul si non il saute l'etape//
if (isset($_GET['n1'])){
    $nb1 = $_GET['n1'];
    $nb2 = $_GET['n2'];
    $result = ($nb1 * $nb2);
}


?>
<!-- Mon formulaire -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<form action="" method="get">
    <select class="form-control" name="n1">
        <!-- Boucle en for pour ma liste déroulante n1 -->
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <option><?= $i; ?></option>
        <?php endfor; ?>
        <!-- fin de ma boucle -->
    </select>

    <select class="form-control" name="n2">
        <!-- Boucle en for pour ma liste déroulante n2 -->
       <?php for ($i = 1; $i <= 10; $i++): ?>
            <option><?= $i; ?></option>
        <?php endfor; ?>
        <!-- fin de ma boucle -->
    </select>
    <button type="submit" class="btn btn-primary">Calculer</button>

    <!-- if isset verifie le $result -->
    <?php if (isset($result)): ?>
         <?= $result ?>
    <?php endif; ?>


</form>
<!-- Fin de mon formulaire -->