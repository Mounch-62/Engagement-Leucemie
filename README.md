# Back de "Engagement leucemie"

Ce repositorie contient le code source du back office du site engegement leucemie.

## Instalation

Pour travailler sur ce repositorie, il vous faut déjà en crée un fork. Une fois ceci fait, cloner le depot sur votre poste.

```
git clone git@github.com:[votre_utilisateur]/back.git
cd back
```

Ensuite, installer les dépendances :
```
composer install
```

/!\ Attention de ne pas faire un `composer update` car ceci pourrait compromaitre les dépendances du projet.

```
npm install
```

## Lancement du projet
Enfin, il n'y as plus qu'à lancer le projet : 

```
npm run dev
```

Et dans un autre terminal
```
php artisan serve
```