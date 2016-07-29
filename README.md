#Wordpress.dev Test WordPress Site with Vagrant, Grunt and Underscores [underscores.me]

Welcome to the development environment for the wordpress.dev site.

Before we begin there are some things you will need on your machine.

====================================================================================

#Requirements
------------------------------------------------------------------------------------
- VirtualBox 5.* [https://www.virtualbox.org/wiki/Downloads] (Latest Version)
- Vagrant 1.8.* [http://www.vagrantup.com/downloads] (Latest Version)
- Node 6.* [https://nodejs.org/en/] or `brew install node` (Latest Version)
###Note: Using `brew` requires to install Homebrew [http://brew.sh/]

====================================================================================

Now that you have the required packages, you can get the project up and running and
start writing some code!

#Getting started
------------------------------------------------------------------------------------
Set up the environment by running `vagrant up`. This will provision the box and set
up the required hosts in your local hosts file (OSX /etc/hosts):

###Note: running `vagrant up` sets the environment variables, creates database,...

- Type `sudo nano /etc/hosts`
- Add ``` 192.168.56.101 wordpress.dev ``` to end of the file.

The final step is to import the latest DB dump with these three commands:

`vagrant ssh`

`mysql -u dbuser -p dbname < /vagrant/bin/db/<filename>.sql`

##GRUNT

- Type `npm install grunt-cli -g`
- Type `gem install sass` may require to update `Ruby`
- Type `npm install`
- Type `grunt`

###Note: All the database dumps (exports) should be stored in `./bin/database/` directory.
Once the set up process is complete. You can access the site URL via http://wordpress.dev
May Require to run `sudo npm install`

====================================================================================

#Development
------------------------------------------------------------------------------------
The project uses Git Flow, so make sure to initiate this with `git flow init`.
