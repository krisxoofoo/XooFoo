please read also : lisezmoi.txt (use google for translation)

===============
  MYTUBE 1.05
===============


1. INSTALLING MYTUBE

Unzip/unrar the downloaded file.
Upload the folder 'mytube' to the folder 'modules' on your server.
Upload the folder 'xt_images' to the folder 'uploads' on your server and check that the folder including sub-folders are CHMOD 777.
Go to the admin panel, choose Modules -> Administration and install MyTube as any other Xoops module.


2. UPGRADING FROM XOOPSTUBE 1.03 TO MYTUBE 1.05

- Make a backup of the database tables: xoopstube_altcat, xoopstube_broken, xoopstube_cat, xoopstube_indexpage, xoopstube_mod, xoopstube_videos, xoopstube_votedata
- Make a backup of the module XoopsTube (../modules/xoopstube/)
- Make a note of your module settings (blocks and Preferences)
- Uninstall the module XoopsTube
- Copy the files from the folder 'mytube' to the folder 'xoopstube' on your server
- Rename the folder 'xoopstube' on your server to 'mytube'
- Install the module MyTube from the Module Administration
- Import the database tables
- Update the module from the Module Administration (!!!)
- Create the directories 'videos' and 'screenshots' in uploads/xt_images/  (uploads/xt_images/videos/,  uploads/xt_images/screenshots/)
- Setup the modules (Preferences, Permissions, blocks, etc.)


3. RENAMING MODULE FOLDER

When you have renamed the installation folder from 'mytube' in whatever you wish, you have to open the file ../include/plugin.tag.php
Find the line: function mytube_tag_iteminfo(&$items) {
In this line you have to change 'mytube' into the name gave to the module folder before.
Also for other plugins you might have to change 'mytube' into the new folder name. 


4. WAITING, SITEMAP & RSSFIT PLUGINS

There are also plugins for GIJOE's Waiting and Sitemap module.
You can download these modules and find more info about them, here: http://xoops.peak.ne.jp
To support RSS feeds a plugin for Brandycoke's RSSFit is supplied too (http://www.brandycoke.com/products/rssfit/).




    .::McDonald::.

    http://members.lycos.nl/mcdonaldsstore/