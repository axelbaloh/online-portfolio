# Projet Portfolio
Ce projet est une application Laravel configurée pour fonctionner **sans base de données**, hormis celle requise pour l'installation de l'application Laravel.
Cette application est donc un portfolio servant de site vitrine de mes compétences.
Ce site contient une page d'accueil comportant une présentation de mon parcours, mes expériences professionneles et de mes certifications.
Il contient également quatre pages pour chaque "catégorie" de compétence :
-Développement Web
-Dispositifs Intéractifs
-UX
-Gestion de projet
Il est également possible depuis le footer d'accéder à mes comptes Linkedin et Github, ainsi que de m'envoyer un mail et de télécharger mon CV

## Prérequis

Avant de commencer, assurez-vous d’avoir installé :

- PHP >= 8.2
- Composer
- Node.js & npm
- Git

## Installation du projet

### 1. Cloner le projet

```bash
git clone https://github.com/votre-utilisateur/votre-projet.git
cd votre-projet
```

### 2. Cloner le projet

```bash
composer install
```

### 3. Installer les dépendances frontend

```bash
npm install
npm run dev
```

### 4. Installer les dépendances frontend

#### Copier le fichier .env
```bash
cp .env.example .env
```

#### Générer la clé d'application 
```bash
php artisan key:generate
```

### 5. Lancer le projet 
```bash
php artisan serve
```




