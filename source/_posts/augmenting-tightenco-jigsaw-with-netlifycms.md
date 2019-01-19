---
title: Augmenting TightenCo Jigsaw with NetlifyCMS
date: '2019-01-18'
description: >-
  Today, I show how to integrate NetlifyCMS to Tighten Co's static site
  generator, Jigsaw, as it gives us a nice interface to manage static content
  while using the power of Git workflow (commits, branches and PRs).
categories:
  - programming
featured: true
extends: _layouts.post
section: content
---
## Abstract

Today, I show how to integrate [NetlifyCMS] to Tighten Co's static site generator, [Jigsaw], as it gives us a nice interface to manage static content while using the power of Git workflow (commits, branches and PRs).

## Introduction

> Jigsaw and Static Sites Generators are and want to read technical part, please refer to the [Proposed solution] section.

Not so long ago, the default (and preferred) choice of system to create content online was [WordPress]. After sometime, some alternatives appeared, like [Tumblr], [Ghost] and [Medium], to name a few. Like said, this was then, now, what we see is a shift towards the use of Static Site Generators.

Static Site Generators, <abbr title="Static Site Generator">SSG</abbr> for short, are tools that help people create sites comprised of only static files, like the good old HTML, CSS and JavaScript. They allow the creation of sites from brochure-like ones to SPAs and even some dynamic-like types, such as blogs.

It is said that the use of <abbr title="Static Site Generator">SSG</abbr>s helps providing a faster web experience as we are shipping pure static files. What is also said is that it is more secure, as we normally don't have to deal with input from forms and the like. Another remark is that is really cheap to serve these files. Being plain static files, some online services provide free hosting and serving, like [Netlify] and [GitHub Pages].

However, only using HTML, CSS and JavaScript, also brings problems. We normally have many manual work to do like:

* create new file with proper naming convention and in the right place
* copy base HTML "frame" of the site into the file
* write content HTML (writing `p`, `strong`, `table`, `div`, etc)
* take care of not missing some closing tag which could (or better, would) break the layout
* commit and push the changes
* approve and merge PR, if using PR

Even using a nice <abbr title="Static Site Generator">SSG</abbr> like Tighten Co's Jigsaw, many of those points still applies. If we use the templates mechanisms those tools provide, we still need to write our content in a Markdown (.md), for example, where we need to provide what is called _frontmatter_, metadata used to accomplish some functionality like:

* publication title
* publication date
* filename and filepath, often generated using the items above
* publication category
* publication slug
* publication meta content (title, description, keywords used for SEO)
* template used
* any other extra or _dynamic_ data

And all of these things are normally done by automagically for us by a system such as WordPress. However, with SSGs we have to do or provide this information each and every time. By using SSGs we no longer have the easy of use of an interface to manage our content... 

Or do we?

Here enters Netlify and its CMS, NetlifyCMS. It is a JavaScript library allowing a specific static page (not whole website) to behave like a dashboard interface of CMS for a static website. It provides ways to create dashboard pages to generate most of the content a static site generator can.

Before really diving into it, I'll present some related work regarding static site generators and user interfaces explain, presenting some alternatives and their approaches. After that, I'll explaining more of NetlifyCMS features and how we can integrate it with Jigsaw static site generator.

## Related works

### Flat File CMS

It is valid to point out some alternatives to the approach NetlifyCMS uses. The first and oldest one is the use of a Flat File CMS. Those CMSes work much like a hosted WordPress installation would. The difference is that it does not use a Database, instead it uses a Flat File hierarchy to store content and configuration.

The use of a Flat File hierarchy allows a fast and somewhat secure site as well. The pages are precompiled to be served as fast as possible, much like a static website would. By default, differently from what static websites do, they do have a dashboard for users to access and create content.

Some of the most known Flat File CMS, at least in the PHP world, are: [October CMS], [Kirby], [Statamic] and [Grav].

### Content as a Service

A somewhat new trend is to generate content through a service and consume it the same. In other words: A <abbr title="Software as a Service">SaaS</abbr> application with an interface is used to create the content and then we consume this content through a REST/SOAP/GraphQL API.

These ones can be self hosted: you have your own server and install the application there to be used; or managed: an online service you normally pay to use (add content and consume it via an API). Examples of those services are: [WordPress], [Contentful] and [GraphCMS].

### Others

There are others works, like [Siteleaf], that provides an interesting UI to create content and publish to various places, including GitHub Pages. It is free to experiment, however, the most interesting features are in the paid plans.

Other interesting work is from [Publii], which is an Electron app. It has some interesting functionality, like creation of menus, tags and the like. However, being an installable app may stop you from posting on the go. Unfortunately, you are not going to easily access it via tablet or smartphones.

And the last of this list of alternatives, we have the good old [Gitbook]. It uses GitHub and its GitHub Pages functionality; also provides an interface to write content; however, it is mainly suited for documentation or technical books. It is possible to have a website there, but it is not the best place.

## The problem

When we talk about statically generated websites we now that it does not have a system in the server generating it. It is previously generated and only served to the customer.

As previously shown, the two most common solutions are the use of a backend server or a service. Our content and us rely on the structures and restrictions imposed by those systems:

* installing an app
* paying to use
* paying for extras
* fetch content via AJAX
* higher hosting costs
* manage servers
* lots of manual work

We need a better solution. May not be a perfect one, but one that provides a interface with the good parts of <abbr title="Static Site Generator">SSG</abbr> without having the drawbacks shown above.

## Proposed solution

NetlifyCMS is the closest to that solution. Better: it is the best I could find that meets this criteria. Together with a <abbr title="Static Site Generator">SSG</abbr>, Jigsaw in the case of this publication, it is a really powerful tool.

After configuring and opening the NetlifyCMS dashboard, we get a nice and simple interface. It can create collection entries, like blog posts, or one off pages, like About, Contact, etc.

The sections to create those entries are defined in a Yaml file. Each section must list all its fields, pointing out which ones are required. It is also possible to order the fields and hide some with static (not configurable) values.

We also get an image uploader that can send images to repository which the <abbr title="Static Site Generator">SSG</abbr> belongs, or to a image upload service, like Cloudinary.

The last section we get is the Workflow area. There we can see:

* publications that are set as draft/pending review (open PRs);
* publications being reviewed (PRs that may need modifications);
* publications ready to publish (PRs ready to be merged);

We still have the same old workflow that a <abbr title="Static Site Generator">SSG</abbr> gives us, but a more robust way to work through the publications. Now, there's a proper content management workflow in place.

Another thing that we may get is authentication through email-password or OAuth providers, like GitHub, Google, Facebook, etc. This is really nice as we can invite people to participate into the project as well.

You can have a look into what else is possible to achieve with NetlifyCMS by going to their website. Just visit its page by clicking on one of [NetlifyCMS] links throughout this post :) We can see its development openly at GitHub.

### Technicalities

As already mentioned, I'm going to use [Jigsaw] as the static site generator for this example. However, NetlifyCMS should work with any other SSG. 

[I created a repository] that extends [Jigsaw's default blog template] adding the necessary files to build NetlifyCMS dashboard for us. Namely, the files are:

#### netlify.toml

```yaml
[build]

command = "npm run production"
publish = "build_production"
environment = { PHP_VERSION = "7.2", NODE_VERSION = "11" }
```

This file is necessary to deploy our site into Netlify. You can delete it or skip it if you don't deploy into Netlify. We tell the service which `command` should it run to build our website. 

It is also said that it should publish the folder `build_production` and that the `environment` that should be used required PHP with version 7.2 and Node.js with version 11.

> It is not necessary to deploy to Netlify to be able to use NetlifyCMS

#### source/admin.blade.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | {{ $page->site->title }}</title>
    <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
</head>
<body>
    <script src="https://unpkg.com/netlify-cms@^2.0.0/dist/netlify-cms.js"></script>
    <script>
    if (window.netlifyIdentity) {
        window.netlifyIdentity.on("init", user => {
            if (!user) {
                window.netlifyIdentity.on("login", () => {
                    document.location.href = "/admin/";
                });
            }
        });
    }
    </script>
</body>
</html>
```
This file is responsible to render our dashboard and uses the next file as configuration source. It does not use Blade templates as NetlifyCMS will provide the full template for the dashboard. However, we do set the title of the page by using Jigsaw global configuration `$page->site->title`.

We add two external JavaScript files: __*the first one*__ in the head is the one allowing the admin panel to authenticate users. Like already mentioned, it uses Netlify Identity mechanism that leverages various OAuth partners; __*the second one*__, in the body, loads the NetlifyCMS library itself.

There's a third JavaScript, inlined, that is responsible to redirect us back to `http(s)://<site-domain>.<tld>/admin`. This avoids the user being redirected to the homepage as per default.

#### source/admin/config.yml

```yaml
backend:
  name: git-gateway
display_url: https://<your-website-url>

publish_mode: editorial_workflow
media_folder: "source/assets/images/uploads"
public_folder: "assets/images/uploads"

collections:
  - name: "posts"
    label: "Posts"
    label_singular: "Post"
    description: >
      All my blog posts
    folder: "source/_posts"
    slug: "{{slug}}"
    extension: "md"
    format: "yaml-frontmatter"
    create: true
    identifier_field: "title"
    fields:
      - { label: "Title", name: "title", widget: "string", required: true, default: "" }
      - { label: "Author", name: "author", widget: "string", required: true, default: "" }
      - { label: "Date", name: "date", widget: "date", format: "YYYY-MM-DD", dateFormat: "YYYY-MM-DD", required: true, default: "" }
      - { label: "Description", name: "description", widget: "string", required: true, default: "" }
      - { label: "Content", name: "body", widget: "markdown", hint: "Main content goes here." }
      - label: "Cover image"
        name: "cover_image"
        widget: "image"
        required: false
        media_library:
          config:
            multiple: false
      - label: "Categories"
        name: "categories"
        widget: "select"
        multiple: true
        options: ["feature", "configuration"]
      - { label: "Featured?", name: "featured", widget: "boolean", default: false, hint: "Should it be featured on the home page?" }
      - { name: "extends", widget: "hidden", required: true, default: "_layouts.post" }
      - { name: "section", widget: "hidden", required: true, default: "content" }
```
Here we see how our post collection is added to the dashboard and which fields should be rendered so we can fill them out and create new post entries.

We also see that we have fixed options for `categories`. For the moment, this is a limitation I did not find a solution. But, seeing the development on GitHub, NetlifyCMS seems to have a solution. I will wait a bit more and see if they come up with something before trying to fix it myself.

* clone jigsaw blog template and add the netlifycms file, and put link here after the solution description
* https://github.com/raniesantos/artisan-static

## Analysis

## Simulation and Experimentation

## Conclusions

[Gitbook]: https://www.gitbook.com/
[Publii]: https://getpublii.com/
[Siteleaf]: https://www.siteleaf.com/
[WordPress]: https://wordpress.org/
[Contentful]: https://www.contentful.com/
[GraphCMS]: https://graphcms.com/
[NetlifyCMS]: https://www.netlifycms.org/
[Netlify]: https://www.netlify.com/
[Jigsaw]: http://jigsaw.tighten.co/
[Tumblr]: https://www.tumblr.com/
[Ghost]: https://ghost.org/
[Medium]: https://medium.com/
[Kirby]: https://getkirby.com/
[Statamic]: https://statamic.com/
[Grav]: https://getgrav.org/
[October CMS]: https://octobercms.com/
[GitHub Pages]: https://pages.github.com/
[I created a repository]: https://github.com/erickpatrick/jigsaw-blog-netlify-netlifycms-template
[Jigsaw's default blog template]: https://github.com/tightenco/jigsaw-blog-template
