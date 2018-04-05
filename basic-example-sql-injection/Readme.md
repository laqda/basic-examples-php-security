Exemple basique d'injection SQL dans un formulaire php

### Requêtes tests

- email : "test@test.com"  ; password : "secret"
- email : "test2@test.com" ; password : "secret2"
- email : "' OR '1'='1"    ; password : "' OR '1'='1"
- email : "' OR '1'='1"    ; password : "' OR '1'='1"

### Database

#### Pour une utilisation avec la configuration par défaut 

1. créer une base de données mysql sous le nom de **sql_injection**
2. importer les tables avec le fichier _sql_injection.sql_

#### Sinon

modifier l'objet PDO dans _index.php_