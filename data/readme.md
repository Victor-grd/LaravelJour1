Certification DWM

-Mon CRUD permet de ce gérer les stocks d'un magasin de musique (mieux que deezer).
  le Create est OK
  le Read   est OK
  le Update est OK
  le Delete est OK

-Il est capable de gérer le nombre de produit en stock, mais pour le modifier il faut passer par       Update, on ne peut pas le faire depuis la liste.

-Mon Laravel est facil d'utilisation et agréable a l'oeil

-Il est possible de s'enregistrer et se loger, meme si la gestion des connextions n'est pas           optimiser au maximum.

-Même si il est inutile, un code konamie est présent.

-Les couleur sont Magnifiques.

-J'ai essayer mais je n'es malheureusement pas reussis a faire le many to many.


Je me suis aider de ma doc d'installation de laravel et de git:
(Certain élément de la doc on été partager dans la slack durant la formation, on est peut etre plusieurs a l'avoir utiliser pendant la validation).

LARAVEL                                                 
——————————————————————————————————————————————————————————————————————————————————————————
ETAPE 1 Créé une vagrant

1. vagrant init
2. nano vagrantfile
    1. Modifier le config.vm.box par un ubuntu/xenial64
    2. Decommenter le config.vm.network et changer l’ip
    3. Decommenter le config.vm.synced_folder et changer le « ../data » par un « ./data », « /var/www/html »
3. mkdir data
4. vagrant up

pour afficher les erreurs: (en php7.0)
vagrant ssh
sudo nano /etc/php/7.0/apache2/php.ini
puis chercher (control « W ») display_startup_errors = Off      et le passer a ON
puis taper sudo service apache2 restart

———————————————————————————————————————————————————————————————————————————————————————————

ETAPE 2  (by jon)

vagrant ssh
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php7.2 php7.2-common php7.2-cli php7.2-fpm
sudo apt install libapache2-mod-php7.2
sudo apt install mysql-server
sudo apt install php7.2-mysql
sudo apt install php7.2-mbstring
sudo apt install php7.2-dom
sudo nano /etc/apache2/envvars
	-> Vous trouverez votre nom d’utilisateur en faisant un « ls -la » ou il apparaît devant le @ dans le 		« vagrant@ubuntu-xenial »
	 -> Dans ce fichier changer les deux « www-data » par le nom d’utilisateur (souvent « vagrant » pour nous)
    
sudo rm /var/www/html/index.html
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer
sudo apt install zip
cd /var/www/html
composer create-project --prefer-dist laravel/laravel ./	*si erreur, recomencer a 0*
sudo nano /etc/apache2/sites-available/000-default.conf
    -> Changer la ligne : « DocumentRoot /var/www/html» par « DocumentRoot /var/www/html/public »
    -> et ajouter :	

<Directory /var/www/html>
 Options Indexes FollowSymLinks MultiViews
 AllowOverride All
 Require all granted
</Directory>

sudo a2enmod rewrite
sudo service apache2 restart

Si erreur 500 :
sudo apt remove php*
sudo apt autoremove
sudo apt install php7.2

composer require "laravelcollective/html":"^5.4.0"

créé une database mysql
mysql -uroot -p0000
create database laravel;
exit
sudo service apache2 restart

authentification:
php artisan make:auth

1er chose a faire: modifier .env avec
.env : editer dans data->.env
	DB_DATABASE=/nom de la database créé/
	DB_USERNAME=root
    DB_PASSWORD=0000  
     
php artisan make:migration create_/OBJET/_table
php artisan migrate

ne pas oublier le model :
php artisan make:model /Objet/
use App\Musique as Musique;

——————————————————————————————————————————————————————————————————————————————————————————

Utilisation de Git :

Préliminaire :
Se créer uun compte github
noter ses identifiants
creer un nouveau repository(ou repo) et copier l'adresse de ce dernier

Ouvrir l'invite de commande
 si on veut commit/push "dossier.txt", qui se trouve a cet emplacement :
 "/Users/admin/desktop/project/dossiers.txt"
 on se place dans le dossier "project/"

initialisation de git :
 git init
 git config user.email "(votre email)"
 git config user.name "(votre nom d'utilisateur)"
 //initialise git et vous identifie

 git clone adresse du repo
 git remote add origin l'adresse du repo
 //initialise le repo dans lequel vous travaillerez

A ce stade, git est (normalement) complètement initialisé

Il est nécessaire de faire des "commit" de votre code regulièrement.
Un commit est une copie/capture d'écran de votre code. Les commits sont stockés en LOCAL.

 git add dossier.txt
 //git add ajoute les fichier dont vous voulez faire un commit
 //options interessantes :
 //  - git add * //ajoute tout les fichier du dossier courant
 //  - git add *.qqchose //ajoute tout les fichier se terminant par ".qqchose" du dossier courant
 //il est possible d'ajouter un fichier particulier en faisant - git add lefichier.particulier

 git commit -m "message de commit"
 //fait la copie des fichier ajouté avec git add précedemment
 //il est conseillé de détailler les modification dans le message de commit

Vous pouvez maintenant push les commit fait.
/!\ S'il est recommandé de faire plusieurs commit par jour, un seul push par jour (le soir avant de partir par exemple) est largement suffisant !

 (necessite une connexion internet)
 lors du premier push :
   git push -u origin master (enregistre les parametre de push)
 pour les push suivants :
   git push

////POUR CEUX QUI VEULENT SE SERVIR DES BRANCHES////
https://learngitbranching.js.org/

Pour créer une nouvelle branche
 git branch newBranch

Pour changer de branche
 git checkout newBranch

Pour merge, se mettre sur la branche a merger :
 git merge master
 ———————————————————————————————————————————————————————————————————————————————————————————
 http://www.css3maker.com/css3-transform.html

https://laravel.com/docs/master

https://laravelcollective.com/docs/5.4/html

https://pixabay.com/

https://laravel.com/docs/4.2/schema
 ———————————————————————————————————————————————————————————————————————————————————————————