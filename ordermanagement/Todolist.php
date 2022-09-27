<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/todostyle.css">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--JQUERY-->
    <script src="js/jquery-ui.min.js"></script>

    <title></title>
</head>
<body>
<div class="wrapper">
    <h2 class="title">Todo List</h2>
    <div class="inputFields">
        <input type="text" id="taskValue" placeholder="Enter a task.">
        <button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
    </div>
    <div class="content">
        <ul id="tasks">

        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Show Tasks
        function loadTasks() {
            $.ajax({
                url: "show-tasks.php",
                type: "POST",
                success: function(data) {
                    $("#tasks").html(data);
                }
            });
        }

        loadTasks();

        // Add Task
        $("#addBtn").on("click", function(e) {
            e.preventDefault();

            var task = $("#taskValue").val();

            $.ajax({
                url: "add-task.php",
                type: "POST",
                data: {task: task},
                success: function(data) {
                    loadTasks();
                    $("#taskValue").val('');
                    if (data == 0) {
                        alert("Something went wrong . Please try again.");
                    }
                }
            });
        });

        // Remove Task
        $(document).on("click", "#removeBtn", function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: "remove-task.php",
                type: "POST",
                data: {id: id},
                success: function(data) {
                    loadTasks();
                    if (data == 0) {
                        alert("Something wrong went. Please try again.");
                    }
                }
            });
        });
    });
</script>
</body>
</html>