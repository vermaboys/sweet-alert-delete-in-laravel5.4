# sweet-alert-delete-in-laravel5.4

## You can get full laravel project of sweet alert delete using git clone

Step1:- Run command on terminal git clone https://github.com/vermaboys/sweet-alert-delete-in-laravel5.4.git

Step2:- Run command on terminal php artisan migrate

Step3:- Run command on terminal php artisan db:seed

```
Step4:- you can access using http://localhost/sweet-alert/student-record
```

## You can also write code of sweet alert delete using following steps:-

Step1:- Copy 2018_05_13_110316_student file in database\migrations folder and paste in your database\migrations folder 

Step2:- Copy Student Model in app folder and paste in your app folder

Step3:- Copy all code of DatabaseSeeder file in database\seeds folder and paste in your DatabaseSeeder file in database\seeds folder

Step4:- Run command on terminal php artisan migrate

Step5:- Run command on terminal php artisan db:seed

Step6:- Copy Routes which is given below and paste in your web.php file

```
Route::get('/student-record', 'StudentController@getStudentRecord');
Route::get('/delete-student/{id}', 'StudentController@deleteStudentRecord');
```

Step7:- Copy StudentController in app\Http\Controllers folder and paste in your app\Http\Controllers folder

Step8:- Copy student_record.blade file in resources\views folder and paste in your resources\views folder
```
Step9:- You can access using http://localhost/sweet-alert/student-record
```