# **Description complète du projet**

## Sommaire



- [Lexique](#lexique)
- [Description générale](#description-générale)
- [Fonctionnalités](#fonctionnalités)
- [Informations supplémentaires](#informations-supplémentaires)
- [Annexe et schéma](#annexe-et-schéma)



## Lexique

- pré-fait : cela veut dire que les champs sont rempli par l'utilisateur au préalable à sa façon avec la possibilité de choisir quoi et ou est disposé des informations en lien avec le client (par exemple dans les mail, l'utilisateur va choisir où le nom de l'entreprise est citée, où son numéro est écrit, etc...)
- Automatiquement rempli : L'ensemble des champs avec des détails variables d'un objet pré-fait sont rempli en fonction du client/contact choisi.
- preset : objet pré-enregistré avec des champs pré-rempli, cela fait référence à pré-fait mais avec une dimension plus grande avec plus de champs.
- Tout ce qui est **<u>en gras souligné</u>** est une chose à préciser avec les discussions client.
- Utilisateur : La personne utilisant le logiciel (l'utilisateur est aussi le client du projet, dans ce document, le client fait référence à autre chose)
- Client : Le client de l'utilisateur

**<u>Partie à valider</u>**



## Description générale

L'outil attendu est un CRM amélioré - Customer Relationship Management ou Gestion de relation client. Cet outil possède davantage de fonctionnalités que un CRM classique ainsi que des fonctionnalités en moins pour pouvoir se conformer aux besoin d'une micro-entreprise. (1 compte = 1 entreprise, pas de gestion de comptes et d'accès au sein d'une entreprise)

Cet outil doit répondre à plusieurs critères :

- Gestion des produits
- Gestion des devis semi-automatisé
- Gestion de la relation client
- Gestion du chiffre d'affaire
- Gestion des factures
- Gestion des stock
- **<u>Voir si il reste des choses à ajouter</u>**

**<u>Partie à valider</u>**



## Fonctionnalités



### **Fonctionnalités générales**

- Un bouton d'appel support dev

  - Il doit permettre d'avoir un retours rapide d'un ou plusieurs dev 

- Un bouton de déconnection

- Un bouton d'aide pour avoir accès à la documentation

- Une barre d'outils pour accéder à l'ensemble des fonctionnalités du logiciel

- Une bulle pour les discussions en cours

- L'ensemble du logiciel doit pouvoir être accessible depuis une page web par ordinateur, téléphone portable ou tablette.

- Le logiciel doit être liable à DropBox afin de générer une base de donnée de secours en cas de problème avec des données régulièrement mis à jours (tous les jours, pas trop souvent non plus afin de ne pas saturer le réseau ect)

- Le logiciel doit pouvoir être liable à d'autres logiciel (à la façon de twitch pouvant être liable à steam ou autre...)

  - **<u>A compléter :</u>** Il faut savoir à quel autre logiciel ou service l'outil doit être liable 

  

**<u>Partie à valider</u>**



### **Fonctionnalités du tableau de bord**

- Disposition du chiffre d'affaire actuel et graphique supplémentaires pour afficher la progression du chiffre d'affaire
- Des statistiques sur ses dépenses et achat à la façon d'un graphique en cascade



**<u>Partie à valider</u>**



### **Fonctionnalités du système de gestion des dossiers**

- Tableau interactif possédant des dossiers
  - Les colonnes correspondent aux états des dossiers
  - Dans chaque colonnes, un dossier se représente sous forme d'une case cliquable
    - Si on clique cela permet d'ouvrir la description du dossier pour le modifier ou le consulter
  - Chaque dossier peut être glissé d'une colonne à une autre
  - Cela sera dans un style de Github ou Trello
- Un bouton pour relancer les clients n'ayant pas payé ou ne répondant pas à l'envoi d'un devis
- Pouvoir sélectionner la liste des dossier pour relancer ces dossiers là et non les autres
- Pouvoir automatiquement relancer les clients n'ayant pas payé
- Point important à mettre sur l'ergonomie
- Les Mail automatique :
  - Le mail est pré-enregistré et contient des champs variables et des champs fixes,  lors de l'envoi du mail, les champs variables sont automatiquement rempli en fonction du client et du contact.
  - Le mail doit pouvoir être modifiable si besoin (si il y a des erreurs, des précision ou changement à faire pour des clients spécifique)
- Le client, lorsqu'il reçois le mail, ce dernier possède un lien qui redirige vers le devis, sur cette page il y a :
  - Le lien de la page ne doit pas permettre de retrouver d'autres devis
  - Un bouton pour accepter ou refuser le devis
  - Une zone de tchat pour discuter ou négocier le devis avec l'utilisateur 
- **<u>A vérifier du comportement voulu lorsque le devis est changé suite à des négociations ou discussions (Si on renvoi un mail ou si c'est juste le document dans le premier mail qui change)</u>**



**<u>Partie à valider</u>**



### **Fonctionnalités sur la création de devis**

- Preset des [informations clients](#informations-d'un-client)
- Modifier les informations clients après le preset 
  Ou ajouter les informations à la main si le client n'existe pas
- Ajouter à la main des lignes ou saut de page pour séparer groupes de produit/service
- Remplissage automatique des informations de l'utilisateur
- Création automatique d'un dossier avec numéro de dossier et état par défaut "brouillon", ou "devis en attente" si le mail à été envoyé
- A la fin de la création du devis, ce dernier est sous forma PDF et est envoyé par mail, téléchargé ou imprimé.
  Il peut être ré-accessible à tout moment dans le dossier.
- [Schéma de création d'un devis](#schéma-de-création-d'un-devis)
- Après la création d'un devis, si le client n'existe pas dans la base de donnée et/ou que les contact non plus, alors une fenêtre propose de sauvegarder ces informations avec la possibilité de sélectionner quoi enregistrer
  - Les choix seront :
    - Enregistrer le client ou non (ne pas l'enregistrer ferait perdre aussi les informations de contact)
    - Si le client est enregistré alors il peut choisir quel contact enregistrer aussi (il peut en choisir aucun, comme qu'un certain nombre, ou bien tous)
    - Si le client est enregistré mais que les contact  ne le sont pas, cela ne pose pas de soucis, lorsque les informations seront utilisés pour former un nouveau devis, les informations de contact ne seront juste pas présente..

**<u>Partie à valider</u>**



### **Fonctionnalités en lien avec les commandes**

- Pouvoir commander des produits d'une commande
  - Soit la totalité
  - Soit uniquement celles sélectionnées
  - Soit uniquement celles manquantes (si gestion des stock)

**<u>Partie à valider</u>**

**TODO : là où j'en suis sur la retranscription dans les backlogs**

### **Fonctionnalités sur la gestion des stock**

Cette fonctionnalité n'est pas une fonctionnalité prioritaire !

- Dès qu'un produit est commandé
  - il est ajouté dans les stock
  - il n'est pas considéré comme faisant parti des stock si la commande qui est en lien est encore valide
  - si la commande est annulé et que le produit n'est pas renvoyé alors il passe comme disponible dans le stock

**<u>Partie à valider</u>**



### **Fonctionnalités sur la gestion des produits** et services

- Chaque produit doit pouvoir être stocké dans une base de donnée avec son [ensemble d'information](#informations-sur-un-produit) 
- Les prix fournisseurs doivent être actualisé suivant une période de temps défini (soit dans le code soit dans les paramètres)
- **<u>A valider :</u>** Historique des prix (pour pouvoir vérifier et éviter des changement brusque de certains fournisseurs ou autre)
- Exporter l'ensemble des données des produits et/ou services sous forma Excel 
  - Pouvoir sélectionner les quels types de données récupérer :
    - Produit et/ou services
    - sélectionner les informations à exporter (Référence fournisseur, prix fournisseur, marge, prix minimal, description, etc...)

**<u>Partie à valider</u>**



### **Fonctionnalités sur la gestion des factures**

- [Pouvoir définir un (ou plusieurs) preset de facture pour chaque entreprise](#création-du-preset)
- [Scanner les factures, définir quel preset, et cela ressort les bon résultats](#lecture-d'une-facture)
- Chaque facture scannée est envoyé sous un bon forma au comptable



### **Fonctionnalités autre**

- Pouvoir générer des mail automatique ou générique à tout les anciens client pour les remercier (en évitant de le renvoyer à ceux l'ayant déjà reçus)
- Pouvoir générer des lettres/colis automatiquement en y mettant des goodies pour les envoyer aux anciens clients (en évitant les doublons)
- Lier le compte bancaire de l'entreprise pour : 
  - Extraire les informations des entrées et sorties pour afficher le chiffre d'affaire
  - Faire un suivis des entrées et sorties de l'entreprise
  - Passer les commandes des produits
- Il faut pouvoir générer des factures de déplacement ces derniers sont :
  - Aux frais de l'entreprise
  - Aux frais du client







## Informations supplémentaires



### **Informations d'un dossier**

- Numéro de dossier
- Titre de dossier (Titre du devis)
- Informations du client
- Devis en lien avec le dossier
- L'état du dossier 

  - Brouillon
  - devis en attente
  - devis accepté
  - commande en cours de réalisation
  - commande réalisée
  - Commande payée
  - Commande annulée
  - D'autres états peuvent être ajoutés, ce ne sont que des exemples.
    Un dossier n'a qu'un état à la fois, et n'est pas sensé revenir en arrière.
    **<u>Voir si la liste des état est bonne</u>**
- L'historique des états avec les dates
- Liste d'étiquettes

  - Ces étiquettes peuvent être pour détailler l'état du dossier ou donner des précisions.
    Une étiquette peut être par exemple "Payé" si une commande est payée mais qu'elle n'est pas encore fini d'être réalisée..

**<u>Partie à valider</u>**



### **Informations d'un client**

Ces informations sont utilisés pour remplir automatiquement avec les preset

- Nom de l'entreprise
- Adresse du siège de l'entreprise
- Informations de contacts (pour chaque contact)
  - Nom et prénom du contact
  - e-mail de contact ou adresse
  - Numéro de téléphone 
- Adresse de facturation
- Pays du client
- Taxes en lien avec le pays en question
- plusieurs autres champs dont je ne me souvient pas

**<u>Partie à valider</u>**



### Informations utilisateur

Ces informations sont utilisés pour être disposés dans les devis ou lettres, elles sont modifiables au cas par cas si certains devis ou lettres en ont besoin et sont modifiable pour le global dans les paramètres. Elles sont utiles si le client à besoin de recontacter l'utilisateur et sont impérative dans le cas d'un devis.
Les informations sont les suivantes :

- Nom de l'entreprise
- Informations de contact
  - Adresse de contact
  - Email
  - Nom 
  - Prénom



### **Informations d'une ligne d'un devis**

#### Les différents types de lignes

​	**Ligne simple** 
Une ligne simple représente un produit ou un service, si l'utilisateur rempli le nom du produit ou sa référence, le logiciel doit pouvoir remplir automatiquement les informations qui sont en lien.

Si le produit n'appartient pas à la base de donnée alors il peut remplir les informations à la main.

​	**Saut de page**
Permet de mettre les lignes suivantes sur une page supplémentaire

​	**Groupe de ligne**
Preset de lignes simple, saut de page ou groupe de ligne permettant d'ajouter rapidement des groupes de produit/service pouvant être régulièrement utilisés

Les groupes de lignes sont éditables dans les settings





#### Informations pour un produit

- Référence du produit (référence que l'utilisateur à donné et non la référence fournisseur)
- Description du produit/service ainsi qu'une description pour sa pause ou la méthode utilisé
- Prix unitaire fournisseur
- Nombre de produit/service
- Marge individuelle par produit
  - **<u>Question sur les marges : si on met une marge sur l'ensemble du devis, cela retire les marges individuelles ou pas ?</u>**
- Réduction individuelle par produit 
  - possible d'ajouter une réduction supplémentaire pour l'ensemble du devis dans la fin du processus de création du devis
- Prix TTC **<u>Question : Seul le prix TTC est affiché sur le PDF ?</u>**

**<u>Partie à valider</u>**



### **Informations sur un produit**

Un produit est stocké avec ces informations :

- Référence fournisseur
- Référence utilisateur
- Nom fournisseur
- Lien du fournisseur/base de donnée ou autre pour retrouver le prix du produit
- Nom du produit
- Description du produit et/ou de son utilisation
- Texte pré-défini qui sera écrit dans un devis (pouvant être modifié manuellement sur le devis sans changer le texte enregistré)
- Prix fournisseur
- Marge de base
- Prix HT après marge (la taxe n'est calculé que lors du devis en fonction de la taxe à appliquer)



Les références fournisseur ne doivent pas être visible par les clients  de l'utilisateur afin que ce dernier ne puisse pas faire jouer la  concurrence ou calculer la marge faite sur le produit. C'est pour cela  qu'il y a une référence fournisseur et une référence utilisateur.
 L'utilisateur va montrer ses références à lui, mais dans la base de donnée il faut que les deux références soient présentes.



**<u>Partie à valider</u>**



### **Information sur les services** 

- Nom du service 
- Référence utilisateur
- Description
- Prix minimal en dessous duquel le service n'est pas  rentable
- Marge
- Prix HT après marge (la taxe n'est calculé que lors du devis en fonction de la taxe à appliquer)



**<u>Partie à valider</u>**





## Annexe et schéma



### **Création de devis**

#### Schéma de création d'un devis

**<u>Partie à valider</u>**

``` mermaid
graph TD
	linkStyle default interpolate basis
	Devis[Devis] --> PresetC{{Inscription du preset client ?}};
	PresetC ----> |Oui| InfoC[Informations client inscrit];
	PresetC --> |Non| InfoCMain[Informations client inscrit à la main];
	InfoCMain --> InfoC;
	InfoC --> Correction[Correction des informations client];
	Correction --> AjoutLigne[Ajout des ligne] 
	AjoutLigne--> MargeReduc[Inscription de la marge générale et/ou de la réduction générale];
	MargeReduc --> CalculsPrix[Calcul des tarifs du devis];
	CalculsPrix --> |Réajustement si besoin| MargeReduc;
    CalculsPrix --> Envoi[Envoi au client avec mail pré-rempli];
    Envoi --> ImpressionQ{{Impression du devis ? }};
    ImpressionQ --> |Oui| Impression;
    
    
```

 



#### Schéma d'ajout de ligne

**<u>Partie à valider</u>**

```mermaid
graph TD
	linkStyle default interpolate basis
    AjoutLigne[Choix du type de ligne];
    AjoutLigne ----> PresetL[Lignes de groupes];
    AjoutLigne -----> LigneSimple[Ligne simple];
    AjoutLigne ----> SautPage[Saut de page];
    LigneSimple ----> LigneAjoutee;
    SautPage ----> LigneAjoutee
    PresetL ----> LigneAjoutee;
    LigneAjoutee ---> Verif[Vérification des prix];
    Verif -->|Ajout d'une ligne supplémentaire| AjoutLigne;
    Verif ==> |Pas d'ajout supplémentaire| Fin;
```



### **Gestion de facture**

#### Création du preset 



```mermaid
graph TD
	linkStyle default interpolate basis
	Scan[Scan de la facture type] --> Import[Importation dans le logiciel]
	Import --> DefEnt[Inscription de l'entreprise visée]
	DefEnt --> DefPre[Définition du nom du preset]
	DefPre --> DefChmp[Définition des zones pour chaque champs de la facture]
	DefChmp --> Ccl[Calcul par le logiciel des champs]
	Ccl --> Prop[Proposition de résultat]
	Prop --> CorrVal[Correction et/ou Validation]
	CorrVal --> |Si erreur ou mauvaises interpretations| Fdbk[Envoi de la facture aux développeur et signalement du mauvais fonctionnement]
	CorrVal --> Save[Sauvegarde du preset]
```



#### Définition des zones

​	

```mermaid
graph TD
	linkStyle default interpolate basis
	ChmpList[Liste des champs] --> ChxChmp[Choix du champ]
	ChxChmp --> DrgDrpZn[Cliquer et maintenir appuyer pour délimiter la zone]
	DrgDrpZn --> Vld[Validation de la zone]
	Vld --> |Choix de la zone suivante| ChmpList
	Vld --> |Si il n'y a plus de zone suivante| Fin
```





#### Lecture d'une facture



```mermaid
graph TD
	Scan[Scan de la facture] --> SelectEntp[Sélection de l'entreprise]
	SelectEntp --> SelectPre[Sélection du preset]
	SelectPre --> Ccl[Calcul]
	Ccl --> Validation[Validation des réusultats]
	Validation --> Enregistrement
	Validation --> |Si des erreurs de lectures ont étés présentes| Def[Enregistrement en tant que défaillant]
	Def --> Retro[Envoi de la facture aux développeur pour une amélioration du système]
```

### Etat d'un dossier



- Brouillon
- devis en attente
- devis accepté
- commande en cours de réalisation
- commande réalisée
- Commande payée
- Commande annulée

```mermaid
stateDiagram-v2
	[*] --> Brouillon
	Brouillon --> Créé
	
	state Créé {
	A --> Attente : Mail envoyé
	Attente --> Accepté : Devis accepté par le client
	Accepté --> Realisation : La réalisation du devis à commencé
	Realisation --> Realisé : La réalisation et terminée, en attente du paiement
	Realisé --> Payé : Réalisation terminée et le client à payé
	}
	
```




	













# Brouillon



### Système de relance

- Il y a dans les paramètres deux choses :
  - Le temps par défaut avant un mail de relance
    - Temps en jours ou mois
    - 0 si il n'y a pas de relance
  - Le preset de mail
  - Ces deux choses peuvent être édités dans le dossier si des adaptations doivent pouvoir être faites

La relance des clients est de deux manières possibles : 
- Relance automatique 
- Relance manuelle individuelle
- Relance manuelle groupée

La relance automatique est un mail automatiquement créé qui est envoyé au client avec le devis à l'intérieur. Dans le devis il y a les informations du client ou du contact. (il faut que l'utilisateur puisse définir que par exemple; le nom de l'entreprise visée soit marquée)

La relance manuelle individuelle est un simple bouton pour relancer via soit un mail pré-défini soit un un mail perso, celle-ci se fait dans un dossier pour relancer ce dossier.

La relance manuelle groupée est un bouton permettant de relancer tout les dossiers sélectionnés


il faudrait que l'utilisateur mette son texte pré-défini et mette des "codes" dans son texte pour les endroits que le logiciel va remplir pour y mettre les informations des clients.

Exemple :
Ce que l'utilisateur marque :
```
Bonjour %nom_entreprise%
Je vous contact pour vous dire que vous n'avez toujours pas rempli le devis.
Le lien vers le devis est le suivant : %lien_devis%

Le devis est daté du %date_devis%
```
La date du devis serait donc la dernière modification du devis

Ce qui sera envoyé sera donc :
```
Bonjour CRMGenerator3000
Je vous contact pour vous dire que vous n'avez toujours pas rempli le devis.
Le lien vers le devis est le suivant : Lien

Le devis est daté du 14/10/2020
```







### Création des devis et gestion de dossier

Proposer la sauvegarde des champs si un client non répertorié est indiqué.

Proposer la sauvegarde des nouveaux contact.

Avoir une auto-complétion pour l'écriture des contact d'une entreprise, de base cela n'en écrit aucun lors de l'écriture du preset du client, l'utilisateur va donc noter à quel contact écrire.





### Random

- Le logiciel doit pouvoir récupérer les informations des produits à partir de l'ancien logiciel utilisé afin d'améliorer le passage de l'un à l'autre

- le logiciel doit pouvoir envoyer des mail



### Settings

Avoir dans les settings :

- la gestion des lignes de groupes
- 





