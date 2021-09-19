![](https://i.imgur.com/9UPvqj9.png)

# [Chaos](https://github.com/LafeLabs/chaos/)

A self-replicating text-based mixed reality game for mutual aid.

## How to play:

1. follow the scroll to the place
2. complete the quest
3. replicate the game

## To replicate the game:

1. choose a name for a space about a mile across
2. go find a shared public place(about the size of a street corner or bus stop) in that space, give it a name
3. write a quest to help the community in that place specifically
4. give place and quest to an operator, who will write a scroll, post it and give you the address
5. create white rabbit for the scroll and distribute

## To replicate CHAOS system

If you want to replicate all the software parts, email the current Operator of this instance at lafelabs at gmail dot com.  This is all free, but you will need to do some tedious computer things.  You can also learn to run servers on any other platform including Windows, Mac, Android, iOS, and Raspberry Pi.

## laws of geometron

1. everything is physical
2. everything is fractal
3. everything is recursive
4. no money
5. no mining
6. no property
7. look at the insects
8. look at the fungi
9. language is how the mind parses reality

## Influences:

 - [Zork/Adventure style text-based games](https://en.wikipedia.org/wiki/Zork)
 - [Letterboxing](https://en.wikipedia.org/wiki/Letterboxing_(hobby))
 - [Psychogeography](https://en.wikipedia.org/wiki/Psychogeography)
 - [Exquisite corpse](https://en.wikipedia.org/wiki/Exquisite_corpse)
 - [Chaos Magic](https://en.wikipedia.org/wiki/Chaos_magic)
 - [the Diggers](https://en.wikipedia.org/wiki/Diggers)
 - [Pokemon Go](https://en.wikipedia.org/wiki/Pok%C3%A9mon_Go)
 - [Dungeons and Dragons](https://en.wikipedia.org/wiki/Dungeons_%26_Dragons)
 - [geometron/trash magic](https://www.trashrobot.org)
 - [really really free markets](https://en.wikipedia.org/wiki/Really_Really_Free_Market)
 - [food not bombs](https://en.wikipedia.org/wiki/Food_Not_Bombs)


## Links: 

 - [fork down](fork.html)
 - [../](../)
 - [php/replicator.txt](php/replicator.txt)
 - [global replicator link](https://raw.githubusercontent.com/LafeLabs/chaos/main/php/replicator.txt)
 - [data/dna.txt](data/dna.txt)
 - [scroll editor](scrolleditor.php)
 - [code editor](editor.php)
 - [localhost](http://localhost)
 - [github repo](https://github.com/LafeLabs/chaos)
 - [dnagenerator.php](dnagenerator.php)
 - [text2php.php](text2php.php)
 - [copy from other servers](copy.html)
 - [scroll set replicator](scrollset.html)
 - [replicator.php](replicator.php)
 - [scroll delete](scrolldelete.html)
 - [distance calculator](distance.html)
 - [qrcode](qrcode.html)
 - [geometron set replicator](set.html)

## How to create a CHAOS server

1. Start a new [github](https://github.com/) repository with a CC0 public domain license
2. Clone the repository to a directory where you have [PHP](https://www.php.net/) working on your computer.
3. Create a new file in the new directory called replicator.php and copy the file [php/replicator.txt](php/replicator.txt)([global url](https://raw.githubusercontent.com/LafeLabs/chaos/main/php/replicator.txt)) into it, then run from the command line by typing "php replicator.php".
4. Run a local PHP web host on your machine by typing "php -S localhost:80", and point a web browser to [http://localhost](http://localhost).
5. Create new scrolls and edit them using [scrolleditor.php](scrolleditor.php). Scrolls are in the [Markdown](https://daringfireball.net/projects/markdown/) language
6. Link scrolls to each other using local links specific to CHAOS servers, where the link is either to (scrolls/scrollname) or uses the syntax scroll(scrollname)
7. Delete unused scrolls with [scrolldelete.html](scrolldelete.html)
8. Update the dna with [dnagenerator.php](dnagenerator.php)
9. Update the scroll replicator with [scrollset.html](scrollset.html)
10. Use [editor.php](editor.php) to edit the code in replicator.txt so that both links to global urls are to your new repository rather than what they are now.
11. Push all changes to github
12. Either get a new domain for the place you're building CHAOS in or use [fork.html](fork.html) to fork down to a new page below an existing CHAOS server.  In whatever directory you will build your new server, place another copy of your new file [php/replicator.txt](php/replicator.txt)([global url](https://raw.githubusercontent.com/LafeLabs/chaos/main/php/replicator.txt)), saved again as replicator.php.
13. Point a browser to [whatever your server address is]/replicator.php, wait, then click the link
