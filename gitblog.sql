CREATE TABLE `Comment` (
  `id` int(10) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime ,
  `post_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `Post` (
  `id` int(10) NOT NULL,
  `title` varchar(45) NOT NULL,
  `contenu` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime ,
  `autor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_unicode_ci;

CREATE TABLE `User` (
  `id` int(10) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `Post`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE `Post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE `User`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
