
# TP 02 - PHP : Programmation Web 2

- **Nom :** MOUDDOU
- **Prénom :** Fatima
- **Groupe :** G2
- **Année :** 2026/2027


----

## Instructions d'exécution
Lancer le serveur de développement PHP local à la racine :
```bash
php -S localhost:8000
## Réponses aux questions théoriques

### Exercice 2 : Variables, casse et identifiants
1. **Sensibilité à la casse :**  
   En PHP, les variables sont sensibles à la casse (*case-sensitive*). Les identifiants `$note` et `$Note` représentent donc deux variables différentes stockées dans deux emplacements mémoire distincts.
2. **Validité des identifiants :**
   - **Noms valides :**  
     - `$a` : commence par une lettre minuscule.  
     - `$_a` : commence par un caractère de soulignement (*underscore*).  
     - `$a_a` : contient des lettres et un trait de soulignement.  
     - `$AAA` : composé uniquement de majuscules.  
     - `$a1` : contient un chiffre après une lettre.  
   - **Noms invalides :**  
     - `$1a` : invalide car un nom de variable ne peut jamais commencer par un chiffre.  
     - `$a!` : invalide car le point d'exclamation `!` est un caractère spécial interdit dans un nom de variable.

---

### Exercice 4 : Affichage des booléens (`false` avec `echo` vs `var_dump`)
- **Avec `echo` :**  
  L'instruction `echo` transtype la valeur booléenne en chaîne de caractères (`string`). La valeur `true` est affichée sous la forme `"1"`, tandis que `false` est convertie en chaîne vide `""` (rien n'apparaît à l'écran).
- **Avec `var_dump()` :**  
  La fonction `var_dump()` inspecte la structure interne de la variable et affiche son type exact ainsi que sa valeur : `bool(true)` et `bool(false)`.

---

### Exercice 5 : Vérification des valeurs limites (Moyenne)
- `moyenne = -1`  : **Note invalide** (inférieure à 0)
- `moyenne = 9`   : **Moyenne 9 : Non validé** (inférieure à 10)
- `moyenne = 10`  : **Moyenne 10 : Passable** (intervalle [10, 12[)
- `moyenne = 12`  : **Moyenne 12 : Assez bien** (intervalle [12, 14[)
- `moyenne = 14`  : **Moyenne 14 : Bien** (intervalle [14, 16[)
- `moyenne = 16`  : **Moyenne 16 : Très bien** (supérieure ou égale à 16)
- `moyenne = 21`  : **Note invalide** (strictement supérieure à 20)

---

### Exercice 10 : Différences entre GET et POST
1. **Transmission des données :**  
   - **GET :** Les données saisies sont transmises directement dans l'URL après un point d'interrogation sous la forme de paramètres visibles (ex. `?nom=valeur&prenom=valeur`).  
   - **POST :** Les données sont encapsulées dans le corps (*body*) de la requête HTTP ; elles ne sont pas concaténées à l'URL.
2. **Visibilité et historique :**  
   - En **GET**, les paramètres sont visibles dans la barre d'adresse et enregistrés dans l'historique du navigateur ainsi que dans les logs du serveur.  
   - En **POST**, les données ne sont pas visibles dans l'URL ni stockées dans l'historique, ce qui est obligatoire pour transmettre des données sensibles (mots de passe, formulaires de connexion).
3. **Usage recommandé :**  
   - **GET** est utilisé pour les opérations de consultation, de lecture ou de recherche (requêtes idempotentes).  
   - **POST** est utilisé pour l'envoi de données modifiant l'état du serveur (création, modification, téléversement de fichiers).
