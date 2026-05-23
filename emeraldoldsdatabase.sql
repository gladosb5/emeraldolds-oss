-- Schema-only SQL dump
-- Data rows and identifying dump metadata removed.

--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Table structure for table `absent`
--

CREATE TABLE `absent` (
  `id` bigint NOT NULL,
  `userid` int NOT NULL,
  `icon` text NOT NULL,
  `gameid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Badge',
  `description` varchar(2048) NOT NULL DEFAULT 'Description',
  `thumb` varchar(256) NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint NOT NULL,
  `text` varchar(9999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'placeholder',
  `color` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `textcolor` tinyint(1) NOT NULL,
  `uploader` bigint NOT NULL DEFAULT '12'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `id` int NOT NULL,
  `userid` bigint DEFAULT NULL,
  `time` bigint DEFAULT NULL,
  `WhenReported` bigint DEFAULT NULL,
  `type` int DEFAULT NULL,
  `reason` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Do not create accounts for the purpose of breaking the rules.',
  `haveAnythingElse` int NOT NULL DEFAULT '0',
  `IsAssetBan` int NOT NULL DEFAULT '0',
  `IsProfanityBan` int NOT NULL DEFAULT '0',
  `unknownReason` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Source` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'notset',
  `ExtraBanReason` varchar(256) COLLATE utf8mb4_general_ci DEFAULT 'No extra content',
  `IP` varchar(256) COLLATE utf8mb4_general_ci DEFAULT 'notset',
  `BannedFromRegistration` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brainrot_leaderboard`
--

CREATE TABLE `brainrot_leaderboard` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `points` int NOT NULL,
  `uploader` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `description` varchar(1000) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `creatorid` int NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `buywith` enum('tix','robux') CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT 'tix',
  `buywith2` enum('tix','robux') DEFAULT NULL,
  `price` int DEFAULT NULL,
  `price2` int DEFAULT NULL,
  `type` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL DEFAULT 'hat',
  `modelc` varchar(30) DEFAULT NULL,
  `sale` int NOT NULL DEFAULT '0',
  `pending` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;


-- --------------------------------------------------------

--
-- Table structure for table `catalog_comments`
--

CREATE TABLE `catalog_comments` (
  `id` int NOT NULL,
  `userid` bigint DEFAULT NULL,
  `itemid` bigint DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timeout` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog_favorites`
--

CREATE TABLE `catalog_favorites` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `item` int NOT NULL,
  `type` int NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `chatlogs`
--

CREATE TABLE `chatlogs` (
  `id` int NOT NULL,
  `gameid` int NOT NULL,
  `userid` int NOT NULL,
  `msg` varchar(2555) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int NOT NULL,
  `author` int NOT NULL,
  `reply_to` int NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `content` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time_posted` bigint NOT NULL,
  `category` int NOT NULL,
  `is_pinned` int NOT NULL DEFAULT '0',
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `is_important` tinyint(1) NOT NULL DEFAULT '0',
  `is_announcement` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `forum_groups`
--

CREATE TABLE `forum_groups` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sort_order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  `parent` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `forum_views`
--

CREATE TABLE `forum_views` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int NOT NULL,
  `user_from` int NOT NULL,
  `user_to` int NOT NULL,
  `arefriends` int NOT NULL,
  `hash` varchar(255) NOT NULL,
  `time_friended` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `gamekeys`
--

CREATE TABLE `gamekeys` (
  `id` int NOT NULL,
  `gamekeys` varchar(2500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `used` int NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'None',
  `creator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `used_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE armscii8_bin NOT NULL,
  `description` mediumtext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `creator_id` int NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visits` int NOT NULL DEFAULT '0',
  `copy` tinyint(1) NOT NULL DEFAULT '1',
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `secretkey` varchar(128) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;


-- --------------------------------------------------------

--
-- Table structure for table `games_favorites`
--

CREATE TABLE `games_favorites` (
  `id` int NOT NULL,
  `userid` int DEFAULT NULL,
  `game` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `game_comments`
--

CREATE TABLE `game_comments` (
  `id` int NOT NULL,
  `userid` bigint DEFAULT NULL,
  `itemid` bigint DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timeout` int NOT NULL DEFAULT '0',
  `reply_to` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `ipbans`
--

CREATE TABLE `ipbans` (
  `id` int NOT NULL,
  `ip` varchar(255) NOT NULL,
  `endtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `login_throttle`
--

CREATE TABLE `login_throttle` (
  `id` int UNSIGNED NOT NULL,
  `scope` enum('ip','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` int UNSIGNED NOT NULL DEFAULT '0',
  `last_attempt` datetime NOT NULL,
  `locked_until` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `user_from` int NOT NULL,
  `user_to` int NOT NULL,
  `subject` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL,
  `datesent` int NOT NULL,
  `reada` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` int NOT NULL DEFAULT '0',
  `isfriendreq` int NOT NULL DEFAULT '0',
  `item_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `ownedbadges`
--

CREATE TABLE `ownedbadges` (
  `id` int NOT NULL,
  `badgeid` int NOT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `owned_items`
--

CREATE TABLE `owned_items` (
  `id` int NOT NULL,
  `itemid` int NOT NULL,
  `ownerid` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `time_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_purchased_timeout` bigint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int NOT NULL,
  `userid` bigint DEFAULT NULL,
  `itemid` bigint DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timeout` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int NOT NULL,
  `players` int NOT NULL DEFAULT '0',
  `game_id` int NOT NULL DEFAULT '0',
  `session` int DEFAULT '0',
  `port` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int NOT NULL,
  `lastUsed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `csrfToken` varchar(2500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(2500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `userId` bigint DEFAULT NULL,
  `sessionId` varchar(2500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `useragent` varchar(2500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int NOT NULL,
  `maintenance` int NOT NULL DEFAULT '0',
  `registerClosed` int NOT NULL DEFAULT '0',
  `adsenabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_hash` varchar(2500) DEFAULT NULL,
  `password_salt` varchar(2500) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `robux` bigint NOT NULL DEFAULT '0',
  `tix` bigint NOT NULL DEFAULT '15',
  `JoinDate` varchar(256) NOT NULL DEFAULT 'Unknown',
  `administrator` varchar(255) NOT NULL DEFAULT 'no',
  `MembershipType` varchar(255) NOT NULL DEFAULT 'None',
  `MembershipExpire` bigint NOT NULL DEFAULT '0',
  `lastseen` int NOT NULL DEFAULT '1699043050',
  `blurb` varchar(50000) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL DEFAULT 'Hello, World!',
  `token` varchar(255) NOT NULL DEFAULT 'notset',
  `Head` int NOT NULL DEFAULT '24',
  `RA` int NOT NULL DEFAULT '24',
  `Torso` int NOT NULL DEFAULT '21',
  `LA` int NOT NULL DEFAULT '24',
  `RL` int NOT NULL DEFAULT '37',
  `LL` int NOT NULL DEFAULT '37',
  `face` bigint NOT NULL DEFAULT '-1',
  `IP` varchar(256) NOT NULL DEFAULT 'notset',
  `next_tix_reward` bigint NOT NULL DEFAULT '0',
  `next_bux_reward` int NOT NULL DEFAULT '0',
  `isBeta` int NOT NULL DEFAULT '1',
  `Knockouts` bigint NOT NULL DEFAULT '0',
  `Wipeouts` bigint NOT NULL DEFAULT '0',
  `discordId` bigint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;


-- --------------------------------------------------------

--
-- Table structure for table `user_views`
--

CREATE TABLE `user_views` (
  `id` int NOT NULL,
  `userid` bigint DEFAULT NULL,
  `viewerid` bigint DEFAULT NULL,
  `time_viewed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


-- --------------------------------------------------------

--
-- Table structure for table `wear`
--

CREATE TABLE `wear` (
  `id` int NOT NULL,
  `item` bigint DEFAULT NULL,
  `userid` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `absent`
--
ALTER TABLE `absent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brainrot_leaderboard`
--
ALTER TABLE `brainrot_leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_comments`
--
ALTER TABLE `catalog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_favorites`
--
ALTER TABLE `catalog_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatlogs`
--
ALTER TABLE `chatlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_groups`
--
ALTER TABLE `forum_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_views`
--
ALTER TABLE `forum_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamekeys`
--
ALTER TABLE `gamekeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games_favorites`
--
ALTER TABLE `games_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_comments`
--
ALTER TABLE `game_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipbans`
--
ALTER TABLE `ipbans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_throttle`
--
ALTER TABLE `login_throttle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_scope_identifier` (`scope`,`identifier`),
  ADD KEY `idx_last_attempt` (`last_attempt`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownedbadges`
--
ALTER TABLE `ownedbadges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owned_items`
--
ALTER TABLE `owned_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_views`
--
ALTER TABLE `user_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wear`
--
ALTER TABLE `wear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absent`
--
ALTER TABLE `absent`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brainrot_leaderboard`
--
ALTER TABLE `brainrot_leaderboard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog_comments`
--
ALTER TABLE `catalog_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog_favorites`
--
ALTER TABLE `catalog_favorites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatlogs`
--
ALTER TABLE `chatlogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_groups`
--
ALTER TABLE `forum_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_views`
--
ALTER TABLE `forum_views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamekeys`
--
ALTER TABLE `gamekeys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games_favorites`
--
ALTER TABLE `games_favorites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_comments`
--
ALTER TABLE `game_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipbans`
--
ALTER TABLE `ipbans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_throttle`
--
ALTER TABLE `login_throttle`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ownedbadges`
--
ALTER TABLE `ownedbadges`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owned_items`
--
ALTER TABLE `owned_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_views`
--
ALTER TABLE `user_views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wear`
--
ALTER TABLE `wear`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
