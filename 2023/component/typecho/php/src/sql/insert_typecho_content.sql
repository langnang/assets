INSERT INTO `:dbname`.`:tbname`
  (`title`, `created`, `modified`, `text`, `order`, `authorId`, `template`, `type`, `status`, `password`, `commentsNum`, `allowComment`, `allowPing`, `allowFeed`, `parent`)
VALUES
  (?, unix_timestamp(now()), unix_timestamp(now()), ?, 0, 1, NULL, 'post', 'publish', NULL, 1, '1', '1', '1', 0);
