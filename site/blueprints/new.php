<?php if(!defined('KIRBY')) exit ?>

title: Actualité
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
  text:
    label: Texte
    type:  textarea
