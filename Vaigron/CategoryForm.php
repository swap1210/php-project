<link href="style/style.css" rel="stylesheet"/>
<div id="CategoryForm">
    
    <form method="post" enctype="multipart/form-data" action="insertCategory.php">
        <table>
            <tr> <td> Enter Category Name </td> <td> <input type="text" name="txtCatName"> </td> </tr>
            <tr> <td> Enter Display Category Name </td> <td> <input type="text" name="txtCatDisplayName"> </td> </tr>
            <tr> <td> Choose Category Image </td> <td> <input type="file" name="CatImage"> </td> </tr>
            <tr> <td style="text-align:center"> <input type="submit" name="Submit" value="OK"> </td> <td> <input type="reset" name="Cancel" value="CANCEL"> </td> </tr>
            </table>
    </form> 
    
    
</div><!--end of CategoryForm-->