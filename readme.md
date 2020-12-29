## Git and Github
Goto project folder using command line
Initialization : git init

Add all files for commiting  : git add .
Add single file for commiting : git add example.txt

Commit on local repo : git commit -m “commit-message”

Create a repository on github and copy the url link
Link Up : git remote add origin URLofRepository [ origin or any other suitable name]
Verify : git remote -v

Push commits to remote : git push origin master
Push commits to remote by force : git push origin master --force  [ Not recommended, use only for first commit ] 

Fetching from repository : git fetch origin
Merging fetched data with local files : git merge origin
With branch : git merge origin/[current-branch-name]
Both should be used while fetching
Fetching and Merging at the same time : git pull origin


## Cloning a GitHub project
Clone Project : git clone PROJECT URL
Install Composer : composer install
Import npm packages : npm install
Copy and edit .env file from .env.example file : cp .env.example .env
Generate Project Key : php artisan key:generate
*Storage Link in case it was used : php artisan storage:link
*Copy files that were manually copied to /storage for use
*Create Database and configure database section in .env file
* Migration : php artisan migrate
Run Project : php artisan serve


## Copying entire project file
1. Copy project folder in htdocs directory of xampp
2. Create Database and migrate (Configure .env file based database)
3. Delete storage folder under public directory
4. Run : php artisan storage:link
5. Run : php artisan serve
6. Goto : http://127.0.0.1:8000