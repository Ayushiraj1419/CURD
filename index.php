<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="css/stylle.css">

    <script src="js/index.js"></script>



</head>
<body>
    <div class="container mt-5">
         <h1 class="alert-info text-center mb-5 py-3">CURD OPERATION</h1>
         <div class="row">
            <form action="" class="col-sm-5" id="myform" method="post">
                <h3 class="alert-warning  text-center py-2">
                    Add/Update Student
                </h3>
                <div>
                    <input type="text" name="" id="stu-id" class="corm-control" style="display:none" />
                    <label for="name-id" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div>
                    <label for="name-id" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div>
                    <label for="name-id" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary" type="submit" id="addbtn">Save</button>
                </div>
                <div id="msg"></div>
            </form>

            <div class="col-sm-7 text-center">
                <h3 class="alert-warning p-2">Show Student Information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
         </div>
    </div>
</body>
</html>