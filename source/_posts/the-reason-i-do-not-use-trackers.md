---
title: 'The reason I do not use trackers'
date: 2019-08-26T00:00:00.000Z
description: >-
  In this post, I explain why I do not use trackers on my site and how it affected the way I create sites
categories:
  - programming
featured: true
extends: _layouts.post
section: content
---

When creating websites, it's almost a norm to add something like Google Analytics to it. We normally care about how many people is visiting our creation, which contents they see the most and so on, in order to find the right niche. Isn't it like this? I bet you're doing just like that.

There are good reasons not to do so, however. In this post I'll show the ones that made me not use a tracker here. Yes, no Twitter/Facebook buttons or even Google analytics. You can have a look into the code and see that I do not use them.

## First and foremost, privacy

I value my privacy. And if I don't want my browsing history or any other personal information being used for evil means, it would be more than normal not to take part into making others traceable around the web, right? However, the reality is not so black-and-white nor so beautiful. But it can be...

### GDPR

Living in a country part of the <abbr title="European Union">EU</abbr>, I must abide to the General Data Protection Regulation, <abbr title="General Data Protection Regulation">GDPR</abbr> for short. Basically, it protects EU web users' personal data by giving them the power to choose what can and cannot be used and/or shared with other companies. 

After taking part into various GDPR workshops, I summarize it into the following: 1) only get data that you really need to operate your business; 2) do not share this data unless strictly allowed by the user and as part of a process to operate your business.

Of course, there are much more nuances to the GDPR, but as a guideline, I think that following those two points is safe enough.

Getting back on track, as I can't guarantee that external services I could use to see how this site is performing would really be respectful to the laws (Facebook being one of the biggest offenders), I decided to ditch them completely.

But, as you may have realized, this is not the only reason...

## Speed and performance

Without third party trackers, I don't need to bloat the code with extra HTML, CSS and/or JavaScript (specially with those horrendous cookie banners/selectors). The last one being the worse as it can bring or build the first two. And if it is capable of doing it, it will have a large size.

### My website is faster

If I don't have to add extraneous code, the time it will take to download everything that is really necessary to see the content of my site will take less time. 

See, if I don't have the Twitter tweet image/button (which comes with HTML, CSS, JavaScript and images), or Facebook like/share (which also brings their own files), or even two or 3 JavaScripts that Google Analytics load, all my files will use the full bandwidth and get faster to your device...

### Your device performs better

...and once at your device, the browser you use still have to understand each file and act accordingly. 

If it's HTML, it will try to display the content as close as possible to what the owner/creator meant; if CSS, it will try to rearrange the pixels on your screen to make the content subjectively more elegant; if JavaScript, the browser will have to do some extra work, be it invisible, like a web worker to cache assets or content so you can access the site even offline, or like a code to make a slider on the page go from one item to the other.

And the more of each one of those files the browser encounters when reading the HTML, more time it takes to download, read, interpret and act. So, if no trackers, your browser has more free time and won't eat so much precious memory to do all of these things as fast as it can given the circumstances.

## Smaller todo list = more time

Another advantage is less mental/cognitive load.

### Website pre-launch

When developing a site, I don't want my trackers to get dummy data from my local environment. Or I don't use a tracker locally or I have two trackers for different environments. Either way, I have to remind myself to add the production tracker code (for each tracker...) before making my site live.

### Daily work

During my daily work I would also need to keep track of how they're affecting the site's performance. 

One of these trackers may be temporarily down, making the browser wait a lot to ensure it's not just a bad attempt to connect to the server. In turn, this will also affect the load of each and every other asset to be downloaded. And this is true even when you apply techniques to parallelize download of assets.

And this forces us to go even deeper into how to load resources to not affect performance. We lose time into things that would be unnecessary we hadn't those trackers in the first place.

### More time

Moreover, if I don't lose so much time checking how to better load resources (you still need to take care of your own things), I have more time to solve more important issues: provide a more engaging experience to the user; provide better content and presentation; experiment with other things (A/B testing without JavaScript, for example); and so much more.

## Freedom to write whatever I want

And this leads me to be free to write what I want, what I learned, what I care. When looking into numbers and statistics, one can get too attached to them trying to give what "users want". Oftentimes, though, we just end up looking into numbers we won't know how to really leverage to their full potential.

## There are alternatives

Everything is beautiful and all but, what if I want to have statistics, do I have to simply accept that I will not be able to have them?

### Server access logs

It's true that having no trackers on this site I cannot check so easily if or which articles are getting traction or whatsoever. However, we can still rely on the good old server access logs to have an idea on how those things are going.

Servers are necessary to provide a website. And we may have access to the access logs of some of them which we can do some voodoo-parsing, data science cleaning magic and have some data that those trackers would provide us.

Wanna know if customers come via Facebook, Twitter, etc? Check if there are query parameters those places add. Want to know if they came from Google or other search engine? Check links' referrers. Most visited page? Check which page has the most entries...

Of course, we won't have the same level as those services or even the real time abilities, but we will have some data to work on. 

### Own tracker

If really necessary to go down the road to have access to more data, we can still build owr own tracker that, in theory, comply to the best standard of privacy, security and performance. It's a lot more work but this is also an alternative.

## In the end

Be creative, think outside the box, and you can get over the need of trackers. Or do like I did: simple ditch them and be free.