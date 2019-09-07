---
title: 'Another new layout'
date: 2019-08-22T00:00:00.000Z
description: >-
  After long time without posts, I decided for a new year resolution: new layout
  and weekly posts...
categories:
  - programming
featured: true
extends: _layouts.post
section: content
---
## Why would I need a new layout, again!?

I don't know you, but I ultimately can't stay too long with the same layout for my blog. After some months I start to find it boring, not meeting my current state of mind, knowledge or something like that. Normally, when that feeling comes, I try to hold myself and not update anything and just keep things where and how they are. This time, however, I let this feeling grow too much and started working on a new version of this site.

Maybe I've said it already but this own site is my playground for new design/layout ideas to brush up my skills with HTML/CSS and new technologies alike. Of course, this time it's no different. While looking for inspirations, one interesting idea came to my mind: what if I tried to redesign my site in a print layout way?

You know, using some nice grids, columns, mixing and matching of bold titles and text, white spacing, and all. And, above all, ensuring the site stays fast and well designed on mobiles as well as desktops. This current version is the result of this things... 

## Which technologies am I using to build this site?

### Static Site Generator

I'm still using Tighten Co's [Jigsaw](https://jigsaw.tighten.co/) static site generator, just like in the [previous version](https://www.erickpatrick.net/blog/new-year-new-layout-new-post). However, I simplified the layout system. There were 7 different layouts files for that simple layout and that was weird. How did a simple layout like that need so many files? 

With that in mind, I streamlined the layouts and reduced to 4, including the master layout from which all others inherit. So, we still have 3 other layouts: Post, Category and RSS. Category is basically an altered version of the "Features articles" on the home page. RSS is the one to, guess what, generate the RSS feed. This way, it's like we only have Master and Post, which is awesome.

### Content management

Now, I'm not using [Netlify CMS](http://netlifycms.org) anymore. I'm planning on making a backend that will be used only on locally to generate the markdown files for the posts. The review process can still exist, I only need to create different branches for each new publication I want and open the Pull Requests. Which, admittedly, I'm not doing for this post =P 

### Infrastructure and hosting

I'm still using [Netlify's main offering, it's SaaS static site hosting](https://www.netlify.com/) for the same reasons presented previously in an old post.

### Frontend assets

One of the biggest changes this time is that I'm not creating the whole CSS by hand. I'm using a framework again. The one I chose this time was the TailwindCss. There's this trend to use _utility first_ CSS classes to create layouts and I wanted to explore, test and all.

I have to admit that it's kinda nice to develop with it and see things popping up on the screen. It gives a better feeling compared to using something like Bootstrap, even when using the CDN version, as we don't need to bring lots of things pre-built which makes the final CSS really huge.

But, there's one thing that I grew up doing when creating CSS: semantic classes. And, to be quite honest, TailwindCss passes far-far away from it, to the point that it even suggests not doing it, only if it makes sense to create a component out of it. And not just that, the component ideally would be from a JavaScript framework, like Vue.js or React components.

Clearly, we can deviate from that. It  may need some tweaks here and there so we still get the small footprint of only used utilities when doing that, but it is 100% possible. And I may be doing that as I'm really fond of seeing `.sidebar` instead of `w-full sm:w-3/12 md:w-2/12 px-3 sm:ml-auto order-last sm:order-first`.

### Performace

As I said in the introduction, one of my targets was to ensure this site is fast in both mobile and desktop browsers. For my happiness and peace of mind, even using a CSS Framework this time, I managed to achieve this target. In all major page speed/best practices testers out there, this site gets 98-100, out of 100, as score. 

Here are the links to the runs:

- [Google Page Speed Insights](https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fwww.erickpatrick.net&tab=mobile)
- [GTmetrix *](https://gtmetrix.com/reports/www.erickpatrick.net/l2mhMQyJ)
- [Pingdom tools](https://tools.pingdom.com/#5b2e29eeee000000)

> __A note about GTmetrix__: This tool goes to both PageSpeed and YSlow.

Only two things I need to make everything a perfect 100 score: Add a *expires header* to the small JavaScript file the site uses; and find a way to minify even my HTML and JavaScript (to save 0.5kb according to PageSpeed). For me, it's not a huge save at the moment, but imagine that I start getting thousands/millions of views per month. This would save my pocket a few dozen dollars =)

## In the end...

...it's always nice to give a breath of fresh air to my site. I'm particularly happy this time with the end result, both in terms of design/layout and tech/maintainability. If you have stories like that, please share them with me through Twitter (@erickpatrick), I'd love to see/read/listen to them =)