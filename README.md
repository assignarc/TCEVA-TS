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