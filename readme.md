
LaravelblogEngine is a simple web blog engine. Its aimed for web developers that need to produce a web site for small business owners or blog enthusiasts. Its got a simple log in ,with captcha for a single admin.Password in sqlite3 database is encrypted, if you reset the credentials , your password will be encrypted for you  When password is entered it compares and takes into account the fact that the password is encrypted .

Ive tested system live and you dont need to touch path of database in the .env file

With codeIgniter4 you have to set app url, i dont remember needing to do that with Laravel system

Blog and gallery are output with pagination, but you wont see that until  there are 7 entries i think i set. 

Ive tested form pages that submit to do things involving admin class methods;unless logged in nobody in the www should be able to access them. After logging out i noted you can use "back" and the admin panel shows- but try mosue let clicking on any link, it wont go anywhere so i dont consider that a security risk.  


So basically its a almost running system out of the box. The only key thing you have to attend to is the credentials 
in the controller , ContactController around lines 75/76.

You can style it by editing custom.scss , once you have grunt running. I decided to theme it with a Christian
one. Do with your what you will  


I, due to hosting restrictions and emails on subdomains had to resort to using my personal gmail email account, for which i had set up 2-step so that the web could use gmail to relay an email containing info from form of contact submission to intended recipient . For snags i used to have email of person i did the web for as the first email, then added my own email to get a copy, to monitor spam.

I think you can use gmail to relay an email to gmail , but i just got used to using gmail to do the relaying and send it to my yahoo.com account.


Anyway i'm used to PHPMailer and you can use your web hosting smtp account and credentials  


I've left login, logout in the navbar, but you can remove them ,the navbar is a view in resources/view the file is navbar.blade.php. So just edit and take out :

		<li class="nav-item">
        <a class="nav-link" href=" {{ url('blackcat') }}">Login</a>   
        </li>
     
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('logout') }}">Logout</a>   
        </li>
        
the url for login i have coded to be :


	domain/blackcat 

Should be easy to remember, blackcat is the nickname for an English football team.        

C Licking on login, you will see its telling you the default admin user name and password. If you reset the credentials, it wont take affect until you have logged out  ,then try logging in again using new credentials  

Blogs can be created, edited or deleted from a simple admin pannel.

Pictures for the galley can be uploaded or deleted.  

For changing style the fiel that should be worked on is custom.scss ; by way of  grunt, the custom.scss is converted to custom.css and moved to where it should be in css/public

For grunt you will need to install grunt globally on your system  . Also nodejs or equivalaent will be needed. I will post what i have installed at some point. 





After that using "npm install"  should bring in everything else, because at web root there is package.json. 

I have put in the grunt file 2 commands:

	grunt sass 
	grunt watch
	
The first one makes sure  everything in the custom.scss is converted to css; grunt watch evokes that grunt is on the watch for live changes as you work on the file, and updates custom.css in live time 	



composer.json is what came with vanilla Laravel; i like PHPmailer so thats in the composer file. Now it might seem a lot 75mb but the node_modules have been left in place. you have exactly what ive been playing with except for .git 





So LaravelblogEngine is  blog engine basic CMS  written on top of Lavavel 11


Readme is a Work in progress 

Hopefully your on Linux something sensible like Arch. 

Move zip to  Apache document root, and unzip . It should unzip  to a directory LaravelblogEngine.



 I have several apps  in apache, i set each one up defining an entry in /etc hosts like:




	[andrew@darkstar vhosts]$ cd ~
	[andrew@darkstar ~]$ cat  /etc/hosts
	### Static table lookup for hostnames.
	### See hosts(5) for details.
	127.0.0.1 localhost
	::1  localhost
	127.0.1.1 darkstar.localdomain darkstar
	127.0.0.3 webplay
	127.0.0.4 CI4-CMS

	127.0.0.5 LaravelblogEngine





Then i set up a virtual host file called LaravelblogEngine  like so :

		<VirtualHost 127.0.0.5:80>
		ServerAdmin webmaster@LaravelblogEngine
		DocumentRoot "/srv/http/LaravelblogEngine/public"
		ServerName Laravel
		ServerAlias Laravel
		ErrorLog "/var/log/httpd/LaravelblogEngine-error_log"
		CustomLog "/var/log/httpd/LaravelblogEngine-access_log" common

		<Directory "/srv/http/LaravelblogEngine/public">
		Order allow,deny
		Allow from All
		AllowOverride All
		Require all granted
		</Directory>
		</VirtualHost>

In Arch the file called LaravelblogEngine  goes :

	/etc/httpd/conf/vhosts

then you need to add an entry in /etc/httpd/conf/httpd.conf like:

	Include conf/vhosts/LaravelblogEngine



	
	
	
	
So in the address bar of  a web browser typing in 127.0.0.5 should bring up landing page. php should be 8.2 and above All directories with permissions 755  and files 644


ive left  login in the navbar , you can remove it at some point; no point in giving hackers info they don't need.  



The structure of the directory is :

[andrew@darkstar Desktop]$ tree -L 1 LaravelblogEngine
LaravelblogEngine<br>
├── Gruntfile.js<br>
├── app<br>
├── artisan<br>
├── bootstrap<br>
├── composer.json<br>
├── composer.lock<br>
├── config<br>
├── database<br>
├── laravel.ico<br>
├── laravel.svg<br>
├── node_modules<br>
├── package-lock.json<br>
├── package.json<br>
├── phpunit.xml<br>
├── postcss.config.js<br>
├── public<br>
├── readmeLaravel.md<br>
├── resources<br>
├── routes<br>
├── scss<br>
├── storage<br>
├── tailwind.config.js<br>
├── tests<br>
├── vendor<br>
└── vite.config.js



Laravel 11 now uses sqlite3 as default database, so no need to mess about installing Maria or MySQL; front  end is bootstrap and phone responsive with break points .

i have left in place 2 example blogs to demonstrate how in blogs, embed code from tiktok and also youtube can be used. That means the videos do not need to be loaded to the web but will  still play in the blog, which has the embed code but in reality they are running on the servers of youtube and tiktok .This si great for people watching with  poor internet band width

..as Arnold Alois Schwarzenegger  once said i'll vee back - later over weekend 

ps in this book i have a chapter on web development and codeIgniter4 ,i will be adding Laravel  in a week or 2 

<https://www.amazon.co.uk/dp/B0DJCX5MV8>	



##Appendix  Software installed 


List of software installed by npm; most of it was pulled in on using a terminal cd'ing to LaravelblogEngine root  and running command :

	npm install
	
Thats because there is a jason package file at the web root	.You need nodejs or its equivalent installed since from memory npm is part of it 
	
	[andrew@darkstar Laravel]$ npm list
andy brookes @1.0.0 /srv/http/Laravel
├── abbrev@1.1.1 <br>
├── ansi-styles@4.3.0<br>
├── argparse@1.0.10<br>
├── array-each@1.0.1<br>
├── array-slice@1.1.0<br>
├── async@3.2.6<br>
├── balanced-match@1.0.2<br>
├── brace-expansion@1.1.11<br>
├── braces@3.0.3<br>
├── browser-sync@2.29.3<br>
├── chalk@4.1.2<br>
├── color-convert@2.0.1<br>
├── color-name@1.1.4<br>
├── colors@1.1.2<br>
├── concat-map@0.0.1<br>
├── dateformat@4.6.3<br>
├── detect-file@1.0.0<br>
├── esprima@4.0.1<br>
├── eventemitter2@0.4.14<br>
├── exit@0.1.2<br>
├── expand-tilde@2.0.2<br>
├── extend@3.0.2<br>
├── fill-range@7.1.1<br>
├── findup-sync@5.0.0<br>
├── fined@1.2.0<br>
├── flagged-respawn@1.0.1<br>
├── for-in@1.0.2<br>
├── for-own@1.0.0<br>
├── fs.realpath@1.0.0<br>
├── function-bind@1.1.2<br>
├── getobject@1.0.2<br>
├── glob@7.1.7<br>
├── global-modules@1.0.0<br>
├── global-prefix@1.0.2<br>
├── grunt-browser-sync@2.2.0<br>
├── grunt-cli@1.4.3<br>
├── grunt-contrib-concat@2.1.0<br>
├── grunt-contrib-copy@1.0.0<br>
├── grunt-contrib-cssmin@5.0.0<br>
├── grunt-contrib-jshint@3.2.0<br>
├── grunt-contrib-less@3.0.0<br>
├── grunt-contrib-sass@2.0.0<br>
├── grunt-contrib-uglify@5.2.2<br>
├── grunt-contrib-watch@1.1.0<br>
├── grunt-known-options@2.0.0<br>
├── grunt-legacy-log-utils@2.1.0<br>
├── grunt-legacy-log@3.0.0<br>
├── grunt-legacy-util@2.0.1<br>
├── grunt-sass@3.1.0<br>
├── grunt@1.6.1<br>
├── gulp-clean-css@4.3.0<br>
├── gulp-concat@2.6.1<br>
├── gulp-sass@5.1.0<br>
├── gulp-sourcemaps@3.0.0<br>
├── gulp@4.0.2<br>
├── has-flag@4.0.0<br>
├── has@1.0.4<br>
├── homedir-polyfill@1.0.3<br>
├── hooker@0.2.3<br>
├── iconv-lite@0.6.3<br>
├── inflight@1.0.6<br>
├── inherits@2.0.4<br>
├── ini@1.3.8<br>
├── interpret@1.1.0<br>
├── is-absolute@1.0.0<br>
├── is-core-module@2.16.1<br>
├── is-extglob@2.1.1<br>
├── is-glob@4.0.3<br>
├── is-number@7.0.0<br>
├── is-plain-object@2.0.4<br>
├── is-relative@1.0.0<br>
├── is-unc-path@1.0.0<br>
├── is-windows@1.0.2<br>
├── isexe@2.0.0<br>
├── isobject@3.0.1<br>
├── js-yaml@3.14.1<br>
├── kind-of@6.0.3<br>
├── liftup@3.0.1<br>
├── lodash@4.17.21<br>
├── make-iterator@1.0.1<br>
├── map-cache@0.2.2<br>
├── micromatch@4.0.8<br>
├── minimatch@3.0.8<br>
├── node-sass@9.0.0<br>
├── nopt@3.0.6<br>
├── object.defaults@1.1.0<br>
├── object.map@1.0.1<br>
├── object.pick@1.3.0<br>
├── once@1.4.0<br>
├── os-homedir@1.0.2<br>
├── os-tmpdir@1.0.2<br>
├── osenv@0.1.5<br>
├── parse-filepath@1.0.2<br>
├── parse-passwd@1.0.0<br>
├── path-is-absolute@1.0.1<br>
├── path-parse@1.0.7<br>
├── path-root-regex@0.1.2<br>
├── path-root@0.1.1<br>
├── picomatch@2.3.1<br>
├── rechoir@0.7.1<br>
├── resolve-dir@1.0.1<br>
├── resolve@1.22.10<br>
├── safer-buffer@2.1.2<br>
├── sprintf-js@1.0.3<br>
├── supports-color@7.2.0<br>
├── supports-preserve-symlinks-flag@1.0.0<br>
├── to-regex-range@5.0.1<br>
├── unc-path-regex@0.1.2<br>
├── underscore.string@3.3.6<br>
├── util-deprecate@1.0.2<br>
├── v8flags@3.2.0<br>
├── which@2.0.2<br>
└── wrappy@1.0.2

Packages installed related to running grunt from main pacman repo:

	[andrew@darkstar ~]$ pacman -Qen | grep sass
	dart-sass 1.82.0-1
	ruby-sass-listen 4.0.0-11

	[andrew@darkstar ~]$ pacman -Qen | grep nodejs
	nodejs-source-map 0.7.4-2



	nodejs 23.4.0-1 [installed]
	
	
For info on grunt see:

<https://gruntjs.com/>	



For info on PHPMailer see
<https://github.com/PHPMailer/PHPMailer>
	
