# PIL Project

> A real project in the real life

| Challenge Parameters | Challenge Details                   |
| :------------------- | :---------------------------------- |
| Repository           | PIL-project                         |
| Challenge type       | `Learning a CMS, consolidating PHP` |
| Duration             | `3 weeks`                           |
| Deadline             | `11-10-2021`                        |
| Developers           | [Yves Thirion](https://github.com/Yves852), [Corentin Istace](https://github.com/corentinIstace) & [Thomas El Serghani](https://github.com/Tompouday)           |
| Deployment method    | `Free`                              |
| Group composition    | `Trio`                              |
| Project submission   | [Google Form coming soon]()         |

## Learning objectives

At the end of this challenge we should be able to :

-   Build our own theme for a CMS;
-   Create a fancy client interface with custom fields;
-   Follow a design pixel perfect.

## Presentation

Few months ago, the PIL decided to build a completely new image and to be more present on the Internet. They began their rebranding with a new logo, black and white. After that, they contacted a web designer to design a website based on their new image.
After months of discussion, they validated the design and the future features of the website.

The PIL contacted BeCode to build this new website 🥳.

This a great opportunity for us to code a real project with a real client.

## Client's request

The PIL employees would like to edit the content of their website regularly & easily. That’s why a CMS is the best solution.

They ask for a WordPress interface because is easy to understand, and you can create custom fields easy to fill in.

:warning: **This project needs to be customer-oriented. The dashboard for the client has to be clear, easy to use and match the design.**

To help us, the web designer gave us the license _ACF PRO_, a WordPress plugin that will provide us the possibility to create _custom fields_.

<details><summary>License</summary>
`b3JkZXJfaWQ9OTAwODJ8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA5LTIwIDIxOjI0OjAz`
</details>

Due to the high standards of the design, the client would like you to respect it strictly.

## Design

The design in JPG with the different formats, as well as the images and SVG's, are located inside the folder [resources](./resources/).

The different design formats provided are in Desktop, Tablet portrait (768px) and Mobile (375px).


### Fonts

We use this fonts [dropbox](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AACPXVpgVVg7TP8WN7a55nK8a/Fonts?dl=0&lst=)

### Favicon

What is a favicon ? [Here an explanation](https://www.seoptimer.com/blog/what-is-a-favicon/)

You can find the favicons in the [dropbox](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AAB1idUr8-KSt_qy-_mrRp7Ka/Favicon?dl=0&subfolder_nav_tracking=1)

### Broken dropbox links?
You can find all dropbox sources [here](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AABY8VdfukGrV2rjeJqsvNIga?dl=0).

---

## Instructions

Here a link with the design and the [Briefing for the devs](https://xd.adobe.com/view/6128d838-cd50-44b0-a466-6c0177ba8302-347b/screen/c24caf46-b49b-4b6c-98dd-a62cfb9d9ada/) that we received.

On the design all the "golden point" refer to an instruction. 

We started the job by the WordPress structure using the dashboard. 

### Templates

There are 5 different templates:

Here the templates :

-   `front-page.php`
-   `archive-entreprises.php`
-   `page-espaces.php`
-   `page-pole.php`
-   `page-contact.php`

The page "Formations" is in the menu but the link behind send the user to an another platform. So we had to create a custom link.

### Post type

There is one post type called "Entreprises".

[This page](https://xd.adobe.com/view/6128d838-cd50-44b0-a466-6c0177ba8302-347b/screen/cfe3b5d9-4625-4daf-a2ef-5eee33584263/) is the archive of this post type.

Each company has **one category** and **one or more sub-categories**.

The companies and the main categories are called in the front-page.

> We recommend to use the plugin [CPT UI](https://fr.wordpress.org/plugins/custom-post-type-ui/) to create easily posts types and their categories.

### Categories

Each category has a logo (a svg) attached to it.

These logos are displayed on the front-page in the section "Vous avez un projet audiovisuel ou digital?".

To link a logo to a category, you have to create a Custom fields in the categories for the post type "Entreprises".

### The Footer & Call to Action

#### Footer

Like the header, the footer is repeated in all the pages, so the client has to complete these informations once.

ACF allow us to create fields we can use globally with the [Options Page feature](https://www.advancedcustomfields.com/resources/options-page/).

#### CTA

You can find the Call to action on the bottom of the pages "Nos espaces" and "Le Pôle".


> Project duration : 2 weeks, aka 10 work-days

-   **Day 1: ONLY ORGANIZATION**
    We choose trello for our team.
    We made a **list of all the tasks** we had to do;
    We separated each task into smaller tasks: Ex: _This page is made from 3 sections, 2 of them containing images, with difficult positionning, and 1 has a big animation_
    Finally, **prioritize**. Which task is the most important? Which do we have to begin with? Displaying the page content and allow the user to use Custom Fields is more important that all the animations!

    > Make your organization board validated by a coach before going to the next steps

    <br>

-   **Day 2: THEORY (optional)**
   

-   **Day 3-9: WORKFLOW**

    -   **Every morning**, daily meeting with the group:
        -> What did every member do yesterday?
        -> What's the program for today?
        -> Issues to share?
        
-   **Day 10: PUBLISH**
    There is no obligation, look out on the internet where to host a Wordpress project. 
