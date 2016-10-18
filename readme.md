# MAME in Kirby

## Prerequisites

 - You need node js installed to execute the gulp tasks
 - you need PHP (at leaset 5.4) installed to run the website

## Getting started 

Clone and install dependencies

```
git clone ssh://git@code.lcv.space:23/roman/kirby-mame.git
cd kirby-mame
npm install -g gulp
npm install

```

Run gulp (compiles sass to css)

```
gulp 
```

Run PHP

You can use any installation of XAMPP or similar, or you can use the PHP command line utility to create a "development server" like this:

```
php -S localhost:3000 
```

Otherwise do everything at once

```
gulp & php -S localhost:3000
```

The website should now be functional, open browser at http://localhost:3000

## Install panel
The repository doesn't contain user info, Kirby will ask you to create your first user when you go to http://localhost:3000/panel


## Permission on the supsi server
On the SUPSI server the following folder permissions have to be specified in the file /dacd_mci/conf/setperm.local.d/sample.cfg

```
site/accounts/=777
thumbs/=777
assets/avatars/=777
content/=777
site/accounts/.logins=666
```
