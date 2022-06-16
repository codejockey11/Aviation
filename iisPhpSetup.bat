"C:\Program Files (x86)\IIS Express\appcmd.exe" set config /section:system.webServer/fastCGI /+[fullPath='"C:\Users\junk_\Documents\php-8.0.0\php-cgi.exe"']
"C:\Program Files (x86)\IIS Express\appcmd.exe" set config /section:system.webServer/handlers /+[name='PHP_via_FastCGI',path='*.php',verb='*',modules='FastCgiModule',scriptProcessor='"C:\Users\junk_\Documents\php-8.0.0\php-cgi.exe"',resourceType='Unspecified']

PAUSE