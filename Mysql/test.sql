SELECT user_id as id, first_name, last_name, avarage AS avarage_correct, time_taken
FROM (
    SELECT user.user_id, user.first_name, user.last_name, AVG(test_result.correct) as avarage, MAX(test_result.time_taken) AS time_taken
    FROM test_result
    RIGHT JOIN user ON test_result.user_id = user.user_id
    GROUP BY user_id
    ) as t
GROUP BY user_id