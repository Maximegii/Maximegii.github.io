# Réponses TP Groupe TechStore 

## Phase 1 :

**Question :**
Comment allez-vous organiser et nommer vos branches selon Git Flow? (Vous pouvez proposer une alternative à Git Flow si vous le souhaitez, dans tous les cas un schema de branches doit être défini)

**Réponse :** 
Nous avons utilisé git flow pour organiser nos branches mais n'avons pas garder toutes les branches proposés et créée par ce dernier.

Nous allons organiser nos branches de la manière suivante : 
- Une branche main qui sera la version prod de notre site 
- Une branche develop qui sera une version de test préprod de notre site 
- Une branche hotfix pour le débuguage et les correction 
- Une branche personnelle à chaque développeur (Yohann, Adrien, Maxime)

**Question :**
Quels outils allez-vous utiliser pour planifier et suivre le progrès de votre projet? (cf consignes supplementaires)

**Réponse :**

Nous avons utiliser des outils les outils suivant pour gérer notre projet :

- Gantt Pour planifier un agenda de développement
- Teams comme outils de communication 
- Nous avons structuré nos commits en règle avec conventionalcommits
- Comitizen qui est un outil permettant de mieux structurer ses commits afin qu'ils deviennent plus claires et précis 


## Phase 2 :

**Question :**
1. Comment avez-vous organisé vos commits pour maintenir un historique clair ?
2. Comment gérez-vous les dépendances entre différentes parties du site?

**Réponse :**

1. Nous avons fait des commits simple et compréhenssif, des commits fréquents, nous avons essayer de mettre en place des mots action le plus souvent possible (Modif, Suppression, Ajout), puis nous avons fait des commits en fonction des différentes branches de notre projet pour mieux s'organiser. Nous avons aussi utiliser Commitizen afin de nous aider dans la clareté de nos commits en suivant les règle conventionnalcommits.

2. Nous avons utiliser des fichiers spécifiques comme le css pour la gestion global de l'interface graphique, nous avons mis en début de chaque page dans le code les dépendances en essayant de mettre le moins de fichiers posssible. Nous avons tester chaque modifications de dépendances pour vérifier que le bon fonctionnement.


## Phase 3 :

**Question :**
1. Quels furent les défis rencontrés lors de la fusion des différentes fonctionnalités ?
2. Comment avez-vous assuré que le site fonctionne de manière cohérente après les merges ?

**Réponse :**

1. Lors de la fusion des différentes fonctionnalités sur notre site, nous avons fait face à certains défis que nous avons surmontés avec succès. Voici quelques-uns des principaux obstacles que nous avons rencontrés :

- Conflit de fusion : Les différentes fonctionnalités développées par l'équipe pouvaient parfois introduire des styles de codage différents ou des approches différentes. Nous avons établi des normes de codage claires et effectué des vérifications de code régulières pour maintenir le code à jour et correct.

- Tests de régression : L'ajout de nouvelles fonctionnalités pourrait potentiellement affecter des parties existantes du site. Nous avons dû mettre en place des tests de régression complets pour nous assurer que les fonctionnalités existantes restaient stables après chaque fusion.

2. Voici ce que nous avons mis en place pour assurer le fonctionnement du site :

- Tests exhaustifs : Avant chaque fusion, nous avons effectué des tests exhaustifs, y compris des tests unitaires. Ces tests nous ont permis de détecter rapidement les erreurs potentielles et de nous assurer que toutes les fonctionnalités existantes étaient opérationnelles.

- Déploiements incrémentaux : Plutôt que de fusionner de grandes quantités de code en une seule fois, nous avons adopté une approche d'intégration incrémentale. Cela signifie que nous avons fusionné et déployé des fonctionnalités plus petites plus fréquemment (Page par Page, Fonctionnalitée  par Fonctionnalitée), réduisant ainsi les risques et facilitant la détection des problèmes.

- Communication : Pour assurer le fonctionnement des la globalité du projet, il nous a fallu avoir une communication afin de donner l'information nécéssaire au moment voulu de sorte à avancer rapidement et efficacement.


## Phase 4 :

**Question :**
1. Quels types de tests avez-vous effectués avant la mise en production ?
2. Avez-vous rencontré des problèmes pendant cette phase et comment les avez-vous résolus ?

**Réponse :**

1. Avant de mettre en production une nouvelle version du site, notre équipe a mis en œuvre une série de tests visant à garantir la qualité, la stabilité et la performance. Voici les principaux types de tests que nous avons effectués :

- Tests unitaires : Nous avons développé des tests unitaires pour chaque composant individuel du site.

- Tests d'intégration : Nous avons réalisé des tests d'intégration pour évaluer la manière dont les différentes parties du site interagissent entre elles.

- Tests de performance : Nous avons simulé des charges élevées pour évaluer la performance du site et son comportement.

- Tests de déploiement : Nous avons effectué des tests de déploiement pour s'assurer que le processus de mise en production se déroule sans problème.

2. Nous avons rencontré différents problèmes :

- Les dépendances entre les nouvelles fonctionnalités et les anciennes. Pour résoudre ceci, nous avons ajusté les versions et mis à jour pour avoir les dernières fonctionnalitées.

- Bugs de dernière minute : Des bugs inattendus ont été découverts lors des tests finaux. Nous avons adopté une approche de résolution rapide, corrigeant les bugs prioritaires avant de procéder à la mise en production. Les corrections ont été intégrées dans une nouvelle version testée et validée.


## Phase 5 :

**Question :**
1. Comment gérez-vous les retours et les bugs après la mise en production ?
2. Quelles stratégies adoptez-vous pour la maintenance continue du site ?

**Réponse :**

1. Après la mise en production, la gestion efficace des bugs est cruciale pour maintenir la qualité du site. Voici comment nous gérons ces aspects :

-  Priorisation des problèmes : Nous avons établi une méthodologie de priorisation pour classer les problèmes en fonction de leur gravité et de leur impact sur l'expérience utilisateur. Cela nous aide à concentrer nos efforts sur les problèmes les plus critiques en premier.

- Cycle de développement itératif : Nous avons adopté un cycle de développement itératif pour traiter rapidement les bugs. Des versions correctives sont planifiées et déployées à intervalles réguliers, intégrant les résolutions de problèmes et les améliorations.

- Communication transparente : Nous maintenons une communication transparente dans l'équipe concernant les problèmes en cours de résolution. Des mises à jour régulières sont communiquées sur l'état d'avancement.

- Tests de validation : Avant chaque déploiement de correctifs, nous effectuons des tests de validation pour nous assurer que les solutions proposées n'introduisent pas de nouveaux problèmes et sont efficaces.

2. Voici les stratégies que nous adoptons pour assurer une maintenance continue efficace :

- Mises à jour régulières : Nous planifions des mises à jour régulières pour intégrer les dernières fonctionnalités, correctifs de sécurité et améliorations de performance.

- Tests de non-régression : Avant chaque mise à jour, nous effectuons des tests de non-régression pour nous assurer que les modifications apportées n'ont pas d'impact négatif sur les fonctionnalités existantes.

- Gestion des performances : Nous surveillons de près les performances du site au fil du temps et intervenons rapidement pour optimiser les ressources.


## Phase 6 :

**Question :**
1. Quels sont les principaux enseignements tirés de ce projet ?
2. Comment pourriez-vous améliorer vos pratiques de collaboration et de versioning pour des projets futurs ?

**Réponse :**

1. Notre projet a été riche en enseignements, et voici quelques-uns des principaux que nous avons retirés de cette expérience :

- Communication et collaboration sont essentielles.
- Tests exhaustifs dès le départ
- Flexibilité et agilité sont indispensables
- Gestion des Dépendances
- Optimisation et Efficacité
- Préparation d'une maintenance en continu
- Formation a l'outil de collaboration Git
- Découverte de divers outils anexe telle que commitizen

2. Suite à cette expérience voici les améliorations possible de collaboration et de versioning que nous avons retenu pour des projets futurs :

- Renforcement de la documentation collaborative
- Formation continu sur les outils
- Mise en place d'outil d'automatisation
- Evaluation réguliere des processus avancées
- Utilisation des branches avec parcimonie


## Phase 7 :

**Question :**
1. Quelles sont les principales différences entre la première et la seconde version du site ?
2. Quels sont les principaux enseignements tirés de ce projet ?

**Réponse :**

1. Voici les principales différences entre la première et seconde version du site :

- Interface : Des Suppressions ont été faites afin de gagner de la place et de pouvoir mettre les informations que nous souhaitions
- Image/Logos : Des Ajouts et modifications d'image ont été effectuées pour ajouté notre logo, ajouter des images pour la vente de nos produits et de nos marques proposées
- Texte : Nous avons rajouter des zones de texte et des descriptions sur chacune des pages afin d'améliorer les informations contenu dans le site
- Option : Nous avons rajouter des pages comme "compte" et "login" afin de rajouter de l'experience utilisateur
- Ergonomie : Nous avons placer les éléments dans le site en modifiant, rajoutant et supprimant différents texte, image ou section afin de donner de l'ergonomie sur le site

![Alttext](/CaptureEcranSite/c1.png)
![Alttext](/CaptureEcranSite/c2.png)
![Alttext](/CaptureEcranSite/c3.png)
![Alttext](/CaptureEcranSite/c7.png)
![Alttext](/CaptureEcranSite/c4.png)
![Alttext](/CaptureEcranSite/c5.png)
![Alttext](/CaptureEcranSite/c6.png)