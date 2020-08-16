<!-- @swap1210
I've sed bootstrap her to give dynamic resizing to the entire form
-->

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="style/style.css" rel="stylesheet"/>
<div id="CategoryForm">
    
    <form method="post" enctype="multipart/form-data" action="insertCategory.php">
    <div class="row">
        <div class="col">
            <label for="txtCatNameid">Enter Category Name</label>
        </div>
        <div class="col">
            <input class="form-control" type="text" name="txtCatName" id="txtCatNameid">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <label for="txtCatDisplayNameid">Enter Display Category Name</label>
        </div>
        <div class="col">
            <input class="form-control"  type="text" name="txtCatDisplayName" id="txtCatDisplayNameid"> 
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <label for="CatImageid">Choose Category Image</label>
        </div>
        <div class="col"> <input type="file" name="CatImage" id="CatImageid"> 
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-center">
        <div class="p-2">
                <input type="submit" name="Submit" value="OK">  
        </div>
        <div class="p-2">
                <input type="reset" name="Cancel" value="CANCEL"> 
        </div>
    </div>
    </form> 
    
</div><!--end of CategoryForm-->