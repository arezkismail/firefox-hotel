# Application de recherche d'hôtels

Cette application présente plusieurs fonctionnalités:
	-Identification de la position du client
	-Recherche de villes par pays
	-Itinéraire sur carte entre les deux points
	-Itinéraire libre

## Obtention

il y a plusieurs moyens d'utiliser cette application

Si vous utilisez [Git](http://www.git-scm.com/):

````bash
git clone https://github.com/arezkismail/firefox-hotel
````

Ou téléchargez la dernière version en [ZIP file](https://github.com/arezkismail/firefox-hotel/archive/master.zip).


## Utilisation

lancez le fichier index.html ou importez-le dans un simulateur firefox OS.

## Parcours du code

Le fichier `manifest.webapp` contient les métadonnées à propos de l'application, comme son nom, sa description, son icône et les permissions requises pour le faire fonctionner sous Firefox OS.

Sur `index.html`, on lance l'application, et c'est ici qu'on appelle les fichiers javascript

L'apparance est définie dans `css/app.css`. Les vues sont très basiques

```javascript
var translate = navigator.mozL10n.get;
```

## Contributions

les contributions sont toujours les bienvenues! Si vous voulez collaborer, on vous recommande de...

1. Voir le [issue tracker](https://github.com/arezkismail/firefox-hotel/issues) regardez si personne ne travaille dessus
* Si c'est ue nouvelle issue, forkez.
* Créez le bug si vous en trouvez un.
* Clonez votre fork sur le Desktop
* Faites une branche
* faites les changements
* Faites un push
* Envoyez un pull request

Pour merge plus facilement, créez une nouvele branche à chaque fonctionnalité.
