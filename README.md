How to get started editing Three20.info
=======================================

The quick and dirty way to start hacking on three20.info is to grab the latest source.

    git clone git://github.com/jverkoey/three20.info.git

Within this source, you'll find all of the articles here:

    application/views/

Articles are written in the Markdown format. [Learn more](http://daringfireball.net/projects/markdown/).

If you want to fully test Three20.info on your local machine, you'll have to set up a web server
that runs PHP. I'll leave that up to you.

You're also going to need Keystone, which is the framework that Three20.info is built upon.

    git clone git://github.com/jverkoey/Keystone.git

Run that command in the same directory you cloned Three20.info. Your directories should now look
like this:

    ./three20.info/
    ./Keystone/

Run the following commands:

    mkdir three20.info/library
    cd three20.info/library
    ln -s ../../Keystone/src/ Keystone

You'll now have a three20.info/library/Keystone directory.

A few more commands to run from three20.info

    three20.info> cp application/config/config.php.template application/config/config.php
    three20.info> mkdir application/data/
    three20.info> chmod a+w application/data/

Create a virtual host and point it to three20.info/www, and you should be rocking from there. I
generally use dev.three20.info for my local server, but you can pick whatever name you choose. Just
make sure that it ends in something like some_domain.com
