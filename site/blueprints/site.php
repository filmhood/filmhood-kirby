<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - association
    - default
    - articles
    - news
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea