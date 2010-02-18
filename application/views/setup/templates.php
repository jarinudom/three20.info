<?= $title ?>
=============

If you're planning to make a new project using Three20 then you can save some time by using
custom Three20 project templates. They're easy to install.

First, you'll want to
[download the projects](http://cloud.github.com/downloads/jverkoey/three20.info/three20Projects.zip).

Once you've downloaded and unzipped the package, open Terminal to the directory containing
the file "install_projects" and simply type

."brush: bash"
    bash install_projects

<div class="naviblock" markdown="1">
<div class="navi" markdown="1">
* Hey, listen!
</div>
If you haven't already downloaded the Three20 source, run the following line in the directory
where your projects will live. I generally use ~/Projects/.

."brush: bash"
    cd ~/Projects/
    git clone git://github.com/facebook/Three20.git

If you don't use git, you can also [download the source](http://github.com/facebook/Three20).
</div>

To create a new project using Three20, start Xcode and open the "New Project" dialog. You
should now see a "User Projects" directory with the Three20 projects listed. The latest set of
project templates includes a project for creating a basic application and a project for creating a
basic application with a core data backend.

When you create your project, you should create it within the same parent directory that you
created Three20 in.

For example, say you create a project titled "YourNewProject". Your projects directory should look
like this:

."brush: bash"
    ~/Projects/Three20/
    ~/Projects/YourNewProject/

This is because the Three20 template projects assume that Three20 is located at `../Three20`. You
can, of course, change this if you don't want to/can't follow this structure.
