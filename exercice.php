<!DOCTYPE html>
<html>
<head>
	<title>EXERCICES D'ALGORITHME</title>
</head>
<body>
  <h1>Algorithme 2</h1>
</body>
</html>
<?php
function trouverMinEtMax($nombres) {
    // Vérifier si le tableau est vide
    if (empty($nombres)) {
      return array("minimum" => null, "maximum" => null);
    }
  
    // Initialiser le minimum et le maximum avec la première valeur du tableau
    $minimum = $nombres[0];
    $maximum = $nombres[0];
  
    // Parcourir le reste du tableau
    for ($i = 1; $i < count($nombres); $i++) {
      // Mettre à jour le minimum si on trouve une valeur plus petite
      if ($nombres[$i] < $minimum) {
        $minimum = $nombres[$i];
      }
  
      // Mettre à jour le maximum si on trouve une valeur plus grande
      if ($nombres[$i] > $maximum) {
        $maximum = $nombres[$i];
      }
    }
  
    // Retourner le minimum et le maximum sous forme d'un tableau associatif
    return array("minimum" => $minimum, "maximum" => $maximum);
  }
  
  // Exemple d'utilisation
  $nombres = array(5, 8, 2, 10, 3);
  $resultat = trouverMinEtMax($nombres);
  
  echo "Le minimum est : " . $resultat['minimum'] . "<br>";
  echo "Le maximum est : " . $resultat['maximum'];
  
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 3</h1>
</body>
</html>
<?php
function division($a, $b) {
    $quotient = 0;
    $reste = abs($a);
    $diviseur = abs($b);

    while ($reste >= $diviseur) {
        $reste -= $diviseur;
        $quotient++;
    }

    // Déterminer le signe du quotient en fonction des signes de $a et $b
    if (($a < 0 && $b > 0) || ($a > 0 && $b < 0)) {
        $quotient = -$quotient;
    }

    // Déterminer le signe du reste en fonction du signe de $a
    if ($a < 0) {
        $reste = -$reste;
    }

    return array($quotient, $reste);
}

// Exemple d'utilisation
$A = 17;
$B = 5;
list($quotient, $reste) = division($A, $B);

echo "Quotient : " . $quotient . "<br>";
echo "Reste : " . $reste . "<br>";
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 5</h1>
</body>
</html>
<?php
function decToBinary($N) {
    // Vérifier si l'entier est nul
    if ($N == 0) {
        return '0';
    }
    
    $binary = '';
    while ($N > 0) {
        // Obtenir le reste de la division par 2
        $bit = $N % 2;
        
        // Ajouter le bit au début de la représentation binaire
        $binary = $bit . $binary;
        
        // Mettre à jour la valeur de N en divisant par 2
        $N = (int)($N / 2);
    }
    
    return $binary;
}

// Exemple d'utilisation
$decimal = 42;
$binary = decToBinary($decimal);
echo "Binaire de $decimal : $binary";
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 6</h1>
</body>
</html>
<?php
function estDivisible($A, $B) {
    if ($B == 0) {
        return false; // Division par zéro n'est pas autorisée
    }
    
    if ($A % $B == 0) {
        return true; // A est divisible par B
    } else {
        return false; // A n'est pas divisible par B
    }
}

// Exemple d'utilisation
$A = 15;
$B = 3;

if (estDivisible($A, $B)) {
    echo "$A est divisible par $B";
} else {
    echo "$A n'est pas divisible par $B";
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 7</h1>
</body>
</html>
<?php
function trouverDiviseurs($x) {
    $diviseurs = array();
    
    // Parcourir tous les entiers de 1 à X
    for ($i = 1; $i <= $x; $i++) {
        // Vérifier si $i est un diviseur de $x
        if ($x % $i == 0) {
            // Ajouter $i à la liste des diviseurs
            $diviseurs[] = $i;
        }
    }
    
    return $diviseurs;
}

// Utilisation de la fonction pour trouver les diviseurs de 24
$x = 24;
$resultat = trouverDiviseurs($x);

// Afficher les diviseurs
echo "Les diviseurs de $x sont : ";
foreach ($resultat as $diviseur) {
    echo $diviseur . " ";
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 8</h1>
</body>
</html>
<?php
function estPremier($nombre) {
  // Les nombres inférieurs à 2 ne sont pas premiers
  if ($nombre < 2) {
      return false;
  }

  // Vérifier la divisibilité du nombre par tous les entiers de 2 à la racine carrée de ce nombre
  for ($i = 2; $i <= sqrt($nombre); $i++) {
      if ($nombre % $i == 0) {
          return false;
      }
  }

  // Si le nombre n'est divisible par aucun entier entre 2 et sa racine carrée, alors il est premier
  return true;
}

// Exemple d'utilisation
$nombre = 17;
if (estPremier($nombre)) {
  echo $nombre . " est un nombre premier.";
} else {
  echo $nombre . " n'est pas un nombre premier.";
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Algorithme 9</h1>
</body>
</html>
<?php
function sommeChiffres($n) {
    $somme = 0;

    // Convertir l'entier en chaîne de caractères
    $chiffres = strval($n);

    // Parcourir chaque chiffre de la chaîne
    for ($i = 0; $i < strlen($chiffres); $i++) {
        // Ajouter chaque chiffre à la somme
        $somme += intval($chiffres[$i]);
    }

    return $somme;
}

// Exemple d'utilisation
$nombre = 12345;
$somme = sommeChiffres($nombre);
echo "La somme des chiffres de $nombre est : $somme";
?>
