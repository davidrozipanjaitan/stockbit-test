SELECT id, user_name,
CASE
    WHEN parent='1' THEN (SELECT user_name FROM `user` WHERE id='1')
    WHEN parent='2' THEN (SELECT user_name FROM `user` WHERE id='2')
		WHEN parent='3' THEN (SELECT user_name FROM `user` WHERE id='3')
    ELSE NULL
END AS 'ParentUserName'
FROM `user`;