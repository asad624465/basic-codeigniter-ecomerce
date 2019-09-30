	
<div class="box round first grid">
    <h2>Add New Product</h2>
    <div class="block">               
     <form action="" method="" enctype="multipart/form-data">
        <table class="form">
            <tr>
                <td>
                    <label>Mamuficture Name</label>
                </td>
                <td>
                    <select id="select" name="select">
                        <option value="<?php //echo $val->cat_id?>">Category One</option>
                        <option value="2">Category Two</option>
                        <option value="3">Cateogry Three</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Product Image</label>
                </td>
                <td>
                    <input type="file" name="product_img" />
                </td>
            </tr>  
			<tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

