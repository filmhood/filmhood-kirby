<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
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
    type:  text
    width: 1/2
  tags:
    label: Tags
    type:  tags
  text:
    label: Text
    type:  textarea
