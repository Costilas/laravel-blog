up:	artisan own

artisan:
	docker exec laravel_blog_php-fpm_1 $(COM)

own:
	docker exec laravel_blog_php-fpm_1 chown 1000:1000 -R ./
