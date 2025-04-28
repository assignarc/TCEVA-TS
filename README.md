 - Start the server 
   >symfony server:start --document-root=public_html    
-  Clear Cache
   > php bin/console cache:clear 
- Check Cache autowiring
   >php bin/console debug:autowiring cache
- Install Symfony CLI
   >brew install symfony-cli/tap/symfony-cli
- Routes check
   >php bin/console debug:router

- Configuration 
   ############### TCEVA SETTINGS ######################
   > PUBLIC_DIR="public_html"
   > Add below Entries in your .env files 
   > Depending on your environment. .env.local, .env.prod, .env.dev 
   > Update DATABASE_URL and individual DB_* configs as well. 
   > DATABASE_URL="mysql://<<UserName>>:<<password>>@<<host>>:<<Port>>/<<DBName>>?serverVersion=8&charset=utf8mb4" 
   > DB_NAME="" 
   > DB_USERNAME=""
   > DB_PASSWRD=""
   > DB_HOST_NAME=""
   > DB_PORT=""
   > MAILER_DSN="smtp:/<<EMAIL_SMTP_USER>>:<<SMTP_USER_PASSWORD>>@<<SMTP_SERVER>>:<<SMTP_PORT>>>"
   ############### TCEVA SETTINGS ######################
