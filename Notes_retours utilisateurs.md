**Note d'une personne utilisan Evoliz comme logiciel de gestion des devis et de gestion de sa micro entreprise**

**Lexique :**

- pré-fait : cela veut dire que les champs sont rempli par l'utilisateur au préalable à sa façon avec la possibilité de choisir quoi et ou est disposé des informations en lien avec le client (par exemple dans les mail, l'utilisateur va choisir où le nom de l'entreprise est citée, où son numéro est écrit, etc...)
- Automatiquement rempli : L'ensemble des champs avec des détails variables d'un objet pré-fait sont rempli en fonction du client/contact choisi.
- preset : objet pré-enregistré avec des champs pré-rempli, cela fait référence à pré-fait mais avec une dimention plus grande avec plus de champs.



**La personne possède un tableau de bord avec :**

- Un historique de son chiffre d'affaire ainsi que des graphiques supplémentaires (les graphiques supplémentaires sont peu utilisés)
- Des statistiques sur ses dépenses et achat à la façon d'un graphique en cascade
- Possession d'un CRM : chose que la personne à principalement appuyé :
  - L'ensemble des dossiers du logiciel sont disposé sur une fenêtre avec la possibiliter de cliquer dessus pour avoir les détails du dossier.
  - La chose voulu ressemble à des Issues dans un style GitLab, GitHub ou Trello
  - **Points négatif** :
    - Pas ergonomique 
    - Il faut pouvoir déplacer les dossier d'une colone à une autre à la manière d'un trello lorsqu'un dossier passe d'un état à un autre



**En ce qui concerne la création des devis : **

- il y a moyen de mettre une référence à un preset de devis, afin de préformuler le devis en ce qui concerne les texte principaux
- Il existe aussi des preset pour ajouter des groupes de produits ou services sans les ajouter à la main
- Auto remplissage des emplacement en lien avec le client
- <u>En ce qui concerne la création d'un devis : voici le schéma type :</u>
  - Inscription du nom du client
    - Cela propose une auto complétion des champs si le client appartient à la base de donnée
      - ces champs sont : 
        - Adresse d'un contact des contact du client
        - Adresse de facturation
        - Pays du client
        - Taxes en lien avec le pays en question
        - plusieurs autres champs dont je ne me souvient pas
  - Ajout des informations supplémentaires si besoin (tout type d'information)
  - Ecriture du texte du devis (Preset possible)
  - Ajout d'une ligne (l'un des choix)
    - Ajout des différent produit/service
      - Chaque produit à une référence de produit pour l'interne de la boite
      - Description du produit/service ainsi qu'une description pour sa pause ou la méthode utilisé
      - Prix unitaire Hors taxe
      - Nombre de produit/service
      - Marge individuelle par produit (possible de la supprimer pour mettre une marge sur l'ensemble du devis)
      - Réduction individuelle par produit (possible de le supprimer pour retirer la marge ou de faire une marge sur l'ensemble du devis)
    - Ajout de groupe 
      - Ajout d'un preset de plusieurs lignes de produits avec les marges, références, descriptions, réductions, nombre ect
    - Un saut de page pour séparer si il y a besoin d'une page par produit ou une page par type de produit ou autre....
  - Ajout ou non de réductions ou marges de l'ensemble du devis
  - Envoi par mail du devis à un ou plusieurs contact pour le client
    - Le message de mail doit être pré-enregistré et doit pouvoir être automatiquement rempli dépendant du client et du service rendu.
    - Le mail doit pouvoir être modifiable si besoin (si il y a des erreurs ou des précision à faire)
- Le devis est automatiquement transmis dans un dossier nouvellement créé avec numéro de dossier et état par défaut : brouillon (envoyé si le mail à été envoyé)
  Le devis est directement visible dans le CRM.
- Il y a la possibilité de relancer les clients automatiquement ou manuellement par des mail pré-fait et automatiquement rempli 

En ce qui concerne l'ensemble des marges et tarifications des produits, cela permet de prévoir les pertes et la marge totale à la fin du devis, donc cela est très important.

Le client doit pouvoir avoir un chat de discussion avec un utilisateur du logiciel afin de corriger/discuter ou négocier avec des choses en lien avec le devis.

Lorsqu'un devis est accepté il passe en Commande, ce qui ne change pas grand chose pour le logiciel. (en apparent)
Dans le CRM, l'utilisateur doit pouvoir suivre les commandes et leurs états.

**Chose voulu par l'utilisateur :**

- Possibilité d'avoir un contact rapide avec le support pour des demandes avec les devs
- Si un dossier est en état de commande alors l'utilisateur peut commander soit :
  - L'ensemble des produits d'un coup directement à ses fournisseur
  - Sélectionner les lignes avec seulement les produits qui intéressent (parce que les autres seraient en stock)
  - Commander les produits qui manque directement via un bouton
- Possibilité de gérer automatiquement les prix des produits fournisseur afin d'actualiser ces derniers pour ne pas à actualiser manuellement le prix fournisseur des près de 1 000 produits
  - Pour gérer les prix, cela va garder la marge que l'utilisateur aura fixé et ainsi calculer le prix avec marge automatiquement
  - le prix unitaire HT fournisseur, la marge et le prix avec la marge doivent être visibles
- Avoir la possibilité de relancer automatiquement les clients qui ne paient pas après un certain temps ou aussi avoir la possibilité d'avoir un bouton pour relancer tout les clients 
  - Les relances se font par mail avec les des mail auto-rempli dépendant du contact et du client
- Avoir la possibilité de générer des textes automatiques pour l'envoi de goodies, lettres de remerciement ou autres (à tout les clients ou que à certaines étant sélectionnés)
- Avoir la possibilité d'exporter les données de l'ensemble des articles sous forma excel.
  - Ainsi que d'avoir l'ensemble des données de ces articles dans ce excel (référence que l'utilisateur à donné, description, référence fournisseur, date de mise à jour, prix, marge, prix après marge, données supplémentaires )
- La possibilité de lier les comptes bancaires de la boite pour pouvoir suivre son solde
- **Système de lecture de facture**
- L'ensemble du logiciel doit pouvoir être accessible depuis une page web par ordinateur, téléphone portable ou tablette.
- Le logiciel doit être liable à DropBox afin de générer une base de donnée de secours en cas de problème avec des données régulièrement mis à jours (tous les jours, pas trop souvent non plus afin de ne pas saturer le réseau ect)
- Le logiciel doit pouvoir être liable à d'autres logiciel (à la façon de twitch pouvant être liable à steam ou autre...)
- Le logiciel doit pouvoir prendre en compte les frais de déplacement 
  - Soit pour se rembourser soi si les trajets sont à frais de l'entreprise
  - Soit pour demander un remboursement au client afin de rembourser les frais de trajets



**Lecture de facture**

L'utilisateur veut un système permettant de lier un client à un preset de facture, ainsi, en scannant la facture et en liant le client, le logiciel va automatiquement détecter les champs et les enregistrer dans la base de donnée pour pouvoir les comptabiliser dans le logiciel et les envoyer au comptable qui va permettre de faire son travail plus simplement.

Le système sera en deux parties, la partie enregistrement d'un preset et partie lecture d'une facture :

​	<u>Partie enregistrement</u>

L'enregistrement se suivra le schéma suivant :

- Choix du client
- Scan de la facture
- Pour tout les champs
  - Choix du champ
  - Définition de la zone à "regarder"
  - Définition du forma si cela en à besoin (notament les dates et les prix)
- Vérification que sur la facture scanée les données sont bien enregistré

Le preset de facture sera donc compté comme nouveau pour un nombre d'utilisation déterminée par l'utilisateur

​	<u>Partie lecture de facture</u>

La lecture d'un preset "nouveau" suivra le schéma suivant :

- Ajout de facture
- Scan de la facture
- Choix du client (choix du preset si le client possède plusieurs types de factures différentes)
- Vérification que les champs sont bien enregistrés
- Correction des champs si besoin
- Si de grosses erreurs sont présentes, enregistrer la facture comme "lecture défaillante" afin qu'un développeur puisse vérifier le problème avec l'utilisateur
- Enregistrement de la facture dans la base de donnée avec toutes les données

Durant le processus de la lecture, les données doivent être enregistrés sur un fichier temporaire, afin de prévoir les crash ou déconnections qui pourraient faire perdre la progression

