-- Targeted indexes to support high-traffic emeraldnews pages
-- Run once in production (MySQL 5.7+/8.0)

ALTER TABLE `users`
    ADD INDEX `idx_users_username` (`username`);

ALTER TABLE `games`
    ADD INDEX `idx_games_creator_id` (`creator_id`);

ALTER TABLE `servers`
    ADD INDEX `idx_servers_game_id` (`game_id`);

ALTER TABLE `games_favorites`
    ADD INDEX `idx_games_favorites_game` (`game`);
