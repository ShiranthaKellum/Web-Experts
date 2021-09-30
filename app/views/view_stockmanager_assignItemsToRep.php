<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles/assignItemsToRep.css">
    <title>Test</title>
</head>

<body>
    <?php require 'view_headerType.php'; ?>

    <br><br><br><br><br>

    <fieldset class="mainFieldset">
        <legend class="legendRepName">
            <h1>Rep Name</h1>
        </legend><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>test Product</td>
                    <td>150</td>
                    <td>
                        <button class="btnEdit">Edit</button>
                        <button class="btnDelete">Delete</button>
                    </td>

                </tr>
            </tbody>

            <tr>
                <td>1</td>
                <td>test Product</td>
                <td>150</td>
                <td>
                    <button class="btnEdit">Edit</button>
                    <button class="btnDelete">Delete</button>
                </td>

            </tr>

            <tr>
                <td>1</td>
                <td>test Product</td>
                <td>150</td>
                <td>
                    <button class="btnEdit">Edit</button>
                    <button class="btnDelete">Delete</button>
                </td>

            </tr>

            <tr>
                <td>1</td>
                <td>test Product</td>
                <td>150</td>
                <td>
                    <button class="btnEdit">Edit</button>
                    <button class="btnDelete">Delete</button>

                </td>

            </tr>

        </table>

        <br><br>

        <div class="formDiv">
            <fieldset class="formFieldset">
                <legend class="legendAddHere"><b>Add Here</b></legend>

                <br>

                <div class="productIdDiv">
                    <label class="labelProductId" for="productId">Product Id</label>
                    <input class="inputProdutId" type="text" name="productId">

                </div><br>

                <div class="productNameDiv">
                    <label class="labelProductName" for="productName">Product Name</label>
                    <input class="inputProdutName" type="text" name="productName">

                </div><br>

                <div class="quantityDiv">
                    <label class="labelQuantity" for="quantity">Quantity</label>
                    <input class="inputQuantity" type="text" name="quantity">

                </div><br>

                <div class="btnAddDiv">
                    <button class="btnAdd">Add</button>

                </div>

                <br>

            </fieldset>

        </div><br>

    </fieldset>


</body>

</html>
