[home](scrolls/home)

*what is the language of this place?*

[![](https://i.imgur.com/9UPvqj9.png)](https://github.com/LafeLabs/chaos/)

![](https://i.imgur.com/LB6kLFj.png)

# CHAOS

A text-based mixed reality game.

## How to play:

1. follow the scrolls
2. answer the questions
3. leave a thing, take a thing
4. write a message, read a message

## Rules:

1. everything replicates
2. everything evolves]
3. everything dies

## How to create a new CHAOS game:

1. replicate CHAOS server to development computer, github
2. find a place for an exchange, name it, leave a marker
3. write a question for the place
4. write directions to the place
5. create and edit scroll with question, name, directions, links to other scrolls
6. push scroll to github, replicate from github to global domain with CHAOS server
7. post links to public facing server
8. Link up the map

## Replicating CHAOS server

1. Start a new [github](https://github.com/) repository with a CC0 public domain license
2. Clone the repository to a directory where you have [PHP](https://www.php.net/) working on your computer.
3. Create a new file in the directory called replicator.php and copy the file [php/replicator.txt](php/replicator.txt) into it, then run from the command line by typing "php replicator.php".
4. Run a local PHP web host on your machine by typing "php -S localhost:80", and point a web browser to [http://localhost](http://localhost).
5. Create new scrolls and edit them using [scrolleditor.php](scrolleditor.php). Scrolls are in the [Markdown](https://daringfireball.net/projects/markdown/) language
6. Delete unused scrolls with [scrolldelete.html](scrolldelete.html)
7. Update the dna with [dnagenerator.php](dnagenerator.php)
8. Update the scroll replicator with [scrollset.html](scrollset.html)
9. Use [editor.php](editor.php) to edit the code in replicator.txt so that both links to global urls are to your new repository rather than what they are now.
10. Push all changes to github
11. Either get a new domain for the place you're building CHAOS in or use [fork.html](fork.html) to fork down to a new page below an existing CHAOS server.  In whatever directory you will build your new server, place another copy of your new file [php/replicator.txt](php/replicator.txt), saved again as replicator.php.
12. Point a browser to [whatever your server address is]/replicator.php, wait, then click the link
13. Create physical links to the url and place in physical proximity to the places

## Finding a place.  

1. places covered by a given CHAOS server should be within 1 or 2 thousand yards.
2. find places which are in public and will not be naturally disturbed by or even seen by passerby or maintenance workers.
3. Find very local landmarks which direct players to a place only a bout a yard in size.
4. give places names that can easily map to other places, like "tree" or "manhole"
5. avoid private names of businesses or people
6. leave a marker which people can take as many of as they want, return to leave more markers, only use markers you want to distribute freely
7. seed places by leaving cardboard, sharpies, random art, useful things

## Asking questions

We ask questions which help people to make a better place right here. We want to learn the plants, the animals, the flows of water, the flows of trash, the flows of commerce, and the network of people. we want to connect people with other people.  We ask questions which do these things in their answering.  Questions may be answered in peoples heads without writing them down.

## Writing directions

Directions can be from another place in the map or from a landmark like an intersection.  Use as much detail as possible, clearly describe all landmarks.  If you go more than about 100 yards, add a landmark.  Use yards or paces, assume they're about the same. Write directions so that if paces vary people can still follow them, clearly describing all small landmarks.  

## Domains:

 - [http://localhost](http://localhost)
 - [www.maplelawn.net](https://www.maplelawn.net) 
 - [www.us29.xyz](https://www.us29.xyz)
 - [www.dupontcircle.xyz](https://www.dupontcircle.xyz)
 - [www.southbroadway.net](https://www.southbroadway.net/)
 - [www.dolorespark.xyz](http://www.dolorespark.xyz/)

## Influences:

 - [Zork/Adventure style text-based games](https://en.wikipedia.org/wiki/Zork)
 - [Letterboxing](https://en.wikipedia.org/wiki/Letterboxing_(hobby))
 - [Psychogeography](https://en.wikipedia.org/wiki/Psychogeography)
 - [Exquisite corpse](https://en.wikipedia.org/wiki/Exquisite_corpse)
 - [Chaos Magic](https://en.wikipedia.org/wiki/Chaos_magic)
 - [Pokemon Go](https://en.wikipedia.org/wiki/Pok%C3%A9mon_Go)
 - [Dungeons and Dragons](https://en.wikipedia.org/wiki/Dungeons_%26_Dragons)
 - [geometron/trash magic](https://www.trashrobot.org)
 - [really really free markets](https://en.wikipedia.org/wiki/Really_Really_Free_Market)
 - [food not bombs](https://en.wikipedia.org/wiki/Food_Not_Bombs)
