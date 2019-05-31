<?php
    require('func.php');

    if(isset($_POST['task'])){
        if(storeTask()){
            header('Location: index.php');
            exit();
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Todo list app</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card bg-info text-white">
                    <h5 class="card-header">TodoList App</h5>
                    <!-- TASKS -->
                    <ul class="list-group list-group-flush text-dark">
                        <?php foreach(loadTasks() as $task): ?>
                        <li class="list-group-item"><?php echo $task['task']; ?></li>
                        <?php endforeach ?>
                    </ul>
                    <!-- /TASKS -->

                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <!-- <label for="exampleInputTask">Task</label> -->
                                    <input name="task" type="text" class="form-control" id="exampleInputTask"
                                        placeholder="New Task...">
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="form-control btn btn-light">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        copyright &copy; <a href="https://github.com/masardee/dicoding-azure-submission1">masardee</a>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>