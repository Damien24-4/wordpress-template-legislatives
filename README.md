# Thème Législatives Insoumises

## Choses notables

* Dans "Apparence > Personnaliser > FI 2017" il est possible de définir les infos de base pour afficher l'en-tête d'accueil.
  Cet en-tête ne s'affiche que sur la page d'accueil, si celle-ci n'utilise pas le template "Accueil" ou le template "Zone bleue uniquement" et s'il n'est pas désactivé dans les paramètres de personnalisation du thème.
* Le template de contenu "Zone bleue uniquement" correspond à la home de https://lafranceinsoumise.fr
* Le template de contenu "Accueil" permet d'utiliser l'image mise en avant comme fond et le texte comme contenu de la barre positionnée sur l'image. Il permet donc de faire une page d'accueil différente du modèle fourni par l'en-tête.
* Il y a trois zones pouvant accueillir des widgets :
  * Barre latérale : la barre latérale droite sur les pages qui en disposent
  * Zone bleue avant pied de page : la zone bleue en base de page avant le footer
  * Pied de page : le footer tout en bas de page
* Il y a quatre zones pouvant accueillir des menus :
  * Menu blanc : barre blanche à droite du logo sur toutes les pages
  * Menu rouge : barre orange sous la Navigation Primaire
  * Zone bleue uniquement - Gauche : espace à gauche de la zone bleue sur le template "Zone bleue uniquement"
  * Zone bleue uniquement - Droite : espace à droite de la zone bleue sur le template "Zone bleue uniquement"

# Contribuer

## Développement

Thème basé sur https://github.com/roots/sage. Se référer à la [documentation](https://roots.io/sage/docs/theme-installation/) pour l'installer et le modifier.

## Release

Pour créer une nouvelle version :

* [modifier le fichier `CHANGES.md` (changelog)](https://github.com/insoumis-local/wordpress-template-legislatives/blob/master/CHANGES.md)
* [modifier le fichier `style.css` (version)](https://github.com/insoumis-local/wordpress-template-legislatives/blob/master/style.css)

En cas de doute sur le numéro de version, se référer à [semver](http://putaindecode.io/fr/articles/semver/). La mise à jour sera ensuite détectée par chaque site grâce au plugin `github-updater`.
