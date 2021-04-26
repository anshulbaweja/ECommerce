=== WordPress Backup & Migration ===
Contributors: webtoffee
Donate link: https://www.webtoffee.com/plugins/
Tags:  wordpress migration, website migration, wordpress backup, database export, database import, move, transfer, copy, migrate, backup, clone, restore, db migration, migrator
Requires at least: 3.3
Tested up to: 5.6
Requires PHP: 5.6
Stable tag: 1.2.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

WordPress Backup and WordPress Migration Made Quick and Easy.

== Description ==

This WordPress migrator plugin exports your WordPress website media files, plugins and themes including the database with a single click.
There is an option to apply an unlimited number of find and replace operations on your database during the export process.


**Features of WordPress Migrator & Duplicator:**

&#128312;  WordPress full backup
&#128312;  WordPress full migration / WordPress all in one migration
&#128312;  Allows you to take backup to an FTP location, Google Drive, Amazon S3, and to the local storage.
&#128312;  Specify files to be excluded from the backup
&#128312;  Import data backup from the FTP location, Google Drive, Amazon S3, and from the local storage.
&#128312;  Set up FTP, Google Drive, and Amazon S3 for easy backups
&#128312;  Support both MySQL and MySQLi
&#128312;  Move or clone your site successfully
&#128312;  Easily pull a live site down into a local environment
&#128312;  Excellent support

== How WordPress Backup and Migrator plugin works ==

You might come across situations where you want to move WordPress to a new server or to a different location on your server. WordPress Backup & Migration plugin can assure an easy WordPress backup or WordPress migration. You can move your entire website without any hassle. This is one of the best WordPress migration and backup plugin available in 2020.

A WordPress migration from one hosting provider to another is an easy task if performed correctly. It consists of three parts - moving the files, moving the database, and reconfiguration (if needed). Our WordPress migration plugin automates this process.

You should follow the below steps for a WordPress full migration.

* Install the WordPress Backup & Migration plugin on your existing website
* Generate(export) a migration file that includes all the files required as a zip file. 
* Install WordPress Backup & Migration plugin in the target site.
* Import the zip file into your new location. The plugin will move all files including theme files, plugin files and replace the database.
* You will be logged out forcefully once the WP migration is completed.

This is one of the best ways to migrate a WordPress site. 

== Understanding WordPress Migration - Different WordPress Migration Cases ==

Moving your website to a new host can be a stressful experience if not done properly. But at times it becomes inevitable that you have to migrate your website. And if the understood the process properly and followed, WordPress migrations are a piece of cake.

Many people decide to move to a new host when they face issues with their current provider. Migrating to a more reliable host is the only solution. 

There could be similar issues that affect the performance of your website as a whole. Based on the situation that you are in, WordPress site migration can be any of these cases

* You are moving WordPress site to a new domain
* You are moving to a better hosting service
* You are moving WordPress from localhost to server
* You want to move your WordPress site from its subdomain to its root domain

Since moving WordPress site to a new domain or a new host can be a tough task, people will either go for professional WordPress migration services to move their site, find a new host that offers the service as part of a new hosting package, or take the third option of having a go at it themselves.

WordPress migration and WordPress backup can be done by yourselves if you have the best WordPress migration plugin at your disposal. They will be your trusted assistant in duplicating the WordPress website without having to shell out hundreds of dollars.

== Understanding WordPress Backups: How to Backup a WordPress Site? ==
The first step in migrating a website is to create the backup of the WordPress website files. There can always be something that could go wrong and you would not want to lose your file data. You can never be too careful when it comes to your website data.

Before taking the backup of a website, you need to understand what are the files that need to be backed up. They are 
The wp-content file that contains all the posts and media files of your WordPress website
The database of the website

There are two ways in which you can backup a WordPress site. You can either backup WordPress manually using FTP or go the easy route. The easiest way to create a WordPress backup is to install the WordPress Backup & Migration plugin.

== How to create a backup of the website using the plugin? ==
To do that, go to the WordPress admin area and click on the WordPress Migration. From the Export page, click on the export button and the wp-content files will be downloaded to your local computer.
You can find all the details of the previous exports using the plugin in the Backups tab.

== How to Migrate a WordPress Site? ==
The first step in the migration of a WordPress site is to create a backup of the website. In case anything goes wrong, you’re covered if you have a backup. And this is why this is a best practice backup WordPress site on a regular basis, and when there is a significant change to be made on the website.

In the second step, create a new database on your host server and import the WordPress database to the new host. In the process,  you will have to edit the wp-config.php file to change the database name, username, and password.

In the next step, upload the older WordPress files to the new host.

And then, define the new domain. This is especially important when moving from a localhost/staging site to a live server or from an old domain to a new one.

== How to do WordPress Migrations Using the Plugin ==

All of the above steps can be done easily with an all in one WordPress migration plugin like WordPress Backup & Migration plugin by WebToffee. 

To do that, install the plugin in the target site. Then, import the files that have been generated by the plugin in zip format. The plugin will move all files including theme files, plugin files, and replace the database in the click of a button to the new WordPress setup/installation.
 
Now, if you need to change the domain name within the new website, you can use the ‘Find and Replace’ field before the start of the import to change the domain name everywhere.

== Installation ==

WordPress Backup & Migration can be installed directly through your WordPress Plugins dashboard.

1. Click "Add New" and search for "WordPress Backup & Migration"
2. Install and Activate

WordPress Backup & Migration also can be installed by manually uploading the zip file of the plugin via FTP.

1. Download the zip file of the plugin from the WordPress plugin repository
2. Unzip the downloaded zip file
3. Upload the plugin folder into the 'wp-content/plugins/' directory of your WordPress site
4. Go the ‘Installed Plugins’ page on the WordPress dashboard. Activate WordPress Backup & Migration from the Plugins page

After the installation and activation of the plugin, the plugin menu will appear on the WordPress sidebar.



== Screenshots ==

1. Export Screen

== Changelog ==

= 1.2.0 =
* WP 5.6.1 tested OK.
* Improvement: FTP, Google Drive, and Amazon S3 import/export added

= 1.1.7 =
* WP 5.4 tested OK.

= 1.1.6 =
* Blocked direct access to the backup zip file via http.

= 1.1.5 =
* Optimized access control.

= 1.1.4 =
* Improvement: Added filter wt_mgdp_exclude_extensions to exclude file types from export.

= 1.1.3 =
* Tested OK with WordPress 5.3

= 1.1.2 =
* UI improvement.
* Added filter wt_mgdp_exclude_files to exclude files/directories from export.

= 1.1.1 =
* Bug Fix: Update write permission failure on export.
= 1.1.0 =
* Tested OK with WordPress 5.2.
= 1.0.9 =
* Tested OK with WordPress 5.1.1.
= 1.0.8 =
* Tested OK with WordPress 5.0.2.
= 1.0.7 =
* Bug Fix: Flashing progress bar.
= 1.0.6 =
* Feedback content updates.
= 1.0.5 =
* Feedback content updates.
= 1.0.4 =
* Backup file url update.
= 1.0.3 =
* Backup file upload validation.
= 1.0.2 =
* German translation added.
= 1.0.1 =
* Content changes.
= 1.0.0 =
* Revamped version
= 0.0.2 =
* Initial commit
= 0.0.1 =
* Initial commit

== Upgrade notice ==

= 1.2.0 =
* WP 5.6.1 tested OK.
* Improvement: FTP, Google Drive, and Amazon S3 import/export added
