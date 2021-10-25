# description
    - Website nội thất

# install & setup 
    - step 1: copy file .env.example => save as thành .env
    - step 2: tạo database furniture_db
    - step 3: composer install
    - step 4: php artisan migrate
    - step 5: php artisan db:seed --class=RoleTableSeeder
    - step 6: php artisan db:seed --class=UsersTableSeeder
    - step 7: php artisan db:seed --class=ConfigTableSeeder
    - step 8: php artisan storage:link
    - step 9: file hosts: 127.0.0.1 website-ant-furniture.test
    - step 9: tạo domain: website-ant-furniture.test
    - step 10: http://website-ant-furniture.test/admin
        + u: admin@gmail.com
        + p: 123456789
 