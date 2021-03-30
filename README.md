# Installation

### Add repository to composer.json
 ```json
     "repositories" : [
        {
           "url" : "git@github.com:komakino/mando.git",
           "type" : "vcs"
        }
     ],
```

### Add the package as a requirement:
```json
"komakino/mando": "^1.0.0"
```

### Run a composer update:
```bash
composer update
```
### Run a migration:
```bash
artisan migrate
```

### Publish the seeder:
Note! This was built for Laravel 8. The seeders path was changed between 7 and 8 so this will publish to the wrong path for Laravel <8. To fix this, after the publish, move the seeder from `database/seeders` to `database/seeds` and update the namespace in the seeder accordingly.
```bash
artisan vendor:publish --tag=mando-seeder
```

### Run the seeder:
```bash
artisan db:seed --class=MandoCharacterSeeder
```

### Results
Head to `http://localhost/mando/character/1` (or whichever domain you use)
