
# lasca-file-manager

Kcfinder [https://github.com/sunhater/kcfinder] adaptation as Laravel 5.3 package  

## Install     
```
composer require neyromanser/lasca-file-manager 
composer update    
```    

### Register in config/app.php   
```php   
// Provider   
Neyromanser\LascaFileManager\LascaFileManagerServiceProvider::class,
// Facade   
'FileManager' => Neyromanser\LascaFileManager\LascaFileManagerFacade::class,
```

### Publish
```  
php artisan vendor:publish --provider="Neyromanser\LascaFileManager\LascaFileManagerServiceProvider"   
```
  
