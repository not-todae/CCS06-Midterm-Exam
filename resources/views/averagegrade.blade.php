!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Grades</title>
</head>
<body>
<div class="container-sm">
    <h1>Students Average Scores</h1>

    <table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Student</th>
        <th scope="col">Midterm Grade<th>
        <th scope="col">Finals Grade<th>
        <th score="co">Average Grade<th>
    </tr>
    </thead>
    <tr>
        <td>{{ $student_1 }}</td>
        <td>{{ $student1_midterm }}</td>
        <td>{{ $student1_finals }}</td>
        <td>{{ $student1_average }}</td>
    </tr>
    <tr>
        <td>{{ $student_2 }}</td>
        <td>{{ $student2_midterm }}</td>
        <td>{{ $student2_finals }}</td>
        <td>{{ $student2_average }}</td>
    </tr>
    <tr>
        <td>{{ $student_3 }}</td>
        <td>{{ $student3_midterm }}</td>
        <td>{{ $student3_finals }}</td>
        <td>{{ $student3_average }}</td>
    </tr>
    <tr>
        <td>{{ $student_4 }}</td>
        <td>{{ $student4_midterm }}</td>
        <td>{{ $student4_finals }}</td>
        <td>{{ $student4_average }}</td>
    </tr>
    <tr>
        <td>{{ $student_5 }}</td>
        <td>{{ $student5_midterm }}</td>
        <td>{{ $student5_finals }}</td>
        <td>{{ $student5_average }}</td>
    </tr>
</body>
</html>
