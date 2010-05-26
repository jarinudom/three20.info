<?= $title ?>
=============

If you're planning to make a new project using Three20 then you can save some time by using
custom Three20 project templates. They're easy to install.

First, you'll want to [get the Three20 source](http://github.com/facebook/three20).

Once you have the source, open Terminal to the `templates/` directory and simply type:

."brush: bash"
    bash InstallTemplates.Command

To create a new project using Three20, start Xcode and open the "New Project" dialog. You
should now see a "User Projects" directory with the Three20 projects listed. The latest set of
project templates includes a project for creating a basic application and a project for creating a
basic application with a core data backend.

When you create your project, you should create it within the same parent directory that you
created Three20 in.

For example, say you create a project titled "YourNewProject". Your projects directory should look
like this:

."brush: bash"
    ~/Projects/three20/
    ~/Projects/YourNewProject/

This is because the Three20 template projects assume that Three20 is located at `../three20`. You
can, of course, change this if you don't want to/can't follow this structure.
