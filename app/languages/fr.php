<?php

return array(
  'title' => 'Français',
  'direction' => 'ltr',
  'author' => 'Philippe Gervaise & Aris Papathéodorou',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Annuler',
    'add' => 'Ajouter',
    'addit' => 'Ajouter & Éditer',
    'save' => 'Enregistrer',
    'saved' => 'Enregistré !',
    'change' => 'Modifier',
    'delete' => 'Supprimer',
    'insert' => 'Insérer',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Afficher les options',
    'options.hide' => 'Masquer les options',

    // installation
    'installation' => 'Installation',
    'installation.check.headline' => 'Installation de Kirby Panel',
    'installation.check.text' => 'Durant l’installation, Kirby a rencontré les problèmes suivants…',
    'installation.check.retry' => 'Essayer de nouveau',
    'installation.check.error' => 'Des problèmes on été rencontrés !',
    'installation.check.error.accounts' => 'Le répertoire “/site/accounts” n’est pas accessible en écriture',
    'installation.check.error.avatars' => 'Le répertoire “/assets/avatars” n’est pas accessible en écriture',
    'installation.check.error.blueprints' => 'Veuillez ajouter un répertoire “/site/blueprints”',
    'installation.check.error.content' => 'Le répertoire “/content”, les sous-répertoires et les fichiers qu’il contient doivent être accessibles en écriture.',
    'installation.check.error.thumbs' => 'Le répertoire “thumbs/” doit être accessible en écriture.',
    'installation.signup.username.label' => 'Créer votre premier compte utilisateur',
    'installation.signup.username.placeholder' => 'Nom d’utilisateur',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.password.label' => 'Mot de passe',
    'installation.signup.language.label' => 'Langue',
    'installation.signup.button' => 'Créer votre compte',

    // login
    'login' => 'Connexion',
    'login.welcome' => 'Veuillez vous authentifier avec votre nouveau compte',
    'login.username.label' => 'Identifiant',
    'login.password.label' => 'Mot de passe',
    'login.error' => 'Identifiant ou mot de passe invalide',
    'login.button' => 'Connexion',

    // logout
    'logout' => 'Déconnexion',

    // dashboard
    'dashboard' => 'Tableau de bord',
    'dashboard.index.pages.title' => 'Pages',
    'dashboard.index.pages.edit' => 'Modifier',
    'dashboard.index.pages.add' => 'Ajouter',
    'dashboard.index.site.title' => 'URL du site',
    'dashboard.index.account.title' => 'Votre profil',
    'dashboard.index.account.edit' => 'Modifier',
    'dashboard.index.metatags.title' => 'Paramètres du site',
    'dashboard.index.metatags.edit' => 'Modifier',
    'dashboard.index.history.title' => 'Modifications récentes',
    'dashboard.index.history.text' => 'Vos modifications les plus récentes seront affichées ici afin de les retrouver plus aisément.',
    'dashboard.index.license.title' => 'License de Kirby',

    // metatags
    'metatags' => 'Paramètres du site',
    'metatags.info' => 'Informations de Kirby',
    'metatags.license' => 'License de Kirby',
    'metatags.version.toolkit' => 'Version du Toolkit ',
    'metatags.version.kirby' => 'Version de Kirby ',
    'metatags.version.panel' => 'Version du Panel ',
    'metatags.back' => 'Retour au tableau de bord',
    'metatags.files' => 'Fichiers du site',

    // pages
    'pages.show.settings' => 'Options de la page',
    'pages.show.preview' => 'Prévisualiser',
    'pages.show.changeurl' => 'Modifier l’URL',
    'pages.show.invisible' => 'Statut: invisible',
    'pages.show.visible' => 'Statut: visible',
    'pages.show.changes.text' => 'Vous avez des modifications non enregistrées !',
    'pages.show.changes.button' => 'Les supprimer',
    'pages.show.delete' => 'Supprimer cette page',
    'pages.show.subpages.title' => 'Pages',
    'pages.show.subpages.edit' => 'Modifier',
    'pages.show.subpages.add' => 'Ajouter',
    'pages.show.subpages.empty' => 'Cette page n’a aucune page secondaire',
    'pages.show.files.title' => 'Fichiers',
    'pages.show.files.edit' => 'Modifier',
    'pages.show.files.add' => 'Ajouter',
    'pages.show.files.empty' => 'Cette page n’a aucun fichier attaché',
    'pages.show.error.permissions.title' => 'La page n’est pas accessible en écriture',
    'pages.show.error.permissions.text'  => 'Merci de vérifier les permissions pour le répertoire "/content" et ses fichiers.',
    'pages.show.error.permissions.retry'  => 'Essayer de nouveau',
    'pages.show.error.notitle.title' => 'Ce blueprint n’a pas de champs « titre »',
    'pages.show.error.notitle.text' => 'Veuillez ajouter un champs « titre » et essayer de nouveau',
    'pages.show.error.notitle.retry' => 'Essayer de nouveau',
    'pages.show.error.form'  => 'Merci de remplir correctement l’ensemble des champs',

    'pages.add.title.label' => 'Ajouter une nouvelle page',
    'pages.add.title.placeholder' => 'Titre',
    'pages.add.url.label' => 'Identifiant pour l’URL de la page',
    'pages.add.url.enter' => '(saisir votre titre)',
    'pages.add.url.close' => 'Fermer',
    'pages.add.url.help' => 'Format : minuscules a-z, chiffres 0-9 et tiret simple',
    'pages.add.template.label' => 'Modèle de page',
    'pages.add.error.title' => 'Il n’y a pas de titre',
    'pages.add.error.template' => 'Vous n’avez pas choisi de modèle',
    'pages.add.error.max.headline' => 'La création de nouvelles pages secondaires n’est pas autorisé pour cette page',
    'pages.add.error.max.text' => 'Le nombre maximum de pages secondaires a été atteint pour cette page.',
    'pages.url.uid.label' => 'Identifiant de l’URL',
    'pages.url.uid.label.option' => 'Créer à partir du titre',
    'pages.url.error.exists' => 'Une page du même nom existe déjà',
    'pages.url.error.move' => 'L’identifiant de l’URL n’a pu être changé',
    'pages.toggle.position' => 'Position',
    'pages.toggle.invisible' => 'invisible',
    'pages.toggle.publish' => 'Voulez-vous vraiment modifier le statut de cette page en **visible**?',
    'pages.toggle.hide' => 'Voulez-vous vraiment modifier le statut de cette page en **invisible**?',
    'pages.delete.headline' => 'Voulez-vous vraiment supprimer définitivement cette page ?',
    'pages.delete.error.home.headline' => 'La page d’accueil ne peut être supprimée',
    'pages.delete.error.home.text' => 'Vous essayez de supprimer la page d’accueil. Ce n’est pas possible et cela aurait des conséquences fâcheuses.',
    'pages.delete.error.error.headline' => 'La page d’erreur ne peut être supprimée',
    'pages.delete.error.error.text' => 'Vous essayez de supprimer la page d’erreur. Ce n’est pas possible et cela aurait des conséquences fâcheuses.',
    'pages.delete.error.children.headline' => 'La page ne peut être supprimée',
    'pages.delete.error.children.text' => 'Cette page à des pages secondaires. Veuillez supprimer les pages associée au préalable.',
    'pages.delete.error.blocked.headline' => 'La page ne peut être supprimée',
    'pages.delete.error.blocked.text' => 'Cette page est verrouillée et ne peut être supprimée.',
    'pages.search.help' => 'Rechercher des pages par URL. Naviguer entre les résultats avec les flèches “haut” et “bas” du clavier, puis appuyer sur la touche “Entrée” pour aller à la page sélectionnée.',
    'pages.search.noresults' => 'Il n’y a pas de résultat à votre recherche. Veuillez essayer de nouveau avec une URL différente.',
    'pages.error.missing' => 'Cette page n’a pu être trouvée',

    // subpages
    'subpages' => 'Pages',
    'subpages.index.headline' => 'Pages dans :',
    'subpages.index.back' => 'Retour',
    'subpages.index.add' => 'Ajouter',
    'subpages.index.add.first.text' => 'Cette page n’a pas encore de page secondaire',
    'subpages.index.add.first.button' => 'Ajouter une première page',
    'subpages.index.visible' => 'Pages visibles',
    'subpages.index.visible.help' => 'Glisser ici une page invisible pour la classer et la rendre visible.',
    'subpages.index.invisible' => 'Pages invisibles',
    'subpages.index.invisible.help' => 'Glisser ici une page pour la rendre invisible.',
    'subpages.error.missing' => 'La page n’a pu être trouvée',

    // files
    'files' => 'Fichiers',
    'files.index.headline' => 'Fichiers pour la page :',
    'files.index.back' => 'Retour',
    'files.index.upload' => 'Ajouter un fichier',
    'files.index.upload.first.text' => 'Cette page n’a pas encore de fichier attaché',
    'files.index.upload.first.button' => 'Ajouter un premier fichier',
    'files.index.edit' => 'Modifier',
    'files.index.delete' => 'Supprimer',
    'files.show.name.label' => 'Nom du fichier',
    'files.show.info.label' => 'Type / Taille / Dimensions',
    'files.show.link.label' => 'Lien public',
    'files.show.open' => 'Afficher/télécharger le fichier',
    'files.show.back' => 'Retour',
    'files.show.replace' => 'Remplacer',
    'files.show.delete' => 'Supprimer',
    'files.show.error.rename' => 'Le fichier n’a pu être renommé',
    'files.show.error.form' => 'Merci de remplir correctement chaque champ du formulaire',
    'files.upload.drop' => 'Glisser ici un fichier…',
    'files.upload.click' => '… ou cliquer pour le transférer depuis votre ordinateur',
    'files.replace.drop' => 'Glisser ici un fichier…',
    'files.replace.click' => '… ou cliquer pour le remplacer',
    'files.replace.error.type' => 'Le fichier transféré doit être du même type',
    'files.delete.headline' => 'Voulez-vous vraiment supprimer ce fichier ?',
    'files.error.missing.page' => 'La page n’a pu être trouvée',
    'files.error.missing.file' => 'Le fichier n’a pu être trouvé',

    // users
    'users' => 'Utilisateurs',
    'users.index.headline' => 'Tous les utilisateurs',
    'users.index.add' => 'Ajouter un utilisateur',
    'users.index.edit' => 'Modifier',
    'users.index.delete' => 'Supprimer',
    'users.form.username.label' => 'Nom d’utilisateur',
    'users.form.username.placeholder' => 'Votre nom d’utilisateur',
    'users.form.username.help' => 'Format : minuscules a-z, chiffres 0-9 et tiret simple',
    'users.form.username.readonly' => 'Le nom d’utilisateur ne peut être modifié',
    'users.form.firstname.label' => 'Prénom',
    'users.form.lastname.label' => 'Nom',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@example.com',
    'users.form.password.label' => 'Mot de passe',
    'users.form.password.confirm.label' => 'Confirmer votre mot de passe',
    'users.form.password.new.label' => 'Nouveau mot de passe',
    'users.form.password.new.confirm.label' => 'Confirmer le nouveau mot de passe',
    'users.form.password.new.help' => 'Laisser vide pour conserver votre mot de passe actuel',
    'users.form.language.label' => 'Langue',
    'users.form.role.label' => 'Role',
    'users.form.options.headline' => 'Options du compte',
    'users.form.options.message' => 'Envoyer un email',
    'users.form.options.delete' => 'Supprimer le compte',
    'users.form.avatar.headline' => 'Image du profil',
    'users.form.avatar.upload' => 'Ajouter une image de profil',
    'users.form.avatar.replace' => 'Remplacer l’image du profil',
    'users.form.avatar.delete' => 'Supprimer l’image du profil',
    'users.form.back' => 'Retour au compte',
    'users.form.error.password.confirm' => 'Veuillez confirmer le mot de passe',
    'users.form.error.update' => 'Le compte utilisateur ne peut être mis à jour',
    'users.form.error.create' => 'Le compte utilisateur n’a pu être créé',
    'users.form.error.permissions.title' => 'Le répertoir des comptes n’est pas accessible en écriture',
    'users.form.error.permissions.text' => 'Vérifiez que le répertoire “/site/accounts” existe et est accessible en écriture.',
    'users.delete.headline' => 'Voulez-vous vraiment supprimer ce compte ?',
    'users.delete.error' => 'Le compte utilisateur n’a pu être supprimé',
    'users.avatar.drop' => 'Glisser ici un fichier image…',
    'users.avatar.click' => '…ou cliquer pour le transférer depuis votre ordinateur',
    'users.avatar.error.type' => 'Vous pouvez uniquement transférer des fichiers JPG, PNG et GIF',
    'users.avatar.error.folder.headline' => 'Le répertoire “avatar” n’est pas accessible en écriture',
    'users.avatar.error.folder.text' => 'Veuillez créer le répertoire <strong>/assets/avatars/<strong> et l’ouvrir en écriture pour pouvoir charger une vignette pour le compte.',
    'users.avatar.delete.error' => 'L’image du profil n’a pu être supprimée',
    'users.avatar.delete.success' => 'L’image du profil a été suprimée',
    'users.error.missing' => 'Aucun compte utilisateur à ce nom n’a été trouvé',

    // form fields
    'fields.required' => 'Requis',
    'fields.date.label' => 'Date',
    'fields.date.months' => array(
      'Janvier',
      'Février',
      'Mars',
      'Avril',
      'Mai',
      'Juin',
      'Juillet',
      'Août',
      'Septembre',
      'Octobre',
      'Novembre',
      'Décembre'
    ),
    'fields.date.weekdays' => array(
      'Dimanche',
      'Lundi',
      'Mardi',
      'Mercredi',
      'Jeudi',
      'Vendredi',
      'Samedi'
    ),
    'fields.date.weekdays.short' => array(
      'Dim',
      'Lun',
      'Mar',
      'Mer',
      'Jeu',
      'Ven',
      'Sam'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@example.com',
    'fields.number.label' => 'Numéro',
    'fields.number.placeholder' => 'N°',
    'fields.page.label' => 'Page',
    'fields.page.placeholder' => 'chemin/vers/la/page',
    'fields.password.label' => 'Mot de passe',
    'fields.structure.add' => 'Ajouter',
    'fields.structure.add.first' => 'Créer la première entrée',
    'fields.structure.empty' => 'Aucune entrée pour le moment.',
    'fields.structure.cancel' => 'Annuler',
    'fields.structure.save' => 'Valider',
    'fields.structure.edit' => 'Modifier',
    'fields.structure.delete' => 'Supprimer',
    'fields.structure.delete.label' => 'Voulez-vous vraiment supprimer cette entrée ?',
    'fields.tags.label' => 'Tags',
    'fields.tel.label' => 'Téléphone',
    'fields.textarea.buttons.bold.label' => 'Gras',
    'fields.textarea.buttons.bold.text' => 'Texte en gras',
    'fields.textarea.buttons.italic.label' => 'Italique',
    'fields.textarea.buttons.italic.text' => 'Texte en italique',
    'fields.textarea.buttons.link.label' => 'Lien',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Image',
    'fields.textarea.buttons.file.label' => 'Fichier',
    'fields.toggle.yes' => 'Oui',
    'fields.toggle.no' => 'Non',
    'fields.toggle.on' => 'Activé',
    'fields.toggle.off' => 'Désactivé',

    // textarea overlays
    'editor.link.url.label' => 'Insérer une URL',
    'editor.link.text.label' => 'Texte du lien',
    'editor.link.text.help' => 'Le texte du lien est optionnel',
    'editor.email.address.label' => 'Insérer une adresse email',
    'editor.email.address.placeholder' => 'mail@example.com',
    'editor.email.text.label' => 'Texte du lien',
    'editor.email.text.help' => 'Le texte du lien est optionnel',
    'editor.file.empty' => 'Cette page n’a aucun fichier attaché',
    'editor.image.empty' => 'Cette page n’a aucun fichier image attaché',

    // error page
    'error' => 'Erreur',
    'error.headline' => 'Erreur',

  )
);
