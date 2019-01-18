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

> Jigsaw and Static Sites Generators are and want to directly go to the technical part of this article, please, refer to the \[Solution] section.

Not so long ago, the default (and preferred) choice of system to create content online was WordPress. After sometime, some alternatives appeared, like Tumblr, Ghost and Medium, to name a few. Like said, this was then, now, what we see is a shift towards the use of Static Site Generators.

Static Site Generators, SSG for short, are tools that help people create sites comprised of only static files, like the good old HTML, CSS and JavaScript. They allow the creation of sites from brochure-like ones to SPAs and even some dynamic-like types, such as blogs.

It is said that the use of SSGs helps providing a faster web experience as we are shipping pure static files. What is also said is that it is more secure, as we normally don't have to deal with input from forms and the like. Another remark is that is really cheap to serve these files. Being plain static files, some online services provide free hosting and serving, like Netlify and Github Pages.

However, only using HTML, CSS and JavaScript, also brings problems. We normally have many manual work to do like:

* create new file with proper naming convention and in the right place
* copy base HTML "frame" of the site into the file
* write content HTML (writing `p`, `strong`, `table`, `div`, etc)
* take care of not missing some closing tag which could (or better, would) break the layout
* commit and push the changes
* approve and merge PR, if using PR

Even using a nice SSG like Tighten Co's Jigsaw, many of those points still applies. If we use the templates mechanisms those tools provide, we still need to write our content in a Markdown (.md), for example, where we need to provide what is called _frontmatter_, metadata used to accomplish some functionality like:

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

## Related Works

### Flat File CMS

It is valid to point out some alternatives to the approach NetlifyCMS uses. The first and oldest one is the use of a Flat File CMS. Thoses CMS work much like a hosted WordPress installation would. The difference is that it does not use a Database, instead it uses a Flat File hierarchy to store content and configuration.

The use of a Flat File hierarchy allows a fast and somewhat secure site as well. The pages are precompiled to be served as fast as possible, much like a static website would. By default, differently from what static websites do, they do have a dashboard for users to access and create content.

Some of the most known Flat File CMS, at least in the PHP world, are: October CMS, Kirby, Statamic and Grav.

### Content as a Service

A new trend is to generate content through a service and consume it the same. In other words: A Saas application with an interface is used to create the content and then we consume this content through a REST/SOAP/GraphQL API.

These ones can be self hosted: you have your own server and install the application there to be used; or managed: an online service you normally pay to use (add content and consume it via an API). Examples of those services are: WordPress, Contentful and GraphCMS.

### Others

* Others
  * https://www.siteleaf.com/
  * https://getpublii.com/
  * https://www.gitbook.com/

## System Model

## Solution

* clone jigsaw blog template and add the netlifycms file, and put link here after the solution description
* https://github.com/raniesantos/artisan-static

## Analysis

## Simulation and Experimentation

## Conclusions

## Bibliography
