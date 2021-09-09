[home](scrolls/home)

*what is the language of this place?*

[![](https://i.imgur.com/9UPvqj9.png)](https://github.com/LafeLabs/chaos/)

![](https://i.imgur.com/LB6kLFj.png)

# CHAOS

A text-based mixed reality game.

Goal: build a language of this place.

[create a new game](scrolls/creators)

How to play:

1. follow the scrolls
2. answer the questions
3. write on cardboard with marker
4. exchange free objects

Rules:

1. [everything replicates](scrolls/replicate)
2. [everything evolves](scrolls/evolve)
3. [everything dies](scrolls/destroy)

Domains:

 - [http://localhost](http://localhost)
 - [www.maplelawn.net](https://www.maplelawn.net) 
 - [www.us29.xyz](https://www.us29.xyz)
 - [www.dupontcircle.xyz](https://www.dupontcircle.xyz)

Influences:

 - [Zork/Adventure style text-based games](https://en.wikipedia.org/wiki/Zork)
 - [Letterboxing](https://en.wikipedia.org/wiki/Letterboxing_(hobby))
 - [Psychogeography](https://en.wikipedia.org/wiki/Psychogeography)
 - [Exquisite corpse](https://en.wikipedia.org/wiki/Exquisite_corpse)
 - [Chaos Magic](https://en.wikipedia.org/wiki/Chaos_magic)
 - [Pokemon Go](https://en.wikipedia.org/wiki/Pok%C3%A9mon_Go)
 - [Dungeons and Dragons](https://en.wikipedia.org/wiki/Dungeons_%26_Dragons)

[![](https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Kaypro_wikipedia.jpg/2560px-Kaypro_wikipedia.jpg)](https://en.wikipedia.org/wiki/Zork)

[![](https://upload.wikimedia.org/wikipedia/en/a/ac/Zork_I_box_art.jpg)](https://en.wikipedia.org/wiki/Zork)

[![](https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/WorldWideLetterBox016.png/340px-WorldWideLetterBox016.png)](https://en.wikipedia.org/wiki/Letterboxing_(hobby))

[![](https://upload.wikimedia.org/wikipedia/en/9/90/Pok%C3%A9mon_Go_AR_Mode%2C_Dec_2017.png)](https://en.wikipedia.org/wiki/Pok%C3%A9mon_Go)

[![](https://upload.wikimedia.org/wikipedia/en/a/a1/Dungeons_%26_Dragons_Miniatures_2.jpg)](https://en.wikipedia.org/wiki/Dungeons_%26_Dragons)

[![](https://i.imgur.com/BbU0bAX.jpg)](https://www.trashrobot.org/)

For more information, see [www.trashrobot.org](https://www.trashrobot.org/).  

Text documents are called "scrolls" and are in [Markdown](https://daringfireball.net/projects/markdown/).

Links between scrolls are formed by simply making a markdown link which has "scrolls/" and then the scroll name. Click the pencil icon to edit a scroll, then the scroll icon to get back to the reader.




[scroll set replicator](scrollset.html)

[github repository for this](https://github.com/LafeLabs/chaos/)

[fork down](fork.html)

[replicator raw code](php/replicator.txt)

[copy.html](copy.html)

[dnagenerator.php](dnagenerator.php)

[code editor editor.php](editor.php)

[QR Code generator](qrcode.html)

link pink rgb: #ff2cb4

[http://localhost](http://localhost)

[set.html](set.html)

Edit icon:

[![](iconsymbols/edit.svg)](scrolleditor.php?scroll=README.md)

Scroll icon:

[![](iconsymbols/scroll.svg)](user.php?scroll=README.md)

To delete a scroll click the deleter icon:

[![](iconsymbols/delete.svg)](scrolldelete.html)

And delete any scroll.  Delete is forever in local instance.  At any time you can clear the whole system and replace it with the previous instance from another server by running replicator.php.  

Edit the source code to ALL code on this server using editor.php:

[editor.php](editor.php)

Generate QR codes to this server or any other server:

[qrcode.html](qrcode.html)

Generate the "[dna](data/dna.txt)" file which is used by replicator.php to clone to the next instance:

[dnagenerator.php](dnagenerator.php)

Convenient link to localhost:

[localhost/](http://localhost/)

To replicate this system, get a local web host with PHP working and copy the file [php/replicator.txt](php/replicator.txt) to a file in the main web directory called replicator.php and run it either from the command line using 

<pre>
php replicator.php
</pre>

or pointing a browser to [http://localhost/replicator.php](http://localhost/replicator.php)(DANGER!!! CLICK ONLY TO CLEAR AND REPLACE!)

For forking the development, get PHP working from the command line on your development machine, create a new directory for your new github repository, put replicator.php in the directory, run the replicator, and then run a local host using PHP by typing the following from the command line:

<pre>
php -S localhost:80
</pre>

Then point your browser to [http://localhost/](http://localhost/) to see your new local instance.  Edit. Create scrolls, destroy scrolls, link scroll, make the new dna using [dnagenerator.php](dnagenerator.php), push all your changes to github. 

Then use [editor.php](editor.php) to edit [php/replicator.txt](php/replicator.txt) so that both the url of the replicator.txt file and dna.txt file point to the global raw text URLs for your new repository on your github account.  You can also replicate this to a globally hosted domain, and edit the replicator there to replicate out.  Once your new replicator points to itself and it's DNA your new instance is self-contained and self-replicating.

[copy specific files from previous server with copy.html](copy.html)

# creators

We are creating a language to describe HERE. RIGHT HERE.  The actual physical place where our bodies exist in the physical world. We live in a world today where we mentally throw away places, going from one chair to another in which we spend or accumulate money, ignoring all the places between one and the other. 

In CHAOS we imagine a different way of existing. We imagine a place where each tree, each grassy embankment, each curb, and each dumpster has meaning.   We imagine a place where places and things are part of a public language shared by the local community of people who exist there.  

The only people who can create this language are the people of the place, and it must be shared by all.  But what we, the creators of CHAOS build is a framework in which that language can be built.  We create a grammar and vocabulary and then let the players express that in the actual literature which makes up the language. That literature is whatever people write on cardboard with sharpies and leave by the markers by the things in the places.


To do this we need several different types of creators.

 1. web operator. copies and edits web pages/servers. teaches new operators how to run the game.
 2. maker. Makes physical things which form the markers in the places
 3. explorer. Goes around in the physical space and finds good places for markers
 4. story teller. Writes story into the scrolls
 5. teacher. Creates the questions.

## Web operator

Web operator should be comfortable following instructions involving simple tech things, using Github and working a little bit with code.  No actual code development is needed, just following instructions and copying files.  Just being "tech friendly" is enough, this is all copy/paste.

The information you need to set up a CHAOS server yourself and fork it on Github etc can be found at 

[https://github.com/LafeLabs/chaos](https://github.com/LafeLabs/chaos)

The actual content that goes into the scrolls will be maintained by the operator, just discuss with everyone else and help them out so they don't have to actually edit the scrolls.  Learn [Markdown](https://daringfireball.net/projects/markdown/). 

## Maker 

The maker makes things which act as markers. Markers are physical things with meaning left in the specific places by the specific things to which the scrolls point.  These can be anything, any made object which has some kind of meaning. They could be cardboard and sharpie if you have nothing else, but can also be complex manufactured things made from trash.  This is where the trash magicians exist, in the role of maker. Make marker and give them to the explorer who will put them in places.  Markers are not property, only make what you are prepared to give away. Anyone can take them and move them at any time, if they do, we just keep making things and adding them. Building this flow of things is part of what we are here for. Everything is free, makers are people who make things and give them away.

## Explorer

The explorer goes out into the place where we are making the game and places the markers by the things. If you like letter boxing, geocaching, orienteering, treasure hunts etc, this is for you.  Just find interesting places that associate with general names associated with common places out in public like "dumpster", "bench", "tree", or "gazebo". 

## Story teller

Each place has a story.  Each place needs a evocative description which not only tells people how to get to it but help guide them to giving the place meaning.  Ideally you will go to each place and see it and then write the story.  The explorer will find the places, and they can guide you by video if you need to write the story remotely.  After the Explorer has identified places and placed markers you build story around that, but that can be a dynamic collaboration as well.


## Teacher

Finally the Teacher will write the Questions which help prompt the creation.  This person is called the "teacher" because a creative writing teacher is the right skill set: they need to create the kinds of questions which will guide the minds of the players to building the right thoughts to create a language.  This is where philosophers can work with the raw material of language and thought to co-create entire universes with the players.  Posing the right set of questions can be incredibly powerful in stimulating the kind of creativity we need to unleash in order to help people build the language of their place.  Teacher can be totally a remote position in the party, and just needs to communicate questions to the web operator who will enter them in the scrolls.

