first:
	@make clean
	@make build
	@make up
	docker compose exec app composer install
	docker compose exec app cp .env.example .env
	docker compose exec app php artisan key:generate
	docker compose exec app php artisan storage:link
	docker compose exec app chmod -R 777 storage bootstrap/cache
	@make fresh
	@make front
install:
	@make clean
	@make build
	@make up
	docker compose exec app composer install
	@make front
	@make fresh
clean:
	docker compose down --rmi all --volumes --remove-orphans
build:
	docker compose build --no-cache --force-rm
up:
	docker compose up -d
down:
	docker compose down
fresh:
	docker compose exec app php artisan migrate:fresh --seed
front:
	docker compose exec app npm install
	docker compose exec app npm run build
test:
	docker compose exec app php artisan test
	docker compose exec app npm run test
