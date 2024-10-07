rebuild:
	@docker compose down
	@docker compose up --build

connect:
	@docker compose exec app bash