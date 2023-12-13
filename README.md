Hello and welcome!


# Theme
In order to make sure we're compliant with WordPress' new block themes, we will create a child theme based on Twenty Twenty Four.


## `functions.php`
This file can be used to create custom "styles".

The provided example:
- registers the `style.css` file
- declares a "Add padding" style for the `core/group` block, to allow for a padding to be added to the group block
- declares a "Reverse Columns on Mobile" style for the `core/columns` block, to allow for the columns to be reversed on mobile when needed

Please feel free to add any custom styles you might feel are needed.


## `styles.css`
Unless there are specific, side-wide styles that need to be added, we will not be adding any styles to this file.
The styles should be defined in `theme.json` instead (see below).

At the time of writing, `style.css` only contain a directive to remove the padding for the website wrapper, as we don't want any padding on the website:

```css
.wp-site-blocks {
    padding-top: 0;
    padding-bottom: 0;
}
```


## `theme.json`
At the time of writing, the `theme.json` contains custom directives for:
- settings
    - color > palette
    - layout
    - typography
        - fontFamilies
        - fontSizes
- styles
    - elements
        - button
        - heading
        - h1 to h6
    - typography

Please note that the `theme.json` file is not yet complete, and should be udpated with the missing directives.

**Also, please declare variables in the `theme.json` file, and use them accordingly whenever possible.**


# Blocks
In order to have the blocks we need, we will use the core blocks from WordPress and a few blocks from the "Spectra – WordPress Gutenberg Blocks" plugin available on the WordPress plugin repository (https://wordpress.org/plugins/ultimate-addons-for-gutenberg/)

**Please note that these blocks probably won't need any custom styles:**
- the `theme.json` file will take care of the styling of the core blocks
- the Spectra blocks should be styled directly in the patterns (see below)

The blocks we expect to use are:


## Design
- core/buttons
- core/columns
- core/group
- core/row
- core/stack
- core/separator
- core/spacer


## Text
- core/paragraph
- core/heading
- core/list
- core/details


## Media
- core/image
- core/gallery
- core/cover


## Theme
- core/navigation
- core/site-logo
- core/site-title
- core/site-tagline
- and all blocks related to the query loop (title, content, excerpt, featured image, etc.)


## Spectra
- uagb/container
- uagb/advanced-heading
- uagb/info-box
- uagb/content-timeline
- uagb/counter
- uagb/faq
- uagb/form
- uagb/google-maps
- uagb/icon-list
- uagb/image-gallery
- uagb/inline-notice
- uagb/marketing-button
- uagb/slider


# Custom template parts, templates and patterns
To create template parts, templates and patterns, the easiest way is to **create and style them using the site editor**, and then copy the code from the generated blocks to the appropriate files.

## Template Parts
Template parts are used to create reusable page parts of the website.

Here are the custom template parts that need to be created:


### Header
In order to create the header for the website following the homepage design shown during the December 11, 2023 meeting (floating menu over a header image), we could implement the following:


#### A template part for the homepage header (with a static image)
This template part could be made of a cover block with the static image, encapsulating:
- the actual menu bar (which is a synced pattern) - **see patterns/ab-header-menu.php**
- a group block containing:
    - a core/heading block (h2 / subheading)
    - a core/heading block (h1 / heading)
    - a core/pargraph block (text)
    - a core/buttons block (button / CTA)

A starter template can be found in /part/header-homepage.php

Please note the `<!-- wp:block {"ref":123} /-->` block in the code. This the synced pattern for the header menu. Please make sure to replace the `123` with the actual ID of the synced pattern.

#### a template part for all other pages of the website (with a color background or the featured image)
This usage of color or featured image is part of the standard core/cover block

A technical implementation will be provided as soon as possible.


### Footer
- Level 1
    - Logo and info
    - Navigation
    - Contact
- Level 2
    - Legal pages
    - Copyright


## Templates
Templates are used to create the different pages of the website.

Here are the custom template that need to be created:
- Page without title (used for the homepage)
    - Header
    - Content
    - Footer
- Page with title (used for all other pages)
    - Header
    - Stylized h1 title
    - Content
    - Footer


## Patterns
Patterns are used to create reusable parts of the website. Please note that patterns differ from template parts in the sense that they are not used to create a page, but rather to create a reusable part of a page.

Here are the patterns that need to be created:
- Hero header
    - Heading
    - Subheading
    - Button
- Image on one side, text on the other - 2 columns, should stack on mobile and be able to be reversed when needed
    - Image
    - Heading
    - Text
    - Button
- CTA
    - Heading
    - Text
    - Button
- Clients list
    - Heading
    - List of logos (2 lines of 2x3 logos on desktop, 4 lines of 3 logos on tablet and mobile)
- Header menu (synced) - will be used in all templates and templates part, see /patterns/ab-header-menu.php for a starter template
- FAQ - see /patterns/ab-faq.php for a starter template
- Slider - see /patterns/ab-slider.php for a starter template
- Stats - see /patterns/ab-stats.php for a starter template
- Timeline - see /patterns/ab-timeline.php for a starter template
