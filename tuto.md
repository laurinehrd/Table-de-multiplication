## Création d'un formulaire

Pour créer un formulaire, il faut utiliser la balise ```<form>```. Dans l'attribut «action», on donne le nom de la 2ème page où sera traité les informations sélectionnées. On sera alors redirigé vers la page «table_choisie.php».
```
<form class="" action="table_choisie.php" method="post">
```

## Création de la boucle des tables de multiplication
```
for ($i = 1; $i <= 10; $i++)
```
La variable «$i=1» correspond à la table de multiplication 1.
«$1 <= 10;» signifie que nos tables de multiplication vont aller jusqu'à 10.
«$i++» veut dire qu'on incrémente de +1 la valeur i, c'est-à-dire à la table de multiplication de 1, pour aller jusqu'à 10.

```Echo 'Table de multiplication de '.$i.'<br>';
```
Pour afficher le titre de la table.

```
for ($j = 1; $j <= 10; $j++)
```
Ceci est la boucle à l'intérieur de la table choisie.
«$j = 1» est la création d'une variable j qui correspond aux calculs de cette table.
«$j <= 10» pour afficher les calculs jusqu'au nombre 10.
«$j++» pour incrémenter de +1 à chaque nouveau calcul, c'est-à-dire pour calculer jusqu'au nombre 10 de cette table choisie.

```
echo $i.' x '.$j.' = '.$i*$j.'<br>';
```
Pour afficher les signes « x » et « = » entre chaque variable : la variable i qui correspond au numéro de la table, et la variable j qui correspond au chiffre que l'on va calculer sur cette table.

### Code entier de la boucle qui affiche toutes les tables
```
for ($i = 1; $i <= 10; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}
```
