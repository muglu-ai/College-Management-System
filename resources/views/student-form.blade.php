<!DOCTYPE html>
<html>
<head>
    <title>Student Data API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">College Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Course.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student-form') }}">Student Data API</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
<h1>Student Data API</h1>
    <br>


    <div>
        <label for="prn">Enter PRN:</label>
        <input type="text" id="prn" placeholder="Student PRN">
        <button onclick="getStudentData()">Get Student Data</button>
    </div>

    <div id="result"></div>

    <script>
        function getStudentData() {
            const prn = document.getElementById('prn').value;

            fetch(`http://127.0.0.1:8000/api/student/101`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {

                    displayStudentData(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function displayStudentData(data) {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = ''; // Clear previous results

            if (data.error) {
                resultDiv.innerHTML = `<p>${data.error}</p>`;
            } else {
                const student = data.data;

                resultDiv.innerHTML = `
                    <p><strong>Student Name:</strong> ${student.Name}</p>
                    <p><strong>Enrolled Course:</strong> ${student.enrollments[0].course.CourseName}</p>
                    <p><strong>Subjects and Marks:</strong></p>
                    <ul>
                        ${student.marks.map(mark => `<li>${mark.subject.SubjectName}: Semester 1 - ${mark.semester.SemesterID === 1 ? mark.MarksReceived : '-'}, Semester 2 - ${mark.semester.SemesterID === 2 ? mark.MarksReceived : '-'}</li>`).join('')}
                    </ul>
                `;
            }
        }
    </script>
</div>
