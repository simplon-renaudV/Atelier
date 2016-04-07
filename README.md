#L'atelier de mémé

##Projet réalisé lors du hackathon grand sud en partage du 31/03/2016 au 02/04/2016

**Membres de l'équipe de développement : Gaelle Guisnet (Simplon Montpellier), Gwenaelle Guezou, Tyffany Zilliox et Renaud Vivancos de Simplon Narbonne.**

L'objectif de notre projet était de réaliser un site web pour une future association, "l'Atelier de mémé" (rédaction des statuts en cours) qui va ouvrir sur Narbonne un atelier qui sera un peu un mélange entre un repair café, un fablab et un do it yourself, le tout avec des cours de bricolage, électronique, informatique, etc... de prévus.

Les principaux éléments développés lors du hackathon ont été la page d'accueil ainsi que un planning de réservation pour les différentes machine de l'atelier ou les cours.

Langages utilisés : HTML/CSS, PHP, JQuery
Autres outils utilisés : [Zapier](http://www.zapier.com), [fullcalendar](http://fullcalendar.io/), gmail et google calendar

Pour la page d'accueil la technique d'image mapping a été utilisée pour permettre d'aller sur les différentes pages du site, ainsi que sur les réseaux sociaux.

Pour le planning, on s'est servi des fonctions de google calendar et de zapier. Le principe est le suivant : 

- Les utilisateurs remplissent un formulaire, cela envoie par mail sur une addresse gmail un mail avec les dates formatés.
- Zapier(un service web qui en gros sert de passerelles entre les API d'autres services web) regarde les mails sur le compte gmail toutes 5 minutes, et si il voit un message avec marqué réservation en objet, il parse le contenu du message pour récupérer les dates et les heures
- ensuite Zapier les transmets a google calendar qui crée l'évenment correspondant.
- Et pour finir cet événement est affiché sur le site par le biais de FullCalendar qui récupère les données de google Calendar

Pas mal d'autres fonctionnalités sont prévus sur le site de l'atelier dans le futur, notamment des bases de données des utilisateurs et des outils. Fautes de temps du à la contrainte du hackathon elles n'ont pas pu être développées.