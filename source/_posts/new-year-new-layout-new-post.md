---
title: 'New year, new layout, new post'
date: '2019-01-09'
description: >-
  After long time without posts, I decided for a new year resolution: new layout
  and weekly posts...
cover_image: ''
categories:
  - miscellanea
  - programming
Is featured: true
extends: _layouts.post
section: content
---
## Why would I need a new layout?

It's a new year, a new day, and this site was in need of a new layout. The old one was already due as it was not matching my personality anymore. Though it was a simple, sort of minimalist design as well, this one better shows off my true identity so to say.

Sure, fully minimalistic seems bland, however, it is also where its true strength shines: focus, first and foremost. Long is the time when I wanted to present a bright and colorful idea of what I am  through this blog. No more. This is who I am, a simple, focused and straight to the point person, just like this blog.

What I like about this style, the minimalistic style, is that it allows a fast and responsive experience of sites without much work. What's even more interesting is that it also brings the possibility to read websites on wearables, like the Apple Watch. Another site I manage, [RPG do Mestre](https://www.rpgdomestre.com) is also using this approach and can be read on any wearable that have a browser! Pretty neat, huh?

Another aspect of minimalism that I'm applying to website design is the _no_ use third party JavaScript that allows my readers to be tracked through out the web. In this website I don't use any JavaScript for analytics, sharing, or something similar that would allow you to be tracked by those big corporations trying to use and sell your data (_cof-Facebook-cof_).

## Which technologies am I using to build this site?

Not only a layout/design change was needed for this website. I also wanted to simplify its publication and update mechanisms. Being a static website, I wanted to use a static site generator for this, specially as it was too lame from my side, being a programming, not having a mechanism to properly build my own website.

With RPG do Mestre I am using Tighten Co's [Jigsaw](https://jigsaw.tighten.co/) static site generator. It is build with PHP and uses many Laravel's components. If you know what I'm talking about, you know this means it is super easy to work with and a very elegant solution for a static site generator.

For the admin area (yes, a static site generator with an admin panel!!!), I'm using [Netlify CMS](http://netlifycms.org). It is really easy to deploy, has a login system built-in that leverages GitHub OAuth capabilities and has a workflow system that uses GitHub's Pull Requests to set as _in review_ and _published_ posts.

![Screenshot for Netlify CMS](/assets/images/uploads/captura-de-tela-2019-01-08-às-18.01.29.png "Screenshot of this website using Netlify CMS admin panel")

For infrastructure, I'm leveraging [Netlify's main offering, it's SaaS static site hosting](https://www.netlify.com/). It is really, really nice. It gives us free SSL/HTTPS via Lets Encrypt. We also have a nice way to create forms for our static page without using a third party script/service (which soon will also be present on this own website), allow collaborators to work with us, add extra HTTP headers, Lambda Functions... Check them out, they're really amazing =D

## What comes in 2019?

The year of 2018 was a really nice one in various aspects of my life, including, but no only, family and work. I want to make 2019 even better. And one of my resolutions for this year is to try to blog, at least once a week, starting with this publication, of course. If not possible to have it weekly, at least I want to achieve the 52 publications mark, so I'd have a 1-per-week ratio.

You can expect to see publication from various subjects here. However, I'll try to write as much as possible about web, mobile and app programming. I'm specially fond of mobile right now, as I'm learning to program for Apple devices (iOS mostly) and this will probably reflect into the publications. There will also have lots of small publications with quick tips/tricks on programming that I stumble upon from time to time, that's for sure.

##
