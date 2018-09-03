<?php
            
$mysqli = new mysqli("localhost", "root", "Aa9810931255", "libraryManagmentSystem");

$first_name = mysqli->query(SELECT first_name FROM student);
$last_name = mysqli->query(SELECT last_name FROM student);
$phone_number = mysqli->query(SELECT phone_number FROM student);
$enrollment_number = mysqli->query(SELECT enrollment_number FROM student);
$course_enrolled = mysqli->query(SELECT course_enrolled FROM student);
$branch = mysqli->query(SELECT branch FROM student);
$Book1 = mysqli->query(SELECT Book1 FROM student);
$Book2 = mysqli->query(SELECT Book2 FROM student);
$Book3 = mysqli->query(SELECT Book3 FROM student);
$fine_on_books = mysqli->query(SELECT  fine_on_books FROM student);
$due_date_book1 = mysqli->query(SELECT due_date_book1 FROM student);
$due_date_book2 = mysqli->query(SELECT due_date_book2 FROM student);
$due_date_book3 = mysqli->query(SELECT due_date_book3 FROM student);
$email_id = mysqli->query(SELECT email_id FROM student);
$student_image = mysqli->query(SELECT student_image FROM student);

?>