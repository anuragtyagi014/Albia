# /scss

Les fichiers SCSS sont regroupés dans ce dossier, selon une organisation dite **SMACSS**.
Tout fichier .scss est compilé avec ses dépendances (@import), pour ne générer, in fine, qu'un seul fichier CSS.

Aucune nouvelle connaissance CSS n'est requise, seules sont touchées l'approche syntaxique et la logique de codage.

Un fichier scss est compilé en son équivalent css.

Un partial, **préfixé _**, est intégré à un fichier qui y recourt (@import).

L'ordre d'appel des fichiers est décisif. P.ex. les variables et mixins doivent être déclarés en amont de leur emploi.

Pour aller plus loin, se référer à la documentation SMACSS https://smacss.com, qui fait référence en la matière.
Tester les syntaxes SCSS (compilées à la volée) sur http://www.sassmeister.com et http://codepen.io.

## main.scss

Ce fichier est l'élément fondateur, qui génèrera la feuille de style correspondante (css/main.css).
Peut aussi s'appeler styles.css, screen.css, etc

## /base

Ce dossier contient :
   * _variables.scss : la définition des variables du site (peut se trouver aussi à la racine /scss) ;
   * _sanitize.scss ;
   * _base.scss : la redéfinition des éléments HTML et des sélecteurs de base.

## /layout

Ce dossier contient :
   * les partials propres aux segments du site (_layout.scss, _header.scss, _footer.scss), **préfixés .l-**. Chaque partial contient les media queries qui lui sont propres ;
   * _helper-classes.scss : les classes fournies par initializr utiles pour le layout (hidden, invisible, clearfix, etc) ;
   * un éventuel gridding system, distribué en SCSS. Avantage : un GS peut être reconfiguré à tout moment, sans nécessiter un nouveau téléchargement.

Le champ de /layout est limité à définir le comportement des régions de contenu et les règles de composition générales.
Lire http://www.nicoespeon.com/fr/2013/05/tombez-pour-smacss/ pour plus de détail sur le sujet.

## /module

Ce dossier contient :
   * les modules de contenu, contenus dans les régions, intitulés **.[module]-**. Chaque module peut être l'objet d'un partial, ou faire partie d'un fichier plus conséquent, selon les besoins.
   
Les modules sont réutilisables. Pensez à leur attribuer des noms logiques, et à les spécialiser selon leur contexte.
Lire http://maintainablecss.com pour aller plus loin en BEM.

## /state

Ce dossier contient :
   * les partials propres aux états des objets du site, **préfixés .is- ou .has-**.

Ces classes sont particulièrement utiles pour décrire les états des objets du site, et y accéder par le biais de JavaScript.

## /theme

Ce dossier contient :
   * les partials propres à l'apparence des objets du site (fontes, couleurs, arrière-plans).

Délicat à exploiter, car il requiert un degré élevé d'abstraction du code.

## _shame.scss

Dans la pratique, certains bouts de code ne sont pas immédiatement classables. Ils trouveront leur place **temporaire** dans ce partial.

## print.scss

Ce fichier regroupe les styles propres à l'impression. Il peut s'agir par défaut de ceux fournis par initializr, ou proposer une mise en page totalement différente.

---

TODO : nomenclature des classes (anglais et bas de casse),
       what's next : approche BEM, PUG, etc