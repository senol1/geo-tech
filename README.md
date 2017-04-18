# geo-tech
Géo-Tech est un projet de web (symfony+angular)
Développement d’un système de géolocalisation pour assurer la sécurité des voitures louées dans notre futur plateforme dédiée

Tu y trouveras un dossier à savoir :

-rest_api : c'est l'api rest

Donc tu devras(@Khadime) créer un dossier en parralèle pour la partie front-end

document d'analyse et de conception :
https://docs.google.com/document/d/13g_JoD6F4cBJNbx_4q4IGWRBi_fn8_16nZ3e6xC3jFg/edit

nom de la base de données : geotech (disponible sur la racine du projet)

Installation de l'api_rest: composer install


Exécution de copie locale
Pour exécuter une copie locale en mode développement,  exécuter:

npm start
Aller à http://0.0.0.0:3000 ou http: // localhost: 3000 dans votre  navigateur.

Pour exécuter la copie locale en mode de production et de construire les sources,  exécuter:

npm run prebuild:prod && npm run build:prod && npm run server:prod
Cela effacera votre dossier dist (où les fichiers de libération sont situés),
générer une version release et démarrer le serveur intégré. Maintenant ,
vous pouvez copier les sources du distdossier et de l' utiliser avec un cadre de back - end
ou simplement le mettre sous un Web  serveur.

Pour obtenir des informations plus sur la création d' une construction,
s'il vous plaît vérifier Angular2 Webpack Starter  documentation