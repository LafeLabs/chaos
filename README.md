[return home](scrolls/home)

# Philosophy Engine

[scroll set replicator](scrollset.html)

[github repository for this](https://github.com/LafeLabs/philosophyengine/)

[fork down](fork.html)

[replicator raw code](php/replicator.txt)

[copy.html](copy.html)

[code editor editor.php](editor.php)

link pink rgb: #ff2cb4

Organic media. The rules of Organic Media are:

 - Everything replicates. Anyone can replicate any system or document at any time to anywhere.
 - Everything evolves.  Anyone can edit any part of any system at any time.
 - Everything dies.  Anyone can delete any file at any time. Files are constantly deleted.  Good files replicate, bad files die.

For more information, see [www.trashrobot.org](https://www.trashrobot.org/).  

Text documents are called "scrolls" and are in [Markdown](https://daringfireball.net/projects/markdown/).

Links between scrolls are formed by simply making a markdown link which has "scrolls/" and then the scroll name. Click the pencil icon to edit a scroll, then the scroll icon to get back to the reader.

[editor.php](editor.php)

[replicator raw text](https://raw.githubusercontent.com/LafeLabs/philosophyengine/master/php/replicator.txt)

[dnagenerator.php](dnagenerator.php)

[qrcode.html](qrcode.html)

[http://localhost](http://localhost)

[set.html](set.html)

Edit icon:

[![](iconsymbols/edit.svg)](scrolleditor.php?scroll=README.md)

Scroll icon:

[![](iconsymbols/scroll.svg)](user.php?scroll=README.md)

To delete a scroll click the deleter icon:

[![](iconsymbols/delete.svg)](scrolldelete.html)

And delete any scroll.  Delete is forever in local instance.  At any time you can clear the whole system and replace it with the previous instance from another server by running replicator.php.  

Danger!!! 

Click this ONLY if you want to start over from scratch: [replicator.php](replicator.php).

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



