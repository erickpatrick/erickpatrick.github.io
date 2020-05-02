---
title: Making FZF.vim preview window with syntax highlighting from your Neovim theme
date: 2020-05-03T00:00:00.000Z
description: >-
   How to configure FZF.vim to use Bat, *a cat(1) clone with wings*, to highlight syntax 
   using the colors of your chosen Neovim theme.
categories:
  - programming
featured: true
extends: _layouts.post
section: content
---

After [setting up Neovim for PHP Development], much like any developer ever, I've spent 
a few hours adjusting its interface to my preference. Lots of things went in and out in
those hourse. One of them was the plugin [FZF.vim], which integrates the FZF cli app
into (Neo)Vim for fuzzy search.

Since I've been using `FZF` daily for quite some time, I thought it would be really good
to have similar experience inside Neovim as well. And to do so, I've used my prefered
plugin manager, [vim-plug], and installed `FZF.vim`. If you follow their instructions
properly, you'll get `FZF` running in no time.

By default, I've mapped <kbr><ctrl>-p</kbr> to oen FZF to be able to fuzzy find the files
I wanted:

```vim
nmap <silent> <C-P> :Files<CR>
```

This is quite nice because it resemables the <kbr><ctrl>-p</kbr> from VS Code or the 
<kbr><tab><tab></kbr> form PHPStorm. However, I was not happy with its interface...

![FZF.vim without any configuration](https://res.cloudinary.com/erickpatrick/image/upload/c_fit,h_602,q_80,w_1024/v1588453222/erickpatrick.net/Screenshot_2020-05-02_at_22.59.55.jpg)

As you can see, it was attached to the bottom of the screen, the preview pane was small,
the color highlighting was using an ugly theme... It did not feel like I would like to
use it as it was.

The small things are important and I learned that `FZF.vim` allowed us to configure its
placement, if the preview would use color output or not and some other things. And so,
I started changing it until I felt I was comfortable with it.

### Placement

The first I did was to change how and where it would present itself:

```
let g:fzf_layout = { 'window': { 'width': 0.9, 'height': 0.9 } }
let $FZF_DEFAULT_OPTS="--ansi --preview-window 'right:60%' --layout reverse --margin=1,4"
```

The two configurations above tells `FZF.vim` to show its finding area as modal window 
window that occupies 90% of the total area, both verticaly and horizontaly. It also
tells to push search area where we type our terms to the top (`--layour reverse`).

To have a better previewing experience, I've told `FZF` to keep the ANSI colors (`--ansi`)
and to make the preview column take 60% of the total area of `FZF.vim` window. It got
way better than before! See for yourself:

![FZF.vim with better placement for search area](https://res.cloudinary.com/erickpatrick/image/upload/c_fit,h_602,q_80,w_1024/v1588454315/erickpatrick.net/Screenshot_2020-05-02_at_23.16.08.png)

### Ignoring Files and Folders

But, as you may have guessed, it was not good enough yet. There were things missing. In
the screenshot above, you can see that `FZF.vim` is looking into folders that are not
part of my project (the `vendor` folder). I could go with this but to have a great
experience, just like we see in editors like VS Code and PHPStorm, it is better
to have `vendor` and other folders ignored.

To do so, we have to tell `FZF.vim` to use an app that takes into consideration files
ignored through our `.gitignore` and that have sane defaults to detect this kind of
things. As I already use [Ripgrep] instead of the default `find` command in the CLI
it makes total sense to also tell `FZF.vim` to use it as well. And to achieve this
I did as follows:

```
let $FZF_DEFAULT_COMMAND = 'rg --files --ignore-case --hidden -g "!{.git,node_modules,vendor}/*"'
command! -bang -nargs=? -complete=dir Files
     \ call fzf#vim#files(<q-args>, fzf#vim#with_preview(), <bang>0)
```

The first line is the command that `FZF`/`FZF.vim` will use to find files ignoring things
we don't need. The second and third ones ensure that the preview window will appear for
the new default command we're using (`rg`).

Now, it is much better and we don't have to deal with that many unnecessary files in the
search result. See for yourself with the same fuzzy findind sequence as the previous
screenshot:

![FZF.vim search resulting ignoring unwanted files and folders](https://res.cloudinary.com/erickpatrick/image/upload/c_fit,h_602,q_80,w_1024/v1588455082/erickpatrick.net/Screenshot_2020-05-02_at_23.31.08.png)

### Syntax Highlighting

And yet again, it's still not good. This code highlighting is not matching the color scheme
from my Neovim theme (Dracula theme). Again, after digging here and there, I learned that
it's possible to tell `FZF.vim` to use a different output printer. In this case I decide
to use [Bat]. This CLI app is a replacement for `cat(1)` but on steroids, or as its doc
says, "with wings".

`Bat` allows us to hightlight and colorize our outputs and it respects our CLI theme! As I'm
someone who likes to have basically the same scheme everywhere, my iTerm2 also uses Dracula
as the default theme. With this information at hand, I needed to change 2 things:

1) In my `~/.zshrc` I've added:

```
export BAT_THEME="Dracula"
```

Saved the file and restarted ZSH to make the configuration get loaded. 

2) I've updated the `$FZF_DEFAULT_OPTS` to the following:

```vim
let $FZF_DEFAULT_OPTS="--ansi --preview-window 'right:60%' --layout reverse --margin=1,4 --preview 'bat --color=always --style=header,grid --line-range :300 {}'"
```

As you can see, I added the flag `--preview` with some configurations. It now uses
`bat` as the output printer and will always color its output (syntax highlighting
included). After saving the configuration and resourcing it (`:so %`), the new
`FZF.vim` window modal preview looks like the following:

![FZF.vim preview pane using the theme colors we use](https://res.cloudinary.com/erickpatrick/image/upload/c_fit,h_602,q_80,w_1024/v1588456318/erickpatrick.net/Screenshot_2020-05-02_at_23.51.47.png)

If you happen to use other theme, you can check which themes `Bat` supports. Check in
its Github page on how to check the currently supported ones.

### In the end...

If you don't like to "lose" time configuring a tool to something you like and prefer
using aonther one that is opinionated, no problems! What is important is that we have
choice to do so.

I do like having this sort of control (even when running PHPStorm or VS Code) and as
I really want to go back into using (Neo)Vim, it was a good time to try to replicate
some configurations from those other places into this environment.

If you're still reading, thank you for your time and I hope you enjoyed this tip as much
as I liked setting and writting it up. See you!

[setting up Neovim for PHP Development]: https://www.erickpatrick.net/blog/my-neovim-setup-for-php-development
[FZF.vim]: https://github.com/junegunn/fzf.vim/
[vim-plug]: https://github.com/junegunn/vim-plug
[Ripgrep]: https://github.com/BurntSushi/ripgrepp
[Bat]: https://github.com/sharkdp/bat
