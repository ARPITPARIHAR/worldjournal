<!DOCTYPE html>
<html>
<head>
    <title>Call for Paper Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="callforpapercontainer">
        <h2 class="text-center">Call for Paper Submission</h2>
        <form>
            <div class="row mb-3">
                <label for="journalTitle" class="col-sm-2 col-form-label">Journal Title</label>
                <div class="col-sm-10">
                    <input type="text" name="journalTitle" id="journalTitle" class="form-control" placeholder="Enter Journal Title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="issnNumber" class="col-sm-2 col-form-label">ISSN Number</label>
                <div class="col-sm-10">
                    <input type="text" name="issnNumber" id="issnNumber" class="form-control" placeholder="Enter ISSN Number">
                </div>
            </div>
            <div class="row mb-3">
                <label for="submissionDeadline" class="col-sm-2 col-form-label">Submission Deadline</label>
                <div class="col-sm-10">
                    <input type="date" name="submissionDeadline" id="submissionDeadline" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="notificationDue" class="col-sm-2 col-form-label">Notification Due</label>
                <div class="col-sm-10">
                    <input type="date" name="notificationDue" id="notificationDue" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="finalVersionDue" class="col-sm-2 col-form-label">Final Version Due</label>
                <div class="col-sm-10">
                    <input type="date" name="finalVersionDue" id="finalVersionDue" class="form-control">
                </div>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>


<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.callforpapercontainer {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    color: #007bff;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.submit-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.submit-button:hover {
    background-color: #0056b3;
}




        </style>