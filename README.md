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

**Also, please declare variables in the `theme.json` file, and use them accordingly wheneever possible.**


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
and all blocks related to the query loop (title, content, excerpt, featured image, etc.)


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

## Template Parts
Template parts are used to create reusable page parts of the website.

Here are the custom template parts that need to be created:
- Header
    - Logo
    - Navigation
- Footer
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
- FAQ - see /patterns/ab-faq.php for a starter template
- Slider - see /patterns/ab-slider.php for a starter template
- Stats - see /patterns/ab-stats.php for a starter template
- Timeline - see /patterns/ab-timeline.php for a starter template
