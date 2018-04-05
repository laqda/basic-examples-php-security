Exemple basique d'utilisation d'une vulnérabilité CSRF

### Déroulement de l'exemple

1. Ouvrir deux sessions web vierges (ex: navigation privée, containers firefox, ...)

2. Sur la première, tester les URLs suivantes :
    - _/index.php_
    - _/delete_users.php_
    - _/ma-super-page-que-tu-devrais-aller-voir.html_

3. Sur la deuxième:
    
    3.1. Se connecter avec les identifiants suivants sur la page _index.php_ :
    - email: test@test.com
    - password: secret
    
    3.2. Revenir sur index.php, constater la connexion
    
    3.3 Simuler la réception du lien de la page _ma-super-page-que-tu-devrais-aller-voir.html_ et accéder à la page
    
    3.4 Observer la perte des données de la table **users**
    
### Database

#### Pour une utilisation avec la configuration par défaut 

1. créer une base de données mysql sous le nom de **example_csrf**
2. importer les tables avec le fichier _example_csrf.sql_

#### Sinon

modifier l'objet PDO dans _index.php_ et _delete_users.php_