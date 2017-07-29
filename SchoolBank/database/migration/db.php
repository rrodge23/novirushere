
users table
-UID
-username
-password

====================
user_info table
-AID
-firstname
-middlename
-lastname
-email
-address
-contact_no
-user_level
-stat
-created_at
-updated_at
*foreign key user_info(UID)
*foreign key user_dept(DID)
===================
user_dept table
-DID
-dept_name