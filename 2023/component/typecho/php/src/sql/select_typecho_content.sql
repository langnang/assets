SELECT
	*
FROM
	`:dbname`.`:tbname`
WHERE
	`cid` = ?
	OR `title` = ?
	AND `text` = ?

