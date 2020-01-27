# Mercia Bootstrap Blog Theme

The **Mercia Bootstrap Blog** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

Bootstrap-blog modified for Mercia Fellrunners site.

Modifications are:

- `Edit this page` button on end of breadcrumb
  - Use `page.header.protected: true` to suppress it 
- `2em` gap after sticky header so breadcrumb is not overlaid
- `Login` button on end of menu
- Add `{{ content }}` to blog.md
- Add breadcrumb.html.twig to base.html.twig so get it on every page
  - Remove breadcrumb.html.twig from other templates as redundant
- Remove loading the jQuery asset as it duplicates that loaded by the system
  - Update system jQuery collection from 2.x to 3.x
- Add archive awareness to blog.html.twig
- Add partials/messages.html.twig to base.html.twig so get messages on every page   
- ToDo add register link to menu
- ToDo tweak wherever to only collect pages where the user has access rights
- ...