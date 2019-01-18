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
Today, I show how to integrate NetlifyCMS to Tighten Co's static site generator, Jigsaw, as it gives us a nice interface to manage static content while using the power of Git workflow (commits, branches and PRs).

## Introduction

> If you already know what a Static Site Generetor, Jigsaw, CMS System, Markdown and all that are, and whant to directly go to the technical part of this article, please, refer to the [Solution] section.

Not so long ago, anyone wanting to publish some content online would select one of the existing free publishing platforms like Tumblr, WordPress or Medium. Another possibility would be to self host a content management software which could be, among many others, WordPress or Ghost.

Those platforms are known as CMS (Content Management Systems). They all provide some sort of *easy to use (tm) interface* allowing users to create content in a fast, confortable and low friction way. They normally aalso use a database to save the content. And this was the way for a long time. However, this is changing.

Nowadays, we see more and more people, specially developers, using plain old HTML, CSS and JavaScript files in their websites. Many argue that it allows for a faster experience for the final user (consumer) and, sometimes, faster for development as well. 

Some also say that simply using HTML, CSS and JavaScript files, the site could be much more secure and chear and easier to host, to the point of paying nothing. Yeah, nothing as in free, using services like Github Pages, Netlify, Amazon S3 and others.

However, only using HTML, CSS and JavaScript, one also loses the easyness of using an interface to create content. And this normally implies having to manually:

- create new file with proper naming convention and in the right place
- copy base HTML "frame" of the site into the file
- write content HTML (writing `p`, `strong`, `table`, `div`, etc)
- take care of not missing some closing tag which could (or better, would) break the layout
- commit and push the changes
- approve and merge PR, if using PR

Even using a static site generator (SSG) like Tighten Co's Jigsaw, many of those points still applies. If we use templates mechanisms those tools provide, we still need to write our content in a Markdown (.md) file, for example.
In those files, we need to provide what is called *frontmatter*. metadata used to accomplish some functionality like:

- publication title
- publication date
- filename and filepath, often generated using the items above
- publication category
- publication slug
- publication meta content (title, description, keywords used for SEO)
- template used
- any other extra or *dynamic* data

And depending on the SSG used, this data must use specific separators. Often they are `---`, but they can be `>>>` and `<<<`, `{{{` and `}}}`, or any other character combination the tool has decided to use. If forgotten, content may not be generated or displayed properly leading to frustration and other problems.

Knowing that, one could think that best scenario is a user interface that works with static site generator. This would avoid most, if not all, of the manual and problematic work that SSGs bring. Netlify thought the same way a came up with its NetlifyCMS.

NetlifyCMS is a JavaScript library that allows an specific static page (not website) to behave like a dashboard interface of CMS for a static website. It provides ways to create dashboard pages to generate most of the content a static site generator can.

Before really diving into it, I'll present some related work regarding static site generators and user interfaces explain, presenting some alternatives and their approaches. After that, I'll explaing more of NetlifyCMS features and how we can integrate it with Jigsaw static site generator.

## Related Works

- Content as a service
  - Hosted platforms
    - WordPress
  - SaaS platforms
    - https://www.contentful.com
    - https://graphcms.com/pricing
- Flat File CMS
  - October CMS
  - Kirby
  - Statamic
  - Grav
- Others
  - https://www.siteleaf.com/
  - https://getpublii.com/
  - https://www.gitbook.com/

## System Model

## Solution

- clone jigsaw blog template and add the netlifycms file, and put link here after the solution description
- https://github.com/raniesantos/artisan-static

## Analysis

## Simulation and Experimentation

## Conclusions

## Bibliography
