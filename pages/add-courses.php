<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <link rel="stylesheet" href="assets/css/courses.css">
</head>
<body>
    <div class="main-container">
    <div id="add-course" class="left-section">
        <h2>Add Courses</h2>
        <!-- Form Section for Adding Course -->
        <form id="add-course-form">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>
            
            <label for="course_code">Course Code:</label>
            <input type="text" id="course_code" name="course_code" required pattern="[A-Z]{3}\d{3}" 
                   title="Course code should be in the format ABC123">
            
            <label for="credits">Credits:</label>
            <input type="number" id="credits" name="credits" required min="1" 
                   title="Credits must be a positive number">
            
           
            
            <!-- <input type="date" id="start_date" name="start_date" required /> -->
            
            
            <button type="submit" >Add Course</button>
        </form>
    </div>

    <div id="submitted-course" class="right-section">
        <!-- Table Section to Display Courses -->
        <h2>Courses</h2>
        <table id="courses-table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Credits</th>
                </tr>
            </thead>
            <tbody>
                <!-- Course rows will be dynamically inserted here -->
            </tbody>
        </table>
    </div>

    <!-- Edit Course Modal -->
    <div id="edit-modal" class="modal">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2>Edit Course</h2>
        <form id="edit-form">
            <label for="edit_course_name">Course Name:</label>
            <input type="text" id="edit_course_name" name="course_name" required>
            
            <label for="edit_course_code">Course Code:</label>
            <input type="text" id="edit_course_code" name="course_code" required pattern="[A-Z]{3}\d{3}">
            
            <label for="edit_credits">Credits:</label>
            <input type="number" id="edit_credits" name="credits" required min="1">

            
            <input type="hidden" id="edit_course_id" name="id">
            
            <button type="submit">Save Changes</button>
        </form>
    </div>
    </div>

    <script src="assets/js/courses.js"></script>
   <script>
    
    let selectedProgram = '';

function redirectToProgramPage(program) {
    if (!program) return; // Exit if no value is selected
    selectedProgram = program; // Store the program value
    console.log("Program Selected: ", program);
}
document.getElementById('add-course-btn').addEventListener('click', function () {
    console.log("HII")
    if (!selectedProgram) {
        alert("Please select a program before adding a course.");
        return;
    }
    
    console.log("Program is Selected (selected program): ", selectedProgram);

    // Redirect to the target page with the selected program
       const urlParams = new URLSearchParams(window.location.search);
            const currentPage = urlParams.get('page') || 'home';
            const allowedPages = ['dashboard', 'add-courses', 'add-outcomes', 'add-questions', 'home'];

            if (allowedPages.includes(currentPage)) {
                window.location.href = ?page=${currentPage}&program=${selectedProgram};
            } else {
                console.log("Invalid page");
            }
});
</script>

</body>
</html>