<?php if(!defined('KIRBY')) exit ?>

title: Article
files: true
fields:
  title:
    label: Titre
    type:  text
  subtitle:
    label: Sous-titre
    type:  text
  author:
    label: Auteur
    type: user
    width: 1/2
  time:
    label: Date
    type: date
    default: today
    override: true
    width: 1/2
  categorie:
    label: Catégorie
    type: select
    width: 1/4
    required: true
    options:
      think: Penser
      make: Faire
  tags:
    label: Tags
    type: tags
    width: 3/4
    lower: true
  text:
    label: Texte
    type:  textarea
